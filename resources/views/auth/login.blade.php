@extends('layouts.guest')

@section('registro_contenido')

            <div class="h-100 d-flex justify-content-center align-items-center">
                <!--div de cuadro que contiene la imagen y el formulario de login-->
                <div class="main_login">
                    <!--sección imagen-->
                    <div class="col-6 card box_main_img rounded-4">
                        <img src="images/perfilAstronauta.jpg" class="rounded-4" alt="" width="100%" height="100%">
                        <!--Texto contenido en la imagen-->
                        <div class="card-img-overlay d-flex align-items-start flex-column bd-highlight mb-3  ">
                            <div class="p-2  d-flex flex-column justify-content-center w-100 h-50">
                                <!--Texto superior-->
                                <div class="d-flex align-items-center justify-content-center h-50">
                                    <p class=" login_img_text Limg_text_sup"></p>
                                </div>
                                <div class="d-flex align-items-start justify-content-center h-50">
                                    <p class=" login_img_text Limg_text_mid"></p>
                                </div>
                            </div>
    
                            <div class="p-2   d-flex justify-content-center w-100 h-50 ">
                                <!--Texto inferior-->
                                <p class=" login_img_text Limg_text_bot d-flex align-items-end ">
                                    
                                </p>
                            </div>
    
                        </div>
                    </div>
                    <!--Segundo div, es el espacio donde estará el login-->
                    <div class="col-lg-6  col-12 d-flex justify-content-center align-items-center box_main_form ">
                        <!--Div de todo el login -->
                        <div class="div_login d-flex justify-content-center flex-column ">
                            <!--Div del titulo de iniciar sesion-->
                            <div class="d-flex align-items-end justify-content-center h-25 ">
                                <p class="login_title">Iniciar sesión</p>

                            <!-- APLICAR CARTA DE ERROR-->
                                <x-validation-errors class="mb-4" style="position: absolute;top: 0%;background-color:white;
                                left:40%"/>

                            </div>

                            <!--Div del formulario de login-->
                            <div class="h-75">
                                <!--Formulario de login-->
    
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="login_div_input">
                        
                                        <input type="text" placeholder="Usuario" class="input_login form-control" id="username"
                                        name="username" :value="old('username')" required autofocus autocomplete="username">
                                    </div>
                                    <div class="login_div_input">
                                        <input type="password" placeholder="Contraseña" class="input_login form-control"
                                        id="password" name="password" required autocomplete="current-password">
                                    </div>
    
                        
                                    <div class="block mt-4">
                                        <label for="remember_me" class="flex items-center">
                                            <x-checkbox id="remember_me" name="remember" />
                                            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
                        
                                    <div class="flex items-center justify-end mt-4">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                            
                                        <div class="text-center login_div_input">
                                            <input type="submit" value="Ingresar" class="login_btn">
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <!--Div para el texto de registrarse si no tienes cuenta-->
                            <div class="d-flex align-items-end justify-content-center">
                                <a  class="d-flex texto_enlace" href="{{ url('/registro_tipo') }}">
                                    <p>Si no tienes cuenta,Registrate </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    
@endsection