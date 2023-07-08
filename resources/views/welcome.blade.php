<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
 <!-- Link para CSS -->
 <link rel="stylesheet" type="text/css" href="css/styles.css">

 <!-- En esta ocasión usé boxicons (como fontawesome) -->
 <link rel="stylesheet" 
 href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

 <!-- Y también remixicons -->
 <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

 <!-- Link para google fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Poppins:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Permanent+Marker&family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
</head>


    <body style="background-image: url(images/venus1prueba.jpg);" class="hero">

        <div class="container">
            <header>
                <img src="images/Logo - copia.png" alt="">
                <a href="landing.html" class="logo">Space Quiz</a>
                <ul class="navlist">
                @if (Route::has('login'))
                    @auth
                        <li><a href="info.html">Más Información</a></li>
                        <li><a href="jugar.html">¿Cómo jugar?</a></li>
                        <li><a href="{{ url('/redirects') }}">Inicio</a></li>

                    @else
                    <li><a href="info.html">Más Información</a></li>
                    <li><a href="jugar.html">¿Cómo jugar?</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('tipo_cuenta')}}">Registrar</a></li>
                        
                    @endauth

                @endif
                </ul>
            </header>
        
            <section class="hero">
                <div class="hero-text">
                    <h5></h5>
                    <h4>Bienvenido a</h4>
                    <h1>SPACE QUIZ</h1>
                    <p>¡Tu espacio para poder aprender y jugar a la vez!</p>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/redirects') }}" class="ctaa"><i class="ri-login-box-line"></i>INICIO</a>
                    @else

                            <a href="{{ route('tipo_cuenta') }}">Registrarme</a>

                            <a href="{{ route('login') }}" class="ctaa"><i class="ri-login-box-line"></i>Iniciar sesión</a>
                            @endauth
                            @endif
                </div>
        
                <div class="hero-img">
                    <img src="images/astronauta.png" alt="" class="flotar">
                </div>
            </section>
        <script src="js/script.js"></script>
    </body>
</html>

