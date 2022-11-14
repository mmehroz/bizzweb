// // sticky navbar

// var headerLogo = document.getElementById("headerLogo");
// var navigationBar = document.getElementById("navigationBar");
// var navbarOffSet = 500;

// function stickyNavbar() {
//     if (window.pageYOffset >= navbarOffSet) {
//         headerLogo.style.width = '370px';
//         // navigationBar.style.backgroundColor = 'rgba(0, 0, 0, .95)';
//         navigationBar.style.backgroundColor = 'rgba(0, 61, 86, 0.78)';
//         navigationBar.style.boxShadow = '0 0 5px 2px rgba(0, 0, 0, 1)';

//     } else {
//         headerLogo.style.width = '450px';
//         navigationBar.style.boxShadow = '0 0 15px 1px rgba(0, 0, 0, 0.0)';
//         navigationBar.style.backgroundColor = 'transparent';

//     }
// }
// window.onscroll = function () {
//     stickyNavbar()
// };

// // slider
// $(document).ready(function () {
//     $('.slider-carousel').owlCarousel({
//         loop: true,
//         margin: 10,
//         autoplay: true,
//         autoplayTimeout: 7000,
//         smartSpeed: 1000,
//         responsive: {
//             0: {
//                 items: 1
//             },
//             3000: {
//                 items: 1
//             }
//         }
//     });
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
//             offset: '70%'
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
//             offset: '70%'
//         });
//     }
//     // wp-who_we_are
//     wpWhoWeAre = function () {
//         var i = 0;
//         $(".who_we_are .wp-item").waypoint(function (direction) {
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
//     // wp-image-banner-1
//     wpImageBanner1 = function () {
//         var i = 0;
//         $(".image-banner-1 .wp-item").waypoint(function (direction) {
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
//     // wp-services
//     wpServices = function () {
//         var i = 0;
//         $(".services .wp-item").waypoint(function (direction) {
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
//     // wp-service1
//     wpService1 = function () {
//         var i = 0;
//         $(".service-1 .wp-item-s").waypoint(function (direction) {
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
//     // wp-service2
//     wpService2 = function () {
//         var i = 0;
//         $(".service-2 .wp-item-s").waypoint(function (direction) {
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
//     // wp-service3
//     wpService3 = function () {
//         var i = 0;
//         $(".service-3 .wp-item-s").waypoint(function (direction) {
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
//     // wp-portfolio
//     wpPortfolio = function () {
//         var i = 0;
//         $(".portfolio .wp-item").waypoint(function (direction) {
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
//     // wp-pricing-tab
//     wpPricingTab = function () {
//         var i = 0;
//         $(".pricing-tab .wp-item").waypoint(function (direction) {
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
//     // wp-pricing
//     wpPricing = function () {
//         var i = 0;
//         $(".pricing .wp-item").waypoint(function (direction) {
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
//         wpWhoWeAre();
//         wpImageBanner1();
//         wpServices();
//         wpService1();
//         wpService2();
//         wpService3();
//         wpPortfolio();
//         wpPricing();
//         wpPricingTab();
//         wpContact();
//     });

// })(jQuery);

// $("#nav-basic-tab").click(function () {
//   $(".pricing-tab").css({
//     "background-color": "#085575",
//   });
// });
// $("#nav-standard-tab").click(function () {
//   $(".pricing-tab").css({
//     "background-color": "#ca5555",
//   });
// });
// $("#nav-advanced-tab").click(function () {
//   $(".pricing-tab").css({
//     "background-color": "#d89c05",
//   });
// });

$("#pricing-tab-basic,#pricing-tab-standard,#pricing-tab-advanced").click(
  function () {
    $("html, body").animate(
      {
        scrollTop: $("#pricing-tab").offset().top,
      },
      1
    );
  }
);
$("#pricing-tab-basic").click(function () {
  $("#nav-basic-tab").trigger("click");
});
$("#pricing-tab-standard").click(function () {
  $("#nav-standard-tab").trigger("click");
});
$("#pricing-tab-advanced").click(function () {
  $("#nav-advanced-tab").trigger("click");
});

// portfolio
$(".portfolio-slider").slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
  centerMode: true,
  variableWidth: true,
  infinite: true,
  focusOnSelect: true,
  cssEase: "linear",
  touchMove: true,
  autoplay: true,
  autoplaySpeed: 2000,

  prevArrow: '<button class="slick-prev"> < </button>',
  nextArrow: '<button class="slick-next"> > </button>',

  // responsive: [
  //     {
  //       breakpoint: 576,
  //       settings: {
  //         centerMode: false,
  //         variableWidth: false,
  //       }
  //     },
  // ]
});

var imgs = $(".portfolio-slider img");
imgs.each(function () {
  var item = $(this).closest(".item");
  item.css({
    "background-image": "url(" + $(this).attr("src") + ")",
    "background-position": "center",
    "-webkit-background-size": "cover",
    "background-size": "contain",
    "background-repeat": "no-repeat",
    outline: "none",
  });
  $(this).hide();
});
