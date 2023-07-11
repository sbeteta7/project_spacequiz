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
        DB::table('respuestas')->delete();
        
        DB::table('respuestas')->insert(array (
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
                'id_respuesta' => 9,
                'respuesta' => 'Tablas',
                'estado' => 0,
                'id_pregunta' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id_respuesta' => 10,
                'respuesta' => ' Documentos',
                'estado' => 1,
                'id_pregunta' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id_respuesta' => 11,
                'respuesta' => 'Filas y columnas',
                'estado' => 0,
                'id_pregunta' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id_respuesta' => 12,
                'respuesta' => ' Objetos',
                'estado' => 0,
                'id_pregunta' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id_respuesta' => 13,
                'respuesta' => 'Sitio web de comercio electrónico con miles de usuarios y transacciones diarias',
                'estado' => 1,
                'id_pregunta' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id_respuesta' => 14,
                'respuesta' => 'Sistema bancario con necesidad de cumplir regulaciones estrictas',
                'estado' => 0,
                'id_pregunta' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id_respuesta' => 15,
                'respuesta' => 'Sistema de gestión de inventario para una pequeña tienda local',
                'estado' => 0,
                'id_pregunta' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id_respuesta' => 16,
                'respuesta' => ' Aplicación de redes sociales con millones de usuarios y relaciones complejas',
                'estado' => 0,
                'id_pregunta' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id_respuesta' => 17,
            'respuesta' => 'db.collectionName.show()',
                'estado' => 0,
                'id_pregunta' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id_respuesta' => 18,
            'respuesta' => 'db.collectionName.find()',
                'estado' => 1,
                'id_pregunta' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id_respuesta' => 19,
            'respuesta' => 'db.collectionName.getAll()',
                'estado' => 0,
                'id_pregunta' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id_respuesta' => 20,
            'respuesta' => 'db.collectionName.documents()',
                'estado' => 0,
                'id_pregunta' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id_respuesta' => 21,
            'respuesta' => 'connect(\'mongodb://localhost:27017\')',
                'estado' => 0,
                'id_pregunta' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id_respuesta' => 22,
            'respuesta' => 'db.connect(\'localhost\', 27017)',
                'estado' => 0,
                'id_pregunta' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id_respuesta' => 23,
                'respuesta' => 'mongo localhost:27017',
                'estado' => 1,
                'id_pregunta' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id_respuesta' => 24,
            'respuesta' => 'db = MongoClient(\'localhost\', 27017)',
                'estado' => 0,
                'id_pregunta' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id_respuesta' => 25,
                'respuesta' => 'show databases',
                'estado' => 0,
                'id_pregunta' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id_respuesta' => 26,
            'respuesta' => 'db.showDatabases()',
                'estado' => 0,
                'id_pregunta' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id_respuesta' => 27,
            'respuesta' => 'db.getDatabaseNames()',
                'estado' => 0,
                'id_pregunta' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id_respuesta' => 28,
                'respuesta' => 'show dbs',
                'estado' => 1,
                'id_pregunta' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id_respuesta' => 29,
            'respuesta' => 'db.collectionName.add(document)',
                'estado' => 0,
                'id_pregunta' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id_respuesta' => 30,
            'respuesta' => 'db.collectionName.insert(document)',
                'estado' => 0,
                'id_pregunta' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id_respuesta' => 31,
            'respuesta' => 'db.collectionName.insertOne(document)',
                'estado' => 1,
                'id_pregunta' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id_respuesta' => 32,
            'respuesta' => 'db.collectionName.create(document)',
                'estado' => 0,
                'id_pregunta' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id_respuesta' => 33,
                'respuesta' => 'Utilizan tablas para almacenar los datos.',
                'estado' => 1,
                'id_pregunta' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => array (
                'id_respuesta' => 34,
                'respuesta' => 'Almacenan datos en formato JSON.',
                'estado' => 0,
                'id_pregunta' => 9,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            34 => array (
                'id_respuesta' => 35,
                'respuesta' => 'Utilizan índices espaciales para consultas geoespaciales.',
                'estado' => 0,
                'id_pregunta' => 9,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            35 => array (
                'id_respuesta' => 36,
                'respuesta' => 'No permiten relaciones entre tablas.',
                'estado' => 0,
                'id_pregunta' => 9,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            36 => array (
                'id_respuesta' => 37,
                'respuesta' => 'Añadir más servidores a medida que aumenta la carga de trabajo.',
                'estado' => 0,
                'id_pregunta' => 10,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            37 => array (
                'id_respuesta' => 38,
                'respuesta' => 'Aumentar los recursos de hardware en un solo servidor.',
                'estado' => 0,
                'id_pregunta' => 10,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            38 => array (
                'id_respuesta' => 39,
                'respuesta' => 'Optimizar las consultas y transacciones para mejorar el rendimiento.',
                'estado' => 0,
                'id_pregunta' => 10,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            39 => array (
                'id_respuesta' => 40,
                'respuesta' => 'Distribuir los datos en múltiples ubicaciones geográficas.',
                'estado' => 0,
                'id_pregunta' => 10,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            40 => array (
                'id_respuesta' => 41,
                'respuesta' => 'Índice de árbol B.',
                'estado' => 0,
                'id_pregunta' => 11,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            41 => array (
                'id_respuesta' => 42,
                'respuesta' => 'Índice hash.',
                'estado' => 0,
                'id_pregunta' => 11,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            42 => array (
                'id_respuesta' => 43,
                'respuesta' => 'Índice de texto completo.',
                'estado' => 0,
                'id_pregunta' => 11,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            43 => array (
                'id_respuesta' => 44,
                'respuesta' => 'Índice de bits.',
                'estado' => 0,
                'id_pregunta' => 11,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            44 => array (
                'id_respuesta' => 45,
                'respuesta' => 'Proceso de diseñar una base de datos para eliminar la redundancia de datos y mantener la integridad.',
                'estado' => 0,
                'id_pregunta' => 12,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            45 => array (
                'id_respuesta' => 46,
                'respuesta' => 'Proceso de agregar más atributos a una tabla existente.',
                'estado' => 0,
                'id_pregunta' => 12,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            46 => array (
                'id_respuesta' => 47,
                'respuesta' => 'Proceso de combinar múltiples tablas en una sola.',
                'estado' => 0,
                'id_pregunta' => 12,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            47=> array (
                'id_respuesta' => 48,
                'respuesta' => 'Proceso de copiar datos de una tabla a otra.',
                'estado' => 0,
                'id_pregunta' => 12,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            48=> array (
                'id_respuesta' => 49,
                'respuesta' => 'Un sistema de gestión de inventario para una tienda en línea.',
                'estado' => 0,
                'id_pregunta' => 13,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            49 => array (
                'id_respuesta' => 50,
                'respuesta' => 'Un motor de búsqueda en tiempo real.',
                'estado' => 0,
                'id_pregunta' => 13,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            50 => array (
                'id_respuesta' => 51,
                'respuesta' => 'Un sistema de análisis de big data.',
                'estado' => 0,
                'id_pregunta' => 13,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            51=> array (
                'id_respuesta' => 52,
                'respuesta' => 'Un servidor de juegos en línea con alta concurrencia.',
                'estado' => 0,
                'id_pregunta' => 13,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            52=> array (
                'id_respuesta' => 53,
                'respuesta' => 'CREATE TABLE.',
                'estado' => 0,
                'id_pregunta' => 14,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            53=> array (
                'id_respuesta' => 54,
                'respuesta' => 'INSERT INTO.',
                'estado' => 0,
                'id_pregunta' => 14,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            54=> array (
                'id_respuesta' => 55,
                'respuesta' => 'UPDATE TABLE.',
                'estado' => 0,
                'id_pregunta' => 14,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            55=> array (
                'id_respuesta' => 56,
                'respuesta' => 'ALTER TABLE.',
                'estado' => 0,
                'id_pregunta' => 14,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            56=> array (
                'id_respuesta' => 57,
                'respuesta' => 'ALTER TABLE ADD COLUMN.',
                'estado' => 0,
                'id_pregunta' => 15,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            57=> array (
                'id_respuesta' => 58,
                'respuesta' => 'UPDATE TABLE SET COLUMN.',
                'estado' => 0,
                'id_pregunta' => 15,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            58=> array (
                'id_respuesta' => 59,
                'respuesta' => 'INSERT INTO COLUMN.',
                'estado' => 0,
                'id_pregunta' => 15,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            59=> array (
                'id_respuesta' => 60,
                'respuesta' => 'MODIFY TABLE ADD COLUMN.',
                'estado' => 0,
                'id_pregunta' => 15,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            60 => array (
                'id_respuesta' => 61,
                'respuesta' => 'DROP TABLE.',
                'estado' => 0,
                'id_pregunta' => 16,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            61 => array (
                'id_respuesta' => 62,
                'respuesta' => 'DELETE TABLE.',
                'estado' => 0,
                'id_pregunta' => 16,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            62 => array (
                'id_respuesta' => 63,
                'respuesta' => 'REMOVE TABLE.',
                'estado' => 0,
                'id_pregunta' => 16,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            63 => array (
                'id_respuesta' => 64,
                'respuesta' => 'TRUNCATE TABLE.',
                'estado' => 0,
                'id_pregunta' => 16,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            
            64 => array (
                'id_respuesta' => 65,
                'respuesta' => 'UPDATE',
                'estado' => 0,
                'id_pregunta' => 17,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            65 => array (
                'id_respuesta' => 66,
                'respuesta' => 'MODIFY',
                'estado' => 0,
                'id_pregunta' => 17,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            66 => array (
                'id_respuesta' => 67,
                'respuesta' => 'CHANGE',
                'estado' => 0,
                'id_pregunta' => 17,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            67 => array (
                'id_respuesta' => 68,
                'respuesta' => 'SET',
                'estado' => 0,
                'id_pregunta' => 17,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            68 => array (
                'id_respuesta' => 69,
                'respuesta' => 'SELECT.',
                'estado' => 0,
                'id_pregunta' => 18,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            69 => array (
                'id_respuesta' => 70,
                'respuesta' => 'INSERT.',
                'estado' => 0,
                'id_pregunta' => 18,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            70 => array (
                'id_respuesta' => 71,
                'respuesta' => 'UPDATE',
                'estado' => 0,
                'id_pregunta' => 18,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            71 => array (
                'id_respuesta' => 72,
                'respuesta' => 'DELETE.',
                'estado' => 0,
                'id_pregunta' => 18,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            72 => array (
                'id_respuesta' => 73,
                'respuesta' => 'WHERE',
                'estado' => 0,
                'id_pregunta' => 19,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            73 => array (
                'id_respuesta' => 74,
                'respuesta' => 'FROM',
                'estado' => 0,
                'id_pregunta' => 19,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            74 => array (
                'id_respuesta' => 75,
                'respuesta' => 'HAVING',
                'estado' => 0,
                'id_pregunta' => 19,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            75 => array (
                'id_respuesta' => 76,
                'respuesta' => 'GROUP BY',
                'estado' => 0,
                'id_pregunta' => 19,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            76 => array (
                'id_respuesta' => 77,
                'respuesta' => 'ORDER BY',
                'estado' => 0,
                'id_pregunta' => 20,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            77 => array (
                'id_respuesta' => 78,
                'respuesta' => 'SORT BY',
                'estado' => 0,
                'id_pregunta' => 20,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            78 => array (
                'id_respuesta' => 79,
                'respuesta' => 'GROUP BY',
                'estado' => 0,
                'id_pregunta' => 20,
                'created_at' => NULL,
                'updated_at' => NULL
            ),
            79 => array (
                'id_respuesta' => 80,
                'respuesta' => 'ARRANGE BY',
                'estado' => 0,
                'id_pregunta' => 20,
                'created_at' => NULL,
                'updated_at' => NULL
            ),

        ));
    }
}