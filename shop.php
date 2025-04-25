<!DOCTYPE html>
<html lang="it" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mari&Matt aerialDesign - Premium aerial equipment shop">
    <title>Shop - Mari&Matt aerialDesign</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0f172a',
                        secondary: '#1e293b',
                        accent: '#06b6d4',
                        'accent-secondary': '#f472b6',
                        dark: '#020617',
                        'text-light': '#f8fafc',
                        'text-muted': '#94a3b8'
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                        display: ['Poppins', 'system-ui', 'sans-serif'],
                    },
                    boxShadow: {
                        glow: '0 0 20px rgba(6, 182, 212, 0.35)',
                        'glow-lg': '0 0 30px rgba(6, 182, 212, 0.45)'
                    }
                }
            }
        }
    </script>
    
    <!-- Modern Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- GSAP for animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="style.css">
    
    <style>
        /* Additional Custom Styles */
        .text-gradient {
            background: linear-gradient(135deg, #06b6d4, #f472b6);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }
        
        .product-card {
            transition: transform 0.5s cubic-bezier(0.19, 1, 0.22, 1), 
                        box-shadow 0.5s cubic-bezier(0.19, 1, 0.22, 1);
        }
        
        .product-card:hover {
            transform: translateY(-10px);
        }
        
        .product-image {
            overflow: hidden;
        }
        
        .product-image img {
            transition: transform 0.7s cubic-bezier(0.19, 1, 0.22, 1);
        }
        
        .product-card:hover .product-image img {
            transform: scale(1.1);
        }
        
        .overlay-fade-enter {
            animation: overlayFadeIn 0.3s ease forwards;
        }
        
        .overlay-content-enter {
            animation: contentSlideIn 0.4s ease forwards;
        }
        
        @keyframes overlayFadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes contentSlideIn {
            from { 
                opacity: 0;
                transform: translateY(20px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="bg-dark text-text-light antialiased">
    <!-- Background Effects -->
    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div class="absolute top-0 left-0 right-0 bottom-0 bg-dark"></div>
        <div class="absolute top-[10%] -left-[30%] w-[70%] h-[40%] bg-accent/10 rounded-full mix-blend-multiply filter blur-[120px] opacity-70"></div>
        <div class="absolute bottom-[10%] -right-[30%] w-[70%] h-[40%] bg-accent-secondary/10 rounded-full mix-blend-multiply filter blur-[120px] opacity-70"></div>
    </div>
    
    <?php include('header2.php'); ?>
    
    <main class="relative pt-20">
        <!-- Page Header -->
        <section class="py-20 relative overflow-hidden">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-bold mb-6">
                        <span class="text-gradient">Our Products</span>
                    </h1>
                    <p class="text-lg text-text-muted max-w-2xl mx-auto">
                        Explore our premium collection of aerial equipment, designed and crafted with passion, precision, and the highest quality materials.
                    </p>
                </div>
            </div>
        </section>
        
        <!-- Products Grid -->
        <section class="pb-24 relative">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Product 1 -->
                    <div class="product-card glass-card rounded-2xl overflow-hidden" onclick="toggleCard(this)" data-id='AerialHoops'>
                        <div class="product-image aspect-square">
                            <img src="images/shopping/cerchio.jpg" alt="Aerial Hoop" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/90 via-dark/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-display font-semibold mb-2">Aerial Hoop</h3>
                            <p class="text-text-muted text-sm mb-4">Professional grade aerial hoop designed for performers and studios.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-accent font-display font-bold">€249.00</span>
                                <button class="bg-white/5 hover:bg-accent/20 text-white px-4 py-2 rounded-full text-sm transition-colors duration-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 2 -->
                    <div class="product-card glass-card rounded-2xl overflow-hidden" onclick="toggleCard(this)" data-id='AerialMoon'>
                        <div class="product-image aspect-square">
                            <img src="images/shopping/lunaBig.jpg" alt="Aerial Moon" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/90 via-dark/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-display font-semibold mb-2">Aerial Moon</h3>
                            <p class="text-text-muted text-sm mb-4">Elegant aerial moon apparatus for graceful performances.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-accent font-display font-bold">€329.00</span>
                                <button class="bg-white/5 hover:bg-accent/20 text-white px-4 py-2 rounded-full text-sm transition-colors duration-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 3 -->
                    <div class="product-card glass-card rounded-2xl overflow-hidden" onclick="toggleCard(this)" data-id='LunaSmall'>
                        <div class="product-image aspect-square">
                            <img src="images/shopping/lunaSmall.jpg" alt="Aerial Moon Small" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/90 via-dark/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-display font-semibold mb-2">Aerial Moon Small</h3>
                            <p class="text-text-muted text-sm mb-4">Compact aerial moon perfect for limited spaces and travel.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-accent font-display font-bold">€279.00</span>
                                <button class="bg-white/5 hover:bg-accent/20 text-white px-4 py-2 rounded-full text-sm transition-colors duration-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 4 -->
                    <div class="product-card glass-card rounded-2xl overflow-hidden" onclick="toggleCard(this)" data-id='deltaAerea'>
                        <div class="product-image aspect-square">
                            <img src="images/shopping/deltaAerea.webp" alt="Delta Aerial" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/90 via-dark/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-display font-semibold mb-2">Delta Aerial</h3>
                            <p class="text-text-muted text-sm mb-4">Innovative delta-shaped aerial apparatus for unique performances.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-accent font-display font-bold">€399.00</span>
                                <button class="bg-white/5 hover:bg-accent/20 text-white px-4 py-2 rounded-full text-sm transition-colors duration-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 5 -->
                    <div class="product-card glass-card rounded-2xl overflow-hidden" onclick="toggleCard(this)" data-id='AerialHoopsSpin'>
                        <div class="product-image aspect-square">
                            <img src="images/shopping/cerchio.jpg" alt="Aerial Hoop Spinning" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/90 via-dark/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-display font-semibold mb-2">Aerial Hoop Spinning</h3>
                            <p class="text-text-muted text-sm mb-4">Professional spinning aerial hoop with swivel mechanism.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-accent font-display font-bold">€299.00</span>
                                <button class="bg-white/5 hover:bg-accent/20 text-white px-4 py-2 rounded-full text-sm transition-colors duration-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 6 -->
                    <div class="product-card glass-card rounded-2xl overflow-hidden" onclick="toggleCard(this)" data-id='SpiraleAerea'>
                        <div class="product-image aspect-square">
                            <img src="images/shopping/spirale.jpeg" alt="Aerial Spiral" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/90 via-dark/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-display font-semibold mb-2">Aerial Spiral</h3>
                            <p class="text-text-muted text-sm mb-4">Unique spiral-shaped aerial apparatus for advanced performances.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-accent font-display font-bold">€449.00</span>
                                <button class="bg-white/5 hover:bg-accent/20 text-white px-4 py-2 rounded-full text-sm transition-colors duration-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 7 -->
                    <div class="product-card glass-card rounded-2xl overflow-hidden" onclick="toggleCard(this)" data-id='strutturaAerea'>
                        <div class="product-image aspect-square">
                            <img src="images/shopping/struttura.webp" alt="Aerial Structure" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-dark/90 via-dark/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-display font-semibold mb-2">Aerial Structure</h3>
                            <p class="text-text-muted text-sm mb-4">Complete free-standing structure for aerial performances.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-accent font-display font-bold">€1299.00</span>
                                <button class="bg-white/5 hover:bg-accent/20 text-white px-4 py-2 rounded-full text-sm transition-colors duration-300">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Custom Request Section -->
        <section class="py-20 relative">
            <div class="container mx-auto px-4">
                <div class="glass-card rounded-2xl overflow-hidden">
                    <div class="flex flex-col md:flex-row">
                        <div class="w-full md:w-1/2 bg-gradient-to-br from-accent to-accent-secondary p-1">
                            <div class="h-64 md:h-full bg-cover bg-center rounded-l-xl" style="background-image: url('images/foto1.jpg')"></div>
                        </div>
                        <div class="w-full md:w-1/2 p-8 md:p-12">
                            <h2 class="text-3xl font-display font-bold mb-4">Can't find what you need?</h2>
                            <p class="text-text-muted mb-8">We offer custom design and manufacturing services to create the perfect aerial apparatus for your specific requirements.</p>
                            <a href="/SitoWebAerea/designYourTools.php" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-accent to-accent-secondary text-white rounded-full font-medium transition-all duration-300 hover:shadow-glow">
                                <span>Design Your Custom Tool</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Product Detail Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black/80 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="overlay-content max-w-5xl w-full glass-card rounded-2xl overflow-hidden max-h-[90vh] overflow-y-auto">
            <div class="relative">
                <button onclick="closeOverlay()" class="absolute top-4 right-4 text-white hover:text-accent z-10 transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <div id="overlay-inner-content" class="p-0 md:p-0">
                    <!-- Content will be loaded here -->
                </div>
            </div>
        </div>
    </div>
    
    <!-- Image Detail Overlay -->
    <div id="image-overlay" class="fixed inset-0 bg-black/90 backdrop-blur-sm z-[60] hidden flex items-center justify-center p-4">
        <button onclick="closeOverlayImg()" class="absolute top-4 right-4 text-white hover:text-accent z-10 transition-colors duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="max-w-full max-h-[90vh] relative">
            <img id="overlay-image" src="" alt="Product Detail" class="max-w-full max-h-[90vh] object-contain">
            <div class="absolute bottom-4 left-0 right-0 flex justify-center gap-2">
                <button id="prev-image" class="bg-white/10 hover:bg-white/20 rounded-full p-2 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button id="next-image" class="bg-white/10 hover:bg-white/20 rounded-full p-2 transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <?php include('footer.php'); ?>
    
    <script>
    // Product gallery images for the current product
    let currentProductImages = [];
    let currentImageIndex = 0;
    
    // Improved functions for product cards and overlays
    function toggleCard(card) {
        const cardId = card.getAttribute('data-id');
        if (!cardId) {
            console.error('Error: card has no valid data-id');
            return;
        }
        
        // Start loading state
        card.classList.add('opacity-70');
        document.body.classList.add('overflow-hidden');
        
        // Fetch product details
        const xhr = new XMLHttpRequest();
        xhr.open('GET', 'shopPageDetails/' + cardId + '.php', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Show overlay with content
                const overlay = document.getElementById('overlay');
                const overlayContent = document.getElementById('overlay-inner-content');
                
                overlayContent.innerHTML = xhr.responseText;
                overlay.style.display = 'flex';
                overlay.classList.add('overlay-fade-enter');
                
                // Initialize product gallery if exists
                initProductGallery();
                
                // Find and enhance the overlay content
                const contentElements = overlayContent.querySelectorAll('.product-detail-content');
                contentElements.forEach(el => {
                    el.classList.add('overlay-content-enter');
                });
                
                // Reset loading state
                card.classList.remove('opacity-70');
                
                // Add tabs functionality if needed
                initProductTabs();
            } else {
                console.error('Error loading content');
                card.classList.remove('opacity-70');
            }
        };
        xhr.onerror = function() {
            console.error('Network error');
            card.classList.remove('opacity-70');
        };
        xhr.send();
    }

    function closeOverlay() {
        const overlay = document.getElementById('overlay');
        overlay.classList.remove('overlay-fade-enter');
        
        // Add a small delay before hiding to allow for animation
        setTimeout(() => {
            overlay.style.display = 'none';
            document.body.classList.remove('overflow-hidden');
        }, 300);
    }

    function initProductGallery() {
        // Find all gallery images
        const galleryImages = document.querySelectorAll('.product-images img');
        if (galleryImages.length === 0) return;
        
        // Store image sources for navigation
        currentProductImages = Array.from(galleryImages).map(img => img.src);
        
        // Add click listeners to all images
        galleryImages.forEach((img, index) => {
            img.onclick = function() {
                openImage(this, index);
            };
        });
        
        // Add click event listeners to navigation buttons
        document.getElementById('prev-image').addEventListener('click', showPrevImage);
        document.getElementById('next-image').addEventListener('click', showNextImage);
    }
    
    function showPrevImage(e) {
        e.stopPropagation();
        if (currentProductImages.length <= 1) return;
        
        currentImageIndex = (currentImageIndex - 1 + currentProductImages.length) % currentProductImages.length;
        document.getElementById('overlay-image').src = currentProductImages[currentImageIndex];
    }
    
    function showNextImage(e) {
        e.stopPropagation();
        if (currentProductImages.length <= 1) return;
        
        currentImageIndex = (currentImageIndex + 1) % currentProductImages.length;
        document.getElementById('overlay-image').src = currentProductImages[currentImageIndex];
    }

    function openImage(imgElement, index = 0) {
        const overlay = document.getElementById('image-overlay');
        const overlayImage = document.getElementById('overlay-image');
        
        // Set current image index
        currentImageIndex = index !== undefined ? index : 0;
        
        // Preload image and show overlay when ready
        const img = new Image();
        img.onload = function() {
            overlayImage.src = imgElement.src;
            overlay.style.display = 'flex';
            overlay.classList.add('overlay-fade-enter');
        };
        img.src = imgElement.src;
        
        document.body.classList.add('overflow-hidden');
    }

    function closeOverlayImg() {
        const overlay = document.getElementById('image-overlay');
        overlay.classList.remove('overlay-fade-enter');
        
        setTimeout(() => {
            overlay.style.display = 'none';
            document.body.classList.remove('overflow-hidden');
        }, 300);
    }
    
    function initProductTabs() {
        const tabButtons = document.querySelectorAll('.product-tab-button');
        const tabContents = document.querySelectorAll('.product-tab-content');
        
        if (tabButtons.length === 0) return;
        
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const target = button.getAttribute('data-tab');
                
                // Remove active state from all buttons and contents
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabContents.forEach(content => content.classList.remove('active'));
                
                // Add active state to clicked button and matching content
                button.classList.add('active');
                document.querySelector(`.product-tab-content[data-tab="${target}"]`).classList.add('active');
            });
        });
        
        // Activate first tab by default
        if (tabButtons[0]) tabButtons[0].click();
    }

    function addToCart() {
        // Create and animate cart notification
        const notification = document.createElement('div');
        notification.className = 'fixed top-20 right-4 bg-accent text-white py-3 px-6 rounded-full shadow-glow z-50 transform translate-y-[-20px] opacity-0 transition-all duration-500';
        notification.innerHTML = 'Product added to cart!';
        document.body.appendChild(notification);
        
        // Animate notification
        setTimeout(() => {
            notification.style.transform = 'translateY(0)';
            notification.style.opacity = '1';
        }, 100);
        
        // Remove notification after delay
        setTimeout(() => {
            notification.style.transform = 'translateY(-20px)';
            notification.style.opacity = '0';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 500);
        }, 3000);
    }

    // Close overlays with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            if (document.getElementById('image-overlay').style.display === 'flex') {
                closeOverlayImg();
            } else if (document.getElementById('overlay').style.display === 'flex') {
                closeOverlay();
            }
        }
    });
    
    // Arrow key navigation for image gallery
    document.addEventListener('keydown', function(e) {
        if (document.getElementById('image-overlay').style.display === 'flex') {
            if (e.key === 'ArrowLeft') {
                showPrevImage(e);
            } else if (e.key === 'ArrowRight') {
                showNextImage(e);
            }
        }
    });
    
    // GSAP Animations
    document.addEventListener('DOMContentLoaded', function() {
        gsap.registerPlugin(ScrollTrigger);
        
        // Animate product cards on scroll
        gsap.utils.toArray('.product-card').forEach((card, i) => {
            gsap.from(card, {
                y: 50,
                opacity: 0,
                duration: 0.8,
                delay: i * 0.1,
                scrollTrigger: {
                    trigger: card,
                    start: "top 90%",
                }
            });
        });
    });
    </script>
</body>
</html>
