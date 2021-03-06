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

   <section class="section_activity">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/img-slider.jpeg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/img-slider.jpeg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/img-slider.jpeg" alt="Third slide">
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
        <div class="col-12 col-md-2">
            <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Tipo</option>
                  <option value="1">Encuentro</option>
                  <option value="2">Feria</option>
                  <option value="3">Conferencia</option>
                </select>
              </div>
        </div>
        <div class="col-12 col-md-2">
            <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Lugar</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
        </div>
        <div class="col-12 col-md-2">
            <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Coach</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
        </div>
        <div class="col-12 col-md-2">
            <div class="input-group mb-3">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Proximos</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
        </div>
        <div class="col-12 col-md-2">
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
                          <p class="d-inline-block">ENCUENTRO 1: BIENVENIDA AL PROGRAMA</p>
                      </div>
                      <div class="col-lg-4 box-fecha">
                          <p class="text-uppercase d-inline-block font-weight-bold text-center color_azul_human"><span class="fecha-actividades"><b class="color_azul_human">18 y 19</b></span><br>abril</p>
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
          <!-- <li class=""><a class="m-2" href="#" style="color:  #8EB7C1;"> 02</a></li>
          <li class=""><a class="m-2" href="#" style="color:  #8EB7C1;"> 03</a></li>
          <li class=""><a class="m-2" href="#" style="color:  #8EB7C1;"> 04</a></li>
          <li class=""><a class="m-2" href="#" style="color:  #8EB7C1;"> 05</a></li> -->
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
                    <span style="font-size: 3em;" class="d-inline-block"><b>18 y 19</b></span><span class="d-inline-block w-100">Abril</span>
                </div>
              </div>
              <br>
              <p class="font-weight-bold text-center text-capitalize"><b>ENCUENTRO 1: BIENVENIDA AL PROGRAMA</b></p>
              <p class="text-center"></p>
              <br>
              <p class="font-weight text-center text-capitalize"><b>¿quieres participar?<br>comunicate con nosotros</b></p>
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
                    <p class="text-center text-capitalize" style="font-size: 0.7em;">18 y 19 de abril</p>
                </div>
                <div class="col-lg-6">
                  <p class="text-center text-capitalize" style="font-size: 0.7em;"><b>Sede miraflores</b></p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>

<?php include('includes/footer.php'); ?>



<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content m-2">
                  <div class="">

                  <div class="row cronograma">
                        <div class="col-md-2 columna-1">
                            <div class="objetivos p-4 text-uppercase h5"><b>objetivos
                            </b></div>
                            <div class="p-4 border-bottom borde-naranja">
                                <p>Iniciar un proceso de transformación personal</p>
                            </div>
                            <div class="p-4 border-bottom borde-azul">
                                <p>Desarrollar competencias básicas de coaching (maestrías IAC)</p>
                            </div>
                            <div class="p-4 border-bottom borde-amarillo">
                                <p>Aprender a ejecutar un proceso de coaching</p>
                            </div>
                            <div class="p-4 border-bottom borde-rojo">
                                <p>Estar listo para ejercer profesionalmente como coach</p>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div>
                                <p class="p-4 text-uppercase h5"><b>cronograma / mayo</b>
                                <span class="float-right" data-dismiss="modal" aria-label="Close" style="cursor:pointer">X</span></p>
                                <div class="row text-center" style="font-size:1.5em">
                                    <div class="col-md-3">
                                        <div class="p-4 m-4 border-card casillas text-capitalize">
                                            <p>Coaching persona</p>
                                            <p>15 de mayo</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="p-4 m-4 border-card casillas text-capitalize">
                                            <p>Insight grupal</p>
                                            <p>17 de mayo</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="p-4 m-4 border-card casillas text-capitalize">
                                            <p>Maestrías IAC</p>
                                            <p>23 de mayo</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="p-4 m-4 border-card casillas text-capitalize">
                                            <p>Agendar calendario</p>
                                            <p>15 de mayo</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="p-4 m-4 border-card casillas text-capitalize">
                                        <img src="img/calendar.png" alt="">
                                            <p>agendar a calendario</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="p-4 m-4 border-card casillas text-capitalize">
                                            <p>junio</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="p-4 m-4 border-card casillas text-capitalize">
                                            <p>julio</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="p-4 m-4 border-card casillas text-capitalize">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="p-4 m-4 border-card casillas text-capitalize">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="p-4 m-4 border-card casillas text-capitalize">
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="p-4 m-4 border-card casillas text-capitalize">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="p-4 m-4 border-card casillas text-capitalize">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  </div>
              </div>
            </div>
          </div>


    <script src="js/functions.js"></script>


    
</body>
</html>