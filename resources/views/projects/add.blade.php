@extends('layouts.vertical', ['title' => 'Add Project', 'subTitle' => 'Real Estate'])

@section('css')

@endsection

@section('content')
<div class="row">
    <div class="col-xl-9 col-lg-8">
        <form action="{{ route('projects.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Project Photo</h4>
                </div>
                <div class="card-body">
                    <div class="dropzone bg-light-subtle py-5" id="projectPhotoDropzone">
                        <div class="fallback">
                            <input name="project_photos[]" type="file" multiple>
                        </div>
                        <div class="dz-message needsclick">
                            <i class="ri-upload-cloud-2-line fs-48 text-primary"></i>
                            <h3 class="mt-4">Drop your images here, or <span class="text-primary">click to browse</span></h3>
                            <span class="text-muted fs-13">1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed</span>
                        </div>
                    </div>
                    @error('project_photos.*')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Project Basic Information</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="project-name" class="form-label">Project Name</label>
                            <input type="text" id="project-name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Project Name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="project-tagline" class="form-label">Project Tagline</label>
                            <input type="text" id="project-tagline" name="tagline" class="form-control @error('tagline') is-invalid @enderror" placeholder="Project Tagline" value="{{ old('tagline') }}">
                            @error('tagline')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="cta-text" class="form-label">CTA Text</label>
                            <input type="text" id="cta-text" name="cta_text" class="form-control @error('cta_text') is-invalid @enderror" placeholder="CTA Text" value="{{ old('cta_text') }}">
                            @error('cta_text')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="cta-link" class="form-label">CTA Link</label>
                            <input type="url" id="cta-link" name="cta_link" class="form-control @error('cta_link') is-invalid @enderror" placeholder="CTA Link" value="{{ old('cta_link') }}">
                            @error('cta_link')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="form-title" class="form-label">Form Title</label>
                            <input type="text" id="form-title" name="form_title" class="form-control @error('form_title') is-invalid @enderror" placeholder="Form Title" value="{{ old('form_title') }}">
                            @error('form_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for="project-description" class="form-label">Project Description</label>
                            <textarea id="project-description" name="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Description">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for="success-message" class="form-label">Form Success Message</label>
                            <textarea id="success-message" name="success_message" class="form-control @error('success_message') is-invalid @enderror" rows="3" placeholder="Success Message">{{ old('success_message') }}</textarea>
                            @error('success_message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="payment-plan" class="form-label">Payment Plan</label>
                            <input type="text" id="payment-plan" name="payment_plan" class="form-control @error('payment_plan') is-invalid @enderror" placeholder="Payment Plan" value="{{ old('payment_plan') }}">
                            @error('payment_plan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="handover-date" class="form-label">Handover Date</label>
                            <input type="date" id="handover-date" name="handover_date" class="form-control @error('handover_date') is-invalid @enderror" placeholder="Handover Date" value="{{ old('handover_date') }}">
                            @error('handover_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="property-type" class="form-label">Property Type</label>
                            <select id="property-type" name="property_type" class="form-control @error('property_type') is-invalid @enderror" required>
                                <option value="" disabled selected>Select Property Type</option>
                                <option value="Villas" {{ old('property_type') == 'Villas' ? 'selected' : '' }}>Villas</option>
                                <option value="Residences" {{ old('property_type') == 'Residences' ? 'selected' : '' }}>Residences</option>
                                <option value="Bungalow" {{ old('property_type') == 'Bungalow' ? 'selected' : '' }}>Bungalow</option>
                                <option value="Apartment" {{ old('property_type') == 'Apartment' ? 'selected' : '' }}>Apartment</option>
                                <option value="Penthouse" {{ old('property_type') == 'Penthouse' ? 'selected' : '' }}>Penthouse</option>
                            </select>
                            @error('property_type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="developer-name" class="form-label">Developer Name</label>
                            <input type="text" id="developer-name" name="developer_name" class="form-control @error('developer_name') is-invalid @enderror" placeholder="Developer Name" value="{{ old('developer_name') }}">
                            @error('developer_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="bedroom-range" class="form-label">Bedroom Range</label>
                            <input type="text" id="bedroom-range" name="bedroom_range" class="form-control @error('bedroom_range') is-invalid @enderror" placeholder="e.g. 1-4" value="{{ old('bedroom_range') }}">
                            @error('bedroom_range')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" id="location" name="location" class="form-control @error('location') is-invalid @enderror" placeholder="Location" value="{{ old('location') }}">
                            @error('location')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="map-link" class="form-label">Map Embed Link</label>
                            <input type="url" id="map-link" name="map_link" class="form-control @error('map_link') is-invalid @enderror" placeholder="Map Embed Link" value="{{ old('map_link') }}">
                            @error('map_link')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="starting-price" class="form-label">Starting Price</label>
                            <input type="text" id="starting-price" name="starting_price" class="form-control @error('starting_price') is-invalid @enderror" placeholder="Starting Price" value="{{ old('starting_price') }}">
                            @error('starting_price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Media (Images & Videos)</h4>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <h5>Add Hero Image</h5>
                        <div class="dropzone bg-light-subtle py-5" id="heroImageDropzone">
                            <div class="fallback">
                                <input name="hero_image" type="file">
                            </div>
                            <div class="dz-message needsclick">
                                <i class="ri-upload-cloud-2-line fs-48 text-primary"></i>
                                <h3 class="mt-4">Drop your image here or click to upload</h3>
                            </div>
                        </div>
                        @error('hero_image')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <h5>Add Gallery Images</h5>
                        <div class="dropzone bg-light-subtle py-5" id="galleryImagesDropzone">
                            <div class="fallback">
                                <input name="gallery_images[]" type="file" multiple>
                            </div>
                            <div class="dz-message needsclick">
                                <i class="ri-upload-cloud-2-line fs-48 text-primary"></i>
                                <h3 class="mt-4">Drop images here or click to upload</h3>
                            </div>
                        </div>
                        @error('gallery_images.*')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <h5>Add Video Embed</h5>
                        <input type="url" name="videos[]" class="form-control @error('videos.*') is-invalid @enderror" placeholder="Enter YouTube/Vimeo embed link" value="{{ old('videos.0') }}">
                        @error('videos.*')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Payment & Floor Plans</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <label for="payment-plan-title" class="form-label">Payment Plan Title</label>
                            <input type="text" id="payment-plan-title" name="payment_plan_title" class="form-control @error('payment_plan_title') is-invalid @enderror" placeholder="Payment Plan Title" value="{{ old('payment_plan_title') }}">
                            @error('payment_plan_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label for="payment-plan-description" class="form-label">Payment Plan Description</label>
                            <textarea id="payment-plan-description" name="payment_plan_description" class="form-control @error('payment_plan_description') is-invalid @enderror" rows="3" placeholder="Payment Plan Description">{{ old('payment_plan_description') }}</textarea>
                            @error('payment_plan_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="payment-milestones" class="form-label">Payment Milestones</label>
                            <input type="text" id="payment-milestones" name="payment_milestones" class="form-control @error('payment_milestones') is-invalid @enderror" placeholder="Payment Milestones" value="{{ old('payment_milestones') }}">
                            @error('payment_milestones')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="floor-plans" class="form-label">Floor Plans</label>
                            <input type="text" id="floor-plans" name="floor_plans" class="form-control @error('floor_plans') is-invalid @enderror" placeholder="Floor Plans" value="{{ old('floor_plans') }}">
                            @error('floor_plans')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3 rounded">
                <div class="row justify-content-end g-2">
                    <div class="col-lg-2">
                        <button type="submit" class="btn btn-outline-primary w-100">Create Project</button>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{ route('projects.index') }}" class="btn btn-danger w-100">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section(!'script-bottom')
@endsection