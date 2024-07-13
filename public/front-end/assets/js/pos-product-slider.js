document.addEventListener('DOMContentLoaded', function () {
  const swiper = new Swiper('.swiper-container', {
    slidesPerView: 7,
    spaceBetween: 10,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      640: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 10
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 10
      },
      1200: {
        slidesPerView: 6,
        spaceBetween: 10
      },
      1201: {
        slidesPerView: 7,
        spaceBetween: 10
      }
    }
  });

  // Add click event to slide cards
  const slides = document.querySelectorAll('.swiper-slide');
  slides.forEach((slide, index) => {
    slide.addEventListener('click', () => {
      swiper.slideToLoop(index); // Slide to the clicked card
    });
  });
});