<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rol')->delete();
        
        \DB::table('rol')->insert(array (
            0 => 
            array (
                'id_rol' => 1,
                'rol' => 'comite',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_rol' => 2,
                'rol' => 'docente',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_rol' => 3,
                'rol' => 'estudiante',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}