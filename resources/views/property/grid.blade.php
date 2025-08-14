@extends('layouts.vertical', ['title' => 'Listing Grid', 'subTitle' => 'Real Estate'])

@section('css')
@vite(['node_modules/nouislider/dist/nouislider.min.css', 'node_modules/choices.js/public/assets/styles/choices.min.css'])
@endsection

@section('content')

<div class="row">
    <div class="col-xl-3 col-lg-12">
        <div class="card">
            <div class="card-header border-bottom">
                <div>
                    <h4 class="card-title">Properties</h4>
                    <p class="mb-0">Show 15,780 Properties</p>
                </div>
            </div>
            <div class="card-body border-light">
                <form>
                    <!-- Filter Options -->
                    <label for="choices-single-groups" class="form-label">Properties Location</label>
                    <select class="form-control" id="choices-single-groups" data-choices data-choices-groups data-placeholder="Select City" name="choices-single-groups">
                        <option value="">Choose a city</option>
                        <optgroup label="UK">
                            <option value="London">London</option>
                            <option value="Manchester">Manchester</option>
                            <option value="Liverpool">Liverpool</option>
                        </optgroup>
                        <!-- More Options -->
                    </select>

                    <div class="mb-3">
                        <label for="typeplace" class="form-label">Type Of Place</label>
                        <input type="text" id="typeplace" class="form-control">
                    </div>
                </form>
                
                <!-- Price Range -->
                <h5 class="text-dark fw-medium my-3">Custom Price Range :</h5>
                <div id="product-price-range" class=""></div>
                <div class="formCost d-flex gap-2 align-items-center mt-3">
                    <input class="form-control form-control-sm text-center" type="text" id="minCost" value="0">
                    <span class="fw-semibold text-muted">to</span>
                    <input class="form-control form-control-sm text-center" type="text" id="maxCost" value="1000">
                </div>
                <!-- More Filters -->
            </div>
            <div class="card-footer">
                <a href="#!" class="btn btn-primary w-100">Apply</a>
            </div>
        </div>
    </div>

    <div class="col-xl-9 col-lg-12">
        <div class="row">
            @foreach($properties as $property)
                <div class="col-lg-4 col-md-6">
                    <div class="card overflow-hidden">
                        <div class="position-relative">
                            <!-- Image handling with fallback -->
                            @if($property->images->isNotEmpty())
                         <img class="img-fluid rounded" src="{{ asset('storage/' . $property->images->first()->image_url) }}" alt="Property image">
                            @else
                                <img src="/default-image.jpg" alt="No Image Available" class="img-fluid rounded-top" style="height: 200px; object-fit: cover;">
                            @endif
                            
                            <span class="position-absolute top-0 end-0 p-1">
                                <span class="badge bg-{{ $property->property_status === 'Sale' ? 'warning' : 'success' }} text-white fs-13">
                                    {{ ucfirst($property->property_status) }}
                                </span>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2">
                                <div class="avatar bg-light rounded">
                                    <iconify-icon icon="solar:home-bold-duotone" class="fs-24 text-primary avatar-title"></iconify-icon>
                                </div>
                                <div>
                                    <a href="{{ route('properties.show', $property->id) }}" class="text-dark fw-medium fs-16">
                                        {{ $property->title }}
                                    </a>
                                    <p class="text-muted mb-0">{{ $property->address }}</p>
                                </div>
                            </div>
                            <div class="row mt-2 g-2">
                                <div class="col-4">
                                    <span class="badge bg-light-subtle text-muted border fs-12">
                                        🛏 {{ $property->bedrooms }} Beds
                                    </span>
                                </div>
                                <div class="col-4">
                                    <span class="badge bg-light-subtle text-muted border fs-12">
                                        🛁 {{ $property->bathrooms }} Bath
                                    </span>
                                </div>
                                <div class="col-4">
                                    <span class="badge bg-light-subtle text-muted border fs-12">
                                        📏 {{ $property->property_size }} ft²
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light-subtle d-flex justify-content-between align-items-center border-top">
                            <p class="fw-medium text-dark fs-16 mb-0">${{ number_format($property->price) }}</p>
                            <div>
                                <a href="{{ route('properties.show', $property->id) }}" class="link-primary fw-medium">
                                    Details <i class='ri-arrow-right-line align-middle'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

@section('script-bottom')
@vite(['resources/js/pages/property-grid.js'])
@endsection
