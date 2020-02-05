<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Escuela de coaching HG</title>
    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900&display=swap" rel="stylesheet">
</head>
<body>
  <?php include('includes/header.php'); ?>
  <?php include('includes/carousel.php'); ?>
    
  <div class="pc padd_footer text-center" style="padding-top: 0!important">
    <table class="" style="font-size: 0.9em; width: 100%; margin: auto;">
        <tr>
            <td style="width: 20%;">
                <img src="img/telephone.svg" alt="logo de telefono">
                <a href="tel:51957075562" class=" enlaces">+51 957 075 562</a> 
                <div class="linea w-75 mx-auto"></div>
            </td>
            <td style="width: 20%;">
                <img src="img/address.svg" alt="logo de edificio">
                <span class="float-right px-1"><a href="https://www.google.com/maps/dir/-12.0717216,-76.9758268/human+growth/@-12.0997631,-77.0357557,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x9105c908f051c909:0x6cb00243730f5f3!2m2!1d-77.0167473!2d-12.1262486" class="enlaces">Benavides 1555 | Oficina 304<br> Lima | Miraflores</a></span> 
            </td>
            <td style="width: 20%;">
                <div class="app_boder_logo">
                  <img src="img/logo-escuela-coaching-footer.png" alt="" class="p-4 img_logo_footer">
                </div>
            </td>
            <td style="width: 20%;">
                <img src="img/email.svg" alt="">
                <a href="mailto:@hmg.pe" class="enlaces">contacto@hmg.pe</a>
            </td>
            <td style="width: 20%;">
                Síguenos <a href="https://www.facebook.com/HumanGrowthPeru/" target="_blank"><img src="img/face.png" class="zoom enlaces"></a> <a href="https://www.instagram.com/human_growth_la/" target="_blank"><img src="img/in.jpeg" class="zoom"></a>
            </td>
        </tr>
    </table>
</div>
  
  
  <!-- mobile -->

  
  <div class="font-weight-bold w-75 m-auto mobile" style="font-size: 0.9em;">
      <center><img src="img/logo.svg" alt="" class="m-3"></center>
      <div class="w-100 mx-auto my-2 border-bottom">
          <img src="img/telefono2.png" alt="" class="d-inline-block">
          <a class="d-inline-block enlaces" href="tel:51957075562" >+51 957 075 562</a> 
      </div>
      <div class="w-100 mx-auto my-2 border-bottom">
          <img src="img/address.svg" alt="" class="d-inline-block">
          <p class="d-inline-block">
            <a href="https://www.google.com/maps/dir/-12.0717216,-76.9758268/human+growth/@-12.0997631,-77.0357557,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x9105c908f051c909:0x6cb00243730f5f3!2m2!1d-77.0167473!2d-12.1262486">Benavides 1555 | Oficina<br> 304 Lima | Miraflores</a>
          </p>
      </div>
      <div class="w-100 mx-auto my-2 border-bottom">
          <img src="img/email.svg" alt="" class="d-inline-block">
          <p class="d-inline-block">contacto@hmg.pe</p>
      </div>
  </div>
  


    <script src="js/functions.js"></script>

    <script>
        $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
        });
    </script>


    
</body>
</html>