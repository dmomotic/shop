						

						 <div class="col-xs-6">
			              <form method="GET" action="{{ url('/search') }}" id="search">
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