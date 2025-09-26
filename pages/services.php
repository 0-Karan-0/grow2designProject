<!DOCTYPE html>
<html lang="en">
<?php
$metaTitle = "Services - Grow2Design | Comprehensive Digital Marketing Solutions";
$metaDescription = "Explore our comprehensive digital marketing services including Brand Design, Social Media, SEO, Paid Advertising, Web Development, and Video Production. Custom solutions for business growth.";
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
                        Comprehensive Digital Solutions
                    </div>
                    <h1 class="text-hero" data-aos="fade-right" data-aos-delay="400">Transform Your Business with <span class="text-gradient">Expert Digital Services</span></h1>
                    <p class="text-xl text-text-secondary leading-relaxed max-w-3xl mx-auto">From brand identity to performance marketing, our integrated approach delivers measurable results across every touchpoint of your digital presence.</p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                    <a href="<?php echo BASE_URL; ?>pages/contact_us.php" class="btn-primary inline-flex items-center justify-center">
                        <span>Get Custom Quote ></span>
                    </a>
                    <a href="#roi-calculator" class="btn-secondary inline-flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                        <span>Calculate ROI</span>
                    </a>
                </div>

                <!-- Quick Stats -->
                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-secondary-200 max-w-2xl mx-auto">
                    <div class="text-center" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                        <div class="text-2xl font-bold text-primary">6</div>
                        <div class="text-sm text-text-secondary">Core Services</div>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="500" data-aos-duration="800">
                        <div class="text-2xl font-bold text-success">500+</div>
                        <div class="text-sm text-text-secondary">Projects Delivered</div>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                        <div class="text-2xl font-bold text-accent">300%</div>
                        <div class="text-sm text-text-secondary">Avg ROI Increase</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container-custom">
            <div class="text-center space-y-4 mb-16" data-aos="fade-up" data-aos-duration="800">
                <!-- <h2 class="text-section-title">Comprehensive Digital Solutions</h2> -->
                <h2 class="text-section-title">
                    Our <span class="text-gradient">Core Services</span>
                </h2>
                <p class="text-xl text-text-secondary max-w-3xl mx-auto">Dive deep into each service offering with detailed process breakdowns, success metrics, and real client results.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Brand Design Service -->
                <div class="group card-elevated hover:scale-105 p-8 hover:shadow-conversion transition-all duration-300 cursor-pointer"
                    onclick="window.location.href='<?php echo BASE_URL; ?>pages/brand-design.php'" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="800">
                    <div class="flex items-center">
                        <div class="w-16 h-16 bg-primary-100 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary-200 transition-smooth mr-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z" />
                            </svg>
                        </div>
                        <h3 class="text-card-title mb-3">Brand Design</h3>
                    </div>
                    <p class="text-body mb-4">Create compelling visual identities that resonate with your target
                        audience and differentiate your brand in the marketplace.</p>
                    <div class="flex items-center text-primary font-medium group-hover:text-primary-700 transition-smooth group-hover:translate-x-2">
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

        </div>
    </section>

     <section class="section-padding relative bg-surface">
        <!-- Abstract Gradient Shape -->
        <!-- <div class="absolute inset-0 opacity-10" style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png');
            background-repeat: repeat;
            background-size: auto;
            width: 100%;">
        </div> -->
        <div class="container-custom relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold mb-4">
                    Our <span class="text-gradient">Strategic Process</span>
                </h2>
                <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                    Every engagement follows our proven methodology that ensures measurable results and continuous optimization.
                </p>
            </div>

            <div class="relative">
                <!-- Timeline Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-secondary-200"></div>
                <div class="space-y-16">
                    <div class="relative flex items-center">
                        <div class="flex-1 pr-8 text-right" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="500">
                            <div class="p-6 space-y-3 hover:scale-105 transition-all duration-300">
                                <!-- <div class="inline-flex items-center justify-center w-12 h-12 bg-primary text-white rounded-full font-bold text-lg mb-4">1</div> -->
                                 <h3 class="text-2xl font-bold mb-4 text-primary">Discovery &amp; Analysis</h3>
                                <p class="text-secondary-600 mb-4">
                                    Comprehensive audit of your current digital presence, competitive landscape analysis, and identification of growth opportunities through data-driven insights.
                                </p>
                                <ul class="text-sm space-y-2">
                                    <li class="flex items-center justify-end">
                                        <span>Business Goals Assessment</span>
                                        <svg class="w-4 h-4 text-accent ml-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </li>
                                    <li class="flex items-center justify-end">
                                        <span>Competitive Intelligence</span>
                                        <svg class="w-4 h-4 text-accent ml-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </li>
                                    <li class="flex items-center justify-end">
                                        <span>Technical Audit</span>
                                        <svg class="w-4 h-4 text-accent ml-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="absolute inline-flex items-center justify-center left-1/2 transform -translate-x-1/2 w-12 h-12 bg-primary text-center text-lg text-white rounded-full border-4 border-white shadow-lg hidden sm:inline-flex">1</div>
                        <div class="flex-1 pl-8 hidden sm:inline" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500"><img src="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&amp;w=2940&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Discovery and analysis process" class="w-full h-64 object-cover rounded-2xl shadow-interactive" loading="lazy" onerror="this.src='https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1260&amp;h=750&amp;dpr=2'; this.onerror=null;"></div>
                    </div>

                    <!-- 2019 -->
                    <div class="relative flex items-center">
                        <div class="flex-1 pr-8 hidden sm:inline"  data-aos="zoom-in" data-aos-delay="400" data-aos-duration="500"><img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&amp;w=2926&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Strategy development process" class="w-full h-64 object-cover rounded-2xl shadow-interactive" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&amp;w=2926&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-12 h-12 bg-accent rounded-full border-4 border-white shadow-lg inline-flex items-center justify-center text-center text-white hidden sm:inline-flex">2</div>
                        <div class="flex-1 pl-8" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="500">
                            <div class="p-6 space-y-3 hover:scale-105 transition-all duration-300">
                                <h3 class="text-2xl font-bold mb-4 text-success">Strategy Development</h3>
                                 <p class="text-secondary-600 mb-4">
                                    Custom growth strategy creation based on your unique business needs, market position, and growth objectives with clear KPIs and success metrics.
                                </p>
                                <ul class="text-sm space-y-2">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Custom Strategy Blueprint</span>
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>KPI Framework Setup</span>
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Timeline &amp; Milestones</span>
                                    </li>
                                </ul>                            
                            </div>
                        </div>
                    </div>

                    <!-- 2022 -->
                    <div class="relative flex items-center">
                        <div class="flex-1 pr-8 text-right" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="500">
                            <div class="p-6 space-y-3 hover:scale-105 transition-all duration-300">
                                <!-- <div class="inline-flex items-center justify-center w-12 h-12 bg-primary text-white rounded-full font-bold text-lg mb-4">1</div> -->
                                 <h3 class="text-2xl font-bold mb-4 text-warning">Implementation &amp; Launch</h3>
                                <p class="text-secondary-600 mb-4">
                                Systematic execution of your growth strategy with continuous monitoring, real-time adjustments, and transparent progress reporting.                                
                                </p>
                                <ul class="text-sm space-y-2">
                                    <li class="flex items-center justify-end">
                                        <span>Campaign Launch</span>
                                        <svg class="w-4 h-4 text-accent ml-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </li>
                                    <li class="flex items-center justify-end">
                                        <span>Real-time Monitoring</span>
                                        <svg class="w-4 h-4 text-accent ml-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </li>
                                    <li class="flex items-center justify-end">
                                        <span>Performance Tracking</span>
                                        <svg class="w-4 h-4 text-accent ml-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="absolute inline-flex items-center justify-center left-1/2 transform -translate-x-1/2 w-12 h-12 bg-warning text-center text-lg text-white rounded-full border-4 border-white shadow-lg hidden sm:inline-flex">3</div>
                        <div class="flex-1 pl-8 hidden sm:inline" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="500"><img src="https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1260&amp;h=750&amp;dpr=2" alt="Implementation and launch process" class="w-full h-64 object-cover rounded-2xl shadow-interactive" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&amp;w=2940&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"></div>
                    </div>

                   

                    <!-- 2023 -->
                      <div class="relative flex items-center">
                        <div class="flex-1 pr-8 hidden sm:inline"  data-aos="zoom-in" data-aos-delay="500" data-aos-duration="500"><img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&amp;w=2926&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Strategy development process" class="w-full h-64 object-cover rounded-2xl shadow-interactive" loading="lazy" onerror="this.src='https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&amp;w=2926&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;"></div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 w-12 h-12 bg-secondary-600 rounded-full border-4 border-white shadow-lg inline-flex items-center justify-center text-center text-white hidden sm:inline-flex">4</div>
                        <div class="flex-1 pl-8" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="500">
                            <div class="p-6 space-y-3 hover:scale-105 transition-all duration-300">
                                <h3 class="text-2xl font-bold mb-4 text-secondary-600">Optimization &amp; Growth</h3>
                                 <p class="text-secondary-600 mb-4">
                                    Continuous improvement through data analysis, A/B testing, and strategic refinements to maximize ROI and accelerate growth momentum.
                                </p>
                                <ul class="text-sm space-y-2">
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>A/B Testing &amp; Refinement</span>
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Performance Analysis</span>
                                    </li>
                                    <li class="flex items-center">
                                        <svg class="w-4 h-4 text-accent mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Strategic Scaling</span>
                                    </li>
                                </ul>                         
                            </div>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
    </section>

    <!-- ROI Calculator Tool -->
   <section id="roi-calculator" class="section-padding bg-surface">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto">
            
            <!-- Section Heading -->
            <div class="text-center space-y-4 mb-12" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-section-title"><span class="text-gradient">ROI Calculator</span></h2>
                <p class="text-xl text-text-secondary">
                Estimate your potential return on investment with our interactive calculator. 
                Get personalized projections based on your business metrics.
                </p>
            </div>

            <div class="card-elevated p-8" data-aos="zoom-in" data-aos-duration="800">
                <div class="grid md:grid-cols-2 gap-8">
                
                <!-- Input Section -->
                <div class="space-y-6" data-aos="fade-right" data-aos-duration="800">
                    <h3 class="text-xl font-semibold text-text-primary">Your Business Metrics</h3>
                    
                    <div class="space-y-4">
                    <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                        <label class="block text-sm font-medium text-text-primary mb-2">Monthly Revenue ($)</label>
                        <input type="number" id="monthly-revenue" class="form-input" placeholder="50000" value="50000" />
                    </div>
                    
                    <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                        <label class="block text-sm font-medium text-text-primary mb-2">Current Marketing Budget ($)</label>
                        <input type="number" id="marketing-budget" class="form-input" placeholder="5000" value="5000" />
                    </div>
                    
                    <div data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                        <label class="block text-sm font-medium text-text-primary mb-2">Average Customer Value ($)</label>
                        <input type="number" id="customer-value" class="form-input" placeholder="500" value="500" />
                    </div>
                    
                    <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                        <label class="block text-sm font-medium text-text-primary mb-2">Service Interest</label>
                        <select id="service-type" class="form-input">
                        <option value="brand">Brand Design</option>
                        <option value="social">Social Media Marketing</option>
                        <option value="seo">SEO</option>
                        <option value="ads">Paid Advertising</option>
                        <option value="web">Web Development</option>
                        <option value="video">Video Production</option>
                        <option value="full">Full Service Package</option>
                        </select>
                    </div>
                    
                    <button onclick="calculateROI()" class="btn-primary w-full" 
                            data-aos="fade-up" data-aos-delay="500" data-aos-duration="800">
                        Calculate ROI
                    </button>
                    </div>
                </div>

                <!-- Results Section -->
                <div class="space-y-6" data-aos="fade-left" data-aos-duration="800">
                    <h3 class="text-xl font-semibold text-text-primary">Projected Results</h3>
                    
                    <div id="roi-results" class="space-y-4">
                    <div class="p-4 bg-primary-50 rounded-lg" data-aos="fade-up" data-aos-delay="100" data-aos-duration="700">
                        <div class="text-sm text-primary-700 font-medium">Estimated Monthly ROI</div>
                        <div id="monthly-roi" class="text-2xl font-bold text-primary">Calculate to see results</div>
                    </div>
                    
                    <div class="p-4 bg-success-50 rounded-lg" data-aos="fade-up" data-aos-delay="200" data-aos-duration="700">
                        <div class="text-sm text-success-700 font-medium">Additional Monthly Revenue</div>
                        <div id="additional-revenue" class="text-2xl font-bold text-success">$0</div>
                    </div>
                    
                    <div class="p-4 bg-accent-50 rounded-lg" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
                        <div class="text-sm text-accent-700 font-medium">12-Month Projection</div>
                        <div id="yearly-projection" class="text-2xl font-bold text-accent">$0</div>
                    </div>
                    
                    <div class="p-4 bg-secondary-100 rounded-lg" data-aos="fade-up" data-aos-delay="400" data-aos-duration="700">
                        <div class="text-sm text-secondary-700 font-medium">Investment Payback Period</div>
                        <div id="payback-period" class="text-lg font-semibold text-secondary-700">-- months</div>
                    </div>
                    </div>
                    
                    <div class="pt-4 border-t border-secondary-200" data-aos="fade-up" data-aos-delay="500" data-aos-duration="800">
                    <p class="text-sm text-text-secondary mb-4">
                        Ready to achieve these results? Let's discuss your specific goals and create a custom strategy.
                    </p>
                    <a href="<?php echo BASE_URL; ?>pages/contact_us.php" class="btn-primary w-full text-center">Get Custom Strategy</a>
                    </div>
                </div>
                </div>
            </div>
            
            </div>
        </div>
    </section>


    <!-- Service Integration -->
   <section class="section-padding">
    <div class="container-custom">
        <div class="text-center space-y-4 mb-16" data-aos="fade-up" data-aos-duration="800">
            <h2 class="text-section-title"><span class="text-gradient">Integrated Service Approach</span></h2>
            <p class="text-xl text-text-secondary max-w-3xl mx-auto">Our services work together seamlessly to create a comprehensive digital marketing ecosystem that amplifies results across all touchpoints.</p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="relative">
                <!-- Central Hub -->
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-30 h-30 rounded-full flex items-center justify-center z-40 animate-pulse-slow" 
                     data-aos="zoom-in" data-aos-duration="1000">
                    <img src="../public/logo.png" alt="Grow2Design Logo">    
                </div>

                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-44 h-44 bg-primary/100 rounded-full blur-1xl animate-ping-slow z-10"
                     data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000"></div>

                <!-- Service Connections -->
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-8 relative">
                    <div class="text-center p-6 bg-white rounded-xl shadow-subtle" 
                         data-aos="fade-up" data-aos-delay="100">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"/>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-text-primary mb-2">Brand Foundation</h4>
                        <p class="text-sm text-text-secondary">Establishes visual identity for all other services</p>
                    </div>

                    <div class="text-center p-6 bg-white rounded-xl shadow-subtle" 
                         data-aos="fade-up" data-aos-delay="200">
                        <div class="w-16 h-16 bg-secondary-200 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-text-primary mb-2">Web Platform</h4>
                        <p class="text-sm text-text-secondary">Central hub for all marketing efforts</p>
                    </div>

                    <div class="text-center p-6 bg-white rounded-xl shadow-subtle" 
                         data-aos="fade-up" data-aos-delay="300">
                        <div class="w-16 h-16 bg-success-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-text-primary mb-2">SEO Foundation</h4>
                        <p class="text-sm text-text-secondary">Drives organic traffic to support all campaigns</p>
                    </div>

                    <div class="text-center p-6 bg-white rounded-xl shadow-subtle" 
                         data-aos="fade-up" data-aos-delay="400">
                        <div class="w-16 h-16 bg-accent-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-text-primary mb-2">Social Amplification</h4>
                        <p class="text-sm text-text-secondary">Extends reach and builds community</p>
                    </div>

                    <div class="text-center p-6 bg-white rounded-xl shadow-subtle" 
                         data-aos="fade-up" data-aos-delay="500">
                        <div class="w-16 h-16 bg-error-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-error" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-text-primary mb-2">Paid Acceleration</h4>
                        <p class="text-sm text-text-secondary">Scales successful organic strategies</p>
                    </div>

                    <div class="text-center p-6 bg-white rounded-xl shadow-subtle" 
                         data-aos="fade-up" data-aos-delay="600">
                        <div class="w-16 h-16 bg-warning-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-warning" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-text-primary mb-2">Video Storytelling</h4>
                        <p class="text-sm text-text-secondary">Enhances all content and campaigns</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="700">
                <div class="inline-flex items-center px-6 py-3 bg-success-100 text-success-700 rounded-full text-sm font-medium mb-4">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Integrated Approach = 3x Better Results
                </div>
                <p class="text-text-secondary mb-6">Our integrated approach delivers 300% better results compared to isolated service implementations.</p>
                <a href="<?php echo BASE_URL; ?>pages/contact_us.php" class="btn-primary">Discuss Integrated Strategy</a>
            </div>
        </div>
    </div>
