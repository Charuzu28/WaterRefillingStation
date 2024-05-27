@extends('layouts.app')

@section('content')
    <h1 class="text-white">Category Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Category ID: {{ $category->id }}</h5>
            <p class="card-text">Category Name: {{ $category->name }}</p>
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection
