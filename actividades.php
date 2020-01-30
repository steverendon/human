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

   <section class="section_activity">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/image54.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/img-slider.jpeg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/image54.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
   </section>
   <section>
    <h2 class="font-weight-bold text-uppercase text-center m-4"><b><span style="font-size: 0.8em;">nuestras</span><br> actividades</b></h2>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col">
            <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Tipo</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
        </div>
        <div class="col">
            <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Lugar</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
        </div>
        <div class="col">
            <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Coach</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
        </div>
        <div class="col">
            <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Proximos</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
        </div>
        <div class="col">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Buscar" aria-label="" aria-describedby="basic-addon1">
              </div>
        </div>
    </div>
    </div>
   </section>
   <section>
     <div class="container">
       <div class="row justift-content-center m-auto" style="width: 90%;" data-toggle="modal" data-target=".bd-example-modal-sm">
          <div class="col-lg-4 mb-4">
              <div style="min-width: 200px;" class="border-card-2 ">
                  <div class="row">
                      <div class="col-lg-8 pt-3">
                          <p class="d-inline-block">1 Proceso de coaching individual de 6 sesiones.</p>
                      </div>
                      <div class="col-lg-4">
                          <p class="text-uppercase d-inline-block font-weight-bold text-center color_azul_human"><span class="h1 "><b class="color_azul_human">01</b></span><br>may</p>
                      </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-lg-6">
                          <p class="d-inline-block" style="left: 30px;">Gabriel Pereyra</p>
                      </div>
                      <div class="col-lg-6">
                          <p class="d-inline-block color_azul_human">SEDE san isidro</p>
                      </div> 
                  </div>
              </div>
          </div>
          <div class="col-lg-4 mb-4">
              <div style="min-width: 200px;" class="border-card-2 " data-toggle="modal" data-target=".bd-example-modal-sm">
                  <div class="row">
                      <div class="col-lg-8 pt-3">
                          <p class="d-inline-block">1 Proceso de coaching individual de 6 sesiones.</p>
                      </div>
                      <div class="col-lg-4">
                          <p class="text-uppercase d-inline-block font-weight-bold text-center color_azul_human"><span class="h1 "><b class="color_azul_human">01</b></span><br>may</p>
                      </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-lg-6">
                          <p class="d-inline-block" style="left: 30px;">Gabriel Pereyra</p>
                      </div>
                      <div class="col-lg-6">
                          <p class="d-inline-block color_azul_human">SEDE san isidro</p>
                      </div> 
                  </div>
              </div>
          </div>
          <div class="col-lg-4 mb-4">
              <div style="min-width: 200px;" class="border-card-2 " data-toggle="modal" data-target=".bd-example-modal-sm">
                  <div class="row">
                      <div class="col-lg-8 pt-3">
                          <p class="d-inline-block">1 Proceso de coaching individual de 6 sesiones.</p>
                      </div>
                      <div class="col-lg-4">
                          <p class="text-uppercase d-inline-block font-weight-bold text-center color_azul_human"><span class="h1 "><b class="color_azul_human">01</b></span><br>may</p>
                      </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-lg-6">
                          <p class="d-inline-block" style="left: 30px;">Gabriel Pereyra</p>
                      </div>
                      <div class="col-lg-6">
                          <p class="d-inline-block color_azul_human">SEDE san isidro</p>
                      </div> 
                  </div>
              </div>
          </div>
          <div class="col-lg-4 mb-4">
              <div style="min-width: 200px;" class="border-card-2 " data-toggle="modal" data-target=".bd-example-modal-sm">
                  <div class="row">
                      <div class="col-lg-8 pt-3">
                          <p class="d-inline-block">1 Proceso de coaching individual de 6 sesiones.</p>
                      </div>
                      <div class="col-lg-4">
                          <p class="text-uppercase d-inline-block font-weight-bold text-center color_azul_human"><span class="h1 "><b class="color_azul_human">01</b></span><br>may</p>
                      </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-lg-6">
                          <p class="d-inline-block" style="left: 30px;">Gabriel Pereyra</p>
                      </div>
                      <div class="col-lg-6">
                          <p class="d-inline-block color_azul_human">SEDE san isidro</p>
                      </div> 
                  </div>
              </div>
          </div>
          <div class="col-lg-4 mb-4">
              <div style="min-width: 200px;" class="border-card-2 " data-toggle="modal" data-target=".bd-example-modal-sm">
                  <div class="row">
                      <div class="col-lg-8 pt-3">
                          <p class="d-inline-block">1 Proceso de coaching individual de 6 sesiones.</p>
                      </div>
                      <div class="col-lg-4">
                          <p class="text-uppercase d-inline-block font-weight-bold text-center color_azul_human"><span class="h1 "><b class="color_azul_human">01</b></span><br>may</p>
                      </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-lg-6">
                          <p class="d-inline-block" style="left: 30px;">Gabriel Pereyra</p>
                      </div>
                      <div class="col-lg-6">
                          <p class="d-inline-block color_azul_human">SEDE san isidro</p>
                      </div> 
                  </div>
              </div>
          </div>
          <div class="col-lg-4 mb-4">
              <div style="min-width: 200px;" class="border-card-2 " data-toggle="modal" data-target=".bd-example-modal-sm">
                  <div class="row">
                      <div class="col-lg-8 pt-3">
                          <p class="d-inline-block">1 Proceso de coaching individual de 6 sesiones.</p>
                      </div>
                      <div class="col-lg-4">
                          <p class="text-uppercase d-inline-block font-weight-bold text-center color_azul_human"><span class="h1 "><b class="color_azul_human">01</b></span><br>may</p>
                      </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-lg-6">
                          <p class="d-inline-block" style="left: 30px;">Gabriel Pereyra</p>
                      </div>
                      <div class="col-lg-6">
                          <p class="d-inline-block color_azul_human">SEDE san isidro</p>
                      </div> 
                  </div>
              </div>
          </div>
          <div class="col-lg-4 mb-4">
              <div style="min-width: 200px;" class="border-card-2 " data-toggle="modal" data-target=".bd-example-modal-sm">
                  <div class="row">
                      <div class="col-lg-8 pt-3">
                          <p class="d-inline-block">1 Proceso de coaching individual de 6 sesiones.</p>
                      </div>
                      <div class="col-lg-4">
                          <p class="text-uppercase d-inline-block font-weight-bold text-center color_azul_human"><span class="h1 "><b class="color_azul_human">01</b></span><br>may</p>
                      </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-lg-6">
                          <p class="d-inline-block" style="left: 30px;">Gabriel Pereyra</p>
                      </div>
                      <div class="col-lg-6">
                          <p class="d-inline-block color_azul_human">SEDE san isidro</p>
                      </div> 
                  </div>
              </div>
          </div>
          <div class="col-lg-4 mb-4">
              <div style="min-width: 200px;" class="border-card-2 " data-toggle="modal" data-target=".bd-example-modal-sm">
                  <div class="row">
                      <div class="col-lg-8 pt-3">
                          <p class="d-inline-block">1 Proceso de coaching individual de 6 sesiones.</p>
                      </div>
                      <div class="col-lg-4">
                          <p class="text-uppercase d-inline-block font-weight-bold text-center color_azul_human"><span class="h1 "><b class="color_azul_human">01</b></span><br>may</p>
                      </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-lg-6">
                          <p class="d-inline-block" style="left: 30px;">Gabriel Pereyra</p>
                      </div>
                      <div class="col-lg-6">
                          <p class="d-inline-block color_azul_human">SEDE san isidro</p>
                      </div> 
                  </div>
              </div>
          </div>
      </div>
     </div>
   </section>

   <section>
    <nav aria-label="..." class="m-auto font-weight-bold" style="width: 200px;">
        <ul class="pagination">
          <li class="page-item">
            <a class="" href="#" tabindex="-1"><img src="img/Arrow2.png" alt=""></a>
          </li>
          <li class=""><a class="m-2" href="#" style="color:  #8EB7C1;"> 01</a></li>
          <li class=""><a class="m-2" href="#" style="color:  #8EB7C1;"> 02</a></li>
          <li class=""><a class="m-2" href="#" style="color:  #8EB7C1;"> 03</a></li>
          <li class=""><a class="m-2" href="#" style="color:  #8EB7C1;"> 04</a></li>
          <li class=""><a class="m-2" href="#" style="color:  #8EB7C1;"> 05</a></li>
          <li class="">
            <a class="" href="#"><img src="img/Arrow3.png" alt=""></a>
          </li>
        </ul>
      </nav>
   </section>

   <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content m-2">
        <div class="d-flex justify-content-end m-2">
            <button type="button" class="close float-end" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
          <div class="modal-body">
            <div class="">
                <div class="text-uppercase font-weight-bold mx-auto text-center border-card-2 p-2">
                    <span style="font-size: 3em;" class="d-inline-block"><b>25</b></span><span class="d-inline-block w-100">set</span>
                </div>
              </div>
              <br>
              <p class="font-weight-bold text-center text-capitalize"><b>3 Encuentros centrales de dos días cada uno</b></p>
              <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <br>
              <p class="font-weight-bold text-center text-capitalize"><b>¿quieres participar?<br>comunicate con nosotros</b></p>
              <div class="row justify-content-center text-center">
                  <div class="col-lg-4">
                      <img src="img/Group243.png" alt="" style="width: 30px;" class="m-auto">
                      <p class="text-center text-capitalize" style="font-size: 0.7em;"><b>messenger</b></p>
                  </div>
                  <div class="col-lg-4">
                    <img src="img/Group.png" alt="" style="width: 30px;" class="m-auto">
                    <p class="text-center text-capitalize" style="font-size: 0.7em;"><b>whatsapp</b></p>
                </div>
                <div class="col-lg-4">
                    <img src="img/telefono.png" alt="" style="width: 20px;" class="m-auto">
                    <p class="text-center text-capitalize" style="font-size: 0.7em;"><b>telefono</b></p>
                </div>
              </div>
              <br>

              <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <p class="text-center text-capitalize" style="font-size: 0.7em;">03 de mayo</p>
                </div>
                <div class="col-lg-6">
                  <p class="text-center text-capitalize" style="font-size: 0.7em;"><b>sede miraflorez</b></p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>

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


<div class="font-weight-bold w-75 m-auto mobile" style="font-size: 0.9em;">
    <center><img src="img/logo.svg" alt="" class="m-3"></center>
    <div class="w-100 mx-auto my-2 border-bottom">
        <img src="img/telefono2.png" alt="" class="d-inline-block">
        <p class="d-inline-block">(511) 637 3070 / (511) 637 3072</p>
    </div>
    <div class="w-100 mx-auto my-2 border-bottom">
        <img src="img/address.svg" alt="" class="d-inline-block">
        <p class="d-inline-block"> Av. Benavides 1555 | Oficina<br> 304 Lima | Miraflores</p>
    </div>
    <div class="w-100 mx-auto my-2 border-bottom">
        <img src="img/email.svg" alt="" class="d-inline-block">
        <p class="d-inline-block">contacto@hmg.pe</p>
    </div>
</div>


    <script src="js/functions.js"></script>


    
</body>
</html>