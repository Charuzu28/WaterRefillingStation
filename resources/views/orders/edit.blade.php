@extends('layouts.app')

@section('content')
    <h1 class="text-white">Edit Order</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('orders.update', $order->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category:</label>
                    <select name="category_id" id="category_id" class="form-select">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $order->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="customer_name" class="form-label">Customer Name:</label>
                    <input type="text" name="customer_name" id="customer_name" value="{{ $order->customer_name }}" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity:</label>
                    <input type="number" name="quantity" id="quantity" value="{{ $order->quantity }}" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
