export default {
  init() {
    // JavaScript to be fired on the about us page

    //Carousel
    $('.slides').slick({
      centerMode: true,
      centerPadding: '20px',
      slidesToShow: 1,
      autoplay: true,
      fade: true,
      prevArrow: '.prevArrow',
      nextArrow: '.nextArrow',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            centerPadding: '40px',
          },
        },
        {
          breakpoint: 480,
          settings: {
            centerPadding: '40px',
          },
        },
      ],
    });
  },
};
