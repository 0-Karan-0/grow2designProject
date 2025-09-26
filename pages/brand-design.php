<!DOCTYPE html>
<html lang="en">
<?php
$metaTitle = "Brand Design - Grow2Design | Comprehensive Digital Marketing Solutions";
$metaDescription = "";
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
                            Services / Brand Design
                        </div>
                        <h1 class="text-hero" data-aos="fade-right" data-aos-delay="400"><span class="text-gradient">Brand Design</span></h1>
                        <p class="text-xl text-text-secondary leading-relaxed max-w-3xl mx-auto">Create compelling visual identities that resonate with your target audience and differentiate your brand in the marketplace.</p>
                    </div>
                    
                    <!-- <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                        <a href="#service-comparison" class="btn-primary inline-flex items-center justify-center">
                            <span>Compare Services</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </a>
                        <a href="#roi-calculator" class="btn-secondary inline-flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                            <span>Calculate ROI</span>
                        </a>
                    </div> -->

            </div>
        </div>
    </section>

   
    <!-- Detailed Service Sections -->
    <section class="section-padding">
        <div class="container-custom">
          
            <!-- Brand Design Service -->
            <div id="brand-design" class="mb-24">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"/>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-text-primary">Brand Design & Identity</h3>
                            </div>
                            <p class="text-body">Create compelling visual identities that resonate with your target audience and differentiate your brand in the marketplace. Our comprehensive approach ensures consistency across all touchpoints.</p>
                        </div>

                        <!-- Process Steps -->
                        <div class="space-y-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <h4 class="text-lg font-semibold text-text-primary">Our Process</h4>
                            <div class="space-y-3">
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-primary rounded-full flex items-center justify-center text-white text-sm font-bold">1</div>
                                    <div>
                                        <div class="font-medium text-text-primary">Brand Discovery</div>
                                        <div class="text-sm text-text-secondary">Market research, competitor analysis, brand positioning</div>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-primary rounded-full flex items-center justify-center text-white text-sm font-bold">2</div>
                                    <div>
                                        <div class="font-medium text-text-primary">Concept Development</div>
                                        <div class="text-sm text-text-secondary">Logo concepts, color palettes, typography selection</div>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-primary rounded-full flex items-center justify-center text-white text-sm font-bold">3</div>
                                    <div>
                                        <div class="font-medium text-text-primary">Brand Guidelines</div>
                                        <div class="text-sm text-text-secondary">Comprehensive style guide and application examples</div>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-primary rounded-full flex items-center justify-center text-white text-sm font-bold">4</div>
                                    <div>
                                        <div class="font-medium text-text-primary">Implementation</div>
                                        <div class="text-sm text-text-secondary">Rollout across all marketing materials and touchpoints</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Success Metrics -->
                        <div class="grid grid-cols-2 gap-6 p-6 bg-surface rounded-xl" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="400">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-primary">250%</div>
                                <div class="text-sm text-text-secondary">Brand Recognition Increase</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-success">85%</div>
                                <div class="text-sm text-text-secondary">Client Satisfaction Rate</div>
                            </div>
                        </div>

                        <div class="flex space-x-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                            <a href="<?php echo BASE_URL; ?>pages/contact_us.php" class="btn-primary">Start Brand Project</a>
                            <button class="btn-secondary" onclick="toggleFAQ('brand-faq')">View FAQ</button>
                        </div>
                    </div>

                    <div class="relative" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
                        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3" alt="Brand design process and identity development" class="w-full h-96 object-cover rounded-2xl shadow-conversion" loading="lazy" onerror="this.src='https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'; this.onerror=null;" />
                        <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-primary/20 rounded-full blur-3xl"></div>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div id="brand-faq" class="hidden mt-12 p-6 bg-surface rounded-xl">
                    <h4 class="text-lg font-semibold text-text-primary mb-6">Frequently Asked Questions - Brand Design</h4>
                    <div class="space-y-4">
                        <div class="border-b border-secondary-200 pb-4">
                            <div class="font-medium text-text-primary mb-2">How long does the brand design process take?</div>
                            <div class="text-text-secondary">Typically 4-8 weeks depending on project scope and revision rounds. We work closely with you to ensure the timeline meets your launch requirements.</div>
                        </div>
                        <div class="border-b border-secondary-200 pb-4">
                            <div class="font-medium text-text-primary mb-2">What's included in the brand package?</div>
                            <div class="text-text-secondary">Logo design, color palette, typography, brand guidelines, business card design, and basic stationery templates. Additional materials can be added as needed.</div>
                        </div>
                        <div class="border-b border-secondary-200 pb-4">
                            <div class="font-medium text-text-primary mb-2">Do you provide trademark research?</div>
                            <div class="text-text-secondary">We conduct basic trademark searches, but recommend professional legal consultation for comprehensive trademark registration and protection.</div>
                        </div>
                    </div>
                </div>
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
    </script>
</body>
</html>