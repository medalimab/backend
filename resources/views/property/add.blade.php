@extends('layouts.vertical', ['title' => 'Add Property', 'subTitle' => 'Real Estate'])

@section('css')
@vite(['node_modules/choices.js/public/assets/styles/choices.min.css'])
@endsection

@section('content')
@if (session('error'))
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
        {{ session('error') }}
    </div>
@endif


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('properties.store') }}" method="POST" enctype="multipart/form-data">
@csrf

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
                        <button type="submit" class="btn btn-outline-primary w-100">Create Property</button>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{ route('properties.index') }}" class="btn btn-danger w-100">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-9 col-lg-8">
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
                        <input type="text" id="property-name" name="property_name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="property-id" class="form-label">Property ID</label>
                        <input type="text" id="property-id" name="property_id" class="form-control" placeholder="Property ID" required>
                        @error('property_id')
                            <span class="text-red-500 text-sm mt-1" style="color: red">{{ $message }}</span>
                        @enderror
                    </div>                    
                    <div class="col-lg-6 mb-3" id="property-categories-group">
                        <label for="property-main-type" class="form-label">Property Category</label>
                        <select class="form-control" id="property-main-type" name="property_main_type" required>
                            <option value="" disabled selected hidden>Select category...</option>
                            <option value="Residential">Residential</option>
                            <option value="Commercial">Commercial</option>
                        </select>
                        <label for="property-type" class="form-label mt-2">Property Type</label>
                        <select class="form-control" id="property-type" name="property_type" required>
                            <option value="" disabled selected hidden>Select property type...</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3" id="property-statu-group">
                        <label for="property-for" class="form-label">Status</label>
                        <select class="form-control" id="property-status" name="property_status" required>
                            <option value="" disabled selected hidden>Choisir le statut de la propriété...</option>
                            <option value="Buy">Buy</option>
                            <option value="Rent">Rent</option>
                            <option value="Off-plan">Off-plan</option>
                            <option value="Ready">Ready</option>
                            
                        </select>
                        <label for="property-square-foot" class="form-label">Property Size</label>
                        <input type="number" id="property-size" name="property_size" class="form-control" placeholder="Property Size" required>
                    </div>


                    <div class="col-lg-4 mb-3">
                        <label for="property-bedroom" class="form-label">Bedrooms</label>
                        <input type="number" id="property-bedroom" name="bedrooms" class="form-control" placeholder="Number of bedrooms" required>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="property-bathroom" class="form-label">Bathrooms</label>
                        <input type="number" id="property-bathroom" name="bathrooms" class="form-control" placeholder="Number of bathrooms" required >
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="building-parking_spaces" class="form-label">Total parking spaces</label>
                        <input type="number" id="building-parking_spaces" name="building_parking_spaces" class="form-control" placeholder="total parking spaces">
                    </div>
                    <!-- Champ Completion supprimé, tous les statuts sont dans Status -->
                    <div class="col-lg-4 mb-3">
                        <label for="property-for" class="form-label" id="furnishing_group">Furnishing</label>
                        <select class="form-control" id="furnishing-field" name="property_furnishing" required>
                            <option value="" disabled selected hidden>Select furnishing status...</option> 
                            <option value="Furnished" >Furnished</option>
                            <option value="Unfurnished">Unfurnished</option>
                            <option value="Semi-furnished">Semi-furnished</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="property-price" class="form-label">Price</label>
                        <div class="input-group">
                            <span class="input-group-text">AED</span>
                            <input type="number" id="property-price" name="price" class="form-control" placeholder="000" required>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3" id="year-built-group">
                        <label for="property_year_build" class="form-label">Year Built</label>
                        <input type="number" id="year-built-field" name="year_built" class="form-control" placeholder="year of Built" >
                    </div>
                    <div class="col-lg-4 mb-3" id="handover-date-group">
                        <label for="property-handover_date" class="form-label">Handover Date</label>
                        <textarea  id="handover-date" name="handover_date" class="form-control" ></textarea>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="property-address" class="form-label">Address</label>
                        <textarea class="form-control" id="property-address" name="address" rows="2" placeholder="Enter address" required></textarea>
                    </div>

                    <div class="col-lg-12 mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Write description..."></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Validated Information</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="property-name" class="form-label">Developer</label>
                        <input type="text" id="property-developer" name="developer" class="form-control" placeholder="Name">
                    </div>

                 

                    <div class="col-lg-6 mb-3">
                        <label for="property-built_up_area" class="form-label">Build up area</label>
                        <div class="input-group">
                            <span class="input-group-text">sqft</span>
                            <input type="number" id="property-built_up_area" name="property_built_up_area" class="form-control" placeholder="build up area">
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="property-for" class="form-label">parking availabilty</label>
                        <select class="form-control" id="property-for" name="property_parking_availability">
                            <option value="Available">Available</option>
                            <option value="Unavailable">Unavailable</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Building Information</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="property-name" class="form-label">Building Name</label>
                        <input type="text" id="building-name" name="building_name" class="form-control" placeholder="Building Name">
                    </div>
                    
                    <div class="col-lg-6 mb-3">
                        <label for="building_area" class="form-label">Total Building Area</label>
                        <div class="input-group">
                            <span class="input-group-text">sqft</span>
                            <input type="number" id="building_area" name="building_area" class="form-control" placeholder="Building area">
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="elevators" class="form-label">Elevators</label>
                        <input type="number" id="number_elevators" name="number_elevators" class="form-control" placeholder="Number of elevators">
                    </div>
                    
                    <div class="col-lg-4 mb-3">
                        <label for="total-floors" class="form-label">Total Floors</label>
                        <input type="number" id="total-floors" name="total_floors" class="form-control" placeholder="Total Floors">
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Amenities Taxonomy </h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label class="form-label">Residential Community</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Swimming Pool"> Swimming Pool (Infinity pool, temperature-controlled pool)
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Children's Pool"> Children's Pool
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Children's Play Area"> Children's Play Area (indoor & outdoor)
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Landscaped Gardens"> Landscaped Gardens / Green Spaces
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="BBQ Areas"> BBQ Areas
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Community Park"> Community Park
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Pet-friendly Areas"> Pet-friendly Areas / Dog Park
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label class="form-label">Wellness & Fitness</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Gymnasium"> Fully Equipped Gymnasium
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Yoga & Meditation"> Yoga & Meditation Areas
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Spa & Sauna"> Spa & Sauna
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Steam Rooms"> Steam Rooms
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Jacuzzi"> Jacuzzi
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Running Track"> Running / Jogging Track
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Cycling Track"> Cycling Track
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label class="form-label">Recreational & Lifestyle</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Clubhouse"> Clubhouse / Residents’ Lounge
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Cinema Room"> Cinema Room / Multimedia Room
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Game Room"> Game Room (billiards, table tennis, etc.)
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Library"> Library / Reading Lounge
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Event Spaces"> Event Spaces / Community Hall
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label class="form-label">Security & Services</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="24/7 Security"> 24/7 Security with CCTV Surveillance
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Concierge Services"> Concierge Services
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Smart Entry"> Controlled Access & Smart Entry Systems
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Maintenance Services"> Maintenance Services
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Valet Parking"> Valet Parking
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label class="form-label">Parking & Transportation</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Covered Parking"> Covered Parking Spaces
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Visitor Parking"> Visitor Parking
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="EV Charging"> Electric Vehicle Charging Stations
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Bicycle Storage"> Bicycle Storage
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label class="form-label">Retail & Dining</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Retail Outlets"> Retail Outlets
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Supermarket"> Supermarket / Mini-Mart
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Cafés & Restaurants"> Cafés & Restaurants
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label class="form-label">Luxury & Premium Add-ons</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Private Beach Access"> Private Beach Access
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Waterfront Promenade"> Waterfront Promenade / Marina Access
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Rooftop Lounge"> Rooftop Lounge or Sky Deck
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Private Pools"> Private Pools (in penthouses or villas)
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Serviced Apartments"> Serviced Apartments Facilities
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="amenities[]" value="Helipad Access"> Helipad Access (ultra-luxury)
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
                        <option value="" disabled selected hidden>Select agent...</option>
                        @foreach(App\Models\Agent::all() as $agent)
                            <option value="{{ $agent->id }}">{{ $agent->full_name }} ({{ $agent->job_title }})</option>
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
                    <label for="dld_permit_qr" class="form-label">QR Code (upload)</label>
                    <input type="file" name="dld_permit_qr" id="dld_permit_qr" class="form-control" accept="image/*">
                </div>
            </div>
        </div>
    </div>
    
