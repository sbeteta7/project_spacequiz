<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</head>
<body style="background-image: url({{asset('images/Venus2prueba.jpg')}});">
    <!-- Desconozco, pero al parecer aumenta el rango en altura del cuerpo -->
    <div style="display: flex;flex-direction: column; height: 100vh;">
        <!-- Estableciendo NavBar -->
        <nav class="navbar  navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid px-3">
                <a href="{{asset('/')}}">
                    <img src="{{asset('images/Logo - copia.png')}}" class="custom-image12" alt="">
                <b class="navbar-brand px-2" style="color:white">SPACE QUIZ</b>        
                </a>    
            </div>
            <!-- Creación de despliegue de menú dentro del NavBar -->
            <div class="col-1" id="navclock">
                <div class="d-flex align-items-center justify-content-center px-3">
                    <select class="form-select" id="" onchange="redirect()">
                        <option value="" selected disabled>Salir</option>
                        <option value="1">Configuración</option>
                        <option value="2">Menú</option>
                    </select>
                </div>
            </div>
        </nav>
<!-- Creación de otro cuerpo o caja que contendrá una tabla con el contenido de los resultados de los estudiantes -->
<div style="background-color:rgb(219, 219, 219);">
 <!-- Creación de fondo blanco que contendrá la tabla  -->
<div style="background-color:white; width: 80%; height: 100%;position: absolute; left: 10%;"> <!--Contenedor general de la segunda pagina-->
    <!-- Estableciendo título superior con su imagen de la tabla -->
    <div style="padding: 100px 0px 100px 0px">
        <!-- Insertando título -->
        <div style="background-color: blueviolet; border-bottom: 2px solid black; border-top: 2px solid black;" class="rounded-3">
            <p style="font-size: 3.5vw; padding: 15px;" class="text-white">Mis evaluaciones</p>
        </div>
        <!-- Insertando imagen -->
        <div style="position:absolute; top: 10vh; right: 120px;">
            <img src="{{asset('images/nave3.jpg')}}" width="160px" height="200px" alt="">
        </div>
    </div>
    <!-- Definiendo pequeño formulario con su posición izquierda -->
    <div class="" style="padding-left: 100px;">
        <form action="" class="d-flex">
            <!-- Insertando input de tipo calendario -->
            <div style="padding-right: 10px;">
                <input type="date" id="start" name="trip-start">
            </div>
            <!-- Insertando input en el que se buscará por módulo -->
            <div style="padding-left: 10px;">
                <input type="text" class="form-control" placeholder="Buscar por módulo">
            </div>
        </form>
    </div>
    <!-- Definiendo contenido de la tabla con sus estilos -->
    <div style="padding: 10px 100px 10px 100px;">
        <table class="table table-striped table-hover">
            <thead>
                <!-- Estableciendo nombres de las columnas -->
                <tr class="table100-head">
                    <th class="column1">Ranking</th>
                    <th class="column2">Estudiante</th>
                    <th class="column3">Usuarios</th>
                    <th class="column6">Puntaje Total</th>
                </tr>
            </thead>
            <!-- Estableciendo contenido de las columnas con tbody -->
            <tbody>
                <tr>
                    <td class="column1">1</td>
                    <td class="column2">Gabriel Vilca</td>
                    <td class="column3">gvilca</td>
                    <td class="column6">2000</td>
                </tr>
                <tr>
                    <td class="column1">2</td>
                    <td class="column2">Alexander Flores</td>
                    <td class="column3">aflore</td>
                    <td class="column6">1800</td>
                </tr>
                <tr>
                    <td class="column1">3</td>
                    <td class="column2">Aejandra Gomes</td>
                    <td class="column3">agomes</td>
                    <td class="column6">1600</td>
                </tr>
                <tr>
                    <td class="column1">4</td>
                    <td class="column2">Camila Espinoza</td>
                    <td class="column3">cespinoza00</td>
                    <td class="column6">1500</td>
                </tr>
                <tr>
                    <td class="column1">5</td>
                    <td class="column2">Alessandro Flores</td>
                    <td class="column3">mrbeast</td>
                    <td class="column6">1000</td>
                </tr>
                <tr>
                    <td class="column1">5</td>
                    <td class="column2">Alessandro Flores</td>
                    <td class="column3">mrbeast</td>
                    <td class="column6">1000</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<script src="https://kit.fontawesome.com/a70db94014.js" crossorigin="anonymous"></script>
</body>
</html>