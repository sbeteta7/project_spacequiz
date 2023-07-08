<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CursoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('curso')->delete();
        
        \DB::table('curso')->insert(array (
            0 => 
            array (
                'id_curso' => 1,
                'curso' => 'Base de datos avanzado',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_curso' => 2,
                'curso' => 'Sistema operativos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_curso' => 3,
                'curso' => 'Programación Básica para redes',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id_curso' => 4,
                'curso' => 'Fundamento de programación para videojuegos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}