<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespuestasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('respuestas')->delete();
        
        \DB::table('respuestas')->insert(array (
            0 => 
            array (
                'id_respuesta' => 1,
                'respuesta' => 'Son exclusivamente utilizadas en entornos empresariales',
                'estado' => 0,
                'id_pregunta' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_respuesta' => 2,
                'respuesta' => 'No admiten consultas complejas',
                'estado' => 0,
                'id_pregunta' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_respuesta' => 3,
                'respuesta' => 'Son más flexibles en cuanto a la estructura de los datos',
                'estado' => 1,
                'id_pregunta' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id_respuesta' => 4,
                'respuesta' => 'No son escalables',
                'estado' => 0,
                'id_pregunta' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id_respuesta' => 5,
                'respuesta' => 'Los datos están siempre actualizados en tiempo real',
                'estado' => 0,
                'id_pregunta' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id_respuesta' => 6,
                'respuesta' => 'Todos los nodos de la base de datos tienen una copia completa de los datos',
                'estado' => 0,
                'id_pregunta' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id_respuesta' => 7,
                'respuesta' => 'Los datos se mantienen en un estado consistente en todo momento',
                'estado' => 0,
                'id_pregunta' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id_respuesta' => 8,
                'respuesta' => 'Los datos pueden estar desactualizados en ciertos momentos debido a la replicación',
                'estado' => 1,
                'id_pregunta' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id_respuesta' => 13,
                'respuesta' => 'Tablas',
                'estado' => 0,
                'id_pregunta' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id_respuesta' => 14,
                'respuesta' => ' Documentos',
                'estado' => 1,
                'id_pregunta' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id_respuesta' => 15,
                'respuesta' => 'Filas y columnas',
                'estado' => 0,
                'id_pregunta' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id_respuesta' => 16,
                'respuesta' => ' Objetos',
                'estado' => 0,
                'id_pregunta' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id_respuesta' => 17,
                'respuesta' => 'Sitio web de comercio electrónico con miles de usuarios y transacciones diarias',
                'estado' => 1,
                'id_pregunta' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id_respuesta' => 18,
                'respuesta' => 'Sistema bancario con necesidad de cumplir regulaciones estrictas',
                'estado' => 0,
                'id_pregunta' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id_respuesta' => 19,
                'respuesta' => 'Sistema de gestión de inventario para una pequeña tienda local',
                'estado' => 0,
                'id_pregunta' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id_respuesta' => 20,
                'respuesta' => ' Aplicación de redes sociales con millones de usuarios y relaciones complejas',
                'estado' => 0,
                'id_pregunta' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id_respuesta' => 21,
            'respuesta' => 'db.collectionName.show()',
                'estado' => 0,
                'id_pregunta' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id_respuesta' => 22,
            'respuesta' => 'db.collectionName.find()',
                'estado' => 1,
                'id_pregunta' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id_respuesta' => 23,
            'respuesta' => 'db.collectionName.getAll()',
                'estado' => 0,
                'id_pregunta' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id_respuesta' => 24,
            'respuesta' => 'db.collectionName.documents()',
                'estado' => 0,
                'id_pregunta' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id_respuesta' => 29,
            'respuesta' => 'connect(\'mongodb://localhost:27017\')',
                'estado' => 0,
                'id_pregunta' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id_respuesta' => 30,
            'respuesta' => 'db.connect(\'localhost\', 27017)',
                'estado' => 0,
                'id_pregunta' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id_respuesta' => 31,
                'respuesta' => 'mongo localhost:27017',
                'estado' => 1,
                'id_pregunta' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id_respuesta' => 32,
            'respuesta' => 'db = MongoClient(\'localhost\', 27017)',
                'estado' => 0,
                'id_pregunta' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id_respuesta' => 33,
                'respuesta' => 'show databases',
                'estado' => 0,
                'id_pregunta' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id_respuesta' => 34,
            'respuesta' => 'db.showDatabases()',
                'estado' => 0,
                'id_pregunta' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id_respuesta' => 35,
            'respuesta' => 'db.getDatabaseNames()',
                'estado' => 0,
                'id_pregunta' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id_respuesta' => 36,
                'respuesta' => 'show dbs',
                'estado' => 1,
                'id_pregunta' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id_respuesta' => 37,
            'respuesta' => 'db.collectionName.add(document)',
                'estado' => 0,
                'id_pregunta' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id_respuesta' => 38,
            'respuesta' => 'db.collectionName.insert(document)',
                'estado' => 0,
                'id_pregunta' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id_respuesta' => 39,
            'respuesta' => 'db.collectionName.insertOne(document)',
                'estado' => 1,
                'id_pregunta' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id_respuesta' => 40,
            'respuesta' => 'db.collectionName.create(document)',
                'estado' => 0,
                'id_pregunta' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}