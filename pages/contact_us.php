<!DOCTYPE html>
<html lang="en">
<?php
$metaTitle = "Contact Us - Grow2Design | Get Your Free Consultation";
$metaDescription = "Ready to transform your business? Contact Grow2Design for a free consultation. Multiple ways to connect - phone, email, live chat, or book a discovery call.";
$metaKeywords = "";
$metaOGImage = "";
include('../include/head.php');
?>
<script type="module" src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Fgrow2desig9849back.builtwithrocket.new&_be=https%3A%2F%2Fapplication.rocket.new&_v=0.1.8"></script>

<body class="bg-background">
    <?php include_once('../include/header.php')?>
    <!-- Hero Section -->
    <section class="pt-24 pb-16 lg:pt-32 lg:pb-24 bg-gradient-to-br from-primary-50 to-white relative overflow-hidden">
        <!-- Background circles -->
            <div class="absolute inset-0 bg-gradient-to-r from-primary/5 to-accent/5"></div>
            <div class="absolute top-0 right-0 w-96 h-96 bg-primary/20 rounded-full blur-1xl transform translate-x-32 -translate-y-32 blur-1xl float-random" data-aos="fade-down" data-aos-duration="2000"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-accent/20 rounded-full blur-1xl transform -translate-x-16 translate-y-16 blur-1xl float-random" data-aos="fade-up" data-aos-duration="2000"></div>
        <div class="container-custom relative">
            <div class="max-w-4xl mx-auto text-center space-y-8">
                <div class="space-y-4" data-aos="fade-up" data-aos-duration="800">
                    <div class="inline-flex items-center px-4 py-2 bg-success-100 text-success-600 rounded-full text-sm font-medium" data-aos="zoom-in" data-aos-delay="200">
                        <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        Free Consultation Available
                    </div>
                    <h1 class="text-hero" data-aos="fade-up" data-aos-delay="400">Let's Start Your <span class="text-gradient">Growth Journey</span></h1>
                    <p class="text-xl text-text-secondary leading-relaxed max-w-3xl mx-auto" data-aos="fade-down" data-aos-delay="600">Ready to transform your business? We're here to help. Choose how you'd like to connect with our team and let's discuss your digital marketing goals.</p>
                </div>

                <!-- Quick Contact Options -->
                <div class="grid sm:grid-cols-3 gap-6 max-w-3xl mx-auto">
                    <div class="card-elevated p-6 text-center hover:shadow-conversion transition-smooth cursor-pointer" onclick="document.getElementById('phone-contact').scrollIntoView({behavior: 'smooth'})" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                        <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-text-primary mb-2">Call Us</h3>
                        <p class="text-sm text-text-secondary">Speak directly with our team</p>
                    </div>

                    <div class="card-elevated p-6 text-center hover:shadow-conversion transition-smooth cursor-pointer" onclick="document.getElementById('phone-contact').scrollIntoView({behavior: 'smooth'})" data-aos="fade-up" data-aos-delay="500" data-aos-duration="800">
                        <div class="w-12 h-12 bg-accent-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-text-primary mb-2">Project Inquiry</h3>
                        <p class="text-sm text-text-secondary">Tell us about your project</p>
                    </div>

                    <div class="card-elevated p-6 text-center hover:shadow-conversion transition-smooth cursor-pointer" onclick="document.getElementById('consultation-booking').scrollIntoView({behavior: 'smooth'})" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                        <div class="w-12 h-12 bg-success-100 rounded-xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 4v10a2 2 0 002 2h4a2 2 0 002-2V11m-6 0h6"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-text-primary mb-2">Book Consultation</h3>
                        <p class="text-sm text-text-secondary">Schedule a strategy session</p>
                    </div>
                </div>

                <!-- Response Time Commitment -->
                <div class="bg-white/80 backdrop-blur-sm rounded-xl p-6 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                    <div class="flex items-center justify-center space-x-8">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-primary">< 2 Hours</div>
                            <div class="text-sm text-text-secondary">Email Response</div>
                        </div>
                        <div class="w-px h-12 bg-secondary-200"></div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-success">24/7</div>
                            <div class="text-sm text-text-secondary">Live Chat Support</div>
                        </div>
                        <div class="w-px h-12 bg-secondary-200"></div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-accent">Same Day</div>
                            <div class="text-sm text-text-secondary">Consultation Booking</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Methods Section -->
    <section class="section-padding" id="phone-contact">
        <div class="container-custom">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- Contact Information -->
                <div class="space-y-8" data-aos="fade-up" data-aos-duration="800">
                    <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-section-title"><span class="text-gradient">Get In Touch</span></h2>
                        <p class="text-xl text-text-secondary">Choose your preferred way to connect with our team. We're here to help you achieve your digital marketing goals.</p>
                    </div>

                    <!-- Contact Methods -->
                    <div class="space-y-6" data-aos="fade-up" data-aos-delay="400">
                        <!-- Phone -->
                        <div class="sm:flex items-start space-x-4 p-6 card-subtle hover:shadow-conversion transition-smooth">
                            <div class="w-12 h-12 mb-4 bg-primary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-card-title mb-2">Phone Support</h3>
                                <p class="text-body mb-3">Speak directly with our strategy team for immediate assistance and project discussions.</p>
                                <div class="space-y-2">
                                    <div class="flex items-center space-x-2">
                                        <span class="font-semibold text-text-primary">India:</span>
                                        <a href="tel:+1-555-123-4567" class="text-primary hover:text-primary-700 transition-smooth">+91 99999 99999</a>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <span class="font-semibold text-text-primary">London:</span>
                                        <a href="tel:+44-20-7946-0958" class="text-primary hover:text-primary-700 transition-smooth">+44 20 7946 0958</a>
                                    </div>
                                    <div class="text-sm text-text-secondary">Mon-Fri: 9AM-6PM (Your Local Time)</div>
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="sm:flex items-start space-x-4 p-6 card-subtle hover:shadow-conversion transition-smooth">
                            <div class="w-12 h-12 mb-4 bg-accent-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-card-title mb-2">Email Support</h3>
                                <p class="text-body mb-3">Send us detailed project information and receive comprehensive proposals within 2 hours.</p>
                                <div class="space-y-2">
                                    <div class="flex items-center space-x-2">
                                        <span class="font-semibold text-text-primary">General:</span>
                                        <a href="mailto:contact@grow2design.com" class="text-primary hover:text-primary-700 transition-smooth">contact@grow2design.com</a>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <span class="font-semibold text-text-primary">Support:</span>
                                        <a href="mailto:support@grow2design.com" class="text-primary hover:text-primary-700 transition-smooth">support@grow2design.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Live Chat -->
                        <div class="sm:flex items-start space-x-4 p-6 card-subtle hover:shadow-conversion transition-smooth">
                            <div class="w-12 h-12 mb-4 bg-success-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.04 2c-5.52 0-10 4.48-10 10 0 1.77.46 3.49 1.34 5.02L2 22l5.14-1.34A9.96 9.96 0 0012.04 22c5.52 0 10-4.48 10-10s-4.48-10-10-10zm0 18c-1.65 0-3.26-.44-4.67-1.28l-.33-.19-3.05.8.82-2.98-.2-.34A8 8 0 1112.04 20zm4.62-6.07c-.25-.13-1.47-.72-1.7-.8-.23-.09-.4-.13-.57.12-.17.25-.65.8-.8.97-.15.17-.3.19-.55.06-.25-.13-1.06-.39-2.02-1.24-.74-.66-1.24-1.47-1.39-1.72-.15-.25-.02-.38.11-.51.11-.11.25-.3.37-.45.12-.15.17-.25.25-.42.08-.17.04-.31-.02-.43-.06-.12-.57-1.38-.78-1.9-.21-.5-.42-.43-.57-.44h-.48c-.17 0-.43.06-.66.31-.23.25-.87.85-.87 2.06s.9 2.39 1.02 2.56c.12.17 1.77 2.71 4.29 3.8.6.26 1.07.41 1.43.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.08.15-1.18-.06-.1-.23-.16-.48-.29z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-card-title mb-2">Live Chat</h3>
                                <p class="text-body mb-3">Get instant answers to your questions with our 24/7 live chat support system.</p>
                                <button class="btn-success inline-flex items-center" onclick="openLiveChat()">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                    </svg>
                                    Start Live Chat
                                </button>
                                <div class="mt-2 text-sm text-text-secondary">
                                    <span class="inline-flex items-center">
                                        <span class="w-2 h-2 bg-success rounded-full mr-2 online-dot" ></span>
                                        <span id="chat-status">3 agents online</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Social Media -->
                        <div class="sm:flex items-start space-x-4 p-6 card-subtle hover:shadow-conversion transition-smooth">
                            <div class="w-12 h-12 mb-4 bg-secondary-200 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-secondary-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-card-title mb-2">Social Media</h3>
                                <p class="text-body mb-3">Follow us for industry insights and connect with our team on your preferred platform.</p>
                                <div class="flex space-x-4">
                                    <a href="javascript:void(0)" class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white hover:bg-primary-700 transition-smooth">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                           <path d="M22.675 0h-21.35C.595 0 0 .593 0 1.326v21.348C0 23.407.595 24 1.326 24h11.495v-9.294H9.691v-3.622h3.13V8.413c0-3.1 1.893-4.788 4.658-4.788 1.325 0 2.464.098 2.795.142v3.24l-1.918.001c-1.504 0-1.796.715-1.796 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.407 24 24 23.407 24 22.674V1.326C24 .593 23.407 0 22.675 0z" />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="w-10 h-10 bg-secondary-700 rounded-lg flex items-center justify-center text-white hover:bg-primary transition-smooth">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="w-10 h-10 bg-error rounded-lg flex items-center justify-center text-white hover:bg-primary transition-smooth">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0)" class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-white hover:bg-primary transition-smooth">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                          <path d="M22.23 0H1.77C.79 0 0 .774 0 1.729v20.542C0 23.227.79 24 1.77 24h20.46C23.21 24 24 23.227 24 22.271V1.729C24 .774 23.21 0 22.23 0zM7.09 20.452H3.54V9h3.55v11.452zM5.315 7.433a2.06 2.06 0 110-4.122 2.06 2.06 0 010 4.122zm14.773 13.019h-3.545v-5.568c0-1.327-.027-3.033-1.849-3.033-1.85 0-2.133 1.445-2.133 2.938v5.663H9.368V9h3.404v1.561h.048c.474-.898 1.632-1.846 3.36-1.846 3.593 0 4.26 2.367 4.26 5.448v6.289z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Office Locations -->
                    <div class="space-y-6" data-aos="zoom-in" data-aos-delay="400">
                        <h3 class="text-card-title">Global Offices</h3>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div class="p-4 bg-surface rounded-lg">
                                <div class="font-semibold text-text-primary mb-1">India (HQ)</div>
                                <div class="text-sm text-text-secondary">123 Digital Avenue<br />India, 10001</div>
                            </div>
                            <div class="p-4 bg-surface rounded-lg">
                                <div class="font-semibold text-text-primary mb-1">London</div>
                                <div class="text-sm text-text-secondary">45 Innovation Street<br />London, UK EC1A 1BB</div>
                            </div>
                            <!-- <div class="p-4 bg-surface rounded-lg">
                                <div class="font-semibold text-text-primary mb-1">Toronto</div>
                                <div class="text-sm text-text-secondary">789 Growth Boulevard<br />Toronto, ON M5V 3A8</div>
                            </div>
                            <div class="p-4 bg-surface rounded-lg">
                                <div class="font-semibold text-text-primary mb-1">Sydney</div>
                                <div class="text-sm text-text-secondary">321 Design Lane<br />Sydney, NSW 2000</div>
                            </div> -->
                        </div>
                    </div>
                </div>

                <!-- Quick Contact Form -->
              <div class="card-elevated p-8" data-aos="fade-up" data-aos-duration="800">
                <div class="space-y-6">
                <div class="text-center space-y-2" data-aos="fade-down" data-aos-duration="800">
                    <h3 class="text-card-title">Quick Contact</h3>
                    <p class="text-body">Send us a message and we'll respond within 2 hours.</p>
                </div>

                <!-- Success Message -->
                <div id="success-message" class="hidden p-6 bg-green-50 border border-green-200 rounded-lg text-center">
                    <div class="flex flex-col items-center space-y-3">
                        <svg class="w-12 h-12 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <div>
                            <h4 class="text-lg font-semibold text-success">Thank You!</h4>
                            <p class="text-green-600">Your message has been sent successfully. We'll get back to you within 2 hours.</p>
                        </div>
                        <button onclick="resetForm()" class="mt-4 px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-colors">
                            Send Another Message
                        </button>
                    </div>
                </div>

                <!-- Hostinger Form - Simple PHP Method -->
                <form action="send-mail" method="POST" class="space-y-4" id="quick-contact-form">
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div data-aos="fade-up" data-aos-duration="500">
                            <label class="block text-sm font-medium text-text-primary mb-2">First Name *</label>
                            <input type="text" name="firstName" required class="form-input" placeholder="John" />
                        </div>
                        <div data-aos="fade-up" data-aos-duration="500">
                            <label class="block text-sm font-medium text-text-primary mb-2">Last Name *</label>
                            <input type="text" name="lastName" required class="form-input" placeholder="Smith" />
                        </div>
                    </div>

                    <div data-aos="fade-up" data-aos-duration="500">
                        <label class="block text-sm font-medium text-text-primary mb-2">Email Address *</label>
                        <input type="email" name="email" required class="form-input" placeholder="john@company.com" />
                    </div>

                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                        <label class="block text-sm font-medium text-text-primary mb-2">Phone Number</label>
                        <input type="tel" name="phone" class="form-input" placeholder="+1 (555) 123-4567" />
                    </div>

                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
                        <label class="block text-sm font-medium text-text-primary mb-2">How can we help? *</label>
                        <select name="inquiry" required class="form-input">
                            <option value="">Select an option</option>
                            <option value="general">General Inquiry</option>
                            <option value="project">New Project</option>
                            <option value="consultation">Free Consultation</option>
                            <option value="partnership">Partnership</option>
                            <option value="support">Support</option>
                        </select>
                    </div>

                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                        <label class="block text-sm font-medium text-text-primary mb-2">Message *</label>
                        <textarea name="message" required rows="4" class="form-input" placeholder="Tell us about your project or question..."></textarea>
                    </div>

                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                        <label class="flex items-start space-x-3">
                            <input type="checkbox" name="newsletter" class="mt-1 rounded border-secondary-300 text-primary focus:ring-primary-500" />
                            <span class="text-sm text-text-secondary">I'd like to receive marketing insights and updates</span>
                        </label>
                    </div>

                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
                        <button type="submit" class="btn-primary w-full flex items-center justify-center">
                            <span>Send Message</span>
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>

            </div>
        </div>
    </section>

    <!-- Consultation Booking -->
    <section class="section-padding bg-surface" id="consultation-booking">
        <div class="container-custom">
            <div class="max-w-6xl mx-auto">
                <div class="text-center space-y-4 mb-12" data-aos="fade-up" data-aos-duration="800">
                    <h2 class="text-section-title">Book Your <span class="text-gradient">Free Strategy Consultation </span></h2>
                    <p class="text-xl text-text-secondary max-w-3xl mx-auto">Schedule a 30-minute discovery call with our strategy team. We'll analyze your current situation and provide actionable recommendations.</p>
                </div>

                <div class="grid lg:grid-cols-2 gap-12 items-start">
                    <!-- Consultation Benefits -->
                    <div class="space-y-8" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <div class="space-y-6">
                            <h3 class="text-card-title" data-aos="fade-up" data-aos-delay="150">What You'll Get:</h3>
                            <div class="space-y-4">
                                <div class="flex items-start space-x-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-3 h-3 text-success" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-text-primary">Comprehensive Digital Audit</div>
                                        <div class="text-sm text-text-secondary">We'll analyze your current digital presence and identify growth opportunities</div>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-3 h-3 text-success" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-text-primary">Custom Strategy Recommendations</div>
                                        <div class="text-sm text-text-secondary">Tailored action plan based on your specific goals and industry</div>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-3 h-3 text-success" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-text-primary">ROI Projections</div>
                                        <div class="text-sm text-text-secondary">Realistic growth projections and investment recommendations</div>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="w-6 h-6 bg-success-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-3 h-3 text-success" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-text-primary">No Obligation Proposal</div>
                                        <div class="text-sm text-text-secondary">Detailed project proposal with transparent pricing (if you're interested)</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Consultation Types -->
                        <div class="space-y-4" data-aos="fade-up" data-aos-delay="250">
                            <h3 class="text-card-title">Choose Your Consultation Type:</h3>
                            <div class="space-y-3">
                                <label class="flex items-center space-x-3 p-4 border border-secondary-200 rounded-lg hover:bg-surface transition-smooth cursor-pointer">
                                    <input type="radio" name="consultationType" value="discovery" class="text-primary focus:ring-primary-500" checked />
                                    <div class="flex-1">
                                        <div class="font-semibold text-text-primary">Discovery Call (30 min)</div>
                                        <div class="text-sm text-text-secondary">Perfect for exploring opportunities and getting initial recommendations</div>
                                    </div>
                                </label>
                                <label class="flex items-center space-x-3 p-4 border border-secondary-200 rounded-lg hover:bg-surface transition-smooth cursor-pointer">
                                    <input type="radio" name="consultationType" value="deep-dive" class="text-primary focus:ring-primary-500" />
                                    <div class="flex-1">
                                        <div class="font-semibold text-text-primary">Deep Dive Session (60 min)</div>
                                        <div class="text-sm text-text-secondary">Comprehensive analysis with detailed strategy development</div>
                                    </div>
                                </label>
                                <label class="flex items-center space-x-3 p-4 border border-secondary-200 rounded-lg hover:bg-surface transition-smooth cursor-pointer">
                                    <input type="radio" name="consultationType" value="workshop" class="text-primary focus:ring-primary-500" />
                                    <div class="flex-1">
                                        <div class="font-semibold text-text-primary">Strategy Workshop (90 min)</div>
                                        <div class="text-sm text-text-secondary">Interactive session with your team to develop comprehensive strategy</div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Time Zone Detection -->
                        <div class="p-4 bg-primary-50 rounded-lg" data-aos="fade-up" data-aos-delay="450">
                            <div class="flex items-center space-x-2 text-primary-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="text-sm font-medium">Detected Time Zone: <span id="detected-timezone">EST (UTC-5)</span></span>
                            </div>
                        </div>
                    </div>

                    <!-- Booking Calendar -->
                    <div class="card-elevated p-8" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                        <div class="space-y-6">
                            <div class="text-center space-y-2" data-aos="fade-up" data-aos-delay="200">
                                <h3 class="text-card-title">Select Date & Time</h3>
                                <p class="text-body">Choose a convenient time for your consultation</p>
                            </div>

                            <!-- Calendar Widget -->
                            <div class="space-y-4" data-aos="fade-up" data-aos-delay="250">
                                <div class="grid grid-cols-7 gap-1 text-center text-sm">
                                    <div class="p-2 font-semibold text-text-secondary">Sun</div>
                                    <div class="p-2 font-semibold text-text-secondary">Mon</div>
                                    <div class="p-2 font-semibold text-text-secondary">Tue</div>
                                    <div class="p-2 font-semibold text-text-secondary">Wed</div>
                                    <div class="p-2 font-semibold text-text-secondary">Thu</div>
                                    <div class="p-2 font-semibold text-text-secondary">Fri</div>
                                    <div class="p-2 font-semibold text-text-secondary">Sat</div>
                                </div>
                                <div class="grid grid-cols-7 gap-1 text-center text-sm" id="calendar-grid">
                                    <!-- Calendar dates will be populated by JavaScript -->
                                </div>
                            </div>

                            <!-- Time Slots -->
                            <div class="space-y-3" id="time-slots" data-aos="fade-up" data-aos-delay="300">
                                <h4 class="font-semibold text-text-primary">Available Times</h4>
                                <div class="text-sm text-text-secondary">Select a date to see available time slots</div>
                            </div>

                            <!-- Booking Form -->
                            <form class="space-y-4" id="consultation-form" data-aos="fade-up" data-aos-delay="350">
                                <div class="grid sm:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-text-primary mb-2">First Name *</label>
                                        <input type="text" name="firstName" required class="form-input" placeholder="John" />
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-text-primary mb-2">Last Name *</label>
                                        <input type="text" name="lastName" required class="form-input" placeholder="Smith" />
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-text-primary mb-2">Email Address *</label>
                                    <input type="email" name="email" required class="form-input" placeholder="john@company.com" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-text-primary mb-2">Phone Number *</label>
                                    <input type="tel" name="phone" required class="form-input" placeholder="+1 (555) 123-4567" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-text-primary mb-2">Company Name</label>
                                    <input type="text" name="company" class="form-input" placeholder="Your Company" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-text-primary mb-2">What would you like to discuss? *</label>
                                    <textarea name="discussion" required rows="3" class="form-input" placeholder="Brief description of your goals and challenges..."></textarea>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-text-primary mb-2">Preferred Meeting Platform</label>
                                    <select name="platform" class="form-input">
                                        <option value="zoom">Zoom</option>
                                        <option value="google-meet">Google Meet</option>
                                        <option value="teams">Microsoft Teams</option>
                                        <option value="phone">Phone Call</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn-primary w-full flex items-center justify-center" disabled id="book-consultation-btn" data-aos="zoom-in" data-aos-delay="300">
                                    <span>Book Free Consultation</span>
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 4v10a2 2 0 002 2h4a2 2 0 002-2V11m-6 0h6"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-padding bg-surface">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto">
                <div class="text-center space-y-4 mb-12" data-aos="fade-down" data-aos-duration="800">
                    <h2 class="text-section-title"><span class="text-gradient">Frequently Asked Questions </span></h2>
                    <p class="text-xl text-text-secondary">Get answers to common questions about working with Grow2Design.</p>
                </div>

                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="card-subtle" data-aos="fade-up" data-aos-delay="100">
                        <button class="w-full p-6 text-left flex items-center justify-between faq-toggle" data-target="faq-1">
                            <span class="font-semibold text-text-primary">How quickly can you start working on my project?</span>
                            <svg class="w-5 h-5 text-secondary-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-6 text-text-secondary" id="faq-1">
                            Most projects can begin within 1-2 weeks of contract signing. For rush projects, we offer expedited onboarding with a 48-hour start time. During our consultation, we'll discuss your timeline needs and provide a realistic project start date.
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="card-subtle" data-aos="fade-up" data-aos-delay="150">
                        <button class="w-full p-6 text-left flex items-center justify-between faq-toggle" data-target="faq-2">
                            <span class="font-semibold text-text-primary">Do you work with international clients?</span>
                            <svg class="w-5 h-5 text-secondary-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-6 text-text-secondary" id="faq-2">
                            Absolutely! We serve clients across 50+ countries with offices in New York, London, Toronto, and Sydney. Our team is experienced in working across different time zones and cultural contexts to deliver results that resonate with your local market.
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="card-subtle" data-aos="fade-up" data-aos-delay="200">
                        <button class="w-full p-6 text-left flex items-center justify-between faq-toggle" data-target="faq-3">
                            <span class="font-semibold text-text-primary">What's included in the free consultation?</span>
                            <svg class="w-5 h-5 text-secondary-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-6 text-text-secondary" id="faq-3">
                            Your free consultation includes a comprehensive digital audit, custom strategy recommendations, ROI projections, and a no-obligation project proposal. We'll analyze your current digital presence and provide actionable insights you can implement immediately, regardless of whether you choose to work with us.
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="card-subtle" data-aos="fade-up" data-aos-delay="250">
                        <button class="w-full p-6 text-left flex items-center justify-between faq-toggle" data-target="faq-4">
                            <span class="font-semibold text-text-primary">How do you measure project success?</span>
                            <svg class="w-5 h-5 text-secondary-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-6 text-text-secondary" id="faq-4">
                            We establish clear KPIs and success metrics at the project start, including ROI targets, conversion rates, traffic growth, and brand awareness metrics. You'll receive detailed monthly reports with transparent data and actionable insights. Our average client sees 300% ROI within the first year.
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="card-subtle" data-aos="fade-up" data-aos-delay="300">
                        <button class="w-full p-6 text-left flex items-center justify-between faq-toggle" data-target="faq-5">
                            <span class="font-semibold text-text-primary">What makes Grow2Design different from other agencies?</span>
                            <svg class="w-5 h-5 text-secondary-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-6 text-text-secondary" id="faq-5">
                            Our "Growth Through Design Excellence" philosophy combines strategic creativity with data-driven results. We're not just service providers – we're growth partners. With 500+ successful projects, global reach, and a personal touch, we deliver measurable results while building long-term relationships with our clients.
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="card-subtle" data-aos="fade-up" data-aos-delay="350">
                        <button class="w-full p-6 text-left flex items-center justify-between faq-toggle" data-target="faq-6">
                            <span class="font-semibold text-text-primary">Do you offer ongoing support after project completion?</span>
                            <svg class="w-5 h-5 text-secondary-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="hidden px-6 pb-6 text-text-secondary" id="faq-6">
                            Yes! We offer various ongoing support packages including monthly retainers, quarterly strategy reviews, and on-demand consulting. Many of our clients choose ongoing partnerships to continuously optimize their digital presence and stay ahead of market changes.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- Footer -->
   <?php include('../include/footer.php')?>
    <!-- Live Chat Widget -->
    <!-- <div class="fixed bottom-6 right-6 z-50" id="chat-widget">
        <div class="bg-white rounded-lg shadow-conversion p-4 max-w-sm hidden" id="chat-window">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-success rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="font-semibold text-text-primary text-sm">Sarah</div>
                        <div class="text-xs text-success">Online</div>
                    </div>
                </div>
                <button onclick="closeLiveChat()" class="text-secondary-400 hover:text-secondary-600">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="space-y-3 mb-4 max-h-48 overflow-y-auto" id="chat-messages">
                <div class="bg-surface p-3 rounded-lg">
                    <div class="text-sm">Hi! I'm Sarah from Grow2Design. How can I help you today?</div>
                </div>
            </div>
            <div class="flex space-x-2">
                <input type="text" placeholder="Type your message..." class="flex-1 px-3 py-2 border border-secondary-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-primary-500" id="chat-input" />
                <button onclick="sendChatMessage()" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-700 transition-smooth">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                    </svg>
                </button>
            </div>
        </div>
        
        <button onclick="openLiveChat()" class="bg-primary text-white p-4 rounded-full shadow-conversion hover:bg-primary-700 transition-smooth" id="chat-toggle">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
            </svg>
        </button>
    </div> -->

    <script>

        // Multi-step form functionality
        // let currentStep = 1;
        // const totalSteps = 3;

        // function showStep(step) {
        //     document.querySelectorAll('.form-step').forEach(stepEl => {
        //         stepEl.classList.add('hidden');
        //     });
            
        //     document.querySelector(`[data-step="${step}"]`).classList.remove('hidden');
            
        //     document.querySelectorAll('.step-indicator').forEach((indicator, index) => {
        //         if (index + 1 <= step) {
        //             indicator.classList.remove('bg-secondary-300');
        //             indicator.classList.add('bg-primary');
        //         } else {
        //             indicator.classList.remove('bg-primary');
        //             indicator.classList.add('bg-secondary-300');
        //         }
        //     });
            
        //     const prevBtn = document.getElementById('prev-step');
        //     const nextBtn = document.getElementById('next-step');
        //     const submitBtn = document.getElementById('submit-form');
            
        //     if (step === 1) {
        //         prevBtn.classList.add('hidden');
        //     } else {
        //         prevBtn.classList.remove('hidden');
        //     }
            
        //     if (step === totalSteps) {
        //         nextBtn.classList.add('hidden');
        //         submitBtn.classList.remove('hidden');
        //     } else {
        //         nextBtn.classList.remove('hidden');
        //         submitBtn.classList.add('hidden');
        //     }
        // }

        // document.getElementById('next-step').addEventListener('click', function() {
        //     if (currentStep < totalSteps) {
        //         currentStep++;
        //         showStep(currentStep);
        //     }
        // });

        // document.getElementById('prev-step').addEventListener('click', function() {
        //     if (currentStep > 1) {
        //         currentStep--;
        //         showStep(currentStep);
        //     }
        // });

        // Form submissions
        document.getElementById('quick-contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We\'ll respond within 2 hours.');
            this.reset();
        });

        // document.getElementById('project-inquiry-form').addEventListener('submit', function(e) {
        //     e.preventDefault();
        //     alert('Thank you for your project inquiry! We\'ll prepare a custom proposal and send it within 24 hours.');
        //     this.reset();
        //     currentStep = 1;
        //     showStep(currentStep);
        // });

        document.getElementById('consultation-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Consultation booked successfully! You\'ll receive a calendar invite and meeting details shortly.');
            this.reset();
        });

        // FAQ toggles
        document.querySelectorAll('.faq-toggle').forEach(button => {
            button.addEventListener('click', function() {
                const target = document.getElementById(this.dataset.target);
                const icon = this.querySelector('svg');
                
                target.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });

        // Calendar functionality
        function generateCalendar() {
            const calendarGrid = document.getElementById('calendar-grid');
            const today = new Date();
            const currentMonth = today.getMonth();
            const currentYear = today.getFullYear();
            
            // Get first day of month and number of days
            const firstDay = new Date(currentYear, currentMonth, 1).getDay();
            const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
            
            let html = '';
            
            // Empty cells for days before month starts
            for (let i = 0; i < firstDay; i++) {
                html += '<div class="p-2"></div>';
            }
            
            // Days of the month
            for (let day = 1; day <= daysInMonth; day++) {
                const date = new Date(currentYear, currentMonth, day);
                const isToday = date.toDateString() === today.toDateString();
                const isPast = date < today;
                const isWeekend = date.getDay() === 0 || date.getDay() === 6;
                
                let classes = 'p-2 text-center cursor-pointer rounded-lg transition-smooth';
                
                if (isPast) {
                    classes += ' text-secondary-300 cursor-not-allowed';
                } else if (isWeekend) {
                    classes += ' text-secondary-400';
                } else {
                    classes += ' hover:bg-primary-100 text-text-primary';
                }
                
                if (isToday) {
                    classes += ' bg-primary text-white';
                }
                
                html += `<div class="${classes}" onclick="selectDate(${day})" data-date="${day}">${day}</div>`;
            }
            
            calendarGrid.innerHTML = html;
        }

        function selectDate(day) {
            // Remove previous selection
            document.querySelectorAll('[data-date]').forEach(el => {
                el.classList.remove('bg-accent', 'text-white');
            });
            
            // Add selection to clicked date
            const selectedEl = document.querySelector(`[data-date="${day}"]`);
            if (selectedEl && !selectedEl.classList.contains('text-secondary-300')) {
                selectedEl.classList.add('bg-accent', 'text-white');
                showTimeSlots(day);
            }
        }

        function showTimeSlots(day) {
            const timeSlotsContainer = document.getElementById('time-slots');
            const timeSlots = [
                '9:00 AM', '10:00 AM', '11:00 AM', '2:00 PM', '3:00 PM', '4:00 PM'
            ];
            
            let html = '<h4 class="font-semibold text-text-primary mb-3">Available Times</h4>';
            html += '<div class="grid grid-cols-2 gap-2">';
            
            timeSlots.forEach(time => {
                html += `<button class="p-2 text-sm border border-secondary-200 rounded-lg hover:bg-primary hover:text-white hover:border-primary transition-smooth time-slot" onclick="selectTimeSlot(this, '${time}')">${time}</button>`;
            });
            
            html += '</div>';
            timeSlotsContainer.innerHTML = html;
            
            // Enable booking button
            document.getElementById('book-consultation-btn').disabled = false;
            document.getElementById('book-consultation-btn').classList.remove('opacity-50', 'cursor-not-allowed');
        }

        function selectTimeSlot(button, time) {
            // Remove previous selection
            document.querySelectorAll('.time-slot').forEach(slot => {
                slot.classList.remove('bg-primary', 'text-white', 'border-primary');
                slot.classList.add('border-secondary-200');
            });
            
            // Select clicked time slot
            button.classList.add('bg-primary', 'text-white', 'border-primary');
            button.classList.remove('border-secondary-200');
        }

        // Live chat functionality
        // function openLiveChat() {
        //     document.getElementById('chat-window').classList.remove('hidden');
        //     document.getElementById('chat-toggle').classList.add('hidden');
        // }

        // function closeLiveChat() {
        //     document.getElementById('chat-window').classList.add('hidden');
        //     document.getElementById('chat-toggle').classList.remove('hidden');
        // }

        // function sendChatMessage() {
        //     const input = document.getElementById('chat-input');
        //     const message = input.value.trim();
            
        //     if (message) {
        //         const messagesContainer = document.getElementById('chat-messages');
                
        //         // Add user message
        //         messagesContainer.innerHTML += `
        //             <div class="text-right">
        //                 <div class="bg-primary text-white p-3 rounded-lg inline-block max-w-xs">
        //                     <div class="text-sm">${message}</div>
        //                 </div>
        //             </div>
        //         `;
                
        //         setTimeout(() => {
        //             messagesContainer.innerHTML += `
        //                 <div class="bg-surface p-3 rounded-lg">
        //                     <div class="text-sm">Thanks for your message! I'll connect you with a specialist right away. What's the best way to reach you?</div>
        //                 </div>
        //             `;
        //             messagesContainer.scrollTop = messagesContainer.scrollHeight;
        //         }, 1000);
                
        //         input.value = '';
        //         messagesContainer.scrollTop = messagesContainer.scrollHeight;
        //     }
        // }

        // Project brief download
        // function downloadProjectBrief() {
        //     alert('Project Brief Template downloaded! Check your downloads folder.');
        // }

        // Time zone detection
        function detectTimeZone() {
            const timeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;
            const timeZoneDisplay = document.getElementById('detected-timezone');
            
            // Simplified time zone display
            if (timeZone.includes('New_York')) {
                timeZoneDisplay.textContent = 'EST (UTC-5)';
            } else if (timeZone.includes('Los_Angeles')) {
                timeZoneDisplay.textContent = 'PST (UTC-8)';
            } else if (timeZone.includes('London')) {
                timeZoneDisplay.textContent = 'GMT (UTC+0)';
            } else if (timeZone.includes('Sydney')) {
                timeZoneDisplay.textContent = 'AEDT (UTC+11)';
            } else {
                timeZoneDisplay.textContent = timeZone;
            }
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            generateCalendar();
            detectTimeZone();
            
            // Chat input enter key
            // document.getElementById('chat-input').addEventListener('keypress', function(e) {
            //     if (e.key === 'Enter') {
            //         sendChatMessage();
            //     }
            // });
        });
    </script>
    <script>
document.getElementById('quick-contact-form').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    
    try {
        const response = await fetch('send-mail.php', {
            method: 'POST',
            body: formData
        });
        
        const result = await response.text();
        
        if (result.includes('success')) {
            document.getElementById('success-message').classList.remove('hidden');
            document.getElementById('quick-contact-form').classList.add('hidden');
        } else {
            throw new Error('Failed to send message');
        }
    } catch (error) {
        this.submit();
    }
});

function resetForm() {
    document.getElementById('success-message').classList.add('hidden');
    document.getElementById('quick-contact-form').classList.remove('hidden');
    document.getElementById('quick-contact-form').reset();
}
</script>
</body>
</html>