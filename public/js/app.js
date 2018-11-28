$(document).foundation()

$(document).ready(function(){
  $('.slick').slick({
      autoplay: true,
      autoplaySpeed: 2000,
      fade: true,
      arrows: false,
      mobileFirst:true,
      pauseOnFocus:true,
      rows:0,
      dots: true,
  });
});
