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
                        <h1 class="white-text">Tienda en linea</h1>
                        <p class="lead white-text">Encuentra los mejores productos en nuestra tienda virtual.</p>
                        <a class="main-button icon-button" href="#SearchProduct">¡Quiero comprar!</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Home --> 

@include('blocks.SearchProduct')

@endsection

