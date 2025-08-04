@extends('layouts.master')
@section('content')
    <div class="flex justify-center pt-8 pb-8">
        <form action="{{ route('login') }}" method="post" class="bg-white shadow-lg rounded-lg p-6 border border-gray-200 max-w-sm w-full" autocomplete="off">
            <div class="text-center mb-5">
                <h2 class="text-2xl font-bold text-gray-800 mb-1">Login to Your Account</h2>
                <p class="text-gray-500 text-sm">Welcome back to Bhakti Today</p>
            </div>
            
            @include('layouts.alert')
            @csrf
            
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block font-medium text-gray-700 mb-1 text-sm">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your email address" 
                       class="w-full p-3 border border-gray-300 text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all" 
                       required autocomplete="username">
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block font-medium text-gray-700 mb-1 text-sm">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" 
                       class="w-full p-3 border border-gray-300 text-sm rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all" 
                       required autocomplete="current-password">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Forgot Password -->
            <div class="mb-5">
                <a href="{{ route('password.request') }}" class="text-red-600 hover:text-red-700 text-sm font-medium transition-colors">
                    Forgot your password?
                </a>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white rounded-md p-3 font-semibold text-base transition-all duration-300 transform hover:scale-105 shadow-md">
                Login
            </button>

            <!-- Register Link -->
            <div class="text-center mt-4">
                <span class="text-gray-500 text-sm">Don't have an account?</span>
                <a href="{{ route('register') }}" class="text-red-600 hover:text-red-700 font-medium ml-1 transition-colors text-sm">
                    Sign Up
                </a>
            </div>
        </form>
    </div>


@endsection