jQuery(document).ready(function($) {
  $('.ui.embed').embed();
  $(".dview-carousel").owlCarousel({
    loop: true,
    center: true,
    nav: true,
    dots: false,
    stageOuterClass: "dview-stage-outer",
    navContainerClass: "custom-nav-container",
    navClass: ["dview-prev", "dview-next"],
    responsive: {
      0: { items: 2 },
      200: { items: 4 },
      400: { items: 6 },
      600: { items: 8 },
      800: { items: 11}
    },
    navText: ["<i class='ui icon grey left angle big'></i>","<i class='ui icon grey right angle big'></i>"]
  });
  $(".dsigner-carousel").owlCarousel({
    nav: true,
    dots: false,
    stageOuterClass: "dsigner-stageOuter",
    navClass: ["dsigner-prev", "dsigner-next"],
    navContainerClass: "custom-nav-container",
    responsive:{
      0: { items: 3 },
      200: { items: 6 },
      400: { items: 9 },
      600: { items: 12 },
      800: { items: 12},
      1200: { items: 15 }
    },
    navText: ["<a class='ui button basic icon' style='padding-left: 0.4rem !important; padding-right: 0.4rem !important;'><i class='ui icon left angle grey'></i></a>",
    "<a class='ui button basic icon'style='padding-left: 0.4rem !important; padding-right: 0.4rem !important;'><i class='ui icon right angle grey'></i></a>"]
  });
});
