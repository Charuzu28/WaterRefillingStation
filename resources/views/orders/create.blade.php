@extends('layouts.app')

@section('content')
    <h1 class="mb-4 text-white">Create Order</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('orders.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category:</label>
                    <select name="category_id" id="category_id" class="form-select" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="customer_name" class="form-label">Customer Name:</label>
                    <input type="text" name="customer_name" id="customer_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity:</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection

