<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('preguntas')->delete();
        
        DB::table('preguntas')->insert(array (
            0 => 
            array (
                'id_pregunta' => 1,
                'pregunta' => '¿Cuál de las siguientes afirmaciones es cierta acerca de las bases de datos NoSQL?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_pregunta' => 2,
                'pregunta' => '¿Cuál de las siguientes opciones describe mejor la consistencia en una base de datos NoSQL?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_pregunta' => 3,
                'pregunta' => '¿Qué tipo de estructura de datos utiliza una base de datos NoSQL?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id_pregunta' => 4,
                'pregunta' => '¿Cuál de los siguientes ejemplos es un caso de uso adecuado para una base de datos NoSQL?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id_pregunta' => 5,
                'pregunta' => '¿Cuál de las siguientes opciones se utiliza para mostrar todos los documentos de una colección en MongoDB?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id_pregunta' => 6,
                'pregunta' => '¿Cuál de las siguientes opciones muestra cómo conectarse a una instancia de MongoDB utilizando la shell?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id_pregunta' => 7,
                'pregunta' => '¿Cuál de las siguientes opciones se utiliza para mostrar todas las bases de datos disponibles en MongoDB?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id_pregunta' => 8,
                'pregunta' => '¿Cuál de las siguientes opciones se utiliza para insertar un documento en una colección en MongoDB?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),

            8 =>
            array (
                'id_pregunta' => 9,
                'pregunta' => '¿Cuál de las siguientes características es común en las bases de datos relacionales?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array (
                'id_pregunta' => 10,
                'pregunta' => '¿Cuál de las siguientes opciones describe mejor la escalabilidad horizontal?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 =>
            array (
                'id_pregunta' => 11,
                'pregunta' => '¿Qué tipo de índice se utiliza comúnmente en una base de datos relacional para mejorar el rendimiento de las consultas?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 =>
            array (
                'id_pregunta' => 12,
                'pregunta' => '¿Cuál de las siguientes opciones describe mejor la normalización en las bases de datos relacionales?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 =>
            array (
                'id_pregunta' => 13,
                'pregunta' => '¿Cuál de los siguientes ejemplos es un caso de uso adecuado para una base de datos relacional?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 =>
            array (
                'id_pregunta' => 14,
                'pregunta' => '¿Cuál de las siguientes opciones se utiliza para crear una tabla en MySQL?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 =>
            array (
                'id_pregunta' => 15,
                'pregunta' => '¿Cuál de las siguientes opciones se utiliza para agregar una columna a una tabla existente en MySQL?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 =>
            array (
                'id_pregunta' => 16,
                'pregunta' => '¿Cuál de las siguientes opciones se utiliza para eliminar una tabla en MySQL?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 =>
            array (
                'id_pregunta' => 17,
                'pregunta' => '¿Cuál de las siguientes opciones se utiliza para actualizar registros en una tabla en MySQL?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 =>
            array (
                'id_pregunta' => 18,
                'pregunta' => '¿Cuál de las siguientes opciones se utiliza para realizar una consulta básica en MySQL?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 =>
            array (
                'id_pregunta' => 19,
                'pregunta' => '¿Cuál de las siguientes opciones se utiliza para filtrar los resultados de una consulta en MySQL?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 =>
            array (
                'id_pregunta' => 20,
                'pregunta' => '¿Cuál de las siguientes opciones se utiliza para ordenar los resultados de una consulta en MySQL?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 =>
            array (
                'id_pregunta' => 21,
                'pregunta' => '¿Cuál de las siguientes opciones se utiliza para realizar una consulta con joins en MySQL?',
                'estado' => 1,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}