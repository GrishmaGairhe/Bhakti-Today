<!-- Divine Hero Section Component -->
<div class="relative min-h-screen bg-gradient-to-br from-orange-500 via-red-600 to-purple-800 text-white overflow-hidden">
    <!-- Sacred Geometry Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-black bg-opacity-30"></div>
        <!-- Mandala Pattern -->
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="mandala" x="0" y="0" width="50" height="50" patternUnits="userSpaceOnUse">
                        <circle cx="25" cy="25" r="20" fill="none" stroke="white" stroke-width="0.5"/>
                        <circle cx="25" cy="25" r="15" fill="none" stroke="white" stroke-width="0.3"/>
                        <circle cx="25" cy="25" r="10" fill="none" stroke="white" stroke-width="0.2"/>
                        <circle cx="25" cy="25" r="5" fill="none" stroke="white" stroke-width="0.1"/>
                        <path d="M25,5 L30,20 L25,25 L20,20 Z" fill="white" opacity="0.1"/>
                        <path d="M25,45 L30,30 L25,25 L20,30 Z" fill="white" opacity="0.1"/>
                        <path d="M5,25 L20,30 L25,25 L20,20 Z" fill="white" opacity="0.1"/>
                        <path d="M45,25 L30,30 L25,25 L30,20 Z" fill="white" opacity="0.1"/>
                    </pattern>
                </defs>
                <rect width="100" height="100" fill="url(#mandala)"/>
            </svg>
        </div>
        
        <!-- Floating Lotus Petals -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="lotus-petal animate-float-1"></div>
            <div class="lotus-petal animate-float-2"></div>
            <div class="lotus-petal animate-float-3"></div>
            <div class="lotus-petal animate-float-4"></div>
            <div class="lotus-petal animate-float-5"></div>
        </div>
        
        <!-- Divine Light Rays -->
        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-96 h-96 bg-gradient-radial from-yellow-300 via-transparent to-transparent opacity-20 animate-pulse-slow"></div>
    </div>
    
    <!-- Hero Content -->
    <div class="relative max-w-7xl mx-auto px-6 py-16 lg:py-24 min-h-screen flex items-center">
        <div class="grid lg:grid-cols-2 gap-16 items-center w-full">
            <!-- Text Content -->
            <div class="text-center lg:text-left space-y-8 animate-fade-up">
                <!-- Sacred Symbol -->
                <div class="flex justify-center lg:justify-start mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center shadow-2xl animate-spin-slow">
                        <span class="text-3xl text-white">🕉️</span>
                    </div>
                </div>
                
                <!-- Main Heading -->
                <div class="space-y-4">
                    <h1 class="text-6xl lg:text-7xl font-bold leading-tight">
                        <span class="block text-yellow-300 animate-glow-pulse">श्री</span>
                        <span class="block text-white text-shadow-glow">Bhakti Today</span>
                        <span class="block text-2xl lg:text-3xl text-orange-300 font-light mt-2">वृन्दावन धाम से</span>
                    </h1>
                </div>
                
                <!-- Divine Quote -->
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl p-6 border border-yellow-400 border-opacity-30">
                    <p class="text-xl lg:text-2xl italic text-yellow-200 mb-2">
                        "हरे कृष्ण हरे कृष्ण कृष्ण कृष्ण हरे हरे"
                    </p>
                    <p class="text-lg text-gray-200">
                        Divine spiritual products from the sacred land of Vrindavan
                    </p>
                </div>
                
                <!-- Description -->
                <p class="text-xl text-gray-200 leading-relaxed max-w-2xl">
                    Embark on a sacred journey with authentic spiritual treasures blessed by the divine energy of 
                    <span class="text-yellow-300 font-semibold">Sri Vrindavan Dham</span>. 
                    Each product carries the divine grace to elevate your spiritual practice.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center lg:justify-start pt-4">
                    <a href="{{ route('newarrivals') }}" 
                       class="group relative bg-gradient-to-r from-yellow-400 to-orange-500 hover:from-yellow-500 hover:to-orange-600 text-white font-bold py-5 px-10 rounded-full transition-all duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center overflow-hidden">
                        <span class="relative z-10 flex items-center">
                            <i class="fas fa-star mr-3 group-hover:animate-spin"></i>
                            Divine Collections
                        </span>
                        <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                    </a>
                    <a href="#products" 
                       class="group bg-transparent border-2 border-yellow-400 hover:bg-yellow-400 hover:text-purple-900 text-yellow-400 font-bold py-5 px-10 rounded-full transition-all duration-300 transform hover:scale-105 flex items-center justify-center">
                        <i class="fas fa-lotus mr-3 group-hover:animate-bounce"></i>
                        Sacred Shop
                    </a>
                </div>
                
                <!-- Trust Badges -->
                <div class="flex flex-wrap justify-center lg:justify-start gap-6 pt-6">
                    <div class="flex items-center space-x-2 bg-white bg-opacity-10 px-4 py-2 rounded-full">
                        <i class="fas fa-certificate text-yellow-400"></i>
                        <span class="text-sm">Authentic</span>
                    </div>
                    <div class="flex items-center space-x-2 bg-white bg-opacity-10 px-4 py-2 rounded-full">
                        <i class="fas fa-heart text-red-400"></i>
                        <span class="text-sm">Blessed</span>
                    </div>
                    <div class="flex items-center space-x-2 bg-white bg-opacity-10 px-4 py-2 rounded-full">
                        <i class="fas fa-shipping-fast text-green-400"></i>
                        <span class="text-sm">Fast Delivery</span>
                    </div>
                </div>
            </div>
            
            <!-- Hero Visual -->
            <div class="relative animate-slide-right">
                <!-- Main Image Container -->
                <div class="relative">
                    <!-- Sacred Frame -->
                    <div class="relative z-10 bg-gradient-to-br from-yellow-400 via-orange-500 to-red-600 p-2 rounded-3xl transform rotate-2 hover:rotate-0 transition-transform duration-700 shadow-2xl">
                        <div class="bg-white bg-opacity-95 rounded-2xl p-6">
                            <img src="{{ asset('bhakti today.avif') }}" 
                                 alt="Bhakti Today - Divine Spiritual Products" 
                                 class="w-full h-auto rounded-xl shadow-lg">
                        </div>
                    </div>
                    
                    <!-- Floating Sacred Elements -->
                    <div class="absolute -top-6 -right-6 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full w-24 h-24 flex items-center justify-center shadow-2xl animate-bounce-slow border-4 border-white">
                        <span class="text-2xl">🪷</span>
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full w-20 h-20 flex items-center justify-center shadow-2xl animate-pulse-slow border-4 border-white">
                        <span class="text-xl">🔔</span>
                    </div>
                    <div class="absolute top-1/2 -right-8 bg-gradient-to-br from-green-400 to-blue-500 rounded-full w-16 h-16 flex items-center justify-center shadow-xl animate-float border-3 border-white">
                        <span class="text-lg">📿</span>
                    </div>
                    
                    <!-- Divine Aura -->
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-orange-400 rounded-3xl transform rotate-6 opacity-20 -z-10 animate-pulse"></div>
                    <div class="absolute inset-0 bg-gradient-to-l from-purple-400 to-pink-400 rounded-3xl transform -rotate-6 opacity-20 -z-20 animate-pulse delay-1000"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-blue-400 to-green-400 rounded-3xl transform rotate-3 opacity-15 -z-30 animate-pulse delay-2000"></div>
                </div>
            </div>
        </div>
        
        <!-- Divine Features Section -->
        <div class="absolute bottom-20 left-0 right-0">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <!-- Feature 1 -->
                    <div class="text-center group">
                        <div class="bg-gradient-to-br from-yellow-400 to-orange-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform shadow-lg">
                            <i class="fas fa-temple text-2xl text-white"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-1 text-yellow-300">Sacred Source</h3>
                        <p class="text-sm text-gray-300">Direct from Vrindavan</p>
                    </div>
                    
                    <!-- Feature 2 -->
                    <div class="text-center group">
                        <div class="bg-gradient-to-br from-purple-500 to-pink-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform shadow-lg">
                            <i class="fas fa-praying-hands text-2xl text-white"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-1 text-yellow-300">Blessed Items</h3>
                        <p class="text-sm text-gray-300">Spiritually energized</p>
                    </div>
                    
                    <!-- Feature 3 -->
                    <div class="text-center group">
                        <div class="bg-gradient-to-br from-green-500 to-blue-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform shadow-lg">
                            <i class="fas fa-leaf text-2xl text-white"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-1 text-yellow-300">Pure & Natural</h3>
                        <p class="text-sm text-gray-300">Organic materials</p>
                    </div>
                    
                    <!-- Feature 4 -->
                    <div class="text-center group">
                        <div class="bg-gradient-to-br from-red-500 to-orange-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform shadow-lg">
                            <i class="fas fa-heart text-2xl text-white"></i>
                        </div>
                        <h3 class="text-lg font-semibold mb-1 text-yellow-300">Love & Devotion</h3>
                        <p class="text-sm text-gray-300">Made with bhakti</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Down Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
        <div class="animate-bounce">
            <a href="#products" class="text-yellow-400 hover:text-white transition-colors">
                <i class="fas fa-chevron-down text-3xl animate-pulse"></i>
            </a>
        </div>
    </div>
