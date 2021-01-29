
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
    let slides = document.getElementsByClassName("slider-image");
    if (n > slides.length) {
      slideIndex = slides.length
    } else if (n < 1) {
        slideIndex = 1;
    }

    const sliderItemWrapperEl = document.getElementById('sliderContainer');
    const offsetLeft = slides[slideIndex - 1].offsetLeft;
    sliderItemWrapperEl.scroll({left: offsetLeft, behavior: "smooth"});
}