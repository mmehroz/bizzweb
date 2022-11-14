// sticky navbar

// var headerLogo = document.getElementById("headerLogo");
// var navigationBar = document.getElementById("navigationBar");
// var navbarOffSet = 500;

// function stickyNavbar() {
//   if (window.pageYOffset >= navbarOffSet) {
//     headerLogo.style.width = "370px";
//     navigationBar.style.boxShadow = "0 0 5px 2px rgba(0, 0, 0, 1)";
//   } else {
//     headerLogo.style.width = "450px";
//     navigationBar.style.boxShadow = "0 0 15px 1px rgba(0, 0, 0, 0.0)";
//   }
// }
// window.onscroll = function () {
//   stickyNavbar();
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
      578: {
        items: 2,
      },
      768: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });
});

// our work slider
$(document).ready(function () {
  $(".our-work-carousel").owlCarousel({
    // loop: true,
    // autoplay: true,
    // autoplayTimeout: 7000,
    // smartSpeed: 2000,
    responsive: {
      0: {
        items: 1,
      },
      500: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
});

// (function ($) {

//     // wp-navbar
//     wpNavbar = function () {
//         var i = 0;
//         $(".navigationBar .wp-item").waypoint(function (direction) {
//             if (direction == 'down') {
//                 var wpItem = $(this.element);
//                 $(this.element).each(function () {
//                     setTimeout(function () {
//                         wpItem.addClass('fadeInUp animated');
//                     }, 60 * i++);
//                 }, 100);
//             }
//         }, {
//             offset: '100%'
//         });
//     }

//     // wp-slider
//     wpSlider = function () {
//         var i = 0;
//         $(".slider .wp-item").waypoint(function (direction) {
//             if (direction == 'down') {
//                 var wpItem = $(this.element);
//                 $(this.element).each(function () {
//                     setTimeout(function () {
//                         wpItem.addClass('fadeInDown animated');
//                     }, 60 * i++);
//                 }, 100);
//             }
//         }, {
//             offset: '100%'
//         });
//     }
//     wpItemSlider = function () {
//         var i = 0;
//         $(".slider .wp-slider-item").waypoint(function (direction) {
//             if (direction == 'down') {
//                 var wpItem = $(this.element);
//                 $(this.element).each(function () {
//                     setTimeout(function () {
//                         wpItem.addClass('fadeInDown animated');
//                     }, 360 * i++);
//                 }, 100);
//             }
//         }, {
//             offset: '70%'
//         });
//     }
//     // wp-about
//     wpAbout = function () {
//         var i = 0;
//         $(".about .wp-item").waypoint(function (direction) {
//             if (direction == 'down') {
//                 var wpItem = $(this.element);
//                 $(this.element).each(function () {
//                     setTimeout(function () {
//                         wpItem.addClass('fadeInDown animated');
//                     }, 60 * i++);
//                 }, 100);
//             }
//         }, {
//             offset: '95%'
//         });
//     }
//     // wp-category
//     wpCategory = function () {
//         var i = 0;
//         $(".category .wp-item").waypoint(function (direction) {
//             if (direction == 'down') {
//                 var wpItem = $(this.element);
//                 $(this.element).each(function () {
//                     setTimeout(function () {
//                         wpItem.addClass('fadeInDown animated');
//                     }, 60 * i++);
//                 }, 100);
//             }
//         }, {
//             offset: '95%'
//         });
//     }

//     // wp-branding-service
//     wpBrandingService = function () {
//         var i = 0;
//         $(".branding-service .wp-item").waypoint(function (direction) {
//             if (direction == 'down') {
//                 var wpItem = $(this.element);
//                 $(this.element).each(function () {
//                     setTimeout(function () {
//                         wpItem.addClass('fadeInDown animated');
//                     }, 60 * i++);
//                 }, 100);
//             }
//         }, {
//             offset: '95%'
//         });
//     }

//     // wp-webdesign-service
//     wpWebdesignService = function () {
//         var i = 0;
//         $(".webdesign-services .wp-item").waypoint(function (direction) {
//             if (direction == 'down') {
//                 var wpItem = $(this.element);
//                 $(this.element).each(function () {
//                     setTimeout(function () {
//                         wpItem.addClass('fadeInDown animated');
//                     }, 60 * i++);
//                 }, 100);
//             }
//         }, {
//             offset: '95%'
//         });
//     }

//     // wp-print-design-service
//     wpPrintDesignService = function () {
//         var i = 0;
//         $(".print-design-services .wp-item").waypoint(function (direction) {
//             if (direction == 'down') {
//                 var wpItem = $(this.element);
//                 $(this.element).each(function () {
//                     setTimeout(function () {
//                         wpItem.addClass('fadeInDown animated');
//                     }, 60 * i++);
//                 }, 100);
//             }
//         }, {
//             offset: '95%'
//         });

//         var i = 0;
//         $(".print-design-services .wp-item-teb").waypoint(function (direction) {
//             if (direction == 'down') {
//                 var wpItem = $(this.element);
//                 $(this.element).each(function () {
//                     setTimeout(function () {
//                         wpItem.addClass('fadeInUp animated');
//                     }, 60 * i++);
//                 }, 100);
//             }
//         }, {
//             offset: '95%'
//         });
//     }

//     // wp-graphicdesign-services
//     wpGraphicdesignServices = function () {
//         var i = 0;
//         $(".graphicdesign-services .wp-item").waypoint(function (direction) {
//             if (direction == 'down') {
//                 var wpItem = $(this.element);
//                 $(this.element).each(function () {
//                     setTimeout(function () {
//                         wpItem.addClass('fadeInDown animated');
//                     }, 60 * i++);
//                 }, 100);
//             }
//         }, {
//             offset: '95%'
//         });
//     }

//     // wp-Productdesign-services
//     wpProductdesignServices = function () {
//         var i = 0;
//         $(".productdesign-services .wp-item").waypoint(function (direction) {
//             if (direction == 'down') {
//                 var wpItem = $(this.element);
//                 $(this.element).each(function () {
//                     setTimeout(function () {
//                         wpItem.addClass('fadeInDown animated');
//                     }, 60 * i++);
//                 }, 100);

//             }
//         }, {
//             offset: '95%'
//         });
//     }

//     // wp-art-illustration
//     wpArtIllustration = function () {
//         var i = 0;
//         $(".art-illustration .wp-item").waypoint(function (direction) {
//             if (direction == 'down') {
//                 var wpItem = $(this.element);
//                 $(this.element).each(function () {
//                     setTimeout(function () {
//                         wpItem.addClass('fadeInDown animated');
//                     }, 60 * i++);
//                 }, 100);

//             }
//         }, {
//             offset: '95%'
//         });
//     }

//     // wp-our-work
//     wpOurWork = function () {
//         var i = 0;
//         $(".our-work .wp-item").waypoint(function (direction) {
//             if (direction == 'down') {
//                 var wpItem = $(this.element);
//                 $(this.element).each(function () {
//                     setTimeout(function () {
//                         wpItem.addClass('fadeInDown animated');
//                     }, 60 * i++);
//                 }, 100);

//             }
//         }, {
//             offset: '95%'
//         });
//     }

//     // wp-contact
//     wpContact = function () {
//         var i = 0;
//         $(".contact .wp-item").waypoint(function (direction) {
//             if (direction == 'down') {
//                 var wpItem = $(this.element);
//                 $(this.element).each(function () {
//                     setTimeout(function () {
//                         wpItem.addClass('fadeInDown animated');
//                     }, 60 * i++);
//                 }, 100);

//             }
//         }, {
//             offset: '95%'
//         });
//     }

//     window.addEventListener('load', function () {
//         wpNavbar();
//         wpSlider();
//         wpItemSlider();
//         wpAbout();
//         wpCategory();
//         wpBrandingService();
//         wpWebdesignService();
//         wpPrintDesignService();
//         wpGraphicdesignServices();
//         wpProductdesignServices();
//         wpArtIllustration();
//         wpOurWork();
//         wpContact();
//     });

// })(jQuery);

// gallery

// (function ($) {
// magnific popup
$(document).ready(function () {
  $(".gallery-entry").magnificPopup({
    type: "image",
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: "mfp-no-margins mfp-with-zoom",
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1],
    },
    image: {
      verticalFit: true,
    },
    zoom: {
      enabled: true,
      duration: 300,
    },
  });
});
// })(jQuery);
