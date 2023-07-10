<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Cómo jugar?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body style="background-image: url({{ asset('images/FondoEspacio4.jpg') }});">
    
    <div class="container py-5">
        <div class="row">
            <!-- CONSTRUYENDO PRIMERA COLUMNA QUE OCUPA 7 ESPACIOS -->
            <div class="col-md-7">
                <!-- CONSTRUYENDO CARD EXTERIOR DE COLOR GRIS -->
                <div class="rounded-5 px-4 py-4" style="background-color:rgba(205, 205, 227, 0.8);">
                    <!-- CONSTRUYENDO CARD BLANCO DENTRO DE CARD GRIS -->
                    <div class="rounded-5" style="background-color: white;">
                        <!-- DEFINIENDO FILA CON IMAGEN DE COMO JUGAR Y SU TITULO -->
                        <div class="row" >
                           <!-- CREACION DE ESPACIO QUE OCUPARA LA IMAGEN DE 'COMO JUGAR'-->
                           <div class="col-md-2 px-5 mt-3">
                              <img src="{{asset('images/icono__mando.png')}}" class="image-fluid custom-image9" alt="images">
                           </div> 
                           <!-- CREACION DE ESPACIO DE 'COMO JUGAR' -->
                           <div class="col-md-10 py-1 mt-3">
                              <div class="fs-3 fw-semibold" style="color: rgb(118, 22, 170);">¿Cómo Jugar? </div>
                           </div>
                           <!-- CREACION DE BORDE INFERIOR DE 'COMO JUGAR'-->
                           <div class="col-md-11 mx-auto">
                              <div class="border border-dark"></div>
                           </div>
                           <!-- DEFINIENDO CARD CON LAS COLUMNAS QUE OCUPARA EL TEXTO -->
                           <div class="col-md-9 px-5 mt-4 g-0">
                              <div class="card rounded-5 mx-auto" style="background-color: rgb(219, 219, 219);">
                                 <div class="px-3 fs-3 fw-regular">Ingresa el código proporcionado por el profesor en la página de Space Quiz</div>
                              </div>
                           </div>
                           <!-- DEFINIENDO LAS COLUMNAS QUE OCUPARA LA IMAGEN DE 'REGLAS'-->
                           <div class="col-md-3 g-0">
                              <img src="{{asset('images/cartel.png')}}" class="custom-image10 image-fluid" alt="image">
                           </div>
                           <!-- CREACION DE ESPACIO QUE OCUPARA LA IMAGEN de REGLAS-->
                           <div class="col-md-2 px-5">
                              <img src="{{asset('images/icono_check.png')}}" class="image-fluid custom-image9" alt="images">
                           </div>
                           <!-- DEFINIENDO LAS COLUMNAS QUE OCUPARA LA CREACION DE TITULO DE 'REGLAS'  -->
                           <div class="col-md-9 py-1">
                              <div class="fs-3 fw-semibold" style="color: rgb(118, 22, 170);">Reglas</div>
                           </div>
                           <!-- CREACION DE BORDE DE REGLAS-->
                           <div class="col-md-11 mx-auto">
                              <div class="card border border-dark "></div>
                           </div>
                           <!-- DEFINIENDO LAS COLUMNAS QUE OCUPARA LA IMAGEN DE REGLAS -->
                           <div class="col-md-4 px-5">
                              <img src="{{asset('images/icono_inidicaciones.png')}}" class="custom-image11 py-3" alt="image">
                           </div>
                           <!-- DEFINIENDO LAS COLUMNAS QUE OCUPARA EL TEXTO DE REGLAS -->
                           <div class="col-md-8 px-5 mt-4">
                              <div class="card rounded-5 mx-auto" style="background-color: rgb(219, 219, 219);">
                                 <div class="px-3 fs-3 fw-regular">Responde a las preguntas lo más rápido y preciso posible</div>
                              </div>
                           </div>
                           <!-- DEFINIENDO COLUMNAS QUE OCUPARA LA CREACION DE LA IMAGEN DEL TITULO DE CONSEJOS -->
                           <div class="col-md-2 px-5">
                              <img src="{{asset('images/icono_idea.png')}}" class="image-fluid custom-image9" alt="images">
                           </div>
                           <!-- DEFINIENDO CONSTRUCCION DE TITULO DE CONSEJOS -->
                           <div class="col-md-10 py-1">
                              <div class="fs-3 fw-semibold" style="color: rgb(118, 22, 170);">Consejos</div>
                           </div>
                           <!-- CREACION DE BORDE DE TITULO DE CONSEJOS -->
                           <div class="col-md-11 mx-auto">
                              <div class="card border border-dark "></div>
                           </div>
                           <!-- CREACION DE TEXTO DE CONSEJOS -->
                           <div class="col-md-12 px-5 py-4">
                              <div class="card rounded-5 mx-auto" style="background-color: rgb(219, 219, 219);">
                                 <div class="px-3 fs-3 fw-regular">Contesta con rapidez, mantén la calma y confianza.</div>
                              </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DEFINIENDO LAS 5 COLUMNAS QUE USARA LA IMAGEN DEL ASTRONAUTA  -->
            <div class="col-md-5">
                <img src="{{asset('images/astronauta5.jpg')}}" class="image-fluid mx-auto mt-5 custom-image18 flotar" alt="image">
            </div>
        </div>   
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>    
</body>
</html>