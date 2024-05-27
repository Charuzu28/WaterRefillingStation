@extends('layouts.app')

@section('content')
    <h1 class="text-white">Order Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Order ID: {{ $order->id }}</h5>
            <p class="card-text">Category: {{ $order->category->name }}</p>
            <p class="card-text">Customer Name: {{ $order->customer_name }}</p>
            <p class="card-text">Quantity: {{ $order->quantity }}</p>
            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection
