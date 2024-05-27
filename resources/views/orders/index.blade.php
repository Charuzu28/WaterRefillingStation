@extends('layouts.app')

@section('content')
    <h1 class="text-white">Orders</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Create Order</a>
    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Customer Name</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->category->name }}</td>
                        <td>{{ $order->customer_name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>
                            <a href="{{ route('orders.show', $order->id) }}" class="btn btn-sm btn-info">Show</a>
                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
