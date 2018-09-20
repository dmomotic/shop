@extends('layouts.app')

@section('content')
<!-- Hero-area -->
        <div class="hero-area section">

            <!-- Backgound Image -->
            <div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg)"></div>
            <!-- /Backgound Image -->

            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <h1 class="white-text">Bienvenido</h1>

                    </div>
                </div>
            </div>

        </div>
        <!-- /Hero-area -->
        <hr>
        <hr>
        <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              
              <a href="#search">
                <i class="fa fa-book fa-5x fa-lg"></i>
                <br>
                <br>
                <p class="text-muted mb-0">Ver Productos </p>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              
              <a href="#search">
                <i class="fa fa-search fa-5x fa-lg"></i>
                <br>
                <br>
                <p class="text-muted mb-0">Buscar Productos</p>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              
              <a href="#search">
                <i class="fa fa-cart-arrow-down fa-5x fa-lg"></i>
                <br>
                <br>
                <p class="text-muted mb-0">Ver Historial de Compras</p>
              </a>
            </div>
          </div>

        </div>
      </div>

@endsection