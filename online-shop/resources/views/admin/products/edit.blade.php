@php
    // dd($product->id)
@endphp
@extends('layouts.admin')
@section('content')
    <h2>Edit Product</h2>
    <form method="POST" action="{{ url('admin/products/'.$product->id) }}">
        @csrf
        @method('PUT')
        <label>Name</label>
        <input class="form-control" name="name" value="{{ old('name', $product->name) }}" />
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <input name="image" value="storage/app/public/{{ old('image', $product->image) }}" />
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button class="btn btn-primary">Edit</button>
        <a class="btn btn-secondary" href="{{ url('admin/products') }}">Cancel</a>
    </form>
    <a href="{{url('admin/products')}}">Home</a>
@endsection