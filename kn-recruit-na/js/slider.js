// slick slider
$('.slider').slick({
  autoplay: true,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  appendArrows: $('.arrow_box'),
  prevArrow: '<div class="slide-arrow slick-prev"></div>',
  nextArrow: '<div class="slide-arrow slick-next"></div>',
  dots: false,
  responsive: [
    {
      breakpoint: 1441,//1440px以下
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
    {
    breakpoint: 769,//768px以下
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
    }
  }
]
});