@extends('layouts.app')

@section('title', 'Resultados de busqueda')

@section('content')
	<section class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Resultados de busqueda</h2>
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
	              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
	              <h3 class="mb-3">Producto</h3>
	              
	              	<p class="text-muted mb-0">{{ $product->name }}</p>
	              </a>
	            </div>
	          </div>
          	@endif
          	
          @empty
	          <div class="col-lg-4 col-md-6 text-center">
	            <div class="service-box mt-5 mx-auto">
	              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
	              <h3 class="mb-3">Sin resultados</h3>
	              <p class="text-muted mb-0">No existe un producto con el nombre ingresado.</p>
	            </div>
	          </div>
          @endforelse
          
        </div>
      </div>
    </section>

@endsection('content')