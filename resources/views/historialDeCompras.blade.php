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
                        <h1 class="white-text">Historial de Compras</h1>

                    </div>
                </div>
            </div>


        </div>
        <!-- /Hero-area -->
        <hr>
        <hr>
        <div class="container">
        
          @if(isset($consulta) && count($consulta) > 0)
            <center>
              <table>
                <tr>
                <th><h2 class="black-text"> NAME &nbsp;&nbsp;&nbsp; </h2></th>
                <th><h2 class="black-text"> &nbsp; &nbsp; CANTIDAD &nbsp;</h2></th>
                </tr>
                @foreach($consulta as $registro)
                <tr>
                <td>{{ $registro->NAME }} &nbsp; &nbsp; &nbsp;</td>
                <td> &nbsp; &nbsp;{{ $registro->CANTIDAD }}</td>
                </tr>
                @endforeach
              </table>
            </center>
          @endif

        </div>
        <a class="main-button" href="{{ url('/Dash') }}">Regresar</a>
      </div>

@endsection