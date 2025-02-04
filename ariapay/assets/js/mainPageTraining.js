var training = new Swiper(".training", {
  loop: true,
  slidesPerView: 5,
  spaceBetween: 14,

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

  breakpoints: {
    320: {
      slidesPerView: 1.5,
      spaceBetween: 9,
    },
    425: {
      slidesPerView: 2.3,
      spaceBetween: 5,
    },
    768: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3.5,
      spaceBetween: 10,
    },
  },
});

var accountTraining = new Swiper(".tccount-training", {
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

  breakpoints: {
    320: {
      slidesPerView: 1.8,
      spaceBetween: 5,
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 5,
    },
    768: {
      slidesPerView: 2.5,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3.5,
      spaceBetween: 10,
    },
  },
});

var opening = new Swiper(".opening", {
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
  breakpoints: {
    320: {
      slidesPerView: 1.5,
      spaceBetween: 9,
    },
    425: {
      slidesPerView: 1.3,
      spaceBetween: 11,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 18,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 18,
    },
  },
});

$(document).ready(function () {
  $(".table-click").click(function () {
    $(".content").addClass("hidden");
    $(".table-click").removeClass("active-table");
    var contentID = $(this).attr("id").replace("btn", "content");
    $(`#${contentID}`).removeClass("hidden");
    $(this).addClass("active-table");
  });
});
