<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homepag extends Controller
{
    public function homepage(){
      return view ('welcome');
    }

    public function perfil(){
      return view('perfiles');
    }

    public function bases(){
      return view('layouts.plantillabase');
    }

    public function pruebas(){
      return view('logi');
    }

    public function restringdo(){
      return view('errores.intentosfallidos');
    }

    public function sino(){
      return view('myPDF');
    }


}
