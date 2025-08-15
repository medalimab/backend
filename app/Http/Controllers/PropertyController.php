<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PropertyController extends Controller
{
    // Affiche le formulaire d'édition
    public function edit($id)
    {
        $property = Property::findOrFail($id);
        return view('property.edit', compact('property'));
    }

    // Met à jour la propriété
    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        $validated = $request->validate([
            'property_name' => 'required|string|max:255',
            'property_id' => 'required|string|max:100',
            'description' => 'nullable|string',
            'address' => 'required|string|max:255',
            'developer' => 'nullable|string|max:255',
            'property_usage' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'property_size' => 'required|integer',
            'building_area' => 'nullable|numeric',
            'year_built' => 'nullable|integer',
            'handover_date' => 'nullable|string',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'garage' => 'nullable|integer',
            'property_type' => 'required|string|max:100',
            'property_status' => 'required|string|max:100',
            'amenities' => 'nullable|string',
            'property_furnishing' => 'required|string',
            'property_built_up_area'=> 'required|integer',
            'property_parking_availability'=> 'nullable|string',
            'building_name'=> 'nullable|string',
            'building_parking_spaces'=> 'nullable|integer',
            'number_elevators'=> 'nullable|integer',
            'swimming_pool'=> 'nullable|integer',
            'retail_centers'=> 'nullable|integer',
            'total_floors'=> 'nullable|integer',
            'agent_id' => 'required|exists:agents,id',
        ]);
        $property->update($validated);
        return redirect()->route('properties.list')->with('success', 'Property updated successfully!');
    }

    // Supprime la propriété
    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();
        return redirect()->route('properties.list')->with('success', 'Property deleted successfully!');
    }

        public function showHomePage()
        {
            Log::info("In show method with property ID");
            $properties = Property::orderBy('created_at', 'desc')->get();
        
            return view('pages.home-page', compact('properties'));
        }
        public function show($id)
        {
            Log::info("In show method with property ID: $id");
            // Look up the property by ID
            $property = Property::findOrFail($id);
        
            // If there is an image, return it as a response
            // if ($property->image) {
            //     return response($property->image, 200)
            //         ->header('Content-Type', 'image/jpeg'); // Adjust MIME type based on image format
            // }
        
            // Return the dynamic Blade template and pass the property to it
            return view('property.details', compact('property'));
        }
        public function grid()
        {   
            // Retrieve all properties, ordered by 'created_at' in descending order
            $properties = Property::orderBy('created_at', 'desc')->get();
        
            // Pass both properties and totalIncome to the view
            return view('property.grid', compact('properties'));
        }
        public function list()
        {
            // Retrieve all properties, ordered by 'created_at' in descending order
            $properties = Property::orderBy('created_at', 'desc')->get();
            Log::info('Properties Retrieved:', $properties->toArray());

            // Pass the properties to the list view
            return view('property.list', compact('properties'));
        }
            // Store new property in the database
            public function store(Request $request)
            {
                Log::info('Property Store Request Received:', $request->all());

                // Correction amenities : transformer en string si array
                if (is_array($request->amenities)) {
                    $request->merge(['amenities' => implode(',', $request->amenities)]);
                }

                try {
                    $validated = $request->validate([
                        'property_name' => 'required|string|max:255',
                        'property_id' => 'required|string|max:100|unique:properties,property_id',
                        'description' => 'nullable|string',
                        'address' => 'required|string|max:255',
                        'developer' => 'nullable|string|max:255',
                        'property_usage' => 'nullable|string|max:255',
                        'price' => 'required|numeric',
                        'property_size' => 'required|integer',
                        'building_area' => 'nullable|numeric',
                        'year_built' => 'nullable|integer',
                        'handover_date' => 'nullable|string',
                        'bedrooms' => 'required|integer',
                        'bathrooms' => 'required|integer',
                        'garage' => 'nullable|integer',
                        'property_type' => 'required|string|max:100',
                        'property_status' => 'required|string|max:100',
                        'amenities' => 'nullable|string',
                        'property_furnishing' => 'required|string',
                        'property_built_up_area'=> 'required|integer',
                        'property_parking_availability'=> 'nullable|string',
                        'building_name'=> 'nullable|string',
                        'building_parking_spaces'=> 'nullable|integer',
                        'number_elevators'=> 'nullable|integer',
                        'swimming_pool'=> 'nullable|integer',
                        'retail_centers'=> 'nullable|integer',
                        'total_floors'=> 'nullable|integer',
                        'pdf' => 'nullable|mimes:pdf|max:10240',
                        'dld_permit_number' => 'nullable|string',
                        'agent_id' => 'required|exists:agents,id',
                    ], [
                        'property_id.unique' => 'This Property ID already exists. Please choose a different one.',
                        'agent_id.required' => 'Veuillez sélectionner un agent.',
                        'agent_id.exists' => 'L agent sélectionné n existe pas.',
                    ]);
            
                    Log::info('Validation Passed');
            
                    $validated['user_id'] = Auth::id();
            
                    // Gestion upload ou génération du QR code DLD Permit
                    if ($request->hasFile('dld_permit_qr')) {
                        $qrPath = $request->file('dld_permit_qr')->store('dld_qr', 'public');
                        $validated['dld_permit_qr'] = $qrPath;
                    } elseif ($request->dld_permit_number) {
                        try {
                            $qrCode = new \Endroid\QrCode\QrCode($request->dld_permit_number);
                            $writer = new \Endroid\QrCode\Writer\PngWriter();
                            $result = $writer->write($qrCode);
                            $filename = 'dld_qr/' . uniqid() . '.png';
                            \Illuminate\Support\Facades\Storage::disk('public')->put($filename, $result->getString());
                            $validated['dld_permit_qr'] = $filename;
                        } catch (\Exception $e) {
                            Log::error('QR code generation failed: ' . $e->getMessage());
                        }
                    }

                    // Création de la propriété sans image principale
                    $property = Property::create($validated);

                    // Enregistrement des images liées
                    if ($request->hasFile('images')) {
                        foreach ($request->file('images') as $imageFile) {
                            $imagePath = $imageFile->store('properties', 'public');
                            $property->images()->create([
                                'image_url' => $imagePath,
                            ]);
                        }
                    }

                    // Handle PDF
                    if ($request->hasFile('pdf')) {
                        $pdfPath = $request->file('pdf')->store('pdfs', 'public');
                        $property->update(['pdf' => $pdfPath]);
                    }
            
                    Log::info('Property created successfully!', ['id' => $property->id]);
                    return redirect()->route('properties.show', $property->id)->with('success', 'Property created successfully!');
            
                } catch (\Illuminate\Validation\ValidationException $e) {
                    Log::error('Validation Failed:', $e->errors());
                    return back()->withErrors($e->errors())->withInput();
                } catch (\Exception $e) {
                    Log::error('Property Creation Failed: ' . $e->getMessage());
                    return back()->with('error', $e->getMessage())->withInput();
                }
            }
            
            
        public function show_listing_page_client() {
            $properties = Property::with('images')->orderBy('created_at', 'desc')->get() ; // Or find something specific
            Log::info('Properties Retrieved:', $properties->toArray());
            return view('pages.listing-page', [
                'properties' => $properties
            ]);
        }
        public function show_details_home($id)
        {
            Log::info("In show method with property ID: $id");
            // Look up the property by ID
            $property = Property::with('images')->findOrFail($id);
            
            // If there is an image, return it as a response
            // if ($property->image) {
            //     return response($property->image, 200)
            //         ->header('Content-Type', 'image/jpeg'); // Adjust MIME type based on image format
            // }
        
            // Return the dynamic Blade template and pass the property to it
            return view('pages.page-listing-single-v1', [
                'property' => $property,
                'images' => $property->images,
            ]);
        }

        public function search(Request $request)
        {   
            $query = Property::query();
            
            // Apply filters based on form inputs
            if ($request->filled('listing_status')&& $request->listing_status !== 'All') {
                if($request->listing_status =="Buy"){
                    $query->where('property_status', "Buy");
                }
                if($request->listing_status =="Rent"){
                    $query->where('property_status', "Rent");
                }
                if($request->listing_status =="off-plan"){
                    $query->where('property_status', "off-plan");
                }

                
                
            }
        
            if ($request->filled('location')) {
                $query->where('address', 'like', '%' . $request->location . '%');
            }

            // Filtrage property_completion supprimé
            if ($request->filled('home_type') ) {
                $query->where('property_type', $request->home_type);
            }
            if ($request->filled('beds') ) {
                $query->where('bedrooms', $request->beds);
            }
            if ($request->filled('baths') ) {
                $query->where('bathrooms', $request->baths);
            }
            if ($request->filled('mini_price')) {
                $query->where('price', '>=', (int)$request->mini_price);
            }
            if ($request->filled('max_price')) {
                $query->where('price', '<=', (int)$request->max_price);
            }
            if ($request->filled('mini_area')) {
                $query->where('property_built_up_area', '>=', (int)$request->mini_area);
            }
            if ($request->filled('max_area')) {
                $query->where('property_built_up_area', '<=', (int)$request->max_area);
            }
            if ($request->filled('developer')) {
                $query->where('developer', 'LIKE', '%' . $request->developer . '%');

            }
        
            // Add other filters...
        
            $properties = $query->with('images', 'user')->get();
        
            // Check if it's AJAX
            if ($request->ajax()) {
                return view('properties.partials.property_list', compact('properties'))->render();
            }

            else {
            return view('pages.listing-page', [
                'properties' => $properties
            ]);
        }
        }
}
