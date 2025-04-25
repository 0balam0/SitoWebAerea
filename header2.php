<!-- Modern Header with Transparent Background and Full Navigation -->
<header class="fixed w-full top-0 z-50" id="main-header">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo with Animation -->
            <div class="flex-shrink-0 relative group">
                <a href="/SitoWebAerea/home.php" class="flex items-center gap-3">
                    <div class="absolute -inset-2 bg-gradient-to-r from-accent to-accent-secondary rounded-full blur opacity-0 group-hover:opacity-30 transition-all duration-500"></div>
                    <div class="relative">
                        <img src="images/icone/iconaBase.svg" alt="Mari&Matt aerialDesign Logo" 
                             class="h-12 w-auto transition-all duration-500 group-hover:scale-110 group-hover:rotate-3">
                    </div>
                    <div class="font-display font-bold text-xl">
                        <span class="text-white">Mari&Matt</span>
                        <span class="block text-sm text-gradient">aerialDesign</span>
                    </div>
                </a>
            </div>
            
            <!-- Main Navigation -->
            <nav class="hidden md:block">
                <ul class="flex gap-8">
                    <li>
                        <a href="/SitoWebAerea/home.php" class="nav-link text-white text-sm uppercase tracking-wide font-medium hover:text-accent transition-colors duration-300">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/SitoWebAerea/shop.php" class="nav-link text-white text-sm uppercase tracking-wide font-medium hover:text-accent transition-colors duration-300">
                            Shop
                        </a>
                    </li>
                    <li>
                        <a href="/SitoWebAerea/rent.php" class="nav-link text-white text-sm uppercase tracking-wide font-medium hover:text-accent transition-colors duration-300">
                            Rent
                        </a>
                    </li>
                    <li>
                        <a href="/SitoWebAerea/designYourTools.php" class="nav-link text-white text-sm uppercase tracking-wide font-medium hover:text-accent transition-colors duration-300">
                            Design
                        </a>
                    </li>
                    <li>
                        <a href="/SitoWebAerea/aboutUs.php" class="nav-link text-white text-sm uppercase tracking-wide font-medium hover:text-accent transition-colors duration-300">
                            About
                        </a>
                    </li>
                </ul>
            </nav>
            
            <!-- Contact Button -->
            <div class="hidden md:block">
                <a href="/SitoWebAerea/getIntouch.php" 
                   class="group relative inline-flex items-center px-6 py-3 overflow-hidden rounded-full 
                          bg-gradient-to-r from-accent to-accent-secondary text-white font-medium
                          transition-all duration-300 hover:shadow-glow">
                    <span class="relative z-10 flex items-center">
                        <span>Contact us</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </span>
                    <div class="absolute inset-0 h-full w-full scale-0 rounded-full transition-all duration-300 group-hover:scale-100 group-hover:bg-white/10"></div>
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button type="button" id="mobile-menu-button" class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu (Hidden by Default) -->
    <div id="mobile-menu" class="hidden md:hidden bg-background-dark border-t border-white/5 transition-all duration-300">
        <div class="container mx-auto px-4 py-4">
            <nav>
                <ul class="flex flex-col gap-4">
                    <li>
                        <a href="/SitoWebAerea/home.php" class="block py-2 text-white hover:text-accent transition-colors duration-300">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/SitoWebAerea/shop.php" class="block py-2 text-white hover:text-accent transition-colors duration-300">
                            Shop
                        </a>
                    </li>
                    <li>
                        <a href="/SitoWebAerea/rent.php" class="block py-2 text-white hover:text-accent transition-colors duration-300">
                            Rent
                        </a>
                    </li>
                    <li>
                        <a href="/SitoWebAerea/designYourTools.php" class="block py-2 text-white hover:text-accent transition-colors duration-300">
                            Design Your Tools
                        </a>
                    </li>
                    <li>
                        <a href="/SitoWebAerea/aboutUs.php" class="block py-2 text-white hover:text-accent transition-colors duration-300">
                            About Us
                        </a>
                    </li>
                    <li class="mt-4">
                        <a href="/SitoWebAerea/getIntouch.php" 
                           class="block w-full py-3 text-center rounded-full 
                                  bg-gradient-to-r from-accent to-accent-secondary text-white font-medium
                                  transition-all duration-300">
                            Contact us
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<!-- Spacer to prevent content from hiding under fixed header -->
<div class="h-20"></div>

<!-- Header JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }
        
        // Header scroll effect
        const header = document.getElementById('main-header');
        if (header) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 100) {
                    header.classList.add('bg-background-dark/90', 'backdrop-blur-md', 'shadow-md', 'border-b', 'border-white/5');
                } else {
                    header.classList.remove('bg-background-dark/90', 'backdrop-blur-md', 'shadow-md', 'border-b', 'border-white/5');
                }
            });
        }
        
        // Highlight active navigation item
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-link');
        
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href && currentPath.includes(href.split('/').pop())) {
                link.classList.add('active');
                link.classList.add('text-accent');
            }
        });
    });
</script>