<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CicloTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ciclo')->delete();
        
        \DB::table('ciclo')->insert(array (
            0 => 
            array (
                'id_ciclo' => 1,
                'ciclo' => '1er',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_ciclo' => 2,
                'ciclo' => '2do',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_ciclo' => 3,
                'ciclo' => '3er',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id_ciclo' => 4,
                'ciclo' => '4to',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id_ciclo' => 5,
                'ciclo' => '5to',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id_ciclo' => 6,
                'ciclo' => '6to',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}