<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/styles.css">
</head>

<body class="fondo">
    <div style="display: flex;flex-direction: column; height: 100vh;">

        <header>
            <img src="images/Logo - copia.png" alt="">
            <a href="{{ route('welcome') }}" class="logo">Space Quiz</a>
            <ul class="navlist">
            @if (Route::has('login'))
                @auth
                    <li><a href={{ route('info') }}>Más Información</a></li>
                    <li><a href="{{ route('guia') }}">¿Cómo jugar?</a></li>
                    <li><a href="{{ url('/redirects') }}">Inicio</a></li>

                @else
                <li><a href="{{ route('info') }}">Más Información</a></li>
                <li><a href="{{ route('guia') }}">¿Cómo jugar?</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('tipo_cuenta')}}">Registrar</a></li>
                    
                @endauth

            @endif
            </ul>
        </header>
        
    <!--sección principal-->
            @yield('registro_contenido')

    </div>




    <script src="https://kit.fontawesome.com/a70db94014.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        const estudiante= document.getElementById('estudiante')
        const docente= document.getElementById('docente')
        const comite= document.getElementById('comite')
        const  formulario_role= document.getElementById('form_role')
        //const link_role=document.getElementById('submit_form_role')

        function active_radio(value) {
            //document.querySelectorAll(`input[name="${name}"]`).forEach(element => {
            //if(element.value === value) {
            if (value==1) {
                comite.checked = true;
            } else if (value==2) {
                docente.checked = true;
            } else if (value==3) {
                estudiante.checked = true;
            }  
        //}
        }

        /*function enviar_form_role(){
            
            e.preventDefault();
  
            formulario_role.submit();

        } */
    
        function enviar_form_role(){
            //link_role.click();
            formulario_role.submit();
        }
    </script>

</body>

</html>


