@extends('layouts.master')
@section('content')
    <div class="px-20 py-10">
        <div class="text-center mb-8 animate-fade-in">
            <h1 class="text-4xl font-bold text-yellow-400 mb-2">New Arrivals</h1>
            <p class="text-gray-600 mb-4">Check out our New Arrivals</p>
            <div class="max-w-2xl mx-auto">
                <p class="text-gray-500 text-sm leading-relaxed">
                    Welcome to our latest collection of spiritual treasures! These newly added products have been carefully selected 
                    to enhance your spiritual journey. From sacred texts and meditation tools to spiritual artifacts, 
                    each item is designed to support your path to inner peace and enlightenment.
                </p>
            </div>
        </div>
        
        @if($newArrivals->count() > 0)
            <div class="grid grid-cols-4 px-12">
                @foreach($newArrivals as $product)
                <a href="{{route('viewproduct',$product->id)}}" class="bg-white rounded-md border border-gray-300 hover:shadow-lg transition-shadow block relative mx-2 my-2 px-4 py-4 group">
                    <!-- New Badge that appears on hover -->
                    <div class="absolute top-6 right-6 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded opacity-0 group-hover:opacity-100 group-hover:scale-110 group-hover:-translate-y-1 transition-all duration-300 transform z-10 shadow-lg">
                        NEW
                    </div>
                    <x-product-image :product="$product" size="medium" class="mb-2" />
                    <div class="">
                        <h3 class="font-semibold text-base mb-2 mt-2 mr-4">{{$product->name}}</h3>
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
                <h3 class="text-2xl font-bold text-gray-700 mb-4">No New Arrivals</h3>
                <p class="text-gray-600 mb-8">No new products have been added recently.</p>
                <a href="/" class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded animate-bounce-custom">
                    Browse All Products
                </a>
            </div>
        @endif
    </div>
@endsection 