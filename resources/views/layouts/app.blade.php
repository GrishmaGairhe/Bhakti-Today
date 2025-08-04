<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        @include('layouts.alert')
     <div class="flex bg-gray-100 min-h-screen">
        <div class="w-52 bg-gradient-to-b from-red-600 to-red-900 text-white min-h-screen sticky top-0">
            <img src="{{ asset('bhakti today.avif')}}" alt="Logo" class="h-16 w-16 mx-auto mt-4">
            <div class="mt-4">
                <a href="/dashboard" class="block pl-3 py-2 hover:bg-red-700 font-bold text-lg border-b border-red-500 flex items-center">
                    <i class="fas fa-chart-line mr-3"></i>Dashboard
                </a>
                <a href="{{route('categories.index')}}" class="block pl-3 py-2 hover:bg-red-700 font-bold text-lg border-b border-red-500 flex items-center">
                    <i class="fas fa-list mr-3"></i>Categories
                </a>
                <a href="{{route('products.index')}}" class="block pl-3 py-2 hover:bg-red-700 font-bold text-lg border-b border-red-500 flex items-center">
                    <i class="fas fa-cube mr-3"></i>Products
                </a>
                <a href="{{route('orders.index')}}" class="block pl-3 py-2 hover:bg-red-700 font-bold text-lg border-b border-red-500 flex items-center">
                    <i class="fas fa-clipboard-list mr-3"></i>Orders
                </a>
                <a href="" class="block pl-3 py-2 hover:bg-red-700 font-bold text-lg border-b border-red-500 flex items-center">
                    <i class="fas fa-user-friends mr-3"></i>Users
                </a>
                <form action="{{route('logout')}}" method="POST" class="block pl-3 py-2 hover:bg-red-700 font-bold text-lg border-b border-red-500">
                    @csrf
                    <button type="submit" class="w-full text-left flex items-center">
                        <i class="fas fa-sign-out-alt mr-3"></i>Logout
                    </button>
                </form>
            </div>
           
        </div>
            
         <div class="flex-1 p-4">
                <h1 class="font-bold text-2xl">@yield('title')</h1>
                <hr class="h-2 bg-gradient-to-r from-red-600 to-red-900 mb-4">
                <div class="bg-white rounded-lg shadow p-4">@yield('content')
                </div>
        </div>
     </div>
    </body>
</html>
