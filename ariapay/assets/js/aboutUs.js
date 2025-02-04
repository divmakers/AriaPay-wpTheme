$(document).ready(function () {
  $("#play-button").click(function ({ currentTarget }) {
    console.log("salam");
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
