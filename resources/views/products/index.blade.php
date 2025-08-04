@extends('layouts.app')
@section('title', 'Products')
@section('content')
<div class="flex justify-end mb-4">
        <a href="{{route('products.create')}}" class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 px-4 py-2 rounded text-white font-medium transition-all duration-200 shadow-lg">Add Product</a>
    </div>
     <table class="w-full">
        <tr class="bg-gray-200">
            <th class="p-2 border border-gray-300">Picture</th>
            <th class="p-2 border border-gray-300">Product Name</th>
            <th class="p-2 border border-gray-300">Price</th>
            <th class="p-2 border border-gray-300">Discounted_Price</th>
            <th class="p-2 border border-gray-300">Stock</th>
            <th class="p-2 border border-gray-300">Category</th>
            <th class="p-2 border border-gray-300">Description</th>
            <th class="p-2 border border-gray-300">Action</th>  
        </tr>
        @foreach($products as $product)
        <tr>
            <td class="p-2 border">
                <x-product-image :product="$product" size="table" />
            </td>
            <td class="p-2 border">{{$product->name}}</td>
            <td class="p-2 border">{{$product->price}}</td>       
            <td class="p-2 border">{{$product->discounted_price}}</td>    
            <td class="p-2 border">{{$product->stock}}</td>     
            <td class="p-2 border">{{$product->category->name}}</td>                                    
            <td class="p-2 border">{{$product->description}}</td>               
            <td class="p-2 border text-center">
               <a href="{{route('products.edit',$product->id)}}" class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 px-3 py-1 rounded text-white font-medium transition-all duration-200 shadow">Edit</a>
               <a href="{{route('products.destroy',$product->id)}}" onclick="return confirm ('Are you sure to Delete?')" class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 px-3 py-1 rounded text-white font-medium transition-all duration-200 shadow ml-2">Delete</a>
            </td>               
        </tr>
        @endforeach
     </table>
@endsection