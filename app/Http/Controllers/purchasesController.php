<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Purchase;

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
        $r->user_id = $request->input('id1');
        $r->product_id = $request->input('id');
        $r->quantity= $request->input('cantidad');
        $r->payment= $request->input('precio');
        $r->save();
        return back();
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
    	$products = product::where('id', '=', $producto)->get();
    	return view('CompraProducto')->with(compact('products','cantidad'));
    	
    }
}
