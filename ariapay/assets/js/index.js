// Toggler Desktop  Start
const toggleSwitch = document.getElementById("toggleSwitch");
toggleSwitch.addEventListener("change", function () {
  const dot = document.querySelector(".dot");
  const body = document.body;
  if (this.checked) {
    dot.classList.add("translate-x-full");
    localStorage.setItem("mode", "dark");
  } else {
    dot.classList.remove("translate-x-full");
    localStorage.setItem("mode", "light");
  }
  body.classList.toggle("dark");
  updateElements(this.checked);
});
if (localStorage.getItem("mode") === "dark") {
  document.body.classList.add("dark");
  updateElements(true);
  $("#toggleSwitch").prop("checked", true);
}
// Toggler Desktop End
// Toggler mobile  Start
const toggleSwitch2 = document.getElementById("toggleSwitch2");
if(toggleSwitch2){
  toggleSwitch2.addEventListener("change", function () {
    const dot = document.querySelector(".dot2");
    const body = document.body;
    if (this.checked) {
      dot.classList.add("translate-x-full");
      localStorage.setItem("mode", "dark");
    } else {
      dot.classList.remove("translate-x-full");
      localStorage.setItem("mode", "light");
    }
    body.classList.toggle("dark");
    updateElements(this.checked);
  });
}
if (localStorage.getItem("mode") === "dark") {
  document.body.classList.add("dark");
  updateElements(true);
  $("#toggleSwitch2").prop("checked", true);
}
// Toggler mobile End
function updateElements(isDark) {
  $("#logo-header").attr(
    "src",
    isDark
      ? localdata.assetsurl + "/images/logo-dark.png"
      : localdata.assetsurl + "/images/logo-light.png"
  );
  $("#logo-footer").attr(
    "src",
    isDark
      ? localdata.assetsurl + "/images/logo-dark.png"
      : localdata.assetsurl + "/images/logo-light.png"
  );
}

