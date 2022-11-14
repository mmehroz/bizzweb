// sticky navbar

// var headerLogo = document.getElementById("headerLogo");
// var navigationBar = document.getElementById("navigationBar");
// var navbarOffSet = 300;

// function stickyNavbar() {
//     if (window.pageYOffset >= navbarOffSet) {
//         headerLogo.style.width = '370px';
//         navigationBar.style.boxShadow = '0 0 15px 2px rgba(0, 0, 0, 1)';

//     } else {
//         headerLogo.style.width = '450px';
//         navigationBar.style.boxShadow = '0 0 15px 1px rgba(0, 0, 0, 0.0)';

//     }
// }
// window.onscroll = function () {
//     stickyNavbar()
// };

// services slider
$(document).ready(function () {
  $(".services-carousel").owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 7000,
    smartSpeed: 1000,
    responsive: {
      0: {
        items: 1,
      },
      500: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });
});

// portfolio slider
$(document).ready(function () {
  $(".portfolio-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    variableWidth: true,
    infinite: true,
    cssEase: "linear",
    touchMove: true,
    autoplay: true,
    autoplaySpeed: 3000,
    prevArrow: '<button class="slick-prev"> < </button>',
    nextArrow: '<button class="slick-next"> > </button>',
  });
});

(function ($) {
  // wp-navbar
  //   wpNavbar = function () {
  //     var i = 0;
  //     $(".navigationBar .wp-item").waypoint(
  //       function (direction) {
  //         if (direction == "down") {
  //           var wpItem = $(this.element);
  //           $(this.element).each(function () {
  //             setTimeout(function () {
  //               wpItem.addClass("fadeInUp animated");
  //             }, 60 * i++);
  //           }, 100);
  //         }
  //       },
  //       {
  //         offset: "100%",
  //       }
  //     );
  //   };

  // wp-slider
  //   wpSlider = function () {
  //     var i = 0;
  //     $(".slider .wp-item").waypoint(
  //       function (direction) {
  //         if (direction == "down") {
  //           var wpItem = $(this.element);
  //           $(this.element).each(function () {
  //             setTimeout(function () {
  //               wpItem.addClass("fadeInDown animated");
  //             }, 60 * i++);
  //           }, 100);
  //         }
  //       },
  //       {
  //         offset: "100%",
  //       }
  //     );
  //   };
  //   wpItemSlider = function () {
  //     var i = 0;
  //     $(".slider .wp-slider-item").waypoint(
  //       function (direction) {
  //         if (direction == "down") {
  //           var wpItem = $(this.element);
  //           $(this.element).each(function () {
  //             setTimeout(function () {
  //               wpItem.addClass("fadeInDown animated");
  //             }, 360 * i++);
  //           }, 100);
  //         }
  //       },
  //       {
  //         offset: "70%",
  //       }
  //     );
  //   };
  // wp-about
  // wpAbout = function () {
  //   var i = 0;
  //   $(".about .wp-item").waypoint(
  //     function (direction) {
  //       if (direction == "down") {
  //         var wpItem = $(this.element);
  //         $(this.element).each(function () {
  //           setTimeout(function () {
  //             wpItem.addClass("fadeInDown animated");
  //           }, 60 * i++);
  //         }, 100);
  //       }
  //     },
  //     {
  //       offset: "95%",
  //     }
  //   );
  // };
  // wp-features
  // wpFeatures = function () {
  //   var i = 0;
  //   $(".features .wp-item").waypoint(
  //     function (direction) {
  //       if (direction == "down") {
  //         var wpItem = $(this.element);
  //         $(this.element).each(function () {
  //           setTimeout(function () {
  //             wpItem.addClass("fadeInDown animated");
  //           }, 10 * i++);
  //         }, 100);
  //       }
  //     },
  //     {
  //       offset: "95%",
  //     }
  //   );
  // };
  // wp-native-app
  // wpNativeApp = function () {
  //   var i = 0;
  //   $(".native-app .wp-item").waypoint(
  //     function (direction) {
  //       if (direction == "down") {
  //         var wpItem = $(this.element);
  //         $(this.element).each(function () {
  //           setTimeout(function () {
  //             wpItem.addClass("fadeInDown animated");
  //           }, 60 * i++);
  //         }, 100);
  //       }
  //     },
  //     {
  //       offset: "95%",
  //     }
  //   );
  // };
  // wp-native-app-portfolio
  // wpNativeAppPortfolio = function () {
  //   var i = 0;
  //   $(".portfolio .wp-item").waypoint(
  //     function (direction) {
  //       if (direction == "down") {
  //         var wpItem = $(this.element);
  //         $(this.element).each(function () {
  //           setTimeout(function () {
  //             wpItem.addClass("fadeInDown animated");
  //           }, 10 * i++);
  //         }, 100);
  //       }
  //     },
  //     {
  //       offset: "95%",
  //     }
  //   );
  // };
  // wp-banner-1
  // wpBanner1 = function () {
  //   var i = 0;
  //   $(".banner-1 .wp-item").waypoint(
  //     function (direction) {
  //       if (direction == "down") {
  //         var wpItem = $(this.element);
  //         $(this.element).each(function () {
  //           setTimeout(function () {
  //             wpItem.addClass("fadeInDown animated");
  //           }, 60 * i++);
  //         }, 100);
  //       }
  //     },
  //     {
  //       offset: "95%",
  //     }
  //   );
  // };

  // wp-contact
  // wpContact = function () {
  //   var i = 0;
  //   $(".contact .wp-item").waypoint(
  //     function (direction) {
  //       if (direction == "down") {
  //         var wpItem = $(this.element);
  //         $(this.element).each(function () {
  //           setTimeout(function () {
  //             wpItem.addClass("fadeInDown animated");
  //           }, 60 * i++);
  //         }, 100);
  //       }
  //     },
  //     {
  //       offset: "95%",
  //     }
  //   );
  // };

  window.addEventListener("load", function () {
    // wpNavbar();
    // wpSlider();
    // wpItemSlider();
    wpAbout();
    wpFeatures();
    wpNativeApp();
    wpNativeAppPortfolio();
    wpBanner1();
    wpContact();
  });
})(jQuery);
