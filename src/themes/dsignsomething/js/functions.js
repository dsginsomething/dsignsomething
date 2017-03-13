jQuery(document).ready(function($) {
  $('.ui.embed').embed();
  $(".dview-carousel").owlCarousel({
    loop: true,
    center: true,
    nav: true,
    dots: false,
    stageOuterClass: "dview-stageOuter",
    navClass: ["owl-prev dview-prev", "owl-next dview-next"],
    responsive: {
      0: { items: 2 },
      200: { items: 4 },
      400: { items: 6 },
      600: { items: 8 },
      800: { items: 10},
      1200: { items: 12 }
    },
    navText: ["<i class='ui icon left angle basic'></i>","<i class='ui icon right angle basic'></i>"]
  });
  $(".dsigner-carousel").owlCarousel({
    nav: true,
    dots: false,
    stageOuterClass: "dsigner-stageOuter",
    navClass: ["owl-prev dsigner-prev", "owl-next dsigner-next"],
    responsive:{
      0: { items: 3 },
      200: { items: 6 },
      400: { items: 9 },
      600: { items: 12 },
      800: { items: 12},
      1200: { items: 15 }
    },
    navText: ["<a class='ui button basic icon'><i class='ui icon left angle basic'></i></a>",
    "<a class='ui button basic icon'><i class='ui icon right angle basic'></i></a>"]
  });
});
