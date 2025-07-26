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
                            (+1 (647) 275-5418)
                        </li>
                    </ul>
                    <div class="mt-6">
                        <h4 class="text-lg font-medium mb-3 text-white/90">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="text-white/70 hover:text-accent transition-colors duration-300">
                                <span class="sr-only">LinkedIn</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-white/70 hover:text-accent transition-colors duration-300">
                                <span class="sr-only">Twitter</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                                </svg>
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
