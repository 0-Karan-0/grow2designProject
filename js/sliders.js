
// Testimonial slider
const testimonialSwiper = new Swiper(".testimonial-swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
     autoplay: {
        delay: 3000, 
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".testimonial-next",
        prevEl: ".testimonial-prev",
    },
    breakpoints: {
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 2 },
        1280: { slidesPerView: 2 },
    },
});

// Hero carousel slider
const heroSwiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: { delay: 4000 },
    pagination: { el: ".hero-pagination", clickable: true },
    navigation: { nextEl: ".hero-next", prevEl: ".hero-prev" },
    effect: "slide",
});
