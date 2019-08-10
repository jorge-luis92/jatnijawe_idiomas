<?php

namespace App\Http\Controllers;
use App\User;
use App\Estudiante;
use App\Persona;
use App\Lengua;
use App\Beca;
use App\Direccion;
use App\Datos_externo;
use App\Enfermedad_Alergia;
use App\Datos_emergencia;
use App\Discapacidad;
use App\CodigoPostal;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class ServiciosController extends Controller
{
public function home_servicios(){
return view('personal_administrativo\servicios.home_servicios');
}
public function solicitudes_practicas(){
return view('personal_administrativo\servicios\practicasP.solicitudes_practicas');
}

public function solicitudes_serviciosocial(){
return view('personal_administrativo\servicios\servicioS.solicitudes_serviciosocial');
}

public function estudiantes_activosPP(){
return view('personal_administrativo\servicios\practicasP.estudiantes_activosPP');
}


public function estudiantes_activosSS(){
return view('personal_administrativo\servicios\servicioS.estudiantes_activosSS');
}

public function egresado_registrado(){

        $usuario_actuales=\Auth::user();
         if($usuario_actuales->tipo_usuario!='3'){
           return redirect()->back();
          }
        $usuario_actual=auth()->user();
        $id=$usuario_actual->id_user;

        $est = DB::table('estudiantes')
        ->select('estudiantes.matricula', 'estudiantes.semestre', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno',  'personas.genero', 'users.id_user', 'users.bandera')
        ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
        ->join('users', 'users.id_persona', '=', 'personas.id_persona')
        ->where([['estudiantes.egresado', '=', '1']])
         ->orderBy('estudiantes.matricula', 'asc')
        ->simplePaginate(4);
return view('personal_administrativo\servicios\seguimientoE.egresado_registrado')->with('estudiante', $est);
}

public function antecedentes_laborales_egresado(){
return view('personal_administrativo\servicios\seguimientoE.antecedentes_laborales_egresado');
}

public function cuestionario_egresado_ver(){
return view('personal_administrativo\servicios\seguimientoE.cuestionario_egresado_ver');
}

public function generales_egresado_ver($matricula){

  $usuario_actuales=\Auth::user();
   if($usuario_actuales->tipo_usuario!='3'){
     return redirect()->back();
    }
  $usuario_actual=auth()->user();

  $id=$matricula;
  $users = DB::table('estudiantes')
  ->select('estudiantes.matricula', 'estudiantes.bachillerato_origen', 'estudiantes.semestre', 'estudiantes.modalidad', 'estudiantes.estatus', 'estudiantes.grupo',
           'personas.nombre', 'personas.apellido_paterno', 'personas.edad',  'personas.apellido_materno', 'personas.fecha_nacimiento',
           'personas.curp', 'personas.genero')
  ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
  ->where('estudiantes.matricula',$id)
  ->take(1)
  ->first();

  $correo =  DB::table('users')
  ->select('users.email')
  ->where('users.id_user',$id)
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

$datos_pro = DB::table('egresados')
->select('egresados.generacion', 'egresados.promedio_final')
->where('egresados.matricula', $id)
->take(1)
->first();

$id_clave = DB::table('escuelas')
->select('escuelas.nombre_escuela')
->take(1)
->first();

return view('personal_administrativo\servicios\seguimientoE.generales_egresado_ver')
->with('u', $users)->with('l', $lenguas_r)->with('ea', $enf_ale)->with('nl',$num_local)
->with('nc',$num_cel)->with('ne',$num_emergencia)->with('email', $correo)->with('pro', $datos_pro)->with('escuela', $id_clave);

}
}
