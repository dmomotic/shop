<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registroController extends Controller
{

	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function registr()
    {
        return view('/registro');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //metodo para almacenar las opiniones y calificaciones de los catedraticos
    public function saveData(Request $request){
        $r = new User();
            $r->name = $request->input('nombre');
             $r->email = $request->input('correo');
            $r->password = $request->input('password');
            $r->card = $request->input('tarjeta');
            $r->updated_at="2018-08-15 23:35:55";
            $r->created_at="2018-08-15 23:35:55";
            $r->save();
         return view('/registro');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function historico(Request $request){
        $escuela = $request->input('1');
        $consulta = \DB::table('purchases as r')
        ->join('users as u','r.user_id','=','u.id')
        ->join('products as t', 'r.product_id', '=', 't.id')
        ->select('t.name as NAME','t.quantity as CANTIDAD')
        ->where('r.user_id','=',$escuela)
        ->get();


            return view('/historialDeCompras', [
            'consulta' => $consulta
            ]);
        
    }
}
