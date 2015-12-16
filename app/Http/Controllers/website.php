<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Ejemplo;

class website extends Controller
{
    public function index (){
        $titulo = "ya llegue yo por dos";
        Ejemplo::create([
            "clave"=>'test2',
            "titulo"=>'pepsi',
            'precio'=>'200',
            'descuento'=>'10'
        ]);
        $producto = Ejemplo::all();
        dd($producto);
        $args = compact("titulo");
        return view('website.welcome',$args);
    }

    public function ejemplo () {
        $titulo = "ejemplo";
        $args = compact("titulo");
        return view('website.ejemplo',$args);
    }
}
