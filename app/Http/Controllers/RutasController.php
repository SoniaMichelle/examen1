<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasController extends Controller
{
    public function rutas(){
        return view('manual.rutas');
    }
    public function controlador(){
        return view('manual.controlador');
    }
}
