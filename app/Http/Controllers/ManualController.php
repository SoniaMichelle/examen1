<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManualController extends Controller
{
    public function instalacion(){
        return view('manual.instalacion');
    }
    public function vistas(){
        return view('manual.vistas');
    }
    public function vista_blade(){
        return view('manual.vista_blade');
    }
    public function modelo(){
        return view('manual.modelos');
    }
}
