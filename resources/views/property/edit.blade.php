
@extends('layouts.vertical', ['title' => 'Edit Property', 'subTitle' => 'Real Estate'])

@section('content')
    @include('property.form', ['property' => $property])
@endsection
