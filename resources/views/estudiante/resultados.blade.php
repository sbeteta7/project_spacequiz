<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</head>

<body>
    <div style="display: flex;flex-direction: column; ">
        <nav class=" nav_homesite"
            style="background-color: aliceblue; height: 65px;display:flex;justify-content: space-between;align-items: center;">
            <!--Sección superior de navegación y logo-->

            <div class=""> <!--Icono del logo de la aplicación-->
                <p style="color: rgb(0, 0, 0);">Preguntados</p>
            </div>

            <div class="nav_list"><!--Opciones de navegación de inicio-->

                <div>
                    <i class="fa-solid fa-house"></i>
                </div>

                <div>
                    <i class="fa-sharp fa-solid fa-shoe-prints"></i>
                </div>

                <div>
                    <i class="fa-solid fa-user"></i>
                </div>

            </div>

        </nav>


        <div class="text-white" id="espera_alumno_fondo"
            style="height: 100%;display: flex; flex-direction: column;;justify-content: center">
            <!--Sector principal de pantalla-->
            <div><!--Titulo-->
                <p class="text-white text-center" style="font-size: 3vw;">Tus resultados!</p>
            </div>

            <div class="" style="background-color: rgba(0, 0, 0, 0.712); width: 50%;position: relative;left: 25%;">
                <!--Resultado general-->
                <div class="d-flex">
                    <div style="width: 50%;display: flex;justify-content: center;padding-top: 20px;">
                        <!--Perfil Icono imagen-->

                        <img src="images/foto_carlitos.jpeg" width="150px" height="150px" alt="" class="text-center circular--square">

                    </div>

                    <div style="width: 50%;display: flex;align-items: center;"><!--Nombre de usuario-->
                        <p style="font-size: 3vw;">sbeteta03</p>
                    </div>
                </div>

                <div style="">
                    <div style="padding-top: 20px; display: flex; justify-content:space-evenly;"><!--Puntaje-->
                        <div>
                            <p style="font-size: 1.2vw;">Puntaje</p>
                        </div>

                        <div>
                            <p style="font-size: 1.5vw;">2000</p>
                        </div>
                    </div>

                    <div style="display: flex;justify-content: center    ;"><!--Barra de progreso-->
                        <div style="background-color: aqua;width: 75%;justify-content: center;">
                            <p>50%</p>
                        </div>
                    </div>
                </div>

                <div><!--Estadiscticas-->
                    <div style="">
                        <p style="padding-top:20px ;" class="text-center">Estadísticas</p>
                    </div>
                    <div class="" style="display: flex;justify-content: space-around;">
                        <div class="" style="display: flex; justify-content:space-between;">
                            <p style="padding: 0 10px 0 10px;">Total preguntas</p>
                            <p style="padding: 0 10px 0 10px;">10</p>
                        </div>

                        <div style="display: flex; justify-content:space-between;">
                            <p style="padding: 0 10px 0 10px;">Tiempo</p>
                            <p style="padding: 0 10px 0 10px;">12:05</p>
                        </div>
                    </div>

                    <div style="display: flex;justify-content: space-around;">
                        <div style="display: flex; justify-content:space-between;">
                            <p style="padding: 0 10px 0 10px;">Correctos</p>
                            <p style="padding: 0 10px 0 10px;">5</p>
                        </div>

                        <div style="display: flex; justify-content:space-between;">
                            <p style="padding: 0 10px 0 10px;">Incorrectos</p>
                            <p style="padding: 0 10px 0 10px;">5</p>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($array_respuestas as $id_pregunta=>$pregunta)
            
            @foreach ($pregunta as $texto_pregunta=>$respuestas)
                


            <div style="background-color:white;width: 50%;position: relative;left: 25%;"><!--PReguntas correctas-->
                <div>
                    <div style="display: flex;border: 1px solid black;padding: 10px;"><!--Caja de respuesta correcta-->
                        <div style="width: 100%">
                            <div>
                                <p style="color: black;padding-top: 10px;" class="text-center">{{$texto_pregunta}}</p>
                            </div>

                            <div style="display: flex;flex-direction: column;justify-content:space-evenly">
                                <!--Opciones de preguntas-->
                                
                                    
                          
                                <div style="height: 25%;">
                                    @foreach ($respuestas as $respuesta=>$estado)

                                        <div style="width: 100%;padding:10px">
                                            <button
                                                style="width:100%;height: 70%;border-radius: 20px;

                                                @if($estado===1)
                                                background-color:green;
                                                @endif

                                                " >

                                               <p style="@if($respuesta_elegida[$id_pregunta]===$respuesta)
                                                font-weight:bold;
                                                @if($estado===0)
                                                color:red;
                                                @endif
                                                 @endif  "> 
                                                {{$respuesta}} </p>
                                            </button>
                                        </div>

                                    @endforeach
                                </div>

                               

                            </div>
                        </div>

                                         </div>

    
                </div>


            </div>
            @endforeach
            @endforeach


        </div>
    </div>


    <script src="https://kit.fontawesome.com/a70db94014.js" crossorigin="anonymous"></script>
</body>

</html>