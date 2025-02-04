var waveContainerElement = document.querySelector("#waveform");
if (waveContainerElement) {
  var wavesurfer = WaveSurfer.create({
    container: "#waveform",
    waveColor: "violet",
    progressColor: "purple",
    height: 22,
    barWidth: 4,
    barRadius: 4,
    progressColor: "#19AD85",
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
});
//  Most Profitable Currencies Start
var mostProfitableCurrencies = new Swiper(".most-profitable-currencies", {
  spaceBetween: 13,
  slidesPerView: 1.5,
  breakpoints: {
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
    320: {
      spaceBetween: 13,
      slidesPerView: 1.2,
    },
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
