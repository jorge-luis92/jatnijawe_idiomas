<?php

namespace App\Http\Controllers\Estudiante_Con;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class EstudianteController extends Controller
{


    public function dato_general(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return view('errores.intentosfallidos');
        }
    return view('estudiante\datos.datos_generales');
  }

  public function dato_laboral(){
    $usuario_actual=\Auth::user();
     if($usuario_actual->tipo_usuario!='estudiante'){
       return view('errores.intentosfallidos');
      }
  return view('estudiante\datos.datos_laborales');
}

public function dato_medico(){
  $usuario_actual=\Auth::user();
   if($usuario_actual->tipo_usuario!='estudiante'){
     return view('errores.intentosfallidos');
    }
return view('estudiante\datos.datos_medicos');
}

public function dato_personal(){
  $usuario_actual=\Auth::user();
   if($usuario_actual->tipo_usuario!='estudiante'){
     return view('errores.intentosfallidos');
    }
return view('estudiante\datos.datos_personales');
}

    public function activities(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return view('errores.intentosfallidos');
        }
      return  view ('estudiante\mis_actividades.misActividades');
    }

    public function talleres_activos(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return view('errores.intentosfallidos');
        }
      return  view ('estudiante\mis_actividades.mis_talleres');
    }


    public function loginestudiantes(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return view('errores.intentosfallidos');
        }
      return view('estudiante.login_studiante');
    }

    public function m_estudiantes(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return view('errores.intentosfallidos');
        }
    return view('m_usuario\m_estudiante');
  }

    public function generatePDF()
    {

      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return view('errores.intentosfallidos');
        }
        $data = ['title' => 'listado'];
        $pdf = PDF::loadView('pruebapdf', $data);
      //  $pdf = PDF::loadView('estudiante\mis_actividades.listado', $data);
        //return $pdf->download('listado_estudiantes.pdf');

        return $pdf->stream('listado_estudiantes.pdf');


    }

}
