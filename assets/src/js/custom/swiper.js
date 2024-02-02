document.addEventListener("DOMContentLoaded", (event) => {
  const swiper = new Swiper('.swiper', {
      speed: 400,
      spaceBetween: 30,
      slidesPerView: 3,
      a11y: {
        prevSlideMessage: 'Previous slide',
        nextSlideMessage: 'Next slide',
      },
    });
});
