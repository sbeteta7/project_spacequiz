<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalles preguntas y respuestas
                            <a href="{{ url('/nuevo') }}" class="btn btn-primary float-end">Add</a>
                        </h4>
                    </div>
                    <div>
                        @foreach ($preguntas as $item)
                        <div class="card">
                            <div class="card-body">
                                <a class="btn btn-danger btn-sm float-end" href="{{ url('/editar') }}">Eliminar</a>
                                <a class="btn btn-primary btn-sm float-end" href="{{ url('/editar') }}">Editar</a>
                                <h5 class="card-title">Pregunta {{ $item->id_pregunta }}</h5>
                                <p class="card-text text-center">{{ $item->pregunta }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>


                    <div>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Pregunta</th>
                                <th scope="col">Especialidad</th>
                                <th scope="col">Ciclo</th>
                                <th scope="col">Curso</th>
                                <th scope="col">Módulo</th>
                                <th scope="col">Respuestas</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($preguntas as $item)
                                <tr>
                                    <td>{{ $item->id_pregunta }}</td>
                                    <td>{{ $item->pregunta }}</td>
                                    <td>{{ $item->especialidades }}</td>
                                    <td>{{ $item->ciclo }}</td>
                                    <td>{{ $item->curso }}</td>
                                    <td>{{ $item->modulo }}</td>

                                    <td>
                                        <ul>
                                            @foreach ($item->respuestas as $respuesta)
                                                <li>{{ $respuesta->respuesta }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>    
                                @endforeach
                                
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>