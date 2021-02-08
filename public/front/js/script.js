


$(window).scroll(function () {
    var $item = $('.navbar').position().top;
    if ($(window).scrollTop() > $item) {
      $('.navbar').addClass('fixed');
    }
    else {
      $('.navbar').removeClass('fixed');
    }
  });
new WOW().init();