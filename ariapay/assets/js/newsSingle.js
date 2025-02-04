var singleNews = new Swiper(".singleNews", {
  loop: true,
  speed: 500,
  autoplay: {
    delay: 3000,
  },

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
$(document).ready(function () {
  $(".add-comment").click(function () {
    $(".comment-wrapper").removeClass("bg-blue-18");
    $(".new-comment").addClass("hidden");
    var firstDiv = $(this).parent().parent();
    firstDiv.addClass("bg-blue-18");
    firstDiv.find(".new-comment").removeClass("hidden");
  });
});
