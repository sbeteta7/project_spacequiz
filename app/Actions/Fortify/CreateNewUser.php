<?php

namespace App\Actions\Fortify;

use App\Models\Alumno;
use App\Models\Comite;
use App\Models\Profesor;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;
    /**
     * Create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255','min:4'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'rol' => ['required'],
            'password' => $this->passwordRules(),
            
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
/*
        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'username' => $input['username'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'id_rol' =>$input['rol'],
            ]));
        });
*/
$user= User::create([
    'username'=>$input['username'],
    'email' => $input['email'],
    'password' => Hash::make($input['password']),
    'id_rol' => $input['rol'],
]);


    switch ($input['rol']) {
        case 1:
            Comite::create([
                
                'nombre' => $input['nombre'],
                'apellido' => $input['apellido'],
                'id_usuario' => $user->id_usuario,
            ]);
            break;
        case 2:
            Profesor::create([

                'nombre' => $input['nombre'],
                'apellido' => $input['apellido'],
                'id_usuario' => $user->id_usuario,
            ]);
            break;
        case 3:
            Alumno::create([

                'nombre' => $input['nombre'],
                'apellido' => $input['apellido'],
                'id_usuario' => $user->id_usuario,
            ]);
            break;
    }
    return $user;

    

    }


}
