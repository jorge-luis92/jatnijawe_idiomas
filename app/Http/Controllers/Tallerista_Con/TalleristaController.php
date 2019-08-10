<?php

namespace App\Http\Controllers\Tallerista_Con;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

class TalleristaController extends Controller
{
  public function logintallerista(){

      return view('tallerista.login_tallerista');
  }

  public function home_tallerista(){
    $usuario_actual=\Auth::user();
     if($usuario_actual->tipo_usuario!='tallerista'){
       return redirect()->back();
      }
return view('tallerista.home_tallerista');
}

public function talleres_tallerista(){
  $usuario_actual=\Auth::user();
   if($usuario_actual->tipo_usuario!='tallerista'){
     return redirect()->back();
    }
    $id=$usuario_actual->id_user;
    $periodo_semestre = DB::table('periodos')
    ->select('periodos.id_periodo')
    ->where('periodos.estatus', '=', 'actual')
    ->take(1)
    ->first();

  $id_tutores = DB::table('tutores')
  ->select('tutores.id_tutor')
  ->join('personas', 'personas.id_persona', '=' ,'tutores.id_persona')
  ->join('users', 'users.id_persona', '=' ,'personas.id_persona')
  ->where('users.id_user', $id)
  ->take(1)
  ->first();

  $result = DB::table('extracurriculares')
  ->select('extracurriculares.id_extracurricular', 'extracurriculares.bandera', 'extracurriculares.dias_sem',
  'extracurriculares.nombre_ec', 'extracurriculares.tipo', 'extracurriculares.creditos', 'extracurriculares.area',
  'extracurriculares.control_cupo', 'extracurriculares.modalidad', 'extracurriculares.fecha_inicio','extracurriculares.fecha_fin',
   'extracurriculares.hora_inicio', 'extracurriculares.hora_fin', 'tutores.id_tutor', 'personas.nombre',
   'personas.apellido_paterno', 'personas.apellido_materno')
  ->join('tutores', 'extracurriculares.tutor', '=', 'tutores.id_tutor')
  ->join('personas', 'personas.id_persona', '=', 'tutores.id_persona')
  ->where([['extracurriculares.tipo', '=', 'Taller'], ['extracurriculares.bandera', '=', '1'], ['tutores.id_tutor', $id_tutores->id_tutor], ['extracurriculares.periodo', $periodo_semestre->id_periodo]])
  ->orderBy('extracurriculares.created_at', 'asc')
  ->simplePaginate(10);

return view('tallerista.talleres_tallerista')->with('dato', $result);
}

public function talleres_finalizados(){
  $usuario_actual=\Auth::user();
   if($usuario_actual->tipo_usuario!='tallerista'){
     return redirect()->back();
    }
   $id=$usuario_actual->id_user;
    $id_tutores = DB::table('tutores')
    ->select('tutores.id_tutor')
    ->join('personas', 'personas.id_persona', '=' ,'tutores.id_persona')
    ->join('users', 'users.id_persona', '=' ,'personas.id_persona')
    ->where('users.id_user', $id)
    ->take(1)
    ->first();
    $result = DB::table('extracurriculares')
    ->select('extracurriculares.id_extracurricular',  'extracurriculares.dias_sem', 'extracurriculares.nombre_ec', 'extracurriculares.tipo',
    'extracurriculares.creditos', 'extracurriculares.area', 'extracurriculares.control_cupo', 'extracurriculares.modalidad', 'extracurriculares.fecha_inicio',
    'extracurriculares.fecha_fin', 'extracurriculares.hora_inicio', 'extracurriculares.hora_fin', 'tutores.id_tutor',
    'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
    ->join('tutores', 'extracurriculares.tutor', '=', 'tutores.id_tutor')
    ->join('personas', 'personas.id_persona', '=', 'tutores.id_persona')
    ->where([['extracurriculares.bandera', '=', '2'], ['tutores.id_tutor', $id_tutores->id_tutor]])
   //->whereDate('extracurriculares.fecha_inicio', '>=', $now)
    ->orderBy('personas.nombre', 'asc')
    ->simplePaginate(10);
return view('tallerista.talleres_finalizados')->with('dato', $result);
}


public function grupo_tallerista(){
  $usuario_actual=\Auth::user();
   if($usuario_actual->tipo_usuario!='tallerista'){
     return redirect()->back();
    }
return view('tallerista.grupo_tallerista');
}


function prueba_grupo($id_extracurricular){
  $usuario_actual=\Auth::user();
   if($usuario_actual->tipo_usuario!='tallerista'){
     return redirect()->back();
    }
  $data= $id_extracurricular;

  $result = DB::table('extracurriculares')
  ->select('extracurriculares.id_extracurricular', 'extracurriculares.dias_sem', 'extracurriculares.nombre_ec', 'extracurriculares.tipo',
  'extracurriculares.creditos', 'extracurriculares.area', 'extracurriculares.modalidad', 'extracurriculares.fecha_inicio',
  'extracurriculares.fecha_fin', 'extracurriculares.hora_inicio', 'extracurriculares.hora_fin', 'tutores.id_tutor',
  'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
  ->join('tutores', 'extracurriculares.tutor', '=', 'tutores.id_tutor')
  ->join('personas', 'personas.id_persona', '=', 'tutores.id_persona')
  ->where([['extracurriculares.bandera', '=', '1'], ['extracurriculares.id_extracurricular',$data ]])
  ->take(1)
  ->first();
  return view('tallerista.finaliza_taller_tallerista')->with('dato', $data)->with('datos', $result);

}

public function finalizar_taller_t(Request $request){
$data= $request;

}

public function ver_estudiante(){
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
}
}
