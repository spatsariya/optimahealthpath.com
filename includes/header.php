<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    
    <!-- Favicon and App Icons -->
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="/assets/images/og-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    
    <!-- SEO Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="teleradiology, radiology services, medical imaging, diagnostic services, remote radiology, US healthcare, Canadian healthcare">
    
    <!-- Tailwind CSS and Inter font -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1B2B65',
                        secondary: '#636E72',
                        accent: '#40C9B5',
                        brain: '#0984E3',
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
                <div class="flex items-center">
                    <a href="/" class="flex items-center">
                        <img 
                            src="/assets/images/logo.png" 
                            alt="Optima Health Path Logo" 
                            class="h-16 md:h-20" 
                            draggable="false"
                            onerror="this.style.display='none';this.nextElementSibling.style.display='block'"
                        >
                        <div class="hidden">
                            <span class="text-accent text-2xl font-bold">Optima</span>
                            <span class="text-primary text-2xl font-bold">Health Path</span>
                        </div>
                    </a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="text-primary hover:text-accent transition-colors duration-300 font-medium">Home</a>
                    <a href="/services.php" class="text-primary hover:text-accent transition-colors duration-300 font-medium">Services</a>
                    <a href="/for-facilities.php" class="text-primary hover:text-accent transition-colors duration-300 font-medium">For Facilities</a>
                    <a href="/about-us.php" class="text-primary hover:text-accent transition-colors duration-300 font-medium">About</a>
                    <a href="/contact.php" class="text-primary hover:text-accent transition-colors duration-300 font-medium">Contact</a>
                </div>
                <a href="/contact.php" class="bg-accent text-white px-6 py-2 rounded-lg hover:brightness-110 transition-all duration-300 font-medium shadow-lg shadow-accent/20">
                    Get Started
                </a>
            </div>
        </nav>
    </header>
