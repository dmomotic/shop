<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Purchase;
use App\Coupon;
use Illuminate\Support\Facades\DB;

class purchasesController extends Controller
{
    /**
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function ReviewPurchase(){
        return view('Purchse');
    }

    /**
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function SavePurchase(Request $request){
        $r = new Purchase();
        $r->user_id = $request->input('id');
        $r->product_id = $request->input('id1');
        $r->quantity= $request->input('cantidad');
        //  $r->payment= $request->input('precio');
        //FUNCIONALIDAD ADICIONAL, USO DE CUPONES EN LA COMPRA
            $c = Coupon::where('code',$request->input('cupon'))->first();
            if(!$c){
            //CUPON NO ENCONTRADO O VALIDO
            $c = 0;
            $total = ($request->input('precio') - $c) * $r->quantity;
            //echo $total;               
            }else{
            //CUPON ENCONTRADO
            $total = ($request->input('precio') - $c->amount) * $r->quantity;
            //echo $total;
            }
        $r->payment= $total;
        $r->save();
        return view('/compra');
    }

    public function ObtenerProducto(Request $request){
        //Validaciones
        $rules = [
            'product_code' => 'required|numeric',           
        ];
        //Mensajes
        $messages = [
            'product_code.required' => 'Ingresa un codigo para buscar',
            'product_code.numeric' => '¡Error! Se deben ingresar unicamente numeros para el codigo del producto.',
        ];
        $this->validate($request, $rules, $messages);
        $producto = $request->input('product_code');
        $cantidad = $request->input('product_cant');
        $cupon = $request->input('coupon_code');
    	$products = product::where('id', '=', $producto)->get();
    	return view('CompraProducto')->with(compact('products','cantidad','cupon'));
    	
    }
}
