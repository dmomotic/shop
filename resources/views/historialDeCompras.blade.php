@extends('layouts.app')


<div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
  <br><br><br><br>
<button>ddd</button>
   <br><br><br><br>

    <div class="container" type="text" readonly>

      <div class="container">


    <div class="card">
      <div class="card-header">
        
      </div>
      <div class="card-body">
        <h5 class="card-title">Historial de Compras</h5>
      </div>
          @if(isset($consulta) && count($consulta) > 0)
            <center>
              <table>
                <tr>
                <th> NAME &nbsp;&nbsp;&nbsp;</th>
                <th> &nbsp; &nbsp; CANTIDAD &nbsp;</th>
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
       <BR><BR>
    </div>
  <BR><BR>
</div>

  @section('content')




@endsection