<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModuloTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('modulo')->delete();
        
        \DB::table('modulo')->insert(array (
            0 => 
            array (
                'id_modulo' => 1,
                'modulo' => 'Introducción a las bases de datos NOSQL',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_modulo' => 2,
                'modulo' => 'Trabajo con Shell de MongoDB',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_modulo' => 3,
                'modulo' => 'Modelado de datos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id_modulo' => 4,
                'modulo' => 'Rendimiento, copias de respaldo y recuperación',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id_modulo' => 5,
                'modulo' => 'Almacenamiento Local de Windows',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id_modulo' => 6,
                'modulo' => 'Introducción a Linux',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id_modulo' => 7,
                'modulo' => 'Configuración de Red en Linux',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id_modulo' => 8,
                'modulo' => 'Shell script en Linux',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}