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
    <div class="container-fluid mt-5">
       <!-- CREACION DE CUADRO GRIS PRINCIPAL EXTERNO -->
       <div class="row">
          <div class="col-md-12 d-flex justify-content-center">
            <div class="card rounded-4" style="background-color:rgba(205, 205, 227, 0.8);">
                <div class="row">
                    <div class="col-md-3 div-superior px-4">
                        <a href="{{ url('/landing') }}"><img src="images/Preguntados-Logo.png" class="img-fluid" alt="images"></a>
                    </div>
                </div>
               <div class="card-body">
                    <!-- CREACION DE 2 COLUMNAS EN LA MISMA FILA -->
                    <div class="row">
                        <div class="col-md-3 d-flex">
                            <div class="card flex-fill">
                                <div class="card-body">
                                     <!-- CREACION DE BOTON PANEL -->
                                     <a href="{{ url('/menu') }}">
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
                                     <a href="{{ url('/nuevo') }}">
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
                                     <a href="{{ url('/listado') }}">
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
                                     <a href="{{url('/')}}">
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
                        <div class="col-md-9 d-flex">
                            <div class="card flex-fill">
                                <div class="card-body">
                                     <h2 class="card-title mt-4 fw-semibold" style="color:#1000c0">Panel</h2>
                                     <!-- Creacion de 8 cards,4 en cada una de las 2 filas -->
                                     <!-- Creacion de row con 4 cards -->
                                     <div class="row mt-3">
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-body" style="background-color:rgb(219, 219, 219);">
                                                    <h3 class="card-title text-center">Total</h3>
                                                    <h4 class="text-center" style="color: rgb(118, 22, 170);">1000</h4>
                                                    <h5 class="text-center" style="color:#1000c0">preguntas</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-body" style="background-color:rgb(219, 219, 219);">
                                                    <h3 class="card-title text-center">Tipos</h3>
                                                    <h4 class="text-center" style="color: rgb(118, 22, 170);">3</h4>
                                                    <h5 class="text-center" style="color:#1000c0">preguntas</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-body" style="background-color: rgb(219, 219, 219);">
                                                    <h3 class="card-title text-center">Curso 1</h3>
                                                    <h4 class="text-center" style="color: rgb(118, 22, 170);">200</h4>
                                                    <h5 class="text-center" style="color:#1000c0">preguntas</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-body" style="background-color:rgb(219, 219, 219);">
                                                    <h3 class="card-title text-center">Curso 2</h3>
                                                    <h4 class="text-center" style="color: rgb(118, 22, 170);">200</h4>
                                                    <h5 class="text-center" style="color:#1000c0">preguntas</h5>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                     <!-- Creacion de segundo row con 4 cards -->
                                     <div class="row py-5 ">
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-body" style="background-color:rgb(219, 219, 219);">
                                                    <h3 class="card-title text-center">Curso 3</h3>
                                                    <h4 class="text-center" style="color: rgb(118, 22, 170);">200</h4>
                                                    <h5 class="text-center" style="color:#1000c0">preguntas</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-body" style="background-color:rgb(219, 219, 219);">
                                                    <h3 class="card-title text-center">Curso 4</h3>
                                                    <h4 class="text-center" style="color: rgb(118, 22, 170);">200</h4>
                                                    <h5 class="text-center" style="color:#1000c0">preguntas</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-body" style="background-color:rgb(219, 219, 219);">
                                                    <h3 class="card-title text-center">Curso 5</h3>
                                                    <h4 class="text-center" style="color: rgb(118, 22, 170);">100</h4>
                                                    <h5 class="text-center" style="color:#1000c0">preguntas</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-body" style="background-color:rgb(219, 219, 219);">
                                                    <h3 class="card-title text-center">Curso 6</h3>
                                                    <h4 class="text-center" style="color: rgb(118, 22, 170);">100</h4>
                                                    <h5 class="text-center" style="color:#1000c0">preguntas</h5>
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
          </div>
        </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> 
</body>
</html>