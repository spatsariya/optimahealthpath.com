    <!-- Footer -->
    <footer class="bg-primary text-white py-16 relative">
        <div class="absolute inset-0 bg-gradient-to-br from-primary to-primary/90 backdrop-blur-sm"></div>
        <div class="container mx-auto px-6 relative">
            <div class="grid md:grid-cols-4 gap-12">
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-white/90">Optima Health Path</h3>
                    <p class="text-white/70 leading-relaxed">
                        Leading teleradiology services provider across North America and Asia, delivering excellence in diagnostic care to US, Canada, and India.
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-white/90">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="/" class="text-white/70 hover:text-accent transition-colors duration-300">Home</a></li>
                        <li><a href="/services.php" class="text-white/70 hover:text-accent transition-colors duration-300">Services</a></li>
                        <li><a href="/for-facilities.php" class="text-white/70 hover:text-accent transition-colors duration-300">For Facilities</a></li>
                        <li><a href="/about-us.php" class="text-white/70 hover:text-accent transition-colors duration-300">About</a></li>
                        <li><a href="/partner.php" class="text-white/70 hover:text-accent transition-colors duration-300">Partner</a></li>
                        <li><a href="/contact.php" class="text-white/70 hover:text-accent transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-white/90">Legal</h3>
                    <ul class="space-y-3">
                        <li><a href="/privacy-policy.php" class="text-white/70 hover:text-accent transition-colors duration-300">Privacy Policy</a></li>
                        <li><a href="/terms-of-service.php" class="text-white/70 hover:text-accent transition-colors duration-300">Terms of Service</a></li>
                        <li><a href="/hipaa-compliance.php" class="text-white/70 hover:text-accent transition-colors duration-300">HIPAA Compliance</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-white/90">Contact</h3>
                    <ul class="space-y-3">
                        <li><span class="text-white/70">Toronto, ON, Canada</span></li>
                        <li><a href="tel:+16472755418" class="text-white/70 hover:text-accent transition-colors duration-300">+1 (647) 275-5418</a></li>
                        <li><a href="mailto:contact@optimahealthpath.com" class="text-white/70 hover:text-accent transition-colors duration-300">contact@optimahealthpath.com</a></li>
                    </ul>
                    <div class="mt-6">
                        <h4 class="text-lg font-medium mb-3 text-white/90">Follow Us</h4>
                        <!-- Font Awesome CDN -->
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
                        <div class="flex space-x-4">
                            <a href="https://www.facebook.com/Optimahealthpath/" target="_blank" rel="noopener" class="text-white/70 hover:text-accent transition-colors duration-300">
                                <span class="sr-only">Facebook</span>
                                <i class="fab fa-facebook-f fa-lg"></i>
                            </a>
                            <a href="http://instagram.com/optimahealthpath" target="_blank" rel="noopener" class="text-white/70 hover:text-accent transition-colors duration-300">
                                <span class="sr-only">Instagram</span>
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/optimahealthpath" target="_blank" rel="noopener" class="text-white/70 hover:text-accent transition-colors duration-300">
                                <span class="sr-only">LinkedIn</span>
                                <i class="fab fa-linkedin-in fa-lg"></i>
                            </a>
                            <a href="https://api.whatsapp.com/send?phone=16473339098&text=Hi%20Team%20Optima%20Health%20Path%2C%0A%0AI%20hope%20you%27re%20doing%20well.%20I%E2%80%99d%20like%20to%20connect%20briefly%20to%20discuss%20a%20potential%20business%20opportunity.%0A%0AIs%20someone%20available%20for%20a%20quick%20chat%20this%20week%3F" target="_blank" rel="noopener" class="text-white/70 hover:text-accent transition-colors duration-300">
                                <span class="sr-only">WhatsApp</span>
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-white/10 mt-12 pt-8 text-center text-white/70">
                <p>&copy; <?php echo date('Y'); ?> Optima Health Path. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- Scripts -->
    <script>
        // Wait for DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
            
            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                if (mobileMenu && mobileMenuButton) {
                    if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
            
            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>
