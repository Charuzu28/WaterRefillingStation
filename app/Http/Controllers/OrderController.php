<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Category;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('category')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('orders.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'customer_name' => 'required|string',
            'quantity' => 'required|integer',
        ]);

        Order::create($request->all());
        return redirect()->route('orders.index');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $categories = Category::all();
        return view('orders.edit', compact('order', 'categories'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'customer_name' => 'required|string',
            'quantity' => 'required|integer',
        ]);

        $order->update($request->all());
        return redirect()->route('orders.index');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
    
}
