<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EspecialidadesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('especialidades')->delete();
        
        \DB::table('especialidades')->insert(array (
            0 => 
            array (
                'id_especialidad' => 1,
                'especialidad' => 'Diseño y Desarrollo de Software',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_especialidad' => 2,
                'especialidad' => 'Diseño y Desarrollo de Simuladores y Videojuegos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_especialidad' => 3,
                'especialidad' => 'Administración de Redes y Comunicaciones',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id_especialidad' => 4,
                'especialidad' => 'Big Data y Ciencias de Datos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}