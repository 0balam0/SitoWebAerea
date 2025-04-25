<!DOCTYPE html>
<html lang="it" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Meet the team behind Mari&Matt aerialDesign">
    <title>About Us - Mari&Matt aerialDesign</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0F172A',
                        secondary: '#1E293B',
                        accent: '#38BDF8',
                        highlight: '#F472B6',
                        dark: '#020617'
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                        display: ['Poppins', 'system-ui', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
    <!-- Modern Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    
    <!-- GSAP for smooth animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #38BDF8, #F472B6, #38BDF8);
            background-size: 200% 200%;
            animation: gradient-shift 8s ease infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }
        
        .card-shadow {
            box-shadow: 0 0 50px rgba(56, 189, 248, 0.1);
        }
        
        .team-member {
            transform-style: preserve-3d;
            perspective: 1000px;
        }
        
        .parallax-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }
        
        .noise-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.4;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIj48ZmlsdGVyIGlkPSJhIiB4PSIwIiB5PSIwIj48ZmVUdXJidWxlbmNlIHR5cGU9ImZyYWN0YWxOb2lzZSIgYmFzZUZyZXF1ZW5jeT0iLjc1IiBzdGl0Y2hUaWxlcz0ic3RpdGNoIi8+PC9maWx0ZXI+PHJlY3Qgd2lkdGg9IjMwMCIgaGVpZ2h0PSIzMDAiIGZpbHRlcj0idXJsKCNhKSIgb3BhY2l0eT0iMC4wNSIvPjwvc3ZnPg==');
            pointer-events: none;
            z-index: 1;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            25% { transform: translateY(-15px) rotate(-2deg); }
            75% { transform: translateY(15px) rotate(2deg); }
        }
        
        .floating {
            animation: float 12s ease-in-out infinite;
        }
        
        .image-glow {
            position: relative;
        }
        
        .image-glow::after {
            content: '';
            position: absolute;
            inset: -20px;
            background: radial-gradient(circle at center, rgba(56, 189, 248, 0.2), transparent 70%);
            z-index: -1;
            transition: all 0.5s ease;
        }
        
        .group:hover .image-glow::after {
            inset: -30px;
            background: radial-gradient(circle at center, rgba(56, 189, 248, 0.3), transparent 70%);
        }
    </style>
