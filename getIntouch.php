<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get in Touch - Aerea</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .social-link {
            transition: transform 0.3s ease, opacity 0.3s ease;
        }
        
        .social-link:hover {
            transform: translateY(-5px);
            opacity: 0.8;
        }
        
        .getTouchImg {
            width: 35px;
            margin: 5px;
            transition: transform 0.3s ease;
            border-radius: 10px;
        }
        
        .getTouchImg:hover {
            transform: scale(1.2);
        }
        
        .contact-form {
            background-color: var(--boxInfoColor);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
            margin-bottom: 50px;
        }
        
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid rgba(255,255,255,0.1);
            background-color: rgba(255,255,255,0.05);
            color: white;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        
        .contact-form input:focus,
        .contact-form textarea:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 2px rgba(var(--accent-rgb), 0.2);
        }
        
        .contact-form button {
            background: linear-gradient(to right, var(--accent), var(--accent-secondary));
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .contact-form button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(var(--accent-rgb), 0.4);
        }
        
        .contact-info-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .contact-info-item .icon {
            color: var(--accent);
            margin-right: 15px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    
    <div class="container mx-auto px-4 py-16">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-white mb-3">Get in Touch</h1>
            <p class="text-text-muted max-w-2xl mx-auto">We'd love to hear from you. Whether you have a question about our products, services, or anything else, our team is ready to answer all your inquiries.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <div class="contact-form">
                    <h2 class="text-2xl font-semibold text-white mb-6">Send us a message</h2>
                    
                    <?php
                    $messaggioInviato = false;
                    $errore = false;
                    $destinatario = "info@mariandmatt.com";
                    
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nome = htmlspecialchars(trim($_POST["nome"]));
                        $email = htmlspecialchars(trim($_POST["email"]));
                        $oggetto = htmlspecialchars(trim($_POST["oggetto"]));
                        $messaggio = htmlspecialchars(trim($_POST["messaggio"]));
                    
                        if ($nome && $email && $oggetto && $messaggio) {
                            $oggetto_email = "Nuovo messaggio da $nome: $oggetto";
                            $contenuto = "Hai ricevuto un nuovo messaggio:\n\n";
                            $contenuto .= "Nome: $nome\n";
                            $contenuto .= "Email: $email\n\n";
                            $contenuto .= "Messaggio:\n$messaggio\n";
                    
                            $headers = "From: $email";
                    
                            if (mail($destinatario, $oggetto_email, $contenuto, $headers)) {
                                $messaggioInviato = true;
                            } else {
                                $errore = true;
                            }
                        } else {
                            $errore = true;
                        }
                    }
                    ?>
                    
                    <?php if ($messaggioInviato): ?>
                        <div class="p-4 mb-6 bg-green-500/20 text-green-300 rounded-lg">
                            Your message has been sent successfully! We'll get back to you soon.
                        </div>
                    <?php elseif ($errore): ?>
                        <div class="p-4 mb-6 bg-red-500/20 text-red-300 rounded-lg">
                            There was an error sending your message. Please check your information and try again.
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="">
                        <div class="mb-4">
                            <label for="nome" class="block text-white mb-2">Your Name</label>
                            <input type="text" id="nome" name="nome" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="email" class="block text-white mb-2">Your Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="oggetto" class="block text-white mb-2">Subject</label>
                            <input type="text" id="oggetto" name="oggetto" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="messaggio" class="block text-white mb-2">Message</label>
                            <textarea id="messaggio" name="messaggio" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
            
            <!-- Contact Information -->
            <div>
                <div class="mb-8">
                    <h2 class="text-2xl font-semibold text-white mb-6">Contact Information</h2>
                    
                    <div class="contact-info-item">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-medium">Address</h3>
                            <p class="text-text-muted">123 Aerial Street, Milan, Italy, 20100</p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-medium">Email</h3>
                            <p class="text-text-muted">
                                <a href="mailto:info@mariandmatt.com" class="hover:text-accent transition-colors duration-300">
                                    info@mariandmatt.com
                                </a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-medium">Phone</h3>
                            <p class="text-text-muted">
                                <a href="tel:+393001234567" class="hover:text-accent transition-colors duration-300">
                                    +39 300 123 4567
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-2xl font-semibold text-white mb-6">Follow Us</h2>
                    
                    <div class="flex space-x-4">
                        <a href="https://www.facebook.com/tuapagina" target="_blank" rel="noopener noreferrer" class="social-link">
                            <img src="images/icone/facebook.svg" alt="Facebook" class="getTouchImg">
                        </a>
                        <a href="https://www.instagram.com/tuoprofilo" target="_blank" rel="noopener noreferrer" class="social-link">
                            <img src="images/icone/instagram.svg" alt="Instagram" class="getTouchImg">
                        </a>
                        <a href="mailto:info@mariandmatt.com" class="social-link">
                            <img src="images/icone/email.svg" alt="Email" class="getTouchImg">
                        </a>
                        <a href="tel:+393001234567" class="social-link">
                            <img src="images/icone/telephone.svg" alt="Telefono" class="getTouchImg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include('footer.php'); ?>
</body>
</html>