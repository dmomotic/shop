<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function registro()
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
        return back();
    }
}
