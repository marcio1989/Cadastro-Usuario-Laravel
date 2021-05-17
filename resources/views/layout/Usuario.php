<?php

namespace App\Htpp\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    public function cadastrar(){
        return view('layout.base');
    }
    public function salvar(Request $request){
        dd($request->all());
    }
}