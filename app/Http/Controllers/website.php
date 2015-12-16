<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Ejemplo;

class website extends Controller
{
    public function index(){
        $titulo = "Ejemplo";
        Ejemplo::create([
            'titulo' => 'demo_'.time(),
            'precio' => 100,
            'descuento' => 200,
            'clave' => 'prueba'.time()
        ]);
        $producto = Ejemplo::all();
        dd($producto);
        $args = compact('titulo');
        return view('website.welcome', $args);
    }

    public function ejemplo(){
        $titulo = "Ejemplo";
        $args = compact('titulo');
        return view('website.ejemplo', $args);
    }
}
