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
    <div class="container py-5">
       <!-- CREACION DE CUADRO GRIS PRINCIPAL EXTERNO -->
       <div class="row ">
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
                                        <a href="{{url('/configuracionComite')}}">
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
                                        <!-- CREACION DE BOTON SALIR MENU DE COMITE -->
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
                            <form action="{{ route('pregunta.store') }}" class="form-control" method="post">
                                @csrf
                            <div class="card flex-fill">
                                <div class="card-body">
                                     <h2 class="card-title mt-2 fw-bold" style="color:#1000c0">Complete la pregunta</h2>
                                </div>
                                <!-- CREACION DE ESTRUCTURA DE OPCION A CON SU INPUT -->
                                <div class="row px-5 mt-4">
                                    <div class="col-md-2 px-4 mx-auto mt-1">
                                        <h5 class="card-title fw-bold" style="color:#1000c0">Opción A</h5>
                                    </div>
                                    <div class="col-md-10 mx-auto">
                                        <input name="respuesta1" type="text" class="form-control" style="background-color:rgb(219, 219, 219);" id="exampleFormControlInput1" placeholder="Ingresa la alternativa de pregunta A">
                                    </div>
                                </div>
                                <!-- CREACION DE ESTRUCTURA DE OPCION B CON SU INPUT -->
                                <div class="row px-5 mt-3">
                                    <div class="col-md-2 px-4 mt-1">
                                        <h5 class="card-title fw-bold" style="color:#1000c0">Opción B</h5>
                                    </div>
                                    <div class="col-md-10 mx-auto">
                                        <input name="respuesta2" type="text" class="form-control" style="background-color:rgb(219, 219, 219);" id="exampleFormControlInput1" placeholder="Ingresa la alternativa de pregunta B">
                                    </div>
                                </div>
                                <!-- CREACION DE ESTRUCTURA DE OPCION C CON SU INPUT -->
                                <div class="row px-5 mt-3">
                                    <div class="col-md-2 px-4 mt-1">
                                        <h5 class="card-title fw-bold" style="color:#1000c0">Opción C</h5>
                                    </div>
                                    <div class="col-md-10 mx-auto">
                                        <input name="respuesta3" type="text" class="form-control" style="background-color:rgb(219, 219, 219);" id="exampleFormControlInput1" placeholder="Ingresa la alternativa de pregunta C">
                                    </div>
                                </div>
                                <!-- CREACION DE ESTRUCTURA DE OPCION D CON SU INPUT -->
                                <div class="row px-5 mt-3">
                                    <div class="col-md-2 px-4 mt-1">
                                        <h5 class="card-title fw-bold" style="color:#1000c0">Opción D</h5>
                                    </div>
                                    <div class="col-md-10 mx-auto">
                                        <input name="respuesta4" type="text" class="form-control" style="background-color:rgb(219, 219, 219);" id="exampleFormControlInput1" placeholder="Ingresa la alternativa de pregunta D">
                                    </div>
                                </div>
                                <!-- CREACION DE ESTRUCTURA DE SELECCION DE RESPUESTA CORRECTA -->
                                <div class="row px-5 mt-3">
                                    <div class="col-md-2 px-4 mt-1">
                                        <h5 class="card-title fw-bold" style="color:#1000c0">Correcta</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="estado" class="form-select" style="background-color:rgb(219, 219, 219);" aria-label="Default select example">
                                            <option selected>Correct</option>
                                            <option value=1>A</option>
                                            <option value=2>B</option>
                                            <option value=3>C</option>
                                            <option value=4>D</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mx-auto py-3">
                                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                </div>
                            </div>
                            </form>
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