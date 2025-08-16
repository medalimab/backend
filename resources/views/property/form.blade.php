
@php
    $isEdit = isset($property) && $property;
@endphp
<form action="{{ $isEdit ? route('properties.update', $property->id) : route('properties.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif
    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="position-relative">
                        <img src="/images/properties/p-1.jpg" alt="" class="img-fluid rounded bg-light">
                        <span class="position-absolute top-0 end-0 p-1">
                            <span class="badge bg-success text-light fs-13">For Rent</span>
                        </span>
                    </div>
                    <div class="mt-3">
                        <h4 class="mb-1">Preview Info</h4>
                        <p class="mb-1 text-muted">Optional preview content</p>
                    </div>
                </div>
                <div class="card-footer bg-light-subtle">
                    <div class="row g-2">
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-outline-primary w-100">{{ $isEdit ? 'Update Property' : 'Create Property' }}</button>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{ route('properties.index') }}" class="btn btn-danger w-100">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-9 col-lg-8">
            <!-- ... Tous les champs du formulaire add.blade.php ... -->
            <!-- Pour chaque champ, utiliser $isEdit ? $property->champ : old('champ') -->
            <!-- Exemple : -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Property Photo</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="images" class="form-label">Property Images (min 5)</label>
                        <input type="file" name="images[]" class="form-control" id="images" accept="image/*" multiple>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Property Information</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="property-name" class="form-label">Property Name</label>
                            <input type="text" id="property-name" name="property_name" class="form-control" placeholder="Name" required value="{{ $isEdit ? $property->property_name : old('property_name') }}">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="property-id" class="form-label">Property ID</label>
                            <input type="text" id="property-id" name="property_id" class="form-control" placeholder="Property ID" required value="{{ $isEdit ? $property->property_id : old('property_id') }}">
                            @error('property_id')
                                <span class="text-red-500 text-sm mt-1" style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-3" id="property-categories-group">
                            <label for="property-main-type" class="form-label">Property Category</label>
                            <select class="form-control" id="property-main-type" name="property_main_type" required>
                                <option value="" disabled selected hidden>Select category...</option>
                                <option value="Residential" {{ $isEdit && $property->property_main_type == 'Residential' ? 'selected' : '' }}>Residential</option>
                                <option value="Commercial" {{ $isEdit && $property->property_main_type == 'Commercial' ? 'selected' : '' }}>Commercial</option>
                            </select>
                            <label for="property-type" class="form-label mt-2">Property Type</label>
                            <select class="form-control" id="property-type" name="property_type" required>
                                <option value="" disabled selected hidden>Select property type...</option>
                                <!-- Options dynamiques JS -->
                            </select>
                        </div>
                        <div class="col-lg-6 mb-3" id="property-statu-group">
                            <label for="property-for" class="form-label">Status</label>
                            <select class="form-control" id="property-status" name="property_status" required>
                                <option value="" disabled selected hidden>Choisir le statut de la propriété...</option>
                                <option value="Buy" {{ $isEdit && $property->property_status == 'Buy' ? 'selected' : '' }}>Buy</option>
                                <option value="Rent" {{ $isEdit && $property->property_status == 'Rent' ? 'selected' : '' }}>Rent</option>
                                <option value="Off-plan" {{ $isEdit && $property->property_status == 'Off-plan' ? 'selected' : '' }}>Off-plan</option>
                                <option value="Ready" {{ $isEdit && $property->property_status == 'Ready' ? 'selected' : '' }}>Ready</option>
                            </select>
                            <label for="property-square-foot" class="form-label">Property Size</label>
                            <input type="number" id="property-size" name="property_size" class="form-control" placeholder="Property Size" required value="{{ $isEdit ? $property->property_size : old('property_size') }}">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="property-bedroom" class="form-label">Bedrooms</label>
                            <input type="number" id="property-bedroom" name="bedrooms" class="form-control" placeholder="Number of bedrooms" required value="{{ $isEdit ? $property->bedrooms : old('bedrooms') }}">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="property-bathroom" class="form-label">Bathrooms</label>
                            <input type="number" id="property-bathroom" name="bathrooms" class="form-control" placeholder="Number of bathrooms" required value="{{ $isEdit ? $property->bathrooms : old('bathrooms') }}">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="building-parking_spaces" class="form-label">Total parking spaces</label>
                            <input type="number" id="building-parking_spaces" name="building_parking_spaces" class="form-control" placeholder="total parking spaces" value="{{ $isEdit ? $property->building_parking_spaces : old('building_parking_spaces') }}">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="property-for" class="form-label" id="furnishing_group">Furnishing</label>
                            <select class="form-control" id="furnishing-field" name="property_furnishing" required>
                                <option value="" disabled selected hidden>Select furnishing status...</option> 
                                <option value="Furnished" {{ $isEdit && $property->property_furnishing == 'Furnished' ? 'selected' : '' }}>Furnished</option>
                                <option value="Unfurnished" {{ $isEdit && $property->property_furnishing == 'Unfurnished' ? 'selected' : '' }}>Unfurnished</option>
                                <option value="Semi-furnished" {{ $isEdit && $property->property_furnishing == 'Semi-furnished' ? 'selected' : '' }}>Semi-furnished</option>
                            </select>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="property-price" class="form-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-text">AED</span>
                                <input type="number" id="property-price" name="price" class="form-control" placeholder="000" required value="{{ $isEdit ? $property->price : old('price') }}">
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3" id="year-built-group">
                            <label for="property_year_build" class="form-label">Year Built</label>
                            <input type="number" id="year-built-field" name="year_built" class="form-control" placeholder="year of Built" value="{{ $isEdit ? $property->year_built : old('year_built') }}">
                        </div>
                        <div class="col-lg-4 mb-3" id="handover-date-group">
                            <label for="property-handover_date" class="form-label">Handover Date</label>
                            <textarea  id="handover-date" name="handover_date" class="form-control">{{ $isEdit ? $property->handover_date : old('handover_date') }}</textarea>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for="property-address" class="form-label">Address</label>
                            <textarea class="form-control" id="property-address" name="address" rows="2" placeholder="Enter address" required>{{ $isEdit ? $property->address : old('address') }}</textarea>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Write description...">{{ $isEdit ? $property->description : old('description') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Amenities Taxonomy</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Residential Community</label>
                            @php
                                $rawAmenities = $isEdit ? ($property->amenities ?? []) : old('amenities', []);
                                if (is_string($rawAmenities)) {
                                    $amenities = array_map('trim', explode(',', $rawAmenities));
                                } else {
                                    $amenities = is_array($rawAmenities) ? $rawAmenities : [];
                                }
                            @endphp
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Swimming Pool" {{ in_array('Swimming Pool', $amenities) ? 'checked' : '' }}> Swimming Pool (Infinity pool, temperature-controlled pool)
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Children's Pool" {{ in_array("Children's Pool", $amenities) ? 'checked' : '' }}> Children's Pool
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Children's Play Area" {{ in_array("Children's Play Area", $amenities) ? 'checked' : '' }}> Children's Play Area (indoor & outdoor)
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Landscaped Gardens" {{ in_array("Landscaped Gardens", $amenities) ? 'checked' : '' }}> Landscaped Gardens / Green Spaces
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="BBQ Areas" {{ in_array("BBQ Areas", $amenities) ? 'checked' : '' }}> BBQ Areas
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Community Park" {{ in_array("Community Park", $amenities) ? 'checked' : '' }}> Community Park
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Pet-friendly Areas" {{ in_array("Pet-friendly Areas", $amenities) ? 'checked' : '' }}> Pet-friendly Areas / Dog Park
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Wellness & Fitness</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Gymnasium" {{ in_array('Gymnasium', $amenities) ? 'checked' : '' }}> Fully Equipped Gymnasium
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Yoga & Meditation" {{ in_array('Yoga & Meditation', $amenities) ? 'checked' : '' }}> Yoga & Meditation Areas
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Spa & Sauna" {{ in_array('Spa & Sauna', $amenities) ? 'checked' : '' }}> Spa & Sauna
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Steam Rooms" {{ in_array('Steam Rooms', $amenities) ? 'checked' : '' }}> Steam Rooms
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Jacuzzi" {{ in_array('Jacuzzi', $amenities) ? 'checked' : '' }}> Jacuzzi
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Running Track" {{ in_array('Running Track', $amenities) ? 'checked' : '' }}> Running / Jogging Track
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Cycling Track" {{ in_array('Cycling Track', $amenities) ? 'checked' : '' }}> Cycling Track
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Recreational & Lifestyle</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Clubhouse" {{ in_array('Clubhouse', $amenities) ? 'checked' : '' }}> Clubhouse / Residents’ Lounge
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Cinema Room" {{ in_array('Cinema Room', $amenities) ? 'checked' : '' }}> Cinema Room / Multimedia Room
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Game Room" {{ in_array('Game Room', $amenities) ? 'checked' : '' }}> Game Room (billiards, table tennis, etc.)
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Library" {{ in_array('Library', $amenities) ? 'checked' : '' }}> Library / Reading Lounge
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Event Spaces" {{ in_array('Event Spaces', $amenities) ? 'checked' : '' }}> Event Spaces / Community Hall
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Security & Services</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="24/7 Security" {{ in_array('24/7 Security', $amenities) ? 'checked' : '' }}> 24/7 Security with CCTV Surveillance
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Concierge Services" {{ in_array('Concierge Services', $amenities) ? 'checked' : '' }}> Concierge Services
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Smart Entry" {{ in_array('Smart Entry', $amenities) ? 'checked' : '' }}> Controlled Access & Smart Entry Systems
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Maintenance Services" {{ in_array('Maintenance Services', $amenities) ? 'checked' : '' }}> Maintenance Services
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Valet Parking" {{ in_array('Valet Parking', $amenities) ? 'checked' : '' }}> Valet Parking
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Parking & Transportation</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Covered Parking" {{ in_array('Covered Parking', $amenities) ? 'checked' : '' }}> Covered Parking Spaces
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Visitor Parking" {{ in_array('Visitor Parking', $amenities) ? 'checked' : '' }}> Visitor Parking
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="EV Charging" {{ in_array('EV Charging', $amenities) ? 'checked' : '' }}> Electric Vehicle Charging Stations
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Bicycle Storage" {{ in_array('Bicycle Storage', $amenities) ? 'checked' : '' }}> Bicycle Storage
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Retail & Dining</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Retail Outlets" {{ in_array('Retail Outlets', $amenities) ? 'checked' : '' }}> Retail Outlets
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Supermarket" {{ in_array('Supermarket', $amenities) ? 'checked' : '' }}> Supermarket / Mini-Mart
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Cafés & Restaurants" {{ in_array('Cafés & Restaurants', $amenities) ? 'checked' : '' }}> Cafés & Restaurants
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Luxury & Premium Add-ons</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Private Beach Access" {{ in_array('Private Beach Access', $amenities) ? 'checked' : '' }}> Private Beach Access
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Waterfront Promenade" {{ in_array('Waterfront Promenade', $amenities) ? 'checked' : '' }}> Waterfront Promenade / Marina Access
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Rooftop Lounge" {{ in_array('Rooftop Lounge', $amenities) ? 'checked' : '' }}> Rooftop Lounge or Sky Deck
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Private Pools" {{ in_array('Private Pools', $amenities) ? 'checked' : '' }}> Private Pools (in penthouses or villas)
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Serviced Apartments" {{ in_array('Serviced Apartments', $amenities) ? 'checked' : '' }}> Serviced Apartments Facilities
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="amenities[]" value="Helipad Access" {{ in_array('Helipad Access', $amenities) ? 'checked' : '' }}> Helipad Access (ultra-luxury)
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Assign Agent</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="agent_id" class="form-label">Select Agent</label>
                        <select name="agent_id" id="agent_id" class="form-control" required>
                            <option value="" disabled {{ !$isEdit ? 'selected' : '' }} hidden>Select agent...</option>
                            @foreach(App\Models\Agent::all() as $agent)
                                <option value="{{ $agent->id }}" {{ $isEdit && $property->agent_id == $agent->id ? 'selected' : '' }}>{{ $agent->full_name }} ({{ $agent->job_title }})</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Property Attachments</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="pdf" class="form-label">PDF Document</label>
                        <input type="file" name="pdf" class="form-control" id="pdf" accept="application/pdf">
                        <small class="text-danger d-none" id="pdf-error">File must be less than 10 MB</small>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">DLD Permit</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                       
                        <label for="dld_permit_qr" class="form-label">QR Code (upload ou généré)</label>
                        <input type="file" name="dld_permit_qr" id="dld_permit_qr" class="form-control" accept="image/*">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@section('script-bottom')
@vite(['resources/js/components/form-fileupload.js'])
<script>
    // ... JS dynamique du formulaire add.blade.php ...
</script>
@endsection
