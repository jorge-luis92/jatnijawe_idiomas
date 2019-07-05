<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
use App\Alumno;
use App\AlumnoCurso;
use App\SolicitudTaller;
use Illuminate\Support\Facades\DB;
use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use PDF;
use Dompdf\Dompdf;

class BusquedaAnteriorController extends Controller
{
  public function vista_atras()
  {
  return view('personal_administrativo\formacion_integral.busqueda_atras');
  }


  protected function anteriores_busqueda(Request $request){
    $usuario_actual=\Auth::user();
     if($usuario_actual->tipo_usuario!='1'){
       return redirect('perfiles');
      }

    $q = $request->get('q');
    if($q != null){
    $user = Alumno::where( 'alumnos.nombre', 'LIKE', '%' . $q . '%' )
                        ->orWhere ( 'alumnos.ID', 'LIKE', '%' . $q . '%' )
                        ->simplePaginate(10);


    if (count($user) > 0 ) {
        return view ( 'personal_administrativo\formacion_integral.busqueda_atras' )->withDetails ($user )->withQuery ($q);
  }
  else{
  return redirect()->route('busqueda_atras')->with('error','¡Sin resultados!');
  }}  else{
      return redirect()->route('busqueda_atras')->with('error','¡Sin resultados!');
  }
  }

  protected function ver_avance($ID){

    $id_usr=$ID;

    $result = DB::table('alumcur')
    ->select('alumcur.nombre', 'alumcur.creditos', 'alumcur.tutor', 'alumcur.status', 'alumcur.area')
    ->where([['alumcur.id_usr','=', $id_usr], ['alumcur.status', '=', 'si'],])
    ->orderBy('alumcur.nombre', 'asc')
    ->simplePaginate(10);

    $academicas = DB::table('alumcur')
     ->where([['alumcur.id_usr', '=', $id_usr], ['alumcur.status', '=', 'si'], ['alumcur.area', '=', 'ACADEMICA'],])
      ->sum('alumcur.creditos');
    $culturales = DB::table('alumcur')
     ->where([['alumcur.id_usr', '=', $id_usr], ['alumcur.status', '=', 'si'], ['alumcur.area', '=', 'CULTURAL'],])
     ->sum('alumcur.creditos');
    $deportivas = DB::table('alumcur')
    ->where([['alumcur.id_usr', '=', $id_usr], ['alumcur.status', '=', 'si'], ['alumcur.area', '=', 'DEPORTIVA'],])
    ->sum('alumcur.creditos');

    $sumas = $academicas + $culturales + $deportivas;

    $nombre = DB::table('alumnos')
    ->select('alumnos.nombre')
    ->where('alumnos.ID',$id_usr)
    ->take(1)
    ->first();

  return  view ('personal_administrativo\formacion_integral.avance_pasado')
  ->with('dato', $result)
  ->with('aca',$academicas)
  ->with('cul',$culturales)
  ->with('dep',$deportivas)
  ->with('suma',$sumas)
  ->with('estudiante', $nombre);
  }

  protected function constancia_par($matricula){
    $id=$matricula;
    $datos_estudiante = DB::table('estudiantes')
     ->select('personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
    ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
    ->where('estudiantes.matricula',$id)
    ->take(1)
    ->first();

    $academicas = DB::table('detalle_extracurriculares')
    ->select('extracurriculares.nombre_ec')
     ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
     ->where([['detalle_extracurriculares.matricula', '=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'], ['extracurriculares.area', '=', 'ACADEMICA'],])
     ->orderBy('extracurriculares.nombre_ec', 'asc')
     ->get();

    $culturales = DB::table('detalle_extracurriculares')
     ->select('extracurriculares.nombre_ec')
     ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
     ->where([['detalle_extracurriculares.matricula', '=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'], ['extracurriculares.area', '=', 'CULTURAL'],])
     ->orderBy('extracurriculares.nombre_ec', 'asc')
     ->get();

    $deportivas = DB::table('detalle_extracurriculares')
    ->select('extracurriculares.nombre_ec')
    ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
    ->where([['detalle_extracurriculares.matricula', '=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'], ['extracurriculares.area', '=', 'DEPORTIVA'],])
    ->orderBy('extracurriculares.nombre_ec', 'asc')
    ->get();

    $paper_orientation = 'letter';
    $customPaper = array(2.5,2.5,600,950);

    $pdf = PDF::loadView('personal_administrativo\formacion_integral.constanciaParcial', ['data' =>  $datos_estudiante,
    'aca' => $academicas, 'cul' => $culturales, 'dep' => $deportivas])
    ->setPaper($customPaper,$paper_orientation);
    return $pdf->stream('constancia_oficial.pdf');

  }

  protected function constancia_val($matricula){
  $id=$matricula;
    $datos_estudiante = DB::table('estudiantes')
     ->select('personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
    ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
    ->where('estudiantes.matricula',$id)
    ->take(1)
    ->first();

  $academicas = DB::table('detalle_extracurriculares')
   ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
   ->where([['detalle_extracurriculares.matricula', '=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'], ['extracurriculares.area', '=', 'ACADEMICA'],])
    ->sum('detalle_extracurriculares.creditos');
  $culturales = DB::table('detalle_extracurriculares')
   ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
   ->where([['detalle_extracurriculares.matricula', '=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'], ['extracurriculares.area', '=', 'CULTURAL'],])
   ->sum('detalle_extracurriculares.creditos');
  $deportivas = DB::table('detalle_extracurriculares')
  ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
  ->where([['detalle_extracurriculares.matricula', '=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'], ['extracurriculares.area', '=', 'DEPORTIVA'],])
  ->sum('detalle_extracurriculares.creditos');
  $sumas = $academicas + $culturales + $deportivas;
  if($academicas >= 80 && $sumas >= 200){
      $paper_orientation = 'letter';
      $customPaper = array(2.5,2.5,600,950);

   $pdf = PDF::loadView('personal_administrativo\formacion_integral.constanciaOficial', ['data' =>  $datos_estudiante,
   'aca' => $academicas, 'cul' => $culturales, 'dep' => $deportivas, 'suma' => $sumas])
  ->setPaper($customPaper,$paper_orientation);
   return $pdf->stream('constancia_oficial.pdf');
  }
  else{
    return redirect()->route('busqueda_estudiante_fi')->with('error','¡El Estudiante no cumple con los requisitos para generar la constancia!');
  }
  }


}
