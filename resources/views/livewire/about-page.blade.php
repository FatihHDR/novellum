<div>
    <x-navbar />

    <style>
        .about-hero {
            background: linear-gradient(135deg, #0F0F0F 0%, #1D1D1F 50%, #2A1A0F 100%);
            position: relative;
            overflow: hidden;
        }

        .about-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image:
                radial-gradient(circle at 20% 20%, rgba(212, 162, 118, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(245, 245, 240, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 40% 60%, rgba(212, 162, 118, 0.1) 0%, transparent 40%);
        }

        .floating-element {
            animation: float-gentle 12s ease-in-out infinite;
            opacity: 0.6;
        }

        @keyframes float-gentle {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            33% {
                transform: translateY(-20px) rotate(3deg);
            }
            66% {
                transform: translateY(-15px) rotate(-2deg);
            }
        }

        .story-card {
            background: linear-gradient(145deg, rgba(29, 29, 31, 0.95) 0%, rgba(42, 42, 44, 0.9) 100%);
            border: 1px solid rgba(212, 162, 118, 0.2);
            backdrop-filter: blur(20px);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
        }

        .story-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 162, 118, 0.1), transparent);
            transition: left 0.5s;
        }

        .story-card:hover::before {
            left: 100%;
        }

        .story-card:hover {
            transform: translateY(-12px) scale(1.02);
            border-color: rgba(212, 162, 118, 0.4);
            box-shadow:
                0 25px 50px rgba(0, 0, 0, 0.3),
                0 0 0 1px rgba(212, 162, 118, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }

        .team-member {
            background: linear-gradient(135deg, rgba(15, 15, 15, 0.95) 0%, rgba(29, 29, 31, 0.95) 100%);
            border: 1px solid rgba(212, 162, 118, 0.15);
            border-radius: 20px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .team-member::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(212, 162, 118, 0.05), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .team-member:hover::after {
            opacity: 1;
        }

        .team-member:hover {
            transform: translateY(-8px);
            border-color: rgba(212, 162, 118, 0.3);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .mission-timeline {
            position: relative;
        }

        .mission-timeline::before {
            content: '';
            position: absolute;
            left: 30px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, transparent, #D4A276, transparent);
        }

        .timeline-dot {
            background: linear-gradient(135deg, #D4A276, #F5F5F0);
            box-shadow: 
                0 0 0 4px #0F0F0F,
                0 0 0 8px rgba(212, 162, 118, 0.2);
        }

        .value-card {
            background: linear-gradient(135deg, rgba(212, 162, 118, 0.1) 0%, rgba(245, 245, 240, 0.05) 100%);
            border: 1px solid rgba(212, 162, 118, 0.2);
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .value-card::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(212, 162, 118, 0.1);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: all 0.4s ease;
        }

        .value-card:hover::before {
            width: 300px;
            height: 300px;
        }

        .value-card:hover {
            transform: translateY(-8px);
            border-color: rgba(212, 162, 118, 0.4);
        }

        .stats-counter {
            font-size: 3rem;
            font-weight: 700;
            background: linear-gradient(135deg, #D4A276, #F5F5F0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .contact-form {
            background: linear-gradient(145deg, rgba(29, 29, 31, 0.95) 0%, rgba(42, 42, 44, 0.9) 100%);
            border: 1px solid rgba(212, 162, 118, 0.15);
            backdrop-filter: blur(20px);
        }

        .form-input {
            background: rgba(15, 15, 15, 0.8);
            border: 2px solid rgba(212, 162, 118, 0.2);
            color: #F5F5F0;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            border-color: #D4A276;
            box-shadow: 0 0 0 4px rgba(212, 162, 118, 0.1);
            outline: none;
        }

        .form-input::placeholder {
            color: rgba(245, 245, 240, 0.4);
        }

        @media (max-width: 768px) {
            .mission-timeline::before {
                left: 20px;
            }
        }
    </style>

    <!-- Hero Section -->
    <section class="about-hero min-h-screen flex items-center justify-center pt-16 relative">
        <!-- Floating Elements -->
        <div class="floating-element absolute top-32 left-20 text-4xl" style="animation-delay: 0s;">📖</div>
        <div class="floating-element absolute top-48 right-32 text-3xl" style="animation-delay: 3s;">✍️</div>
        <div class="floating-element absolute bottom-40 left-1/4 text-2xl" style="animation-delay: 6s;">🌟</div>
        <div class="floating-element absolute bottom-32 right-20 text-3xl" style="animation-delay: 9s;">📚</div>

        <div class="relative z-10 text-center px-6 max-w-6xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-serif font-bold text-[#F5F5F0] mb-8 leading-tight">
                About <span class="text-[#D4A276]">Novellum</span>
            </h1>
            
            <div class="max-w-4xl mx-auto">
                <p class="text-2xl md:text-3xl text-[#4A4A4D] font-light leading-relaxed mb-8">
                    Where stories find their voice and readers discover their next literary adventure
                </p>
                
                <div class="bg-[#0F0F0F]/60 backdrop-blur-sm rounded-2xl p-8 border border-[#D4A276]/20">
                    <blockquote class="text-xl md:text-2xl font-serif italic text-[#F5F5F0] leading-relaxed">
                        "Literature is the most agreeable way of ignoring life, but at the end of the day, 
                        life ignores literature."
                    </blockquote>
                    <cite class="block text-right text-[#D4A276] text-lg mt-4 font-medium">— Fernando Pessoa</cite>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-24 bg-gradient-to-b from-[#1D1D1F] to-[#0F0F0F]">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-[#F5F5F0] mb-6">
                    Our <span class="text-[#D4A276]">Story</span>
                </h2>
                <p class="text-xl text-[#4A4A4D] max-w-3xl mx-auto">
                    Born from a passion for literature and a vision to connect readers with extraordinary stories
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="story-card p-8 rounded-2xl">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full flex items-center justify-center mr-6">
                            <svg class="w-8 h-8 text-[#1D1D1F]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-[#F5F5F0] mb-2">Our Beginning</h3>
                            <p class="text-[#D4A276] font-medium">Founded in 2024</p>
                        </div>
                    </div>
                    <p class="text-[#4A4A4D] leading-relaxed mb-6">
                        Novellum was born from the belief that every great story deserves to be discovered. 
                        We started as a small team of literature enthusiasts who wanted to create a space 
                        where readers could find their next favorite book and authors could share their passion.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-[#D4A276]/20 text-[#D4A276] text-sm rounded-full border border-[#D4A276]/30">
                            Literary Curation
                        </span>
                        <span class="px-3 py-1 bg-[#D4A276]/20 text-[#D4A276] text-sm rounded-full border border-[#D4A276]/30">
                            Community Building
                        </span>
                    </div>
                </div>

                <div class="story-card p-8 rounded-2xl">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full flex items-center justify-center mr-6">
                            <svg class="w-8 h-8 text-[#1D1D1F]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-serif font-bold text-[#F5F5F0] mb-2">Our Mission</h3>
                            <p class="text-[#D4A276] font-medium">Connecting Stories</p>
                        </div>
                    </div>
                    <p class="text-[#4A4A4D] leading-relaxed mb-6">
                        We believe in the transformative power of literature. Our mission is to bridge the gap 
                        between exceptional authors and discerning readers, creating a community where literary 
                        appreciation flourishes and meaningful connections are made.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-[#D4A276]/20 text-[#D4A276] text-sm rounded-full border border-[#D4A276]/30">
                            Author Discovery
                        </span>
                        <span class="px-3 py-1 bg-[#D4A276]/20 text-[#D4A276] text-sm rounded-full border border-[#D4A276]/30">
                            Reader Engagement
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="py-24 bg-[#0F0F0F]">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-[#F5F5F0] mb-6">
                    Our <span class="text-[#D4A276]">Values</span>
                </h2>
                <p class="text-xl text-[#4A4A4D] max-w-3xl mx-auto">
                    The principles that guide everything we do at Novellum
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="value-card">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#1D1D1F]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-4 relative z-10">Excellence</h3>
                    <p class="text-[#4A4A4D] leading-relaxed relative z-10">
                        We curate only the finest literary works, ensuring every recommendation meets our highest standards of quality and artistic merit.
                    </p>
                </div>

                <div class="value-card">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#1D1D1F]" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-4 relative z-10">Discovery</h3>
                    <p class="text-[#4A4A4D] leading-relaxed relative z-10">
                        We're passionate about uncovering hidden gems and introducing readers to diverse voices from around the world.
                    </p>
                </div>

                <div class="value-card">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#1D1D1F]" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-4 relative z-10">Community</h3>
                    <p class="text-[#4A4A4D] leading-relaxed relative z-10">
                        We foster a welcoming community where readers and writers can connect, share, and celebrate the magic of storytelling.
                    </p>
                </div>

                <div class="value-card">
                    <div class="w-16 h-16 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-[#1D1D1F]" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-4 relative z-10">Innovation</h3>
                    <p class="text-[#4A4A4D] leading-relaxed relative z-10">
                        We continuously evolve our platform to enhance the reading experience and connect literature with modern technology.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics -->
    <section class="py-24 bg-gradient-to-r from-[#1D1D1F] via-[#2A1A0F] to-[#1D1D1F]">
        <div class="container mx-auto px-6 max-w-6xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-[#F5F5F0] mb-6">
                    Novellum in <span class="text-[#D4A276]">Numbers</span>
                </h2>
                <p class="text-xl text-[#4A4A4D] max-w-3xl mx-auto">
                    The impact we're making in the literary community
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="stats-counter mb-2">2.5K+</div>
                    <h3 class="text-xl font-semibold text-[#F5F5F0] mb-2">Authors Featured</h3>
                    <p class="text-[#4A4A4D]">From emerging voices to established masters</p>
                </div>

                <div class="text-center">
                    <div class="stats-counter mb-2">15K+</div>
                    <h3 class="text-xl font-semibold text-[#F5F5F0] mb-2">Books Reviewed</h3>
                    <p class="text-[#4A4A4D]">Comprehensive literary analysis and critique</p>
                </div>

                <div class="text-center">
                    <div class="stats-counter mb-2">50K+</div>
                    <h3 class="text-xl font-semibold text-[#F5F5F0] mb-2">Active Readers</h3>
                    <p class="text-[#4A4A4D]">A growing community of literature enthusiasts</p>
                </div>

                <div class="text-center">
                    <div class="stats-counter mb-2">125+</div>
                    <h3 class="text-xl font-semibold text-[#F5F5F0] mb-2">Countries Reached</h3>
                    <p class="text-[#4A4A4D]">Global literary connections and discoveries</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-24 bg-[#0F0F0F]">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-[#F5F5F0] mb-6">
                    Meet Our <span class="text-[#D4A276]">Team</span>
                </h2>
                <p class="text-xl text-[#4A4A4D] max-w-3xl mx-auto">
                    The passionate individuals behind Novellum's literary journey
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="team-member p-8 text-center relative">
                    <div class="w-32 h-32 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="text-3xl font-serif font-bold text-[#1D1D1F]">ES</span>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-2">Elena Sinclair</h3>
                    <p class="text-[#D4A276] font-medium mb-4">Founder & Editorial Director</p>
                    <p class="text-[#4A4A4D] leading-relaxed mb-4">
                        Former literature professor with 15 years of experience in literary criticism and curation. 
                        Passionate about discovering emerging voices in contemporary fiction.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="text-[#4A4A4D] hover:text-[#D4A276] transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-[#4A4A4D] hover:text-[#D4A276] transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="team-member p-8 text-center relative">
                    <div class="w-32 h-32 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="text-3xl font-serif font-bold text-[#1D1D1F]">MC</span>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-2">Marcus Chen</h3>
                    <p class="text-[#D4A276] font-medium mb-4">Head of Technology</p>
                    <p class="text-[#4A4A4D] leading-relaxed mb-4">
                        Full-stack developer and literature enthusiast who bridges the gap between technology and 
                        storytelling. Believes in using innovation to enhance literary discovery.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="text-[#4A4A4D] hover:text-[#D4A276] transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-[#4A4A4D] hover:text-[#D4A276] transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="team-member p-8 text-center relative">
                    <div class="w-32 h-32 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="text-3xl font-serif font-bold text-[#1D1D1F]">AR</span>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-[#F5F5F0] mb-2">Amara Rodriguez</h3>
                    <p class="text-[#D4A276] font-medium mb-4">Community Manager</p>
                    <p class="text-[#4A4A4D] leading-relaxed mb-4">
                        Award-winning author and literary advocate who fosters connections between readers and writers. 
                        Passionate about building inclusive literary communities.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="text-[#4A4A4D] hover:text-[#D4A276] transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-[#4A4A4D] hover:text-[#D4A276] transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.748-1.378 0 0-.599 2.282-.744 2.840-.282 1.084-1.064 2.456-1.549 3.235C9.584 23.815 10.77 24.001 12.017 24.001c6.624 0 11.99-5.367 11.99-12.014C24.007 5.367 18.641.001 12.017.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-24 bg-gradient-to-br from-[#1D1D1F] via-[#2A1A0F] to-[#0F0F0F]">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-[#F5F5F0] mb-6">
                    Get in <span class="text-[#D4A276]">Touch</span>
                </h2>
                <p class="text-xl text-[#4A4A4D] max-w-2xl mx-auto">
                    Have a question, suggestion, or want to collaborate? We'd love to hear from you.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-[#1D1D1F]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-[#F5F5F0] mb-2">Email Us</h3>
                            <p class="text-[#4A4A4D] mb-2">hello@novellum.com</p>
                            <p class="text-[#4A4A4D]">We typically respond within 24 hours</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-[#1D1D1F]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-[#F5F5F0] mb-2">Visit Us</h3>
                            <p class="text-[#4A4A4D] mb-2">123 Literary Lane<br>Books Quarter, NYC 10001</p>
                            <p class="text-[#4A4A4D]">Monday - Friday, 9AM - 6PM</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-[#D4A276] to-[#F5F5F0] rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-[#1D1D1F]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-[#F5F5F0] mb-2">Call Us</h3>
                            <p class="text-[#4A4A4D] mb-2">+1 (555) 123-4567</p>
                            <p class="text-[#4A4A4D]">For urgent inquiries and partnerships</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form rounded-2xl p-8">
                    <h3 class="text-2xl font-serif font-bold text-[#F5F5F0] mb-6">Send us a message</h3>
                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-[#F5F5F0] mb-2">Name</label>
                            <input type="text" class="form-input w-full px-4 py-3 rounded-lg" placeholder="Your full name">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-[#F5F5F0] mb-2">Email</label>
                            <input type="email" class="form-input w-full px-4 py-3 rounded-lg" placeholder="your@email.com">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-[#F5F5F0] mb-2">Subject</label>
                            <select class="form-input w-full px-4 py-3 rounded-lg">
                                <option>General Inquiry</option>
                                <option>Book Submission</option>
                                <option>Partnership</option>
                                <option>Press & Media</option>
                                <option>Technical Support</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-[#F5F5F0] mb-2">Message</label>
                            <textarea rows="4" class="form-input w-full px-4 py-3 rounded-lg resize-none" placeholder="Tell us more about your inquiry..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-[#D4A276] text-[#1D1D1F] font-semibold py-4 px-6 rounded-lg hover:bg-[#F5F5F0] transition-colors">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter CTA -->
    <section class="py-20 bg-[#D4A276]">
        <div class="container mx-auto px-6 max-w-4xl text-center">
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-[#1D1D1F] mb-6">
                Stay Connected
            </h2>
            <p class="text-xl text-[#1D1D1F]/80 mb-8 max-w-2xl mx-auto">
                Join our newsletter for the latest literary discoveries, author interviews, and exclusive content from the world of Novellum.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
                <input type="email" placeholder="Enter your email address"
                    class="flex-1 px-6 py-4 rounded-full border-2 border-[#1D1D1F]/20 text-[#1D1D1F] placeholder-[#1D1D1F]/60 focus:border-[#1D1D1F] focus:outline-none bg-white/90">
                <button
                    class="px-8 py-4 bg-[#1D1D1F] text-[#F5F5F0] font-semibold rounded-full hover:bg-[#0F0F0F] transition-colors whitespace-nowrap">
                    Subscribe Now
                </button>
            </div>

            <p class="text-sm text-[#1D1D1F]/60 mt-4">
                No spam, unsubscribe at any time. Your privacy is important to us.
            </p>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Smooth animations on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Animate cards on scroll
            const animatedElements = document.querySelectorAll('.story-card, .value-card, .team-member');
            animatedElements.forEach((element, index) => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(30px)';
                element.style.transition = 'all 0.8s ease';
                element.style.transitionDelay = `${index * 0.1}s`;
                observer.observe(element);
            });

            // Form handling
            const contactForm = document.querySelector('form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    // Add form submission logic here
                    alert('Thank you for your message! We\'ll get back to you soon.');
                });
            }

            // Newsletter subscription
            const newsletterForms = document.querySelectorAll('form');
            newsletterForms.forEach(form => {
                if (form.querySelector('input[type="email"]')) {
                    form.addEventListener('submit', function(e) {
                        e.preventDefault();
                        const email = this.querySelector('input[type="email"]').value;
                        if (email) {
                            alert('Thank you for subscribing! Welcome to the Novellum community.');
                            this.querySelector('input[type="email"]').value = '';
                        }
                    });
                }
            });
        });
    </script>
</div>
