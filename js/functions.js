$( document ).ready(function() {
    $(".nav li").on("click", function(){
      $(".nav").find(".activa").removeClass("activa");
      $(this).addClass("activa");
    });
    date  = $('.date');
    date.hide();
  });

  // determina si un elemento comienza a ser visible
function isElementVisible(elem){
    let viewScrollTop = $(window).scrollTop(); // distancia de scroll superior
    let viewBottom = viewScrollTop + $(window).height(); // distancia de scroll + el alto actual de window (lo no visible por scroll + lo visible)
    let topElemD = $(elem).offset().top; // distancia desde el elemento hasta el tope superior del viewport
    return (topElemD < viewBottom);
 }
 
 
 // invoco una función anónima en el evento scroll sobre window
 $(window).on("scroll" ,function() {
    let elem = $('.header');
    let form = $('.my-form');
    if(isElementVisible(elem)){
        date.show();
    } 
 });