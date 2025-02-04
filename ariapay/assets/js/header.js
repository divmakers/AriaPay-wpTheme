$(document).ready(function () {
  // Header Start
  $("#services").hover(
    function () {
      $("#services").addClass("active-menu");
      $("#blogs").removeClass("active-menu");
      const megaMenu = $("#mega-menu");
      megaMenu.css("max-height", 1000 + "px");
      $(".menu-backdrop").fadeIn(500);
      $("#services-mega-menu").removeClass("hidden");
      $("#blogs-mega-menu").addClass("hidden");
    },
    function () {}
  );
  $("#blogs").hover(
    function () {
      $("#blogs").addClass("active-menu");
      $("#services").removeClass("active-menu");

      const megaMenu = $("#mega-menu");
      megaMenu.css("max-height", 1000 + "px");
      $(".menu-backdrop").fadeIn(500);
      $("#services-mega-menu").addClass("hidden");
      $("#blogs-mega-menu").removeClass("hidden");
    },
    function () {}
  );
  $("#mega-menu").hover(
    function () {},
    function (e) {
      var element = $(this);
      var offset = element.offset();
      var height = element.outerHeight();
      var mouseY = e.pageY;
      if (mouseY >= offset.top + height) {
        const megaMenu = $("#mega-menu");
        megaMenu.css("max-height", 0 + "px");
        $("#services").removeClass("active-menu");
        $("#blogs").removeClass("active-menu");
        $(".menu-backdrop").fadeOut(500);
        setTimeout(() => {
          console.log("timeout");
          $("#services-mega-menu").addClass("hidden");
          $("#blogs-mega-menu").addClass("hidden");
          $(".active-tab-menu").css("top", 22);
        }, 500);
      }
    }
  );

  // Services Start
  $("#services-inner-btn").hover(
    function () {
      $(".active-tab-menu").css("top", 18);
      animateTab("#services-area");
      removeAnimate("#payment-area");
      removeAnimate("#card-area");
    },
    function () {
      // removeAnimate("#services-area");
    }
  );
  $("#payment-inner-btn").hover(
    function () {
      $(".active-tab-menu").css("top", 82);
      animateTab("#payment-area");
      removeAnimate("#card-area");
      removeAnimate("#services-area");
    },
    function () {
      // removeAnimate("#payment-area");
    }
  );

  $("#card-inner-btn").hover(
    function () {
      $(".active-tab-menu").css("top", 142);
      animateTab("#card-area");
      removeAnimate("#services-area");
      removeAnimate("#payment-area");
    },
    function () {
      // removeAnimate("#card-area");
    }
  );
  // Services End

  // Blogs Start
  $("#news-inner-btn").hover(
    function () {
      $(".active-tab-menu").css("top", 18);
      animateTab("#news-area");
      removeAnimate("#tutorial-area");
      removeAnimate("#blogs-area");
    },
    function () {}
  );
  $("#tutorial-inner-btn").hover(
    function () {
      $(".active-tab-menu").css("top", 82);
      animateTab("#tutorial-area");
      removeAnimate("#news-area");
      removeAnimate("#blogs-area");
    },
    function () {}
  );
  $("#blogs-inner-btn").hover(
    function () {
      $(".active-tab-menu").css("top", 142);
      animateTab("#blogs-area");
      removeAnimate("#news-area");
      removeAnimate("#tutorial-area");
    },
    function () {}
  );
  // Blogs End
  // Drawer Start
  $("#open-drawer").click(function () {
    $("#drawer").addClass("open");
    $("#drawer-back-drop").fadeIn(1000);
  });
  $("#close-drawer").click(function () {
    $("#drawer").removeClass("open");
    $("#drawer-back-drop").fadeOut(1000);
  });
  $("#drawer-back-drop").click(function () {
    $("#drawer").removeClass("open");
    $("#drawer-back-drop").fadeOut(1000);
  });
  // Drawer End
  // Header End
  // Search Box Start
  $("#open-search-box").click(function () {
    $("#backdrop-search-box").fadeIn();
    $("#search-box").slideDown();
  });
  $("#backdrop-search-box").click(function () {
    $("#backdrop-search-box").fadeOut();
    $("#search-box").slideUp();
  });
  $("#open-modal-search").click(function () {
    $("#mobile-search-box").removeClass("hidden");
  });
  $("#mobile-search-box").click(function () {
    $(this).addClass("hidden");
  });
  $("#close-mobile-search").click(function () {
    $("#mobile-search-box").addClass("hidden");
  });
  $("#mobile-search-box-content").click(function (e) {
    e.stopPropagation();
  });
  // Search Box End
  // search tab start

  $(".search-click").click(function () {
    $(".suggestion-search").addClass("hidden");
    $(".search-click").removeClass("active-search");
    var contentID = $(this).attr("id").replace("search", "item");
    $(`#${contentID}`).removeClass("hidden");
    $(this).addClass("active-search");
  });
  // Search Box End
});
function animateTab(id) {
  $(id).removeClass("hidden");
  setTimeout(() => {
    $(id).css("opacity", 1);
  }, 100);
  setTimeout(() => {
    $(id).removeClass("translate-y-10");
  }, 100);
}
function removeAnimate(id) {
  $(id).addClass("hidden");
  $(id).css("opacity", 0);
  $(id).removeClass("translate-y-0");
  $(id).addClass("translate-y-10");
}