</div>

<!-- Custom Animations and Styles -->
<style>
    @keyframes float-1 {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(180deg); }
    }
    
    @keyframes float-2 {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-30px) rotate(-180deg); }
    }
    
    @keyframes float-3 {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-25px) rotate(90deg); }
    }
    
    @keyframes float-4 {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-35px) rotate(-90deg); }
    }
    
    @keyframes float-5 {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-15px) rotate(270deg); }
    }
    
    @keyframes glow-pulse {
        0%, 100% { text-shadow: 0 0 20px #fbbf24, 0 0 30px #f59e0b, 0 0 40px #d97706; }
        50% { text-shadow: 0 0 30px #fbbf24, 0 0 40px #f59e0b, 0 0 50px #d97706; }
    }
    
    @keyframes spin-slow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    
    @keyframes bounce-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    
    @keyframes pulse-slow {
        0%, 100% { opacity: 0.6; }
        50% { opacity: 1; }
    }
    
    .lotus-petal {
        position: absolute;
        width: 12px;
        height: 12px;
        background: linear-gradient(45deg, #fbbf24, #f59e0b);
        border-radius: 50% 0 50% 0;
        opacity: 0.7;
    }
    
    .lotus-petal:nth-child(1) {
        top: 20%;
        left: 10%;
        animation: float-1 8s ease-in-out infinite;
    }
    
    .lotus-petal:nth-child(2) {
        top: 30%;
        right: 15%;
        animation: float-2 6s ease-in-out infinite;
    }
    
    .lotus-petal:nth-child(3) {
        top: 60%;
        left: 20%;
        animation: float-3 10s ease-in-out infinite;
    }
    
    .lotus-petal:nth-child(4) {
        top: 70%;
        right: 25%;
        animation: float-4 7s ease-in-out infinite;
    }
    
    .lotus-petal:nth-child(5) {
        top: 80%;
        left: 50%;
        animation: float-5 9s ease-in-out infinite;
    }
    
    .animate-fade-up {
        animation: fadeUp 1.2s ease-out;
    }
    
    .animate-slide-right {
        animation: slideRight 1.5s ease-out;
    }
    
    .animate-glow-pulse {
        animation: glow-pulse 3s ease-in-out infinite;
    }
    
    .animate-spin-slow {
        animation: spin-slow 20s linear infinite;
    }
    
    .animate-bounce-slow {
        animation: bounce-slow 3s ease-in-out infinite;
    }
    
    .animate-pulse-slow {
        animation: pulse-slow 4s ease-in-out infinite;
    }
    
    .animate-float {
        animation: float-1 6s ease-in-out infinite;
    }
    
    .text-shadow-glow {
        text-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
    }
    
    .bg-gradient-radial {
        background: radial-gradient(circle, var(--tw-gradient-stops));
    }
    
    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes slideRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>