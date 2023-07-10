<!DOCTYPE html>
<html lang="en">

<head>
    <title>configuracion Sala de Juegos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&family=Poppins&display=swap" rel="stylesheet">
    <meta name="robots" content="noindex, follow">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
</head>
<body >

    <div class="container-fluid" style="background-image:url(images/cielo.jpg) ">
        <!-- Main='contenido principal de body' estableciendo estilo del body -->
        <main style="height: 100vh; display: flex;flex-direction: column;" class="px-5">



            <!-- Estableciendo diseño de la barra superior con avance de las preguntas -->
            <div style="background-color: rgb(255, 97, 97);display: flex;" class="rounded-5">
   
                <!--Estableciendo barra de avance de preguntas-->
                <div style="display: flex; flex-grow: 8;flex-direction: column;">
                    <!-- Estableciendo margen de separación superior con su div-->
                    <div style="padding: 10px 30px 0px 30px;">
                        <!-- Estableciendo diseño y color de barra y su progreso 

                        <div style="background-color: rgba(255, 255, 255);height: 10px;" class="rounded-5">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100">25%
                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                    <!-- Definiendo posición y estilo del contador en la parte imferior de la barra -->
                    <div style="width: 100%;display: flex;justify-content: center;align-self: center;align-items: center;" class="">
                        <!-- Contador del tiempo dentro de barra-->
                        <p  id="duracion" data-valor={{$duracion}} hidden></p>
                        <p style="height: 100%;margin: 0px!important;" class="text-white" id="contador"></p>
                    </div>
                </div>
                <!-- Estableciendo botón de 'Salir' con su posición en la barra de avance de pregunta -->
                <div style="display: flex;flex-grow: 1;justify-content: center;align-items: center;">
                    <!-- Estableciendo estilo del botón con su forma y grosor de su borde -->
                    <button class="" style="height: 60%;width: 50%;border-radius: 20px;">
                        <a href="landing.html"style="text-decoration: none;"> Salir</a>
                    </button>
                </div>
            </div>


            <!-- Formulario partida  -->
            <form  action="{{ route('calcular_puntaje') }}" method="POST" id="form_juego" >
            @csrf


                <input type="text" hidden value="{{$id_partida}}" name="id_partida">
                <input type="text" hidden name="tiempo_terminado" id="tiempo">


            <div style="display: flex;flex-direction: column;height: 100%;" id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @php
                    $index = 0;
                    @endphp
                <!-- Estableciendo el color de fondo y tamaño que ocupará la pregunta -->
                   
            @foreach ($grupo_pregunta as $id_pregunta => $pregunta)

            <div class="card carousel-item @if ($index === 0) active @endif">
                                 
                
                
                
                
                
                
                
                
                
                <!--Texto indicando el número de preguntas en la que estás y su posición-->
                <div style="display: flex; flex-grow: 1;justify-content: center;align-items: center;">
                    
                    <div class="" style="position:relative;top:0%">{{$index+1}}/{{$total_preguntas}}</div>
                </div>
                            <div style="height: 50%;background-color:rgba(205, 205, 227, 0.45);">
                                <!-- Estableciendo posición del texto dentro del fondo blanco de forma vertical -->
                                <div style="display: flex;padding:50px">
                                    <!-- Estableciendo el porcentaje del ancho del div en el que estará posicionado el texto -->
                                    <div style="width: 90%; ; display: flex;flex-direction: column;justify-content: center;">
                                       
                                        @foreach ($pregunta as $texto_pregunta=>$respuesta)
                                        <input type="text" name="pregunta[{{ $id_pregunta }}]" hidden 
                                        value="{{$texto_pregunta}}">
                                        <div style="font-size: 3vw;" class="text-center text-dark h1 fw-bold">{{$texto_pregunta}}</div>

                                    </div>
                                </div>
                            </div>

                            <!-- Estableciendo la sección de las alternativas con su estilizado principal-->
                            <div style="background-color:white; display: flex;flex-direction: column;height: 50%;" >
                                <!-- Definiendo posición del las opciones -->
                                <div style="display: flex; justify-content: center;height: 88%;">
                                    <!-- Definiendo tamaño de las opciones de las preguntas -->
                                    <div style="display: flex;flex-direction: column;justify-content:space-evenly;width: 70%;">
                                        
          
                                            @foreach ($respuesta as $texto_respuesta=>$estado)
                                        
                                        <div class="form-check" style="padding: 0px 100px 0px 100px">
                                            <label>{{$texto_respuesta}}</label> 

                                                <input class="form-check-input" type="radio"  name="respuestas[{{ $id_pregunta }}]" value="{{ $texto_respuesta }}">
                                                
                                        </div> 
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        
        <!-- Termina da-->    </div>
                        @endforeach
                        @php
                            $index++;
                        @endphp
                        
                        


                    @endforeach
               </div>


                <div style="background-color: black;height: 5%;display: flex;justify-content:space-between;padding: 0 10% 0 10%;" class="rounded">
                    <!--Pasar a siguiente pregunta-->
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev" style="width: 20px">
                        <i class="fa-solid fa-caret-left" style="color: white;  font-size: 40px;"></i>
                    </a>

                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <i class="fa-solid fa-caret-right" style="color: white;font-size: 40px;"></i>
                    </a>
                    
                </div>
                

        <!--Terminar carousel--> </div>
         <button  id="enviar_form"  class="btn btn-primary">Enviar respuestas</button>
            </form>


            
        </main>
    
    
    </div>    

