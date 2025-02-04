$(document).ready(function () {
  var audioPlayer = document.getElementById("audio-player");
  var playPauseBtn = document.getElementById("play-pause-btn");
  var volumeSlider = document.getElementById("volume-slider");
  var seekSlider = document.getElementById("seek-slider");
  var currentTimeDisplay = document.getElementById("current-time");
  var forwardBtn = document.getElementById("forward-btn");
  var backwardBtn = document.getElementById("backward-btn");

  $(playPauseBtn).on("click", function () {
    if (audioPlayer.paused) {
      audioPlayer.play();
    } else {
      audioPlayer.pause();
    }
  });

  $(volumeSlider).on("input", function () {
    audioPlayer.volume = volumeSlider.value;
  });
  $(forwardBtn).on("click", function () {
    audioPlayer.currentTime += 10;
  });
  $(backwardBtn).on("click", function () {
    audioPlayer.currentTime -= 10;
  });
  $(audioPlayer).on("timeupdate", function () {
    var seekValue = audioPlayer.currentTime / audioPlayer.duration;
    console.log({ seekValue });
    seekSlider.value = seekValue;
    var currentTime = formatTime(audioPlayer.currentTime);
    currentTimeDisplay.textContent = currentTime;
  });
  $(seekSlider).on("input", function () {
    var seekTime = audioPlayer.duration * seekSlider.value;
    audioPlayer.currentTime = seekTime;
  });
  function formatTime(seconds) {
    var minutes = Math.floor(seconds / 60);
    var remainingSeconds = Math.floor(seconds % 60);
    remainingSeconds =
      remainingSeconds < 10 ? "0" + remainingSeconds : remainingSeconds;
    return minutes + ":" + remainingSeconds;
  }
});
var telegramPlans = new Swiper(".telegram-plans ", {
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
});
new Swiper(".purchase-guide-slider", {
  slidesPerView: 1.15,
  spaceBetween: 10,
});
