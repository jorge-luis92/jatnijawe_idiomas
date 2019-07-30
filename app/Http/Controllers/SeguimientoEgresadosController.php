<?php

namespace App\Http\Controllers;
use App\User;
use App\Estudiante;
use App\Persona;
use App\Lengua;
use App\Beca;
use App\Telefono;
use App\Datos_emergencia;
use App\Discapacidad;
use App\Enfermedad_Alergia;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SeguimientoEgresadosController extends Controller
{

public function home_seguimiento_egresados()
{
return view('seguimiento_egresadosP.home_seguimiento_egresados');
}

public function generales_egresado()
{
  $usuario_actuales=\Auth::user();
   if($usuario_actuales->tipo_usuario!='estudiante'){
     return redirect()->back();
    }


  $usuario_actual=auth()->user();
  $id=$usuario_actual->id_user;

  $egresado_si = DB::table('estudiantes')
  ->select('estudiantes.egresado')
  ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
  ->where('estudiantes.matricula',$id)
  ->take(1)
  ->first();
   $e= $egresado_si->egresado;
  if($e == 0){
  $users = DB::table('estudiantes')
  ->select('estudiantes.matricula', 'estudiantes.bachillerato_origen', 'estudiantes.semestre', 'estudiantes.modalidad', 'estudiantes.estatus', 'estudiantes.grupo',
           'personas.nombre', 'personas.apellido_paterno', 'personas.edad',  'personas.apellido_materno', 'personas.fecha_nacimiento',
           'personas.curp', 'personas.genero')
  ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
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
    $lenguas_r = DB::table('personas')
    ->select('lenguas.id_lengua', 'lenguas.nombre_lengua', 'lenguas.tipo')
    ->join('lenguas', 'lenguas.id_persona', '=', 'personas.id_persona')
    ->where('personas.id_persona',$id_persona)
    ->simplePaginate(7 );

    $enf_ale = DB::table('estudiantes')
    ->select('enfermedades_alergias.nombre_enfermedadalergia', 'enfermedades_alergias.tipo_enfermedadalergia',
    'enfermedades_alergias.descripcion', 'enfermedades_alergias.indicaciones')
    ->join('enfermedades_alergias', 'estudiantes.matricula', '=', 'enfermedades_alergias.matricula')
    ->where('estudiantes.matricula',$id)
    //->where([['estudiantes.matricula',$id], ['becas.bandera', '=', '1'],])
    ->simplePaginate(7);

    $num_local = DB::table('personas')
->select('telefonos.numero')
->join('telefonos', 'telefonos.id_persona', '=', 'personas.id_persona')
->where([['personas.id_persona',$id_persona], ['telefonos.tipo', '=', 'local']])
->take(1)
->first();

$num_cel = DB::table('personas')
->select('telefonos.numero')
->join('telefonos', 'telefonos.id_persona', '=', 'personas.id_persona')
->where([['personas.id_persona',$id_persona], ['telefonos.tipo', '=', 'celular']])
->take(1)
->first();

$num_emergencia = DB::table('personas')
->select('telefonos.numero')
->join('telefonos', 'telefonos.id_persona', '=', 'personas.id_persona')
->where([['personas.id_persona',$id_persona], ['telefonos.tipo', '=', 'emergencia']])
->take(1)
->first();


return view('seguimiento_egresadosP.generales_egresado')
->with('u', $users)->with('l', $lenguas_r)->with('ea', $enf_ale)->with('nl',$num_local)->with('nc',$num_cel)->with('ne',$num_emergencia);
}
  return redirect()->route('home_estudiante')->with('error','¡Opción del menu no habilitada, Aún no eres un egresado!');
}

public function cuestionario_egresado()
{
return view('seguimiento_egresadosP.cuestionario_egresado');
}

public function antecedentes_laborales()
{
  return view('seguimiento_egresadosP.antecedentes_laborales');
}
}
