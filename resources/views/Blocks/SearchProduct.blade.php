<section class="hero-area" id="SearchProduct">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 text-align="center">Comprar un Producto</h2>
        <hr class="light my-4">
        <p class="text-faded mb-4">Ingrese Codigo Producto a Comprar</p>
        <form method="GET" action="{{ url('/search') }}">
          @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Codigo Producto..." aria-label="Codigo a producto a comprar..." aria-describedby="basic-addon1" name="product_code">
            <br><br><br>
            <input type="number" class="form-control" placeholder="Cantidad..." aria-label="Cantidad producto a comprar..." aria-describedby="basic-addon1" name="product_cant">
          </div>
          @if ($errors->any())
            <div >
                <ul style="list-style-type:none">
                    @foreach ($errors->all() as $error)
                        <li><p class="section-heading h4">{{ $error }}</p></li>
                    @endforeach
                </ul> 
            </div>
          @endif
          <input class="btn btn-light btn-xl" type="submit" value="Buscar!"></input>
        </form>
      </div>
    </div>    
  </div>
</section>