<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="asset('css/styles.css')">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">    <link rel=StyleSheet href="css/estilos.css" type="text/css" media=screen> 
    <title>Comité Menú</title>
</head>
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
                        <a href="landing.html"><img src="images/Preguntados-Logo.png" class="img-fluid" alt="images"></a>
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
                                            <img src="images/icono_user.jpg" class="img-fluid img-thumbnail custom-image1" style="max-width: 45px;" alt="imagen">
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
                                            <img src="images/icono_pregunta.png" class="img-fluid img-thumbnail custom-image2" style="max-width: 45px;" alt="imagen">
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
                                            <img src="images/icono_menu.png" class="img-fluid img-thumbnail custom-image3" style="max-width: 45px;" alt="imagen">
                                        </div>
                                        <div class="col-md-9">
                                            <div class="fw-bold mt-2" style="color: rgb(118, 22, 170);">Listado de Preguntas</div>
                                        </div>
                                     </div>
                                     </a>
                                     <!-- CREACION DE BOTON CONFIGURACION DE PREGUNTAS -->
                                     <a href="{{url('/configuracionComite')}}">
                                     <div class="row g-0 mt-3">
                                        <div class="col-md-3">
                                            <img src="images/icono_config.png" class="img-fluid img-thumbnail custom-image4" style="max-width: 45px;" alt="imagen">
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
                                            <img src="images/icono_net.png" class="img-fluid img-thumbnail custom-image5" style="max-width: 45px;" alt="imagen">
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
                                            <img src="images/icono_retroceder.png" class="img-fluid img-thumbnail custom-image6" style="max-width: 45px;" alt="imagen">
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
                                <div class="card-body">
                                     <h2 class="card-title fw-bold mt-4" style="color:#1000c0">Listado de preguntas</h2>
                                </div>
                                <!-- CREANDO TITULOS DE TEMA Y TIPO DE PREGUNTA  -->
                                <div class="row">
                                    <div class="col-md-6 px-5">
                                       <h5 class="card-title mt-3 fw-bold" style="color:#1000c0">Tema:</h5>
                                    </div>
                                    <div class="col-md-6 px-5">
                                       <h5 class="card-title mt-3 fw-bold" style="color:#1000c0"> Tipo de Pregunta:</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- CREACION DE SELECT DE TEMAS DE PREGUNTAS -->
                                    <div class="col-md-6 px-5">
                                        <select class="form-select" aria-label="Default select example" style="background-color:rgb(219, 219, 219);">
                                            <option selected>Temas</option>
                                            <option value="1">Programación orientada a objetos</option>
                                            <option value="2">Base de Datos</option>
                                            <option value="3">Diseño de Interfaces</option>
                                        </select>
                                    </div>
                                    <!-- CREACION DE SELECT DE TIPOS DE PREGUNTAS -->
                                    <div class="col-md-6 px-5">
                                        <select class="form-select" aria-label="Default select example" style="background-color:rgb(219, 219, 219);">
                                            <option selected>Tipos</option>
                                            <option value="1">Opciones múltiples</option>
                                            <option value="2">Abierta</option>
                                            <option value="3">Relacionar</option>
                                          </select>
                                    </div>
                                </div>
                                <!-- CREACION CUADRO DE PRIMERA PREGUNTA -->
                                @foreach ($preguntas as $item)
                                <div class="row g-0 border border-dark mt-4 mx-2">
                                    <!-- CREACION DE PREGUNTA Y BOTONES DE ELIMNAR Y EDITAR -->
                                    <div class="col-md-10 px-5">
                                        <h5 class="mt-3 fw-bold" style="color:#1000c0">Pregunta {{ $item->id_pregunta }}</h5>
                                    </div>
                                    <div class="col-md-2 mx-auto mt-2">
                                        <form action="{{ route('nuevo.edit',['pregunta' => $item]) }}" method="POST">
                                            @csrf
                                            <input type="image" src="images/icono_editar.png" class="btn img-fluid img-thumbnail custom-image7" style="max-width: 45px;" alt="imagen">
                                        </form>
                                        <form action="{{ route('nuevo.destroy',['id_pregunta' => $item->id_pregunta]) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="image" src="images/icono_eliminar.png" class="btn img-fluid img-thumbnail custom-image7" style="max-width: 45px;" alt="imagen">
                                        
                                        </form>
                                    </div>
                                    <!-- CREACION DE BORDE DE LA PREGUNTA 1 -->
                                    
                                    <div class="row g-0 border border-dark mx-auto"></div>
                                    <!-- Creación de espacio de pregunta -->
                                    <div class="col-md-12">
                                        
                                        <div class="fs-5 text-center fw-semibold mt-3">{{ $item->pregunta }}</div>
                                        <div class="col-md-10 px-5">
                                            <br>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th><h5 class="mt-3 fw-bold" style="color:#1000c0">Alternativas</h5></th>
                                                        <th><h5 class="mt-3 fw-bold" style="color:#1000c0">Estado</h5></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($item->respuestas as $respuesta)
                                                    <tr>
                                                        <td>{{ $respuesta->respuesta }}</td>
                                                        <td>{{ $respuesta->estado }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
   
                                </div>
                                @endforeach   
                                </div>         
                            </div>
                        </div>
                    </div>
               </div>
            </div>
          </div>
        </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script></body>
</html>