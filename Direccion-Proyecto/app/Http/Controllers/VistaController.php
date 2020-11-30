<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaController extends Controller
{
    public function index(){
        return view('index');
    }
    public function recordar(){
        return view('recordar');
    }
    public function inicio(){
        return view('inicio');
    }
    public function vendedor(){
        return view('vendedor');
    }
    public function busqueda(){
        return view('busqueda');
    }
}
