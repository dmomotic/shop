<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Purchase;

class purchasesController extends Controller
{
    public function ObtenerProducto(Request $request){
        $producto = $request->input('product_code');
        $cantidad = $request->input('product_cant');
    	$products = product::where('id', '=', $producto)->get();
    	return view('CompraProducto')->with(compact('products','cantidad'));
    	
    }
    /**
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function ComprarProducto(Request $request){
        $r = new Purchase();
        $r->user_id = $request->input('user_id');
        $r->product_id = $request->input('product_id');
        $r->quantity= $request->input('product_cant');
        $r->payment= $request->input('product_price');
        $r->save();
        return back();
    }
}
