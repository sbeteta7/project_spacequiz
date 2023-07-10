<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->


        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Alumno</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body  style="background-image: url(images/Venus2prueba.jpg);">


            <div style="display: flex;flex-direction: column; height: 100vh;">
                <!-- Estableciendo NavBar -->
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
                <!--Estabeciendo espacio y fondo para ingresar el código para empezar a jugar -->
                <div class="text-white" id="box_fondo" style="height: 100%;">
                    <div class=" d-flex justify-content-center" style="padding: 50px;"><!--Titulo de seccion-->
                        <p style="font-size: 4vw;" class="fw-semibold">¡ Ingresa el código para empezar a jugar !</p>
                     </div>
                     <!--Caja de imagen y formulario-->
                     <div style="display: flex;">
                        <!-- Estableciendo la caja de código de la sala con su posición en la página-->
                        <div class="d-flex justify-content-center" style="width: 50%;"> 
                            <img src="images/astro.png" class="circular--square" width="800px" height="300px" alt="">
                        </div>
                        <!-- Estableciendo posición de caja de código e imagen -->
                        <div class="d-flex justify-content-start" style="width: 50%;">
                            <!--Estbleciendo diseño de caja en la que se ingresará el código de la sala -->
                            <div class=" d-flex justify-content-center align-items-center rounded-5"
                                       style="padding: 20px;border: 2px solid black;background-color: rgba(0, 0, 0, 0.13); 
                                       border-radius: 10px">
                                <!-- Definiendo Contenido de sala con su estilo -->
                                <div >

                                    <form action="{{route('crear_juego')}}" method="POST">
                                        @csrf
                                        <!-- Definiendo y estilizando el nombre 'código de sala' -->
                                        <div class="text-center fw-semibold fs-2 rounded-5">
                                            Código de sala
                                        </div>
                                        <!-- Definiendo formulario solo para el input con el código de la sala y el botón que validará el código -->
                                        <div style="padding: 20px 0px 10px 0px;">
                                            <!-- Definiendo input con su estilo de ingresar el código -->
                                            <input type="text" name="codigo" id="codigo" placeholder="Código" class=" form-control rounded-5"
                                                   style="width: 100%; height: 80px; font-size: 40px;background-color: rgb(255, 240, 240);
                                                          border: 2px solid rgb(83, 81, 81);">
                                        </div>
                                        <!-- Definiendo botón de Ingresar con sus estilos -->
                                        <div class="text-center" style="padding: 20px 0px 10px 0px;">
                                              <!--  <input type="submit" name="" id="" class="btn btn-danger btn-lg btn-outline-info fs-2 text-dark fw-semibold"
                                                value="Ingresar"> -->
                                                <input type="submit" >
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    </body>
</html>

