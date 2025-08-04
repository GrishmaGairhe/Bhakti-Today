@extends('layouts.master')
@section('content')
    <div class="bg-gradient-to-br from-red-50 to-orange-50 py-12">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Spiritual Gifts</h1>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Discover divine treasures and spiritual items that bring peace, prosperity, and blessings to your life. 
                    Each gift is carefully selected to enhance your spiritual journey.
                </p>
            </div>

            <!-- Featured Categories -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-om text-2xl text-red-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Sacred Symbols</h3>
                    <p class="text-gray-600">Om, Swastika, and other divine symbols</p>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-pray text-2xl text-orange-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Prayer Items</h3>
                    <p class="text-gray-600">Mala beads, prayer books, and meditation tools</p>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-gem text-2xl text-yellow-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Sacred Stones</h3>
                    <p class="text-gray-600">Crystals, gemstones, and healing stones</p>
                </div>
            </div>

            <!-- Product Grid -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Featured Spiritual Gifts</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Product Card 1 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="h-48 bg-gradient-to-br from-red-100 to-orange-100 flex items-center justify-center">
                            <i class="fas fa-om text-6xl text-red-500"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Sacred Om Pendant</h3>
                            <p class="text-gray-600 text-sm mb-4">Pure silver Om pendant with divine blessings</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-red-600">₹1,299</span>
                                <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="h-48 bg-gradient-to-br from-orange-100 to-yellow-100 flex items-center justify-center">
                            <i class="fas fa-pray text-6xl text-orange-500"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Rudraksha Mala</h3>
                            <p class="text-gray-600 text-sm mb-4">108 bead Rudraksha mala for meditation</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-red-600">₹2,499</span>
                                <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="h-48 bg-gradient-to-br from-yellow-100 to-green-100 flex items-center justify-center">
                            <i class="fas fa-gem text-6xl text-yellow-500"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Rose Quartz Crystal</h3>
                            <p class="text-gray-600 text-sm mb-4">Healing crystal for love and harmony</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-red-600">₹899</span>
                                <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="h-48 bg-gradient-to-br from-purple-100 to-pink-100 flex items-center justify-center">
                            <i class="fas fa-book-open text-6xl text-purple-500"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Bhagavad Gita</h3>
                            <p class="text-gray-600 text-sm mb-4">Sacred text with beautiful illustrations</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-red-600">₹599</span>
                                <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Special Offers -->
            <div class="bg-gradient-to-r from-red-600 to-orange-600 rounded-xl p-8 text-white text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Special Spiritual Offerings</h2>
                <p class="text-lg mb-6">Get 20% off on all spiritual gifts this month</p>
                <button class="bg-white text-red-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                    Shop Now
                </button>
            </div>

            <!-- Testimonials -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">What Our Devotees Say</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-user text-red-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Priya Sharma</h4>
                                <p class="text-sm text-gray-600">Regular Customer</p>
                            </div>
                        </div>
                        <p class="text-gray-600">"The Rudraksha mala has transformed my meditation practice. Highly recommended!"</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-user text-orange-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Rajesh Kumar</h4>
                                <p class="text-sm text-gray-600">Spiritual Seeker</p>
                            </div>
                        </div>
                        <p class="text-gray-600">"Authentic spiritual items with divine blessings. Thank you Bhakti Today!"</p>
                    </div>

                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-user text-yellow-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Meera Patel</h4>
                                <p class="text-sm text-gray-600">Yoga Practitioner</p>
                            </div>
                        </div>
                        <p class="text-gray-600">"The crystal collection is amazing. Perfect for my healing practice."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 