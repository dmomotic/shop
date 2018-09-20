@extends('layouts.app')

@section('content')

<div id="contact-cta" class="section">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>
    <!-- Backgound Image -->

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <div class="col-md-8 col-md-offset-2 text-center">
                <h2 class="white-text">Iniciar Sesion</h2>
                <p class="lead white-text">Ingresa tus datos</p>
            </div>

        </div>
        <!-- /row -->

        <div class="row">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right white-text">Correo electronico</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} white-text" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="white-text">{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right white-text">Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} white-text" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="white-text">{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input white-text" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label white-text" for="remember">
                                            Recuerdame
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="main-button icon-button">
                                        Ingresar
                                    </button>

                                    <a class="btn btn-link white-text" href="{{ route('password.request') }}">
                                        Olvide mi contraseña
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /container -->

</div>

@endsection
