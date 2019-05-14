<?php

namespace App\Http\Controllers\Estudiante_Con;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /*public function index(){
      return view('estudiante.home_estudiante');
    }*/

    public function Index(){
    
       return view::make('estudiante.home_estudiante');
    }


    public function inicio_estudiante(){
      return view('estudiante.home_estudiante');
    }

    public function home_estudiante_dos(){
      return view('estudiante.homedos');
    }

    public function homes_estudiante(){
      return view('estudiante.estudiante_perfil');
    }

    public function datos(){
      return view('estudiante.hoja_datos_personales');
    }

    public function loginestudiantes(){
      return view('estudiante.login_studiante');
    }
}
