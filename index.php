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
    
  <?php include('includes/footer.php'); ?>
  
  
  <!-- mobile -->

  
  <div class="font-weight-bold w-75 m-auto mobile" style="font-size: 0.9em;">
      <center><img src="img/logo.svg" alt="" class="m-3"></center>
      <div class="w-100 mx-auto my-2 border-bottom">
          <img src="img/telefono2.png" alt="" class="d-inline-block">
          <a class="d-inline-block enlaces" href="tel:51957075562" >+51 957 075 562</a> 
      </div>
      <div class="w-100 mx-auto my-2 border-bottom">
          <img src="img/address.svg" alt="" class="d-inline-block">
          <p class="d-inline-block"> <a href="https://www.google.com/maps/dir/-12.0717216,-76.9758268/human+growth/@-12.0997631,-77.0357557,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x9105c908f051c909:0x6cb00243730f5f3!2m2!1d-77.0167473!2d-12.1262486">Benavides 1555 | Oficina<br> 304 Lima | Miraflores</a></p>
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