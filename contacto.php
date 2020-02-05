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

    <div class="row app_mt_2rem">
     <div class="col-lg-6">

          <img src="img/image21.png" alt="" class="w-100">

     </div>
        <div class="col-lg-6 text-center">
            <div class="p-3 bg-white mt-5">
                <h2 class="font-weight-bold text-uppercase"><b><span style="font-size: 0.8em;">descubre</span><br> tu potencial</b></h2>
              <p class="m-2">Ingresa tus datos y nos pondremos en contacto contigo, si tienes alguna duda estamos para atenderte</p>
              <form class="row my-4 my-form">
                  <div class="col-6">
                      <div class="form-group">
                          <input class="form-control" type="text" placeholder="Nombre">
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                          <input class="form-control" type="text" placeholder="Apellido">
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                          <input class="form-control" type="text" placeholder="E-mail">
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                          <input class="form-control" type="text" placeholder="Celular">
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="form-group">
                          <textarea class="form-control" placeholder="Mensaje" rows="2"></textarea>
                      </div>
                      <small class="text-muted">Todos los campos son obligatorios</small>
                  </div>
                  <button type="button" class="my-button m-auto">enviar</button>
              </form>
          </div>
        </div>
    </div>   
    
    <?php include('includes/footer_contacto.php') ?>
    
    
    <!-- mobile -->
    
    <div class="font-weight-bold w-75 m-auto mobile" style="font-size: 0.9em;">
        <center><img src="img/logo.svg" alt="" class="m-3"></center>
        <div class="w-100 mx-auto my-2 border-bottom">
            <img src="img/telefono2.png" alt="" class="d-inline-block">
            <p class="d-inline-block">(511) 637 3070 / (511) 637 3072</p>
        </div>
        <div class="w-100 mx-auto my-2 border-bottom">
            <img src="img/address.svg" alt="" class="d-inline-block">
            <p class="d-inline-block"><a href="https://www.google.com/maps/dir/-12.0717216,-76.9758268/human+growth/@-12.0997631,-77.0357557,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x9105c908f051c909:0x6cb00243730f5f3!2m2!1d-77.0167473!2d-12.1262486">Av. Benavides 1555 | Oficina<br> 304 Lima | Miraflores</a></p>
        </div>
        <div class="w-100 mx-auto my-2 border-bottom">
            <img src="img/email.svg" alt="" class="d-inline-block">
            <p class="d-inline-block">contacto@hmg.pe</p>
        </div>
    </div>
    


    <script src="js/functions.js"></script>


    
</body>
</html>