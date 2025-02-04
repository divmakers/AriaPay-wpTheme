$(document).ready(function () {
  // Current Price Start
  $(".btn-table").click(function () {
    $(".content").removeClass("md:block");
    $(".btn-table").removeClass("active-table");
    var contentID = $(this).attr("id").replace("btn", "content");
    $(`#${contentID}`).addClass("md:block");
    $(this).addClass("active-table");
  });
  $(".current-price-header").click(function () {
    var content = $(this).next(".current-price-content");
    $(".current-price-content").not(content).css("max-height", 0);
    $(".current-price-header").not(this).removeClass("active");
    $(".current-price-item")
      .not($(this).parent())
      .removeClass("current-price-item-active");
    $(this).toggleClass("active");
    $(this).parent().toggleClass("current-price-item-active");
    if (content.css("max-height") && content.css("max-height") !== "0px") {
      content.css("max-height", 0);
    } else {
      content.css("max-height", content.prop("scrollHeight") + "px");
    }
  });
  // Current Price End
  // Service Suggest Start
  $(".slide-button").click(function () {
    var slideIndex = parseInt($(this).attr("data-slide"));
    suggestService.slideTo(slideIndex);
  });
  suggestService.on("slideChange", function () {
    $(".slide-button").removeClass("active-suggest-slider");
    var activeSlideIndex = suggestService.realIndex;
    $('.slide-button[data-slide="' + activeSlideIndex + '"]').addClass(
      "active-suggest-slider"
    );
  });
  $("#more-desc").click(function () {
    const content = $("#content-desc");
    if (content.css("max-height") && content.css("max-height") !== "400px") {
      $(".shadow-long-text").removeClass("hidden");
      content.css("max-height", 400 + "px");
      $(this).find("span").text("ادامه مطلب");
    } else {
      content.css("max-height", 1000 + "px");
      $(".shadow-long-text").addClass("hidden");
      $(this).find("span").text("مشاهده کمتر");
    }
  });
  // Service Suggest End
  // Accordion Start
  $(".accordion").on("click", ({ currentTarget }) => {
    if ($(currentTarget).hasClass("accordion-is-open")) {
      $(currentTarget).removeClass("accordion-is-open");
    } else {
      $(currentTarget).addClass("accordion-is-open");
    }
    var content = $(currentTarget).find(".accordion-content");
    var header = $(currentTarget).find(".accordion-header");
    var iconOpen = $(currentTarget).find(".accordion-header-open-icon");

    $(".accordion-content").not(content).css("max-height", 0);
    $(".accordion-header").not(header).removeClass("active-header-accordion");
    if (content.css("max-height") && content.css("max-height") !== "0px") {
      content.css("max-height", 0);
      iconOpen.css("display", "none");
      header.removeClass("active-header-accordion");
    } else {
      iconOpen.css("display", "block");
      content.css("max-height", content.prop("scrollHeight") + "px");
      header.addClass("active-header-accordion");
    }
  });
  // Accordion End
  $("#play-button").click(function ({ currentTarget }) {
    var video = $("#why-ariapay").get(0);
    if (video.paused) {
      video.play();
      $(currentTarget).fadeOut();
    } else {
      video.pause();
      $(this).text("Play Video");
    }
  });
});
// Swiper Hero Home Start
new Swiper(".home-hero-slider", {
  navigation: {
    nextEl: ".swiper-home-slider-next",
    prevEl: ".swiper-home-slider-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  on: {
    autoplayTimeLeft: function (s, time, progress) {
      $("#fill-slider").width(`${(1 - progress) * 100}%`);
    },
  },
  speed: 500,
  loop: true,
});
// Swiper Hero Home End
// Swiper Accounts Start
new Swiper(".home-accounts-slider ", {
  spaceBetween: 13,
  slidesPerView: 2.5,
  breakpoints: {
    640: {
      spaceBetween: 13,
      slidesPerView: 3.4,
    },
    1024: {
      spaceBetween: 13,
      slidesPerView: 6.5,
    },
  },
  autoplay: {
    delay: 0,
  },
  loop: true,
  speed: 1000,
  allowTouchMove: false,
});
// Swiper Accounts End
// Swiper Services Aria Start
var areaServicesSlider = new Swiper(".area-services-slider ", {
  spaceBetween: 14,
  slidesPerView: 1.1,
  breakpoints: {
    640: {
      spaceBetween: 13,
      slidesPerView: 1.3,
    },
    1024: {
      spaceBetween: 31,
      slidesPerView: 3,
    },
  },
  pagination: {
    el: ".swiper-pagination",
  },
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
});
// Swiper Services Aria End
// Blogs News Start
var blogsNewsSwiper = new Swiper(".home-blogs-news-slider ", {
  breakpoints: {
    640: {
      spaceBetween: 13,
      slidesPerView: 2,
    },
    1024: {
      spaceBetween: 19,
      slidesPerView: 3,
    },
    1280: { spaceBetween: 19, slidesPerView: 4 },
  },
  autoplay: {
    delay: 500,
  },
  spaceBetween: 20,
  slidesPerView: 1,
  loop: true,
  speed: 1000,
});
// Blogs News End
// our Companions Start
var ourCompanionSwiper = new Swiper(".home-our-companions-slider", {
  spaceBetween: 13,
  slidesPerView: 3.2,
  breakpoints: {
    640: {
      spaceBetween: 20,
      slidesPerView: 4.2,
    },
    1024: {
      spaceBetween: 37,
      slidesPerView: 5.5,
    },
    1280: {
      spaceBetween: 37,
      slidesPerView: 6.5,
    },
  },
});
// our Companions End
// New Services Start
var newServicesSlider = new Swiper(".new-services-slider", {
  spaceBetween: 13,
  slidesPerView: 1.5,
  breakpoints: {
    640: {
      spaceBetween: 13,
      slidesPerView: 1.3,
    },
    1024: {
      spaceBetween: 20,
      slidesPerView: 4,
    },
  },
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
});
// New Services End
// Suggest Services Start
var suggestService = new Swiper(".suggest-services-slider", {
  slidesPerView: 1,
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
  on: {
    autoplayTimeLeft: function (s, time, progress) {
      $(".suggest-progress-bar-slider").width(0);
      $(`.fill-slider-${s.realIndex}`).width(`${(1 - progress) * 100}%`);
    },
  },
});
// Suggest Services End
// Comments Slider Start
var commentsSwiper = new Swiper(".comments-slider", {
  direction: window.innerWidth > 768 ? "vertical" : "horizontal",
  slidesPerView: window.innerWidth > 768 ? 3 : 1.1,
  spaceBetween: 10,
});
// Comments Slider End
// Purchase Guide Start
new Swiper(".purchase-guide-slider", {
  slidesPerView: 1.15,
  spaceBetween: 10,
});
// Purchase Guide End

//ApexCharts Start
var options = {
  series: [
    {
      name: "Sales",
      data: [10, 12, 14, 2, 3, 7, 3],
    },
  ],
  chart: {
    height: "44px",
    type: "line",
    zoom: {
      enabled: false,
    },
    toolbar: {
      show: false, // Hides the toolbar
    },
  },
  xaxis: {
    labels: {
      show: false, // Hides X axis labels
    },
    axisBorder: {
      show: false, // Hides X axis border
    },
    axisTicks: {
      show: false, // Hides X axis ticks
    },
  },
  yaxis: {
    show: false, // Hides Y axis
  },
  grid: {
    show: false, // Hides grid lines
  },
};

if (document.querySelector("#recentPriceChart")) {
  
  // Initialize the chart with options
  var recentPriceChart = new ApexCharts(
    document.querySelector("#recentPriceChart"),
    options
  );
  recentPriceChart.render();
  //ApexCharts End
}