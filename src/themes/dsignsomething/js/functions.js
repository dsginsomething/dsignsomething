jQuery(document).ready(function($) {
  $('.ui.embed').embed();
  $(".owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    responsive: {
      0: { items: 4 },
      600: { items: 8 },
      1000: { items: 16 }
    },
    navText: ["<i class='ui icon left angle basic'></i>","<i class='ui icon right angle basic'></i>"]
  });
});