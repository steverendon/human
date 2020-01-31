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



$(document).ready(function(){
  var countDownDate = new Date("Feb 30, 2020 15:37:25").getTime();

  // Update the count down every 1 second
  var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("app_timer").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s";

    $('#')

    // If the count down is finished, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("app_timer").innerHTML = "EXPIRED";
    }
  }, 1000);
});


$('.btn_form').click(function(){
  $('.start-form').addClass('shadow_azul');
  setTimeout(function(){
    $('.start-form').removeClass('shadow_azul');
  }, 4000);

});