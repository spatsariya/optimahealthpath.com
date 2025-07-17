<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    
    <!-- Favicon and App Icons -->
    <link rel="icon" type="image/png" href="/assets/images/fav-icon.png">
    <link rel="shortcut icon" type="image/png" href="/assets/images/fav-icon.png">
    <link rel="apple-touch-icon" href="/assets/images/fav-icon.png">
    
    <!-- Open Graph Image -->
    <meta property="og:image" content="/assets/images/meta-image.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    
    <!-- SEO Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="keywords" content="teleradiology, teleradiology services, radiology services, medical imaging, diagnostic services, remote radiology, US healthcare, Canadian healthcare, Indian healthcare, North America radiology, Asia radiology, 24/7 radiology, emergency radiology, PACS system, AI radiology, radiologist consultation, medical diagnostics, healthcare imaging, telehealth radiology, remote diagnostic services, radiology reporting, medical imaging services, subspecialty radiology, radiology workflow, healthcare technology, telemedicine radiology, radiology AI, diagnostic imaging, medical image analysis, radiology outsourcing, healthcare solutions, radiology experts, medical professionals, diagnostic accuracy, fast turnaround, radiology coverage, healthcare facilities, hospital radiology, clinic radiology, emergency imaging, urgent radiology, radiology specialists, board certified radiologists, medical imaging technology, healthcare innovation, radiology automation, diagnostic excellence, patient care, healthcare delivery, medical expertise, radiology partnership, healthcare providers, medical facilities, diagnostic centers, imaging centers, radiology departments, healthcare systems, medical networks, telemedicine solutions, digital healthcare, health technology, medical IT, healthcare software, radiology platform, medical cloud, healthcare cloud, radiology cloud, diagnostic cloud, medical data, healthcare analytics, radiology analytics, medical insights, healthcare metrics, diagnostic metrics, radiology KPIs, healthcare performance, medical quality, diagnostic quality, radiology excellence, healthcare standards, medical compliance, HIPAA compliance, healthcare security, medical privacy, data protection, healthcare governance, medical regulations, healthcare certification, radiology accreditation, medical standards">
    <meta name="author" content="Optima Health Path">
    <meta name="publisher" content="Optima Health Path">
    <meta name="copyright" content="© <?php echo date('Y'); ?> Optima Health Path. All rights reserved.">
    <meta name="distribution" content="global">
    <meta name="rating" content="general">
    <meta name="revisit-after" content="1 day">
    <meta name="language" content="English">
    
    <!-- Geographic Targeting -->
    <meta name="geo.region" content="US">
    <meta name="geo.region" content="CA">
    <meta name="geo.region" content="IN">
    <meta name="geo.country" content="US">
    <meta name="geo.country" content="CA">
    <meta name="geo.country" content="IN">
    <meta name="geo.placename" content="North America">
    <meta name="geo.placename" content="Asia">
    <meta name="ICBM" content="39.8283, -98.5795">
    <meta name="DC.title" content="<?php echo $pageTitle; ?>">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php echo $pageTitle; ?>">
    <meta property="og:description" content="<?php echo $pageDescription; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://optimahealthpath.com<?php echo $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:site_name" content="Optima Health Path">
    <meta property="og:locale" content="en_US">
    <meta property="og:locale:alternate" content="en_CA">
    <meta property="og:locale:alternate" content="en_IN">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $pageTitle; ?>">
    <meta name="twitter:description" content="<?php echo $pageDescription; ?>">
    <meta name="twitter:image" content="https://optimahealthpath.com/assets/images/meta-image.png">
    <meta name="twitter:site" content="@optimahealthpath">
    <meta name="twitter:creator" content="@optimahealthpath">
    
    <!-- LinkedIn Open Graph -->
    <meta property="og:image:alt" content="Optima Health Path - Leading Teleradiology Services">
    
    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#1B2B65">
    <meta name="msapplication-TileColor" content="#1B2B65">
    <meta name="msapplication-config" content="browserconfig.xml">
    
    <!-- Structured Data for Rich Snippets -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MedicalOrganization",
        "name": "Optima Health Path",
        "url": "https://optimahealthpath.com",
        "logo": "https://optimahealthpath.com/assets/images/logo.png",
        "image": "https://optimahealthpath.com/assets/images/meta-image.png",
        "description": "Professional teleradiology services across US, Canada & India. 24/7 remote radiology reporting, expert diagnostics, and fast turnaround times.",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": ["US", "CA", "IN"],
            "addressRegion": "North America, Asia"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1-XXX-XXX-XXXX",
            "contactType": "customer service",
            "email": "contact@optimahealthpath.com",
            "availableLanguage": ["English"],
            "areaServed": ["US", "CA", "IN"]
        },
        "medicalSpecialty": "Radiology",
        "serviceType": "Teleradiology Services",
        "availableService": [
            {
                "@type": "MedicalService",
                "name": "24/7 Emergency Radiology Coverage",
                "description": "Round-the-clock emergency radiology coverage with rapid turnaround times"
            },
            {
                "@type": "MedicalService", 
                "name": "Subspecialty Radiology Expertise",
                "description": "Access to specialized radiologists across all diagnostic disciplines"
            },
            {
                "@type": "MedicalService",
                "name": "Secure PACS System",
                "description": "State-of-the-art PACS integration with enhanced security protocols"
            }
        ],
        "openingHours": "Mo-Su 00:00-23:59",
        "hasCredential": "Board Certified Radiologists",
        "sameAs": [
            "https://www.linkedin.com/company/optimahealthpath",
            "https://www.facebook.com/optimahealthpath"
        ]
    }
    </script>
    
    <!-- Additional Schema Markup for Local SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Optima Health Path",
        "url": "https://optimahealthpath.com",
        "telephone": "+1-XXX-XXX-XXXX",
        "email": "contact@optimahealthpath.com",
        "priceRange": "$$",
        "paymentAccepted": "Insurance, Cash, Credit Card",
        "currenciesAccepted": "USD, CAD, INR",
        "openingHours": "Mo-Su 00:00-23:59",
        "serviceArea": {
            "@type": "Place",
            "name": "North America and Asia",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": ["US", "CA", "IN"]
            }
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Teleradiology Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Emergency Radiology Coverage",
                        "description": "24/7 emergency radiology services with rapid reporting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service", 
                        "name": "Subspecialty Radiology",
                        "description": "Specialized radiology expertise across all diagnostic disciplines"
                    }
                }
            ]
        }
    }
    </script>
    
    <!-- WebSite Schema for Search Box -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Optima Health Path",
        "url": "https://optimahealthpath.com",
        "description": "Leading teleradiology services in North America and Asia",
        "publisher": {
            "@type": "Organization",
            "name": "Optima Health Path",
            "logo": {
                "@type": "ImageObject",
                "url": "https://optimahealthpath.com/assets/images/logo.png"
            }
        },
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://optimahealthpath.com/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>
    
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
    <header class="fixed w-full z-50 px-8" style="top: 32px;">
        <nav class="container mx-auto px-6 py-4 backdrop-blur-lg bg-white/70 border border-gray-200 rounded-3xl">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="flex items-center">
                        <!-- Logo with fallback text -->
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
                    </div>
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
