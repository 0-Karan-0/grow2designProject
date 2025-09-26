<!DOCTYPE html>
<html lang="en">
    <?php
$metaTitle = "Portfolio - Grow2Design | Proven Results & Success Stories";
$metaDescription = "Explore our portfolio of successful digital marketing campaigns and design projects. See measurable results, client testimonials, and case studies from 500+ completed projects.";
$metaKeywords = "";
$metaOGImage = "";
include('../include/head.php');
?>
<body class="bg-background">
    <?php include_once('../include/header.php')?>
    <!-- Hero Section -->
        <section class="pt-24 pb-12 lg:pt-32 lg:pb-16 bg-gradient-to-br from-primary-50 to-white relative overflow-hidden">
            <!-- Background shapes -->
            <div class="absolute inset-0 bg-gradient-to-r from-primary/5 to-accent/5"></div>
            <div class="absolute top-0 right-0 w-96 h-96 bg-primary/20 rounded-full blur-1xl transform translate-x-32 -translate-y-32 float-random" data-aos="fade-down" data-aos-duration="2000"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-accent/20 rounded-full blur-1xl transform -translate-x-16 translate-y-16 float-random" data-aos="fade-up" data-aos-duration="2000"></div>

            <div class="container-custom relative">
                <div class="max-w-4xl mx-auto text-center space-y-8">
                    <!-- Header -->
                    <div class="space-y-4" data-aos="fade-up" data-aos-duration="800">
                        <div class="inline-flex items-center px-4 py-2 bg-success-100 text-success-600 rounded-full text-sm font-medium" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="800">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            500+ Successful Projects Delivered
                        </div>
                        <h1 class="text-hero" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">Our <span class="text-gradient">Portfolio</span> of Success</h1>
                        <p class="text-xl text-text-secondary leading-relaxed max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">Explore our collection of transformative digital marketing campaigns and design projects that have driven measurable growth for businesses worldwide.</p>
                    </div>

                    <!-- Portfolio Stats -->
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 pt-8">
                        <div class="text-center" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1500">
                            <div class="text-3xl font-bold text-primary">500+</div>
                            <div class="text-sm text-text-secondary">Projects Completed</div>
                        </div>
                        <div class="text-center" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1500">
                            <div class="text-3xl font-bold text-success">$50M+</div>
                            <div class="text-sm text-text-secondary">Revenue Generated</div>
                        </div>
                        <div class="text-center" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1500">
                            <div class="text-3xl font-bold text-accent">98%</div>
                            <div class="text-sm text-text-secondary">Client Satisfaction</div>
                        </div>
                        <div class="text-center" data-aos="fade-up" data-aos-delay="700" data-aos-duration="1500">
                            <div class="text-3xl font-bold text-error">300%</div>
                            <div class="text-sm text-text-secondary">Avg ROI Increase</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <!-- Featured Success Story -->
   <section class="section-padding bg-gradient-to-br from-primary-50 to-accent-50">
    <div class="container-custom">
        <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="800">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">
                Featured <span class="text-gradient">Success Story</span>
            </h2>
            <p class="text-xl text-secondary-600">Our most impactful transformation to date</p>
        </div>

        <div class="bg-white rounded-2xl shadow-interactive overflow-hidden" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
            <div class="grid lg:grid-cols-2 gap-0">
                <!-- Video Testimonial -->
                <div class="relative" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?q=80&w=2926&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="TechFlow Solutions CEO testimonial video" class="w-full h-64 lg:h-full object-cover" loading="lazy" onerror="this.src='https://images.pexels.com/photos/3184291/pexels-photo-3184291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                    <div class="absolute inset-0 bg-black/20 flex items-center justify-center">
                        <button class="w-20 h-20 bg-white/90 rounded-full flex items-center justify-center hover:bg-white transition-colors group">
                            <svg class="w-8 h-8 text-primary ml-1 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="absolute bottom-4 left-4 bg-black/70 text-white px-3 py-1 rounded-full text-sm">
                        3:42 Video Testimonial
                    </div>
                </div>

                <!-- Case Study Details -->
                <div class="p-8 lg:p-12" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                    <div class="flex items-center mb-6" data-aos="fade-right" data-aos-duration="800" data-aos-delay="500">
                        <img src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Sarah Chen, CEO of TechFlow Solutions" class="w-16 h-16 rounded-full object-cover mr-4" loading="lazy" onerror="this.src='https://images.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png'; this.onerror=null;" />
                        <div>
                            <h3 class="text-xl font-bold">Sarah Chen</h3>
                            <p class="text-secondary-600">CEO, TechFlow Solutions</p>
                            <div class="flex items-center mt-1">
                                <span class="text-sm bg-primary-100 text-primary px-2 py-1 rounded">Technology</span>
                                <span class="text-sm bg-accent-100 text-accent px-2 py-1 rounded ml-2">Medium (150 employees)</span>
                            </div>
                        </div>
                    </div>

                    <blockquote class="text-lg text-secondary-700 italic mb-6" data-aos="fade-up" data-aos-delay="600">
                        "Grow2Design transformed our entire digital presence. Their strategic approach didn't just increase our leads—it revolutionized how we think about marketing ROI."
                    </blockquote>

                    <!-- Results Grid -->
                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="text-center p-4 bg-primary-50 rounded-lg" data-aos="fade-up" data-aos-delay="200">
                            <div class="text-3xl font-bold text-primary mb-2">+400%</div>
                            <div class="text-sm text-secondary-600">Lead Generation</div>
                        </div>
                        <div class="text-center p-4 bg-accent-50 rounded-lg" data-aos="fade-up" data-aos-delay="300">
                            <div class="text-3xl font-bold text-accent mb-2">+250%</div>
                            <div class="text-sm text-secondary-600">Revenue Growth</div>
                        </div>
                        <div class="text-center p-4 bg-primary-50 rounded-lg" data-aos="fade-up" data-aos-delay="400">
                            <div class="text-3xl font-bold text-primary mb-2">-60%</div>
                            <div class="text-sm text-secondary-600">Cost Per Lead</div>
                        </div>
                        <div class="text-center p-4 bg-accent-50 rounded-lg" data-aos="fade-up" data-aos-delay="500">
                            <div class="text-3xl font-bold text-accent mb-2">6 months</div>
                            <div class="text-sm text-secondary-600">Timeline</div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="<?php echo BASE_URL; ?>pages/case_studies.php" class="btn-primary flex items-center justify-center" data-aos="fade-right" data-aos-delay="500">
                            Read More
                            <svg class="w-4 h-4 ml-2 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Portfolio Grid -->
    <section class="pb-16 lg:pb-24 bg-surface">
        <div class="container-custom">
            <!-- Portfolio Masonry Grid -->
            <div id="portfolio-grid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 - TechFlow E-commerce -->
                <div class="portfolio-item group cursor-pointer" data-industry="technology" data-service="web-development" data-size="large" data-results="high-roi" onclick="openProjectModal('techflow')" data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
                    <div class="card-elevated overflow-hidden hover:shadow-conversion transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426&auto=format&fit=crop&ixlib=rb-4.0.3" alt="TechFlow E-commerce Platform" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy" onerror="this.src='https://images.pexels.com/photos/265087/pexels-photo-265087.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="flex items-center justify-between">
                                    <div class="space-y-1">
                                        <div class="text-sm font-medium">340% Revenue Growth</div>
                                        <div class="text-xs">6-month project</div>
                                    </div>
                                    <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="px-3 py-1 bg-primary-100 text-primary-700 text-xs font-medium rounded-full">Technology</span>
                                <span class="px-3 py-1 bg-success-100 text-success-600 text-xs font-medium rounded-full">Web Development</span>
                            </div>
                            <div class="space-y-2">
                                <h3 class="text-card-title group-hover:text-primary transition-smooth">TechFlow E-commerce Transformation</h3>
                                <p class="text-body">Complete digital transformation of B2B technology platform resulting in 340% revenue increase and 85% UX improvement.</p>
                            </div>
                            <div class="flex items-center space-x-4 text-sm text-text-secondary">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-success" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12L5.5 7.5 6.91 6.09 10 9.17l6.09-6.08L17.5 4.5 10 12z"/>
                                    </svg>
                                    340% ROI
                                </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    85% UX Boost
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2 - GreenTech Branding -->
                <div class="portfolio-item group cursor-pointer" data-industry="technology" data-service="branding" data-size="medium" data-results="brand-awareness" onclick="openProjectModal('greentech')" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                    <div class="card-elevated overflow-hidden hover:shadow-conversion transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3" alt="GreenTech Brand Identity" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy" onerror="this.src='https://images.pixabay.com/photo/2016/11/19/14/00/code-1839406_1280.jpg'; this.onerror=null;" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="flex items-center justify-between">
                                    <div class="space-y-1">
                                        <div class="text-sm font-medium">250% Brand Recognition</div>
                                        <div class="text-xs">4-month project</div>
                                    </div>
                                    <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="px-3 py-1 bg-primary-100 text-primary-700 text-xs font-medium rounded-full">Technology</span>
                                <span class="px-3 py-1 bg-accent-100 text-accent-600 text-xs font-medium rounded-full">Brand Design</span>
                            </div>
                            <div class="space-y-2">
                                <h3 class="text-card-title group-hover:text-primary transition-smooth">GreenTech Brand Evolution</h3>
                                <p class="text-body">Complete brand identity overhaul for sustainable technology company, resulting in award-winning design and market recognition.</p>
                            </div>
                            <div class="flex items-center space-x-4 text-sm text-text-secondary">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-success" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12L5.5 7.5 6.91 6.09 10 9.17l6.09-6.08L17.5 4.5 10 12z"/>
                                    </svg>
                                    250% Recognition
                                </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Award Winner
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3 - FitLife Social Media -->
                <div class="portfolio-item group cursor-pointer" data-industry="fitness" data-service="social-media" data-size="large" data-results="high-roi" onclick="openProjectModal('fitlife')" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                    <div class="card-elevated overflow-hidden hover:shadow-conversion transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?q=80&w=2939&auto=format&fit=crop&ixlib=rb-4.0.3" alt="FitLife Social Media Campaign" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy" onerror="this.src='https://images.pexels.com/photos/267389/pexels-photo-267389.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="flex items-center justify-between">
                                    <div class="space-y-1">
                                        <div class="text-sm font-medium">$2M Revenue Generated</div>
                                        <div class="text-xs">8-month project</div>
                                    </div>
                                    <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="px-3 py-1 bg-error-100 text-error-600 text-xs font-medium rounded-full">Fitness</span>
                                <span class="px-3 py-1 bg-secondary-200 text-secondary-600 text-xs font-medium rounded-full">Social Media</span>
                            </div>
                            <div class="space-y-2">
                                <h3 class="text-card-title group-hover:text-primary transition-smooth">FitLife Social Media Mastery</h3>
                                <p class="text-body">Comprehensive social media strategy that grew community by 500% and generated $2M in direct social commerce revenue.</p>
                            </div>
                            <div class="flex items-center space-x-4 text-sm text-text-secondary">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-success" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12L5.5 7.5 6.91 6.09 10 9.17l6.09-6.08L17.5 4.5 10 12z"/>
                                    </svg>
                                    500% Growth
                                </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-success" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    $2M Revenue
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 4 - MedTech SEO -->
                <div class="portfolio-item group cursor-pointer" data-industry="healthcare" data-service="seo" data-size="medium" data-results="traffic-growth" onclick="openProjectModal('medtech')" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                    <div class="card-elevated overflow-hidden hover:shadow-conversion transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="MedTech SEO Campaign" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy" onerror="this.src='https://images.pixabay.com/photo/2017/05/26/19/36/doctor-2345467_1280.jpg'; this.onerror=null;" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="flex items-center justify-between">
                                    <div class="space-y-1">
                                        <div class="text-sm font-medium">450% Organic Traffic</div>
                                        <div class="text-xs">12-month project</div>
                                    </div>
                                    <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="px-3 py-1 bg-warning-100 text-warning-600 text-xs font-medium rounded-full">Healthcare</span>
                                <span class="px-3 py-1 bg-success-100 text-success-600 text-xs font-medium rounded-full">SEO</span>
                            </div>
                            <div class="space-y-2">
                                <h3 class="text-card-title group-hover:text-primary transition-smooth">MedTech SEO Transformation</h3>
                                <p class="text-body">Strategic SEO campaign for medical technology company achieving first-page rankings and 450% organic traffic growth.</p>
                            </div>
                            <div class="flex items-center space-x-4 text-sm text-text-secondary">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-success" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12L5.5 7.5 6.91 6.09 10 9.17l6.09-6.08L17.5 4.5 10 12z"/>
                                    </svg>
                                    450% Traffic
                                </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Page 1 Rankings
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 5 - FinanceFlow Paid Ads -->
                <div class="portfolio-item group cursor-pointer" data-industry="finance" data-service="paid-ads" data-size="large" data-results="conversion-boost" onclick="openProjectModal('financeflow')" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                    <div class="card-elevated overflow-hidden hover:shadow-conversion transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3" alt="FinanceFlow Paid Advertising" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy" onerror="this.src='https://images.pexels.com/photos/159888/pexels-photo-159888.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="flex items-center justify-between">
                                    <div class="space-y-1">
                                        <div class="text-sm font-medium">60% Cost Reduction</div>
                                        <div class="text-xs">9-month project</div>
                                    </div>
                                    <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="px-3 py-1 bg-secondary-200 text-secondary-600 text-xs font-medium rounded-full">Finance</span>
                                <span class="px-3 py-1 bg-error-100 text-error-600 text-xs font-medium rounded-full">Paid Ads</span>
                            </div>
                            <div class="space-y-2">
                                <h3 class="text-card-title group-hover:text-primary transition-smooth">FinanceFlow Ad Optimization</h3>
                                <p class="text-body">Performance marketing campaign optimization reducing cost per acquisition by 60% while increasing conversion rates by 180%.</p>
                            </div>
                            <div class="flex items-center space-x-4 text-sm text-text-secondary">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-success" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12L5.5 7.5 6.91 6.09 10 9.17l6.09-6.08L17.5 4.5 10 12z"/>
                                    </svg>
                                    60% Cost Down
                                </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-success" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    180% Conversion
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 6 - EduTech Video Production -->
                <div class="portfolio-item group cursor-pointer" data-industry="education" data-service="video-production" data-size="medium" data-results="brand-awareness" onclick="openProjectModal('edutech')" data-aos="fade-up" data-aos-delay="500" data-aos-duration="800">
                    <div class="card-elevated overflow-hidden hover:shadow-conversion transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2942&auto=format&fit=crop&ixlib=rb-4.0.3" alt="EduTech Video Production" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy" onerror="this.src='https://images.pixabay.com/photo/2016/02/19/11/19/office-1209640_1280.jpg'; this.onerror=null;" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="flex items-center justify-between">
                                    <div class="space-y-1">
                                        <div class="text-sm font-medium">2M+ Video Views</div>
                                        <div class="text-xs">5-month project</div>
                                    </div>
                                    <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="px-3 py-1 bg-accent-100 text-accent-600 text-xs font-medium rounded-full">Education</span>
                                <span class="px-3 py-1 bg-warning-100 text-warning-600 text-xs font-medium rounded-full">Video Production</span>
                            </div>
                            <div class="space-y-2">
                                <h3 class="text-card-title group-hover:text-primary transition-smooth">EduTech Video Campaign</h3>
                                <p class="text-body">Comprehensive video marketing campaign for online education platform achieving 2M+ views and 300% enrollment increase.</p>
                            </div>
                            <div class="flex items-center space-x-4 text-sm text-text-secondary">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-success" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 12L5.5 7.5 6.91 6.09 10 9.17l6.09-6.08L17.5 4.5 10 12z"/>
                                    </svg>
                                    2M+ Views
                                </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-success" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    300% Enrollment
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

      <!-- Client Testimonials -->
    <section class="section-padding">
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
    <!-- Project Detail Modal -->
    <div id="project-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
                <div id="modal-content">
                    <!-- Modal content will be dynamically inserted here -->
                </div>
            </div>
        </div>
    </div>
    <script>
         // Project modal functionality
        const projectModal = document.getElementById('project-modal');
        const modalContent = document.getElementById('modal-content');

        const projectData = {
            techflow: {
                title: 'TechFlow E-commerce Transformation',
                industry: 'Technology',
                service: 'Web Development',
                duration: '6 months',
                image: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426&auto=format&fit=crop&ixlib=rb-4.0.3',
                challenge: 'TechFlow needed a complete digital transformation of their B2B e-commerce platform to compete in the modern marketplace.',
                solution: 'We redesigned their entire user experience, implemented advanced search functionality, and optimized the conversion funnel.',
                results: [
                    { metric: 'Revenue Growth', value: '340%', description: 'Increased online revenue within 6 months' },
                    { metric: 'UX Improvement', value: '85%', description: 'Better user experience metrics' },
                    { metric: 'Conversion Rate', value: '120%', description: 'Higher conversion rates' }
                ],
                testimonial: {
                    text: 'Grow2Design transformed our entire digital presence. The results exceeded our expectations.',
                    author: 'Michael Chen',
                    position: 'CEO, TechFlow Solutions'
                }
            },
            greentech: {
                title: 'GreenTech Brand Evolution',
                industry: 'Technology',
                service: 'Brand Design',
                duration: '4 months',
                image: 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3',
                challenge: 'GreenTech needed a complete brand identity overhaul to position themselves as leaders in sustainable technology.',
                solution: 'We created a comprehensive brand identity system including logo, color palette, typography, and brand guidelines.',
                results: [
                    { metric: 'Brand Recognition', value: '250%', description: 'Increased brand awareness' },
                    { metric: 'Market Position', value: '#1', description: 'Industry leader position' },
                    { metric: 'Awards Won', value: '3', description: 'Design excellence awards' }
                ],
                testimonial: {
                    text: 'The new brand identity perfectly captures our vision and values. Outstanding work.',
                    author: 'Sarah Rodriguez',
                    position: 'Marketing Director, GreenTech'
                }
            },
            fitlife: {
                title: 'FitLife Social Media Mastery',
                industry: 'Fitness',
                service: 'Social Media',
                duration: '8 months',
                image: 'https://images.unsplash.com/photo-1611224923853-80b023f02d71?q=80&w=2939&auto=format&fit=crop&ixlib=rb-4.0.3',
                challenge: 'FitLife needed to build an engaged community and drive direct sales through social media platforms.',
                solution: 'We developed a comprehensive social media strategy with engaging content, community management, and social commerce integration.',
                results: [
                    { metric: 'Community Growth', value: '500%', description: 'Follower increase across platforms' },
                    { metric: 'Revenue Generated', value: '$2M', description: 'Direct social commerce sales' },
                    { metric: 'Engagement Rate', value: '12%', description: 'Above industry average' }
                ],
                testimonial: {
                    text: 'The social media strategy transformed our business. We now have a thriving community.',
                    author: 'David Thompson',
                    position: 'Founder, FitLife'
                }
            },
            medtech: {
                title: 'MedTech SEO Transformation',
                industry: 'Healthcare',
                service: 'SEO',
                duration: '12 months',
                image: 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                challenge: 'MedTech needed to improve their organic search visibility for competitive healthcare keywords.',
                solution: 'We implemented a comprehensive SEO strategy including technical optimization, content creation, and link building.',
                results: [
                    { metric: 'Organic Traffic', value: '450%', description: 'Increase in organic website traffic' },
                    { metric: 'First Page Rankings', value: '85%', description: 'Target keywords on page 1' },
                    { metric: 'Lead Generation', value: '300%', description: 'More qualified leads' }
                ],
                testimonial: {
                    text: 'The SEO results have been phenomenal. We dominate our industry search results.',
                    author: 'Dr. Emily Watson',
                    position: 'CMO, MedTech Solutions'
                }
            },
            financeflow: {
                title: 'FinanceFlow Ad Optimization',
                industry: 'Finance',
                service: 'Paid Ads',
                duration: '9 months',
                image: 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3',
                challenge: 'FinanceFlow was struggling with high cost per acquisition and low conversion rates in their paid advertising campaigns.',
                solution: 'We optimized their ad campaigns with better targeting, improved ad copy, and conversion rate optimization.',
                results: [
                    { metric: 'Cost Reduction', value: '60%', description: 'Lower cost per acquisition' },
                    { metric: 'Conversion Boost', value: '180%', description: 'Higher conversion rates' },
                    { metric: 'ROI Improvement', value: '400%', description: 'Return on ad spend' }
                ],
                testimonial: {
                    text: 'The paid advertising optimization delivered incredible results. Our ROI has never been better.',
                    author: 'James Mitchell',
                    position: 'Marketing Manager, FinanceFlow'
                }
            },
            edutech: {
                title: 'EduTech Video Campaign',
                industry: 'Education',
                service: 'Video Production',
                duration: '5 months',
                image: 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=2942&auto=format&fit=crop&ixlib=rb-4.0.3',
                challenge: 'EduTech needed engaging video content to showcase their online education platform and increase enrollments.',
                solution: 'We created a comprehensive video marketing campaign including explainer videos, testimonials, and course previews.',
                results: [
                    { metric: 'Video Views', value: '2M+', description: 'Total video views across platforms' },
                    { metric: 'Enrollment Increase', value: '300%', description: 'New student enrollments' },
                    { metric: 'Engagement Rate', value: '15%', description: 'Video engagement rate' }
                ],
                testimonial: {
                    text: 'The video content perfectly showcases our platform. Enrollments have skyrocketed.',
                    author: 'Lisa Chen',
                    position: 'Head of Marketing, EduTech'
                }
            }
        };

        function openProjectModal(projectId) {
            const project = projectData[projectId];
            if (!project) return;

            modalContent.innerHTML = `
                <div class="relative">
                    <button onclick="closeProjectModal()" class="absolute top-4 right-4 z-10 w-10 h-10 bg-white/90 rounded-full flex items-center justify-center hover:bg-white transition-smooth">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                    <img src="${project.image}" alt="${project.title}" class="w-full h-64 lg:h-80 object-cover rounded-t-2xl">
                </div>
                
                <div class="p-8 space-y-8">
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <span class="px-3 py-1 bg-primary-100 text-primary-700 text-sm font-medium rounded-full">${project.industry}</span>
                            <span class="px-3 py-1 bg-accent-100 text-accent-600 text-sm font-medium rounded-full">${project.service}</span>
                            <span class="text-sm text-text-secondary">${project.duration}</span>
                        </div>
                        <h2 class="text-3xl font-bold text-text-primary">${project.title}</h2>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div>
                                <h3 class="text-xl font-semibold text-text-primary mb-3">Challenge</h3>
                                <p class="text-body">${project.challenge}</p>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-text-primary mb-3">Solution</h3>
                                <p class="text-body">${project.solution}</p>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div>
                                <h3 class="text-xl font-semibold text-text-primary mb-4">Results Achieved</h3>
                                <div class="space-y-4">
                                    ${project.results.map(result => `
                                        <div class="flex items-center justify-between p-4 bg-surface rounded-lg">
                                            <div>
                                                <div class="font-semibold text-text-primary">${result.metric}</div>
                                                <div class="text-sm text-text-secondary">${result.description}</div>
                                            </div>
                                            <div class="text-2xl font-bold text-success">${result.value}</div>
                                        </div>
                                    `).join('')}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-primary-50 p-6 rounded-xl">
                        <h3 class="text-xl font-semibold text-text-primary mb-4">Client Testimonial</h3>
                        <blockquote class="text-body italic mb-4">"${project.testimonial.text}"</blockquote>
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 bg-primary-200 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-text-primary">${project.testimonial.author}</div>
                                <div class="text-sm text-text-secondary">${project.testimonial.position}</div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-secondary-200">
                        <a href="contact.html" class="btn-primary flex-1 text-center">Start Your Project</a>
                        <a href="case_studies.html" class="btn-secondary flex-1 text-center">View More Cases</a>
                    </div>
                </div>
            `;

            projectModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeProjectModal() {
            projectModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        projectModal.addEventListener('click', function(e) {
            if (e.target === projectModal) {
                closeProjectModal();
            }
        });
    </script>
</body>
</html>