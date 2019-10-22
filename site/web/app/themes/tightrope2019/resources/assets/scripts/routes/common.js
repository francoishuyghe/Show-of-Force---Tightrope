export default {
  init() {
    // JavaScript to be fired on all pages
    $(window).scroll(function () { 
      if ($(window).scrollTop() > 0) {
        $('header.banner').addClass('active');
      } else { 
        $('header.banner').removeClass('active');
      }
    })
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
