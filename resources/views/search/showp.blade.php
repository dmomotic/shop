@extends('layouts.app')
<div style="background-image:url(img/cta2-background.jpg); background-repeat: repeat;">
@section('title', 'Resultados de busqueda')


@section('searchbar')
@include('blocks.searchbar')
@endsection 

@section('content')
<br>
<br>
<br>
<br>
<br>
<br>

	<section class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading" style="color:white">
            Resultados de busqueda
            </h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          
          @forelse($products as $product)
          	@if($product != null )
	          <div class="col-lg-4 col-md-6 text-center">
	            <div class="service-box mt-5 mx-auto">
	              <i class="fa fa-4x fa-gift mb-3 sr-icons" style="color:navy" ></i>
                <a href="{{ url('/ProductView/'.$product->id) }}">
	              <p style="color:white; background: black;">{{ $product->name }}</p>
	              </a>
	            </div>
	          </div>
          	@endif
          	
          @empty
	          <div class="col-lg-4 col-md-6 text-center">
	            <div class="service-box mt-5 mx-auto">
	            <i class="fa fa-spinner fa-spin fa-3x fa-fw" style="color:white"></i>
	              <h3 class="mb-3">Sin resultados</h3>
	              <p class="text-muted mb-0" style="color:white">
                No existe un producto con el nombre ingresado.
                </p>
	            </div>
	          </div>
          @endforelse
          
        </div>
      </div>
    </section>
</div>
@endsection('content')