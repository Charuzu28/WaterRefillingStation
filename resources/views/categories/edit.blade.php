@extends('layouts.app')

@section('content')
    <h1>Edit Category</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update Category</button>
            </form>
        </div>
    </div>
@endsection
