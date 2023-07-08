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
    <body style="background-image: url(images/marte3.jpg);">
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
      
        <div class="container col-md-12" id="cuerpo2">
            <div style="background-color: rgba(128, 128, 128, 0.5);">
                <p></p>
                <div id="encabezado" class="container">
                    <div class="row">
                        <img src="images/astro.png" alt="">
                        <div class="col-sm-10 d-flex align-items-center justify-content-center" id="preguntaB">
                            <b>¡BIENVENIDO, CREA TU JUEGO Y EVALÚA!</b>
                        </div>
                        <a href="configuracion.html">
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-danger" id="botoncrear">
                                <i class="ri-gamepad-line"></i>
                                <a href="{{"configuracion"}}"> Crear Juego</a>
                            </button>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
        <script src="js/menuprofesores.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
      </body>
</html>
