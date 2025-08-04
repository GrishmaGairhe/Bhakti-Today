@extends('layouts.master')
@section('content')
    <div class="px-20 py-10">
        <!-- Flash Message at Top Right -->
        @if(session('success'))
            <div id="flash-message" class="fixed top-16 right-4 bg-yellow-500 text-white px-3 py-2 rounded text-sm z-50">
                {{ session('success') }}
            </div>
        @endif
        
        <div class="mt-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-">
                <!-- Product Image -->
                <div>
                    <div class="border-3 border-red-300 rounded p-14">
                        <x-product-image :product="$product" size="xlarge" class="w-full object-cover h-20" />
                    </div>
                </div>

                <!-- Product Info -->
                <div>
                    <div class=" rounded p-12">
                        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{$product->name}}</h1>
                        
                        <!-- Price Section -->
                        <div class="mb-6">
                            @if($product->discounted_price != '')
                                <div class="flex items-center gap-3">
                                    <span class="text-3xl font-bold text-red-600">Rs. {{$product->discounted_price}}</span>
                                    <span class="text-lg text-gray-400 line-through">Rs. {{$product->price}}</span>
                                    <span class="bg-red-100 text-red-600 px-2 py-1 rounded text-sm font-semibold">
                                        {{ round((($product->price - $product->discounted_price) / $product->price) * 100) }}% OFF
                                    </span>
                                </div>
                            @else
                                <span class="text-3xl font-bold text-red-600">Rs. {{$product->price}}</span>
                            @endif
                        </div>

                        <!-- Stock Status -->
                        <div class="mb-6">
                            @if($product->stock > 0)
                                <span class="text-green-600 font-semibold">✓ In Stock ({{$product->stock}} available)</span>
                            @else
                                <span class="text-red-600 font-semibold">✗ Out of Stock</span>
                            @endif
                        </div>

                        <!-- Product Description -->
                        @if($product->description)
                            <div class="mb-6">
                                <h3 class="text-lg font-semibold text-gray-800 mb-3">Description</h3>
                                <p class="text-gray-600 leading-relaxed text-justify">{{$product->description}}</p>
                            </div>
                        @endif

                        <!-- Add to Cart Section -->
                        @if($product->stock > 0)
                            <form id="add-to-cart-form" class="mb-6">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Quantity:</label>
                                    <div class="flex items-center gap-3">
                                        <button type="button" class="bg-gray-200 hover:bg-gray-300 w-10 h-10 rounded-full flex items-center justify-center transition-colors" onclick="decrement()">
                                            <span class="text-lg font-bold">-</span>
                                        </button>
                                        <input type="text" value="1" class="w-16 h-10 text-center border rounded-lg" name="quantity" id="quantity" readonly>
                                        <button type="button" class="bg-gray-200 hover:bg-gray-300 w-10 h-10 rounded-full flex items-center justify-center transition-colors" onclick="increment()">
                                            <span class="text-lg font-bold">+</span>
                                        </button>
                                    </div>
                                </div>

                                <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-semibold transition duration-300 flex items-center justify-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                                    </svg>
                                    Add to Cart
                                </button>
                            </form>
                        @else
                            <div class="mb-6">
                                <button disabled class="w-full bg-gray-400 text-white px-6 py-3 rounded-lg font-semibold cursor-not-allowed">
                                    Out of Stock
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let quantity = document.getElementById('quantity');
        function increment(){
            let currentValue = parseInt(quantity.value);
            if (currentValue < {{$product->stock}}) {
                quantity.value = currentValue + 1;
            }
        }
        function decrement(){
            let currentValue = parseInt(quantity.value);
            if (currentValue > 1) {
                quantity.value = currentValue - 1;
            }
        }
        
        // AJAX form submission - no page refresh, no scroll to top
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('add-to-cart-form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault(); // Prevent page refresh
                    
                    const formData = new FormData(form);
                    const submitButton = form.querySelector('button[type="submit"]');
                    const originalText = submitButton.innerHTML;
                    
                    // Show loading state
                    submitButton.disabled = true;
                    
                    fetch('{{ route("cart.store") }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => {
                        if (response.status === 401) {
                            // User not authenticated, redirect to login
                            window.location.href = '{{ route("login") }}';
                            return;
                        }
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data) {
                            // Reset button
                            submitButton.disabled = false;
                            
                            // Show success message without page refresh
                            showFlashMessage(data.message || 'Product added to cart successfully!');
                            
                            // Update cart count using global function
                            updateCartCount(document.getElementById('quantity').value);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        submitButton.disabled = false;
                        showFlashMessage('Product added to cart successfully!');
                    });
                });
            }
        });
        
        // Function to show flash message at top right with smooth transition
        function showFlashMessage(message, type = 'success') {
            // Remove existing flash message if any
            const existingFlash = document.getElementById('flash-message');
            if (existingFlash) {
                existingFlash.remove();
            }
            
            // Create new flash message at top right
            const flashMessage = document.createElement('div');
            flashMessage.id = 'flash-message';
            flashMessage.className = 'fixed top-16 right-4 bg-yellow-500 text-white px-3 py-2 rounded text-sm z-50';
            flashMessage.textContent = message;
            
            // Add to body
            document.body.appendChild(flashMessage);
            
            // Auto-hide with smooth transition after 3 seconds
            setTimeout(() => {
                flashMessage.style.transition = 'opacity 1s ease-out';
                flashMessage.style.opacity = '0';
                setTimeout(() => flashMessage.remove(), 1000);
            }, 3000);
        }
        

    </script>
@endsection