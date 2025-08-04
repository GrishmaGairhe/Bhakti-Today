<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhakti Today</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Glow Effects */
        .glow-red {
            text-shadow: 0 0 10px #ef4444, 0 0 20px #ef4444, 0 0 30px #ef4444;
        }
        
        .glow-blue {
            text-shadow: 0 0 10px #3b82f6, 0 0 20px #3b82f6, 0 0 30px #3b82f6;
        }
        
        .glow-green {
            text-shadow: 0 0 10px #10b981, 0 0 20px #10b981, 0 0 30px #10b981;
        }
        
        .glow-yellow {
            text-shadow: 0 0 10px #f59e0b, 0 0 20px #f59e0b, 0 0 30px #f59e0b;
        }
        
        .glow-purple {
            text-shadow: 0 0 10px #8b5cf6, 0 0 20px #8b5cf6, 0 0 30px #8b5cf6;
        }
        
        .glow-white {
            text-shadow: 0 0 10px #ffffff, 0 0 20px #ffffff, 0 0 30px #ffffff;
        }
        
        /* Animated Glow */
        .glow-animate {
            text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #ef4444, 0 0 40px #ef4444;
            transition: text-shadow 0.3s ease;
        }
        
        .glow-animate:hover {
            text-shadow: 0 0 15px #fff, 0 0 25px #fff, 0 0 35px #ef4444, 0 0 45px #ef4444;
        }
        
        /* Hover Glow */
        .glow-hover:hover {
            text-shadow: 0 0 2px currentColor;
            transition: text-shadow 0.3s ease;
        }
        
        /* Hero Section Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        
        .animate-fade-up {
            animation: fadeInUp 0.8s ease-out;
        }
        
        .animate-slide-right {
            animation: slideInRight 0.8s ease-out;
        }
        
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        
        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }
        
        /* Custom bounce animation for icons */
        @keyframes gentleBounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
        }
        
        .bounce {
            animation: gentleBounce 1s ease-in-out infinite;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.querySelector('.search-input');
            const clearBtn = document.querySelector('.clear-btn');
            
            if (searchInput && clearBtn) {
                // Apply styles to clear button
                clearBtn.style.position = 'absolute';
                clearBtn.style.right = '80px';
                clearBtn.style.top = '12px';
                clearBtn.style.background = 'none';
                clearBtn.style.border = 'none';
                clearBtn.style.color = '#666';
                clearBtn.style.cursor = 'pointer';
                clearBtn.style.padding = '4px';
                clearBtn.style.borderRadius = '50%';
                clearBtn.style.transition = 'all 0.2s';
                clearBtn.style.display = 'none';
                
                // Add hover effect
                clearBtn.addEventListener('mouseenter', function() {
                    this.style.background = '#f3f4f6';
                    this.style.color = '#374151';
                });
                
                clearBtn.addEventListener('mouseleave', function() {
                    this.style.background = 'none';
                    this.style.color = '#666';
                });
                
                // Show/hide clear button based on input value
                function toggleClearBtn() {
                    if (searchInput.value.length > 0) {
                        clearBtn.style.display = 'block';
                    } else {
                        clearBtn.style.display = 'none';
                    }
                }
                
                // Initial check
                toggleClearBtn();
                
                // Listen for input changes
                searchInput.addEventListener('input', toggleClearBtn);
                
                // Clear search functionality
                clearBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    searchInput.value = '';
                    searchInput.focus();
                    toggleClearBtn();
                });
            }
            
            // Restore cart count from sessionStorage on all pages
            restoreCartCount();
        });
        
        // Function to restore cart count from sessionStorage
        function restoreCartCount() {
            const storedCount = sessionStorage.getItem('cartCount');
            if (storedCount) {
                const cartIcon = document.querySelector('.fa-shopping-cart');
                if (cartIcon) {
                    const cartContainer = cartIcon.closest('a');
                    let badge = cartContainer.querySelector('span');
                    
                    if (parseInt(storedCount) > 0) {
                        if (badge) {
                            badge.textContent = storedCount;
                        } else {
                            // Create new badge
                            badge = document.createElement('span');
                            badge.className = 'absolute -top-2 -right-2 bg-yellow-400 text-red-800 text-xs px-1.5 py-0.5 rounded-full font-bold';
                            badge.textContent = storedCount;
                            cartContainer.appendChild(badge);
                        }
                    }
                }
            }
        }
        
        // Global function to update cart count (can be called from any page)
        function updateCartCount(quantity) {
            const cartIcon = document.querySelector('.fa-shopping-cart');
            if (cartIcon) {
                const cartContainer = cartIcon.closest('a');
                let badge = cartContainer.querySelector('span');
                
                // Get current count from badge or start with 0
                let currentCount = 0;
                if (badge) {
                    currentCount = parseInt(badge.textContent) || 0;
                }
                
                // Add the new quantity
                const newCount = currentCount + parseInt(quantity);
                
                if (newCount > 0) {
                    if (badge) {
                        badge.textContent = newCount;
                    } else {
                        // Create new badge
                        badge = document.createElement('span');
                        badge.className = 'absolute -top-2 -right-2 bg-yellow-400 text-red-800 text-xs px-1.5 py-0.5 rounded-full font-bold';
                        badge.textContent = newCount;
                        cartContainer.appendChild(badge);
                    }
                }
                
                // Store the updated count in sessionStorage
                sessionStorage.setItem('cartCount', newCount);
            }
        }
    </script>
