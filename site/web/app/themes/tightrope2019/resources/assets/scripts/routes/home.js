export default {
  init() {
    // JavaScript to be fired on the home page

    //Trailer player
    $('.trailer-btn').click(function () { 
      $('.trailer-player').addClass('active');
    })
    
    $('.trailer-player').click(function () { 
      $('.trailer-player').removeClass('active');
    })

    //Carousel
    $('.slides').slick({
      centerMode: true,
      centerPadding: '25%',
      slidesToShow: 1,
      prevArrow: '.prevArrow',
      nextArrow: '.nextArrow',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
          },
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
          },
        },
      ],
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
