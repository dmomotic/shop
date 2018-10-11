<section class="hero-area" id="search">
      <div id="contact-cta" class="section">

      <!-- Backgound Image -->
      <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>
      <!-- Backgound Image -->

  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
            <div class="col-xs-6">
                    <form method="GET" action="{{ url('/search') }}">
                    @csrf
                <input type="text" name="product_name" placeholder="Buscar producto...">
                @if ($errors->any())
                  <div >
                    <ul style="list-style-type:none">
                      @foreach ($errors->all() as $error)
                        <li><p class="section-heading h4">{{ $error }}</p></li>
                      @endforeach
                     </ul>
                  </div>
                 @endif
                </form>
              </div>
      </div>
    </div>    
  </div>
    </div>    
</section>