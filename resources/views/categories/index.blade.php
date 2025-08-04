@extends('layouts.app')
@section('title', 'Categories')
@section('content')
    <div class="flex justify-end mb-4">
        <a href="{{route('categories.create')}}" class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 px-4 py-2 rounded text-white font-medium transition-all duration-200 shadow-lg">Add Category</a>
    </div>
    <table class="w-full">
        <tr class="bg-gray-200">
            <th class="p-2 border border-gray-300">Order</th>
            <th class="p-2 border border-gray-300">Category Name</th>
            <th class="p-2 border border-gray-300">Action</th>
        </tr>
        @foreach($categories as $category)
        <tr class="text-center">
            <td class="p-2 border">{{$category->order}}</td>
            <td class="p-2 border">{{$category->name}}</td>
            <td class="p-2 border">
                <a href="{{route('categories.edit',$category->id)}}" class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white px-3 py-1 rounded font-medium transition-all duration-200 shadow">Edit</a>
                <a href="{{route('categories.destroy',$category->id)}}" onclick="return confirm('Are you sure to delete?')" class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-3 py-1 rounded font-medium transition-all duration-200 shadow ml-2">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection