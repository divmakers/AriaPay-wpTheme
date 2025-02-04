// Swiper Stories Start
new Swiper(".stories-slider", {
  // speed: 500,
  // loop: true,
  // autoplay: {
  //   delay: 3000,
  //   disableOnInteraction: false,
  // },
  spaceBetween: 7,
  slidesPerView: 5,
  breakpoints: {
    320: {
      spaceBetween: 7,
      slidesPerView: 4,
    },
    375: {
      spaceBetween: 7,
      slidesPerView: 5,
    },
    640: {
      spaceBetween: 7,
      slidesPerView: 5,
    },
    1024: {
      spaceBetween: 31,
      slidesPerView: 7,
    },
    1280: {
      spaceBetween: 31,
      slidesPerView: 10,
    },
  },
});
// Swiper Stories End
// Swiper Services Aria Start
var suggestSlider = new Swiper(".suggest-slider ", {
  spaceBetween: 14,
  slidesPerView: 1.1,
  breakpoints: {
    640: {
      spaceBetween: 13,
      slidesPerView: 1.3,
    },
    1024: {
      spaceBetween: 31,
      slidesPerView: 4,
    },
  },
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
});
// Swiper Services Aria End
// Swiper Editor's suggestion Start
var Editor = new Swiper(".Editor-slider", {
  spaceBetween: 14,
  slidesPerView: 1.1,
  breakpoints: {
    320: {
      spaceBetween: 1,
      slidesPerView: 2,
    },
    640: {
      spaceBetween: 13,
      slidesPerView: 3,
    },
    1024: {
      spaceBetween: 31,
      slidesPerView: 4,
    },
  },
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
});
// Swiper Editor's suggestion End
// Videos slider Start
var videos = new Swiper(".videos-slider ", {
  spaceBetween: 14,
  slidesPerView: 1.1,
  breakpoints: {
    640: {
      spaceBetween: 13,
      slidesPerView: 1.3,
    },
    1024: {
      spaceBetween: 31,
      slidesPerView: 4,
    },
  },
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
});
// Videos slider End
// In-app payments slider Start
var inAppPayments = new Swiper(".inAppPayments-slider ", {
  spaceBetween: 14,
  slidesPerView: 1.1,
  breakpoints: {
    640: {
      spaceBetween: 13,
      slidesPerView: 1.3,
    },
    1024: {
      spaceBetween: 31,
      slidesPerView: 4,
    },
  },
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
});
// In-app paymentsslider End
// open an account slider Start
var openAccount = new Swiper(".openAccount-slider ", {
  spaceBetween: 14,
  slidesPerView: 1.1,
  breakpoints: {
    640: {
      spaceBetween: 13,
      slidesPerView: 1.3,
    },
    1024: {
      spaceBetween: 31,
      slidesPerView: 4,
    },
  },
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
});
// open an account End

// tab change Start
$(document).ready(function () {
  $(".tab-item").click(function () {
    $(".content").addClass("hidden");
    $(".tab-item").removeClass("active-table");
    var contentID = $(this).attr("id").replace("tab", "content");
    $(`#${contentID}`).removeClass("hidden");
    $(this).addClass("active-table");
  });
  $(".item-click").click(function () {
    $(".description").addClass("hidden");
    $(".item-click").removeClass("item-active");
    var contentID = $(this).attr("id").replace("item", "description");
    $(`#${contentID}`).removeClass("hidden");
    console.log($(`#${contentID}`));
    $(this).addClass("item-active");
  });

  $(".open-story").click(function () {
    if (window.innerWidth > 720) {
      $(".backdrop-story").fadeIn();
      $(".story-container").fadeIn();
    } else {
      $(".mobile-story").fadeIn();
    }
  });
  $(".inner-backdrop-story").click(function (event) {
    $(".backdrop-story").fadeOut();
    $(".story-container").fadeOut();
  });
  $(".container-story").click(function (e) {
    e.stopPropagation();
  });

  $(".close-story-mobaile").click(function () {
    if (window.innerWidth > 720) {
      $(".backdrop-story").fadeOut();
      $(".story-container").fadeOut();
    } else {
      $(".mobile-story").fadeOut();
    }
  });
});
// tab change End
// Stories Start
var stories = new Swiper(".story-slider", {
  slidesPerView: 1,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: true,
  speed: 500,
  autoplay: {
    delay: 10000,
  },
  on: {
    autoplayTimeLeft: function (s, time, progress) {
      console.log(s.realIndex, progress);
      $(`.fill-slider-${s.realIndex}`).width(`${(1 - progress) * 100}%`);
    },
  },
});
// Stories End
// Stories Mobile Start

var stories = new Swiper(".story-mobile-slider", {
  slidesPerView: 1,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
  on: {
    autoplayTimeLeft: function (s, time, progress) {
      // console.log(s.realIndex);
      $(`.fill-slider-mobile-${s.realIndex}`).width(`${(1 - progress) * 100}%`);
    },
  },
});
// Stories Mobile End
