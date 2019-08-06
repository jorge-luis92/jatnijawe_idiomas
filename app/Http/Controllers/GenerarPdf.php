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

   $pdf = PDF::loadView('estudiante\mis_actividades.pdf_solicitud', ['data' =>  $detalles, 'nu_ce' => $num_cel, 'datos' =>  $users])
  ->setPaper($customPaper,$paper_orientation);
   return $pdf->stream('solicitud_taller.pdf');
   $paper_orientation = 'letter';
   $customPaper = array(2.5,2.5,600,950);
  }

  protected function descarga_taller(){
    $usuario_actual=auth()->user();
    $id=$usuario_actual->id_user;
    $detalles = DB::table('solicitud_talleres')
    ->select('solicitud_talleres.num_solicitud', 'solicitud_talleres.matricula')
    ->where('solicitud_talleres.matricula',$id)
    ->take(1)
    ->first();
    if(empty($detalles->matricula)){
      return redirect()->route('home_estudiante')->with('error','¡Aún no has enviado ninguna solicitud de taller!');
    }
    else {
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

   $pdf = PDF::loadView('estudiante\mis_actividades.pdf_solicitud', ['data' =>  $detalles, 'nu_ce' => $num_cel, 'datos' =>  $users])
  ->setPaper($customPaper,$paper_orientation);
   return $pdf->stream('solicitud_taller.pdf');
   $paper_orientation = 'letter';
   $customPaper = array(2.5,2.5,600,950);
}
  }

  protected function pdf_apro_taller_estudiante($matricula){
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

   $pdf = PDF::loadView('estudiante\mis_actividades.pdf_solicitud', ['data' =>  $detalles, 'nu_ce' => $num_cel, 'datos' =>  $users])
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

      $result = DB::table('tutores')
      ->select(/*'telefonos.numero',*/ 'estudiantes.matricula', 'detalle_extracurriculares.estado','extracurriculares.nombre_ec',  'extracurriculares.fecha_inicio', 'extracurriculares.fecha_fin',
      'extracurriculares.hora_inicio', 'extracurriculares.hora_fin', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
      ->join('extracurriculares', 'extracurriculares.tutor', '=', 'tutores.id_tutor')
      ->join('detalle_extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
       ->join('estudiantes', 'estudiantes.matricula', '=', 'detalle_extracurriculares.matricula')
      ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
      //->join('telefonos', 'telefonos.id_persona', '=', 'personas.id_persona')
      ->where([['tutores.id_tutor', $id_tutores->id_tutor], ['detalle_extracurriculares.actividad', '=', $id_extra], ['detalle_extracurriculares.estado', '=', 'Cursando']])
    //  ->where([['detalle_extracurriculares.actividad', '=', $id_extra], ['detalle_extracurriculares.estado', '=', 'Cursando']])

      ->get();
      $paper_orientation = 'letter';
      $customPaper = array(2.5,2.5,600,950);
      $detalles='';
   $pdf = PDF::loadView('estudiante\mis_actividades.listadeasistencia', ['dato' =>  $result])
  ->setPaper($customPaper,$paper_orientation);
   return $pdf->stream('lista_asistencia.pdf');
   $paper_orientation = 'letter';
   $customPaper = array(2.5,2.5,600,950);
  }
}
