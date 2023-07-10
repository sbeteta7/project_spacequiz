<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profesor Menú</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/codigosala.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&family=Poppins&display=swap" rel="stylesheet">
    <meta name="robots" content="noindex, follow">
    <style>
        
        body {
    background-image: url("../images/marte8.jpg");
}

/* Estableciendo diseños para los label de los select */
.combito label {
    color: white;
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    margin-bottom: 5px;
}

/* Estableciendo color para el combo select */
.combito select {
    background-color: white;
    color: black;
}

/* Definiendo estilos para la creación del encabezado de la sala */
#encabezado {
    background-color: black;
    color: white;
    text-align: center;
    padding: 20px; 
    margin-bottom: 20px;
}

/* Definiendo estilos para la creación del encabezado de la sala con la etiqueta 'h2' */
#encabezado h2 {
    margin-bottom: 10px;
}

/* Definiendo estilos para la creación del código de la sala */
.codigo-sala {
    background-color: white;
    color: black;
    padding: 20px;
    text-align: center;
    font-size: 40px;
    font-weight: bold;
    margin-bottom: 20px;
}

.espacios-negros {
    background-color: black;
    height: 20px;
    margin-bottom: 20px;
    margin: 10px;
}

.btn-iniciar-juego {
    background-color: black;
    color: white;
    font-size: 24px;
    font-weight: bold;
    padding: 10px 30px;
    margin-bottom: 20px;
    margin-left: auto;
    margin-right: auto;
    display: block;
}

/* Estableciendo separación del navbar con el contenido inferior */
.navbar {
    margin-bottom: 50px;
}

/* Estableciendo color del texto de logo de NavBar */
.navbar-brand{ 
    color: white;
}

/* Cambiando tamaño de logo preguntados */
.custom-image12 {
    max-width: 40px;
    height: auto;
}

/* ... tu código CSS existente ... */

.responsive-container {
    padding: 20px;
    margin: 0 auto;
    max-width: 800px; /* Ajusta el ancho máximo según tus necesidades */
}

@media (max-width: 768px) {
    .responsive-container {
        padding: 10px;
    }
}

.espacios-negros {
    background-color: black;
    height: 20px;
    margin-bottom: 20px;
    margin: 5px;
    max-width: 60px; 
    margin-left: 15px;
    
    /* Ajusta el ancho máximo según tus necesidades */
}

/* ... tu código CSS existente ... */
    </style>
</head>

<body>
    <!-- Estableciendo NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid px-3">
            <a href="landing.html">
                <img src="images/Logo - copia.png" class="image-fluid custom-image12" alt="">
                <b class="navbar-brand px-2" style="color:white">SPACE QUIZ</b>
            </a>
            <div class="d-flex align-items-center justify-content-end">
                <select class="form-select" id="moduleSelect" onchange="redirect()">
                    <option value="" selected disabled>Salir</option>
                    <option value="1">Configuración</option>
                    <option value="2">Menú</option>
                </select>
            </div>
        </div>
    </nav>
    <div class="container col-md-12" id="cuerpo">
        <div class="responsive-container">
            <!-- Estabkeciendo color de fondo transparente -->
            <div style="background-color: rgba(255, 255, 255, 0.5);">
                <div id="encabezado" class="container">
                    <h2>Código de la sala</h2>
                    <!-- Estableciendo redondeado -->
                    <div class="codigo-sala rounded-5">
                        xxxx-xxxx
                    </div>
                </div>
                <!-- Definiendo los espacios donde se mostrarán los Alumnos que ingresen al juego -->
                <div class="row" id="row">
                    <!-- Aquí se generarán los 20 espacios negros -->
                </div>
                <!-- Definiendo la creación de botón iniciar juego -->
                <div class="py-3">
                    <button class="btn btn-warning btn-lg btn-iniciar-juego py-3 rounded-5">INICIAR JUEGO</button>
                </div>
            </div>
        </div>
    </div>
    <script >

function redirect() {
    var select = document.getElementById("moduleSelect");
    var option = select.options[select.selectedIndex].value;
    if (option === "1") {
        window.location.href = "configuracion.html";
    } else if (option === "2") {
        window.location.href = "menuprofesores.html";
    }
}

const row = document.getElementById('row');

for (let i = 0; i < 20; i++) {
  const espacioNegro = document.createElement('div');
  espacioNegro.className = 'col-md-1 espacios-negros';
  const nombreUsuario = document.createElement('div');
  nombreUsuario.innerText = 'Usu' + (i + 1);
  nombreUsuario.style.fontWeight = 'bold';
  nombreUsuario.style.color = 'white';
  espacioNegro.appendChild(nombreUsuario);
  row.appendChild(espacioNegro);
}
    </script>
</body>

</html>