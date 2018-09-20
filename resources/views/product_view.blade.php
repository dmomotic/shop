@extends('layouts.app')

@section('content')


  <div id="home" class="hero-area">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
        <!-- /Backgound Image -->

		<br><br><br><br>
          @forelse($producto as $p)
          @if($p->name != null )
		<div class="container-fluid">
			<div class="row">
		<div class="col-sm-2">
				<div class="card">
  					<h2 class="card-title badge badge-secondary">{{$p->name}}</h2>
  					<img class="card-img-top img-thumbnail" src="{{$p->image}}" alt="Card image cap" >
				</div>
		</div>
		<br><br>
		<div class="col-sm-10">
 				<div class="card">
  					<ul class="list-group list-group-flush">
  					  <li class="list-group-item">{{$p->description}}</li>
  					  <li class="list-group-item">$ {{$p->price}}</li>
  					  <li class="list-group-item">
				<a href="/" class="btn btn-primary">Regresar</a>
    			<a href="/" class="btn btn-primary">Comprar</a>
  					  </li>
  					</ul>
  				</div>		
		</div>
		</div>
		</div>
		  @endif
          @empty
		<div class="container-fluid">
			<div class="row">
			<div class="col-sm-12">
 				<div class="card">
  					<ul class="list-group list-group-flush">
  					  <li class="list-group-item">PRODUCTO NO ENCONTRADO</li>
  					  <li class="list-group-item">El producto no existe o no se encuentra disponible en este momento.</li>
  					  <li class="list-group-item">
				<a href="/" class="btn btn-primary">Regresar</a>
  					  </li>
  					</ul>
  				</div>		
		</div>
	</div>
	</div>
        @endforelse  


</div>


@endsection