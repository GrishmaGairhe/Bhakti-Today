@extends('layouts.master')
@section('content')
    <div class="px-20 py-10">
        <div class="text-center mb-8 animate-fade-in">
            <h1 class="text-4xl font-bold text-yellow-400 mb-2">Latest Products</h1>
            <p class="text-gray-600 mb-4">Discover our latest spiritual products</p>

        </div>
        
        @if($latestproducts->count() > 0)
            <div class="grid grid-cols-4 px-12">
                @foreach($latestproducts as $product)
                <a href="{{route('viewproduct',$product->id)}}" class="bg-white rounded-md border border-gray-300 hover:shadow-lg transition-shadow block relative mx-2 my-2 px-4 py-4">
                    <x-product-image :product="$product" size="medium" class="mb-2" />
                    <div class="">
                        <h3 class="font-semibold text-base mb-2 mt-2 mr-0">{{$product->name}}</h3>
                        @if($product->description)
                            <p class="text-gray-600 text-sm mb-3 line-clamp-3 leading-relaxed">{{$product->description}}</p>
                        @endif
                        <div>
                            @if($product->discounted_price != '')
                            <span class="text-red-600 font-bold">Rs. {{$product->discounted_price}}</span>
                            <span class="text-gray-400 line-through text-sm ml-2">Rs. {{$product->price}}</span>
                            @else
                            <span class="text-red-600 font-bold">Rs. {{$product->price}}</span>
                            @endif
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        @else
            <div class="text-center py-16 animate-fade-in">
                <h3 class="text-2xl font-bold text-gray-700 mb-4">No Latest Products</h3>
                <p class="text-gray-600 mb-8">No products are available at the moment.</p>
                <a href="/" class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded animate-bounce-custom">
                    Browse All Products
                </a>
            </div>
        @endif
    </div>
@endsection