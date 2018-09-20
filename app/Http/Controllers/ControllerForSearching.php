<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ControllerForSearching extends Controller
{
    //

    public function showResults(Request $request){

    	//Validaciones
        $rules = [
            'product_name' => 'required|alpha',
        ];
        //Mensajes
        $messages = [
            'product_name.required' => 'Ingresa un nombre para buscar',
            'product_name.alpha' => 'Ingresa solo letras',
        ];
        $this->validate($request, $rules, $messages);
    	$p_name = $request->input('product_name');
    	$products = Product::where('name', 'like', '%'.$p_name.'%')->get();
    	return view('search.showp')->with(compact('products'));
    }
}
