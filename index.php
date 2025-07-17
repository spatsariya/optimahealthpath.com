<?php
$pageTitle = "OptimaHealthPath - Leading Teleradiology Services in North America";
$pageDescription = "Professional teleradiology services across US & Canada. 24/7 remote radiology reporting, expert diagnostics, and fast turnaround times.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    
    <!-- SEO Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="teleradiology, radiology services, medical imaging, diagnostic services, remote radiology, US healthcare, Canadian healthcare">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:type" content="website">
    
    <!-- Tailwind CSS and Inter font -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1B2B65', // Dark blue from logo
                        secondary: '#636E72',
                        accent: '#40C9B5', // Teal from logo
                        brain: '#0984E3', // Brain blue color
                    },
                    fontFamily: {
                        sans: ['Inter var', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-out',
                        'slide-up': 'slideUp 0.5s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        }
                    },
                    backdropFilter: {
                        'none': 'none',
                        'blur': 'blur(20px)',
                    },
                }
            }
        }
    </script>
    
    <!-- Custom Styles -->
    <style type="text/tailwind">
        @layer utilities {
            .text-shadow {
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="fixed w-full z-50">
        <nav class="container mx-auto px-6 py-4 backdrop-blur-lg bg-white/70 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-2">
                    <img src="assets/images/logo.png" alt="Optima Health Path Logo" class="h-12">
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-primary hover:text-accent transition-colors duration-300 font-medium">Home</a>
                    <a href="#services" class="text-primary hover:text-accent transition-colors duration-300 font-medium">Services</a>
                    <a href="#about" class="text-primary hover:text-accent transition-colors duration-300 font-medium">About</a>
                    <a href="#contact" class="text-primary hover:text-accent transition-colors duration-300 font-medium">Contact</a>
                </div>
                <button class="bg-accent text-white px-6 py-2 rounded-lg hover:brightness-110 transition-all duration-300 font-medium shadow-lg shadow-accent/20">
                    Get Started
                </button>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="min-h-screen pt-24 lg:pt-32 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-gray-50 -z-10"></div>
        <div class="container mx-auto px-6 py-16 text-center relative">
            <div class="animate-fade-in">
                <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold text-primary tracking-tight mb-8 leading-tight">
                    Advanced Teleradiology
                    <span class="block text-accent mt-2">For Modern Healthcare</span>
                </h1>
                <p class="text-xl text-secondary mb-12 max-w-3xl mx-auto animate-slide-up delay-200">
                    Empowering healthcare providers across North America with 24/7 expert radiology reporting, 
                    rapid turnaround times, and cutting-edge technology.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-6 animate-slide-up delay-300">
                    <a href="#contact" class="bg-accent text-white px-8 py-4 rounded-lg hover:bg-blue-600 transition-colors duration-300 font-medium">
                        Request a Demo
                    </a>
                    <a href="#services" class="bg-white/80 backdrop-blur-sm text-primary border border-gray-200 px-8 py-4 rounded-lg hover:bg-white transition-all duration-300 font-medium">
                        Explore Services
                    </a>
                </div>
            </div>
            <div class="absolute -z-10 w-[600px] h-[600px] bg-blue-100/50 rounded-full blur-3xl top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 relative">
        <div class="absolute inset-0 bg-white/80 backdrop-blur-sm -z-10"></div>
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-16 text-primary tracking-tight">Our Services</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-8 border border-gray-100 hover:border-accent transition-all duration-300 group">
                    <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-accent/10 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-primary group-hover:text-accent transition-colors duration-300">24/7 Emergency Coverage</h3>
                    <p class="text-secondary">Round-the-clock emergency radiology coverage with rapid turnaround times and expert analysis.</p>
                </div>

                <!-- Service Card 2 -->
                <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-8 border border-gray-100 hover:border-accent transition-all duration-300 group">
                    <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-accent/10 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-primary group-hover:text-accent transition-colors duration-300">Subspecialty Expertise</h3>
                    <p class="text-secondary">Access to specialized radiologists across all diagnostic disciplines, ensuring precise interpretations.</p>
                </div>

                <!-- Service Card 3 -->
                <div class="bg-white/70 backdrop-blur-sm rounded-2xl p-8 border border-gray-100 hover:border-accent transition-all duration-300 group">
                    <div class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-accent/10 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3 text-primary group-hover:text-accent transition-colors duration-300">Secure PACS System</h3>
                    <p class="text-secondary">State-of-the-art PACS integration with enhanced security protocols for seamless workflow.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 relative">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-white/50 backdrop-blur-sm -z-10"></div>
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold text-center mb-8 text-primary tracking-tight">Why Choose Us?</h2>
                <p class="text-secondary text-xl mb-16 text-center leading-relaxed">
                    Combining expert radiologists, cutting-edge technology, and unwavering commitment to patient care 
                    to deliver excellence in teleradiology services.
                </p>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white/70 backdrop-blur-sm p-8 rounded-2xl border border-gray-100 hover:border-accent transition-all duration-300 group">
                        <h3 class="text-xl font-semibold mb-4 text-primary group-hover:text-accent transition-colors duration-300">Our Mission</h3>
                        <p class="text-secondary leading-relaxed">
                            To provide high-quality, timely, and accessible radiological expertise to healthcare 
                            facilities across North America, enhancing patient care through advanced teleradiology solutions.
                        </p>
                    </div>
                    <div class="bg-white/70 backdrop-blur-sm p-8 rounded-2xl border border-gray-100 hover:border-accent transition-all duration-300 group">
                        <h3 class="text-xl font-semibold mb-4 text-primary group-hover:text-accent transition-colors duration-300">Our Expertise</h3>
                        <p class="text-secondary leading-relaxed">
                            Our team consists of board-certified radiologists with extensive experience in 
                            various subspecialties, ensuring accurate and reliable diagnostic services.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 relative">
        <div class="absolute inset-0 bg-gradient-to-br from-white/50 to-blue-50/50 backdrop-blur-sm -z-10"></div>
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-center mb-8 text-primary tracking-tight">Get in Touch</h2>
            <p class="text-secondary text-xl mb-16 text-center max-w-2xl mx-auto leading-relaxed">
                Ready to transform your radiology services? Let's discuss how we can help enhance your healthcare delivery.
            </p>
            <div class="max-w-4xl mx-auto">
                <form id="contactForm" class="grid md:grid-cols-2 gap-8" action="includes/form_handler.php" method="POST">
                    <div class="group">
                        <label class="block text-primary mb-2 font-medium" for="name">Name</label>
                        <input type="text" id="name" name="name" 
                            class="w-full px-4 py-3 bg-white/70 backdrop-blur-sm border border-gray-200 rounded-xl 
                            focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all duration-300
                            text-primary placeholder-gray-400" 
                            required>
                    </div>
                    <div class="group">
                        <label class="block text-primary mb-2 font-medium" for="email">Email</label>
                        <input type="email" id="email" name="email" 
                            class="w-full px-4 py-3 bg-white/70 backdrop-blur-sm border border-gray-200 rounded-xl 
                            focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all duration-300
                            text-primary placeholder-gray-400" 
                            required>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-primary mb-2 font-medium" for="message">Message</label>
                        <textarea id="message" name="message" rows="4" 
                            class="w-full px-4 py-3 bg-white/70 backdrop-blur-sm border border-gray-200 rounded-xl 
                            focus:outline-none focus:border-accent focus:ring-2 focus:ring-accent/10 transition-all duration-300
                            text-primary placeholder-gray-400" 
                            required></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <div id="formMessage" class="mb-6 text-center hidden">
                            <p class="text-green-600 font-medium" id="successMessage"></p>
                            <p class="text-red-500 font-medium" id="errorMessage"></p>
                        </div>
                        <div class="text-center">
                            <button type="submit" 
                                class="bg-accent text-white px-10 py-3 rounded-xl hover:bg-blue-600 
                                transition-all duration-300 font-medium inline-flex items-center group">
                                Send Message
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" 
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Add this before closing body tag -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const successMessage = document.getElementById('successMessage');
            const errorMessage = document.getElementById('errorMessage');
            const formMessage = document.getElementById('formMessage');
            
            fetch(this.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                formMessage.classList.remove('hidden');
                if (data.status === 'success') {
                    successMessage.textContent = data.message;
                    errorMessage.textContent = '';
                    this.reset();
                } else {
                    errorMessage.textContent = data.message;
                    successMessage.textContent = '';
                }
            })
            .catch(error => {
                formMessage.classList.remove('hidden');
                errorMessage.textContent = 'An error occurred. Please try again later.';
                successMessage.textContent = '';
            });
        });

    <!-- Footer -->
    <footer class="bg-primary text-white py-16 relative">
        <div class="absolute inset-0 bg-gradient-to-br from-primary to-primary/90 backdrop-blur-sm"></div>
        <div class="container mx-auto px-6 relative">
            <div class="grid md:grid-cols-4 gap-12">
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-white/90">Optima Health Path</h3>
                    <p class="text-white/70 leading-relaxed">
                        Leading teleradiology services provider in North America, delivering excellence in diagnostic care.
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-white/90">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="#home" class="text-white/70 hover:text-accent transition-colors duration-300">Home</a></li>
                        <li><a href="#services" class="text-white/70 hover:text-accent transition-colors duration-300">Services</a></li>
                        <li><a href="#about" class="text-white/70 hover:text-accent transition-colors duration-300">About</a></li>
                        <li><a href="#contact" class="text-white/70 hover:text-accent transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-white/90">Contact</h3>
                    <ul class="space-y-3">
                        <li class="text-white/70 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            contact@optimahealthpath.com
                        </li>
                        <li class="text-white/70 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            (Coming Soon)
                        </li>
                        <li class="text-white/70 flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 mt-1 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Coming Soon
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-white/90">Connect With Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white/70 hover:text-accent transition-colors duration-300 group">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-white/70 hover:text-accent transition-colors duration-300 group">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-white/10 mt-12 pt-8 text-center text-white/70">
                <p>&copy; <?php echo date('Y'); ?> Optima Health Path. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- Custom Scripts -->
    <script>
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
</body>
</html>
