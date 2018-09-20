@extends('layouts.app')

@section('searchbar')

@include('blocks.searchbar')

@endsection

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
                        <h1 class="white-text">Tienda en linea</h1>
                        @guest
                            <p class="lead white-text">Encuentra los mejores productos en nuestra tienda virtual.</p>
                        @else
                            <p class="lead white-text">Bienvenido {{ Auth::user()->name }}, encuentra los mejores productos en nuestra tienda virtual.</p>
                        @endguest
                        <a class="main-button icon-button" href="#">Quiero comprar!</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Home -->

@endsection