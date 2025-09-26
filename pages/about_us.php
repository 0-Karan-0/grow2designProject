<!DOCTYPE html>
<html lang="en">
<?php
$metaTitle = "About Us - Grow2Design | Growth Through Design Excellence";
$metaDescription = "Meet the team behind Grow2Design. Learn about our company story, values, and the experts who drive growth through design excellence for global brands.";
$metaKeywords = "";
$metaOGImage = "";
include('../include/head.php');
?>
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
                        <div class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-700 rounded-full text-sm font-medium" data-aos="zoom-in" data-aos-delay="200">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Founded in 2018 • 50+ Team Members • Global Reach
                        </div>
                        <h1 class="text-hero" data-aos="fade-right" data-aos-delay="400">
                            Where <span class="text-gradient">Strategic Creativity</span> Meets Measurable Results
                        </h1>
                        <p class="text-xl text-text-secondary leading-relaxed max-w-3xl mx-auto" data-aos="fade-left" data-aos-delay="600">
                            We're not just another digital agency. We're the bridge between ambitious brands and their digital potential, combining artistic vision with analytical precision to drive transformational growth.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="800">
                        <a href="<?php echo BASE_URL; ?>contact.php" class="btn-primary inline-flex items-center justify-center">
                            <span>Start Your Journey</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a href="#team" class="btn-secondary inline-flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <span>Meet Our Team</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Company Story -->
        <section class="section-padding">
        <div class="container-custom">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Text Content -->
                <div class="space-y-8" data-aos="fade-right" data-aos-duration="800">
                    <div class="space-y-4" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-section-title"><span class="text-gradient">Our Story</span></h2>
                        <p class="text-body">Founded in 2018 with a simple yet powerful belief: that exceptional design and strategic thinking could transform businesses in ways traditional marketing never could. What started as a small team of passionate creatives and data analysts has evolved into a global agency serving brands across 50+ countries.</p>
                        <p class="text-body">We've witnessed the digital landscape evolve dramatically, and we've evolved with it. From the early days of basic web design to today's complex omnichannel experiences, we've consistently stayed ahead of the curve, helping our clients not just adapt to change, but lead it.</p>
                    </div>

                    <div class="grid grid-cols-2 gap-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="text-center p-6 bg-surface rounded-xl" data-aos="zoom-in" data-aos-delay="200">
                            <div class="text-3xl font-bold text-primary mb-2">500+</div>
                            <div class="text-sm text-text-secondary">Projects Completed</div>
                        </div>
                        <div class="text-center p-6 bg-surface rounded-xl" data-aos="zoom-in" data-aos-delay="300">
                            <div class="text-3xl font-bold text-success mb-2">50+</div>
                            <div class="text-sm text-text-secondary">Countries Served</div>
                        </div>
                        <div class="text-center p-6 bg-surface rounded-xl" data-aos="zoom-in" data-aos-delay="400">
                            <div class="text-3xl font-bold text-accent mb-2">300%</div>
                            <div class="text-sm text-text-secondary">Avg ROI Increase</div>
                        </div>
                        <div class="text-center p-6 bg-surface rounded-xl" data-aos="zoom-in" data-aos-delay="500">
                            <div class="text-3xl font-bold text-error mb-2">98%</div>
                            <div class="text-sm text-text-secondary">Client Retention</div>
                        </div>
                    </div>
                </div>

                <!-- Image Content -->
                <div class="relative" data-aos="fade-left" data-aos-duration="700">
                    <div class="relative z-10">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3" 
                            alt="Grow2Design team collaboration" 
                            class="w-full h-96 object-cover rounded-2xl shadow-conversion" 
                            loading="lazy" 
                            onerror="this.src='https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-accent/20 rounded-full blur-1xl float-random" data-aos="fade-up" data-aos-duration="2500"></div>
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-primary/20 rounded-full blur-1xl float-random" data-aos="fade-down" data-aos-duration="2500"></div>
                </div>
            </div>
        </div>
    </section>


    <!-- Company Values -->
    <section class="section-padding bg-surface">
            <div class="container-custom">
                <div class="text-center space-y-4 mb-16" data-aos="fade-up" data-aos-duration="800">
                    <h2 class="text-section-title">Our <span class="text-gradient">Core Values</span></h2>
                    <p class="text-xl text-text-secondary max-w-3xl mx-auto">These principles guide every decision we make and every project we undertake. They're not just words on a wall—they're the foundation of how we work.</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Value 1 -->
                    <div class="card-elevated p-8 hover:scale-105 hover:shadow-conversion transition-all duration-300 cursor-pointer text-center space-y-6"
                        data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                        <div class="w-16 h-16 bg-primary-100 rounded-xl flex items-center justify-center mx-auto">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-card-title">Growth Through Excellence</h3>
                        <p class="text-body">We believe that exceptional work speaks for itself. Every project is an opportunity to exceed expectations and drive meaningful growth for our clients.</p>
                    </div>

                    <!-- Value 2 -->
                    <div class="card-elevated p-8 hover:scale-105 hover:shadow-conversion transition-all duration-300 cursor-pointer text-center space-y-6"
                        data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                        <div class="w-16 h-16 bg-accent-100 rounded-xl flex items-center justify-center mx-auto">
                            <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <h3 class="text-card-title">Data-Driven Creativity</h3>
                        <p class="text-body">Beautiful design without measurable results is just art. We combine creative vision with analytical precision to ensure every decision drives performance.</p>
                    </div>

                    <!-- Value 3 -->
                    <div class="card-elevated p-8 hover:scale-105 hover:shadow-conversion transition-all duration-300 cursor-pointer text-center space-y-6"
                        data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                        <div class="w-16 h-16 bg-success-100 rounded-xl flex items-center justify-center mx-auto">
                            <svg class="w-8 h-8 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-card-title">Partnership Mindset</h3>
                        <p class="text-body">Your success is our success. We don't just deliver projects—we build long-term partnerships that evolve and grow with your business needs.</p>
                    </div>

                    <!-- Value 4 -->
                    <div class="card-elevated p-8 hover:scale-105 hover:shadow-conversion transition-all duration-300 cursor-pointer text-center space-y-6"
                        data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                        <div class="w-16 h-16 bg-error-100 rounded-xl flex items-center justify-center mx-auto">
                            <svg class="w-8 h-8 text-error" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-card-title">Global Perspective</h3>
                        <p class="text-body">We think globally while acting locally. Our diverse team brings international insights to every project, ensuring relevance across markets.</p>
                    </div>

                    <!-- Value 5 -->
                    <div class="card-elevated p-8 hover:scale-105 hover:shadow-conversion transition-all duration-300 cursor-pointer text-center space-y-6"
                        data-aos="fade-up" data-aos-delay="500" data-aos-duration="800">
                        <div class="w-16 h-16 bg-secondary-200 rounded-xl flex items-center justify-center mx-auto">
                            <svg class="w-8 h-8 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                        <h3 class="text-card-title">Continuous Innovation</h3>
                        <p class="text-body">The digital landscape never stops evolving, and neither do we. We're constantly learning, experimenting, and pushing boundaries to stay ahead.</p>
                    </div>

                    <!-- Value 6 -->
                    <div class="card-elevated p-8 hover:scale-105 hover:shadow-conversion transition-all duration-300 cursor-pointer text-center space-y-6"
                        data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                        <div class="w-16 h-16 bg-warning-100 rounded-xl flex items-center justify-center mx-auto">
                            <svg class="w-8 h-8 text-warning" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <h3 class="text-card-title">Transparent Communication</h3>
                        <p class="text-body">No surprises, no hidden agendas. We believe in open, honest communication that builds trust and ensures everyone is aligned on goals and expectations.</p>
                    </div>
                </div>
            </div>
        </section>


    <!-- Company Timeline -->
    <section class="section-padding relative bg-surface overflow-hidden">
        <!-- Abstract Gradient Shape -->
        <div class="absolute inset-0 opacity-10" style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png');
            background-repeat: repeat;
            background-size: auto;
            width: 100%;">
        </div>
        <div class="container-custom relative z-10">
            <div class="text-center space-y-4 mb-16" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-section-title">Our <span class="text-gradient">Growth Journey</span></h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">From a small startup to a global agency, here are the key milestones that shaped our story and defined our commitment to excellence.</p>
            </div>

            <div class="relative w-full">
                <!-- Timeline Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-secondary-200"></div>

                <!-- Timeline Items -->
                <div class="space-y-16 w-full">
                    <!-- 2018 -->
                    <div class="relative flex items-center" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="800">
                        <div class="flex-1 pr-8 text-right">
                            <div class="card-elevated p-6 space-y-3 hover:scale-105 transition-all duration-300">
                                <div class="text-sm text-primary font-semibold">2018</div>
                                <h3 class="text-card-title">The Beginning</h3>
                                <p class="text-body">Founded by three passionate designers and marketers with a vision to bridge the gap between creative excellence and measurable business results.</p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-primary rounded-full border-4 border-white shadow-lg hidden sm:block"></div>
                        <div class="flex-1 hidden sm:inline pl-8"></div>
                    </div>

                    <!-- 2019 -->
                    <div class="relative flex items-center" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="800">
                        <div class="flex-1 hidden sm:inline pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-accent rounded-full border-4 border-white shadow-lg hidden sm:block"></div>
                        <div class="flex-1 pl-8">
                            <div class="card-elevated p-6 space-y-3 hover:scale-105 transition-all duration-300">
                                <div class="text-sm text-accent font-semibold">2019</div>
                                <h3 class="text-card-title">First Major Milestone</h3>
                                <p class="text-body">Reached 50 successful projects and expanded our team to 10 specialists. Launched our signature "Growth Through Design" methodology.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2020 -->
                    <div class="relative flex items-center" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="800">
                        <div class="flex-1 pr-8 text-right">
                            <div class="card-elevated p-6 space-y-3 hover:scale-105 transition-all duration-300">
                                <div class="text-sm text-success font-semibold">2020</div>
                                <h3 class="text-card-title">Global Expansion</h3>
                                <p class="text-body">Pivoted to fully remote operations and expanded internationally. Served our first clients in Europe and Asia, establishing our global presence.</p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-success rounded-full border-4 border-white shadow-lg hidden sm:block"></div>
                        <div class="flex-1 hidden sm:inline pl-8"></div>
                    </div>

                    <!-- 2021 -->
                    <div class="relative flex items-center" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="800">
                        <div class="flex-1 hidden sm:inline pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-error rounded-full border-4 border-white shadow-lg hidden sm:block"></div>
                        <div class="flex-1 pl-8">
                            <div class="card-elevated p-6 space-y-3 hover:scale-105 transition-all duration-300">
                                <div class="text-sm text-error font-semibold">2021</div>
                                <h3 class="text-card-title">Industry Recognition</h3>
                                <p class="text-body">Won our first industry awards and became certified Google and Meta Business Partners. Team grew to 25 specialists across 8 countries.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2022 -->
                    <div class="relative flex items-center" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="800">
                        <div class="flex-1 pr-8 text-right">
                            <div class="card-elevated p-6 space-y-3 hover:scale-105 transition-all duration-300">
                                <div class="text-sm text-warning font-semibold">2022</div>
                                <h3 class="text-card-title">Innovation Lab</h3>
                                <p class="text-body">Launched our Innovation Lab focusing on emerging technologies like AI-driven marketing and immersive brand experiences. Reached 300+ completed projects.</p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-warning rounded-full border-4 border-white shadow-lg hidden sm:block"></div>
                        <div class="flex-1 hidden sm:inline pl-8"></div>
                    </div>

                    <!-- 2023 -->
                    <div class="relative flex items-center" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="800">
                        <div class="flex-1 hidden sm:inline pr-8"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-secondary-600 rounded-full border-4 border-white shadow-lg hidden sm:block"></div>
                        <div class="flex-1 pl-8">
                            <div class="card-elevated p-6 space-y-3 hover:scale-105 transition-all duration-300">
                                <div class="text-sm text-secondary-600 font-semibold">2023</div>
                                <h3 class="text-card-title">Thought Leadership</h3>
                                <p class="text-body">Established our thought leadership platform with industry-leading insights. Team expanded to 40+ experts serving clients across 50+ countries.</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2024-2025 -->
                    <div class="relative flex items-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="800">
                        <div class="flex-1 pr-8 text-right">
                            <div class="card-elevated p-6 space-y-3 hover:scale-105 transition-all duration-300">
                                <div class="text-sm text-primary font-semibold">2024-2025</div>
                                <h3 class="text-card-title">Future Forward</h3>
                                <p class="text-body">Continuing to push boundaries with AI-integrated design processes and predictive marketing strategies. Now serving 500+ clients globally with a team of 50+ specialists.</p>
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-4 h-4 bg-primary rounded-full border-4 border-white shadow-lg hidden sm:block"></div>
                        <div class="flex-1 hidden sm:inline pl-8"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Leadership Team -->
    <section class="section-padding bg-surface" id="team">
        <div class="container-custom">
            <div class="text-center space-y-4 mb-16" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-section-title">Meet Our <span class="text-gradient">Leadership Team</span></h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">The visionaries and experts who guide our mission to transform businesses through strategic design and data-driven marketing excellence.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="group card-elevated p-8 text-center space-y-6 hover:shadow-conversion transition-all duration-300" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Alex Rodriguez - CEO & Founder" class="w-24 h-24 rounded-full object-cover mx-auto mb-4" loading="lazy" onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-primary rounded-full flex items-center justify-center">
                          <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm.75 4.75v4.19l3.25 1.94-.75 1.23L9.25 11V6.75h1.5z"/>
                           </svg>

                        </div>
                    </div>
                    <div class="space-y-3">
                        <h3 class="text-card-title">Alex Rodriguez</h3>
                        <div class="text-primary font-medium">CEO & Founder</div>
                        <p class="text-body">15+ years in digital marketing and brand strategy. Former VP of Marketing at Fortune 500 companies. Passionate about transforming businesses through design excellence.</p>
                        <div class="flex flex-wrap gap-2 justify-center">
                            <span class="px-3 py-1 bg-primary-100 text-primary-700 rounded-full text-sm">Strategy</span>
                            <span class="px-3 py-1 bg-accent-100 text-accent-600 rounded-full text-sm">Leadership</span>
                            <span class="px-3 py-1 bg-success-100 text-success-600 rounded-full text-sm">Growth</span>
                        </div>
                    </div>
                    <div class="flex justify-center space-x-4 opacity-0 group-hover:opacity-100 transition-opacity">
                        <a href="javascript:void(0)" class="w-8 h-8 bg-secondary-100 rounded-lg flex items-center justify-center hover:bg-primary hover:text-white transition-smooth">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                 <path d="M22.23 0H1.77C.79 0 0 .774 0 1.729v20.542C0 23.227.79 24 1.77 24h20.46C23.21 24 24 23.227 24 22.271V1.729C24 .774 23.21 0 22.23 0zM7.09 20.452H3.54V9h3.55v11.452zM5.315 7.433a2.06 2.06 0 110-4.122 2.06 2.06 0 010 4.122zm14.773 13.019h-3.545v-5.568c0-1.327-.027-3.033-1.849-3.033-1.85 0-2.133 1.445-2.133 2.938v5.663H9.368V9h3.404v1.561h.048c.474-.898 1.632-1.846 3.36-1.846 3.593 0 4.26 2.367 4.26 5.448v6.289z" />
                            </svg>
                        </a>
                        <a href="javascript:void(0)" class="w-8 h-8 bg-secondary-100 rounded-lg flex items-center justify-center hover:bg-primary hover:text-white transition-smooth">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                               <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="group card-elevated p-8 text-center space-y-6 hover:shadow-conversion transition-all duration-300" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=2961&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Sarah Chen - Creative Director" class="w-24 h-24 rounded-full object-cover mx-auto mb-4" loading="lazy" onerror="this.src='https://images.pixabay.com/photo/2016/11/21/12/42/beard-1845166_1280.jpg'; this.onerror=null;" />
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-accent rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <h3 class="text-card-title">Sarah Chen</h3>
                        <div class="text-accent font-medium">Creative Director</div>
                        <p class="text-body">Award-winning designer with 12+ years experience. Former lead designer at top agencies. Specializes in brand identity and user experience design that drives conversions.</p>
                        <div class="flex flex-wrap gap-2 justify-center">
                            <span class="px-3 py-1 bg-accent-100 text-accent-600 rounded-full text-sm">Design</span>
                            <span class="px-3 py-1 bg-primary-100 text-primary-700 rounded-full text-sm">Branding</span>
                            <span class="px-3 py-1 bg-error-100 text-error-600 rounded-full text-sm">UX/UI</span>
                        </div>
                    </div>
                    <div class="flex justify-center space-x-4 opacity-0 group-hover:opacity-100 transition-opacity">
                        <a href="javascript:void(0)" class="w-8 h-8 bg-secondary-100 rounded-lg flex items-center justify-center hover:bg-accent hover:text-white transition-smooth">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                 <path d="M22.23 0H1.77C.79 0 0 .774 0 1.729v20.542C0 23.227.79 24 1.77 24h20.46C23.21 24 24 23.227 24 22.271V1.729C24 .774 23.21 0 22.23 0zM7.09 20.452H3.54V9h3.55v11.452zM5.315 7.433a2.06 2.06 0 110-4.122 2.06 2.06 0 010 4.122zm14.773 13.019h-3.545v-5.568c0-1.327-.027-3.033-1.849-3.033-1.85 0-2.133 1.445-2.133 2.938v5.663H9.368V9h3.404v1.561h.048c.474-.898 1.632-1.846 3.36-1.846 3.593 0 4.26 2.367 4.26 5.448v6.289z" />
                            </svg>
                        </a>
                        <a href="javascript:void(0)" class="w-8 h-8 bg-secondary-100 rounded-lg flex items-center justify-center hover:bg-accent hover:text-white transition-smooth">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="group card-elevated p-8 text-center space-y-6 hover:shadow-conversion transition-all duration-300" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Marcus Thompson - Head of Strategy" class="w-24 h-24 rounded-full object-cover mx-auto mb-4" loading="lazy" onerror="this.src='https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-success rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <h3 class="text-card-title">Marcus Thompson</h3>
                        <div class="text-success font-medium">Head of Strategy</div>
                        <p class="text-body">Data analytics expert with 10+ years in performance marketing. Former consultant at McKinsey. Specializes in ROI optimization and growth strategy development.</p>
                        <div class="flex flex-wrap gap-2 justify-center">
                            <span class="px-3 py-1 bg-success-100 text-success-600 rounded-full text-sm">Analytics</span>
                            <span class="px-3 py-1 bg-primary-100 text-primary-700 rounded-full text-sm">Strategy</span>
                            <span class="px-3 py-1 bg-warning-100 text-warning rounded-full text-sm">ROI</span>
                        </div>
                    </div>
                    <div class="flex justify-center space-x-4 opacity-0 group-hover:opacity-100 transition-opacity">
                        <a href="javascript:void(0)" class="w-8 h-8 bg-secondary-100 rounded-lg flex items-center justify-center hover:bg-success hover:text-white transition-smooth">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.23 0H1.77C.79 0 0 .774 0 1.729v20.542C0 23.227.79 24 1.77 24h20.46C23.21 24 24 23.227 24 22.271V1.729C24 .774 23.21 0 22.23 0zM7.09 20.452H3.54V9h3.55v11.452zM5.315 7.433a2.06 2.06 0 110-4.122 2.06 2.06 0 010 4.122zm14.773 13.019h-3.545v-5.568c0-1.327-.027-3.033-1.849-3.033-1.85 0-2.133 1.445-2.133 2.938v5.663H9.368V9h3.404v1.561h.048c.474-.898 1.632-1.846 3.36-1.846 3.593 0 4.26 2.367 4.26 5.448v6.289z" />
                            </svg>
                        </a>
                        <a href="javascript:void(0)" class="w-8 h-8 bg-secondary-100 rounded-lg flex items-center justify-center hover:bg-success hover:text-white transition-smooth">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <!-- <div class="group card-elevated p-8 text-center space-y-6 hover:shadow-conversion transition-all duration-300" data-aos="fade-up" data-aos-delay="500" data-aos-duration="800">
                    <div class="relative">
                        <img src="https://images.pexels.com/photos/3785079/pexels-photo-3785079.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Emma Wilson - Head of Client Success" class="w-24 h-24 rounded-full object-cover mx-auto mb-4" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-error rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <h3 class="text-card-title">Emma Wilson</h3>
                        <div class="text-error font-medium">Head of Client Success</div>
                        <p class="text-body">Client relationship expert with 8+ years in account management. Former director at leading agencies. Passionate about building long-term partnerships and ensuring client satisfaction.</p>
                        <div class="flex flex-wrap gap-2 justify-center">
                            <span class="px-3 py-1 bg-error-100 text-error-600 rounded-full text-sm">Client Success</span>
                            <span class="px-3 py-1 bg-accent-100 text-accent-600 rounded-full text-sm">Relationships</span>
                            <span class="px-3 py-1 bg-success-100 text-success-600 rounded-full text-sm">Growth</span>
                        </div>
                    </div>
                    <div class="flex justify-center space-x-4 opacity-0 group-hover:opacity-100 transition-opacity">
                        <a href="javascript:void(0)" class="w-8 h-8 bg-secondary-100 rounded-lg flex items-center justify-center hover:bg-error hover:text-white transition-smooth">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.23 0H1.77C.79 0 0 .774 0 1.729v20.542C0 23.227.79 24 1.77 24h20.46C23.21 24 24 23.227 24 22.271V1.729C24 .774 23.21 0 22.23 0zM7.09 20.452H3.54V9h3.55v11.452zM5.315 7.433a2.06 2.06 0 110-4.122 2.06 2.06 0 010 4.122zm14.773 13.019h-3.545v-5.568c0-1.327-.027-3.033-1.849-3.033-1.85 0-2.133 1.445-2.133 2.938v5.663H9.368V9h3.404v1.561h.048c.474-.898 1.632-1.846 3.36-1.846 3.593 0 4.26 2.367 4.26 5.448v6.289z" />
                            </svg>
                        </a>
                        <a href="javascript:void(0)" class="w-8 h-8 bg-secondary-100 rounded-lg flex items-center justify-center hover:bg-error hover:text-white transition-smooth">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                    </div>
                </div> -->

                <!-- Team Member 5 -->
                <!-- <div class="group card-elevated p-8 text-center space-y-6 hover:shadow-conversion transition-all duration-300" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                    <div class="relative">
                        <img src="https://images.pixabay.com/photo/2016/11/29/09/38/adult-1868750_1280.jpg" alt="David Kim - Technical Director" class="w-24 h-24 rounded-full object-cover mx-auto mb-4" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-secondary-600 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <h3 class="text-card-title">David Kim</h3>
                        <div class="text-secondary-600 font-medium">Technical Director</div>
                        <p class="text-body">Full-stack developer with 11+ years experience. Former tech lead at startups and enterprises. Specializes in performance optimization and scalable web solutions.</p>
                        <div class="flex flex-wrap gap-2 justify-center">
                            <span class="px-3 py-1 bg-secondary-200 text-secondary-700 rounded-full text-sm">Development</span>
                            <span class="px-3 py-1 bg-primary-100 text-primary-700 rounded-full text-sm">Performance</span>
                            <span class="px-3 py-1 bg-accent-100 text-accent-600 rounded-full text-sm">Innovation</span>
                        </div>
                    </div>
                    <div class="flex justify-center space-x-4 opacity-0 group-hover:opacity-100 transition-opacity">
                        <a href="javascript:void(0)" class="w-8 h-8 bg-secondary-100 rounded-lg flex items-center justify-center hover:bg-secondary-600 hover:text-white transition-smooth">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.23 0H1.77C.79 0 0 .774 0 1.729v20.542C0 23.227.79 24 1.77 24h20.46C23.21 24 24 23.227 24 22.271V1.729C24 .774 23.21 0 22.23 0zM7.09 20.452H3.54V9h3.55v11.452zM5.315 7.433a2.06 2.06 0 110-4.122 2.06 2.06 0 010 4.122zm14.773 13.019h-3.545v-5.568c0-1.327-.027-3.033-1.849-3.033-1.85 0-2.133 1.445-2.133 2.938v5.663H9.368V9h3.404v1.561h.048c.474-.898 1.632-1.846 3.36-1.846 3.593 0 4.26 2.367 4.26 5.448v6.289z" />
                            </svg>
                        </a>
                        <a href="javascript:void(0)" class="w-8 h-8 bg-secondary-100 rounded-lg flex items-center justify-center hover:bg-secondary-600 hover:text-white transition-smooth">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div> -->

                <!-- Team Member 6 -->
                <!-- <div class="group card-elevated p-8 text-center space-y-6 hover:shadow-conversion transition-all duration-300" data-aos="fade-up" data-aos-delay="700" data-aos-duration="800">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=2961&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Lisa Martinez - Global Operations" class="w-24 h-24 rounded-full object-cover mx-auto mb-4" loading="lazy" onerror="this.src='https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-warning rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <h3 class="text-card-title">Lisa Martinez</h3>
                        <div class="text-warning font-medium">Global Operations</div>
                        <p class="text-body">Operations expert with 9+ years in international business. Former operations manager at global consulting firms. Ensures seamless project delivery across all time zones.</p>
                        <div class="flex flex-wrap gap-2 justify-center">
                            <span class="px-3 py-1 bg-warning-100 text-warning rounded-full text-sm">Operations</span>
                            <span class="px-3 py-1 bg-primary-100 text-primary-700 rounded-full text-sm">Global</span>
                            <span class="px-3 py-1 bg-success-100 text-success-600 rounded-full text-sm">Efficiency</span>
                        </div>
                    </div>
                    <div class="flex justify-center space-x-4 opacity-0 group-hover:opacity-100 transition-opacity">
                        <a href="javascript:void(0)" class="w-8 h-8 bg-secondary-100 rounded-lg flex items-center justify-center hover:bg-warning hover:text-white transition-smooth">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.23 0H1.77C.79 0 0 .774 0 1.729v20.542C0 23.227.79 24 1.77 24h20.46C23.21 24 24 23.227 24 22.271V1.729C24 .774 23.21 0 22.23 0zM7.09 20.452H3.54V9h3.55v11.452zM5.315 7.433a2.06 2.06 0 110-4.122 2.06 2.06 0 010 4.122zm14.773 13.019h-3.545v-5.568c0-1.327-.027-3.033-1.849-3.033-1.85 0-2.133 1.445-2.133 2.938v5.663H9.368V9h3.404v1.561h.048c.474-.898 1.632-1.846 3.36-1.846 3.593 0 4.26 2.367 4.26 5.448v6.289z" />
                            </svg>
                        </a>
                        <a href="javascript:void(0)" class="w-8 h-8 bg-secondary-100 rounded-lg flex items-center justify-center hover:bg-warning hover:text-white transition-smooth">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                 <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                    </div>
                </div> -->
            </div>

            <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="500">
                <a href="<?php echo BASE_URL; ?>contact.php" class="btn-primary mr-4">Join Our Team</a>
                <a href="<?php echo BASE_URL; ?>contact.php" class="btn-secondary">Work With Us</a>
            </div>
        </div>
    </section>
    
    <!-- Awards & Recognition -->
    <section class="section-padding">
        <div class="container-custom">
            <div class="text-center space-y-4 mb-16" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-section-title"><span class="text-gradient">Awards & Recognition</span></h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">Our commitment to excellence has been recognized by industry leaders and prestigious organizations worldwide.</p>
            </div>

           <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Award 1 -->
                <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
                    <div class="w-20 h-20 bg-primary-100 rounded-xl flex items-center justify-center mx-auto animate-float" style="animation-delay: 0s;">
                        <svg class="w-10 h-10 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-text-primary">Best Digital Agency</h3>
                        <p class="text-sm text-text-secondary">Marketing Excellence Awards 2024</p>
                    </div>
                </div>

                <!-- Award 2 -->
                <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                    <div class="w-20 h-20 bg-accent-100 rounded-xl flex items-center justify-center mx-auto animate-float" style="animation-delay: 1s;">
                        <svg class="w-10 h-10 text-accent" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-text-primary">Google Premier Partner</h3>
                        <p class="text-sm text-text-secondary">Certified Since 2021</p>
                    </div>
                </div>

                <!-- Award 3 -->
                <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                    <div class="w-20 h-20 bg-success-100 rounded-xl flex items-center justify-center mx-auto animate-float" style="animation-delay: 2s;">
                        <svg class="w-10 h-10 text-success" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm.75 4.75v4.19l3.25 1.94-.75 1.23L9.25 11V6.75h1.5z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-text-primary">Meta Business Partner</h3>
                        <p class="text-sm text-text-secondary">Verified Partner 2022</p>
                    </div>
                </div>

                <!-- Award 4 -->
                <div class="text-center space-y-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                    <div class="w-20 h-20 bg-error-100 rounded-xl flex items-center justify-center mx-auto animate-float" style="animation-delay: 3s;">
                        <svg class="w-10 h-10 text-error" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-text-primary">Top Workplace</h3>
                        <p class="text-sm text-text-secondary">Remote Work Excellence 2023</p>
                    </div>
                </div>
            </div>


            <!-- Certifications -->
            <!-- <div class="mt-16 pt-16 border-t border-secondary-200">
                <div class="text-center space-y-4 mb-12">
                    <h3 class="text-2xl font-semibold text-text-primary">Team Certifications</h3>
                    <p class="text-text-secondary">Our team holds industry-leading certifications to ensure we deliver cutting-edge solutions.</p>
                </div>

                <div class="flex flex-wrap justify-center items-center gap-8 opacity-60">
                    <div class="text-center">
                        <div class="text-sm font-medium text-text-primary">Google Ads</div>
                        <div class="text-xs text-text-secondary">15 Certified Specialists</div>
                    </div>
                    <div class="text-center">
                        <div class="text-sm font-medium text-text-primary">Google Analytics</div>
                        <div class="text-xs text-text-secondary">12 Certified Analysts</div>
                    </div>
                    <div class="text-center">
                        <div class="text-sm font-medium text-text-primary">Facebook Blueprint</div>
                        <div class="text-xs text-text-secondary">10 Certified Marketers</div>
                    </div>
                    <div class="text-center">
                        <div class="text-sm font-medium text-text-primary">HubSpot</div>
                        <div class="text-xs text-text-secondary">8 Certified Specialists</div>
                    </div>
                    <div class="text-center">
                        <div class="text-sm font-medium text-text-primary">Adobe Creative</div>
                        <div class="text-xs text-text-secondary">6 Certified Designers</div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Culture & Office -->
    <section class="section-padding bg-surface">
    <div class="container-custom">
        <div class="text-center space-y-4 mb-16" data-aos="fade-up" data-aos-duration="800">
            <h2 class="text-section-title">Our <span class="text-gradient">Culture</span></h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto">
                We believe that great work comes from great people working in an environment that inspires creativity, collaboration, and continuous growth.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Culture Features -->
            <div class="space-y-8">
                <div class="space-y-6">
                    <!-- Feature 1 -->
                    <div class="flex items-start space-x-4" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-card-title mb-2">Global Remote-First</h3>
                            <p class="text-body">We've been remote-first since 2020, with team members across 15+ countries. This diversity brings unique perspectives to every project.</p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex items-start space-x-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                        <div class="w-12 h-12 bg-accent-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-card-title mb-2">Continuous Learning</h3>
                            <p class="text-body">$2,000 annual learning budget for each team member, plus dedicated time for skill development and industry conference attendance.</p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="flex items-start space-x-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                        <div class="w-12 h-12 bg-success-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-card-title mb-2">Work-Life Balance</h3>
                            <p class="text-body">Flexible schedules, unlimited PTO policy, and mental health support. We believe that rested minds produce the best creative work.</p>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="flex items-start space-x-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                        <div class="w-12 h-12 bg-error-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-error" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-card-title mb-2">Collaborative Innovation</h3>
                            <p class="text-body">Monthly innovation sessions, cross-team collaboration projects, and an open-door policy for new ideas and process improvements.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Culture Images -->
            <div class="grid grid-cols-2 gap-4">
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3" 
                     alt="Team collaboration" 
                     class="w-full h-48 object-cover rounded-xl transform hover:scale-105 transition-transform duration-500" 
                     data-aos="fade-up" data-aos-delay="0" data-aos-duration="800" 
                     loading="lazy" 
                     onerror="this.src='https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />

                <img src="https://images.pexels.com/photos/3184360/pexels-photo-3184360.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" 
                     alt="Creative workspace" 
                     class="w-full h-48 object-cover rounded-xl transform hover:scale-105 transition-transform duration-500" 
                     data-aos="fade-up" data-aos-delay="200" data-aos-duration="800" 
                     loading="lazy" 
                     onerror="this.src='https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />

                <img src="https://images.pixabay.com/photo/2015/07/17/22/43/student-849825_1280.jpg" 
                     alt="Team meeting" 
                     class="w-full h-48 object-cover rounded-xl transform hover:scale-105 transition-transform duration-500" 
                     data-aos="fade-up" data-aos-delay="400" data-aos-duration="800" 
                     loading="lazy" 
                     onerror="this.src='https://images.unsplash.com/photo-1556761175-b413da4baf72?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;" />

                <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3" 
                     alt="Innovation session" 
                     class="w-full h-48 object-cover rounded-xl transform hover:scale-105 transition-transform duration-500" 
                     data-aos="fade-up" data-aos-delay="600" data-aos-duration="800" 
                     loading="lazy" 
                     onerror="this.src='https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
            </div>
        </div>
    </div>
</section>


    <!-- Call to Action -->
   <section class="section-padding section-bg-fixed bg-primary text-white relative overflow-hidden">
    <!-- Gradient overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-primary to-primary-700 opacity-90"></div>

    <!-- Decorative blur shapes -->
    <!-- <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl transform translate-x-32 -translate-y-32 animate-random"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-accent/20 rounded-full blur-2xl transform -translate-x-16 translate-y-16 animate-random"></div> -->

    <div class="container-custom relative z-10">
        <div class="max-w-4xl mx-auto text-center space-y-8">
            <!-- Heading & Subtitle -->
            <div class="space-y-4" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-3xl lg:text-4xl font-bold">Ready to Transform Your Business?</h2>
                <p class="text-xl text-primary-100 max-w-2xl mx-auto">Join the 500+ brands that trust Grow2Design to drive their digital transformation. Let's create something extraordinary together.</p>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                <a href="<?php echo BASE_URL; ?>pages/contact_us.php" class="btn-accent inline-flex items-center justify-center hover:scale-105 transition-transform duration-300">
                    <span>Start Your Project</span>
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="<?php echo BASE_URL; ?>pages/portfolio.php" class="btn-secondary bg-white/20 text-white border-white/30 hover:bg-white/30 inline-flex items-center justify-center hover:scale-105 transition-transform duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                    <span>View Our Work</span>
                </a>
            </div>

            <!-- Key Stats -->
            <div class="flex flex-wrap justify-center items-center gap-8 pt-8 border-t border-primary-400" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                <div class="text-center">
                    <div class="text-2xl font-bold">Free</div>
                    <div class="text-sm text-primary-200">Strategy Consultation</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold">24h</div>
                    <div class="text-sm text-primary-200">Response Time</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold">Global</div>
                    <div class="text-sm text-primary-200">Support Team</div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <?php include_once('../include/footer.php')?>
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Team member card interactions
        document.querySelectorAll('.group').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-4px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Timeline animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe timeline items
        document.querySelectorAll('.card-elevated').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });

        // Add loading animation for images
        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('load', function() {
                this.style.opacity = '1';
            });
            
            img.style.opacity = '0';
            img.style.transition = 'opacity 0.3s ease';
        });
    </script>
</body>
</html>