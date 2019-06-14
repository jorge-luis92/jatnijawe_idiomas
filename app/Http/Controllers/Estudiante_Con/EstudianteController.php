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
        $id=$usuario_actual->id_user;
        $result = DB::table('detalle_extracurriculares')
        ->select('detalle_extracurriculares.estado','extracurriculares.id_extracurricular',  'extracurriculares.dias_sem', 'extracurriculares.nombre_ec', 'extracurriculares.tipo',
        'extracurriculares.creditos', 'extracurriculares.area', 'extracurriculares.modalidad', 'extracurriculares.fecha_inicio',
        'extracurriculares.fecha_fin', 'extracurriculares.hora_inicio', 'extracurriculares.hora_fin', 'tutores.id_tutor',
        'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
        ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
        ->join('tutores', 'extracurriculares.tutor', '=', 'tutores.id_tutor')
        ->join('personas', 'personas.id_persona', '=', 'tutores.id_persona')
        //->where('estudiantes.matricula',$id)
        ->where([['detalle_extracurriculares.matricula','=', $id], ['detalle_extracurriculares.estado', '=', 'cursando'],])
        //->where([['users.bandera','=', '1'], ['users.tipo_usuario', '=', 'tallerista'],])
      //  ->orderBy('personas.nombre', 'asc')
        ->simplePaginate(10);

      return  view ('estudiante\mis_actividades.misActividades')->with('dato', $result);
    }


        public function avance_horas(){
          $usuario_actual=\Auth::user();
           if($usuario_actual->tipo_usuario!='estudiante'){
             return redirect()->back();
            }
            $id=$usuario_actual->id_user;
            $result = DB::table('detalle_extracurriculares')
            ->select('detalle_extracurriculares.estado','extracurriculares.id_extracurricular',  'extracurriculares.dias_sem', 'extracurriculares.nombre_ec', 'extracurriculares.tipo',
            'extracurriculares.creditos', 'extracurriculares.area', 'extracurriculares.modalidad', 'extracurriculares.fecha_inicio',
            'extracurriculares.fecha_fin', 'extracurriculares.hora_inicio', 'extracurriculares.hora_fin', 'tutores.id_tutor',
            'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
            ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
            ->join('tutores', 'extracurriculares.tutor', '=', 'tutores.id_tutor')
            ->join('personas', 'personas.id_persona', '=', 'tutores.id_persona')
            //->where('estudiantes.matricula',$id)
            ->where([['detalle_extracurriculares.matricula','=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'],])
            //->where([['users.bandera','=', '1'], ['users.tipo_usuario', '=', 'tallerista'],])
          //  ->orderBy('personas.nombre', 'asc')
            ->simplePaginate(10);

            $avance = DB::table('detalle_extracurriculares')
             //->join('categories', 'transactions.category_id', '=', 'categories.id')
             ->where([['detalle_extracurriculares.matricula','=', $id], ['detalle_extracurriculares.estado', '=', 'Cursando'],])
             ->sum('detalle_extracurriculares.creditos');

          return  view ('estudiante\mis_actividades.avance_horas')->with('dato', $result)->with('av',$avance);
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
        $pdf = PDF::loadView('estudiante\datos.hoja_datos', $data);
      //  $pdf = PDF::loadView('estudiante\mis_actividades.listado', $data);
        //return $pdf->download('listado_estudiantes.pdf');
        return $pdf->stream('hoja_datos_personales.pdf');
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
     ->select('estudiantes.semestre')
     ->where('estudiantes.matricula',$id)
     ->take(1)
     ->first();
     $s="4";
  //  $validar= var_dump($validar);
        //$validar= json_decode( json_encode($validar), true);
     if($validar <= $s){
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

   return view('estudiante\servicios.solicitud_practicas')->with('u',$users)->with('ss', $validar);
 }else{
  return redirect()->route('home_estudiante')->with('error','Revisa los requisitos previos para poder
   solicitar Prácticas PROFESIONALES');}
 }
   public function solicitud_servicioSocial(){
   return view('estudiante\servicios.solicitud_servicioSocial');
   }


}
