<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comité Menú</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel=StyleSheet href="styles/estilos.css" type="text/css" media=screen> 
</head>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comité Menú</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel=StyleSheet href="css/styles.css" type="text/css" media=screen> 
</head>.
<body style="background-image: url('images/FondoEspacio5.jpg');">
    <nav class="navbar  navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid px-3">
            <a href="{{ url('/') }}">
                <img src="images/Logo - copia.png" style="display:inline" class="custom-image12" alt="" width="50px" height="50px">
                <p class="navbar-brand px-2" style="color:white; display:inline" >SPACE QUIZ</p>        
            </a>    
        </div>
        <!-- Creación de despliegue de menú dentro del NavBar -->
        <div class="col-1" id="navclock">
            <div class="d-flex align-items-center justify-content-center px-3">
  
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                             <i class="fa fa-sign-out"></i>{{ __('Logout') }}
                     </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </nav>
    <div class="container py-5">
       <!-- CREACION DE CUADRO GRIS PRINCIPAL EXTERNO -->
       <div class="row">
          <div class="col-md-12 d-flex justify-content-center">
            <div class="card rounded-4" style="background-color:rgba(205, 205, 227, 0.8);">
                <div class="row">
                    <div class="col-md-3 div-superior px-4">
                        <a href="{{ url('/') }}"><img src="images/Preguntados-Logo.png" class="img-fluid" alt="images"></a>
                    </div>
                </div>
               <div class="card-body">
                    <!-- CREACION DE 2 COLUMNAS EN LA MISMA FILA -->
                    <div class="row">
                        <div class="col-md-3 d-flex">
                            <div class="card flex-fill">
                                <div class="card-body">
                                     <!-- CREACION DE BOTON PANEL -->
                                     <a href="comiteMenu.html">
                                     <div class="row g-0 mt-3">
                                        <div class="col-md-3">
                                            <img src="images/icono_user.jpg" class="img-fluid img-thumbnail custom-image1" alt="imagen">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Panel</div>
                                        </div>
                                     </div>
                                     </a>
                                     <!-- CREACION DE BOTON NUEVA PREGUNTA -->
                                     <a href="comiteNueva.html">
                                     <div class="row g-0 mt-3">
                                        <div class="col-md-3">
                                            <img src="images/icono_pregunta.png" class="img-fluid img-thumbnail custom-image2" alt="imagen">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Nueva Pregunta</div>
                                        </div>
                                     </div>
                                     </a>
                                     <!-- CREACION DE BOTON LISTADO DE PREGUNTAS -->
                                     <a href="comiteListado.html">
                                     <div class="row g-0 mt-3">
                                        <div class="col-md-3">
                                            <img src="images/icono_menu.png" class="img-fluid img-thumbnail custom-image3" alt="imagen">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Listado de Preguntas</div>
                                        </div>
                                     </div>
                                     </a>
                                     <!-- CREACION DE BOTON CONFIGURACION DE PREGUNTAS -->
                                     <a href="comiteConfi.html">
                                     <div class="row g-0 mt-3">
                                        <div class="col-md-3">
                                            <img src="images/icono_config.png" class="img-fluid img-thumbnail custom-image4" alt="imagen">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Configuración</div>
                                        </div>
                                     </div>
                                     </a>
                                     <!-- CREACION DE BOTON DE QUIZ.COM -->
                                     <a href="landing.html">
                                     <div class="row g-0 mt-3">
                                        <div class="col-md-3">
                                            <img src="images/icono_net.png" class="img-fluid img-thumbnail custom-image5" alt="imagen">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Quiz.com</div>
                                        </div>
                                     </div>
                                     </a>
                                     <!-- CREACION DE BOTON LISTADO DE PREGUNTAS -->
                                     <a href="javascript:history.back()">
                                     <div class="row g-0 mt-3">
                                        <div class="col-md-3">
                                            <img src="images/icono_retroceder.png" class="img-fluid img-thumbnail custom-image6" alt="imagen">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Salir</div>
                                        </div>
                                     </div>
                                     </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card flex-fill">
                                <!-- Creación de título de configuración de comité -->
                                <div class="card-body">
                                     <h3 class="card-title fw-bold mt-2" style="color:#1000c0">Configuración del comité</h3>
                                </div> 
                                <!-- CREACION DE ESTRUCTURA DE USUARIO CON SU INPUT -->
                                <div class="row px-5 mt-3">
                                    <div class="col-md-12 px-4  mt-1">
                                        <h5 class="card-title fw-bold" style="color:#1000c0">Usuario :</h5>
                                    </div>
                                    <div class="col-md-12 mx-auto">
                                        <input type="text" class="form-control" style="background-color:rgb(219, 219, 219);" id="exampleFormControlInput1" placeholder="Ingresa el nombre de tu usuario">
                                    </div>
                                </div> 
                                <!-- CREACION DE ESTRUCTURA DE CONTRASEÑA CON SU INPUT -->
                                <div class="row px-5 mt-4">
                                    <div class="col-md-12 px-4  mt-1">
                                        <h5 class="card-title fw-bold" style="color:#1000c0">Contraseña :</h5>
                                    </div>
                                    <div class="col-md-12 mx-auto">
                                        <input type="password" class="form-control" style="background-color:rgb(219, 219, 219);" id="exampleFormControlInput1" placeholder="Ingresa tu contraseña">
                                    </div>
                                </div>
                                <!-- CREACION DE ESTRUCTURA DE nro DE PREGUNTAS CON SU INPUT -->
                                <div class="row px-5 mt-4">
                                    <div class="col-md-12 px-4  mt-1">
                                        <h5 class="card-title fw-bold" style="color:#1000c0">Total de preguntas por juego :</h5>
                                    </div>
                                    <div class="col-md-12 mx-auto">
                                        <input type="number" class="form-control" style="background-color:rgb(219, 219, 219);" id="exampleFormControlInput1" placeholder="Ingresa el número de preguntas">
                                    </div>
                                </div>
                                <!-- CREACION DE BOTON DE ACTUALIZAR CONFIGURACION -->
                                <div class="row px-4 mx-4 mt-3">
                                    <div class="col-md-3 btn btn-primary rounded-4">Actualizar configuración</div>
                                </div> 
                                <!-- Creación de título de configuración de comité -->
                                <div class="card-body">
                                    <h3 class="card-title fw-bold mt-3" style="color:#1000c0">Preguntas y categorías</h3>
                                </div>
                                <!-- Creación de botones rojos tipos de eliminación -->
                                <div class="row py-3">
                                    <div class="col-md-6 mx-auto d-grid px-5">
                                        <div class="btn btn-danger"> Eliminar preguntas(solo preguntas)</div>
                                    </div>
                                    <div class="col-md-6 mx-auto d-grid px-5">
                                        <div class="btn btn-danger "> Eliminar preguntas y categorías</div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> 
</body>
</html>
</html>