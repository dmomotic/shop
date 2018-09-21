@extends('layouts.app')

@section('content')

    <!-- Home -->
    <div id="home" class="hero-area">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
        <!-- /Backgound Image -->

        <div class="home-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <br><br><br><br>
                        <h2 class="white-text">Formulario de Registro</h2>
                            
                        <form method="post" action="{{ url('/registro') }}">
                        @csrf

                        <div><textarea  type="text" name="nombre" placeholder="Nombre" style="width:500px; height:50px"></textarea>
                        <div><textarea  type="text" name="correo" placeholder="Correo" style="width:500px; height:50px"></textarea>
                        <div><textarea  type="text" name="password" placeholder="Contraseña" style="width:500px; height:50px"></textarea>
                        <div><textarea  type="text" name="tarjeta" placeholder="Tarjeta de Credito" style="width:500px; height:50px"></textarea>
                        <br><br>
                       
                         <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                        </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /Home -->

@endsection