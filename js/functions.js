$( document ).ready(function() {
    $(".nav li").on("click", function(){
      $(".nav").find(".activa").removeClass("activa");
      $(this).addClass("activa");
    });
    date  = $('.date');
    date.hide();
    $('#blogCarousel').carousel({
      interval: 5000
  });
  });

 $(function (){
  $(window).scroll(function(){
     if ($(this).scrollTop() > 100) {
      $('.navbar').addClass("white");
      $('.date').show();
     } else {
      $(".navbar").removeClass("white");
      $('.date').hide();
     }

     if ($(this).scrollTop() > 3200) {
       $('.start-form').removeClass("position-fixed");
     }else {
      $('.start-form').addClass("position-fixed");
     }
  });
});