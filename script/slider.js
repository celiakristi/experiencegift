
let slideIndex = 1;

function nextSlide() {
    showSlides(slideIndex += 1);
}

function previousSlide() {
    showSlides(slideIndex -= 1);  
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}
function showSlides(n) {
    let slides = $('.slider-image');
    if (n > slides.length) {
      slideIndex = slides.length
    } else if (n < 1) {
        slideIndex = 1;
    }
    const offsetLeft = slides[slideIndex - 1].offsetLeft;
    $('#sliderContainer').animate({ scrollLeft: offsetLeft, behavior: "smooth"});
}