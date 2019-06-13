<?php
namespace App\Http\Controllers\Estudiante_Con;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use PDF;
use Storage;
use Illuminate\Support\Facades\Auth;
use App\Extracurricular;
use App\Detalle_extracurricular;
use App\Estudiante;
use App\Persona;
use App\Administrativo;
use App\Nivel;
use App\Departamento;
use App\Dpto_Administrativo;
use App\Telefono;
use App\Tutor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class EstudianteController extends Controller
{
    public function dato_general()
    {
      $usuario_actual=auth()->user();
      $id=$usuario_actual->id_user;
       if($id->tipo_usuario!='estudiante'){
        return redirect()->back();
      }
      else{
        return view('estudiante\datos.datos_generales');
          }
  }

  public function dato_laboral(){
    $usuario_actual=auth()->user();
    $id=$usuario_actual->id_user;
     if($id->tipo_usuario!='estudiante'){
      return redirect()->back();
      }
  return view('estudiante\datos.datos_laborales');
}

public function dato_medico(){
  $usuario_actual=\Auth::user();
   if($usuario_actual->tipo_usuario!='estudiante'){
     return redirect()->back();
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
         return redirect()->back();
        }



      return  view ('estudiante\mis_actividades.misActividades');
    }

    public function talleres_activos(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return redirect()->back();
        }
      return  view ('estudiante\mis_actividades.mis_talleres');
    }


    public function loginestudiantes(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return redirect()->back();
        }
      return view('estudiante.login_studiante');
    }

    public function m_estudiantes(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return redirect()->back();
        }
    return view('m_usuario\m_estudiante');
  }

    public function generatePDF()
    {
       $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return redirect()->back();
        }
        $data = ['title' => 'listado'];
        $pdf = PDF::loadView('pruebapdf', $data);
      //  $pdf = PDF::loadView('estudiante\mis_actividades.listado', $data);
        //return $pdf->download('listado_estudiantes.pdf');
        return $pdf->stream('listado_estudiantes.pdf');
    }
    public function cuenta_estudiante(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return redirect()->back();
        }
    return view('estudiante.configuracion_cuenta');
    }

    public function editar_actividades($id_externos)
    {
      $usuario_actual=\Auth::user();
      $externo= $id_externos;
       if($usuario_actual->tipo_usuario!='estudiante'){
        return redirect()->back();
      }
      else{
        return view('estudiante\datos.editar_externas')->with('e',$externo);
          }
  }

  public function solicitud_taller(){
   return view('estudiante\mis_actividades.solicitud_taller');
   }

   public function solicitud_practicasP(){
     $usuario_actuales=\Auth::user();
      if($usuario_actuales->tipo_usuario!='estudiante'){
        return redirect('register');
       }

     $usuario_actual=auth()->user();
     $id=$usuario_actual->id_user;
     $validar = DB::table('estudiantes')
     ->select('estudiantes.id_persona', 'estudiantes.semestre')
     ->where('estudiantes.matricula',$id)
     ->take(1)
     ->first();
     
     $id_persona = DB::table('estudiantes')
     ->select('estudiantes.id_persona')
     ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
     ->where('estudiantes.matricula',$id)
     ->take(1)
     ->first();
       $id_persona= json_decode( json_encode($id_persona), true);

       $users = DB::table('estudiantes')
       ->select('estudiantes.matricula', 'estudiantes.semestre', 'estudiantes.modalidad', 'estudiantes.estatus', 'estudiantes.grupo',
                'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'personas.fecha_nacimiento',
                'personas.curp', 'personas.genero')
       ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
       ->where('estudiantes.matricula',$id)
       ->take(1)
       ->first();

   return view('estudiante\servicios.solicitud_practicas')->with('u',$users);
   }
   public function solicitud_servicioSocial(){
   return view('estudiante\servicios.solicitud_servicioSocial');
   }


}
