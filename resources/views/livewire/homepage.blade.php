<x-layouts.app>
<!-- Hero Section dengan Video Background -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-[#1D1D1F] via-[#2A2A2C] to-[#1D1D1F] opacity-95"></div>
    
    <!-- Floating Elements -->
    <div class="absolute top-20 left-10 w-2 h-2 bg-[#D4A276] rounded-full animate-pulse"></div>
    <div class="absolute top-40 right-20 w-1 h-1 bg-[#D4A276] rounded-full animate-ping"></div>
    <div class="absolute bottom-32 left-1/4 w-1.5 h-1.5 bg-[#D4A276] rounded-full animate-pulse delay-1000"></div>
    
    <!-- Main Hero Content -->
    <div class="relative z-10 text-center px-6 max-w-6xl mx-auto">
        <div class="mb-8">
            <span class="inline-block px-6 py-2 text-sm font-medium text-[#D4A276] bg-[#D4A276]/10 rounded-full border border-[#D4A276]/20 backdrop-blur-sm">
                Literary Excellence Redefined
            </span>
        </div>
        
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-serif font-bold mb-8 leading-tight">
            <span class="text-[#F5F5F0]">Where Modern</span><br>
            <span class="text-[#D4A276] italic">Criticism</span>
            <span class="text-[#F5F5F0]">Meets</span><br>
            <span class="bg-gradient-to-r from-[#D4A276] to-[#F5F5F0] bg-clip-text text-transparent">Timeless Stories</span>
        </h1>
        
        <p class="text-xl md:text-2xl text-[#4A4A4D] mb-12 max-w-4xl mx-auto leading-relaxed font-light">
            A sanctuary for discerning readers seeking profound literary analysis beyond surface-level reviews. 
            Discover the art of deep criticism in our curated digital space.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
            <a href="#explore" class="group relative inline-flex items-center px-8 py-4 bg-[#D4A276] text-[#1D1D1F] font-semibold rounded-full overflow-hidden transition-all duration-300 hover:shadow-2xl hover:shadow-[#D4A276]/25 hover:-translate-y-1">
                <span class="relative z-10">Begin Your Journey</span>
                <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
                <div class="absolute inset-0 bg-[#F5F5F0] scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
            </a>
            
            <a href="#featured" class="group inline-flex items-center px-8 py-4 border-2 border-[#4A4A4D] text-[#F5F5F0] font-semibold rounded-full hover:border-[#D4A276] hover:text-[#D4A276] transition-all duration-300">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                </svg>
                Featured Reviews
            </a>
        </div>
        
        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="group">
                <div class="text-3xl md:text-4xl font-bold text-[#D4A276] mb-2 group-hover:scale-110 transition-transform">500+</div>
                <div class="text-sm text-[#4A4A4D] uppercase tracking-wider">Deep Reviews</div>
            </div>
            <div class="group">
                <div class="text-3xl md:text-4xl font-bold text-[#D4A276] mb-2 group-hover:scale-110 transition-transform">50+</div>
                <div class="text-sm text-[#4A4A4D] uppercase tracking-wider">Authors Featured</div>
            </div>
            <div class="group">
                <div class="text-3xl md:text-4xl font-bold text-[#D4A276] mb-2 group-hover:scale-110 transition-transform">10K+</div>
                <div class="text-sm text-[#4A4A4D] uppercase tracking-wider">Readers</div>
            </div>
            <div class="group">
                <div class="text-3xl md:text-4xl font-bold text-[#D4A276] mb-2 group-hover:scale-110 transition-transform">5</div>
                <div class="text-sm text-[#4A4A4D] uppercase tracking-wider">Years Experience</div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-[#D4A276]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
    </div>
</section>

<!-- Features Section -->
<section id="explore" class="py-24 bg-gradient-to-b from-[#1D1D1F] to-[#2A2A2C]">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-[#F5F5F0] mb-6">
                Discover Literary <span class="text-[#D4A276] italic">Excellence</span>
            </h2>
            <p class="text-xl text-[#4A4A4D] max-w-3xl mx-auto">
                Immerse yourself in thoughtful analysis, curated insights, and the timeless art of literary criticism
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Mission Card -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-[#D4A276] to-[#F5F5F0] rounded-2xl blur opacity-20 group-hover:opacity-40 transition-opacity"></div>
                <div class="relative bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-2xl p-8 border border-[#4A4A4D] hover:border-[#D4A276] transition-all duration-500 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-2xl flex items-center justify-center mb-6 transform group-hover:rotate-12 transition-transform">
                        <svg class="w-8 h-8 text-[#1D1D1F]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-[#D4A276] mb-4">Deep Literary Analysis</h3>
                    <p class="text-[#F5F5F0] leading-relaxed mb-6">
                        Beyond simple ratings, we dive into the heart of every story. Our critics explore themes, prose, narrative structure, and cultural impact with scholarly depth.
                    </p>
                    <div class="flex items-center text-[#D4A276] font-medium group-hover:translate-x-2 transition-transform">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Curation Card -->
            <div class="group relative">
                <div class="absolute inset-0 bg-gradient-to-r from-[#D4A276] to-[#F5F5F0] rounded-2xl blur opacity-20 group-hover:opacity-40 transition-opacity"></div>
                <div class="relative bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-2xl p-8 border border-[#4A4A4D] hover:border-[#D4A276] transition-all duration-500 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-2xl flex items-center justify-center mb-6 transform group-hover:rotate-12 transition-transform">
                        <svg class="w-8 h-8 text-[#1D1D1F]" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12zm-9 7a1 1 0 012 0v1.586l2.293-2.293a1 1 0 111.414 1.414L6.414 15H8a1 1 0 010 2H4a1 1 0 01-1-1v-4zm13-1a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 010-2h1.586l-2.293-2.293a1 1 0 111.414-1.414L15.586 13V12a1 1 0 011-1z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-[#D4A276] mb-4">Curated Collections</h3>
                    <p class="text-[#F5F5F0] leading-relaxed mb-6">
                        Discover handpicked reading lists, exclusive author interviews, and carefully crafted essays that guide your literary journey through both classics and contemporary works.
                    </p>
                    <div class="flex items-center text-[#D4A276] font-medium group-hover:translate-x-2 transition-transform">
                        <span>Explore Collections</span>
                        <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Community Card -->
            <div class="group relative md:col-span-2 lg:col-span-1">
                <div class="absolute inset-0 bg-gradient-to-r from-[#D4A276] to-[#F5F5F0] rounded-2xl blur opacity-20 group-hover:opacity-40 transition-opacity"></div>
                <div class="relative bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-2xl p-8 border border-[#4A4A4D] hover:border-[#D4A276] transition-all duration-500 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-2xl flex items-center justify-center mb-6 transform group-hover:rotate-12 transition-transform">
                        <svg class="w-8 h-8 text-[#1D1D1F]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-[#D4A276] mb-4">Discerning Community</h3>
                    <p class="text-[#F5F5F0] leading-relaxed mb-6">
                        Join a community of thoughtful readers, lifelong learners, and literary enthusiasts who seek meaningful connections with the stories that shape our world.
                    </p>
                    <div class="flex items-center text-[#D4A276] font-medium group-hover:translate-x-2 transition-transform">
                        <span>Join Community</span>
                        <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Reviews Section -->
<section id="featured" class="py-24 bg-[#1D1D1F] relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-full h-full" style="background-image: radial-gradient(circle at 1px 1px, #D4A276 1px, transparent 0); background-size: 50px 50px;"></div>
    </div>
    
    <div class="relative container mx-auto px-6 max-w-7xl">
        <div class="text-center mb-20">
            <span class="inline-block px-6 py-2 text-sm font-medium text-[#D4A276] bg-[#D4A276]/10 rounded-full border border-[#D4A276]/20 mb-6">
                Latest Insights
            </span>
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-[#F5F5F0] mb-6">
                Recent <span class="text-[#D4A276] italic">Reviews</span>
            </h2>
            <p class="text-xl text-[#4A4A4D] max-w-3xl mx-auto">
                Dive into our latest literary explorations and critical analyses
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Featured Review 1 -->
            <div class="group lg:col-span-2">
                <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] border border-[#4A4A4D] hover:border-[#D4A276] transition-all duration-500">
                    <div class="aspect-video bg-gradient-to-br from-[#D4A276]/20 to-[#F5F5F0]/10 flex items-center justify-center">
                        <div class="w-24 h-24 bg-[#D4A276] rounded-full flex items-center justify-center">
                            <svg class="w-12 h-12 text-[#1D1D1F]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center mb-4">
                            <span class="px-3 py-1 text-xs font-medium bg-[#D4A276] text-[#1D1D1F] rounded-full">Featured</span>
                            <span class="ml-3 text-sm text-[#4A4A4D]">March 15, 2025</span>
                        </div>
                        <h3 class="text-2xl font-serif font-bold text-[#F5F5F0] mb-4 group-hover:text-[#D4A276] transition-colors">
                            The Unreliable Narrator in Modern Fiction: A Deep Dive
                        </h3>
                        <p class="text-[#4A4A4D] leading-relaxed mb-6">
                            An extensive analysis of how contemporary authors use unreliable narration to challenge reader assumptions and create profound emotional impacts. We explore works by Gillian Flynn, Kazuo Ishiguro, and Elena Ferrante.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-[#D4A276] rounded-full mr-3"></div>
                                <div>
                                    <div class="text-sm font-medium text-[#F5F5F0]">Sarah Mitchell</div>
                                    <div class="text-xs text-[#4A4A4D]">Senior Literary Critic</div>
                                </div>
                            </div>
                            <div class="flex items-center text-[#D4A276] font-medium group-hover:translate-x-2 transition-transform">
                                <span>Read Analysis</span>
                                <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Reviews -->
            <div class="space-y-8">
                <div class="group">
                    <div class="bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-xl p-6 border border-[#4A4A4D] hover:border-[#D4A276] transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-[#D4A276]/30 to-[#F5F5F0]/10 rounded-lg flex items-center justify-center">
                                <svg class="w-8 h-8 text-[#D4A276]" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-serif font-bold text-[#F5F5F0] mb-2 group-hover:text-[#D4A276] transition-colors">
                                    Climate Fiction: Literature's New Frontier
                                </h4>
                                <p class="text-sm text-[#4A4A4D] mb-3">
                                    Exploring how authors address environmental themes in contemporary literature.
                                </p>
                                <div class="text-xs text-[#4A4A4D]">March 12, 2025</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group">
                    <div class="bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-xl p-6 border border-[#4A4A4D] hover:border-[#D4A276] transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-[#D4A276]/30 to-[#F5F5F0]/10 rounded-lg flex items-center justify-center">
                                <svg class="w-8 h-8 text-[#D4A276]" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-serif font-bold text-[#F5F5F0] mb-2 group-hover:text-[#D4A276] transition-colors">
                                    The Poetry Renaissance in Digital Age
                                </h4>
                                <p class="text-sm text-[#4A4A4D] mb-3">
                                    How social media platforms are revitalizing poetry for new generations.
                                </p>
                                <div class="text-xs text-[#4A4A4D]">March 10, 2025</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="group">
                    <div class="bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-xl p-6 border border-[#4A4A4D] hover:border-[#D4A276] transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start space-x-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-[#D4A276]/30 to-[#F5F5F0]/10 rounded-lg flex items-center justify-center">
                                <svg class="w-8 h-8 text-[#D4A276]" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-serif font-bold text-[#F5F5F0] mb-2 group-hover:text-[#D4A276] transition-colors">
                                    Decolonizing the Canon: Voices from the Margins
                                </h4>
                                <p class="text-sm text-[#4A4A4D] mb-3">
                                    Celebrating diverse authors reshaping literary landscapes.
                                </p>
                                <div class="text-xs text-[#4A4A4D]">March 8, 2025</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter CTA Section -->
<section class="py-24 bg-gradient-to-r from-[#2A2A2C] via-[#1D1D1F] to-[#2A2A2C] relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-[#D4A276]/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-[#F5F5F0]/5 rounded-full blur-3xl"></div>
    
    <div class="relative container mx-auto px-6 max-w-4xl text-center">
        <div class="mb-12">
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-[#F5F5F0] mb-6">
                Join the <span class="text-[#D4A276] italic">Literary Conversation</span>
            </h2>
            <p class="text-xl text-[#4A4A4D] max-w-2xl mx-auto mb-8">
                Get exclusive access to our latest reviews, author interviews, and curated reading recommendations delivered to your inbox.
            </p>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12">
            <a href="#" class="group inline-flex items-center px-10 py-5 bg-[#D4A276] text-[#1D1D1F] font-bold rounded-full text-lg hover:bg-[#F5F5F0] hover:shadow-2xl hover:shadow-[#D4A276]/25 transition-all duration-300 transform hover:scale-105">
                <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                </svg>
                <span>Subscribe to Newsletter</span>
                <div class="ml-3 opacity-0 group-hover:opacity-100 transition-opacity">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </div>
            </a>
            
            <a href="#" class="inline-flex items-center px-8 py-5 border-2 border-[#4A4A4D] text-[#F5F5F0] font-semibold rounded-full hover:border-[#D4A276] hover:text-[#D4A276] transition-all duration-300">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                </svg>
                Join Community
            </a>
        </div>
        
        <!-- Trust Indicators -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-8 text-sm text-[#4A4A4D]">
            <div class="flex items-center">
                <svg class="w-5 h-5 text-[#D4A276] mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                No spam, ever
            </div>
            <div class="flex items-center">
                <svg class="w-5 h-5 text-[#D4A276] mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                </svg>
                Unsubscribe anytime
            </div>
            <div class="flex items-center">
                <svg class="w-5 h-5 text-[#D4A276] mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                </svg>
                10,000+ subscribers
            </div>
        </div>
    </div>
</section>
</x-layouts.app>
