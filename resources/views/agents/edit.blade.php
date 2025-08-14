@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Agent</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('agents.update', $agent->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col-md-4 text-center">
                                <label for="photo" class="form-label">Photo</label>
                                @if($agent->photo)
                                    <img src="{{ asset('storage/' . $agent->photo) }}" alt="Photo" width="70" height="70" class="rounded-circle mb-2">
                                @endif
                                <input type="file" name="photo" id="photo" class="form-control" accept="image/*">
                                <small class="text-muted">Laisser vide pour garder la photo actuelle</small>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label for="full_name" class="form-label">Full Name</label>
                                    <input type="text" name="full_name" id="full_name" class="form-control" value="{{ $agent->full_name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="job_title" class="form-label">Job Title</label>
                                    <input type="text" name="job_title" id="job_title" class="form-control" value="{{ $agent->job_title }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control" value="{{ $agent->phone }}">
                                </div>
                                <div class="mb-3">
                                    <label for="whatsapp" class="form-label">WhatsApp</label>
                                    <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="{{ $agent->whatsapp }}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{ $agent->email }}">
                                </div>
                                <div class="mb-3">
                                    <label for="position" class="form-label">Position/Role</label>
                                    <input type="text" name="position" id="position" class="form-control" value="{{ $agent->position }}">
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-success">Update Agent</button>
                            <a href="{{ route('agents.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
