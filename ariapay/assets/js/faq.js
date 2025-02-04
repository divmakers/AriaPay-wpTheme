$(document).ready(function () {
  $(".tab-item").click(function ({ target }) {
    $(".tab-item").removeClass("active");
    $(target).addClass("active");
    $(".tab-content").removeClass("active");
    $($(target).data("target")).addClass("active");
  });
});

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
