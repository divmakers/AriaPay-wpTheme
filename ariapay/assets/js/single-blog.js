$(document).ready(function () {
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
});
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
    delay: 0,
  },
  loop: true,
  speed: 1000,
  spaceBetween: 20,
  slidesPerView: 1,
});
// Blogs News End
