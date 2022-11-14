//////////////////////////////////////// onepage_scroll
$(".main").onepage_scroll({
  sectionContainer: "section",
  easing: "ease",
  animationTime: 1000,
  pagination: true,
  updateURL: false,
  // beforeMove: function (index) {},
  // afterMove: function (index) {},
  loop: false,
  // keyboard: true,
  responsiveFallback: false,
  direction: "vertical",
});

/////////////////////////////////////// animation example
$(document).ready(function () {
  // animation
  $(".s-1-h1-animate")
    .delay(200)
    .queue("fx", function () {
      $(this).addClass("fadeInLeft animated");
    });
  $(".s-1-h2-animate")
    .delay(500)
    .queue("fx", function () {
      $(this).addClass("fadeInLeft animated");
    });
  $(".s-1-a-animate")
    .delay(900)
    .queue("fx", function () {
      $(this).addClass("fadeInLeft animated");
    });
  $(".s-1-img-animate")
    .delay(1200)
    .queue("fx", function () {
      $(this).addClass("fadeInRight animated");
    });
});

/////////////////////////////////////// menu

// main menu state
var menu_status = false;

// menu link action
$(".main-menu .link").hover(linkHoverOn, linkHoverOff);
// menu-drow
$("#menu-drow").on("click", drawMenu);
// menu-close
$("#menu-close").on("click", closeMenu);
// main-menu-hide
$(".main-menu").css(("display", "none"));

// functions
function drawMenu() {
  $("#canvas3 , #menu-close").css("opacity", "1");
  $("#canvas1 , #menu-drow").css("opacity", "0");
  $(".main-menu").show().css({
    left: "0",
    height: "100vh",
    "box-shadow": "0 0 15px 5px rgba(0, 0, 0, 0.1)",
  });
  $(".section").css({
    opacity: ".05",
  });
  $(".main-menu .link ,.main-menu .details").removeClass("active");
  if ($("body").hasClass("viewing-page-1")) {
    linkHoverOn("menu-home-link");
    $("#menu-home-link,#menu-home-detail").addClass("active");
  }
  if ($("body").hasClass("viewing-page-2")) {
    linkHoverOn("menu-services-link");
    $("#menu-services-link,#menu-services-detail").addClass("active");
  }
  if ($("body").hasClass("viewing-page-3")) {
    linkHoverOn("menu-videos-link");
    $("#menu-videos-link,#menu-videos-detail").addClass("active");
  }
  if ($("body").hasClass("viewing-page-4")) {
    linkHoverOn("menu-our-leaders-link");
    $("#menu-our-leaders-link,#menu-our-leaders-detail").addClass("active");
  }
  if ($("body").hasClass("viewing-page-5")) {
    linkHoverOn("menu-job-link");
    $("#menu-job-link,#menu-job-detail").addClass("active");
  }
  if ($("body").hasClass("viewing-page-6")) {
    linkHoverOn("menu-contact-link");
    $("#menu-contact-link,#menu-contact-detail").addClass("active");
  }
  $(".main-menu .link,.main-menu .details").css("color", "white");
  $(".main-menu .active").css("color", "#faa720");
}

function closeMenu() {
  menu_status = false;
  $("#canvas3 ,#menu-close").css("opacity", "0");
  $("#menu-drow").css("opacity", "1");
  if ($("body").hasClass("viewing-page-1")) {
    $("#canvas1").css("opacity", "1");
  }
  $(".main-menu").css({
    left: "100%",
    height: "0vh",
    "box-shadow": "0 0 35px 5px rgba(0, 0, 0, 0.0)",
    // display: "none",
  });
  $(".section").css("opacity", "1");
}

function linkHoverOn(id) {
  $(".main-menu .details").css(("opacity", "0"));
  if (id.currentTarget) {
    var linkId = $(id["currentTarget"]).attr("id");
    var linkId = linkId.replace("link", "detail");
  } else {
    var linkId = id.replace("link", "detail");
  }
  $("#" + linkId).css("opacity", "1");
  $(".main-menu .active").css({
    opacity: "1",
    color: "#faa720",
  });
}
function linkHoverOff(id) {
  $(".main-menu .details").css({
    opacity: "0",
    color: "white",
  });
  var linkId = $(id["currentTarget"]).attr("id");
  var linkId = linkId.replace("link", "detail");
  $(".main-menu .active").css({
    opacity: "1",
    color: "#faa720",
  });
}

