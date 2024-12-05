document.addEventListener('DOMContentLoaded', function () {
    // Testimonial Slider Logic
    const testimonialSlider = document.querySelector('.testimonial-slider');
    const dotsContainer = document.querySelector('.testimonial-dots');
    const testimonials = document.querySelectorAll('.testimonial-card');

    // Ensure the dotsContainer exists before trying to append anything
    if (!dotsContainer) {
        console.warn('.testimonial-dots container not found');
        return;
    }

    // Create dots dynamically based on the number of testimonials
    testimonials.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        if (index === 0) dot.classList.add('active');
        dot.dataset.index = index;
        dotsContainer.appendChild(dot);
    });

    const dots = document.querySelectorAll('.dot');

    // Scroll behavior for dots
    dots.forEach((dot) => {
        dot.addEventListener('click', (e) => {
            const index = e.target.dataset.index;
            testimonialSlider.style.transform = `translateX(-${100 * index}%)`; // Move to the clicked dot's testimonial

            // Update active dot
            dots.forEach((d) => d.classList.remove('active'));
            dot.classList.add('active');
        });
    });

    // Auto-scrolling functionality (to auto-move through testimonials)
    let currentSlide = 0;
    setInterval(() => {
        currentSlide = (currentSlide + 1) % dots.length;
        testimonialSlider.style.transform = `translateX(-${100 * currentSlide}%)`; // Move to the next testimonial

        // Update active dot
        dots.forEach((dot) => dot.classList.remove('active'));
        dots[currentSlide].classList.add('active');
    }, 5000); // Change slide every 5 seconds
});

// Cakes Slider Logic (similar to the testimonial slider)
document.addEventListener('DOMContentLoaded', function () {
    const cakesSlider = document.querySelector('.cakes-slider');
    const cakeItems = document.querySelectorAll('.cake-item');

    // Ensure that the cakesSlider exists
    if (!cakesSlider) {
        console.warn('.cakes-slider container not found');
        return;
    }

    let currentCake = 0;
    setInterval(() => {
        currentCake = (currentCake + 1) % cakeItems.length; // Loop back to first image if it reaches the end
        cakesSlider.style.transform = `translateX(-${100 * currentCake}%)`; // Move to the next cake
    }, 8000); // Change cake every 8 seconds (or adjust the interval as needed)
});



