@extends('layouts.app')

@section('title', 'Resultados de Compra')
<br> <br><br><br><br><br><br>
@section('content')
	<section class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Resultados de Compra</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          
          @forelse($products as $product)
          	@if($product->id != null )
	          <div class="col-lg-4 col-md-6 text-center">
	            <div class="service-box mt-5 mx-auto">
                
        <form method="post" action="{{ url('/compraproducto') }}">
        @csrf
                <img src="{{ $product->image }}">
                  <h3 class="mb-3">{{ $product->name }}</h3>
                      ID Producto <input type="number" name="id1" value="<?php echo $product->id ?>" />
                      <p class="text-muted mb-0">{{ $product->description }}</p>
                      
                      <p> Precio Q <input type="number" name="precio" value="<?php echo $product->price ?>" /></p>   
                      <p> Cantidad <input type="number" name="cantidad" value="<?php echo $cantidad ?>" /> 
                    </p>
                      <p> Confirmar ID usuario <input class="text-muted mb-0"  name="id" required autofocus> </p> 
	              </a>
                </div>
                <input class="btn btn-light btn-xl" type="submit" value="¡Comprar!">
	          </div>
          	@endif
          @empty
	          <div class="col-lg-4 col-md-6 text-center">
	            <div class="service-box mt-5 mx-auto">
	              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
	              <h3 class="mb-3">Sin resultados</h3>
	              <p class="text-muted mb-0">No existe un producto con el codigo ingresado.</p>
	            </div>
	          </div>
          @endforelse
          
        </div>
      </div>
      </form>
    </section>

@endsection('content')