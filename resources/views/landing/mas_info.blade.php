<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel=StyleSheet href="asset{{('css/styles.css')}}" type="text/css" media=screen> 
</head>
<!-- Definiendo fondo de la página -->
<body  style="background-image:url({{asset('images/FondoEspacio5.jpg')}});">
   
    <!-- Definiendo container -->
    <div class="container py-5">
        <!-- Definiendo fila que contendrá primer div transparente -->
        <div class="row">
            <!-- Definiendo el espacio -->
            <div class="col-md-12 d-flex justify-content-center">
                <!-- Estilo transparente del fondo -->
                <div class="card rounded-5 px-4" style="background-color:rgba(205, 205, 227, 0.8);">
                    <!-- Definiendo fila que contendrá logo de Preguntados -->
                    <div class="row">
                        <div class="col-md-3 div-superior px-4">
                            <a href="index.html"><img src="{{asset('images/Preguntados-Logo.png')}}" class="img-fluid" alt="images"></a>
                        </div>
                    </div> 
                      <!-- Definiendo primer cuerpo color blanco que ocupará espacio de 7 columnas -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7 d-flex">
                            <div class="card rounded-5 flex-fill py-4 px-4" style="background-color: white;">
                                <!-- Definiendo título de Misión -->
                                <div class="row px-3 py-4">
                                    <div class="fs-3 fw-bold" style="color: rgb(118, 22, 170);">Misión :</div>
                                </div>
                                <!-- Definiendo contenido de Misión -->
                                <div class="card">
                                    <div class="card-body " style="background-color:rgb(219, 219, 219);">
                                       <div class="p">Nuestra misión es proporcionar a los profesores una herramienta interactiva
                                                      y educativa que les permita realizar exámenes de forma entretenida.
                                       </div>
                                    </div>
                                </div>
                                <!-- Definiendo título de Visión -->
                                <div class="row px-3 py-4">
                                    <div class="fs-3 fw-bold" style="color: rgb(118, 22, 170);">Visión :</div>
                                </div>
                                <!-- Definiendo contenido de Visión -->
                                <div class="card">
                                    <div class="card-body " style="background-color:rgb(219, 219, 219);">
                                       <div class="p">Convertir en la plataforma líder en la realización de
                                                      exámenes, ofreciendo una solución personalizable 
                                                      para la evaluación de los estudiantes.
                                       </div>
                                    </div>
                                </div>
                                <!-- Definiendo título de Información de Programadores -->
                                <div class="row px-3 py-4">
                                    <div class="fs-3 fw-bold" style="color: rgb(118, 22, 170);">Información de los desarrolladores :</div>
                                </div>
                                <!-- Definiendo Nombres de programadores -->
                                <div class="card">
                                    <div class="card-body " style="background-color:rgb(219, 219, 219);">
                                       <div class="p">-Arcos Tejeda, José David <br>
                                                      -Beteta Espinoza, Sebastián Adauco <br>
                                                      -Larez Mauricio, Delvin Onil <br>
                                                      -Torres Pérez, Carlitos Mikhaeñ <br>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Definiendo div con 5 columnas que contendrá información específica de cada programador -->
                            <div class="col-md-5 d-flex">
                                <!-- Estableciendo diseño de Div que contendrá esta información -->
                                <div class="card rounded-5 flex-fill py-4 px-4" style="background-color: white;">
                                    <!-- Definiendo título 'Información de Desarrollador' -->
                                    <div class="row px-3 mx-auto">
                                        <div class="fs-5 fw-bold" style="color: rgb(118, 22, 170);">Información del Desarrollador:</div>
                                    </div>
                                    <!-- Definiendo imagen del programador -->
                                    <div class="card col-md-8 mx-auto">
                                        <div class="card-body ">
                                            <img src="{{asset('images/foto_carlitos.jpeg')}}" class="img-fluid circular--square" alt="images">
                                        </div>
                                    </div>
                                    <!-- Definiendo nombre de Programador -->
                                    <div class="row px-3 py-4 mx-auto">
                                        <div class="fs-5 fw-bold" style="color: rgb(118, 22, 170);">Torres Pérez, Carlitos Mikhael</div>
                                    </div>
                                    <!-- Definiendo div que contiene puesto, estudios y correo de programador -->
                                    <div class="px-5">
                                        <div class="card px-3 rounded-5 " style="background-color:rgb(219, 219, 219);">
                                            <!-- Definiendo puesto -->
                                            <div class="col-md-8 mx-auto mt-3">
                                                <div class="fs-6 fw-bold " style="color: rgb(118, 22, 170);">Puesto: Desarrollador Web</div>
                                            </div>
                                            <!-- Definiendo estudio -->
                                            <div class="col-md-5 mx-auto mt-2">
                                                <div class="fs-6 fw-bold " style="color: rgb(118, 22, 170);">Estudios: Tecsup</div>
                                            </div>
                                            <!-- Definiendo correo -->
                                            <div class="col-md-11 mx-auto py-2">
                                                <div class="fs-6 fw-bold " style="color: rgb(118, 22, 170);">Correo: carlitos.torres@tecsup.edu.pe</div>
                                            </div>
                                            <!-- Definiendo íconos de facebook, instagram y linkedin -->
                                            <div class="row py-2 px-5">
                                                     <!--Creación de ícono facebook  -->
                                                    <div class="col-md-3 mx-auto">
                                                        <a href="#"><img src="{{asset('images/icono_facebook.jpg')}}" class="img-fluid custom-image9" alt="images"></a>
                                                    </div>
                                                     <!--Creación de ícono Instagram  -->
                                                    <div class="col-md-3 mx-auto">
                                                        <a href="#"><img src="{{asset('images/icono_instagram.png')}}" class="img-fluid custom-image9" alt="images"></a>
                                                    </div>
                                                     <!--Creación de ícono Linkedin  -->
                                                    <div class="col-md-3 mx-auto">
                                                        <a href="#"><img src="{{asset('images/icono_linked.png')}}" class="img-fluid custom-image9 " alt="images"></a>
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