$(document).ready(function () {
  // Drawer Start
  $(".menu-item-header").click(function () {
    var content = $(this).next(".menu-item-content");
    $(".menu-item-content").not(content).css("max-height", 0);
    $(".menu-item-header").not(this).removeClass("active");
    $(".menu-item").not($(this).parent()).removeClass("menu-item-active");
    $(this).toggleClass("active");
    $(this).parent().toggleClass("menu-item-active");
    if (content.css("max-height") && content.css("max-height") !== "0px") {
      content.css("max-height", 0);
    } else {
      content.css("max-height", content.prop("scrollHeight") + "px");
    }
  });
  $(".nested-menu-item-header").click(function () {
    var content = $(this).next(".nested-menu-item-content");
    $(".nested-menu-item-content").not(content).css("max-height", 0);
    $(".nested-menu-item-header").not(this).removeClass("active");
    $(".nested-menu-item")
      .not($(this).parent())
      .removeClass("nested-menu-item-active");
    $(this).toggleClass("active");
    $(this).parent().toggleClass("nested-menu-item-active");
    if (content.css("max-height") && content.css("max-height") !== "0px") {
      content.css("max-height", 0);
    } else {
      content.css("max-height", content.prop("scrollHeight") + "px");
    }
  });
  // Drawer End

  // Header Start
  $(window).on("scroll", function () {
    var header = $("#header");

    if ($(this).scrollTop() > 200) {
      if (window.innerWidth > 720) {
        header.css("max-height", 100);
        $("#scrollBar").css("top", 100);
        $("#mega-menu").css("top", 100);
      }
    } else {
      if (window.innerWidth > 720) {
        header.css("max-height", 116);
        $("#scrollBar").css("top", 116);
        $("#mega-menu").css("top", 116);
      }
    }
  });
  function updateWidth() {
    var windowWidth = $(window).width();
    if (windowWidth <= 768) {
      $("#mega-menu").fadeOut();
      $("#header").animate(
        {
          minHeight: "60px",
        },
        500
      );
    }
  }

  updateWidth();

  $(window).resize(function () {
    updateWidth();
  });
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
    if ($(this).hasClass("drawer-is-open")) {
      $(this).removeClass("drawer-is-open");
    } else {
      $(this).addClass("drawer-is-open");
    }
    if ($(this).hasClass("drawer-is-open")) {
      $("#drawer").addClass("open");
      $("#drawer-back-drop").fadeIn(1000);
    } else {
      $("#drawer").removeClass("open");
      $("#drawer-back-drop").fadeOut(1000);
    }
  });
  $("#close-drawer").click(function () {
    $("#drawer").removeClass("open");
    $("#drawer-back-drop").fadeOut(1000);
  });
  $("#drawer-back-drop").click(function () {
    $("#drawer").removeClass("open");
    $("#drawer-back-drop").fadeOut(1000);
    if ($("#open-drawer").hasClass("drawer-is-open")) {
      $("#open-drawer").removeClass("drawer-is-open");
    } else {
      $("#open-drawer").addClass("drawer-is-open");
    }
  });
  // Drawer End
  // Header End
  // Search Box Start
  $("#open-search-box").click(function () {
    $("#backdrop-search-box").fadeIn();
    $("#search-box").slideDown();
    const megaMenu = $("#mega-menu");
    megaMenu.css("max-height", 0 + "px");
    $("#services").removeClass("active-menu");
    $("#blogs").removeClass("active-menu");
    $(".menu-backdrop").fadeOut(500);
    setTimeout(() => {
      $("#services-mega-menu").addClass("hidden");
      $("#blogs-mega-menu").addClass("hidden");
      $(".active-tab-menu").css("top", 22);
    }, 500);
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
  // Scroll Progress Start
  $(window).scroll(function () {
    var winScroll = $(this).scrollTop();
    var height = $(document).height() - $(window).height();
    var scrolled = (winScroll / height) * 100;
    $("#scrollBar").width(scrolled + "%");
  });

  // Scroll Progress End

  // Submit Order Start
  $("#submit-order").click(function () {
    if (window.innerWidth >= 768) {
      $("#order-web").removeClass("hidden");
    }
    if (window.innerWidth < 768) {
      $("#modal-order-backdrop").removeClass("hidden");
      $("#modal-order-mobile").css("transform", "translateY(0)");
    }
  });
  $("#order-modal-content").click(function (e) {
    e.stopPropagation();
  });

  $("#order-web").click(function () {
    $("#order-web").addClass("hidden");
    $(".first-step").removeClass("hidden");
    $(".second-step").addClass("hidden");
  });

  $("#order-mobile").click(function () {
    $("#order-mobile").addClass("hidden");
    $(".first-step").removeClass("hidden");
    $(".second-step").addClass("hidden");
  });

  $(".first-step-btn").click(function () {
    $(".first-step").addClass("hidden");
    $(".second-step").removeClass("hidden");
  });
  $("#close-order-modal").click(function () {
    $("#order-web").addClass("hidden");
    $(".first-step").removeClass("hidden");
    $(".second-step").addClass("hidden");
  });
  $("#modal-order-backdrop").click(function () {
    $("#modal-order-backdrop").addClass("hidden");
    $("#modal-order-mobile").css("transform", "translateY(100%)");
  });
  $("#close-order-mobile-modal").click(function () {
    $("#modal-order-backdrop").addClass("hidden");
    $("#modal-order-mobile").css("transform", "translateY(100%)");
  });
  // Submit Order End
  // Dropdown Start
  $(".dropdown-header").click(function () {
    $(this).next(".dropdown-content").removeClass("hidden");
  });
  $(".dropdown div").click(function () {});
  $(document).click(function (event) {
    if (!$(event.target).closest(".dropdown").length) {
      $(".dropdown-content").addClass("hidden");
    }
  });
  // Dropdown End
  // Drawer Content Start
  var viewportHeight = $(window).height();
  var safeAreaTop =
    parseFloat(
      getComputedStyle(document.documentElement).getPropertyValue(
        "--safe-area-top"
      )
    ) || 0;
  var safeAreaBottom =
    parseFloat(
      getComputedStyle(document.documentElement).getPropertyValue(
        "--safe-area-bottom"
      )
    ) || 0;
  var usableHeight = viewportHeight - safeAreaTop - safeAreaBottom - 280;
  $("#drawer-content").css({
    height: usableHeight + "px",
    "max-height": usableHeight + "px",
  });
  // Drawer Content End
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
