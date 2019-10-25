export default {
  init() {
    // JavaScript to be fired on all pages
    $(window).scroll(function () {
      if ($(window).scrollTop() > 0) {
        $('header.banner').addClass('active');
      } else {
        $('header.banner').removeClass('active');
      }
    });

    //Read More
    $('.long-content').click(function (e) { 
      console.log(e.target);
      $(e.target).addClass('active');
    });

    //Trailer player
    const trailerButton = $('.trailer-btn');
    
    if (trailerButton) {
      const trailerPlayer = $('.trailer-player');
      const trailerIframe = $('.trailer-player iframe');
      const link = trailerIframe.attr('source');

      trailerButton.click(function () {
        trailerIframe.attr('src', link)
        trailerPlayer.addClass('active');
      })
      
      trailerPlayer.click(function () { 
        trailerPlayer.removeClass('active');
        trailerIframe.attr('src', '')
      })
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
