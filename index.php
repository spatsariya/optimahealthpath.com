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
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0078d7',
                        secondary: '#2c5282',
                    }
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
    <header class="fixed w-full bg-white shadow-md z-50">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold text-primary">
                    OptimaHealthPath
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-primary transition">Home</a>
                    <a href="#services" class="text-gray-700 hover:text-primary transition">Services</a>
                    <a href="#about" class="text-gray-700 hover:text-primary transition">About</a>
                    <a href="#contact" class="text-gray-700 hover:text-primary transition">Contact</a>
                </div>
                <button class="bg-primary text-white px-6 py-2 rounded-md hover:bg-secondary transition">
                    Get Started
                </button>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="pt-24 lg:pt-32">
        <div class="container mx-auto px-6 py-16 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-8">
                Advanced Teleradiology Services<br>
                <span class="text-primary">Across North America</span>
            </h1>
            <p class="text-xl text-gray-600 mb-12 max-w-3xl mx-auto">
                24/7 expert radiology reporting services for healthcare providers across US and Canada. 
                Fast turnaround times, subspecialty expertise, and state-of-the-art technology.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#contact" class="bg-primary text-white px-8 py-4 rounded-lg hover:bg-secondary transition">
                    Request a Demo
                </a>
                <a href="#services" class="bg-white text-primary border-2 border-primary px-8 py-4 rounded-lg hover:bg-gray-50 transition">
                    Learn More
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">Our Teleradiology Services</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">24/7 Emergency Coverage</h3>
                    <p class="text-gray-600">Round-the-clock emergency radiology coverage with rapid turnaround times.</p>
                </div>

                <!-- Service Card 2 -->
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Subspecialty Expertise</h3>
                    <p class="text-gray-600">Access to specialized radiologists across all diagnostic disciplines.</p>
                </div>

                <!-- Service Card 3 -->
                <div class="bg-gray-50 rounded-xl p-6 shadow-lg">
                    <div class="w-16 h-16 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Secure PACS System</h3>
                    <p class="text-gray-600">State-of-the-art PACS integration with enhanced security protocols.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-8">Why Choose OptimaHealthPath?</h2>
                <p class="text-gray-600 text-lg mb-12 text-center">
                    We deliver excellence in teleradiology services through our team of expert radiologists, 
                    cutting-edge technology, and commitment to quality patient care.
                </p>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-4">Our Mission</h3>
                        <p class="text-gray-600">
                            To provide high-quality, timely, and accessible radiological expertise to healthcare 
                            facilities across North America, enhancing patient care through advanced teleradiology solutions.
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-4">Our Expertise</h3>
                        <p class="text-gray-600">
                            Our team consists of board-certified radiologists with extensive experience in 
                            various subspecialties, ensuring accurate and reliable diagnostic services.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-16">Get in Touch</h2>
            <div class="max-w-4xl mx-auto">
                <form id="contactForm" class="grid md:grid-cols-2 gap-6" action="includes/form_handler.php" method="POST">
                    <div>
                        <label class="block text-gray-700 mb-2" for="name">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-primary" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 mb-2" for="email">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-primary" required>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 mb-2" for="message">Message</label>
                        <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-primary" required></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <div id="formMessage" class="mb-4 text-center hidden">
                            <p class="text-green-600" id="successMessage"></p>
                            <p class="text-red-600" id="errorMessage"></p>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="bg-primary text-white px-8 py-3 rounded-lg hover:bg-secondary transition">
                                Send Message
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
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Optima Health Path</h3>
                    <p class="text-gray-400">
                        Leading teleradiology services provider in North America.
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition">Services</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition">About</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>Email: contact@optimahealthpath.com</li>
                        <li>Phone: (Coming Soon)</li>
                        <li>Address: Coming Soon</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; <?php echo date('Y'); ?> OptimaHealthPath. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
