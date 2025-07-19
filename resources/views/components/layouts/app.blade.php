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
        <header class="w-full py-8 px-4 flex justify-between items-center border-b border-[#4A4A4D] backdrop-blur-sm bg-[#1D1D1F]/90 sticky top-0 z-50">
            <div class="flex items-center space-x-4">
                <h1 class="text-2xl font-serif font-bold tracking-tight text-[#D4A276]">Novellum</h1>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="#" class="text-[#F5F5F0] hover:text-[#D4A276] transition-colors font-medium">Reviews</a>
                <a href="#" class="text-[#F5F5F0] hover:text-[#D4A276] transition-colors font-medium">Essays</a>
                <a href="#" class="text-[#F5F5F0] hover:text-[#D4A276] transition-colors font-medium">Authors</a>
                <a href="#" class="text-[#F5F5F0] hover:text-[#D4A276] transition-colors font-medium">About</a>
            </nav>
            <button class="md:hidden text-[#D4A276]">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
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
