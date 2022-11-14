// slider readmore link
// $(document).ready(function () {
//   $(".read-more-link , .read-more-box").hover(
//     function () {
//       $(".read-more-box").stop();
//       $(".read-more-box").animate({
//         height: "200px",
//         "padding-top": "20px",
//       });
//     },
//     function () {
//       $(".read-more-box").stop();
//       $(".read-more-box").animate({
//         height: "0",
//         "padding-top": "0px",
//       });
//     }
//   );
// });
// nav navigation styling
$(document).ready(function () {
  for (let i = 0; i < 7; i++) {
    var parallex = document.getElementById("parallex-" + i);
    var parallax = new Parallax(parallex);
  }
});
$(document).ready(function () {
  $(".slider-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    items: 1,
  });
  $(".slider-carousel").on("changed.owl.carousel", function (event) {
    executeParallex(event.page.index);
    callData(event.page.index);
  });
  function executeParallex(active_slide) {
    $(".nav-link").removeClass("nav-link-active");
    $(".nav-link-" + active_slide).addClass("nav-link-active");
  }
});
// navbar navigation functions
$("#my-nav .nav-item .nav-link").on("click", function () {
  var navId = $(this).attr("id");
  var navIdNumber = navId.split("-");
  $(".slider-carousel").trigger("to.owl.carousel", navIdNumber[2]);
});
//
// call ajax data
// on load
$(document).ready(function () {
  $("#ajax-services").load("vendor/pages/sesrvices/mobile-services/index.html");
  $.getScript("vendor/pages/sesrvices/mobile-services/script/main.js");
  $("#ajax-css").attr(
    "href",
    "vendor/pages/sesrvices/mobile-services/css/main.min.css"
  );
});

// on navigation
function callData(dataType) {
  var mobileDataLine = "vendor/pages/sesrvices/mobile-services/index.html";
  var webDataLine = "vendor/pages/sesrvices/web-services/index.html";
  var logoDataLine = "vendor/pages/sesrvices/logo-services/index.html";
  var digitizingDataLine = "vendor/pages/sesrvices/digitizing/index.html";
  var marketingDataLine = "vendor/pages/sesrvices/marketing/index.html";
  var animationDataLine = "vendor/pages/sesrvices/animation/index.html";
  var callDataLine = "vendor/pages/sesrvices/call-center/index.html";
  $("#ajax-services").html("");
  if (dataType == 0) {
    $(document).ready(function () {
      $("#ajax-services").load(mobileDataLine);
      $.getScript("vendor/pages/sesrvices/mobile-services/script/main.js");
    });
    $("#ajax-css").attr(
      "href",
      "vendor/pages/sesrvices/mobile-services/css/main.min.css"
    );
  }
  if (dataType == 1) {
    $(document).ready(function () {
      $("#ajax-services").load(webDataLine);
      $.getScript("vendor/pages/sesrvices/web-services/script/main.js");
      $("#ajax-css").attr(
        "href",
        "vendor/pages/sesrvices/web-services/css/main.min.css"
      );
    });
  }
  if (dataType == 2) {
    $(document).ready(function () {
      $("#ajax-services").load(marketingDataLine);
      $.getScript("vendor/pages/sesrvices/marketing/script/main.js");
      $.getScript(
        "vendor/pages/sesrvices/marketing/script/jquery.magnific-popup.min.js"
      );
      $.getScript(
        "vendor/pages/sesrvices/marketing/script/jquery-migrate-3.1.0.min.js"
      );
      $("#ajax-css").attr(
        "href",
        "vendor/pages/sesrvices/marketing/css/main.min.css"
      );
    });
  }

  if (dataType == 3) {
    $(document).ready(function () {
      $("#ajax-services").load(callDataLine);
      $.getScript("vendor/pages/sesrvices/call-center/script/main.js");
      $.getScript(
        "vendor/pages/sesrvices/call-center/script/jquery.magnific-popup.min.js"
      );
      $.getScript(
        "vendor/pages/sesrvices/call-center/script/jquery-migrate-3.1.0.min.js"
      );
      $("#ajax-css").attr(
        "href",
        "vendor/pages/sesrvices/call-center/css/main.min.css"
      );
    });
  }
  if (dataType == 4) {
    $(document).ready(function () {
      $("#ajax-services").load(animationDataLine);
      $.getScript("vendor/pages/sesrvices/animation/script/main.js");
      $.getScript(
        "vendor/pages/sesrvices/animation/script/jquery.magnific-popup.min.js"
      );
      $.getScript(
        "vendor/pages/sesrvices/animation/script/jquery-migrate-3.1.0.min.js"
      );
      $("#ajax-css").attr(
        "href",
        "vendor/pages/sesrvices/animation/css/main.min.css"
      );
    });
  }
  if (dataType == 5) {
    $(document).ready(function () {
      $("#ajax-services").load(logoDataLine);
      $.getScript("vendor/pages/sesrvices/logo-services/script/main.js");
      $.getScript(
        "vendor/pages/sesrvices/logo-services/script/jquery.magnific-popup.min.js"
      );
      $.getScript(
        "vendor/pages/sesrvices/logo-services/script/jquery-migrate-3.1.0.min.js"
      );
      $("#ajax-css").attr(
        "href",
        "vendor/pages/sesrvices/logo-services/css/main.min.css"
      );
    });
  }
  if (dataType == 6) {
    $(document).ready(function () {
      $("#ajax-services").load(digitizingDataLine);
      $.getScript("vendor/pages/sesrvices/digitizing/script/main.js");
      $.getScript(
        "vendor/pages/sesrvices/digitizing/script/jquery.magnific-popup.min.js"
      );
      $.getScript(
        "vendor/pages/sesrvices/digitizing/script/jquery-migrate-3.1.0.min.js"
      );
      $("#ajax-css").attr(
        "href",
        "vendor/pages/sesrvices/digitizing/css/main.min.css"
      );
    });
  }
}
