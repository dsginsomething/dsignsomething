jQuery(document).ready(function($) {
  $('.ui.embed').embed();

  const mostFamous = $('.most-famous')
  mostFamous.owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    responsive:{
      0:{
          items: 6
      }
    }
  })
  $('.most-famous-control .next').on('click', function () {
    mostFamous.trigger('next.owl.carousel')
  })
  $('.most-famous-control .prev').on('click', function () {
    mostFamous.trigger('prev.owl.carousel')
  })

  const interviewOwl = $('.interview-owl')
  interviewOwl.owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    items: 1,
    merge: true,
  })
  $('.interview-control .next').on('click', function () {
    interviewOwl.trigger('next.owl.carousel')
  })
  $('.interview-control .prev').on('click', function () {
    interviewOwl.trigger('prev.owl.carousel')
  })
  
  const homepageHilight = $('.homepage-owl')
  homepageHilight.owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    autoplay: true,
    autoplayTimeout: 8000,
    autoplayHoverPause: true,
    dots: false,
    merge: true,
    stageOuterClass: "stage-outer",
    navClass: ["owl-home-prev", "owl-home-next"],
    responsive:{
      0:{
          items: 1
      }
    }
  });
  $('.homepage-control .next').on('click', function () {
    homepageHilight.trigger('next.owl.carousel')
  })
  $('.homepage-control .prev').on('click', function () {
    homepageHilight.trigger('prev.owl.carousel')
  })

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
