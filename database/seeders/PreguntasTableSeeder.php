<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PreguntasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('preguntas')->delete();
        
        \DB::table('preguntas')->insert(array (
            0 => 
            array (
                'id_pregunta' => 1,
                'pregunta' => '¿Cuál de las siguientes afirmaciones es cierta acerca de las bases de datos NoSQL?',
                'estado' => NULL,
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
                'estado' => NULL,
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
                'estado' => NULL,
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
                'estado' => NULL,
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
                'estado' => NULL,
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
                'estado' => NULL,
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
                'estado' => NULL,
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
                'estado' => NULL,
                'id_especialidad' => 1,
                'id_ciclo' => 3,
                'id_curso' => 1,
                'id_modulo' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}