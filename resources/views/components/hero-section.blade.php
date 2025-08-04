<!-- Hero Section Component -->
<div class="relative bg-gradient-to-br from-red-600 via-red-700 to-red-900 text-white overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-black bg-opacity-20"></div>
    <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Cpath d="m36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    
    <!-- Hero Content -->
    <div class="relative max-w-7xl mx-auto px-6 py-20 lg:py-32">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="text-center lg:text-left animate-fade-up">
                <!-- Main Heading -->
                <h1 class="text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    <span class="block glow-white">Welcome to</span>
                    <span class="block text-yellow-400 glow-yellow animate-float">Bhakti Today</span>
                </h1>
                
                <!-- Subtitle -->
                <p class="text-xl lg:text-2xl mb-8 text-gray-100 leading-relaxed">
                    Discover authentic spiritual products straight from 
                    <span class="text-yellow-300 font-semibold">Sri Vrindavan Dham</span> 
                    to enhance your devotional journey
                </p>
                
                <!-- Description -->
                <p class="text-lg mb-10 text-gray-200 max-w-2xl">
                    Start your spiritual journey today with our carefully curated collection of sacred items, 
                    books, and devotional accessories that bring divine blessings to your life.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ route('newarrivals') }}" 
                       class="bg-yellow-400 hover:bg-yellow-500 text-red-900 font-bold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center group">
                        <i class="fas fa-star mr-2 group-hover:animate-spin"></i>
                        Explore New Arrivals
                    </a>
                    <a href="#products" 
                       class="bg-transparent border-2 border-white hover:bg-white hover:text-red-900 text-white font-bold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105 flex items-center justify-center group">
                        <i class="fas fa-gift mr-2 group-hover:bounce"></i>
                        Shop All Products
                    </a>
                </div>
            </div>
            
            <!-- Hero Image/Visual -->
            <div class="relative animate-slide-right">
                <div class="relative z-10">
                    <!-- Main Hero Image -->
                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-3xl p-8 transform rotate-3 hover:rotate-0 transition-transform duration-500">
                        <img src="{{ asset('bhakti today.avif') }}" 
                             alt="Bhakti Today - Spiritual Products" 
                             class="w-full h-auto rounded-2xl shadow-2xl">
                    </div>
                    
                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 bg-yellow-400 text-red-900 rounded-full w-20 h-20 flex items-center justify-center shadow-lg bounce">
                        <i class="fas fa-om text-2xl"></i>
                    </div>
                    <div class="absolute -bottom-4 -left-4 bg-white text-red-600 rounded-full w-16 h-16 flex items-center justify-center shadow-lg animate-pulse">
                        <i class="fas fa-heart text-xl"></i>
                    </div>
                </div>
                
                <!-- Background Decorative Elements -->
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-red-300 rounded-3xl transform rotate-6 opacity-20 -z-10"></div>
                <div class="absolute inset-0 bg-gradient-to-l from-red-400 to-yellow-300 rounded-3xl transform -rotate-6 opacity-20 -z-20"></div>
            </div>
        </div>
        
        <!-- Features Section -->
        <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="text-center group">
                <div class="bg-white bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-opacity-20 transition-all">
                    <i class="fas fa-shipping-fast text-2xl text-yellow-400"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Fast Delivery</h3>
                <p class="text-gray-200">Quick and secure delivery of your spiritual essentials</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="text-center group">
                <div class="bg-white bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-opacity-20 transition-all">
                    <i class="fas fa-certificate text-2xl text-yellow-400"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Authentic Products</h3>
                <p class="text-gray-200">Genuine items sourced directly from Vrindavan</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="text-center group">
                <div class="bg-white bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-opacity-20 transition-all">
                    <i class="fas fa-hands-helping text-2xl text-yellow-400"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Spiritual Guidance</h3>
                <p class="text-gray-200">Expert support for your devotional journey</p>
            </div>
        </div>
    </div>
    
    <!-- Scroll Down Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
        <div class="animate-bounce">
            <a href="#products" class="text-white hover:text-yellow-400 transition-colors">
                <i class="fas fa-chevron-down text-2xl"></i>
            </a>
        </div>
    </div>
</div>