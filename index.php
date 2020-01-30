<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    
    <div class="pc p-4 text-center">
      <table class="" style="font-size: 0.9em; width: 100%; margin: auto;">
          <tr>
              <td style="width: 20%;">
                  <img src="img/telephone.svg" alt="logo de telefono">
                  <a href="tel:637 3070" class=" enlaces">637 3070 / (511) 637 3072</a> 
                  <div class="linea w-75 mx-auto"></div>
              </td>
              <td style="width: 20%;">
                  <img src="img/address.svg" alt="logo de edificio">
                  <span class="float-right px-1"><a href="#" class="enlaces">Benavides 1555 | Oficina 304<br> Lima | Miraflores</a></span> 
              </td>
              <td style="width: 20%;">
                  <img src="img/logo.svg" alt="" class="p-4">
              </td>
              <td style="width: 20%;">
                  <img src="img/email.svg" alt="">
                  <a href="mailto:@hmg.pe" class="enlaces"> @hmg.pe</a>
              </td>
              <td style="width: 20%;">
                  Síguenos <img src="img/face.png" class="zoom enlaces"> <img src="img/in.jpeg" class="zoom"> <img src="img/face.png" class="zoom">
              </td>
          </tr>
      </table>
  </div>
  
  
  <!-- mobile -->

  
  <div class="font-weight-bold w-75 m-auto mobile" style="font-size: 0.9em;">
      <center><img src="img/logo.svg" alt="" class="m-3"></center>
      <div class="w-100 mx-auto my-2 border-bottom">
          <img src="img/telefono2.png" alt="" class="d-inline-block">
          <p class="d-inline-block">(511) 637 3070 / (511) 637 3072</p>
      </div>
      <div class="w-100 mx-auto my-2 border-bottom">
          <img src="img/address.svg" alt="" class="d-inline-block">
          <p class="d-inline-block"> <a href="#">Benavides 1555 | Oficina<br> 304 Lima | Miraflores</a></p>
      </div>
      <div class="w-100 mx-auto my-2 border-bottom">
          <img src="img/email.svg" alt="" class="d-inline-block">
          <p class="d-inline-block">contacto@hmg.pe</p>
      </div>
  </div>
  


    <script src="js/functions.js"></script>


    
</body>
</html>