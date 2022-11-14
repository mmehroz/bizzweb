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
// $(document).ready(function () {
//   $(".services-carousel").owlCarousel({
//     loop: true,
//     autoplay: true,
//     autoplayTimeout: 7000,
//     smartSpeed: 1000,
//     responsive: {
//       0: {
//         items: 1,
//       },
//       500: {
//         items: 3,
//       },
//       1000: {
//         items: 5,
//       },
//     },
//   });
// });

// our work slider
// $(document).ready(function () {
//   $(".sapmles-carousel").owlCarousel({
//     loop: true,
//     autoplay: true,
//     autoplayTimeout: 4000,
//     smartSpeed: 2000,
//     center: true,
//     responsive: {
//       0: {
//         items: 2,
//       },
//       500: {
//         items: 3,
//       },
//       1000: {
//         items: 4,
//       },
//     },
//   });
// });
$(document).ready(function () {
  $(".slider-1-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });
});

// read-more read-less
// $(document).ready(function () {
//   var fullText1 = $("#HWW-1-readmore").html();
//   var fullText2 = $("#HWW-2-readmore").html();
//   var fullText3 = $("#HWW-3-readmore").html();
//   var fullText4 = $("#HWW-4-readmore").html();
//   var fullText5 = $("#HWW-5-readmore").html();

//   text1 = fullText1.replace(/ +(?= )/g, "");
//   text2 = fullText2.replace(/ +(?= )/g, "");
//   text3 = fullText3.replace(/ +(?= )/g, "");
//   text4 = fullText4.replace(/ +(?= )/g, "");
//   text5 = fullText5.replace(/ +(?= )/g, "");

//   text1 = text1.split(" ");
//   text2 = text2.split(" ");
//   text3 = text3.split(" ");
//   text4 = text4.split(" ");
//   text5 = text5.split(" ");

//   fullText1 = "";
//   fullText2 = "";
//   fullText3 = "";
//   fullText4 = "";
//   fullText5 = "";
//   var shortText1 = "";
//   var shortText2 = "";
//   var shortText3 = "";
//   var shortText4 = "";
//   var shortText5 = "";

//   for (let i = 0; i < 20; i++) {
//     shortText1 += text1[i] + " ";
//     shortText2 += text2[i] + " ";
//     shortText3 += text3[i] + " ";
//     shortText4 += text4[i] + " ";
//     shortText5 += text5[i] + " ";
//   }

//   $("#HWW-1-readmore").html(shortText1 + " ....");
//   $("#HWW-2-readmore").html(shortText2 + " ....");
//   $("#HWW-3-readmore").html(shortText3 + " ....");
//   $("#HWW-4-readmore").html(shortText4 + " ....");
//   $("#HWW-5-readmore").html(shortText5 + " ....");

//   for (let i = 0; i < text1.length; i++) {
//     fullText1 += text1[i] + " ";
//   }
//   for (let i = 0; i < text2.length; i++) {
//     fullText2 += text2[i] + " ";
//   }
//   for (let i = 0; i < text3.length; i++) {
//     fullText3 += text3[i] + " ";
//   }
//   for (let i = 0; i < text4.length; i++) {
//     fullText4 += text4[i] + " ";
//   }
//   for (let i = 0; i < text5.length; i++) {
//     fullText5 += text5[i] + " ";
//   }

//   $("#HWW-1-readless-btn").hide();
//   $("#HWW-2-readless-btn").hide();
//   $("#HWW-3-readless-btn").hide();
//   $("#HWW-4-readless-btn").hide();
//   $("#HWW-5-readless-btn").hide();

//   $("#HWW-1-readmore-btn").click(function () {
//     $("#HWW-1-readmore").html(fullText1);
//     $("#HWW-1-readmore-btn").hide();
//     $("#HWW-1-readless-btn").show();
//   });
//   $("#HWW-2-readmore-btn").click(function () {
//     $("#HWW-2-readmore").html(fullText2);
//     $("#HWW-2-readmore-btn").hide();
//     $("#HWW-2-readless-btn").show();
//   });
//   $("#HWW-3-readmore-btn").click(function () {
//     $("#HWW-3-readmore").html(fullText3);
//     $("#HWW-3-readmore-btn").hide();
//     $("#HWW-3-readless-btn").show();
//   });
//   $("#HWW-4-readmore-btn").click(function () {
//     $("#HWW-4-readmore").html(fullText4);
//     $("#HWW-4-readmore-btn").hide();
//     $("#HWW-4-readless-btn").show();
//   });
//   $("#HWW-5-readmore-btn").click(function () {
//     $("#HWW-5-readmore").html(fullText5);
//     $("#HWW-5-readmore-btn").hide();
//     $("#HWW-5-readless-btn").show();
//   });
//   $("#HWW-1-readless-btn").click(function () {
//     $("#HWW-1-readmore").html(shortText1);
//     $("#HWW-1-readless-btn").hide();
//     $("#HWW-1-readmore-btn").show();
//   });
//   $("#HWW-2-readless-btn").click(function () {
//     $("#HWW-2-readmore").html(shortText2);
//     $("#HWW-2-readless-btn").hide();
//     $("#HWW-2-readmore-btn").show();
//   });
//   $("#HWW-3-readless-btn").click(function () {
//     $("#HWW-3-readmore").html(shortText3);
//     $("#HWW-3-readless-btn").hide();
//     $("#HWW-3-readmore-btn").show();
//   });
//   $("#HWW-4-readless-btn").click(function () {
//     $("#HWW-4-readmore").html(shortText4);
//     $("#HWW-4-readless-btn").hide();
//     $("#HWW-4-readmore-btn").show();
//   });
//   $("#HWW-5-readless-btn").click(function () {
//     $("#HWW-5-readmore").html(shortText5);
//     $("#HWW-5-readless-btn").hide();
//     $("#HWW-5-readmore-btn").show();
//   });
// });

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
