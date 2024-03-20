<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id_usuario' => 1,
                'username' => 'sbeteta',
                'email' => 'sabeteta03@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6As6dtgPqBGNKSU31S8aNeZcSuk5U68uk7T7W/jnQRAqGF1Aw.phW',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 3,
                'remember_token' => 'MTL4QA2fWldN4OGeHAO2lw9FfvN37xO8HEwHqZHrIPWoPgVXT8X6MW1NIWNQ',
                'created_at' => '2023-07-02 04:06:11',
                'updated_at' => '2023-07-02 04:06:11',
            ),
            1 => 
            array (
                'id_usuario' => 2,
                'username' => 'amlo',
                'email' => 'mLopez@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.Op169q.4yeO7F7MGMyVxOpYHMb/NJveOcX9n0kpwDqIvfsSpBCSS',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 2,
                'remember_token' => NULL,
                'created_at' => '2023-07-02 04:38:57',
                'updated_at' => '2023-07-02 04:38:57',
            ),
            2 => 
            array (
                'id_usuario' => 3,
                'username' => 'jfrancisco20',
                'email' => 'jfrancisco@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zCf6FHPNXhZI2lbG749PIuMMpwk86DsjSSh/51//fd5bACNQzvzeG',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 3,
                'remember_token' => NULL,
                'created_at' => '2023-07-02 14:05:30',
                'updated_at' => '2023-07-02 14:06:16',
            ),
            3 => 
            array (
                'id_usuario' => 4,
                'username' => 'sbellido',
                'email' => 'sbellido@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nSpyVxgOsbjMNwOVL6mm0ODd5nmAFnv4V2fzZi9fH5aUvjxhQH.xO',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 1,
                'remember_token' => NULL,
                'created_at' => '2023-07-02 16:01:37',
                'updated_at' => '2023-07-02 16:01:37',
            ),
            4 => 
            array (
                'id_usuario' => 5,
                'username' => 'sara03',
                'email' => 'sara03@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$knPd7JjL9gXtytYUQircYuv3njY.hckipq/B8ato9GTVOJ4IueOBC',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 1,
                'remember_token' => NULL,
                'created_at' => '2023-07-02 16:50:49',
                'updated_at' => '2023-07-02 16:50:49',
            ),
            5 => 
            array (
                'id_usuario' => 6,
                'username' => 'lespinoza',
                'email' => 'l.espinoza@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GxW2rsVvPNjY4dbyIj2d4ugWn48GYu1k9YjimS2XsjzIWVHbaOp26',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 1,
                'remember_token' => NULL,
                'created_at' => '2023-07-02 16:52:34',
                'updated_at' => '2023-07-02 16:52:34',
            ),
            6 => 
            array (
                'id_usuario' => 7,
                'username' => 'lespinoza2',
                'email' => 'lespinoza@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2TOp/zaC9ZmoJEPTWxplSe.CqOWdm.3injVP5ILGXaedBbWA2vMCG',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 3,
                'remember_token' => NULL,
                'created_at' => '2023-07-02 17:29:09',
                'updated_at' => '2023-07-02 17:29:09',
            ),
            7 => 
            array (
                'id_usuario' => 8,
                'username' => 'eduespionza',
                'email' => 'e.espionza.99@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7kDdCwIVmoF.Bghis9R4X.0NNyuj7f1Fj.Ltku2Zv0ULNWBQQOZ2m',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 3,
                'remember_token' => NULL,
                'created_at' => '2023-07-02 17:31:20',
                'updated_at' => '2023-07-02 17:31:20',
            ),
            8 => 
            array (
                'id_usuario' => 9,
                'username' => 'rocka',
                'email' => 'rockbeteta@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$daAuZeaUAx.lr6KIMQFgieBYS6qT30alqghbIV6AYYq7QvreAx7O6',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 3,
                'remember_token' => NULL,
                'created_at' => '2023-07-02 17:36:25',
                'updated_at' => '2023-07-02 17:36:25',
            ),
            9 => 
            array (
                'id_usuario' => 10,
                'username' => 'jmartinez',
                'email' => 'jmartinez@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$uUODEPq5YHtagI7fwkx04Op28xqvzIqbIZfVH2mRdn6UChmwToiky',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 3,
                'remember_token' => NULL,
                'created_at' => '2023-07-02 17:37:27',
                'updated_at' => '2023-07-02 17:37:27',
            ),
            10 => 
            array (
                'id_usuario' => 11,
                'username' => 'waho',
                'email' => 'jgarnacho@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vXCL2CDzOsag2YqaAjK78ur4PSaH8Z02vWVyPpUvv91K661pXq2yu',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 3,
                'remember_token' => NULL,
                'created_at' => '2023-07-02 17:45:05',
                'updated_at' => '2023-07-02 17:45:05',
            ),
            11 => 
            array (
                'id_usuario' => 12,
                'username' => 'carnicero',
                'email' => 'lisaMartinez@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/ALl1T2uLbGzF3HTEO7PUuw5BUkFJKMu61NZ2Fuh2O0WL1jtxw5pe',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 3,
                'remember_token' => NULL,
                'created_at' => '2023-07-02 17:47:20',
                'updated_at' => '2023-07-02 17:47:20',
            ),
            12 => 
            array (
                'id_usuario' => 13,
                'username' => 'dlarez',
                'email' => 'dlarez@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$S3invv4UAqeuFpfkVOIa8uZp/G6jav4cj7ST48ZFuK7eaGawR5zda',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 1,
                'remember_token' => NULL,
                'created_at' => '2023-07-02 20:10:59',
                'updated_at' => '2023-07-02 20:10:59',
            ),
            13 => 
            array (
                'id_usuario' => 14,
                'username' => 'mariadb',
                'email' => 'mariadb@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VuahPVxSOTLtYDmO2GJghuFYqVw9gkIH9Xr9/TjPH9Pd8Co9fEFDm',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 1,
                'remember_token' => NULL,
                'created_at' => '2023-07-02 23:55:26',
                'updated_at' => '2023-07-02 23:55:26',
            ),
            14 => 
            array (
                'id_usuario' => 15,
                'username' => 'mgomez09',
                'email' => 'mgomez@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TAeL.9.moRp2gesAOFNG1.X5z/j.csTQXP3xP2cVQ8lnq98mVpVGa',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 3,
                'remember_token' => NULL,
                'created_at' => '2023-07-03 01:11:02',
                'updated_at' => '2023-07-03 01:11:02',
            ),
            15 => 
            array (
                'id_usuario' => 16,
                'username' => 'Pedro',
                'email' => 'pflores@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zZqqbKEfweg.KZo3cAUOVuL5IaJeMsLoqYC.Hy1IdY67EPG0fR4Ua',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 3,
                'remember_token' => NULL,
                'created_at' => '2023-07-03 01:25:54',
                'updated_at' => '2023-07-03 01:25:54',
            ),
            16 => 
            array (
                'id_usuario' => 17,
                'username' => 'misskaty',
                'email' => 'katcuri@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$pnfbmwOXeMIH2oPWKW7K1Oz9OWU1JDj7l5aS1IlrgH7uGY38mBAsy',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 2,
                'remember_token' => NULL,
                'created_at' => '2023-07-03 01:26:39',
                'updated_at' => '2023-07-03 01:26:39',
            ),
            17 => 
            array (
                'id_usuario' => 18,
                'username' => 'profe',
                'email' => 'jorgesanchez@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RbY9qGCvIAGrmo35MggFFurp1BtMoa96PmFgFhdK9D79OcL5p9.Ge',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 2,
                'remember_token' => NULL,
                'created_at' => '2023-07-03 01:30:39',
                'updated_at' => '2023-07-03 01:30:39',
            ),
            18 => 
            array (
                'id_usuario' => 19,
                'username' => 'trodriguez',
                'email' => 'trodriguez@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$a.DwpAKyH7D0OEjkq55vYuw5P1dx9sZ.e91.QfeyKryo4dItZ1b7G',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 2,
                'remember_token' => NULL,
                'created_at' => '2023-07-03 01:34:35',
                'updated_at' => '2023-07-03 01:34:35',
            ),
            19 => 
            array (
                'id_usuario' => 20,
                'username' => 'mcastaneda',
                'email' => 'mcastaneda@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7NhkL2X0q96.RMGt38IPOeLMZ9iiVvyVnLebdtcF4dHzZLEYn4FyC',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 2,
                'remember_token' => NULL,
                'created_at' => '2023-07-03 14:52:52',
                'updated_at' => '2023-07-03 14:52:52',
            ),
            20 => 
            array (
                'id_usuario' => 21,
                'username' => 'msalas',
                'email' => 'msalas@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UKK33P1Q22BPvXsxei7GIOL.fUjl9k.vg1qkUcfge68WM1Kjs8Nta',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'id_rol' => 2,
                'remember_token' => NULL,
                'created_at' => '2023-07-03 14:54:11',
                'updated_at' => '2023-07-03 14:54:11',
            ),
        ));
        
        
    }
}