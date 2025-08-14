@extends('layouts.vertical', ['title' => 'Listing List', 'subTitle' => 'Real Estate'])

@section('content')

<div class="table-responsive">
    <table class="table align-middle text-nowrap table-hover table-centered mb-0">
        <thead class="bg-light-subtle">
            <tr>
                <th>#</th>
                <th>Property Title</th>
                <th>Size</th>
                <th>Type</th>
                <th>Status</th>
                <th>Location</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($properties as $property)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $property->property_name }}</td>
                <td>{{ $property->property_size }} ft²</td>
                <td>{{ $property->property_type }}</td>
                <td>
                    <span class="badge bg-success-subtle text-success py-1 px-2 fs-13">{{ $property->property_status }}</span>
                </td>
                <td>{{ $property->address }}</td>
                <td>${{ number_format($property->price, 2) }}</td>
                <td>
                    <a href="{{ route('properties.show', $property->id) }}" class="btn btn-light btn-sm">
                        <iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                    </a>
                    <a href="{{ route('properties.edit', $property->id) }}" class="btn btn-soft-primary btn-sm">
                        <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon>
                    </a>
                    <form action="{{ route('properties.destroy', $property->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-soft-danger btn-sm">
                            <iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
