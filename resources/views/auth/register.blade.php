@extends('layouts.master')
@section('content')
    <div class="flex justify-center pt-8 pb-8">
        <form action="{{ route('register') }}" method="post" class="bg-white shadow-lg rounded-lg p-6 border border-gray-200 max-w-sm w-full" autocomplete="off">
            <div class="text-center mb-5">
                <h2 class="text-2xl font-bold text-gray-800 mb-1">Create Account</h2>
                <p class="text-gray-500 text-sm">Join Bhakti Today</p>
            </div>
            @include('layouts.alert')
            @csrf
            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block font-medium text-gray-700 mb-1 text-sm">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your full name" 
                       class="w-full p-3 border border-gray-300 text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-red-500 transition-all" 
                       required autocomplete="new-password">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block font-medium text-gray-700 mb-1 text-sm">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your email address" 
                       class="w-full p-3 border border-gray-300 text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-red-500 transition-all" 
                       required autocomplete="new-password">
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block font-medium text-gray-700 mb-1 text-sm">Password</label>
                <input type="password" name="password" id="password" placeholder="Create a strong password" 
                       class="w-full p-3 border border-gray-300 text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-red-500 transition-all" 
                       required autocomplete="new-password">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <!-- Confirm Password -->
            <div class="mb-5">
                <label for="password_confirmation" class="block font-medium text-gray-700 mb-1 text-sm">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password" 
                       class="w-full p-3 border border-gray-300 text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-red-500 transition-all" 
                       required autocomplete="new-password">
            </div>
            <!-- Submit Button -->
            <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white rounded-md p-3 font-semibold text-base transition-all duration-300 transform hover:scale-105 shadow-md">
                Create Account
            </button>

        </form>
    </div>


@endsection