/////////////////////////////////////// services - slider
$(document).ready(function () {
  $(".services-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
});

/////////////////////////////////////// video - slider
$(document).ready(function () {
  $(".video-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
});

/////////////////////////////////////// leaders - slider
$(document).ready(function () {
  $(".leaders-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    center: true,
    responsive: {
      0: {
        items: 2,
      },
      1000: {
        items: 1,
      },
    },
  });
});

/////////////////////////////////////// contact - slider
$(document).ready(function () {
  $(".contact-carousel").owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
});
/////////////////////////////////////// job - slider
$(document).ready(function () {
  $(".job-carousel").owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
});
// job hover icon appear
$(document).ready(function () {
  // load first image automatically
  $(".section-6 .jobs .job-icons .job-icon-1 img").css({
    opacity: "1",
    "margin-left": "0",
  });
  // disappera on hover
  $(".section-6 .jobs .job-container .job").hover(function () {
    $(".section-6 .jobs .job-icons .job-icon img").css({
      opacity: "0",
      "margin-left": "20px",
    });
  });
  // appear on hover
  $(".section-6 .jobs .job-container .job-1").hover(function () {
    $(".section-6 .jobs .job-icons .job-icon-1 img").css({
      opacity: "1",
      "margin-left": "0",
    });
  });
  $(".section-6 .jobs .job-container .job-2").hover(function () {
    $(".section-6 .jobs .job-icons .job-icon-2 img").css({
      opacity: "1",
      "margin-left": "0",
    });
  });
  $(".section-6 .jobs .job-container .job-3").hover(function () {
    $(".section-6 .jobs .job-icons .job-icon-3 img").css({
      opacity: "1",
      "margin-left": "0",
    });
  });
  $(".section-6 .jobs .job-container .job-4").hover(function () {
    $(".section-6 .jobs .job-icons .job-icon-4 img").css({
      opacity: "1",
      "margin-left": "0",
    });
  });
});

// job apply form display button
$(".jobs button, .job-mobile button").click(function () {
  $(".jobs , .job-mobile").css({
    opacity: ".05",
  });
  $(".job-form").css({
    opacity: "1",
    left: "0",
  });
});
$(".job-form .close-form").click(function () {
  $(".jobs , .job-mobile").css({
    opacity: "1",
  });
  $(".job-form").css({
    opacity: "0",
    left: "100%",
  });
});
//
$(".jobs .job-container .job .button-1").click(function () {
  var jobTitle = $(".jobs .job-container .job-1 h3").html();
  $(".job-form .form form .form-group #appling-for").val(jobTitle);
});
$(".jobs .job-container .job .button-2").click(function () {
  var jobTitle = $(".jobs .job-container .job-2 h3").html();
  $(".job-form .form form .form-group #appling-for").val(jobTitle);
});
$(".jobs .job-container .job .button-3").click(function () {
  var jobTitle = $(".jobs .job-container .job-3 h3").html();
  $(".job-form .form form .form-group #appling-for").val(jobTitle);
});
$(".jobs .job-container .job .button-4").click(function () {
  var jobTitle = $(".jobs .job-container .job-4 h3").html();
  $(".job-form .form form .form-group #appling-for").val(jobTitle);
});


/////////////////////////////////////// testimonial readmore

if (window.matchMedia("(max-width: 992px)").matches) {
  $(".section-7 .read-more-button").each(function (i, obj) {
    var toggle = false;
    $(this).parent().find("p").css("height", "130px");
    $(this).click(function () {
      if (toggle == false) {
        $(this).parent().find("p").css("height", "unset");
        $(this).parent().parent().find(".img-conainer").css("max-width", "0px");
        toggle = true;
      } else if (toggle == true) {
        $(this).parent().find("p").css("height", "130px");
        $(this)
          .parent()
          .parent()
          .find(".img-conainer")
          .css("max-width", "160px");
        toggle = false;
      }
    });
  });
}