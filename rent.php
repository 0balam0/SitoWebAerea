<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent Aerial Equipment - Mari&Matt aerialDesign</title>
    
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
    
    <!-- Leaflet for maps -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    
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
        
        /* Map styles */
        #map-container {
            height: 500px;
            width: 100%;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }
        
        /* Service cards */
        .rental-card {
            transition: transform 0.5s cubic-bezier(0.19, 1, 0.22, 1), 
                        box-shadow 0.5s cubic-bezier(0.19, 1, 0.22, 1);
        }
        
        .rental-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
        }
        
        /* Service check form */
        .service-check-form {
            position: relative;
            z-index: 10;
        }
        
        .service-check-form input {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            padding: 1rem 1.5rem;
            border-radius: 0.5rem;
            width: 100%;
            transition: all 0.3s ease;
        }
        
        .service-check-form input:focus {
            outline: none;
            border-color: var(--accent);
            background: rgba(255, 255, 255, 0.1);
        }
        
        .service-check-form button {
            position: absolute;
            right: 0.5rem;
            top: 50%;
            transform: translateY(-50%);
            background: linear-gradient(135deg, #06b6d4, #f472b6);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .service-check-form button:hover {
            box-shadow: 0 0 20px rgba(6, 182, 212, 0.35);
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
                        <span class="text-gradient">Rent Aerial Equipment</span>
                    </h1>
                    <p class="text-lg text-text-muted max-w-2xl mx-auto">
                        Access premium aerial equipment for your performances, photoshoots, or practice sessions without the commitment of purchasing. Explore our rental options available in Turin and surrounding areas.
                    </p>
                </div>
            </div>
        </section>
        
        <!-- Rental Options -->
        <section class="pb-20 relative">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Our Rental Services</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Rental Service 1 -->
                    <div class="rental-card glass-card rounded-2xl overflow-hidden">
                        <div class="aspect-video bg-gradient-to-br from-accent to-accent-secondary p-1 rounded-t-2xl">
                            <div class="w-full h-full bg-cover bg-center rounded-t-xl" style="background-image: url('images/shopping/cerchio.jpg')"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-display font-semibold mb-2">Daily Equipment Rental</h3>
                            <p class="text-text-muted text-sm mb-4">Rent aerial hoops, silks, or other equipment for a day. Perfect for one-time events or photoshoots.</p>
                            <div class="flex items-center justify-between">
                                <span class="text-accent font-display font-bold">From €30/day</span>
                                <a href="#service-check" class="bg-white/5 hover:bg-accent/20 text-white px-4 py-2 rounded-full text-sm transition-colors duration-300">
                                    Check Availability
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Rental Service 2 -->
                    <div class="rental-card glass-card rounded-2xl overflow-hidden">
                        <div class="aspect-video bg-gradient-to-br from-accent to-accent-secondary p-1 rounded-t-2xl">
                            <div class="w-full h-full bg-cover bg-center rounded-t-xl" style="background-image: url('images/shopping/lunaSmall.jpg')"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-display font-semibold mb-2">Weekly Equipment Rental</h3>
                            <p class="text-text-muted text-sm mb-4">Rent equipment for a full week. Ideal for workshops, intensive training, or short-term projects.</p>
                            <div class="flex items-center justify-between">
                                <span class="text-accent font-display font-bold">From €150/week</span>
                                <a href="#service-check" class="bg-white/5 hover:bg-accent/20 text-white px-4 py-2 rounded-full text-sm transition-colors duration-300">
                                    Check Availability
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Rental Service 3 -->
                    <div class="rental-card glass-card rounded-2xl overflow-hidden">
                        <div class="aspect-video bg-gradient-to-br from-accent to-accent-secondary p-1 rounded-t-2xl">
                            <div class="w-full h-full bg-cover bg-center rounded-t-xl" style="background-image: url('images/shopping/struttura.webp')"></div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-display font-semibold mb-2">Event Setup & Support</h3>
                            <p class="text-text-muted text-sm mb-4">Complete equipment setup with professional rigging and on-site technical support for your events.</p>
                            <div class="flex items-center justify-between">
                                <span class="text-accent font-display font-bold">Custom Quote</span>
                                <a href="#service-check" class="bg-white/5 hover:bg-accent/20 text-white px-4 py-2 rounded-full text-sm transition-colors duration-300">
                                    Request Info
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Service Area & Availability -->
        <section id="service-check" class="py-20 relative">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-3xl font-bold text-center mb-6">Check Service Availability</h2>
                    <p class="text-text-muted text-center mb-12">We currently offer our rental services in Turin and surrounding areas. Enter your location to check if we serve your area.</p>
                    
                    <!-- Service Check Form -->
                    <div class="service-check-form mb-12 max-w-2xl mx-auto">
                        <input type="text" id="location-input" placeholder="Enter your address or postal code" class="w-full">
                        <button id="check-availability-btn">Check Availability</button>
                    </div>
                    
                    <!-- Map Container -->
                    <div id="map-container"></div>
                    
                    <div class="mt-8 text-text-muted text-center">
                        <p>Our service area currently covers Turin city center and extends approximately 30km around the city.</p>
                        <p class="mt-2">For locations outside our regular service area, please <a href="getIntouch.php" class="text-accent hover:underline">contact us</a> for special arrangements.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Rental Process -->
        <section class="py-20 relative">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">How Our Rental Process Works</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <!-- Step 1 -->
                    <div class="flex flex-col items-center text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-accent to-accent-secondary rounded-full flex items-center justify-center mb-6 text-2xl font-bold">1</div>
                        <h3 class="text-xl font-semibold mb-4">Request Equipment</h3>
                        <p class="text-text-muted">Contact us with your equipment needs, rental period, and location. We'll check availability and provide a quote.</p>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="flex flex-col items-center text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-accent to-accent-secondary rounded-full flex items-center justify-center mb-6 text-2xl font-bold">2</div>
                        <h3 class="text-xl font-semibold mb-4">Confirm & Schedule</h3>
                        <p class="text-text-muted">Once you confirm, we'll schedule delivery or pickup of the equipment and handle payment details.</p>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="flex flex-col items-center text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-accent to-accent-secondary rounded-full flex items-center justify-center mb-6 text-2xl font-bold">3</div>
                        <h3 class="text-xl font-semibold mb-4">Enjoy & Return</h3>
                        <p class="text-text-muted">Use the equipment for your event or practice. When done, we'll arrange return or pickup according to the agreement.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- FAQ Section -->
        <section class="py-20 relative">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-12">Frequently Asked Questions</h2>
                
                <div class="max-w-3xl mx-auto">
                    <div class="glass-card rounded-2xl overflow-hidden divide-y divide-white/5">
                        <!-- FAQ Item 1 -->
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-3">What equipment is available for rent?</h3>
                            <p class="text-text-muted">We offer a wide range of aerial equipment including aerial hoops (lyra), silks, hammocks, aerial moon, and support structures. Our inventory includes various sizes to accommodate different needs and spaces.</p>
                        </div>
                        
                        <!-- FAQ Item 2 -->
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-3">Is delivery included in the rental fee?</h3>
                            <p class="text-text-muted">Delivery is included for locations within Turin city center. For locations outside the center but within our service area, a small delivery fee may apply based on distance. You can also pick up the equipment from our workshop to avoid delivery fees.</p>
                        </div>
                        
                        <!-- FAQ Item 3 -->
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-3">Do you provide installation services?</h3>
                            <p class="text-text-muted">Yes, we offer professional installation and rigging services for an additional fee. Our technicians ensure that all equipment is safely installed according to industry standards.</p>
                        </div>
                        
                        <!-- FAQ Item 4 -->
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-3">What if I damage the equipment?</h3>
                            <p class="text-text-muted">A security deposit is required for all rentals. Minor wear is expected and covered, but significant damage will be assessed and may be deducted from your deposit. We recommend checking the equipment thoroughly at pickup/delivery.</p>
                        </div>
                        
                        <!-- FAQ Item 5 -->
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-3">Can I extend my rental period?</h3>
                            <p class="text-text-muted">Extensions are possible based on availability. Please contact us at least 24 hours before your scheduled return to check if an extension is possible and arrange the details.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Call to Action -->
        <section class="py-20 relative">
            <div class="container mx-auto px-4">
                <div class="glass-card rounded-2xl overflow-hidden">
                    <div class="flex flex-col md:flex-row">
                        <div class="w-full md:w-1/2 bg-gradient-to-br from-accent to-accent-secondary p-1">
                            <div class="h-64 md:h-full bg-cover bg-center rounded-l-xl" style="background-image: url('images/foto1.jpg')"></div>
                        </div>
                        <div class="w-full md:w-1/2 p-8 md:p-12">
                            <h2 class="text-3xl font-display font-bold mb-4">Ready to rent aerial equipment?</h2>
                            <p class="text-text-muted mb-8">Contact us today to discuss your rental needs, check availability, and get a personalized quote for your event or practice sessions.</p>
                            <a href="getIntouch.php" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-accent to-accent-secondary text-white rounded-full font-medium transition-all duration-300 hover:shadow-glow">
                                <span>Contact Us Now</span>
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
    
    <?php include('footer.php'); ?>
    
    <script>
        // Initialize the map centered on Turin
        const map = L.map('map-container').setView([45.0703, 7.6869], 12);
        
        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        
        // Define service area - approximate 30km radius around Turin
        const turinCircle = L.circle([45.0703, 7.6869], {
            color: '#06b6d4',
            fillColor: '#06b6d4',
            fillOpacity: 0.2,
            radius: 30000
        }).addTo(map);
        
        // Add marker for our location
        const studioMarker = L.marker([45.0703, 7.6869]).addTo(map);
        studioMarker.bindPopup("<b>Mari&Matt aerialDesign</b><br>Main Studio & Workshop").openPopup();
        
        // Sample locations where service is available
        const serviceLocations = [
            {lat: 45.0525, lng: 7.6389, name: "Moncalieri"},
            {lat: 45.1387, lng: 7.7660, name: "Settimo Torinese"},
            {lat: 45.0312, lng: 7.5925, name: "Rivoli"},
            {lat: 45.0841, lng: 7.5156, name: "Collegno"},
            {lat: 44.9964, lng: 7.6498, name: "Nichelino"}
        ];
        
        // Add markers for service locations
        serviceLocations.forEach(location => {
            const marker = L.marker([location.lat, location.lng]).addTo(map);
            marker.bindPopup(`<b>${location.name}</b><br>Service Available`);
        });
        
        // Check availability function (simplified demo version)
        document.getElementById('check-availability-btn').addEventListener('click', function() {
            const locationInput = document.getElementById('location-input').value;
            
            if (locationInput.trim() === '') {
                alert('Please enter a location to check availability.');
                return;
            }
            
            // In a real application, this would check against a database or API
            // For demo purposes, we'll just show a confirmation
            alert(`We'll check availability for: ${locationInput}\n\nService is generally available in Turin and surrounding areas within 30km.`);
            
            // You would typically geocode the address here and check if it's within the service area
        });
        
        // GSAP Animations
        document.addEventListener('DOMContentLoaded', function() {
            gsap.registerPlugin(ScrollTrigger);
            
            // Animate rental cards on scroll
            gsap.utils.toArray('.rental-card').forEach((card, i) => {
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
