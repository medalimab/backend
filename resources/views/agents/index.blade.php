@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Agents List</h4>
                    <a href="{{ route('agents.create') }}" class="btn btn-primary">Add Agent</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Full Name</th>
                                    <th>Job Title</th>
                                    <th>Phone</th>
                                    <th>WhatsApp</th>
                                    <th>Email</th>
                                    <th>Position</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($agents as $agent)
                                    <tr>
                                        <td>
                                            @if($agent->photo)
                                                <img src="{{ asset('storage/' . $agent->photo) }}" alt="Photo" width="50" height="50" class="rounded-circle">
                                            @else
                                                <span class="text-muted">No Photo</span>
                                            @endif
                                        </td>
                                        <td>{{ $agent->full_name }}</td>
                                        <td>{{ $agent->job_title }}</td>
                                        <td>{{ $agent->phone }}</td>
                                        <td>{{ $agent->whatsapp }}</td>
                                        <td>{{ $agent->email }}</td>
                                        <td>{{ $agent->position }}</td>
                                        <td>
                                            <a href="{{ route('agents.edit', $agent->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('agents.destroy', $agent->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this agent?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if($agents->isEmpty())
                            <div class="text-center text-muted">No agents found.</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
