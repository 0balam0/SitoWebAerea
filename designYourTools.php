<?php
// Modifica questo indirizzo con quello a cui vuoi ricevere le email
$destinatario = "info@mariandmatt.com";
$messaggioInviato = false;
$errore = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars(trim($_POST["nome"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $Nome_ogetto = htmlspecialchars(trim($_POST["Nome_ogetto"]));
    $caratteristiche = htmlspecialchars(trim($_POST["caratteristiche"]));

    // Controllo base
    if ($nome && $email && $Nome_ogetto && $caratteristiche) {
        $oggetto = "Nuova richiesta attrezzo da $nome";
        $messaggio = "Hai ricevuto una nuova richiesta:\n\n";
        $messaggio .= "Nome: $nome\n";
        $messaggio .= "Email: $email\n\n";
        $messaggio .= "Nome Ogetto:\n$Nome_ogetto\n\n";
        $messaggio .= "Caratteristiche:\n$caratteristiche\n";

        $headers = "From: $email";

        if (mail($destinatario, $oggetto, $messaggio, $headers)) {
            $messaggioInviato = true;
        } else {
            $errore = true;
        }
    } else {
        $errore = true;
    }
}
?>

<!DOCTYPE html>
<html lang="it" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mari&Matt aerialDesign - Design your custom aerial equipment">
    <title>Design Your Tools - Mari&Matt aerialDesign</title>
    
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
        .text-gradient {
            background: linear-gradient(135deg, #06b6d4, #f472b6);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .custom-form {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
            padding: 30px;
            border-radius: 16px;
        }
        
        .custom-form input,
        .custom-form textarea {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            color: white;
            transition: all 0.3s ease;
        }
        
        .custom-form input:focus,
        .custom-form textarea:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 2px rgba(6, 182, 212, 0.2);
        }
        
        .custom-form button {
            background: linear-gradient(135deg, var(--accent), var(--accent-secondary));
            color: white;
            border: none;
            padding: 14px 28px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .custom-form button:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 25px rgba(6, 182, 212, 0.3);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            padding: 12px;
            margin-bottom: 16px;
            color: var(--accent);
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
        <!-- Hero Section -->
        <section class="py-20 relative overflow-hidden">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-display font-bold mb-6">
                        <span class="text-gradient">Design Your Custom Tools</span>
                    </h1>
                    <p class="text-lg text-text-muted max-w-2xl mx-auto">
                        Create your perfect aerial equipment tailored to your specific needs. Our experts will craft custom-made tools designed exclusively for you.
                    </p>
                </div>
            </div>
        </section>
        
        <!-- Features Section -->
        <section class="pb-16 relative">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    <div class="flex flex-col items-center text-center p-8" data-aos="fade-up">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Custom Design</h3>
                        <p class="text-text-muted">Work with our experts to create a design that perfectly suits your needs and style preferences.</p>
                    </div>
                    
                    <div class="flex flex-col items-center text-center p-8" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Premium Materials</h3>
                        <p class="text-text-muted">We use only the highest quality materials to ensure safety, durability, and optimal performance.</p>
                    </div>
                    
                    <div class="flex flex-col items-center text-center p-8" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Expert Craftsmanship</h3>
                        <p class="text-text-muted">Each custom piece is meticulously crafted by our skilled artisans with years of aerial experience.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Form Section -->
        <section class="py-16 relative">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                    <div>
                        <h2 class="text-3xl font-display font-bold mb-6">Request Your Custom Design</h2>
                        <p class="text-text-muted mb-8">
                            Tell us about your vision, and we'll bring it to life. Fill out the form with your requirements and preferences, and our design team will contact you to discuss the details.
                        </p>
                        
                        <div class="space-y-6">
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full flex items-center justify-center bg-accent/10 mr-4">
                                    <span class="text-accent font-bold">1</span>
                                </div>
                                <div>
                                    <h3 class="font-medium">Submit Your Request</h3>
                                    <p class="text-text-muted text-sm">Fill out the form with your design requirements</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full flex items-center justify-center bg-accent/10 mr-4">
                                    <span class="text-accent font-bold">2</span>
                                </div>
                                <div>
                                    <h3 class="font-medium">Consultation</h3>
                                    <p class="text-text-muted text-sm">Our designers will contact you to discuss details</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full flex items-center justify-center bg-accent/10 mr-4">
                                    <span class="text-accent font-bold">3</span>
                                </div>
                                <div>
                                    <h3 class="font-medium">Design & Production</h3>
                                    <p class="text-text-muted text-sm">We create a custom design and craft your equipment</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full flex items-center justify-center bg-accent/10 mr-4">
                                    <span class="text-accent font-bold">4</span>
                                </div>
                                <div>
                                    <h3 class="font-medium">Delivery</h3>
                                    <p class="text-text-muted text-sm">Receive your custom-made aerial equipment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <?php if ($messaggioInviato): ?>
                            <div class="custom-form">
                                <div class="p-6 bg-green-500/20 text-green-300 rounded-lg mb-6">
                                    <h3 class="text-xl font-semibold mb-2">Request Sent Successfully!</h3>
                                    <p>Thank you for your custom design request. Our team will contact you shortly to discuss the details.</p>
                                </div>
                                <a href="/SitoWebAerea/shop.php" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-accent to-accent-secondary text-white rounded-full font-medium transition-all duration-300 hover:shadow-glow">
                                    <span>Browse Our Products</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        <?php else: ?>
                            <div class="custom-form">
                                <?php if ($errore): ?>
                                    <div class="p-4 mb-6 bg-red-500/20 text-red-300 rounded-lg">
                                        There was an error sending your request. Please check your information and try again.
                                    </div>
                                <?php endif; ?>
                                
                                <form action="" method="POST">
                                    <div class="mb-4">
                                        <label for="nome" class="block text-white mb-2">Your Name</label>
                                        <input type="text" id="nome" name="nome" required>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="email" class="block text-white mb-2">Your Email</label>
                                        <input type="email" id="email" name="email" required>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="Nome_ogetto" class="block text-white mb-2">Equipment Name</label>
                                        <input type="text" id="Nome_ogetto" name="Nome_ogetto" required>
                                    </div>
                                    
                                    <div class="mb-6">
                                        <label for="caratteristiche" class="block text-white mb-2">Required Features</label>
                                        <textarea id="caratteristiche" name="caratteristiche" rows="6" placeholder="Describe the equipment, dimensions, materials, colors, and any special features you need..." required></textarea>
                                    </div>
                                    
                                    <button type="submit">Send Request</button>
                                </form>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Gallery Section -->
        <section class="py-20 relative">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-display font-bold text-center mb-16">
                    <span class="text-gradient">Our Custom Creations</span>
                </h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="relative rounded-2xl overflow-hidden group h-80">
                        <img src="images/foto1.jpg" alt="Custom Design 1" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-8">
                                <h3 class="text-xl font-bold text-white">Custom Aerial Hoop</h3>
                                <p class="text-text-muted mt-2">Designed for professional performances</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative rounded-2xl overflow-hidden group h-80">
                        <img src="images/foto2.jpg" alt="Custom Design 2" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-8">
                                <h3 class="text-xl font-bold text-white">Specialized Silks Setup</h3>
                                <p class="text-text-muted mt-2">Custom length and color combinations</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="relative rounded-2xl overflow-hidden group h-80">
                        <img src="images/foto3.jpg" alt="Custom Design 3" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-8">
                                <h3 class="text-xl font-bold text-white">Unique Shape Design</h3>
                                <p class="text-text-muted mt-2">Innovative aerial apparatus for unique performances</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php include('footer.php'); ?>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            gsap.registerPlugin(ScrollTrigger);
            
            // Animate section elements on scroll
            gsap.utils.toArray('[data-aos]').forEach((element) => {
                gsap.from(element, {
                    y: 50,
                    opacity: 0,
                    duration: 1,
                    scrollTrigger: {
                        trigger: element,
                        start: "top 80%",
                    }
                });
            });
        });
    </script>
</body>
</html>