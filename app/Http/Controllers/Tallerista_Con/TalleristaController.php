<?php

namespace App\Http\Controllers\Tallerista_Con;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TalleristaController extends Controller
{
  public function logintallerista(){

      return view('tallerista.login_tallerista');
  }

  public function home_tallerista(){
    $usuario_actual=\Auth::user();
     if($usuario_actual->tipo_usuario!='estudiante'){
       return redirect()->back();
      }
return view('tallerista.home_tallerista');
}

public function talleres_tallerista(){
  $usuario_actual=\Auth::user();
   if($usuario_actual->tipo_usuario!='tallerista'){
     return redirect()->back();
    }
return view('tallerista.talleres_tallerista');
}

public function talleres_finalizados(){
  $usuario_actual=\Auth::user();
   if($usuario_actual->tipo_usuario!='tallerista'){
     return redirect()->back();
    }
return view('tallerista.talleres_finalizados');
}


public function grupo_tallerista(){
  $usuario_actual=\Auth::user();
   if($usuario_actual->tipo_usuario!='tallerista'){
     return redirect()->back();
    }
return view('tallerista.grupo_tallerista');
}
}
