$(document).ready(function () {
  const videoPlayerContainer = $("#video-player-container");
  $("#video-player").click(function ({ currentTarget }) {
    var video = $("#video").get(0);
    if (video.paused) {
      video.play();
      videoPlayerContainer.fadeOut();
    } else {
      video.pause();
      $(this).text("Play Video");
    }
  });
  $(".add-comment").click(function () {
    console.log("salam");

    $(".comment-wrapper").removeClass("bg-blue-18");
    $(".new-comment").addClass("hidden");
    var firstDiv = $(this).parent().parent();
    firstDiv.addClass("bg-blue-18");
    firstDiv.find(".new-comment").removeClass("hidden");
  });
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
