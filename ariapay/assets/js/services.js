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
  $("#play-button").click(function ({ currentTarget }) {
    var video = $("#why-ariapay").get(0);
    if (video.paused) {
      video.play();
      console.log({ currentTarget });
      $(currentTarget).fadeOut();
    } else {
      video.pause();
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
  // Comment Modal Start
  $(".comment-modal").click(function () {
    if (window.innerWidth < 720) {
      $("#modal-mobile-container").css("transform", "translateY(100%)");
    }
    $(".comment-modal").addClass("hidden");
  });
  $(".close-comment-modal").click(function () {
    if (window.innerWidth < 720) {
      $("#modal-mobile-container").css("transform", "translateY(100%)");
    }
    $(".comment-modal").addClass("hidden");
  });
  $(".open-modal-comment").click(function () {
    if (window.innerWidth < 720) {
      $("#modal-mobile-container").css("transform", "translateY(0)");
      $("#modal-backdrop").removeClass("hidden");
    } else {
      $(".comment-modal").removeClass("hidden");
    }
  });
  $(".content-comment-modal").click(function (e) {
    e.stopPropagation();
  });
  // Comment Modal End
});
var servicesPlans = new Swiper(".services-plans ", {
  spaceBetween: 14,
  slidesPerView: 1.1,
  breakpoints: {
    640: {
      spaceBetween: 13,
      slidesPerView: 1.3,
    },
    1024: {
      spaceBetween: 19,
      slidesPerView: 4.3,
    },
  },
});
var similarServices = new Swiper(".similar-services ", {
  spaceBetween: 14,
  slidesPerView: 1.3,
  breakpoints: {
    320: {
      spaceBetween: 13,
      slidesPerView: 1.2,
    },
    375: {
      spaceBetween: 13,
      slidesPerView: 1.4,
    },
    640: {
      spaceBetween: 13,
      slidesPerView: 2.4,
    },
    1024: {
      spaceBetween: 20,
      slidesPerView: 4,
    },
  },
});
// similar-services
new Swiper(".purchase-guide-slider", {
  slidesPerView: 1.15,
  spaceBetween: 10,
});
new Swiper(".options-slider", {
  slidesPerView: 1.7,
  spaceBetween: 10,
  breakpoints: {
    320: {
      spaceBetween: 13,
      slidesPerView: 1.2,
    },
    375: {
      spaceBetween: 13,
      slidesPerView: 1.4,
    },
  },
});
