<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
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
use Illuminate\Support\Facades\Response as FacadeResponse;


class GenerarPdf extends Controller
{
  protected function pdf_solicitud_taller_estudiante($matricula){
    $usuario_actual=\Auth::user();
     if($usuario_actual->tipo_usuario!='1'){
      return redirect()->back();
    }
  $id=$matricula;
  $id_persona = DB::table('estudiantes')
  ->select('estudiantes.id_persona', )
  ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
  ->where('estudiantes.matricula',$id)
  ->take(1)
  ->first();

  $users = DB::table('estudiantes')
   ->select('personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'personas.edad', 'estudiantes.modalidad')
  ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
  ->where('estudiantes.matricula',$id)
  ->take(1)
  ->first();

  $num_cel = DB::table('personas')
  ->select('telefonos.numero')
  ->join('telefonos', 'telefonos.id_persona', '=', 'personas.id_persona')
  ->where([['personas.id_persona',$id_persona->id_persona], ['telefonos.tipo', '=', 'celular']])
  ->take(1)
  ->first();

  $detalles = DB::table('solicitud_talleres')
  ->select('solicitud_talleres.num_solicitud', 'solicitud_talleres.duracion', 'solicitud_talleres.fecha_solicitud', 'solicitud_talleres.nombre_taller', 'solicitud_talleres.descripcion',
  'solicitud_talleres.objetivos', 'solicitud_talleres.justificacion', 'solicitud_talleres.creditos', 'solicitud_talleres.area',
  'solicitud_talleres.proyecto_final', 'solicitud_talleres.cupo', 'solicitud_talleres.matricula', 'solicitud_talleres.departamento',
  'solicitud_talleres.estado', 'solicitud_talleres.fecha_inicio', 'solicitud_talleres.fecha_fin', 'solicitud_talleres.hora_inicio',
  'solicitud_talleres.hora_fin', 'solicitud_talleres.dias_sem', 'solicitud_talleres.materiales' )
  ->where([['solicitud_talleres.matricula',$id], ['solicitud_talleres.estado','=', 'Pendiente'], ['solicitud_talleres.bandera','=', '1'] ])
  ->take(1)
  ->first();

      $paper_orientation = 'letter';
      $customPaper = array(2.5,2.5,600,950);

   $pdf = PDF::loadView('estudiante/mis_actividades.pdf_solicitud', ['data' =>  $detalles, 'nu_ce' => $num_cel, 'datos' =>  $users])
  ->setPaper($customPaper,$paper_orientation);
   return $pdf->stream('solicitud_taller.pdf');
   $paper_orientation = 'letter';
   $customPaper = array(2.5,2.5,600,950);
  }

  protected function descarga_taller(){
    $usuario_actual=\Auth::user();

     if($usuario_actual->tipo_usuario!='estudiante'){
      return redirect()->back();
    }
    $usuario_actual=auth()->user();
    $id=$usuario_actual->id_user;
    $periodo_semestre = DB::table('periodos')
    ->select('periodos.id_periodo')
    ->where('periodos.estatus', '=', 'actual')
    ->take(1)
    ->first();

    $id_persona = DB::table('estudiantes')
    ->select('estudiantes.id_persona', )
    ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
    ->where('estudiantes.matricula',$id)
    ->take(1)
    ->first();

    $users = DB::table('estudiantes')
     ->select('personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'personas.edad', 'estudiantes.modalidad')
    ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
    ->where('estudiantes.matricula',$id)
    ->take(1)
    ->first();

    $num_cel = DB::table('personas')
    ->select('telefonos.numero')
    ->join('telefonos', 'telefonos.id_persona', '=', 'personas.id_persona')
    ->where([['personas.id_persona',$id_persona->id_persona], ['telefonos.tipo', '=', 'celular']])
    ->take(1)
    ->first();

    $detalles = DB::table('solicitud_talleres')
    ->select('solicitud_talleres.num_solicitud', 'solicitud_talleres.matricula', 'solicitud_talleres.estado')
    ->where([['solicitud_talleres.matricula',$id],['solicitud_talleres.bandera', '=', '1' ], ['solicitud_talleres.periodo', $periodo_semestre->id_periodo]])
    ->take(1)
    ->first();

    if(empty($detalles->estado)){
      return redirect()->route('solicitud_taller')->with('error','¡Para descargar la solicitud, primero tienes que enviarla!');
    }
    else {
      if(($detalles->estado) == 'Pendiente'){

  $detalles = DB::table('solicitud_talleres')
  ->select('solicitud_talleres.num_solicitud', 'solicitud_talleres.duracion', 'solicitud_talleres.fecha_solicitud', 'solicitud_talleres.nombre_taller', 'solicitud_talleres.descripcion',
  'solicitud_talleres.objetivos', 'solicitud_talleres.justificacion', 'solicitud_talleres.creditos', 'solicitud_talleres.area',
  'solicitud_talleres.proyecto_final', 'solicitud_talleres.cupo', 'solicitud_talleres.matricula', 'solicitud_talleres.departamento',
  'solicitud_talleres.estado', 'solicitud_talleres.fecha_inicio', 'solicitud_talleres.fecha_fin', 'solicitud_talleres.hora_inicio',
  'solicitud_talleres.hora_fin', 'solicitud_talleres.dias_sem', 'solicitud_talleres.materiales' )
  ->where('solicitud_talleres.matricula',$id)
  ->take(1)
  ->first();

      $paper_orientation = 'letter';
      $customPaper = array(2.5,2.5,600,950);

   $pdf = PDF::loadView('estudiante/mis_actividades.pdf_solicitud', ['data' =>  $detalles, 'nu_ce' => $num_cel, 'datos' =>  $users])
  ->setPaper($customPaper,$paper_orientation);
   return $pdf->stream('solicitud_taller.pdf');
   $paper_orientation = 'letter';
   $customPaper = array(2.5,2.5,600,950);
}

if(($detalles->estado) == 'Rechazado'){
    return redirect()->route('solicitud_taller')->with('error','¡Para descargar la solicitud, primero tienes que enviarla!');
}
if(($detalles->estado) == 'Aprobado'){
    return redirect()->route('mi_taller')->with('error','¡Puedes descargar los detalles del Taller desde aquí!');
}
if(($detalles->estado) == 'Acreditado'){
    return redirect()->route('home_estudiante')->with('error','¡Solo puedes descargar la solicitud en el transcurso del Taller!');
}
}
  }

  protected function pdf_apro_taller_estudiante($matricula){
    $usuario_actual=\Auth::user();
     if($usuario_actual->tipo_usuario!='1'){
      return redirect()->back();
    }
  $id=$matricula;
  $id_persona = DB::table('estudiantes')
  ->select('estudiantes.id_persona', )
  ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
  ->where('estudiantes.matricula',$id)
  ->take(1)
  ->first();

  $users = DB::table('estudiantes')
   ->select('personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'personas.edad', 'estudiantes.modalidad')
  ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
  ->where('estudiantes.matricula',$id)
  ->take(1)
  ->first();

  $num_cel = DB::table('personas')
  ->select('telefonos.numero')
  ->join('telefonos', 'telefonos.id_persona', '=', 'personas.id_persona')
  ->where([['personas.id_persona',$id_persona->id_persona], ['telefonos.tipo', '=', 'celular']])
  ->take(1)
  ->first();

  $detalles = DB::table('solicitud_talleres')
  ->select('solicitud_talleres.num_solicitud', 'solicitud_talleres.duracion', 'solicitud_talleres.fecha_solicitud', 'solicitud_talleres.nombre_taller', 'solicitud_talleres.descripcion',
  'solicitud_talleres.objetivos', 'solicitud_talleres.justificacion', 'solicitud_talleres.creditos', 'solicitud_talleres.area',
  'solicitud_talleres.proyecto_final', 'solicitud_talleres.cupo', 'solicitud_talleres.matricula', 'solicitud_talleres.departamento',
  'solicitud_talleres.estado', 'solicitud_talleres.fecha_inicio', 'solicitud_talleres.fecha_fin', 'solicitud_talleres.hora_inicio',
  'solicitud_talleres.hora_fin', 'solicitud_talleres.dias_sem', 'solicitud_talleres.materiales' )
  ->where('solicitud_talleres.matricula',$id)
  ->take(1)
  ->first();

      $paper_orientation = 'letter';
      $customPaper = array(2.5,2.5,600,950);

   $pdf = PDF::loadView('estudiante/mis_actividades.pdf_solicitud', ['data' =>  $detalles, 'nu_ce' => $num_cel, 'datos' =>  $users])
  ->setPaper($customPaper,$paper_orientation);
   return $pdf->stream('solicitud_taller.pdf');
   $paper_orientation = 'letter';
   $customPaper = array(2.5,2.5,600,950);
  }

  protected function descargar_lista_taller($id_taller){
    $usuario_actual=\Auth::user();
     if($usuario_actual->tipo_usuario!='estudiante'){
      return redirect()->back();
    }
      $id=$usuario_actual->id_user;
      $id_extra= $id_taller;
      $id_tutores = DB::table('tutores')
      ->select('tutores.id_tutor')
      ->join('personas', 'personas.id_persona', '=' ,'tutores.id_persona')
      ->join('estudiantes', 'estudiantes.id_persona', '=' ,'personas.id_persona')
      ->where('estudiantes.matricula', $id)
      ->take(1)
      ->first();

      $periodo_semestre = DB::table('periodos')
      ->select('periodos.id_periodo')
      ->where('periodos.estatus', '=', 'actual')
      ->take(1)
      ->first();

      $result = DB::table('extracurriculares')
      ->select('telefonos.numero', 'estudiantes.matricula','extracurriculares.nombre_ec', 'personas.nombre',
               'personas.apellido_paterno', 'personas.apellido_materno')
      ->join('detalle_extracurriculares', 'detalle_extracurriculares.actividad', '=', 'extracurriculares.id_extracurricular')
      ->join('estudiantes', 'estudiantes.matricula', '=', 'detalle_extracurriculares.matricula')
      ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
      ->join('telefonos', 'telefonos.id_persona', '=', 'personas.id_persona')
      ->where([['extracurriculares.bandera', '=' , '1'], ['extracurriculares.tutor', $id_tutores->id_tutor], ['detalle_extracurriculares.actividad', $id_extra], ['detalle_extracurriculares.estado', '=', 'Cursando'], ['detalle_extracurriculares.periodo', $periodo_semestre->id_periodo], ['telefonos.tipo', '=', 'celular']])
      ->get();

      $datos_extra = DB::table('extracurriculares')
      ->select('extracurriculares.nombre_ec', 'extracurriculares.fecha_inicio', 'extracurriculares.fecha_fin', 'extracurriculares.hora_inicio',
                'extracurriculares.hora_fin', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
      ->join('tutores', 'tutores.id_tutor', '=', 'extracurriculares.tutor')
      ->join('personas', 'personas.id_persona', '=', 'tutores.id_persona')
      ->where([['extracurriculares.bandera', '=' , '1'], ['extracurriculares.tutor', $id_tutores->id_tutor], ['extracurriculares.id_extracurricular', $id_extra], ['extracurriculares.periodo', $periodo_semestre->id_periodo]])
      ->take(1)
      ->first();
      $paper_orientation = 'letter';
      $customPaper = array(2.5,2.5,600,950);

   $pdf = PDF::loadView('estudiante/mis_actividades.listadeasistencia', ['dato' =>  $result, 'datos_extra' => $datos_extra])
  ->setPaper($customPaper,$paper_orientation);
   return $pdf->stream('lista_asistencia.pdf');
   $paper_orientation = 'letter';
   $customPaper = array(2.5,2.5,600,950);
  }

  protected function descargar_lista_tallerista($id_taller){
    $usuario_actual=\Auth::user();
     if($usuario_actual->tipo_usuario!='tallerista'){
      return redirect()->back();
    }
      $id=$usuario_actual->id_user;
      $id_extra= $id_taller;
      $id_tutores = DB::table('tutores')
      ->select('tutores.id_tutor')
      ->join('personas', 'personas.id_persona', '=' ,'tutores.id_persona')
      ->join('users', 'users.id_persona', '=' ,'personas.id_persona')
      ->where('users.id_user', $id)
      ->take(1)
      ->first();

      $periodo_semestre = DB::table('periodos')
      ->select('periodos.id_periodo')
      ->where('periodos.estatus', '=', 'actual')
      ->take(1)
      ->first();

      $result = DB::table('extracurriculares')
      ->select('telefonos.numero', 'estudiantes.matricula','extracurriculares.nombre_ec', 'personas.nombre',
               'personas.apellido_paterno', 'personas.apellido_materno')
      ->join('detalle_extracurriculares', 'detalle_extracurriculares.actividad', '=', 'extracurriculares.id_extracurricular')
      ->join('estudiantes', 'estudiantes.matricula', '=', 'detalle_extracurriculares.matricula')
      ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
      ->join('telefonos', 'telefonos.id_persona', '=', 'personas.id_persona')
      ->where([['extracurriculares.bandera', '=' , '1'], ['extracurriculares.tutor', $id_tutores->id_tutor], ['detalle_extracurriculares.actividad', $id_extra], ['detalle_extracurriculares.estado', '=', 'Cursando'], ['detalle_extracurriculares.periodo', $periodo_semestre->id_periodo], ['telefonos.tipo', '=', 'celular']])
      ->get();

      $datos_extra = DB::table('extracurriculares')
      ->select('extracurriculares.nombre_ec', 'extracurriculares.fecha_inicio', 'extracurriculares.fecha_fin', 'extracurriculares.hora_inicio',
                'extracurriculares.hora_fin', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
      ->join('tutores', 'tutores.id_tutor', '=', 'extracurriculares.tutor')
      ->join('personas', 'personas.id_persona', '=', 'tutores.id_persona')
      ->where([['extracurriculares.bandera', '=' , '1'], ['extracurriculares.tutor', $id_tutores->id_tutor], ['extracurriculares.id_extracurricular', $id_extra], ['extracurriculares.periodo', $periodo_semestre->id_periodo]])
      ->take(1)
      ->first();
      $paper_orientation = 'letter';
      $customPaper = array(2.5,2.5,600,950);

   $pdf = PDF::loadView('estudiante/mis_actividades.listadeasistencia', ['dato' =>  $result, 'datos_extra' => $datos_extra])
  ->setPaper($customPaper,$paper_orientation);
   return $pdf->stream('lista_asistencia.pdf');
   $paper_orientation = 'letter';
   $customPaper = array(2.5,2.5,600,950);
  }

  protected function descarga_taller_act($id_taller){
    $usuario_actual=\Auth::user();
     if($usuario_actual->tipo_usuario!='estudiante'){
      return redirect()->back();
    }
    $usuario_actual=auth()->user();
    $id=$usuario_actual->id_user;
    $id_extra = $id_taller;

    $periodo_semestre = DB::table('periodos')
    ->select('periodos.id_periodo')
    ->where('periodos.estatus', '=', 'actual')
    ->take(1)
    ->first();

    $id_persona = DB::table('estudiantes')
    ->select('estudiantes.id_persona', )
    ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
    ->where('estudiantes.matricula',$id)
    ->take(1)
    ->first();

    $users = DB::table('estudiantes')
     ->select('personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'personas.edad', 'estudiantes.modalidad')
    ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
    ->where('estudiantes.matricula',$id)
    ->take(1)
    ->first();

    $num_cel = DB::table('personas')
    ->select('telefonos.numero')
    ->join('telefonos', 'telefonos.id_persona', '=', 'personas.id_persona')
    ->where([['personas.id_persona',$id_persona->id_persona], ['telefonos.tipo', '=', 'celular']])
    ->take(1)
    ->first();

  $detalles = DB::table('solicitud_talleres')
  ->select('solicitud_talleres.num_solicitud', 'solicitud_talleres.duracion', 'solicitud_talleres.fecha_solicitud', 'solicitud_talleres.nombre_taller', 'solicitud_talleres.descripcion',
  'solicitud_talleres.objetivos', 'solicitud_talleres.justificacion', 'solicitud_talleres.creditos', 'solicitud_talleres.area',
  'solicitud_talleres.proyecto_final', 'solicitud_talleres.cupo', 'solicitud_talleres.matricula', 'solicitud_talleres.departamento',
  'solicitud_talleres.estado', 'solicitud_talleres.fecha_inicio', 'solicitud_talleres.fecha_fin', 'solicitud_talleres.hora_inicio',
  'solicitud_talleres.hora_fin', 'solicitud_talleres.dias_sem', 'solicitud_talleres.materiales' )
  ->where([['solicitud_talleres.matricula',$id], ['solicitud_talleres.periodo',$periodo_semestre->id_periodo]])
  ->take(1)
  ->first();

      $paper_orientation = 'letter';
      $customPaper = array(2.5,2.5,600,950);

   $pdf = PDF::loadView('estudiante/mis_actividades.pdf_solicitud', ['data' =>  $detalles, 'nu_ce' => $num_cel, 'datos' =>  $users])
  ->setPaper($customPaper,$paper_orientation);
   return $pdf->stream('solicitud_taller.pdf');
   $paper_orientation = 'letter';
   $customPaper = array(2.5,2.5,600,950);
}


public function probado(){

  $paper_orientation = 'letter';
    $customPaper = array(2.5,2.5,600,950);
$data ="hola";
 $pdf = PDF::loadView('pruebaso', ['data' =>  $data])
->setPaper($customPaper,$paper_orientation);
 return $pdf->stream('solicitud_taller.pdf');
 $paper_orientation = 'letter';
 $customPaper = array(2.5,2.5,600,950);
}

}
