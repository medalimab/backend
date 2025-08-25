<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    // Affiche le formulaire d'ajout
    public function create()
    {
        return view('property.add');
    }

    // Rediriger vers la liste des propriétés existante
    public function index()
    {
        return redirect()->route('properties.list');
    }

    // Affiche le formulaire d'édition
    public function edit($id)
    {
        $property = Property::findOrFail($id);
        return view('property.edit', compact('property'));
    }

    // Met à jour la propriété
    public function update(Request $request, $id)
    {
        Log::info('Property Update Request Received:', ['id' => $id, 'data' => $request->all()]);
        
        $property = Property::findOrFail($id);
        
        try {
        
        // Validation conditionnelle pour handover_date
                $rules = [
            'property_name' => 'required|string|max:255',
            'property_id' => 'required|string|max:255',
            'property_type' => 'required|string',
            'property_status' => 'required|string',
            'property_size' => 'required|numeric|min:0',
            'bedrooms' => 'required|integer|min:0',
            'bathrooms' => 'required|integer|min:0',
            'building_parking_spaces' => 'required|integer|min:0',
            'property_furnishing' => 'required|string',
            'price' => 'required|numeric|min:0',
            'year_built' => 'nullable|integer|min:1800|max:' . date('Y'),
            'handover_date' => 'nullable|string|max:255',
            'address' => 'required|string',
            'description' => 'nullable|string',
            'amenities' => 'array',
            'amenities.*' => 'string',
            'agent_id' => 'nullable|integer|exists:agents,id',
            'property_built_up_area' => 'nullable|numeric|min:0',
            'property_parking_availability' => 'nullable|string',
            'developer' => 'nullable|string|max:255',
            'plot_area' => 'nullable|numeric|min:0',
            'pool_size' => 'nullable|numeric|min:0',
        ];

        $messages = [
            'handover_date.required' => 'La date de livraison est obligatoire pour les propriétés Off-plan.',
            'images.*.image' => 'Le fichier doit être une image.',
            'images.*.mimes' => 'L\'image doit être au format : jpeg, png, jpg, gif.',
            'images.*.max' => 'L\'image ne doit pas dépasser 5 MB.',
        ];

        // Vérifier qu'il y a au moins une image (existante ou nouvelle)
        $hasExistingImages = $property->images()->count() > 0;
        $hasNewImages = $request->hasFile('images');
        
        if (!$hasExistingImages && !$hasNewImages) {
            return back()->withErrors(['images' => 'Au moins une image est obligatoire pour la propriété.'])->withInput();
        }

        $validated = $request->validate($rules, $messages);
        
        // Transformer amenities array en string
        if (isset($validated['amenities']) && is_array($validated['amenities'])) {
            $validated['amenities'] = implode(',', $validated['amenities']);
        }
        
        // Mettre à jour la propriété
        $property->update($validated);
        
        // Gestion des nouvelles images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imageFile) {
                $imagePath = $imageFile->store('properties', 'public');
                $property->images()->create([
                    'image_url' => $imagePath,
                ]);
            }
        }
        
        return redirect()->route('properties.list')->with('success', 'Property updated successfully!');
        
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Property Update Validation Failed:', $e->errors());
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            Log::error('Property Update Failed: ' . $e->getMessage());
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    // Supprime la propriété
    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();
        return redirect()->route('properties.list')->with('success', 'Property deleted successfully!');
    }

    // Supprime une image spécifique d'une propriété
    public function deleteImage($propertyId, $imageId)
    {
        $property = Property::findOrFail($propertyId);
        $image = $property->images()->findOrFail($imageId);
        
        // Supprimer le fichier physique
        if ($image->image_url && Storage::disk('public')->exists($image->image_url)) {
            Storage::disk('public')->delete($image->image_url);
        }
        
        // Supprimer l'enregistrement de la base
        $image->delete();
        
        return back()->with('success', 'Image supprimée avec succès!');
    }

        public function showHomePage()
        {
            Log::info("In showHomePage method");
            $properties = Property::orderBy('created_at', 'desc')->get();
            Log::info("Properties count: " . $properties->count());
            
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
                    // Validation conditionnelle pour handover_date
                    $rules = [
                        'property_name' => 'required|string|max:255',
                        'property_id' => 'required|string|max:100|unique:properties,property_id',
                        'description' => 'nullable|string',
                        'address' => 'required|string|max:255',
                        'developer' => 'nullable|string|max:255',
                        'property_usage' => 'nullable|string|max:255',
                        'price' => 'required|numeric',
                        'property_size' => 'nullable|integer',
                        'building_area' => 'nullable|numeric',
                        'year_built' => 'nullable|integer',
                        'handover_date' => $request->property_status === 'Off-plan' ? 'required|string|max:100' : 'nullable|string|max:100',
                        'bedrooms' => 'required|integer',
                        'bathrooms' => 'required|integer',
                        'garage' => 'nullable|integer',
                        'property_type' => 'required|string|max:100',
                        'property_status' => 'required|string|max:100',
                        'amenities' => 'nullable|string',
                        'property_furnishing' => 'required|string',
                        'property_built_up_area'=> 'nullable|numeric|min:0',
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
                        'plot_area' => 'nullable|numeric|min:0',
                        'pool_size' => 'nullable|numeric|min:0',
                        'images' => 'required|array|min:1',
                        'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
                    ];

                    $messages = [
                        'property_id.unique' => 'This Property ID already exists. Please choose a different one.',
                        'agent_id.required' => 'Veuillez sélectionner un agent.',
                        'agent_id.exists' => 'L agent sélectionné n existe pas.',
                        'handover_date.required' => 'La date de livraison est obligatoire pour les propriétés Off-plan.',
                        'images.required' => 'Au moins une image est obligatoire pour la propriété.',
                        'images.min' => 'Vous devez ajouter au moins une image.',
                        'images.*.required' => 'Chaque fichier image est obligatoire.',
                        'images.*.image' => 'Le fichier doit être une image.',
                        'images.*.mimes' => 'L\'image doit être au format : jpeg, png, jpg, gif.',
                        'images.*.max' => 'L\'image ne doit pas dépasser 5 MB.',
                    ];

                    // Validation conditionnelle pour property_size vs plot_area
                    $plotAreaTypes = ['Villa', 'Town House', 'Townhouse'];
                    if (in_array($request->property_type, $plotAreaTypes)) {
                        $rules['plot_area'] = 'required|numeric|min:0';
                        $messages['plot_area.required'] = 'La superficie du terrain est obligatoire pour les villas et maisons de ville.';
                    } else {
                        $rules['property_size'] = 'required|integer';
                        $messages['property_size.required'] = 'La taille de la propriété est obligatoire.';
                    }

                    // Validation conditionnelle : Property Size < Build up Area pour les appartements
                    $apartmentTypes = ['Apartment', 'Penthouse', 'Hotel Apartment'];
                    if (in_array($request->property_type, $apartmentTypes)) {
                        // Valider que property_size < property_built_up_area si les deux sont présents
                        if ($request->property_size && $request->property_built_up_area) {
                            if ($request->property_size >= $request->property_built_up_area) {
                                return back()->withErrors([
                                    'property_size' => 'Property size must be less than built-up area for apartments.'
                                ])->withInput();
                            }
                        }
                    }

                    // Validation conditionnelle : Plot Area < Build up Area pour les villas/townhouses
                    $villaTypes = ['Villa', 'Town House', 'Townhouse', 'Villa Compound'];
                    if (in_array($request->property_type, $villaTypes)) {
                        // Valider que plot_area > property_built_up_area si les deux sont présents
                        if ($request->plot_area && $request->property_built_up_area) {
                            if ($request->plot_area <= $request->property_built_up_area) {
                                return back()->withErrors([
                                    'plot_area' => 'Plot area must be greater than built-up area for villas/townhouses.'
                                ])->withInput();
                            }
                        }
                    }

                    $validated = $request->validate($rules, $messages);
            
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
                    
                    // Redirection vers le dashboard avec message de succès
                    return redirect()->route('dashboard.analytics')->with('success', 'Your property has been added successfully!');
            
                } catch (\Illuminate\Validation\ValidationException $e) {
                    Log::error('Validation Failed:', $e->errors());
                    return back()->withErrors($e->errors())->withInput();
                } catch (\Exception $e) {
                    Log::error('Property Creation Failed: ' . $e->getMessage());
                    return back()->with('error', $e->getMessage())->withInput();
                }
            }
            
            
        public function show_listing_page_client(Request $request) {
            $query = Property::with('images')->orderBy('created_at', 'desc');
            
            // Compter le total AVANT filtrage
            $totalCount = Property::count();
            
            // Appliquer le filtre selon le type demandé
            $filterType = $request->get('filter', 'all');
            
            Log::info("Listing page filter applied", [
                'filter_type' => $filterType,
                'total_properties' => $totalCount
            ]);
            
            switch($filterType) {
                case 'ready':
                    // Modifier pour chercher 'Ready' au lieu de ['Buy', 'Rent']
                    $query->where('property_status', 'Ready');
                    Log::info("Applied Ready filter: properties with property_status = 'Ready'");
                    break;
                    
                case 'off-plan':
                    $query->where('property_status', 'Off-Plan');
                    Log::info("Applied Off-Plan filter: properties with property_status = 'Off-Plan'");
                    break;
                    
                case 'all':
                default:
                    // Pas de filtre, toutes les propriétés
                    Log::info("Applied All filter: no restrictions");
                    break;
            }
            
            $properties = $query->get();
            $filteredCount = $properties->count();
            
            // Debug détaillé pour Ready filter
            if ($filterType === 'ready') {
                Log::info('READY FILTER DEBUG:', [
                    'total_before_filter' => $totalCount,
                    'filtered_count' => $filteredCount,
                    'properties_details' => $properties->map(function($prop) {
                        return [
                            'id' => $prop->id,
                            'name' => $prop->property_name,
                            'status' => $prop->property_status,
                            'handover_date' => $prop->handover_date,
                            'handover_is_past' => $prop->handover_date ? ($prop->handover_date <= now() ? 'YES' : 'NO') : 'NULL',
                        ];
                    })->toArray()
                ]);
                
                // Vérifier aussi toutes les propriétés pour voir pourquoi elles sont incluses
                $allProperties = Property::select('id', 'property_name', 'property_status', 'handover_date')->get();
                Log::info('ALL PROPERTIES FOR COMPARISON:', [
                    'all_properties' => $allProperties->map(function($prop) {
                        return [
                            'id' => $prop->id,
                            'name' => $prop->property_name,
                            'status' => $prop->property_status,
                            'handover_date' => $prop->handover_date,
                            'should_be_ready' => in_array($prop->property_status, ['Buy', 'Rent']) && 
                                               ($prop->handover_date === null || $prop->handover_date <= now()) ? 'YES' : 'NO'
                        ];
                    })->toArray()
                ]);
            }
            
            Log::info('Properties Retrieved after filter:', [
                'filter_type' => $filterType,
                'total_properties' => $totalCount,
                'filtered_count' => $filteredCount,
                'properties_sample' => $properties->take(2)->pluck('property_name', 'id')->toArray()
            ]);
            
            return view('pages.listing-page', [
                'properties' => $properties,
                'filter_type' => $filterType,
                'total_count' => $totalCount,
                'filtered_count' => $filteredCount
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
            Log::info('Search request received', $request->all());
            
            $query = Property::query();
            
            // Apply filters based on form inputs
            if ($request->filled('listing_status') && $request->listing_status !== 'All') {
                if($request->listing_status == "Buy"){
                    $query->where('property_status', "Buy");
                }
                if($request->listing_status == "Rent"){
                    $query->where('property_status', "Rent");
                }
                if($request->listing_status == "off-plan"){
                    $query->where('property_status', "off-plan");
                }
            }
            
            // Nouveau filtrage pour property_completion (Ready/Off-Plan/All)
            if ($request->filled('property_completion') && $request->property_completion !== 'All') {
                Log::info('Filtering by property_completion: ' . $request->property_completion);

                if ($request->property_completion == 'Ready') {
                    // Ready = statut 'Ready' uniquement
                    $query->where('property_status', 'Ready');
                } elseif ($request->property_completion == 'Off-Plan') {
                    // Off-Plan = propriétés avec handover_date future ou status off-plan
                    $query->where(function($q) {
                        $q->where('property_status', 'off-plan')
                          ->orWhere('handover_date', '>', now()->format('Y-m-d'));
                    });
                }
            }
        
            if ($request->filled('location')) {
                $query->where('address', 'like', '%' . $request->location . '%');
            }

            if ($request->filled('home_type')) {
                $query->where('property_type', $request->home_type);
            }
            
            if ($request->filled('beds')) {
                $query->where('bedrooms', $request->beds);
            }
            
            if ($request->filled('baths')) {
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
        
            $properties = $query->with('images', 'user')->get();
            
            Log::info('Search results count: ' . $properties->count());
        
            // Check if it's AJAX
            if ($request->ajax()) {
                // Retourner uniquement le HTML du partial pour remplacer le grid
                return view('properties.partials.property_list', compact('properties'))->render();
            }

            return view('pages.listing-page', [
                'properties' => $properties
            ]);
        }
}
