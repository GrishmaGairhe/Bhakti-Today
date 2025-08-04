@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="grid grid-cols-3 gap-6 p-4">
    <div class="bg-gradient-to-r from-red-500 to-red-600 text-white p-6 rounded-lg shadow h-40 flex flex-col justify-between">
        <div>
            <h2 class="font-bold text-xl">Total Categories</h2>
        </div>
        <div class="flex justify-end">
            <p class="text-3xl font-bold">{{$totalcategories}}</p>
        </div>
    </div>
    <div class="bg-gradient-to-r from-red-400 to-red-500 text-white p-6 rounded-lg shadow h-40 flex flex-col justify-between">
        <div>
            <h2 class="font-bold text-xl">Total Products</h2>
        </div>
        <div class="flex justify-end">
            <p class="text-3xl font-bold">{{$totalproducts}}</p>
        </div>
    </div>
    <div class="bg-gradient-to-r from-red-600 to-red-700 text-white p-6 rounded-lg shadow h-40 flex flex-col justify-between">
        <div>
            <h2 class="font-bold text-xl">Total Orders</h2>
        </div>
        <div class="flex justify-end">
            <p class="text-3xl font-bold">{{$totalorders}}</p>
        </div>
    </div>
    <div class="bg-gradient-to-r from-orange-400 to-orange-500 text-white p-6 rounded-lg shadow h-40 flex flex-col justify-between">
        <div>
            <h2 class="font-bold text-xl">Pending Orders</h2>
        </div>
        <div class="flex justify-end">
            <p class="text-3xl font-bold">{{$pendingorders}}</p>
        </div>
    </div>
    <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 text-white p-6 rounded-lg shadow h-40 flex flex-col justify-between">
        <div>
            <h2 class="font-bold text-xl">Processing Orders</h2>
        </div>
        <div class="flex justify-end">
            <p class="text-3xl font-bold">{{$processingorders}}</p>
        </div>
    </div>
    <div class="bg-gradient-to-r from-green-500 to-green-600 text-white p-6 rounded-lg shadow h-40 flex flex-col justify-between">
        <div>
            <h2 class="font-bold text-xl">Delivered Orders</h2>
        </div>
        <div class="flex justify-end">
            <p class="text-3xl font-bold">{{$deliveredorders}}</p>
        </div>
    </div>
    <div class="bg-gradient-to-r from-gray-500 to-gray-600 text-white p-6 rounded-lg shadow h-40 flex flex-col justify-between">
        <div>
            <h2 class="font-bold text-xl">Cancelled Orders</h2>
        </div>
        <div class="flex justify-end">
            <p class="text-3xl font-bold">{{$cancelledorders}}</p>
        </div>
    </div>
     <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-6 rounded-lg shadow h-40 flex flex-col justify-between">
        <div>
            <h2 class="font-bold text-xl">Total Users</h2>
        </div>
        <div class="flex justify-end">
            <p class="text-3xl font-bold">{{$totalusers}}</p>
        </div>
    </div>
    
</div>

@endsection
