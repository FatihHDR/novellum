<div>
<x-navbar />

<style>
    .review-hero {
        background: linear-gradient(135deg, #1D1D1F 0%, #2A2A2C 100%);
    }
    
    .review-card {
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }
    
    .review-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(212, 162, 118, 0.15);
    }
    
    .rating-star {
        transition: all 0.2s ease;
    }
    
    .rating-star.filled {
        color: #D4A276;
        transform: scale(1.1);
    }
    
    .category-filter {
        transition: all 0.3s ease;
    }
    
    .category-filter:hover,
    .category-filter.active {
        background: #D4A276;
        color: #1D1D1F;
    }
    
    .review-excerpt {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .parallax-element {
        animation: float 6s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
</style>

<!-- Hero Section -->
<section class="review-hero relative min-h-[70vh] flex items-center justify-center overflow-hidden pt-16">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full" 
             style="background-image: radial-gradient(circle at 2px 2px, #D4A276 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>
    
    <!-- Floating Elements -->
    <div class="parallax-element absolute top-20 left-10 w-3 h-3 bg-[#D4A276] rounded-full"></div>
    <div class="parallax-element absolute top-40 right-20 w-2 h-2 bg-[#D4A276] rounded-full" style="animation-delay: 2s;"></div>
    <div class="parallax-element absolute bottom-32 left-1/3 w-1.5 h-1.5 bg-[#D4A276] rounded-full" style="animation-delay: 4s;"></div>
    
    <div class="relative z-10 text-center px-6 max-w-4xl mx-auto">
        <div class="mb-8">
            <span class="inline-block px-6 py-3 text-sm font-medium text-[#D4A276] bg-[#D4A276]/10 rounded-full border border-[#D4A276]/20 backdrop-blur-sm">
                Literary Analysis Hub
            </span>
        </div>
        
        <h1 class="text-5xl md:text-7xl font-serif font-bold text-[#F5F5F0] mb-6 leading-tight">
            <span class="block">Critical</span>
            <span class="block text-[#D4A276] italic">Reviews</span>
        </h1>
        
        <p class="text-xl md:text-2xl text-[#4A4A4D] mb-10 max-w-3xl mx-auto leading-relaxed">
            Explore our comprehensive collection of literary criticism, from contemporary fiction to timeless classics
        </p>
        
        <!-- Search Bar -->
        <div class="relative max-w-2xl mx-auto mb-8">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-[#4A4A4D]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
            <input type="text" 
                   placeholder="Search reviews, authors, or books..." 
                   class="w-full pl-12 pr-4 py-4 bg-[#2A2A2C]/80 border border-[#4A4A4D] rounded-full text-[#F5F5F0] placeholder-[#4A4A4D] focus:border-[#D4A276] focus:ring-2 focus:ring-[#D4A276]/20 focus:outline-none backdrop-blur-sm">
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="py-16 bg-[#1D1D1F]">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="flex flex-wrap items-center justify-center gap-4 mb-12">
            <button class="category-filter active px-6 py-3 rounded-full text-sm font-medium bg-[#D4A276] text-[#1D1D1F]">
                All Reviews
            </button>
            <button class="category-filter px-6 py-3 rounded-full text-sm font-medium bg-[#2A2A2C] text-[#F5F5F0] border border-[#4A4A4D]">
                Contemporary Fiction
            </button>
            <button class="category-filter px-6 py-3 rounded-full text-sm font-medium bg-[#2A2A2C] text-[#F5F5F0] border border-[#4A4A4D]">
                Classic Literature
            </button>
            <button class="category-filter px-6 py-3 rounded-full text-sm font-medium bg-[#2A2A2C] text-[#F5F5F0] border border-[#4A4A4D]">
                Poetry
            </button>
            <button class="category-filter px-6 py-3 rounded-full text-sm font-medium bg-[#2A2A2C] text-[#F5F5F0] border border-[#4A4A4D]">
                Non-Fiction
            </button>
            <button class="category-filter px-6 py-3 rounded-full text-sm font-medium bg-[#2A2A2C] text-[#F5F5F0] border border-[#4A4A4D]">
                Essays
            </button>
        </div>
    </div>
</section>

<!-- Reviews Grid -->
<section class="py-20 bg-gradient-to-b from-[#1D1D1F] to-[#2A2A2C]">
    <div class="container mx-auto px-6 max-w-7xl">
        
        <!-- Featured Review -->
        <div class="mb-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#F5F5F0] mb-4">
                    Featured <span class="text-[#D4A276] italic">Analysis</span>
                </h2>
                <p class="text-lg text-[#4A4A4D]">Our editors' pick for this week</p>
            </div>
            
            <div class="group">
                <div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] border border-[#4A4A4D] hover:border-[#D4A276] transition-all duration-500">
                    <div class="lg:flex">
                        <!-- Book Cover -->
                        <div class="lg:w-1/3 aspect-square lg:aspect-auto bg-gradient-to-br from-[#D4A276]/30 to-[#F5F5F0]/10 flex items-center justify-center">
                            <div class="w-48 h-64 bg-[#D4A276] rounded-lg flex items-center justify-center shadow-2xl">
                                <div class="text-center">
                                    <div class="text-[#1D1D1F] font-serif font-bold text-xl mb-2">The Seven</div>
                                    <div class="text-[#1D1D1F] font-serif font-bold text-xl mb-4">Moons of</div>
                                    <div class="text-[#1D1D1F] font-serif font-bold text-xl mb-8">Maali Almeida</div>
                                    <div class="text-[#1D1D1F] text-sm">Shehan Karunatilaka</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="lg:w-2/3 p-8 lg:p-12">
                            <div class="flex items-center mb-6">
                                <span class="px-4 py-2 text-xs font-medium bg-[#D4A276] text-[#1D1D1F] rounded-full mr-4">Editor's Choice</span>
                                <span class="text-sm text-[#4A4A4D]">March 18, 2025</span>
                                <div class="ml-auto flex items-center">
                                    <div class="flex mr-3">
                                        <svg class="w-5 h-5 rating-star filled" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5 rating-star filled" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5 rating-star filled" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5 rating-star filled" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5 rating-star" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm font-medium text-[#D4A276]">4.8/5</span>
                                </div>
                            </div>
                            
                            <h3 class="text-3xl md:text-4xl font-serif font-bold text-[#F5F5F0] mb-6 group-hover:text-[#D4A276] transition-colors">
                                Magical Realism Meets Political Satire: A Masterpiece of Sri Lankan Literature
                            </h3>
                            
                            <p class="text-[#4A4A4D] leading-relaxed mb-8 text-lg">
                                Shehan Karunatilaka's Booker Prize-winning novel is a tour de force that combines supernatural elements with biting social commentary. Through the journey of photographer Maali Almeida in the afterlife, the author crafts a narrative that is both deeply personal and universally resonant, offering profound insights into war, memory, and the search for truth.
                            </p>
                            
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full mr-4 flex items-center justify-center">
                                        <span class="text-[#1D1D1F] font-bold text-sm">SM</span>
                                    </div>
                                    <div>
                                        <div class="text-[#F5F5F0] font-medium">Sarah Mitchell</div>
                                        <div class="text-sm text-[#4A4A4D]">Senior Literary Critic</div>
                                    </div>
                                </div>
                                
                                <a href="/reviews/1" class="group inline-flex items-center px-6 py-3 bg-[#D4A276] text-[#1D1D1F] font-semibold rounded-full hover:bg-[#F5F5F0] transition-all duration-300 transform hover:scale-105">
                                    <span>Read Full Review</span>
                                    <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Reviews Grid -->
        <div class="mb-12">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#F5F5F0] mb-12 text-center">
                Latest <span class="text-[#D4A276] italic">Reviews</span>
            </h2>
            
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
                <!-- Review Card 1 -->
                <div class="group review-card">
                    <div class="bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-2xl p-6 border border-[#4A4A4D] hover:border-[#D4A276] h-full">
                        <div class="aspect-[3/4] bg-gradient-to-br from-[#D4A276]/20 to-[#F5F5F0]/10 rounded-xl mb-6 flex items-center justify-center">
                            <div class="w-32 h-40 bg-[#4A4A4D] rounded-lg flex items-center justify-center">
                                <svg class="w-16 h-16 text-[#D4A276]" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 text-xs font-medium bg-[#4A4A4D] text-[#F5F5F0] rounded-full">Contemporary Fiction</span>
                            <div class="flex items-center">
                                <div class="flex mr-2">
                                    <svg class="w-4 h-4 rating-star filled" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 rating-star filled" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 rating-star filled" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 rating-star filled" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 rating-star" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                                <span class="text-xs text-[#D4A276]">4.2</span>
                            </div>
                        </div>
                        
                        <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-3 group-hover:text-[#D4A276] transition-colors">
                            Tomorrow, and Tomorrow, and Tomorrow
                        </h3>
                        
                        <p class="text-sm text-[#4A4A4D] mb-4">by Gabrielle Zevin</p>
                        
                        <p class="text-sm text-[#F5F5F0] review-excerpt leading-relaxed mb-6">
                            A brilliant exploration of friendship, creativity, and the video game industry. Zevin crafts a narrative that spans decades, examining how art, ambition, and human connection intersect in the digital age.
                        </p>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-[#D4A276] rounded-full mr-2 flex items-center justify-center">
                                    <span class="text-[#1D1D1F] font-bold text-xs">JD</span>
                                </div>
                                <div>
                                    <div class="text-xs font-medium text-[#F5F5F0]">James Chen</div>
                                    <div class="text-xs text-[#4A4A4D]">March 16, 2025</div>
                                </div>
                            </div>
                            <a href="#" class="text-[#D4A276] text-sm font-medium hover:underline">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Review Card 2 -->
                <div class="group review-card">
                    <div class="bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-2xl p-6 border border-[#4A4A4D] hover:border-[#D4A276] h-full">
                        <div class="aspect-[3/4] bg-gradient-to-br from-[#D4A276]/20 to-[#F5F5F0]/10 rounded-xl mb-6 flex items-center justify-center">
                            <div class="w-32 h-40 bg-[#4A4A4D] rounded-lg flex items-center justify-center">
                                <svg class="w-16 h-16 text-[#D4A276]" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 text-xs font-medium bg-[#4A4A4D] text-[#F5F5F0] rounded-full">Classic Literature</span>
                            <div class="flex items-center">
                                <div class="flex mr-2">
                                    <svg class="w-4 h-4 rating-star filled" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 rating-star filled" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 rating-star filled" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 rating-star filled" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 rating-star filled" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                                <span class="text-xs text-[#D4A276]">5.0</span>
                            </div>
                        </div>
                        
                        <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-3 group-hover:text-[#D4A276] transition-colors">
                            One Hundred Years of Solitude
                        </h3>
                        
                        <p class="text-sm text-[#4A4A4D] mb-4">by Gabriel García Márquez</p>
                        
                        <p class="text-sm text-[#F5F5F0] review-excerpt leading-relaxed mb-6">
                            A masterpiece that redefined literature through magical realism. Márquez weaves a multigenerational saga that captures the essence of Latin American history while exploring universal themes of love, loss, and the cyclical nature of time.
                        </p>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-[#D4A276] rounded-full mr-2 flex items-center justify-center">
                                    <span class="text-[#1D1D1F] font-bold text-xs">MR</span>
                                </div>
                                <div>
                                    <div class="text-xs font-medium text-[#F5F5F0]">Maria Rodriguez</div>
                                    <div class="text-xs text-[#4A4A4D]">March 14, 2025</div>
                                </div>
                            </div>
                            <a href="#" class="text-[#D4A276] text-sm font-medium hover:underline">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Review Card 3 -->
                <div class="group review-card">
                    <div class="bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-2xl p-6 border border-[#4A4A4D] hover:border-[#D4A276] h-full">
                        <div class="aspect-[3/4] bg-gradient-to-br from-[#D4A276]/20 to-[#F5F5F0]/10 rounded-xl mb-6 flex items-center justify-center">
                            <div class="w-32 h-40 bg-[#4A4A4D] rounded-lg flex items-center justify-center">
                                <svg class="w-16 h-16 text-[#D4A276]" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between mb-4">
                            <span class="px-3 py-1 text-xs font-medium bg-[#4A4A4D] text-[#F5F5F0] rounded-full">Poetry</span>
                            <div class="flex items-center">
                                <div class="flex mr-2">
                                    <svg class="w-4 h-4 rating-star filled" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 rating-star filled" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 rating-star filled" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 rating-star filled" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 rating-star" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                                <span class="text-xs text-[#D4A276]">4.5</span>
                            </div>
                        </div>
                        
                        <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-3 group-hover:text-[#D4A276] transition-colors">
                            Postcolonial Love Poem
                        </h3>
                        
                        <p class="text-sm text-[#4A4A4D] mb-4">by Natalie Diaz</p>
                        
                        <p class="text-sm text-[#F5F5F0] review-excerpt leading-relaxed mb-6">
                            A powerful collection that interrogates colonial violence while celebrating Indigenous resilience and love. Diaz's verses are both politically charged and deeply personal, creating a unique voice in contemporary American poetry.
                        </p>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-[#D4A276] rounded-full mr-2 flex items-center justify-center">
                                    <span class="text-[#1D1D1F] font-bold text-xs">AL</span>
                                </div>
                                <div>
                                    <div class="text-xs font-medium text-[#F5F5F0]">Alex Thompson</div>
                                    <div class="text-xs text-[#4A4A4D]">March 12, 2025</div>
                                </div>
                            </div>
                            <a href="#" class="text-[#D4A276] text-sm font-medium hover:underline">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center">
            <button class="group inline-flex items-center px-8 py-4 bg-[#2A2A2C] border border-[#4A4A4D] text-[#F5F5F0] font-semibold rounded-full hover:border-[#D4A276] hover:bg-[#D4A276] hover:text-[#1D1D1F] transition-all duration-300">
                <span>Load More Reviews</span>
                <svg class="w-5 h-5 ml-2 transition-transform group-hover:rotate-180" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </button>
        </div>
    </div>
</section>

<!-- Newsletter CTA -->
<section class="py-20 bg-[#1D1D1F] border-t border-[#4A4A4D]">
    <div class="container mx-auto px-6 max-w-4xl text-center">
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#F5F5F0] mb-6">
            Never Miss a <span class="text-[#D4A276] italic">Review</span>
        </h2>
        <p class="text-lg text-[#4A4A4D] mb-8 max-w-2xl mx-auto">
            Subscribe to our weekly newsletter and get the latest literary criticism delivered to your inbox
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
            <input type="email" 
                   placeholder="Your email address" 
                   class="flex-1 px-6 py-4 bg-[#2A2A2C] border border-[#4A4A4D] rounded-full text-[#F5F5F0] placeholder-[#4A4A4D] focus:border-[#D4A276] focus:outline-none">
            <button class="px-8 py-4 bg-[#D4A276] text-[#1D1D1F] font-semibold rounded-full hover:bg-[#F5F5F0] transition-colors">
                Subscribe
            </button>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Category filter functionality
    const filterButtons = document.querySelectorAll('.category-filter');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
        });
    });
    
    // Rating star hover effects
    const ratingStars = document.querySelectorAll('.rating-star');
    ratingStars.forEach(star => {
        star.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.2)';
        });
        
        star.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
});
</script>
</div>
