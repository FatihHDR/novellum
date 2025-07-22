<nav class="fixed top-0 left-0 right-0 z-50 bg-[#1D1D1F]/95 backdrop-blur-sm border-b border-[#4A4A4D]/50">
    <div class="container mx-auto px-6 max-w-7xl">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <a href="/" class="flex items-center">
                <div class="w-8 h-8 bg-[#D4A276] rounded-lg flex items-center justify-center mr-3">
                    <svg class="w-5 h-5 text-[#1D1D1F]" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                    </svg>
                </div>
                <span class="text-xl font-serif font-bold text-[#F5F5F0]">Novellum</span>
            </a>
            
            <!-- Navigation Links -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-[#F5F5F0] hover:text-[#D4A276] transition-colors font-medium">Home</a>
                <a href="/reviews" class="text-[#F5F5F0] hover:text-[#D4A276] transition-colors font-medium">Reviews</a>
                <a href="/authors" class="text-[#F5F5F0] hover:text-[#D4A276] transition-colors font-medium">Authors</a>
                <a href="/about" class="text-[#F5F5F0] hover:text-[#D4A276] transition-colors font-medium">About</a>
            </div>
            
            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="#" class="inline-flex items-center px-4 py-2 bg-[#D4A276] text-[#1D1D1F] font-semibold rounded-full text-sm hover:bg-[#F5F5F0] transition-colors">
                    Subscribe
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden p-2 text-[#F5F5F0] hover:text-[#D4A276] transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden fixed top-16 left-0 right-0 bg-[#1D1D1F] shadow-lg z-40 hidden">
        <div class="py-4 space-y-2">
            <a href="/" class="block px-6 py-3 text-[#F5F5F0] hover:text-[#D4A276] hover:bg-[#2D2D2F] transition-all">Home</a>
            <a href="/reviews" class="block px-6 py-3 text-[#F5F5F0] hover:text-[#D4A276] hover:bg-[#2D2D2F] transition-all">Reviews</a>
            <a href="/authors" class="block px-6 py-3 text-[#F5F5F0] hover:text-[#D4A276] hover:bg-[#2D2D2F] transition-all">Authors</a>
            <a href="/about" class="block px-6 py-3 text-[#F5F5F0] hover:text-[#D4A276] hover:bg-[#2D2D2F] transition-all">About</a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
            
            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                    mobileMenu.classList.add('hidden');
                }
            });
        }
    });
</script>