</head>
<body>
    @include('layouts.alert')
    @php
        $categories = \App\Models\Category::orderBy('order', 'asc')->get();
    @endphp

    <div class="bg-gradient-to-r from-red-600 to-red-900 text-white sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-1">
            <div class="flex justify-between items-center mb-4">
                <div class="flex items-center">
                    <a href="/">
                        <img src="{{asset('bhakti today.avif')}}" alt="Logo" class="h-16 justify-center items-center ">
                    </a>
                </div>

                <div class="flex-1 max-w-2xl mx-8">
                    <form action="{{ route('search')}}" method="GET" class="search-form">
                        <div class="search-container relative">
                            <input type="text" name="search" placeholder="Search for spiritual products..." value="{{request('search')}}" 
                                   class="search-input w-full px-6 py-3 rounded-full border-0 shadow-lg focus:ring-2 focus:ring-red-300 focus:outline-none text-black text-lg pr-16">
                            <button type="submit" class="absolute right-0 top-0 bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-r-full transition-all">
                                <i class="fas fa-search text-xl"></i>
                            </button>
                            <button type="button" class="clear-btn">
                                <i class="fas fa-times text-lg"></i>
                            </button>
                        </div>
                    </form>
                </div>
                
                <div class="flex items-center space-x-4 ">
                    <div class="group relative">
                        <a href="{{ route('mycart') }}" class="bg-white bg-opacity-20 rounded-full w-10 h-10 flex items-center justify-center text-white hover:bg-opacity-30 transition-all">
                            <i class="fas fa-shopping-cart text-xl"></i>
                            @if(auth()->check())
                                @php
                                    $cartCount = \App\Models\Cart::where('user_id', auth()->id())->sum('quantity');
                                @endphp
                                @if($cartCount > 0)
                                    <span class="absolute -top-2 -right-2 bg-yellow-400 text-red-800 text-xs px-1.5 py-0.5 rounded-full font-bold">{{ $cartCount }}</span>
                                @endif
                            @endif
                        </a>
                        <div class="absolute top-full right-0 mt-2 bg-white rounded-md shadow-xl min-w-16 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border border-gray-200 z-10">
                            <div class="absolute -top-1 right-3 w-3 h-3 bg-white border-l border-t border-gray-200 transform rotate-45 z-20"></div>
                            <a href="{{ route('mycart') }}" class="block px-4 py-2 text-red-600 transition-colors font-medium hover:bg-gray-50 rounded-t text-sm">Cart</a>
                        </div>
                    </div>
                    
                    <div class="group relative">
                        <a href="{{ route('myorders') }}" class="bg-white bg-opacity-20 rounded-full w-10 h-10 flex items-center justify-center text-white hover:bg-opacity-30 transition-all">
                            <i class="fas fa-clipboard-list text-xl"></i>
                        </a>
                        <div class="absolute top-full left-1/2 mt-2 bg-white rounded-md shadow-xl min-w-16 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border border-gray-200 z-10 transform -translate-x-1/2">
                            <div class="absolute -top-1 left-1/2 w-3 h-3 bg-white border-l border-t border-gray-200 transform rotate-45 z-20 -translate-x-1/2"></div>
                            <a href="{{ route('myorders') }}" class="block px-4 py-2 text-red-600 hover:bg-gray-50 transition-colors font-medium rounded-t text-sm">Orders</a>
                        </div>
                    </div>
                    
                    @auth
                        <div class="group relative">
                            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="cursor-pointer">
                                <img src="{{asset('login.png')}}" alt="Profile" class="h-8 w-8 rounded-full border-2 border-white hover:opacity-80 transition-all">
                            </a>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" class="hidden">
                                @csrf
                            </form>
                            <div class="absolute top-full right-0 mt-2 bg-white rounded-md shadow-xl min-w-16 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border border-gray-200 z-10">
                                <div class="absolute -top-1 right-3 w-3 h-3 bg-white border-l border-t border-gray-200 transform rotate-45 z-20"></div>
                                <button type="submit" form="logout-form" class="w-full text-left px-3 py-2 text-red-600 hover:bg-gray-50 transition-colors font-medium rounded-t text-sm">Logout</button>
                            </div>
                        </div>
                    @else
                        <div class="group relative">
                            <a href="{{route('login')}}" class="bg-white bg-opacity-20 rounded-full w-10 h-10 flex items-center justify-center text-white hover:bg-opacity-30 transition-all">
                                <i class="fas fa-user text-xl"></i>
                            </a>
                            <div class="absolute top-full right-0 mt-2 bg-white rounded-md shadow-xl min-w-16 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border border-gray-200 z-10">
                                <div class="absolute -top-1 right-3 w-3 h-3 bg-white border-l border-t border-gray-200 transform rotate-45 z-20"></div>
                                <a href="{{route('login')}}" class="block px-4 py-2 text-red-600 hover:bg-gray-50 transition-colors font-medium rounded-t text-sm">Login</a>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>

            <div class="flex justify-center items-center pr-20 space-x-8">
                <a href="/" class="text-white hover:text-yellow-300 hover:text-shadow-lg font-medium transition-all duration-300 ease-in-out hover:scale-110 glow-hover">
                    <i class="fas fa-home mr-2"></i>
                    Home
                </a>
                <a href="{{ route('newarrivals') }}" class="text-white hover:text-yellow-300 hover:text-shadow-lg font-medium transition-all duration-300 ease-in-out hover:scale-110 glow-hover">New Arrivals</a>
                <a href="#" class="text-white hover:text-yellow-300 hover:text-shadow-lg font-medium transition-all duration-300 ease-in-out hover:scale-110 glow-hover">
                    <i class="fas fa-gift mr-2"></i>
                    Spiritual Gifts
                </a>
                <a href="#" class="text-white hover:text-yellow-300 hover:text-shadow-lg font-medium transition-all duration-300 ease-in-out hover:scale-110 glow-hover">BhaktiToday Specials</a>
                <div class="group relative">
                    <a href="#" class="text-white hover:text-yellow-300 hover:text-shadow-lg font-medium transition-all duration-300 ease-in-out flex items-center hover:scale-110 glow-hover">
                        Categories
                        <i class="fas fa-chevron-down ml-1 text-sm transition-transform group-hover:rotate-180"></i>
                    </a>
                    <div class="absolute top-full left-0 mt-1 bg-white rounded-xl shadow-2xl min-w-80 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border border-gray-100">
                        <div class="py-3">
                            <div class="grid grid-cols-2 gap-0">
                                @foreach ($categories as $category)
                                    <a href="{{route('categoryproducts',$category->id)}}" class="block px-4 py-3 text-gray-700 hover:bg-red-50 hover:text-red-600 transition-all duration-200 flex items-center justify-between group/item">
                                        <span class="font-medium text-sm">{{$category->name}}</span>
                                        <i class="fas fa-arrow-right text-xs opacity-0 group-hover/item:opacity-100 transition-opacity"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed bottom-6 right-6 z-50">
        <a href="https://wa.me/918445619575" target="_blank" 
           class="bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-lg transition-all flex items-center space-x-3">
            <i class="fab fa-whatsapp text-2xl"></i>
            <div class="text-sm">
                <div class="font-bold">WhatsApp</div>
                <div class="text-xs">+91 8445619575</div>
            </div>
        </a>
    </div>

    <div class="min-h-screen flex flex-col">
        <div class="flex-1 pb-8">
            @yield('content')
        </div>
    </div>

    <div class="bg-gradient-to-r from-gray-800 to-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-16">
                <div class="p-4">
                    <img src="{{asset('bhakti today.avif')}}" alt="Bhakti Today" class="h-12 mb-4">
                    <p class="text-gray-300">Bhakti Today Store is an initiative by Team Bhakti Today to bring to you all the items (straight from Sri Vrindavan Dham) you need to start your Bhakti Today.</p>
                </div>
                <div class="p-6">
                    <h4 class="font-semibold mb-6">Important Links</h4>
                    <ul class="space-y-3 text-gray-300">
                        <li><a href="#" class="hover:text-white hover:underline transition-colors">Shipping Policy</a></li>
                        <li><a href="#" class="hover:text-white hover:underline transition-colors">Terms and Conditions</a></li>
                        <li><a href="#" class="hover:text-white hover:underline transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white hover:underline transition-colors">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-white hover:underline transition-colors">Refund Policy</a></li>
                    </ul>
                </div>
                <div class="p-6">
                    <h4 class="font-semibold mb-6">Contact Us</h4>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center"><i class="fas fa-clock mr-2"></i>Monday to Friday</li>
                        <li class="flex items-center"><i class="fas fa-clock mr-2"></i>9am-5pm</li>
                        <li class="flex items-center"><i class="fas fa-envelope mr-2"></i>bhaktitoday108@gmail.com</li>
                        <li class="flex items-center"><i class="fas fa-phone mr-2"></i>+91 8445619575</li>
                    </ul>
                </div>
                <div class="p-6">
                    <h4 class="font-semibold mb-6">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white transition-colors"><i class="fab fa-instagram text-xl"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p>&copy; 2025 All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>