<?php

namespace App\Http\Controllers\Administrativo_Con;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministrativoController extends Controller
{


    public function login_admin(){
        return view('personal_administrativo.login_personal');
    }

    public function auxiliar(){
      return view('personal_administrativo\auxiliar_administrativo.gestion_estudiante');
    }

    public function auxiliar_carga(){
      return view('personal_administrativo\auxiliar_administrativo.carga_datos_estudiantes');
    }
}
