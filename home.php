<!DOCTYPE html>
<html lang="it" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mari&Matt aerialDesign - Custom aerial equipment crafted with passion and precision">
    <title>Mari&Matt aerialDesign - Home</title>
    
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
        
        .bg-gradient {
            background: linear-gradient(135deg, #06b6d4, #f472b6);
        }
        
        .shadow-glow {
            box-shadow: 0 0 25px rgba(6, 182, 212, 0.3);
        }
        
        .shadow-glow-accent {
            box-shadow: 0 0 25px rgba(244, 114, 182, 0.3);
        }
        
        .parallax-bg {
            transform: translateY(var(--scrollY));
            transition: transform 0.1s ease-out;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }
        
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        .float-animation-slow {
            animation: float 8s ease-in-out infinite;
        }
        
        .float-animation-reverse {
            animation: float 7s ease-in-out infinite reverse;
        }
        
        .noise-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIj48ZmlsdGVyIGlkPSJhIiB4PSIwIiB5PSIwIj48ZmVUdXJidWxlbmNlIHR5cGU9ImZyYWN0YWxOb2lzZSIgYmFzZUZyZXF1ZW5jeT0iLjc1IiBzdGl0Y2hUaWxlcz0ic3RpdGNoIi8+PC9maWx0ZXI+PHJlY3Qgd2lkdGg9IjMwMCIgaGVpZ2h0PSIzMDAiIGZpbHRlcj0idXJsKCNhKSIgb3BhY2l0eT0iMC4wNSIvPjwvc3ZnPg==');
            opacity: 0.25;
            z-index: 1;
            pointer-events: none;
        }
        
        .card-hover {
            transform: perspective(1000px) rotateX(0) rotateY(0);
            transition: transform 0.5s ease;
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body class="bg-dark text-text-light antialiased">
    <!-- Noise Overlay -->
    <div class="noise-overlay"></div>
    
    <!-- Background Effects -->
    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div class="absolute top-0 left-0 right-0 bottom-0 bg-dark"></div>
        <div class="absolute top-[10%] -left-[30%] w-[70%] h-[40%] bg-accent/10 rounded-full mix-blend-multiply filter blur-[120px] opacity-70"></div>
        <div class="absolute bottom-[10%] -right-[30%] w-[70%] h-[40%] bg-accent-secondary/10 rounded-full mix-blend-multiply filter blur-[120px] opacity-70"></div>
        <div class="absolute top-[60%] left-[20%] w-[40%] h-[30%] bg-purple-500/10 rounded-full mix-blend-multiply filter blur-[100px] opacity-70"></div>
    </div>
    
    <?php include('header2.php'); ?>
    
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center overflow-hidden px-4 py-20">
        <!-- Hero Background -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-b from-dark via-primary/80 to-dark/90"></div>
            <img src="images/mainFigureO.JPG" alt="Background" class="absolute inset-0 w-full h-full object-cover object-center opacity-20 mix-blend-overlay">
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-[20%] left-[10%] w-32 h-32 bg-accent/20 rounded-full mix-blend-screen filter blur-2xl opacity-50 float-animation"></div>
        <div class="absolute bottom-[20%] right-[10%] w-40 h-40 bg-accent-secondary/20 rounded-full mix-blend-screen filter blur-2xl opacity-50 float-animation-reverse"></div>
        
        <div class="container mx-auto relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Main Heading with Animation -->
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-display font-bold mb-6">
                    <span class="inline-block" data-gsap="hero-title">Mari&Matt</span>
                    <span class="text-gradient block mt-2" data-gsap="hero-subtitle">aerialDesign</span>
                </h1>
                
                <p class="text-xl md:text-2xl text-text-muted max-w-2xl mx-auto mb-12" data-gsap="hero-description">
                    Custom aerial equipment crafted with passion and precision.
                    Designed by aerial artists, for aerial artists.
                </p>
                
                <!-- CTA Buttons -->
                <div class="flex flex-wrap justify-center gap-6 mb-20" data-gsap="hero-cta">
                    <a href="/SitoWebAerea/shop.php" class="px-8 py-4 bg-gradient rounded-full font-medium text-white hover:shadow-glow transition-all duration-300 transform hover:-translate-y-1">
                        Explore Products
                    </a>
                    <a href="/SitoWebAerea/designYourTools.php" class="px-8 py-4 bg-transparent border border-accent/50 text-white rounded-full font-medium hover:bg-accent/10 transition-all duration-300 transform hover:-translate-y-1">
                        Custom Design
                    </a>
                </div>
            </div>
            
            <!-- Feature Icons -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12" data-gsap="feature-icons">
                <a href="/SitoWebAerea/designYourTools.php" class="group">
                    <div class="glass-card rounded-2xl p-6 transition-all duration-500 hover:shadow-glow hover:-translate-y-2">
                        <div class="relative w-20 h-20 mx-auto mb-6 float-animation-slow">
                            <div class="absolute inset-0 bg-accent/20 rounded-full filter blur-md opacity-50 group-hover:opacity-80 transition-all duration-500"></div>
                            <img src="images/icone/designIco.png" alt="Design Your Tools" 
                                 class="relative z-10 w-full h-full object-contain transition-all duration-500 group-hover:scale-110">
                        </div>
                        <p class="text-center font-medium mt-2 group-hover:text-accent transition-colors duration-300">Design your tools</p>
                    </div>
                </a>
                
                <a href="/SitoWebAerea/shop.php" class="group">
                    <div class="glass-card rounded-2xl p-6 transition-all duration-500 hover:shadow-glow-accent hover:-translate-y-2">
                        <div class="relative w-20 h-20 mx-auto mb-6 float-animation-slow" style="animation-delay: 0.5s;">
                            <div class="absolute inset-0 bg-accent-secondary/20 rounded-full filter blur-md opacity-50 group-hover:opacity-80 transition-all duration-500"></div>
                            <img src="images/icone/shopIco.png" alt="Shop" 
                                 class="relative z-10 w-full h-full object-contain transition-all duration-500 group-hover:scale-110">
                        </div>
                        <p class="text-center font-medium mt-2 group-hover:text-accent-secondary transition-colors duration-300">Shop</p>
                    </div>
                </a>
                
                <a href="/SitoWebAerea/rent.php" class="group">
                    <div class="glass-card rounded-2xl p-6 transition-all duration-500 hover:shadow-glow hover:-translate-y-2">
                        <div class="relative w-20 h-20 mx-auto mb-6 float-animation-slow" style="animation-delay: 1s;">
                            <div class="absolute inset-0 bg-accent/20 rounded-full filter blur-md opacity-50 group-hover:opacity-80 transition-all duration-500"></div>
                            <img src="images/icone/rentIco.png" alt="Rent" 
                                 class="relative z-10 w-full h-full object-contain transition-all duration-500 group-hover:scale-110">
                        </div>
                        <p class="text-center font-medium mt-2 group-hover:text-accent transition-colors duration-300">Rent</p>
                    </div>
                </a>
                
                <a href="/SitoWebAerea/aboutUs.php" class="group">
                    <div class="glass-card rounded-2xl p-6 transition-all duration-500 hover:shadow-glow-accent hover:-translate-y-2">
                        <div class="relative w-20 h-20 mx-auto mb-6 float-animation-slow" style="animation-delay: 1.5s;">
                            <div class="absolute inset-0 bg-accent-secondary/20 rounded-full filter blur-md opacity-50 group-hover:opacity-80 transition-all duration-500"></div>
                            <img src="images/icone/infoIco.png" alt="About Us" 
                                 class="relative z-10 w-full h-full object-contain transition-all duration-500 group-hover:scale-110">
                        </div>
                        <p class="text-center font-medium mt-2 group-hover:text-accent-secondary transition-colors duration-300">About Us</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="relative py-24 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="glass-card rounded-3xl p-10 md:p-16 transform transition-all duration-500 hover:shadow-glow hover:scale-[1.02]" data-gsap="about-card">
                    <div class="text-center">
                        <h2 class="text-gradient text-4xl md:text-5xl font-display font-bold mb-8">
                            Creazioni su misura
                        </h2>
                        <p class="text-xl md:text-2xl italic text-white/80 mb-8">
                            "Pensate per chi vive l'aerea come passione."
                        </p>
                        <p class="text-lg text-text-muted leading-relaxed mb-8">
                            Progettiamo e realizziamo attrezzi per discipline aeree con passione e precisione.
                            Ogni nostra creazione è frutto di esperienza, ricerca e cura dei dettagli,
                            per garantire performance ottimali e sicurezza assoluta.
                        </p>
                        <a href="/SitoWebAerea/aboutUs.php" class="inline-flex items-center text-accent hover:text-white transition-colors duration-300 text-lg font-medium">
                            <span>Scopri di più</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="relative py-20 overflow-hidden">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-display font-bold text-center mb-16">
                <span class="text-gradient">Il nostro lavoro</span>
            </h2>
            
            <div class="relative overflow-hidden">
                <!-- Gallery Container -->
                <div class="gallery-scroll flex gap-6 py-8 overflow-x-auto scrollbar-hide">
                    <div class="flex-none w-[350px] h-[450px] relative rounded-2xl overflow-hidden group">
                        <img src="images/foto1.jpg" alt="Aerial Performance" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-8">
                                <h3 class="text-xl font-bold text-white">Aerial Hoop Performance</h3>
                                <p class="text-text-muted mt-2">Professional aerial equipment in action</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex-none w-[350px] h-[450px] relative rounded-2xl overflow-hidden group">
                        <img src="images/foto2.jpg" alt="Aerial Equipment" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-8">
                                <h3 class="text-xl font-bold text-white">Custom Design</h3>
                                <p class="text-text-muted mt-2">Tailor-made equipment for your needs</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex-none w-[350px] h-[450px] relative rounded-2xl overflow-hidden group">
                        <img src="images/foto3.jpg" alt="Aerial Performance" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-8">
                                <h3 class="text-xl font-bold text-white">Aerial Silks</h3>
                                <p class="text-text-muted mt-2">Premium quality fabrics for aerial arts</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex-none w-[350px] h-[450px] relative rounded-2xl overflow-hidden group">
                        <img src="images/foto4.jpg" alt="Aerial Equipment" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-8">
                                <h3 class="text-xl font-bold text-white">Aerial Hoop</h3>
                                <p class="text-text-muted mt-2">Professional-grade lyra equipment</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex-none w-[350px] h-[450px] relative rounded-2xl overflow-hidden group">
                        <img src="images/foto5.jpg" alt="Aerial Performance" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-8">
                                <h3 class="text-xl font-bold text-white">Performance Art</h3>
                                <p class="text-text-muted mt-2">Showcasing aerial artistry</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex-none w-[350px] h-[450px] relative rounded-2xl overflow-hidden group">
                        <img src="images/foto6.jpg" alt="Aerial Equipment" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-8">
                                <h3 class="text-xl font-bold text-white">Custom Builds</h3>
                                <p class="text-text-muted mt-2">Equipment designed to your specifications</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex-none w-[350px] h-[450px] relative rounded-2xl overflow-hidden group">
                        <img src="images/foto7.jpg" alt="Aerial Performance" 
                             class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-8">
                                <h3 class="text-xl font-bold text-white">Professional Equipment</h3>
                                <p class="text-text-muted mt-2">Built for safety and performance</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Gradient Overlays -->
                <div class="absolute left-0 top-0 bottom-0 w-20 bg-gradient-to-r from-dark to-transparent pointer-events-none"></div>
                <div class="absolute right-0 top-0 bottom-0 w-20 bg-gradient-to-l from-dark to-transparent pointer-events-none"></div>
            </div>
            
            <!-- Gallery Actions -->
            <div class="flex justify-center mt-12">
                <a href="/SitoWebAerea/gallery.php" class="inline-flex items-center gap-2 px-8 py-4 border border-accent/50 text-white rounded-full font-medium hover:bg-accent/10 transition-all duration-300 transform hover:-translate-y-1">
                    <span>View Full Gallery</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    
    <?php include('footer.php'); ?>
    
    <!-- GSAP Animations -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Register ScrollTrigger
            gsap.registerPlugin(ScrollTrigger);
            
            // Hero Animations
            gsap.from('[data-gsap="hero-title"]', {
                y: 50,
                opacity: 0,
                duration: 1,
                ease: "power3.out"
            });
            
            gsap.from('[data-gsap="hero-subtitle"]', {
                y: 50,
                opacity: 0,
                duration: 1,
                delay: 0.3,
                ease: "power3.out"
            });
            
            gsap.from('[data-gsap="hero-description"]', {
                y: 50,
                opacity: 0,
                duration: 1,
                delay: 0.6,
                ease: "power3.out"
            });
            
            gsap.from('[data-gsap="hero-cta"]', {
                y: 50,
                opacity: 0,
                duration: 1,
                delay: 0.9,
                ease: "power3.out"
            });
            
            // Feature Icons Animation
            gsap.from('[data-gsap="feature-icons"] > *', {
                y: 100,
                opacity: 0,
                duration: 0.8,
                stagger: 0.2,
                delay: 1.2,
                ease: "power3.out"
            });
            
            // About Card Animation
            gsap.from('[data-gsap="about-card"]', {
                scrollTrigger: {
                    trigger: '[data-gsap="about-card"]',
                    start: "top 80%",
                },
                y: 100,
                opacity: 0,
                duration: 1,
                ease: "power3.out"
            });
            
            // Gallery items animation on scroll
            document.querySelectorAll('.gallery-scroll > div').forEach((item, index) => {
                gsap.from(item, {
                    scrollTrigger: {
                        trigger: '.gallery-scroll',
                        start: "top 80%",
                    },
                    x: 100,
                    opacity: 0,
                    duration: 0.8,
                    delay: index * 0.1,
                    ease: "power3.out"
                });
            });
            
            // Parallax scroll effect for background elements
            window.addEventListener('scroll', () => {
                document.documentElement.style.setProperty('--scrollY', window.scrollY * -0.1 + 'px');
            });
            
            // 3D card hover effect
            document.querySelectorAll('.card-hover').forEach(card => {
                card.addEventListener('mousemove', e => {
                    const cardRect = card.getBoundingClientRect();
                    const cardCenterX = cardRect.left + cardRect.width / 2;
                    const cardCenterY = cardRect.top + cardRect.height / 2;
                    const angleY = (e.clientX - cardCenterX) / 15;
                    const angleX = (cardCenterY - e.clientY) / 15;
                    
                    card.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg)`;
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
                });
            });
            
            // Horizontal scrolling for gallery
            const gallery = document.querySelector('.gallery-scroll');
            let isDown = false;
            let startX;
            let scrollLeft;
            
            if (gallery) {
                gallery.addEventListener('mousedown', (e) => {
                    isDown = true;
                    gallery.style.cursor = 'grabbing';
                    startX = e.pageX - gallery.offsetLeft;
                    scrollLeft = gallery.scrollLeft;
                });
                
                gallery.addEventListener('mouseleave', () => {
                    isDown = false;
                    gallery.style.cursor = 'grab';
                });
                
                gallery.addEventListener('mouseup', () => {
                    isDown = false;
                    gallery.style.cursor = 'grab';
                });
                
                gallery.addEventListener('mousemove', (e) => {
                    if (!isDown) return;
                    e.preventDefault();
                    const x = e.pageX - gallery.offsetLeft;
                    const walk = (x - startX) * 2; // Scroll speed
                    gallery.scrollLeft = scrollLeft - walk;
                });
            }
        });
    </script>
</body>
</html>