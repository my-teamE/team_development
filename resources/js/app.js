require('./bootstrap');
window.$ = window.jQuery = require('jquery');
require('slick-carousel');
$(function() {
    $('.slider').slick({
    slidesToShow: 3,
      autoplay: true,
      dots: true,
      arrows: false,
      centerMode: true,
      centerPadding: '0px',
    });
  });

require('./top');