</div>

</form>

@endsection

@section('script-bottom')
@vite(['resources/js/components/form-fileupload.js'])
<script>
    // Ajout du filtrage dynamique pour les deux listes
    document.addEventListener('DOMContentLoaded', function () {
        const mainTypeSelect = document.getElementById('property-main-type');
        const typeSelect = document.getElementById('property-type');
        const residentialTypes = [
            'Apartment', 'Villa', 'Townhouse', 'Penthouse', 'Villa Compound', 'Hotel Apartment', 'Land', 'Floor', 'Building'
        ];
        const commercialTypes = [
            'Office', 'Shop', 'Warehouse', 'Labour Camp', 'Villa', 'Bulk Unit', 'Land', 'Floor', 'Building', 'Factory', 'Industrial Land', 'Mixed Use Land', 'Showroom', 'Other Commercial'
        ];
        function updateTypeOptions() {
            const selectedMain = mainTypeSelect.value;
            let options = '<option value="" disabled selected hidden>Select property type...</option>';
            if (selectedMain === 'Residential') {
                residentialTypes.forEach(t => {
                    options += `<option value="${t}">${t}</option>`;
                });
            } else if (selectedMain === 'Commercial') {
                commercialTypes.forEach(t => {
                    options += `<option value="${t}">${t}</option>`;
                });
            }
            typeSelect.innerHTML = options;
        }
        mainTypeSelect.addEventListener('change', updateTypeOptions);
        updateTypeOptions();
    });
    document.addEventListener('DOMContentLoaded', function () {
        const statusSelect = document.getElementById('property-status');
        const yearBuiltGroup = document.getElementById('year-built-group');
        const handoverDateGroup = document.getElementById('handover-date-group');
        const yearBuiltInput = document.getElementById('year-built-field');
        const handoverDateInput = document.getElementById('handover-date');
        const propertyTypeSelect = document.getElementById('property-type');
    // Section Building Information (carte complète)
    const buildingCard = Array.from(document.querySelectorAll('.card-title')).find(e => e.textContent.trim() === 'Building Information')?.closest('.card');
        const bedroomsField = document.getElementById('property-bedroom');
        const bathroomsField = document.getElementById('property-bathroom');
        const furnishingField = document.getElementById('furnishing-field');
        const garageField = document.getElementById('property-garage');
        const plotAreaField = document.getElementById('property-size');

        function toggleFields() {
            const selectedStatus = statusSelect.value;
            const selectedType = propertyTypeSelect.value;

            // Statut Off-plan : handover visible, year built caché
            if (selectedStatus === 'Off-plan') {
                handoverDateGroup.style.display = 'block';
                handoverDateInput.required = true;
                yearBuiltGroup.style.display = 'none';
                yearBuiltInput.required = false;
                yearBuiltInput.value = '';
            } else {
                yearBuiltGroup.style.display = 'block';
                yearBuiltInput.required = true;
                handoverDateGroup.style.display = 'none';
                handoverDateInput.required = false;
                handoverDateInput.value = '';
            }

            // Filtrage par type
            // Villas/Townhouses
            if (selectedType === 'Villa' || selectedType === 'Townhouse' || selectedType === 'Villa Compound') {
                if (buildingCard) buildingCard.style.display = 'none';
                bedroomsField.closest('.col-lg-4').style.display = 'block';
                bathroomsField.closest('.col-lg-4').style.display = 'block';
                furnishingField.closest('.col-lg-4').style.display = 'block';
                garageField.closest('.col-lg-4, .col-lg-6').style.display = 'block';
                plotAreaField.closest('.col-lg-6').style.display = 'block';
            }
            // Apartments
            else if (selectedType === 'Apartment' || selectedType === 'Penthouse' || selectedType === 'Hotel Apartment') {
                if (buildingCard) buildingCard.style.display = 'block';
                bedroomsField.closest('.col-lg-4').style.display = 'block';
                bathroomsField.closest('.col-lg-4').style.display = 'block';
                furnishingField.closest('.col-lg-4').style.display = 'block';
                garageField.closest('.col-lg-4, .col-lg-6').style.display = 'block';
                plotAreaField.closest('.col-lg-6').style.display = 'block';
            }
            // Plots/Land
            else if (selectedType === 'Plot' || selectedType === 'Land' || selectedType === 'Industrial Land' || selectedType === 'Mixed Use Land') {
                if (buildingCard) buildingCard.style.display = 'none';
                bedroomsField.closest('.col-lg-4').style.display = 'none';
                bathroomsField.closest('.col-lg-4').style.display = 'none';
                furnishingField.closest('.col-lg-4').style.display = 'none';
                garageField.closest('.col-lg-4, .col-lg-6').style.display = 'none';
                plotAreaField.closest('.col-lg-6').style.display = 'block';
            }
            // Autres types : afficher tout
            else {
                if (buildingCard) buildingCard.style.display = 'block';
                bedroomsField.closest('.col-lg-4').style.display = 'block';
                bathroomsField.closest('.col-lg-4').style.display = 'block';
                furnishingField.closest('.col-lg-4').style.display = 'block';
                garageField.closest('.col-lg-4, .col-lg-6').style.display = 'block';
                plotAreaField.closest('.col-lg-6').style.display = 'block';
            }
        }

        toggleFields(); // Initial
        statusSelect.addEventListener('change', toggleFields);
        propertyTypeSelect.addEventListener('change', toggleFields);
    });

    document.getElementById('pdf').addEventListener('change', function() {
        const file = this.files[0];
        const maxSize = 10 * 1024 * 1024; // 10 MB in bytes
        const errorMsg = document.getElementById('pdf-error');

        if (file && file.size > maxSize) {
            errorMsg.classList.remove('d-none');
            this.value = ''; // clear the input
        } else {
            errorMsg.classList.add('d-none');
        }
    });
    </script>

@endsection