</head>
<body class="bg-dark min-h-screen overflow-x-hidden">
    <!-- Animated Background -->
    <div class="parallax-bg">
        <div class="absolute inset-0 bg-gradient-to-br from-primary via-dark to-secondary opacity-90"></div>
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="absolute top-[10%] left-[5%] w-[40rem] h-[40rem] bg-accent/20 rounded-full mix-blend-multiply filter blur-[128px] animate-pulse"></div>
            <div class="absolute bottom-[10%] right-[5%] w-[40rem] h-[40rem] bg-highlight/20 rounded-full mix-blend-multiply filter blur-[128px] animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute top-[40%] left-[50%] w-[40rem] h-[40rem] bg-purple-500/20 rounded-full mix-blend-multiply filter blur-[128px] animate-pulse" style="animation-delay: 4s;"></div>
        </div>
    </div>
    <div class="noise-bg"></div>
    
    <?php include('header2.php'); ?>
    
    <main class="relative pt-32">
        <!-- Page Title -->
        <div class="relative z-10 text-center mb-32">
            <div class="inline-block">
                <span class="inline-block text-accent text-lg font-semibold mb-4 tracking-wider opacity-90">THE CREATIVE MINDS</span>
                <h1 class="text-6xl md:text-8xl font-display font-bold leading-tight">
                    <span class="gradient-text">Our Team</span>
                </h1>
                <div class="mt-8 h-1 w-32 mx-auto bg-gradient-to-r from-accent to-highlight rounded-full"></div>
            </div>
            <p class="mt-8 text-gray-400 text-xl max-w-2xl mx-auto px-4 leading-relaxed">
                Bringing innovation and creativity to aerial equipment design, with a passion for excellence and attention to detail.
            </p>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Team Members Container -->
            <div class="space-y-40">
                <!-- Team Member 1 -->
                <div class="team-member" data-speed="1.1">
                    <div class="relative group">
                        <div class="glass-effect rounded-3xl p-8 md:p-12 transition-all duration-700 group-hover:translate-y-[-15px] card-shadow">
                            <div class="grid md:grid-cols-2 gap-16 items-center">
                                <div class="order-2 md:order-1 relative z-10">
                                    <span class="inline-block text-accent/80 text-sm tracking-wider mb-4">CREATIVE DIRECTOR</span>
                                    <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 tracking-tight">
                                        Marisa Munafò
                                    </h2>
                                    <p class="text-gray-300 text-lg leading-relaxed mb-8">
                                        Una designer visionaria con una passione innata per l'estetica e la funzionalità. 
                                        Il suo approccio innovativo trasforma idee complesse in esperienze visive straordinarie.
                                    </p>
                                    <div class="flex gap-6">
                                        <a href="#" class="group/link flex items-center gap-2 text-accent hover:text-white transition-colors duration-300">
                                            <span class="text-sm font-semibold tracking-wider">Twitter</span>
                                            <svg class="w-5 h-5 transition-transform duration-300 group-hover/link:translate-x-1" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                            </svg>
                                        </a>
                                        <a href="#" class="group/link flex items-center gap-2 text-accent hover:text-white transition-colors duration-300">
                                            <span class="text-sm font-semibold tracking-wider">LinkedIn</span>
                                            <svg class="w-5 h-5 transition-transform duration-300 group-hover/link:translate-x-1" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="order-1 md:order-2">
                                    <div class="relative group/image">
                                        <div class="absolute -inset-4 bg-gradient-to-r from-accent to-highlight rounded-2xl blur-2xl opacity-20 group-hover/image:opacity-40 transition-opacity duration-500"></div>
                                        <div class="relative rounded-2xl overflow-hidden image-glow">
                                            <div class="aspect-square">
                                                <img src="images/Marisa.jpg" alt="Marisa Munafò" 
                                                     class="w-full h-full object-cover transition-transform duration-700 group-hover/image:scale-110">
                                            </div>
                                            <div class="absolute inset-0 bg-gradient-to-t from-dark/50 to-transparent"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="team-member" data-speed="0.9">
                    <div class="relative group">
                        <div class="glass-effect rounded-3xl p-8 md:p-12 transition-all duration-700 group-hover:translate-y-[-15px] card-shadow">
                            <div class="grid md:grid-cols-2 gap-16 items-center">
                                <div class="order-2">
                                    <div class="relative group/image">
                                        <div class="absolute -inset-4 bg-gradient-to-r from-accent to-highlight rounded-2xl blur-2xl opacity-20 group-hover/image:opacity-40 transition-opacity duration-500"></div>
                                        <div class="relative rounded-2xl overflow-hidden image-glow">
                                            <div class="aspect-square">
                                                <img src="images/Matteo.jpg" alt="Matteo De Marco" 
                                                     class="w-full h-full object-cover transition-transform duration-700 group-hover/image:scale-110">
                                            </div>
                                            <div class="absolute inset-0 bg-gradient-to-t from-dark/50 to-transparent"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-1">
                                    <span class="inline-block text-accent/80 text-sm tracking-wider mb-4">TECHNICAL DIRECTOR</span>
                                    <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 tracking-tight">
                                        Matteo De Marco
                                    </h2>
                                    <p class="text-gray-300 text-lg leading-relaxed mb-8">
                                        Un innovatore tecnologico che trasforma visioni in realtà. 
                                        La sua expertise tecnica e passione per l'eccellenza guidano lo sviluppo di soluzioni all'avanguardia.
                                    </p>
                                    <div class="flex gap-6">
                                        <a href="#" class="group/link flex items-center gap-2 text-accent hover:text-white transition-colors duration-300">
                                            <span class="text-sm font-semibold tracking-wider">Twitter</span>
                                            <svg class="w-5 h-5 transition-transform duration-300 group-hover/link:translate-x-1" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                            </svg>
                                        </a>
                                        <a href="#" class="group/link flex items-center gap-2 text-accent hover:text-white transition-colors duration-300">
                                            <span class="text-sm font-semibold tracking-wider">LinkedIn</span>
                                            <svg class="w-5 h-5 transition-transform duration-300 group-hover/link:translate-x-1" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <?php include('footer.php'); ?>
    
    <script>
        // Initialize GSAP
        gsap.registerPlugin(ScrollTrigger);
        
        // Animate team members on scroll
        gsap.utils.toArray('.team-member').forEach((member, i) => {
            const speed = member.dataset.speed || 1;
            
            gsap.from(member, {
                y: 100,
                opacity: 0,
                duration: 1.5,
                ease: "power4.out",
                scrollTrigger: {
                    trigger: member,
                    start: "top bottom-=100",
                    end: "top center",
                    scrub: speed
                }
            });
        });
        
        // Parallax effect for background elements
        document.addEventListener('mousemove', (e) => {
            const moveX = (e.clientX - window.innerWidth / 2) * 0.01;
            const moveY = (e.clientY - window.innerHeight / 2) * 0.01;
            
            gsap.to('.parallax-bg div', {
                x: moveX,
                y: moveY,
                duration: 1,
                ease: 'power2.out'
            });
        });
    </script>
</body>
</html>
