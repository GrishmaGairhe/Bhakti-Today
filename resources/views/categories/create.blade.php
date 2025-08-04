@extends('layouts.app')
@section('title', 'Create Category')
@section('content')
    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <input type="text" name="order" placeholder="Order" class="border border-gray-300 p-2 rounded w-full mb-4">
        @error('order')
            <div class="text-red-500 mb-2 -mt-3">{{ $message }}</div>
        @enderror
        <input type="text" name="name" placeholder="Category Name" class="border border-gray-300 p-2 rounded w-full mb-4" value="{{ old('name') }}">
        @error('name')
            <div class="text-red-500 mb-2 -mt-3">{{ $message }}</div>
        @enderror
        <div class="flex justify-center">
            <button type="submit" class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 px-6 py-2 rounded text-white font-medium transition-all duration-200 shadow-lg">Create Category</button>
            <a href="{{route('categories.index')}}" class="bg-gradient-to-r from-gray-400 to-gray-500 hover:from-gray-500 hover:to-gray-600 px-6 py-2 rounded text-white font-medium transition-all duration-200 shadow-lg ml-3">Cancel</a>
        </div>
    </form>
@endsection