</section>



     <!-- Client Testimonials -->
    <section class="section-padding relative bg-surface">
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

                    </div>
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

        // FAQ Toggle Function
        function toggleFAQ(faqId) {
            const faqElement = document.getElementById(faqId);
            faqElement.classList.toggle('hidden');
        }

        // ROI Calculator Function
        function calculateROI() {
            const monthlyRevenue = parseFloat(document.getElementById('monthly-revenue').value) || 0;
            const marketingBudget = parseFloat(document.getElementById('marketing-budget').value) || 0;
            const customerValue = parseFloat(document.getElementById('customer-value').value) || 0;
            const serviceType = document.getElementById('service-type').value;

            // Service multipliers based on typical performance
            const serviceMultipliers = {
                'brand': 1.5,
                'social': 2.2,
                'seo': 3.0,
                'ads': 2.5,
                'web': 1.8,
                'video': 2.0,
                'full': 3.5
            };

            const multiplier = serviceMultipliers[serviceType] || 2.0;
            const additionalRevenue = marketingBudget * multiplier;
            const monthlyROI = ((additionalRevenue - marketingBudget) / marketingBudget * 100).toFixed(0);
            const yearlyProjection = additionalRevenue * 12;
            const paybackPeriod = Math.ceil(marketingBudget / (additionalRevenue - marketingBudget));

            // Update results
            document.getElementById('monthly-roi').textContent = monthlyROI + '%';
            document.getElementById('additional-revenue').textContent = '$' + additionalRevenue.toLocaleString();
            document.getElementById('yearly-projection').textContent = '$' + yearlyProjection.toLocaleString();
            document.getElementById('payback-period').textContent = paybackPeriod + ' months';
        }

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

        // Initialize calculator with default values
        document.addEventListener('DOMContentLoaded', function() {
            calculateROI();
        });
    </script>
</body>
</html>