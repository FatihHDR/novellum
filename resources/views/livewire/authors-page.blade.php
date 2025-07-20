<div>
    <x-navbar />

    <style>
        .author-timeline {
            background: linear-gradient(135deg, #0F0F0F 0%, #1D1D1F 50%, #2A1A0F 100%);
            position: relative;
            overflow: hidden;
        }
        
        .author-timeline::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                radial-gradient(circle at 20% 20%, rgba(212, 162, 118, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(245, 245, 240, 0.05) 0%, transparent 50%);
        }
        
        .floating-book {
            animation: float-book 8s ease-in-out infinite;
        }
        
        @keyframes float-book {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-15px) rotate(2deg); }
            66% { transform: translateY(-10px) rotate(-1deg); }
        }
        
        .author-card-unique {
            background: linear-gradient(145deg, rgba(42, 42, 44, 0.8) 0%, rgba(29, 29, 31, 0.9) 100%);
            border: 1px solid rgba(212, 162, 118, 0.2);
            backdrop-filter: blur(20px);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
        }
        
        .author-card-unique::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 162, 118, 0.1), transparent);
            transition: left 0.5s;
        }
        
        .author-card-unique:hover::before {
            left: 100%;
        }
        
        .author-card-unique:hover {
            transform: translateY(-12px) scale(1.02);
            border-color: rgba(212, 162, 118, 0.4);
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.3),
                0 0 0 1px rgba(212, 162, 118, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }
        
        .typewriter {
            overflow: hidden;
            border-right: .15em solid #D4A276;
            white-space: nowrap;
            margin: 0 auto;
            letter-spacing: .15em;
            animation: typing 3.5s steps(40, end), blink-caret .75s step-end infinite;
        }
        
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }
        
        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: #D4A276; }
        }
        
        .author-bio-card {
            background: linear-gradient(135deg, rgba(15, 15, 15, 0.95) 0%, rgba(29, 29, 31, 0.95) 100%);
            border-left: 4px solid #D4A276;
            position: relative;
        }
        
        .author-bio-card::after {
            content: '"';
            position: absolute;
            top: -10px;
            right: 20px;
            font-size: 6rem;
            color: rgba(212, 162, 118, 0.1);
            font-family: Georgia, serif;
        }
        
        .genre-bubble {
            background: linear-gradient(45deg, rgba(212, 162, 118, 0.1), rgba(245, 245, 240, 0.1));
            border: 1px solid rgba(212, 162, 118, 0.3);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .genre-bubble::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(212, 162, 118, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.3s, height 0.3s;
        }
        
        .genre-bubble:hover::before {
            width: 200px;
            height: 200px;
        }
        
        .genre-bubble:hover {
            transform: scale(1.05);
            color: #1D1D1F;
            background: #D4A276;
        }
        
        .literary-timeline {
            position: relative;
        }
        
        .literary-timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #D4A276, rgba(212, 162, 118, 0.3), #D4A276);
            transform: translateX(-50%);
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 3rem;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 2rem;
            width: 16px;
            height: 16px;
            background: #D4A276;
            border: 4px solid #1D1D1F;
            border-radius: 50%;
            transform: translateX(-50%);
    </style>

    <!-- Literary Universe Hero -->
    <section class="author-timeline min-h-screen flex items-center justify-center pt-16 relative">
        <!-- Floating Books -->
        <div class="floating-book absolute top-32 left-20 text-4xl opacity-20">📖</div>
        <div class="floating-book absolute top-48 right-32 text-3xl opacity-30" style="animation-delay: 2s;">✒️</div>
        <div class="floating-book absolute bottom-40 left-1/4 text-2xl opacity-25" style="animation-delay: 4s;">📚</div>
        <div class="floating-book absolute bottom-32 right-20 text-3xl opacity-20" style="animation-delay: 6s;">🖋️</div>
        
        <div class="relative z-10 text-center px-6 max-w-5xl mx-auto">
            <!-- Animated Title -->
            <div class="mb-12">
                <h1 class="text-6xl md:text-8xl font-serif font-bold text-[#F5F5F0] mb-6 leading-tight">
                    <span class="block">The Literary</span>
                    <span class="text-[#D4A276] typewriter inline-block">Universe</span>
                </h1>
            </div>
            
            <!-- Philosophical Quote -->
            <div class="author-bio-card p-8 rounded-2xl mb-12 max-w-4xl mx-auto">
                <blockquote class="text-2xl md:text-3xl font-serif italic text-[#F5F5F0] leading-relaxed">
                    "Every author is a world unto themselves, carrying universes of stories, dreams, and human truths within the confines of their imagination."
                </blockquote>
                <cite class="block text-right text-[#D4A276] text-lg mt-4 font-medium">— Literary Philosophy</cite>
            </div>
            
            <!-- Interactive Search -->
            <div class="relative max-w-3xl mx-auto">
                <div class="absolute inset-y-0 left-0 pl-6 flex items-center pointer-events-none">
                    <svg class="w-6 h-6 text-[#D4A276]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" 
                       placeholder="Discover authors by name, era, or literary movement..." 
                       class="w-full pl-16 pr-6 py-6 bg-[#0F0F0F]/80 border-2 border-[#D4A276]/30 rounded-full text-[#F5F5F0] text-lg placeholder-[#4A4A4D] focus:border-[#D4A276] focus:ring-4 focus:ring-[#D4A276]/20 focus:outline-none backdrop-blur-sm transition-all duration-300">
        </div>
    </section>

    <!-- Genre Universe -->
    <section class="py-24 bg-gradient-to-b from-[#1D1D1F] via-[#0F0F0F] to-[#1D1D1F]">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-[#F5F5F0] mb-6">
                    Literary <span class="text-[#D4A276]">Dimensions</span>
                </h2>
                <p class="text-xl text-[#4A4A4D] max-w-3xl mx-auto">Navigate through different realms of literary expression</p>
            </div>
            
            <!-- Genre Bubbles -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-20">
                <button class="genre-bubble p-8 rounded-3xl text-center relative z-10">
                    <div class="text-3xl mb-4">🌟</div>
                    <h3 class="font-bold text-lg text-[#F5F5F0] mb-2">Contemporary</h3>
                    <p class="text-sm text-[#4A4A4D]">Modern voices</p>
                </button>
                
                <button class="genre-bubble p-8 rounded-3xl text-center relative z-10">
                    <div class="text-3xl mb-4">🏛️</div>
                    <h3 class="font-bold text-lg text-[#F5F5F0] mb-2">Classic</h3>
                    <p class="text-sm text-[#4A4A4D]">Timeless masters</p>
                </button>
                
                <button class="genre-bubble p-8 rounded-3xl text-center relative z-10">
                    <div class="text-3xl mb-4">🌍</div>
                    <h3 class="font-bold text-lg text-[#F5F5F0] mb-2">World Literature</h3>
                    <p class="text-sm text-[#4A4A4D]">Global perspectives</p>
                </button>
                
                <button class="genre-bubble p-8 rounded-3xl text-center relative z-10">
                    <div class="text-3xl mb-4">🎭</div>
                    <h3 class="font-bold text-lg text-[#F5F5F0] mb-2">Poetry</h3>
                    <p class="text-sm text-[#4A4A4D]">Lyrical souls</p>
                </button>
                
                <button class="genre-bubble p-8 rounded-3xl text-center relative z-10">
                    <div class="text-3xl mb-4">🔍</div>
                    <h3 class="font-bold text-lg text-[#F5F5F0] mb-2">Mystery</h3>
                    <p class="text-sm text-[#4A4A4D]">Enigmatic writers</p>
                </button>
                
                <button class="genre-bubble p-8 rounded-3xl text-center relative z-10">
                    <div class="text-3xl mb-4">🚀</div>
                    <h3 class="font-bold text-lg text-[#F5F5F0] mb-2">Sci-Fi</h3>
                    <p class="text-sm text-[#4A4A4D]">Future visionaries</p>
                </button>
                
                <button class="genre-bubble p-8 rounded-3xl text-center relative z-10">
                    <div class="text-3xl mb-4">💭</div>
                    <h3 class="font-bold text-lg text-[#F5F5F0] mb-2">Philosophy</h3>
                    <p class="text-sm text-[#4A4A4D]">Deep thinkers</p>
                </button>
                
                <button class="genre-bubble p-8 rounded-3xl text-center relative z-10">
                    <div class="text-3xl mb-4">📜</div>
                    <h3 class="font-bold text-lg text-[#F5F5F0] mb-2">Biography</h3>
                    <p class="text-sm text-[#4A4A4D]">Life chroniclers</p>
                </button>
            </div>
        </div>
    </section>
                            </div>
                        </div>
                        
                        <!-- Content -->
                        <div class="lg:w-2/3 p-8 lg:p-12">
                            <div class="flex items-center mb-6">
                                <span class="px-4 py-2 text-xs font-medium bg-[#D4A276] text-[#1D1D1F] rounded-full mr-4">Author Spotlight</span>
                                <span class="text-sm text-[#4A4A4D]">March 2025</span>
                            </div>
                            
                            <h3 class="text-4xl md:text-5xl font-serif font-bold text-[#F5F5F0] mb-4 group-hover:text-[#D4A276] transition-colors">
                                Toni Morrison
                            </h3>
                            
                            <div class="text-[#D4A276] font-medium mb-6">
                                1931 - 2019 | Nobel Prize in Literature 1993
                            </div>
                            
                            <p class="text-[#4A4A4D] leading-relaxed mb-8 text-lg">
                                One of America's most celebrated authors, Morrison's powerful narratives explore the African American experience with unparalleled depth and artistry. Her works, including "Beloved" and "The Bluest Eye," continue to resonate with readers worldwide, offering profound insights into identity, trauma, and resilience.
                            </p>
                            
                            <div class="author-quote text-[#F5F5F0] text-xl leading-relaxed mb-8 pl-8">
                                The function, the very serious function of racism is distraction. It keeps you from doing your work.
                            </div>
                            
                            <div class="flex flex-wrap gap-2 mb-8">
                                <span class="genre-tag px-3 py-1 bg-[#2A2A2C] border border-[#4A4A4D] text-[#F5F5F0] text-sm rounded-full">Literary Fiction</span>
                                <span class="genre-tag px-3 py-1 bg-[#2A2A2C] border border-[#4A4A4D] text-[#F5F5F0] text-sm rounded-full">Historical Fiction</span>
                                <span class="genre-tag px-3 py-1 bg-[#2A2A2C] border border-[#4A4A4D] text-[#F5F5F0] text-sm rounded-full">Nobel Laureate</span>
                                <span class="genre-tag px-3 py-1 bg-[#2A2A2C] border border-[#4A4A4D] text-[#F5F5F0] text-sm rounded-full">African American Literature</span>
                            </div>
                            
                            <div class="flex items-center justify-between">
                                <div class="text-[#4A4A4D]">
                                    <div class="text-sm mb-1">Notable Works:</div>
                                    <div class="font-medium text-[#F5F5F0]">Beloved • The Bluest Eye • Song of Solomon</div>
                                </div>
                                
                                <a href="#" class="group inline-flex items-center px-6 py-3 bg-[#D4A276] text-[#1D1D1F] font-semibold rounded-full hover:bg-[#F5F5F0] transition-all duration-300 transform hover:scale-105">
                                    <span>View Profile</span>
                                    <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </a>
    <!-- Literary Timeline -->
    <section class="py-24 bg-[#0F0F0F] relative">
        <div class="container mx-auto px-6 max-w-6xl">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-[#F5F5F0] mb-6">
                    Featured <span class="text-[#D4A276]">Authors</span>
                </h2>
                <p class="text-xl text-[#4A4A4D]">Journey through literary brilliance</p>
            </div>
            
            <div class="literary-timeline">
                <!-- Timeline Item 1 -->
                <div class="timeline-item">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="md:text-right">
                            <div class="author-card-unique p-8 rounded-2xl">
                                <div class="flex items-center justify-center md:justify-end mb-6">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&h=150&fit=crop&crop=face" 
                                         alt="Haruki Murakami" 
                                         class="w-20 h-20 rounded-full border-4 border-[#D4A276] object-cover">
                                </div>
                                <h3 class="text-2xl font-serif font-bold text-[#F5F5F0] mb-3">Haruki Murakami</h3>
                                <p class="text-[#D4A276] text-lg mb-4">Surreal Storyteller</p>
                                <p class="text-[#4A4A4D] leading-relaxed mb-6">
                                    Master of magical realism whose dreamlike narratives blur the boundaries between reality and imagination.
                                </p>
                                <div class="flex flex-wrap gap-2 justify-center md:justify-end">
                                    <span class="px-4 py-2 bg-[#D4A276]/20 text-[#D4A276] text-sm rounded-full border border-[#D4A276]/30">Magical Realism</span>
                                    <span class="px-4 py-2 bg-[#D4A276]/20 text-[#D4A276] text-sm rounded-full border border-[#D4A276]/30">Contemporary</span>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block"></div>
                    </div>
                </div>
                
                <!-- Timeline Item 2 -->
                <div class="timeline-item">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="hidden md:block"></div>
                        <div>
                            <div class="author-card-unique p-8 rounded-2xl">
                                <div class="flex items-center justify-center md:justify-start mb-6">
                                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b4c0?w=150&h=150&fit=crop&crop=face" 
                                         alt="Zadie Smith" 
                                         class="w-20 h-20 rounded-full border-4 border-[#D4A276] object-cover">
                                </div>
                                <h3 class="text-2xl font-serif font-bold text-[#F5F5F0] mb-3">Zadie Smith</h3>
                                <p class="text-[#D4A276] text-lg mb-4">Cultural Observer</p>
                                <p class="text-[#4A4A4D] leading-relaxed mb-6">
                                    Brilliant chronicler of multicultural Britain, weaving complex narratives about identity and belonging.
                                </p>
                                <div class="flex flex-wrap gap-2 justify-center md:justify-start">
                                    <span class="px-4 py-2 bg-[#D4A276]/20 text-[#D4A276] text-sm rounded-full border border-[#D4A276]/30">Social Commentary</span>
                                    <span class="px-4 py-2 bg-[#D4A276]/20 text-[#D4A276] text-sm rounded-full border border-[#D4A276]/30">Cultural Fiction</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Timeline Item 3 -->
                <div class="timeline-item">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="md:text-right">
                            <div class="author-card-unique p-8 rounded-2xl">
                                <div class="flex items-center justify-center md:justify-end mb-6">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face" 
                                         alt="Ocean Vuong" 
                                         class="w-20 h-20 rounded-full border-4 border-[#D4A276] object-cover">
                                </div>
                                <h3 class="text-2xl font-serif font-bold text-[#F5F5F0] mb-3">Ocean Vuong</h3>
                                <p class="text-[#D4A276] text-lg mb-4">Poetic Voice</p>
                                <p class="text-[#4A4A4D] leading-relaxed mb-6">
                                    Vietnamese-American poet and novelist whose lyrical prose explores themes of war, trauma, and healing.
                                </p>
                                <div class="flex flex-wrap gap-2 justify-center md:justify-end">
                                    <span class="px-4 py-2 bg-[#D4A276]/20 text-[#D4A276] text-sm rounded-full border border-[#D4A276]/30">Poetry</span>
                                    <span class="px-4 py-2 bg-[#D4A276]/20 text-[#D4A276] text-sm rounded-full border border-[#D4A276]/30">Memoir</span>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block"></div>
                    </div>
                </div>
                
                <!-- Timeline Item 4 -->
                <div class="timeline-item">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div class="hidden md:block"></div>
                        <div>
                            <div class="author-card-unique p-8 rounded-2xl">
                                <div class="flex items-center justify-center md:justify-start mb-6">
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop&crop=face" 
                                         alt="Elena Ferrante" 
                                         class="w-20 h-20 rounded-full border-4 border-[#D4A276] object-cover">
                                </div>
                                <h3 class="text-2xl font-serif font-bold text-[#F5F5F0] mb-3">Elena Ferrante</h3>
                                <p class="text-[#D4A276] text-lg mb-4">Mysterious Genius</p>
                                <p class="text-[#4A4A4D] leading-relaxed mb-6">
                                    Anonymous Italian novelist whose Neapolitan Novels revolutionized contemporary literature with raw authenticity.
                                </p>
                                <div class="flex flex-wrap gap-2 justify-center md:justify-start">
                                    <span class="px-4 py-2 bg-[#D4A276]/20 text-[#D4A276] text-sm rounded-full border border-[#D4A276]/30">Feminist Fiction</span>
                                    <span class="px-4 py-2 bg-[#D4A276]/20 text-[#D4A276] text-sm rounded-full border border-[#D4A276]/30">Italian Literature</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                        </div>
                    </div>
                </div>

                <!-- Author Card 2 -->
                <div class="group author-card">
                    <div class="bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-2xl p-6 border border-[#4A4A4D] hover:border-[#D4A276] h-full">
                        <div class="aspect-square bg-gradient-to-br from-[#D4A276]/20 to-[#F5F5F0]/10 rounded-xl mb-6 flex items-center justify-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full flex items-center justify-center">
                                <span class="text-2xl font-serif font-bold text-[#1D1D1F]">HM</span>
                            </div>
                        </div>
                        
                        <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-2 group-hover:text-[#D4A276] transition-colors">
                            Haruki Murakami
                        </h3>
                        
                        <p class="text-sm text-[#4A4A4D] mb-4">Born 1949, Japan</p>
                        
                        <p class="text-sm text-[#F5F5F0] leading-relaxed mb-6">
                            Japanese writer whose surreal and melancholic novels have captivated readers worldwide. Master of magical realism and existential themes.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="genre-tag px-2 py-1 bg-[#4A4A4D] text-[#F5F5F0] text-xs rounded-full">Magical Realism</span>
                            <span class="genre-tag px-2 py-1 bg-[#4A4A4D] text-[#F5F5F0] text-xs rounded-full">Surrealism</span>
                        </div>
    </section>

    <!-- Author Insights -->
    <section class="py-24 bg-gradient-to-br from-[#1D1D1F] via-[#2A1A0F] to-[#0F0F0F]">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-[#F5F5F0] mb-6">
                    Behind The <span class="text-[#D4A276]">Words</span>
                </h2>
                <p class="text-xl text-[#4A4A4D] max-w-3xl mx-auto">
                    Exclusive interviews, writing processes, and the stories behind the stories
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Insight Card 1 -->
                <div class="author-card-unique p-6 rounded-xl">
                    <div class="mb-4">
                        <span class="inline-block px-4 py-2 bg-[#D4A276]/20 text-[#D4A276] text-sm rounded-full border border-[#D4A276]/30">
                            Writing Process
                        </span>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-3">The Art of Character Creation</h3>
                    <p class="text-[#4A4A4D] mb-4">Discover how master authors breathe life into their fictional characters...</p>
                    <button class="text-[#D4A276] hover:text-[#F5F5F0] font-medium transition-colors">Read More →</button>
                </div>
                
                <!-- Insight Card 2 -->
                <div class="author-card-unique p-6 rounded-xl">
                    <div class="mb-4">
                        <span class="inline-block px-4 py-2 bg-[#D4A276]/20 text-[#D4A276] text-sm rounded-full border border-[#D4A276]/30">
                            Interview
                        </span>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-3">Conversations with Giants</h3>
                    <p class="text-[#4A4A4D] mb-4">Exclusive interviews with today's most influential voices in literature...</p>
                    <button class="text-[#D4A276] hover:text-[#F5F5F0] font-medium transition-colors">Watch Now →</button>
                </div>
                
                <!-- Insight Card 3 -->
                <div class="author-card-unique p-6 rounded-xl">
                    <div class="mb-4">
                        <span class="inline-block px-4 py-2 bg-[#D4A276]/20 text-[#D4A276] text-sm rounded-full border border-[#D4A276]/30">
                            Analysis
                        </span>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-3">Literary Movements Today</h3>
                    <p class="text-[#4A4A4D] mb-4">Understanding the current trends and movements shaping modern literature...</p>
                    <button class="text-[#D4A276] hover:text-[#F5F5F0] font-medium transition-colors">Explore →</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Subscription -->
    <section class="py-20 bg-[#D4A276]">
        <div class="container mx-auto px-6 max-w-4xl text-center">
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-[#1D1D1F] mb-6">
                Join the Literary Journey
            </h2>
            <p class="text-xl text-[#1D1D1F]/80 mb-8">
                Get exclusive author interviews, book recommendations, and literary insights delivered to your inbox.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <input type="email" 
                       placeholder="Enter your email" 
                       class="flex-1 px-6 py-4 rounded-full border-2 border-[#1D1D1F]/20 text-[#1D1D1F] placeholder-[#1D1D1F]/60 focus:border-[#1D1D1F] focus:outline-none bg-white/90">
                <button class="px-8 py-4 bg-[#1D1D1F] text-[#F5F5F0] font-semibold rounded-full hover:bg-[#0F0F0F] transition-colors">
                    Subscribe
                </button>
            </div>
        </div>
    </section>

    <script>
        // Interactive filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const genreBubbles = document.querySelectorAll('.genre-bubble');
            const authorCards = document.querySelectorAll('.author-card-unique');
            
            genreBubbles.forEach(bubble => {
                bubble.addEventListener('click', function() {
                    // Remove active class from all bubbles
                    genreBubbles.forEach(b => b.classList.remove('active'));
                    
                    // Add active class to clicked bubble
                    this.classList.add('active');
                    
                    // Filter logic would go here
                    // For now, we'll just add a visual effect
                    authorCards.forEach(card => {
                        card.style.opacity = '0.3';
                        setTimeout(() => {
                            card.style.opacity = '1';
                        }, 300);
                    });
                });
            });
            
            // Search functionality will be handled by the main script at the bottom
        });
    </script>

    <!-- Authors Grid Section -->
    <section class="py-24 bg-[#0F0F0F]">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-[#F5F5F0] mb-6">
                    Contemporary <span class="text-[#D4A276]">Authors</span>
                </h2>
                <p class="text-xl text-[#4A4A4D]">Voices shaping modern literature</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- Author Card 4 -->
                <div class="group author-card">
                    <div class="bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-2xl p-6 border border-[#4A4A4D] hover:border-[#D4A276] h-full">
                        <div class="aspect-square bg-gradient-to-br from-[#D4A276]/20 to-[#F5F5F0]/10 rounded-xl mb-6 flex items-center justify-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full flex items-center justify-center">
                                <span class="text-2xl font-serif font-bold text-[#1D1D1F]">EF</span>
                            </div>
                        </div>
                        
                        <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-2 group-hover:text-[#D4A276] transition-colors">
                            Elena Ferrante
                        </h3>
                        
                        <p class="text-sm text-[#4A4A4D] mb-4">Pseudonymous Italian author</p>
                        
                        <p class="text-sm text-[#F5F5F0] leading-relaxed mb-6">
                            The mysterious Italian novelist behind the acclaimed Neapolitan Novels. Her exploration of female friendship and identity has garnered international praise.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="genre-tag px-2 py-1 bg-[#4A4A4D] text-[#F5F5F0] text-xs rounded-full">Literary Fiction</span>
                            <span class="genre-tag px-2 py-1 bg-[#4A4A4D] text-[#F5F5F0] text-xs rounded-full">Feminist</span>
                        </div>
                        
                        <div class="text-center">
                            <a href="#" class="text-[#D4A276] text-sm font-medium hover:underline">View Profile</a>
                        </div>
                    </div>
                </div>

                <!-- Author Card 5 -->
                <div class="group author-card">
                    <div class="bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-2xl p-6 border border-[#4A4A4D] hover:border-[#D4A276] h-full">
                        <div class="aspect-square bg-gradient-to-br from-[#D4A276]/20 to-[#F5F5F0]/10 rounded-xl mb-6 flex items-center justify-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full flex items-center justify-center">
                                <span class="text-2xl font-serif font-bold text-[#1D1D1F]">TO</span>
                            </div>
                        </div>
                        
                        <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-2 group-hover:text-[#D4A276] transition-colors">
                            Teju Cole
                        </h3>
                        
                        <p class="text-sm text-[#4A4A4D] mb-4">Born 1975, USA/Nigeria</p>
                        
                        <p class="text-sm text-[#F5F5F0] leading-relaxed mb-6">
                            Nigerian-American writer, art historian, and photographer known for his innovative narrative style and cultural criticism. His work bridges literature and visual arts.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="genre-tag px-2 py-1 bg-[#4A4A4D] text-[#F5F5F0] text-xs rounded-full">Cultural Criticism</span>
                            <span class="genre-tag px-2 py-1 bg-[#4A4A4D] text-[#F5F5F0] text-xs rounded-full">Experimental</span>
                        </div>
                        
                        <div class="text-center">
                            <a href="#" class="text-[#D4A276] text-sm font-medium hover:underline">View Profile</a>
                        </div>
                    </div>
                </div>

                <!-- Author Card 6 -->
                <div class="group author-card">
                    <div class="bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-2xl p-6 border border-[#4A4A4D] hover:border-[#D4A276] h-full">
                        <div class="aspect-square bg-gradient-to-br from-[#D4A276]/20 to-[#F5F5F0]/10 rounded-xl mb-6 flex items-center justify-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full flex items-center justify-center">
                                <span class="text-2xl font-serif font-bold text-[#1D1D1F]">OS</span>
                            </div>
                        </div>
                        
                        <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-2 group-hover:text-[#D4A276] transition-colors">
                            Ocean Vuong
                        </h3>
                        
                        <p class="text-sm text-[#4A4A4D] mb-4">Born 1988, Vietnam/USA</p>
                        
                        <p class="text-sm text-[#F5F5F0] leading-relaxed mb-6">
                            Vietnamese-American poet and novelist whose lyrical prose explores themes of war, sexuality, and identity. Winner of numerous literary awards.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="genre-tag px-2 py-1 bg-[#4A4A4D] text-[#F5F5F0] text-xs rounded-full">Poetry</span>
                            <span class="genre-tag px-2 py-1 bg-[#4A4A4D] text-[#F5F5F0] text-xs rounded-full">LGBTQ+</span>
                        </div>
                        
                        <div class="text-center">
                            <a href="#" class="text-[#D4A276] text-sm font-medium hover:underline">View Profile</a>
                        </div>
                    </div>
                </div>

                <!-- Author Card 7 -->
                <div class="group author-card">
                    <div class="bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-2xl p-6 border border-[#4A4A4D] hover:border-[#D4A276] h-full">
                        <div class="aspect-square bg-gradient-to-br from-[#D4A276]/20 to-[#F5F5F0]/10 rounded-xl mb-6 flex items-center justify-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full flex items-center justify-center">
                                <span class="text-2xl font-serif font-bold text-[#1D1D1F]">KI</span>
                            </div>
                        </div>
                        
                        <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-2 group-hover:text-[#D4A276] transition-colors">
                            Kazuo Ishiguro
                        </h3>
                        
                        <p class="text-sm text-[#4A4A4D] mb-4">Born 1954, Japan/UK</p>
                        
                        <p class="text-sm text-[#F5F5F0] leading-relaxed mb-6">
                            Nobel Prize-winning British novelist known for his elegant prose and exploration of memory and self-deception. Author of "Never Let Me Go" and "The Remains of the Day."
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="genre-tag px-2 py-1 bg-[#4A4A4D] text-[#F5F5F0] text-xs rounded-full">Literary Fiction</span>
                            <span class="genre-tag px-2 py-1 bg-[#4A4A4D] text-[#F5F5F0] text-xs rounded-full">Nobel Laureate</span>
                        </div>
                        
                        <div class="text-center">
                            <a href="#" class="text-[#D4A276] text-sm font-medium hover:underline">View Profile</a>
                        </div>
                    </div>
                </div>

                <!-- Author Card 8 -->
                <div class="group author-card">
                    <div class="bg-gradient-to-br from-[#2A2A2C] to-[#1D1D1F] rounded-2xl p-6 border border-[#4A4A4D] hover:border-[#D4A276] h-full">
                        <div class="aspect-square bg-gradient-to-br from-[#D4A276]/20 to-[#F5F5F0]/10 rounded-xl mb-6 flex items-center justify-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full flex items-center justify-center">
                                <span class="text-2xl font-serif font-bold text-[#1D1D1F]">JF</span>
                            </div>
                        </div>
                        
                        <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-2 group-hover:text-[#D4A276] transition-colors">
                            Jonathan Franzen
                        </h3>
                        
                        <p class="text-sm text-[#4A4A4D] mb-4">Born 1959, USA</p>
                        
                        <p class="text-sm text-[#F5F5F0] leading-relaxed mb-6">
                            American novelist and essayist known for his expansive novels about American middle-class life. His "The Corrections" won the National Book Award.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="genre-tag px-2 py-1 bg-[#4A4A4D] text-[#F5F5F0] text-xs rounded-full">Contemporary Fiction</span>
                            <span class="genre-tag px-2 py-1 bg-[#4A4A4D] text-[#F5F5F0] text-xs rounded-full">Social Commentary</span>
                        </div>
                        
                        <div class="text-center">
                            <a href="#" class="text-[#D4A276] text-sm font-medium hover:underline">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center">
            <button class="group inline-flex items-center px-8 py-4 bg-[#2A2A2C] border border-[#4A4A4D] text-[#F5F5F0] font-semibold rounded-full hover:border-[#D4A276] hover:bg-[#D4A276] hover:text-[#1D1D1F] transition-all duration-300">
                <span>Discover More Authors</span>
                <svg class="w-5 h-5 ml-2 transition-transform group-hover:rotate-180" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </button>
        </div>
    </div>
</section>

<!-- Author Interviews CTA -->
<section class="py-20 bg-[#1D1D1F] border-t border-[#4A4A4D]">
    <div class="container mx-auto px-6 max-w-4xl text-center">
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-[#F5F5F0] mb-6">
            Exclusive Author <span class="text-[#D4A276] italic">Interviews</span>
        </h2>
        <p class="text-lg text-[#4A4A4D] mb-8 max-w-2xl mx-auto">
            Go behind the scenes with intimate conversations exploring the creative process, inspiration, and literary insights from today's most compelling voices
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
            <a href="#" class="px-8 py-4 bg-[#D4A276] text-[#1D1D1F] font-semibold rounded-full hover:bg-[#F5F5F0] transition-colors inline-flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v6.114a4 4 0 10.2 7.016 1 1 0 00-.2-.746V18a1 1 0 001.196.98l10-2A1 1 0 0018 16V3z"/>
                </svg>
                Listen to Interviews
            </a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterButtons = document.querySelectorAll('.author-filter');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
        });
    });
    
    // Genre tag hover effects
    const genreTags = document.querySelectorAll('.genre-tag');
    genreTags.forEach(tag => {
        tag.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
        });
        
        tag.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
    
    // Interactive filter functionality
    const genreBubbles = document.querySelectorAll('.genre-bubble');
    const authorCards = document.querySelectorAll('.author-card-unique');
    
    genreBubbles.forEach(bubble => {
        bubble.addEventListener('click', function() {
            // Remove active class from all bubbles
            genreBubbles.forEach(b => b.classList.remove('active'));
            
            // Add active class to clicked bubble
            this.classList.add('active');
            
            // Filter logic would go here
            // For now, we'll just add a visual effect
            authorCards.forEach(card => {
                card.style.opacity = '0.3';
                setTimeout(() => {
                    card.style.opacity = '1';
                }, 300);
            });
        });
    });
    
    // Search functionality
    const searchInput = document.querySelector('input[type="text"]');
    if (searchInput) {
        searchInput.addEventListener('focus', function() {
            this.style.transform = 'scale(1.02)';
        });
        
        searchInput.addEventListener('blur', function() {
            this.style.transform = 'scale(1)';
        });
    }
});
</script>
</div>
