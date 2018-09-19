<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Product_View_Controller extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $producto = DB::table('products')
            ->select('name','price','quantity','description','image')
            ->where('id','=', $id)->get();
        //dd($producto);
        //dd($producto->image);
        return view('/product_view')->with(compact('producto'));

    }

   
}
