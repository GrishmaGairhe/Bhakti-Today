@extends('layouts.app')
@section('title', 'Orders')
@section('content')
    <table class="w-full">
        <tr class="bg-gray-200">
            <th class="p-2 border border-gray-300">Order Date</th>
            <th class="p-2 border border-gray-300">Product Picture</th>
            <th class="p-2 border border-gray-300">Product Name</th>
            <th class="p-2 border border-gray-300">Price</th>
            <th class="p-2 border border-gray-300">Quantity</th>
            <th class="p-2 border border-gray-300">Total Amount</th>
            <th class="p-2 border border-gray-300">Customer Name</th>
            <th class="p-2 border border-gray-300">Phone</th>
            <th class="p-2 border border-gray-300">Address</th>
            <th class="p-2 border border-gray-300">Payment Method</th>
            <th class="p-2 border border-gray-300">Payment Status</th>
            <th class="p-2 border border-gray-300">Order Status</th>
            <th class="p-2 border border-gray-300">Action</th>
        </tr>
        @foreach($orders as $order)
        <tr>
            <td class="p-2 border">{{ $order->created_at }}</td>
            <td class="p-2 border">
                <img src="{{ asset('images/products/' . $order->product->photopath) }}" alt="Product Image" class="w-16 h-16 object-cover">
            </td>
            <td class="p-2 border">{{ $order->product->name }}</td>
            <td class="p-2 border">{{$order->price}}</td>
            <td class="p-2 border">{{ $order->quantity }}</td>
            <td class="p-2 border">{{ $order->price * $order->quantity }}</td>
            <td class="p-2 border">{{ $order->name }}</td>
            <td class="p-2 border">{{ $order->phone }}</td>
            <td class="p-2 border">{{ $order->address }}</td>
            <td class="p-2 border">{{ $order->payment_method }}</td>
            <td class="p-2 border">{{ $order->payment_status }}</td>
            <td class="p-2 border">{{ $order->order_status }}</td>
            <td class="p-2 border flex flex-wrap gap-2 min-w-50">
                <a href="{{route('orders.status',[$order->id,'Pending'])}}" class="bg-gradient-to-r from-orange-400 to-orange-500 hover:from-orange-500 hover:to-orange-600 text-white px-3 py-1 rounded font-medium transition-all duration-200 shadow text-sm">Pending</a>
                <a href="{{route('orders.status',[$order->id,'Processing'])}}" class="bg-gradient-to-r from-yellow-500 to-yellow-600 hover:from-yellow-600 hover:to-yellow-700 text-white px-3 py-1 rounded font-medium transition-all duration-200 shadow text-sm">Processing</a>
                <a href="{{route('orders.status',[$order->id,'Delivered'])}}" class="bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white px-3 py-1 rounded font-medium transition-all duration-200 shadow text-sm">Delivered</a>
                <a href="{{route('orders.status',[$order->id,'Cancelled'])}}" class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-3 py-1 rounded font-medium transition-all duration-200 shadow text-sm">Cancelled</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection