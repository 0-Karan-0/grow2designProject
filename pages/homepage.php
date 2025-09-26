<!DOCTYPE html>
<html lang="en">
<?php
$metaTitle = "Grow2Design - Growth Through Design Excellence";
$metaDescription = "Transform your business with data-driven digital marketing strategies and exceptional design. Trusted by global brands for measurable growth.";
$metaKeywords = "digital marketing agency, design agency, business growth, marketing strategies, UI/UX design, branding";
$metaOGImage = "../public/homepage-og-image.png";
$metaCanonical = "https://www.grow2design.com/";
include('../include/head.php');
?>
<body class="bg-background">
<?php include_once('../include/header.php')?>
    <!-- Hero Section -->
    <section class="pt-24 pb-16 lg:pt-32 lg:pb-24 bg-gradient-to-br from-primary-50 to-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/5 to-accent/5"></div>
        <div class="container-custom relative">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="space-y-8" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                    <div class="space-y-4">
                        <div
                            class="inline-flex items-center px-4 py-2 bg-primary-100 text-primary-700 rounded-full text-sm font-medium">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" data-aos="zoom-in"
                                data-aos-delay="200">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            Trusted by 500+ Global Brands
                        </div>
                        <h1 class="text-hero" data-aos="fade-right" data-aos-delay="300">
                            <span class="text-gradient">Growth Through</span><br />
                            Design Excellence
                        </h1>
                        <p class="text-xl text-text-secondary leading-relaxed" data-aos="fade-up" data-aos-delay="400">
                            Transform your business with data-driven digital marketing strategies that combine artistic
                            vision with analytical precision. Your success is our success.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="<?php echo BASE_URL; ?>pages/contact_us.php" class="btn-primary inline-flex items-center justify-center">
                            <span>Start Your Growth Journey</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                        <a href="<?php echo BASE_URL; ?>pages/portfolio.php" class="btn-secondary inline-flex items-center justify-center">
                            <span>View Our Work</span>
                        </a>
                    </div>

                    <!-- Success Metrics -->
                    <div class="grid grid-cols-3 gap-6 pt-8 border-t border-secondary-200">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-primary" id="metric-1">500+</div>
                            <div class="text-sm text-text-secondary">Projects Delivered</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-success" id="metric-2">300%</div>
                            <div class="text-sm text-text-secondary">Avg ROI Increase</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-accent" id="metric-3">50+</div>
                            <div class="text-sm text-text-secondary">Countries Served</div>
                        </div>
                    </div>
                </div>

                <!-- Right Carousel -->
                <div class="relative" data-aos="fade-left" data-aos-delay="500">
                    <div class="swiper mySwiper rounded-2xl overflow-hidden shadow-conversion">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide relative z-10">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3"
                                    alt="Team 1" class="w-full h-96 object-cover" />
                            </div>
                            <div class="swiper-slide relative z-10">
                                <img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                    alt="Team 2" class="w-full h-96 object-cover" />
                            </div>
                        </div>
                        <!-- Navigation -->
                        <!-- <div class="swiper-button-next hero-next"></div>
                    <div class="swiper-button-prev hero-prev"></div>
                    <div class="swiper-pagination hero-pagination"></div> -->
                    </div>

                    <!-- Decorative circles -->
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-accent/20 rounded-full blur-1xl float-random"></div>
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-primary/20 rounded-full blur-1xl float-random delay-1"></div>

                </div>
            </div>
        </div>
    </section>


    <!-- Interactive Service Preview -->
    <section class="section-padding bg-surface">
        <div class="container-custom">
            <div class="text-center space-y-4 mb-16" data-aos="fade-up" data-aos-duration="800">
                <!-- <h2 class="text-section-title">Comprehensive Digital Solutions</h2> -->
                <h2 class="text-section-title">
                    Comprehensive <span class="text-gradient">Growth Solutions</span>
                </h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">From brand identity to performance marketing,
                    we provide end-to-end digital transformation services that drive measurable growth.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Brand Design Service -->
                <div class="group card-elevated hover:scale-105 p-8 hover:shadow-conversion transition-all duration-300 cursor-pointer"
                    onclick="window.location.href='<?php echo BASE_URL; ?>pages/brand-design.php'" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="800">
                    <div class="flex items-center">
                        <div
                            class="w-16 h-16 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-200 transition-smooth mr-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z" />
                            </svg>
                        </div>
                        <h3 class="text-card-title mb-3">Brand Design</h3>
                    </div>
                    <p class="text-body mb-4">Create compelling visual identities that resonate with your target
                        audience and differentiate your brand in the marketplace.</p>
                    <div
                        class="flex items-center text-primary font-medium group-hover:text-primary-700 transition-smooth group-hover:translate-x-2">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </div>

                <!-- Social Media Service -->
                <div class="group card-elevated hover:scale-105 p-8 hover:shadow-conversion transition-all duration-300 cursor-pointer"
                    onclick="window.location.href='<?php echo BASE_URL; ?>pages/social-media-marketing.php'" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="800">
                    <div class="flex items-center">
                        <div
                            class="w-16 h-16 bg-accent-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-accent-200 transition-smooth mr-4">
                            <svg class="w-8 h-8 text-warning" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                            </svg>
                        </div>
                        <h3 class="text-card-title mb-3">Social Media Marketing</h3>
                    </div>
                    <p class="text-body mb-4">Build engaged communities and drive conversions through strategic content
                        creation and community management.</p>
                    <div
                        class="flex items-center text-warning font-medium group-hover:text-accent-600 transition-smooth group-hover:translate-x-2">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </div>

                <!-- SEO Service -->
                <div class="group card-elevated hover:scale-105 p-8 hover:shadow-conversion transition-all duration-300 cursor-pointer"
                    onclick="window.location.href='<?php echo BASE_URL; ?>pages/search-engine-optimization.php'" data-aos="fade-up" data-aos-delay="300"
                    data-aos-duration="800">
                    <div class="flex items-center">
                        <div
                            class="w-16 h-16 bg-success-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-success-200 transition-smooth mr-4">
                            <svg class="w-8 h-8 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <h3 class="text-card-title mb-3">Search Engine Optimization</h3>
                    </div>
                    <p class="text-body mb-4">Increase organic visibility and drive qualified traffic through
                        comprehensive SEO strategies and technical optimization.</p>
                    <div
                        class="flex items-center text-success font-medium group-hover:text-success-600 transition-smooth group-hover:translate-x-2">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </div>

                <!-- Paid Ads Service -->
                <div class="group card-elevated hover:scale-105 p-8 hover:shadow-conversion transition-all duration-300 cursor-pointer"
                    onclick="window.location.href='<?php echo BASE_URL; ?>pages/paid-advertising.php'" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="800">
                    <div class="flex items-center">
                        <div
                            class="w-16 h-16 bg-error-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-error-200 transition-smooth mr-4">
                            <svg class="w-8 h-8 text-error" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <h3 class="text-card-title mb-3">Paid Advertising</h3>
                    </div>
                    <p class="text-body mb-4">Maximize ROI through data-driven paid advertising campaigns across Google,
                        Facebook, and other premium platforms.</p>
                    <div
                        class="flex items-center text-error font-medium group-hover:text-error-600 transition-smooth group-hover:translate-x-2">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </div>

                <!-- Web Development Service -->
                <div class="group card-elevated hover:scale-105 p-8 hover:shadow-conversion transition-all duration-300 cursor-pointer"
                    onclick="window.location.href='<?php echo BASE_URL; ?>pages/web-development.php'" data-aos="fade-up" data-aos-delay="500"
                    data-aos-duration="800">
                    <div class="flex items-center">
                        <div
                            class="w-16 h-16 bg-secondary-200 rounded-xl flex items-center justify-center mb-6 group-hover:bg-secondary-300 transition-smooth mr-4">
                            <svg class="w-8 h-8 text-secondary-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <h3 class="text-card-title mb-3">Web Development</h3>
                    </div>
                    <p class="text-body mb-4">Build high-performance, conversion-optimized websites that provide
                        exceptional user experiences across all devices.</p>
                    <div
                        class="flex items-center text-secondary-600 font-medium group-hover:text-secondary-700 transition-smooth group-hover:translate-x-2">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </div>

                <!-- Video Production Service -->
                <div class="group card-elevated hover:scale-105 p-8 hover:shadow-conversion transition-all duration-300 cursor-pointer"
                    onclick="window.location.href='<?php echo BASE_URL; ?>pages/video-production.php'" data-aos="fade-up" data-aos-delay="600"
                    data-aos-duration="800">
                    <div class="flex items-center">
                        <div
                            class="w-16 h-16 bg-warning-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-warning-200 transition-smooth mr-4">
                            <svg class="w-8 h-8 text-warning" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-card-title mb-3">Video Production</h3>
                    </div>
                    <p class="text-body mb-4">Create compelling video content that tells your brand story and drives
                        engagement across all digital platforms.</p>
                    <div
                        class="flex items-center text-warning font-medium group-hover:text-warning-600 transition-smooth group-hover:translate-x-2">
                        <span>Learn More</span>
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="<?php echo BASE_URL; ?>pages/services.php" class="btn-primary">View All Services</a>
            </div>
        </div>
    </section>

    <section class="section-padding relative bg-surface">
        <!-- Abstract Gradient Shape -->
        <div class="absolute inset-0 opacity-10" style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png');
               background-repeat: repeat;
               background-size: auto;
               width: 100%;">
        </div>

        <div class="container-custom relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">
                    Our <span class="text-gradient">Portfolio</span>
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    Explore how <strong>Grow2Design</strong> has helped brands achieve measurable success with
                    innovative digital marketing strategies, creative campaigns, and data-driven growth solutions.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Portfolio Project -->
                <div class="relative" data-aos="fade-right" data-aos-delay="100">
                    <div class="relative bg-white rounded-2xl shadow-interactive overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=2926&auto=format&fit=crop&ixlib=rb-4.0.3"
                            alt="Digital marketing campaign project preview" class="w-full h-64 object-cover"
                            loading="lazy"
                            onerror="this.src='https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=2926&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;">
                        <div class="absolute inset-0 bg-black/20 flex items-center justify-center">
                            <button
                                class="w-16 h-16 bg-white/90 rounded-full flex items-center justify-center hover:bg-white transition-colors">
                                <svg class="w-6 h-6 text-primary ml-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-6 p-6 bg-white rounded-lg shadow-subtle" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center mb-4">
                            <img src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                alt="TechFlow Solutions Project" class="w-12 h-12 rounded-full object-cover mr-4"
                                loading="lazy"
                                onerror="this.src='https://images.unsplash.com/photo-1494790108755-2616b612b786?q=80&w=2787&auto=format&fit=crop&ixlib=rb-4.0.3'; this.onerror=null;">
                            <div>
                                <h4 class="font-semibold">TechFlow Solutions</h4>
                                <p class="text-sm text-secondary-600">Digital Marketing Campaign</p>
                            </div>
                        </div>
                        <p class="text-secondary-600 italic">"Our SEO and PPC strategies boosted their qualified leads
                            by 400% within 6 months and elevated their online brand presence."</p>
                    </div>
                </div>

                <!-- Project Highlights -->
                <div class="space-y-8">
                    <div class="card" data-aos="fade-up" data-aos-delay="100">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-lg font-semibold">Lead Generation</h4>
                            <span class="text-2xl font-bold text-accent">+400%</span>
                        </div>
                        <div class="w-full bg-secondary-200 rounded-full h-2">
                            <div class="bg-accent h-2 rounded-full" style="width: 80%"></div>
                        </div>
                        <p class="text-sm text-secondary-600 mt-2">Achieved through SEO + PPC integration</p>
                    </div>

                    <div class="card" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-lg font-semibold">Revenue Growth</h4>
                            <span class="text-2xl font-bold text-primary">+250%</span>
                        </div>
                        <div class="w-full bg-secondary-200 rounded-full h-2">
                            <div class="bg-primary h-2 rounded-full" style="width: 75%"></div>
                        </div>
                        <p class="text-sm text-secondary-600 mt-2">Boosted with conversion-focused marketing</p>
                    </div>

                    <div class="card" data-aos="fade-up" data-aos-delay="300">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="text-lg font-semibold">Cost Per Acquisition</h4>
                            <span class="text-2xl font-bold text-accent">-60%</span>
                        </div>
                        <div class="w-full bg-secondary-200 rounded-full h-2">
                            <div class="bg-accent h-2 rounded-full" style="width: 60%"></div>
                        </div>
                        <p class="text-sm text-secondary-600 mt-2">Reduced with precise campaign optimization</p>
                    </div>

                    <a href="<?php echo BASE_URL; ?>pages/about_us.php" class="btn-primary w-full text-center block" data-aos="fade-up"
                        data-aos-delay="400">
                        Read Full About
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Consultation Booking Widget -->
    <section class="section-padding section-bg-fixed text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primary to-primary-700"></div>
        <div class="container-custom relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <!-- Info Section -->
                <div class="space-y-6" data-aos="fade-right">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-4">
                        Ready to Accelerate Your Growth?
                    </h2>
                    <p class="text-xl text-primary-100">
                        Book a free strategic consultation and discover how we can transform your digital marketing
                        results in the next 90 days.
                    </p>

                    <div class="space-y-2">
                        <div class="flex items-center" data-aos="fade-right" data-aos-delay="100">
                            <svg class="w-5 h-5 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Free 60-minute consultation</span>
                        </div>
                        <div class="flex items-center" data-aos="fade-right" data-aos-delay="200">
                            <svg class="w-5 h-5 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Custom growth strategy roadmap</span>
                        </div>
                        <div class="flex items-center" data-aos="fade-right" data-aos-delay="300">
                            <svg class="w-5 h-5 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>No obligation, actionable insights</span>
                        </div>
                    </div>
                </div>

                <!-- Booking Form -->
                <div class="bg-white rounded-2xl p-8 shadow-interactive" data-aos="fade-left" data-aos-delay="100">
                    <h3 class="text-2xl font-bold text-text-primary mb-6" data-aos="fade-up" data-aos-delay="200">Book
                        Your Free Consultation</h3>
                    <form class="space-y-4" action="javascript:void(0)" method="get" data-aos="fade-up" data-aos-delay="300">
                        <div class="grid md:grid-cols-2 gap-4">
                            <input type="text" placeholder="First Name" class="form-input text-text-primary" required />
                            <input type="text" placeholder="Last Name" class="form-input text-text-primary" required />
                        </div>
                        <input type="email" placeholder="Business Email" class="form-input text-text-primary" required />
                        <input type="tel" placeholder="Phone Number" class="form-input text-text-primary" required />
                        <input type="text" placeholder="Company Name" class="form-input text-text-primary" required />
                        <select class="form-input text-text-primary" required>
                            <option value>Select Your Primary Goal</option>
                            <option value="increase-leads">Increase Lead Generation</option>
                            <option value="improve-roi">Improve Marketing ROI</option>
                            <option value="expand-reach">Expand Market Reach</option>
                            <option value="brand-awareness">Build Brand Awareness</option>
                            <option value="other">Other</option>
                        </select>
                        <textarea placeholder="Tell us about your current challenges..." rows="3"
                            class="form-input text-text-primary"></textarea>
                        <button type="submit" class="btn-primary w-full flex items-center justify-center" >
                            Schedule My Free Consultation
                            <svg class="w-5 h-5 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </button>
                    </form>
                    <p class="text-sm text-secondary-600 mt-4 text-center">
                        We'll respond within 2 hours during business hours
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Recent Work Showcase -->
    <section class="section-padding bg-gradient-to-r from-primary/5 to-accent/5">
        <div class="container-custom">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-12" data-aos="fade-up">
                <div class="space-y-4 mb-8 lg:mb-0">
                    <h2 class="text-section-title">
                        Recent <span class="text-gradient">Success Stories</span>
                    </h2>
                    <p class="text-xl text-text-secondary max-w-2xl">
                        Explore our latest projects and see how we've helped businesses achieve remarkable growth
                        through strategic design and marketing.
                    </p>
                </div>
                <!-- <div class="flex space-x-4" data-aos="fade-up" data-aos-delay="100">
                    <button class="px-4 py-2 bg-primary text-white rounded-lg font-medium">All</button>
                    <button
                        class="px-4 py-2 bg-secondary-100 text-secondary-600 rounded-lg font-medium hover:bg-secondary-200 transition-smooth">Branding</button>
                    <button
                        class="px-4 py-2 bg-secondary-100 text-secondary-600 rounded-lg font-medium hover:bg-secondary-200 transition-smooth">Digital</button>
                    <button class="px-4 py-2 bg-secondary-100 text-secondary-600 rounded-lg font-medium hover:bg-secondary-200 transition-smooth">E-commerce</button>
                </div> -->
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="group cursor-pointer" onclick="window.location.href='javascript:void(0)'" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="relative overflow-hidden rounded-xl mb-4">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426&auto=format&fit=crop&ixlib=rb-4.0.3"
                            alt="E-commerce platform redesign"
                            class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300"
                            loading="lazy"
                            onerror="this.src='https://images.pexels.com/photos/265087/pexels-photo-265087.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="text-sm font-medium">View Case Study</div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="text-sm text-accent font-medium">E-commerce • 6 months</div>
                        <h3 class="text-card-title group-hover:text-primary transition-smooth">TechFlow E-commerce
                            Transformation</h3>
                        <p class="text-body">Complete digital transformation resulting in 340% increase in online
                            revenue and 85% improvement in user experience metrics.</p>
                        <div class="flex items-center space-x-4 text-sm text-text-secondary">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-success" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12L5.5 7.5 6.91 6.09 10 9.17l6.09-6.08L17.5 4.5 10 12z" />
                                </svg>
                                340% Revenue Growth
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                85% UX Improvement
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group cursor-pointer" onclick="window.location.href='javascript:void(0)'" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="relative overflow-hidden rounded-xl mb-4">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3"
                            alt="Brand identity redesign"
                            class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300"
                            loading="lazy"
                            onerror="this.src='https://images.pixabay.com/photo/2016/11/19/14/00/code-1839406_1280.jpg'; this.onerror=null;" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="text-sm font-medium">View Case Study</div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="text-sm text-primary font-medium">Branding • 4 months</div>
                        <h3 class="text-card-title group-hover:text-primary transition-smooth">GreenTech Brand Evolution
                        </h3>
                        <p class="text-body">Complete brand identity overhaul for sustainable technology company,
                            resulting in 250% increase in brand recognition.</p>
                        <div class="flex items-center space-x-4 text-sm text-text-secondary">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-success" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12L5.5 7.5 6.91 6.09 10 9.17l6.09-6.08L17.5 4.5 10 12z" />
                                </svg>
                                250% Brand Recognition
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Award Winning
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="group cursor-pointer" onclick="window.location.href='javascript:void(0)'" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="relative overflow-hidden rounded-xl mb-4">
                        <img src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?q=80&w=2939&auto=format&fit=crop&ixlib=rb-4.0.3"
                            alt="Social media campaign"
                            class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300"
                            loading="lazy"
                            onerror="this.src='https://images.pexels.com/photos/267389/pexels-photo-267389.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute bottom-4 left-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="text-sm font-medium">View Case Study</div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="text-sm text-error font-medium">Social Media • 8 months</div>
                        <h3 class="text-card-title group-hover:text-primary transition-smooth">FitLife Social Media
                            Mastery</h3>
                        <p class="text-body">Comprehensive social media strategy that grew community by 500% and
                            generated $2M in direct social commerce revenue.</p>
                        <div class="flex items-center space-x-4 text-sm text-text-secondary">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-success" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12L5.5 7.5 6.91 6.09 10 9.17l6.09-6.08L17.5 4.5 10 12z" />
                                </svg>
                                500% Community Growth
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-success" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                $2M Revenue
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="400">
                <a href="<?php echo BASE_URL; ?>pages/portfolio.php" class="btn-secondary mr-4">View Portfolio</a>
                <a href="<?php echo BASE_URL; ?>pages/case_studies.php" class="btn-primary">Read More</a>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section class="section-padding bg-surface">
        <div class="container-custom">
            <div class="text-center space-y-4 mb-16" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-section-title">
                    What <span class="text-gradient">Our Clients Say</span>
                </h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">Don't just take our word for it. Here's what
                    industry leaders say about working with Grow2Design.</p>
            </div>

            <!-- Testimonial Slider Container -->
            <div class="relative">
                <!-- Slider Navigation -->
                <!-- <button id="testimonial-prev"
                    class="swiper-button-prev testimonial-prev absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-4 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-gray-50 transition-colors">
                    <svg class="w-6 h-6 text-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button id="testimonial-next"
                    class="swiper-button-next testimonial-next absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-4 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-gray-50 transition-colors">
                    <svg class="w-6 h-6 text-text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button> -->

                <!-- Slider Wrapper -->
                <div class="testimonial-slider swiper testimonial-swiper overflow-hidden">
                    <div class="testimonial-track swiper-wrapper flex transition-transform duration-500 ease-in-out">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-slide swiper-slide flex-shrink-0 w-full lg:w-1/3 px-4">
                            <div class="card-elevated p-8 space-y-6 h-full">
                                <div class="flex items-center space-x-1 text-accent">
                                    <!-- Star icons -->
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <!-- Repeat 4 more times -->
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                                <blockquote class="text-body italic">"Grow2Design transformed our entire digital
                                    presence. Their strategic approach to brand design and social media marketing
                                    resulted in a 400% increase in qualified leads within just 6 months."</blockquote>
                                <div class="flex items-center space-x-4">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3"
                                        alt="Michael Chen" class="w-12 h-12 rounded-full object-cover" loading="lazy"
                                        onerror="this.src='https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                                    <div>
                                        <div class="font-semibold text-text-primary">Michael Chen</div>
                                        <div class="text-sm text-text-secondary">CEO, TechFlow Solutions</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-slide swiper-slide flex-shrink-0 w-full lg:w-1/3 px-4">
                            <div class="card-elevated p-8 space-y-6 h-full">
                                <div class="flex items-center space-x-1 text-accent">
                                    <!-- Star icons -->
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <!-- Repeat 4 more times -->
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                                <blockquote class="text-body italic">"The team's expertise in SEO and paid advertising
                                    is unmatched. They helped us achieve first-page rankings for our most competitive
                                    keywords and reduced our cost per acquisition by 60%."</blockquote>
                                <div class="flex items-center space-x-4">
                                    <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3"
                                        alt="Sarah Rodriguez" class="w-12 h-12 rounded-full object-cover" loading="lazy"
                                        onerror="this.src='https://images.pixabay.com/photo/2016/11/21/12/42/beard-1845166_1280.jpg'; this.onerror=null;" />
                                    <div>
                                        <div class="font-semibold text-text-primary">Sarah Rodriguez</div>
                                        <div class="text-sm text-text-secondary">Marketing Director, GreenTech</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-slide swiper-slide flex-shrink-0 w-full lg:w-1/3 px-4">
                            <div class="card-elevated p-8 space-y-6 h-full">
                                <div class="flex items-center space-x-1 text-accent">
                                    <!-- Star icons -->
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <!-- Repeat 4 more times -->
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                                <blockquote class="text-body italic">"Working with Grow2Design has been a game-changer
                                    for our fitness brand. Their social media strategy and video production helped us
                                    build a community of over 100K engaged followers and generate $2M in direct sales."
                                </blockquote>
                                <div class="flex items-center space-x-4">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3"
                                        alt="David Thompson" class="w-12 h-12 rounded-full object-cover" loading="lazy"
                                        onerror="this.src='https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                                    <div>
                                        <div class="font-semibold text-text-primary">David Thompson</div>
                                        <div class="text-sm text-text-secondary">Founder, FitLife</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Testimonials -->
                        <!-- Testimonial 4 -->
                        <div class="testimonial-slide swiper-slide flex-shrink-0 w-full lg:w-1/3 px-4">
                            <div class="card-elevated p-8 space-y-6 h-full">
                                <div class="flex items-center space-x-1 text-accent">
                                    <!-- Star icons -->
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <!-- Repeat 4 more times -->
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                                <blockquote class="text-body italic">"As a startup, we needed a partner who could
                                    deliver high-quality design on a tight budget. Grow2Design exceeded our expectations
                                    with their creative solutions and attention to detail."</blockquote>
                                <div class="flex items-center space-x-4">
                                    <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3"
                                        alt="Jessica Williams" class="w-12 h-12 rounded-full object-cover"
                                        loading="lazy"
                                        onerror="this.src='https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                                    <div>
                                        <div class="font-semibold text-text-primary">Jessica Williams</div>
                                        <div class="text-sm text-text-secondary">Co-Founder, InnovateLabs</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="testimonial-slide swiper-slide flex-shrink-0 w-full lg:w-1/3 px-4">
                            <div class="card-elevated p-8 space-y-6 h-full">
                                <div class="flex items-center space-x-1 text-accent">
                                    <!-- Star icons -->
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <!-- Repeat 4 more times -->
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                                <blockquote class="text-body italic">"The website redesign they delivered not only looks
                                    stunning but has significantly improved our conversion rates. Their data-driven
                                    approach to design really sets them apart."</blockquote>
                                <div class="flex items-center space-x-4">
                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3"
                                        alt="Robert Johnson" class="w-12 h-12 rounded-full object-cover" loading="lazy"
                                        onerror="this.src='https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                                    <div>
                                        <div class="font-semibold text-text-primary">Robert Johnson</div>
                                        <div class="text-sm text-text-secondary">E-commerce Director, StyleHub</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div> -->
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Newsletter Signup -->
    <!-- <section class="section-padding bg-primary text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-primary-700 to-primary-600"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl transform translate-x-32 -translate-y-32"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-accent/20 rounded-full blur-2xl transform -translate-x-16 translate-y-16"></div>
        
        <div class="container-custom relative">
            <div class="max-w-4xl mx-auto text-center space-y-8">
                <div class="space-y-4">
                    <h2 class="text-3xl lg:text-4xl font-bold">Stay Ahead of Digital Trends</h2>
                    <p class="text-xl text-primary-100 max-w-2xl mx-auto">Get exclusive insights, industry updates, and actionable marketing strategies delivered to your inbox every week.</p>
                </div>

                <div class="max-w-md mx-auto">
                    <form class="flex flex-col sm:flex-row gap-4">
                        <input type="email" placeholder="Enter your email address" class="flex-1 px-6 py-4 rounded-lg text-text-primary focus:outline-none focus:ring-2 focus:ring-accent" />
                        <button type="submit" class="btn-accent whitespace-nowrap">
                            <span>Get Free Insights</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </button>
                    </form>
                    <p class="text-sm text-primary-200 mt-3">Free SEO audit included with subscription. Unsubscribe anytime.</p>
                </div>

                <div class="flex flex-wrap justify-center items-center gap-8 pt-8 border-t border-primary-400">
                    <div class="text-center">
                        <div class="text-2xl font-bold">15K+</div>
                        <div class="text-sm text-primary-200">Newsletter Subscribers</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold">Weekly</div>
                        <div class="text-sm text-primary-200">Expert Insights</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold">Free</div>
                        <div class="text-sm text-primary-200">SEO Audit</div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<?php include_once('../include/footer.php')?>
</body>

</html>