<script>


  $(document).ready(function() {
      $('#carousel').carousel({
          interval: false // Para detener la rotación automática del carrusel
      });

      $('.carousel-control-prev').click(function() {
          $('#carousel').carousel('prev');
      });

      $('.carousel-control-next').click(function() {
          $('#carousel').carousel('next');
      });
  });
</script>

<script>
    const form_estado_game= document.getElementById('form_juego');
    var  input_tiempo=document.getElementById('tiempo');
    contador = 0;

    var duracion = document.getElementById("duracion").getAttribute('data-valor')
    duracion=duracion*60



    // Función para convertir segundos a formato de hora, minuto y segundo (HH:MM:SS)
    function convertirTiempo(segundos) {
      var horas = Math.floor(segundos / 3600);
      var minutos = Math.floor((segundos % 3600) / 60);
      var segundos = segundos % 60;

      var tiempoFormateado = horas.toString().padStart(2, '0') + ':' +
                             minutos.toString().padStart(2, '0') + ':' +
                             segundos.toString().padStart(2, '0');

      return tiempoFormateado;
    }
    
    //Etiqueta del contador
    var etiqueta_contador=document.getElementById("contador");

    function FinJuego(){
        document.getElementById('enviar_form').addEventListener('click',function(event){
            event.preventDefault();

            input_tiempo.value=etiqueta_contador.innerHTML;
            form_estado_game.submit();
        })
    }

    // Función para iniciar el temporizador
    function iniciarTemporizador() {
      // Verificar si ya existe un valor almacenado en localStorage
      if (localStorage.getItem('contador')) {
        // Recuperar el valor del contador
        //parseInt(localStorage.getItem('contador'))
        var contador = 100;
      } else {
        // Si no hay un valor almacenado, establecer un valor inicial
        var contador = duracion; // Establece aquí el valor inicial deseado en segundos
      }

      // Actualizar el valor del contador en formato de tiempo
      document.getElementById('contador').innerHTML = convertirTiempo(contador);

      // Intervalo de tiempo para actualizar el contador cada segundo (1000 ms)
      var intervalo = setInterval(function() {
        // Reducir el valor del contador en 1
        contador--;

        // Actualizar el valor del contador en formato de tiempo
        document.getElementById('contador').innerHTML = convertirTiempo(contador);

        // Almacenar el valor actual del contador en localStorage
        localStorage.setItem('contador', contador.toString());
        
        // Verificar si el contador ha llegado a 0
        if (contador === 0) {
          // Detener el intervalo de tiempo
          clearInterval(intervalo);
          input_tiempo.value=convertirTiempo(duracion);
          form_estado_game.submit();

        }
      }, 1000);

      FinJuego()
    }


    // Llamar a la función para iniciar el temporizador
    iniciarTemporizador();
    
  </script>
<script src="https://kit.fontawesome.com/a70db94014.js" crossorigin="anonymous"></script> 
</body>


</html>