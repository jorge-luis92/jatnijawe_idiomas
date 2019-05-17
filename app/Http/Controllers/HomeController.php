<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function index()
    {
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario=='estudiante'){
         return view('estudiante.home_estudiante');
       }
  elseif ($usuario_actual->tipo_usuario=='form_integral') {
    return view('personal_administrativo\auxiliar_administrativo.gestion_estudiante');
  }
    }

  
}
