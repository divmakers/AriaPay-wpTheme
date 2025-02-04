var swiper = new Swiper(".top-services-slider", {
  pagination: {
    el: ".swiper-pagination",
  },
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 40,
    },
  },
});

var swiperNews = new Swiper(".news-slider", {
  loop: true,

  pagination: {
    el: ".swiper-pagination",
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  scrollbar: {
    el: ".swiper-scrollbar",
  },
});

var swiperSentence = new Swiper(".sentence-slider", {
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
});
