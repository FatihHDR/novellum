<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Novellum') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'sans-serif'],
                        'serif': ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>
    @livewireStyles
</head>
<body class="bg-[#1D1D1F] text-[#F5F5F0] min-h-screen font-sans antialiased">
    <div class="flex flex-col min-h-screen">
        <header class="w-full border-b border-[#4A4A4D] backdrop-blur-sm bg-[#1D1D1F]/90 sticky top-0 z-50">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <!-- Logo (Left) -->
                    <div class="flex items-center">
                        <a class="flex items-center" href="/">
                            <h1 class="text-xl font-serif font-bold tracking-tight text-[#D4A276]">Novellum</h1>
                        </a>
                    </div>

                    <!-- Navigation Links (Center) -->
                    <nav class="hidden md:flex items-center space-x-8">
                        <a class="text-sm font-medium transition-colors hover:text-[#D4A276] text-[#D4A276]" href="/">Home</a>
                        <a class="text-sm font-medium transition-colors hover:text-[#D4A276] text-[#F5F5F0]" href="/reviews">Reviews</a>
                        <a class="text-sm font-medium transition-colors hover:text-[#D4A276] text-[#F5F5F0]" href="/essays">Essays</a>
                        <a class="text-sm font-medium transition-colors hover:text-[#D4A276] text-[#F5F5F0]" href="/authors">Authors</a>
                        <a class="text-sm font-medium transition-colors hover:text-[#D4A276] text-[#F5F5F0]" href="/collections">Collections</a>
                        <a class="text-sm font-medium transition-colors hover:text-[#D4A276] text-[#F5F5F0]" href="/about">About</a>
                    </nav>

                    <!-- Right Side Actions -->
                    <div class="flex items-center space-x-3">
                        <!-- Search Button -->
                        <button class="hidden sm:inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#D4A276] focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-[#4A4A4D] bg-[#1D1D1F] hover:bg-[#2A2A2C] hover:text-[#D4A276] h-9 w-9">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#F5F5F0]">
                                <circle cx="11" cy="11" r="8"/>
                                <path d="m21 21-4.35-4.35"/>
                            </svg>
                        </button>

                        <!-- Newsletter Button -->
                        <a href="#newsletter" class="hidden sm:inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#D4A276] focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-[#D4A276] text-[#1D1D1F] hover:bg-[#F5F5F0] h-9 px-3 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            <span class="hidden lg:inline">Subscribe</span>
                        </a>

                        <!-- Mobile Menu Button -->
                        <button class="md:hidden inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#D4A276] focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-[#4A4A4D] bg-[#1D1D1F] hover:bg-[#2A2A2C] hover:text-[#D4A276] h-9 w-9">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#F5F5F0]">
                                <path d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Navigation (Hidden by default) -->
                <div class="md:hidden border-t border-[#4A4A4D] py-4 hidden" id="mobile-menu">
                    <nav class="flex flex-col space-y-3">
                        <a class="text-sm font-medium transition-colors hover:text-[#D4A276] text-[#D4A276] px-2 py-1" href="/">Home</a>
                        <a class="text-sm font-medium transition-colors hover:text-[#D4A276] text-[#F5F5F0] px-2 py-1" href="/reviews">Reviews</a>
                        <a class="text-sm font-medium transition-colors hover:text-[#D4A276] text-[#F5F5F0] px-2 py-1" href="/essays">Essays</a>
                        <a class="text-sm font-medium transition-colors hover:text-[#D4A276] text-[#F5F5F0] px-2 py-1" href="/authors">Authors</a>
                        <a class="text-sm font-medium transition-colors hover:text-[#D4A276] text-[#F5F5F0] px-2 py-1" href="/collections">Collections</a>
                        <a class="text-sm font-medium transition-colors hover:text-[#D4A276] text-[#F5F5F0] px-2 py-1" href="/about">About</a>
                        <div class="border-t border-[#4A4A4D] pt-3 mt-3">
                            <a href="#newsletter" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium bg-[#D4A276] text-[#1D1D1F] hover:bg-[#F5F5F0] h-9 px-3 py-2 w-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                                Subscribe to Newsletter
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        
        <main class="flex-1">
            {{ $slot }}
        </main>
        
        <footer class="w-full py-8 px-4 border-t border-[#4A4A4D] bg-[#1A1A1C]">
            <div class="container mx-auto max-w-6xl">
                <div class="grid md:grid-cols-4 gap-8 mb-8">
                    <div class="col-span-2">
                        <h3 class="text-xl font-serif font-bold text-[#D4A276] mb-4">Novellum</h3>
                        <p class="text-[#4A4A4D] max-w-md">
                            Where Modern Criticism Meets Timeless Stories. A digital haven for deep literary analysis.
                        </p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-[#F5F5F0] mb-4">Explore</h4>
                        <ul class="space-y-2 text-[#4A4A4D]">
                            <li><a href="#" class="hover:text-[#D4A276] transition-colors">Latest Reviews</a></li>
                            <li><a href="#" class="hover:text-[#D4A276] transition-colors">Critical Essays</a></li>
                            <li><a href="#" class="hover:text-[#D4A276] transition-colors">Reading Lists</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-[#F5F5F0] mb-4">Connect</h4>
                        <ul class="space-y-2 text-[#4A4A4D]">
                            <li><a href="#" class="hover:text-[#D4A276] transition-colors">Newsletter</a></li>
                            <li><a href="#" class="hover:text-[#D4A276] transition-colors">Contact</a></li>
                            <li><a href="#" class="hover:text-[#D4A276] transition-colors">About Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-[#4A4A4D] pt-6 text-center text-[#4A4A4D]">
                    <p>&copy; {{ date('Y') }} Novellum. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    @livewireScripts
</body>
</html>
