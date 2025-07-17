<?php
$pageTitle = "About OptimaHealthPath - Leading Teleradiology Provider | Our Story";
$pageDescription = "Learn about OptimaHealthPath's journey in revolutionizing teleradiology services across North America. Discover our mission, values, and commitment to excellence in healthcare.";
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="pt-32 pb-16 relative bg-gradient-to-br from-blue-50 to-gray-50">
    <div class="container mx-auto px-6">
        <h1 class="text-4xl md:text-5xl font-bold text-primary mb-8 tracking-tight">About OptimaHealthPath</h1>
        <p class="text-xl text-secondary mb-8 max-w-3xl">Leading the future of teleradiology with innovative solutions and unwavering commitment to patient care.</p>
    </div>
</section>

<!-- Main Content -->
<section class="py-16">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Company Story -->
            <div>
                <h2 class="text-3xl font-bold text-primary mb-6">Our Story</h2>
                <p class="text-secondary mb-6 leading-relaxed">
                    Founded in 2020, OptimaHealthPath emerged from a vision to transform healthcare delivery through advanced teleradiology solutions. Our founders, experienced healthcare professionals, recognized the growing need for efficient, reliable, and accessible diagnostic services across North America.
                </p>
                <p class="text-secondary mb-6 leading-relaxed">
                    Today, we serve hundreds of healthcare facilities across the United States and Canada, providing 24/7 access to expert radiological interpretations and maintaining the highest standards of patient care.
                </p>
            </div>

            <!-- Mission & Values -->
            <div>
                <h2 class="text-3xl font-bold text-primary mb-6">Our Mission & Values</h2>
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-semibold text-accent mb-3">Mission</h3>
                        <p class="text-secondary leading-relaxed">
                            To revolutionize healthcare delivery by providing exceptional teleradiology services that enhance patient care and optimize clinical outcomes.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-accent mb-3">Vision</h3>
                        <p class="text-secondary leading-relaxed">
                            To be the most trusted and innovative teleradiology partner for healthcare providers across North America.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Core Values -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-primary mb-12 text-center">Our Core Values</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-semibold text-primary mb-4">Excellence</h3>
                    <p class="text-secondary">Commitment to delivering the highest quality diagnostic services and patient care.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-semibold text-primary mb-4">Innovation</h3>
                    <p class="text-secondary">Continuously improving our services through technological advancement and research.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <h3 class="text-xl font-semibold text-primary mb-4">Integrity</h3>
                    <p class="text-secondary">Maintaining the highest ethical standards in all our operations and relationships.</p>
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-primary mb-12 text-center">Our Leadership Team</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="text-center">
                    <div class="w-48 h-48 mx-auto mb-6 rounded-full overflow-hidden bg-gray-200">
                        <!-- Add actual image here -->
                        <img src="/assets/images/team/placeholder.jpg" alt="Team Member" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold text-primary">Dr. Sarah Johnson</h3>
                    <p class="text-accent">Chief Medical Officer</p>
                </div>
                <!-- Team Member 2 -->
                <div class="text-center">
                    <div class="w-48 h-48 mx-auto mb-6 rounded-full overflow-hidden bg-gray-200">
                        <img src="/assets/images/team/placeholder.jpg" alt="Team Member" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold text-primary">Dr. Michael Chen</h3>
                    <p class="text-accent">Medical Director</p>
                </div>
                <!-- Team Member 3 -->
                <div class="text-center">
                    <div class="w-48 h-48 mx-auto mb-6 rounded-full overflow-hidden bg-gray-200">
                        <img src="/assets/images/team/placeholder.jpg" alt="Team Member" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold text-primary">Emily Rodriguez</h3>
                    <p class="text-accent">Operations Director</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certifications Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-primary mb-12 text-center">Our Certifications</h2>
        <div class="grid md:grid-cols-4 gap-8">
            <div class="bg-white p-6 rounded-xl text-center">
                <img src="/assets/images/certifications/hipaa.png" alt="HIPAA Certified" class="h-20 mx-auto mb-4">
                <p class="text-primary font-medium">HIPAA Compliant</p>
            </div>
            <div class="bg-white p-6 rounded-xl text-center">
                <img src="/assets/images/certifications/acr.png" alt="ACR Accredited" class="h-20 mx-auto mb-4">
                <p class="text-primary font-medium">ACR Accredited</p>
            </div>
            <div class="bg-white p-6 rounded-xl text-center">
                <img src="/assets/images/certifications/iso.png" alt="ISO Certified" class="h-20 mx-auto mb-4">
                <p class="text-primary font-medium">ISO 27001 Certified</p>
            </div>
            <div class="bg-white p-6 rounded-xl text-center">
                <img src="/assets/images/certifications/jc.png" alt="Joint Commission" class="h-20 mx-auto mb-4">
                <p class="text-primary font-medium">Joint Commission Accredited</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
