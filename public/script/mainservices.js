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
  $("#ajax-services").load("resources/views/pages/sesrvices/mobile-services/index.blade.php");
  $.getScript("public/mobile-services/script/main.js");
  $("#ajax-css").attr(
    "href",
    "public/mobile-services/css/main.min.css"
  );
});

// on navigation
function callData(dataType) {
  var mobileDataLine = "resources/views/pages/sesrvices/mobile-services/index.blade.php";
  var webDataLine = "resources/views/pages/sesrvices/web-services/index.blade.php";
  var logoDataLine = "resources/views/pages/sesrvices/logo-services/index.blade.php";
  var digitizingDataLine = "resources/views/pages/sesrvices/digitizing/index.blade.php";
  var marketingDataLine = "resources/views/pages/sesrvices/marketing/index.blade.php";
  var animationDataLine = "resources/views/pages/sesrvices/animation/index.blade.php";
  var callDataLine = "resources/views/pages/sesrvices/call-center/index.blade.php";
  $("#ajax-services").html("");
  if (dataType == 0) {
    $(document).ready(function () {
      $("#ajax-services").load(mobileDataLine);
      $.getScript("public/mobile-services/script/main.js");
    });
    $("#ajax-css").attr(
      "href",
      "public/mobile-services/css/main.min.css"
    );
  }
  if (dataType == 1) {
    $(document).ready(function () {
      $("#ajax-services").load(webDataLine);
      $.getScript("public/web-services/script/main.js");
      $("#ajax-css").attr(
        "href",
        "public/web-services/css/main.min.css"
      );
    });
  }
  if (dataType == 2) {
    $(document).ready(function () {
      $("#ajax-services").load(marketingDataLine);
      $.getScript("public/marketing/script/main.js");
      $.getScript(
        "public/marketing/script/jquery.magnific-popup.min.js"
      );
      $.getScript(
        "public/marketing/script/jquery-migrate-3.1.0.min.js"
      );
      $("#ajax-css").attr(
        "href",
        "public/marketing/css/main.min.css"
      );
    });
  }

  if (dataType == 3) {
    $(document).ready(function () {
      $("#ajax-services").load(callDataLine);
      $.getScript("public/call-center/script/main.js");
      $.getScript(
        "public/call-center/script/jquery.magnific-popup.min.js"
      );
      $.getScript(
        "public/call-center/script/jquery-migrate-3.1.0.min.js"
      );
      $("#ajax-css").attr(
        "href",
        "public/call-center/css/main.min.css"
      );
    });
  }
  if (dataType == 4) {
    $(document).ready(function () {
      $("#ajax-services").load(animationDataLine);
      $.getScript("public/animation/script/main.js");
      $.getScript(
        "public/animation/script/jquery.magnific-popup.min.js"
      );
      $.getScript(
        "public/animation/script/jquery-migrate-3.1.0.min.js"
      );
      $("#ajax-css").attr(
        "href",
        "public/animation/css/main.min.css"
      );
    });
  }
  if (dataType == 5) {
    $(document).ready(function () {
      $("#ajax-services").load(logoDataLine);
      $.getScript("public/logo-services/script/main.js");
      $.getScript(
        "public/logo-services/script/jquery.magnific-popup.min.js"
      );
      $.getScript(
        "public/logo-services/script/jquery-migrate-3.1.0.min.js"
      );
      $("#ajax-css").attr(
        "href",
        "public/logo-services/css/main.min.css"
      );
    });
  }
  if (dataType == 6) {
    $(document).ready(function () {
      $("#ajax-services").load(digitizingDataLine);
      $.getScript("public/digitizing/script/main.js");
      $.getScript(
        "public/digitizing/script/jquery.magnific-popup.min.js"
      );
      $.getScript(
        "public/digitizing/script/jquery-migrate-3.1.0.min.js"
      );
      $("#ajax-css").attr(
        "href",
        "public/digitizing/css/main.min.css"
      );
    });
  }
}
