

var waveContainerElement = document.querySelector("#waveform");
if (waveContainerElement) {
  var wavesurfer = WaveSurfer.create({
    container: "#waveform",
    waveColor: "violet",
    progressColor: "purple",
    height: 22,
    barWidth: 4,
    barRadius: 4,
    progressColor: "#2860E6",
    waveColor: "#D9D9D9",
    url: localdata.assetsurl + "/audio/1.mp3",
  });
}

$(document).ready(function () {
  $("#play-wave").click(function () {
    if ($(this).hasClass("is-playing")) {
      wavesurfer.pause();
      $(this).children(".play-svg").removeClass("hidden");
      $(this).children(".pause-svg").addClass("hidden");
      $(this).removeClass("is-playing");
    } else {
      wavesurfer.play();
      $(this).children(".pause-svg").removeClass("hidden");
      $(this).children(".play-svg").addClass("hidden");
      $(this).addClass("is-playing");
    }
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
  $(".tab-hero").click(function () {
    $(".tab-hero").removeClass("active-tab-hero");
    $(this).addClass("active-tab-hero");
    console.log($(this).attr("id"));
    if ($(this).attr("id") === "buy") {
      $("#buy-content").removeClass("hidden");
      $("#sell-content").addClass("hidden");
    } else {
      $("#buy-content").addClass("hidden");
      $("#sell-content").removeClass("hidden");
    }
  });
});
//  Most Profitable Currencies Start
var mostProfitableCurrencies = new Swiper(".most-profitable-currencies", {
  spaceBetween: 13,
  slidesPerView: 1.5,
  breakpoints: {
    100: {
      spaceBetween: 13,
      slidesPerView: 1.1,
    },
    640: {
      spaceBetween: 13,
      slidesPerView: 1.3,
    },
    1024: {
      spaceBetween: 18,
      slidesPerView: 4,
    },
  },
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
});
//  Most Profitable Currencies End
//  New Profitable Currencies Start
var newProfitableCurrencies = new Swiper(".new-profitable-currencies", {
  spaceBetween: 13,
  slidesPerView: 1.5,
  breakpoints: {
    100: {
      spaceBetween: 13,
      slidesPerView: 1.1,
    },
    640: {
      spaceBetween: 13,
      slidesPerView: 1.3,
    },
    1024: {
      spaceBetween: 18,
      slidesPerView: 4,
    },
  },
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },
});
//  New Profitable Currencies End
// Similar Services Start
var similarServices = new Swiper(".similar-services ", {
  spaceBetween: 14,
  slidesPerView: 1.3,
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
});
// Similar Services End
// Options Start
new Swiper(".options-slider", {
  slidesPerView: 1.7,
  spaceBetween: 10,
});
// Options End
// Purchase Guide Start
new Swiper(".purchase-guide-slider", {
  slidesPerView: 1.15,
  spaceBetween: 10,
});
// Purchase Guide End
// Comments Slider Start
var commentsSwiper = new Swiper(".comments-slider", {
  direction: window.innerWidth > 768 ? "vertical" : "horizontal",
  slidesPerView: window.innerWidth > 768 ? 3 : 1.1,
  spaceBetween: 10,
});
// Comments Slider End
