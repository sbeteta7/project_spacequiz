@extends('layouts.guest')

@section('registro_contenido')

<x-validation-errors class="mb-4" />
@empty($tipo_cuenta)

<div style="align-items: stretch;">
    <div class="d-flex justify-content-center"><!--titulo de registro Tipo cuenta-->
        <p class="main_login_text">Elige el tipo de cuenta:</p>
    </div>

<div class="">
    <form action="{{route('tipo_cuenta')}}" method="post" id="form_role">
        @csrf
        <div class="row d-flex justify-content-center " style="height: 50%;width: 100%; "><!--Tipos de cuenta-->

            <div class="col-8 row control"><!--Espacio para tipos de cuenta-->
                <div class=" box_tipo col-xl-4  d-flex justify-content-center align-items-center">
                    <!--Espacio para el tipo estudiante-->
                    
                    
                        <div class="control_tipo" onmouseover="active_radio(3)" onclick="enviar_form_role()" id="radio_estudiante" style="border: solid 3px blue;  margin-top: 20px">
                            <input type="radio" name="tipo_cuenta" value=3 id="estudiante" hidden>
                            <!--tipo de cuenta comite-->
                            <div style="height: 80%" class="d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-graduation-cap icon_cuenta "
                                    style="color: blue;align-self: center;"></i>
                            </div>

                            <div class="" style="height: 20%;">
                                <p style="color: blue;" >Estudiante</p>
                            </div>
                        </div>
                    
                </div>

                <div class="box_tipo col-xl-4 d-flex justify-content-center align-items-center">
                    <!--Espacio para tipos de docente-->
                    
                        <div class="control_tipo" onmouseover="active_radio(2)" onclick="enviar_form_role()" id="radio_docente" style="border: solid 3px blueviolet;margin-top: 20px;">
                            <input type="radio" name="tipo_cuenta" value=2 id="docente" hidden>
                            <!--tipo de cuenta comite-->
                            <div style="height: 80%" class="d-flex justify-content-center align-items-center">
                                <i class="fa-sharp fa-solid fa-suitcase icon_cuenta"
                                    style="color: blueviolet;"></i>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <p style="color: blueviolet;">Docente</p>
                            </div>
                        </div>
                    
                </div>

                <div class="box_tipo col-xl-4 d-flex justify-content-center align-items-center" >
                    <!--Espacio para tipos de comite-->
                    
                        <div class="control_tipo" onmouseover="active_radio(1)" onclick="enviar_form_role()" id="radio_comite" style="border: solid 3px orange;margin-top: 20px">
                            <input type="radio" name="tipo_cuenta" value=1 id="comite" hidden>
                            <div style="height: 80%" class="d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-user icon_cuenta" style="color: orange;"></i>
                            </div>
                            <div>
                                <p style="color: orange;">Comité</p>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
        </form>

</div>

    <div class="d-flex justify-content-center" style="padding-top: 50px;"><!--opcion de iniciar sesion-->
        <div>
            <p style="display: inline;">¿Tienes una cuenta? </p> <a href="{{ route('login') }}">Inicia sesión</a>
        </div>
    </div>
</div>
@endempty




@isset ($tipo_cuenta)
<div style="height: 100vh;" class="d-flex justify-content-center align-items-center">
    <div class="d-flex" style=" background-color: rgb(255, 255, 255);">
        <div class="col-lg-6  col-12 "><!--sección registro-->
            <div style="padding: 50px;">
                <div>
                    <p style="font-size: 40px;padding: 0px 0px 0px 20px;">Registro</p>
                </div>
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="double_col box_input"><!--Caja de nombres -->
                        <label for="">Nombres</label>
                        <input type="text"  class="registro_input" type="text" name="nombre" :value="old('nombre')"  autofocus autocomplete="nombre" id="nombre" >
                        <span></span>
                    </div>

                    <div class="double_col box_input"><!--Caja de apellidos -->
                        <label for="" >Apellidos</label>
                        <input type="text" class="registro_input" type="text" name="apellido" :value="old('apellido')"  autofocus autocomplete="apellido">
                    </div>

                    <div class="double_col box_input"><!--Caja de usuario -->
                        <label for="" >Nombre de usuario</label>
                        <input type="text" class="registro_input" id="username"  type="text" name="username" :value="old('username')" required  autocomplete="username" >
                    </div>

                    <div class="double_col box_input"><!--Caja de email -->
                        <label for="">Correo</label>
                        <input type="text" class="registro_input"  id="email"  type="email" name="email" :value="old('email')" required  autocomplete="email">
                    </div>

                    @if (empty($tipo_cuenta)) <!--ID ROL DEL USUARIO -->
                    <!-- Agregar funcion que indique que no se ha obtenido el tipo de cuenta -->
                    <div class="card" style="position:absolute;top:0px"> <p>ERROR: NO SE OBTUVO EL TIPO DE CUENTA</p></div>
                @else
                    <input type="number" value="{{$tipo_cuenta}}" hidden name="rol" id="rol" required >
                @endif

                    <div class="single_col box_input" ><!--Caja de contraseña -->
                        <label for="">Contraseña</label>
                        <input type="password" class="registro_input" id="password"  name="password" required  autocomplete="new-password">
                    </div>

                    <div class="single_col box_input" ><!--Caja de confirmar contraseña -->
                        <label for="">Confirmar contraseña</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" required  autocomplete="new-password" class="registro_input">
                    </div>

                    
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <div>
                        <div class="d-flex justify-content-center" style="padding-top: 30px;"><!--Caja de boton de registrarme-->
                        <input type="submit" value="Registrarme"  class="btn btn-danger btn-outline-secondary btn-lg"  style="color: rgb(0, 0, 0)" > 
      
                        </div>
                        <div class="d-flex justify-content-center" style="padding-top: 50px;"><!--Iniciar sesion-->
                            <p class="d-flex " style="display: flex;">¿Tienes una cuenta? 
                            <a href="{{ route('login') }}">Inicia sesión</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        
        <div class="col-lg-6 card box_main_img  d-flex justify-content-center align-items-center box_main_form"> <!--seccion imagen-->

            <img src="images/RegistroComite.jpg" alt=""  >
                <div class="card-img-overlay d-flex align-items-start flex-column bd-highlight mb-3 ">
                    <div class="p-2  d-flex flex-column justify-content-center" style="width: 100%; height: 50%;">
                        <!--Texto superiore-->
                        <div class="d-flex align-items-center justify-content-center" style="height: 50%;">
                            <p class="text-white " style="font-size: 35px;text-align: center;">Estás a punto de
                                conocer SPACES QUIZ</p>
                        </div>

                    </div>

                </div>

        </div>
    </div>

</div>
@endisset


@endsection