<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Carrera;
use App\Escuela;
use App\Persona;
use App\Direccion;
use App\Administrativo;
use App\CodigoPostal;
use Illuminate\Support\Facades\DB;
class PlaneacionController extends Controller
{

  public function home_planeacion(){
    return view('personal_administrativo\planeacion.home_planeacion');
  }

/*INFO COORDINACION ACADEMICA*/
  public function info_coord_academica1(){
  return view('personal_administrativo\planeacion\info_departamentos\info_coord_academica.info_coord_academica1');
  }

  public function info_coord_academica2(){
  return view('personal_administrativo\planeacion\info_departamentos\info_coord_academica.info_coord_academica2');
  }

  public function info_coord_academica3(){
  return view('personal_administrativo\planeacion\info_departamentos\info_coord_academica.info_coord_academica3');
  }

  public function info_coord_academica4(){
  return view('personal_administrativo\planeacion\info_departamentos\info_coord_academica.info_coord_academica4');
  }
  public function info_coord_academica5(){
  return view('personal_administrativo\planeacion\info_departamentos\info_coord_academica.info_coord_academica5');
  }

/*INFO FORMACION INTEGRAL */
  public function info_formacion_integral1(){
    return view('personal_administrativo\planeacion\info_departamentos\info_form_integral.info_formacion_integral1');
  }

public function gral_escuela(){
  $usuario_actuales=\Auth::user();
   if($usuario_actuales->tipo_usuario!='2'){
     return redirect()->back();
    }
  $usuario_actual=auth()->user();
  $id=$usuario_actual->id_user;

  $id_persona = DB::table('users')
  ->select('users.id_persona')
  ->join('personas', 'personas.id_persona', '=', 'users.id_persona')
  ->where('users.id_persona',$id)
  ->take(1)
  ->first();
    $id_persona= $id_persona->id_persona;
    //$id_persona= json_decode( json_encode($id_persona), true);
  $codigo = DB::table('codigos_postales')
  ->select('codigos_postales.cp', 'codigos_postales.colonia', 'codigos_postales.municipio', 'codigos_postales.estado')
  ->where('codigos_postales.cp', '=', '68120')
  ->take(1)
  ->first();
  $id_admin = DB::table('administrativos')
  ->select('administrativos.id_administrativo')
  ->where('administrativos.id_persona', $id_persona)
  ->take(1)
  ->first();
  $id_admin= $id_admin->id_administrativo;

  $escuela_r = DB::table('escuelas')
  ->select('escuelas.clave_institucion', 'escuelas.clave_escuela', 'escuelas.nombre_escuela', 'escuelas.dependencia_normativa',
           'escuelas.institucion_pertenciente', 'escuelas.pagina_web_escuela')
  ->where('escuelas.responsable', $id_admin)
  ->take(1)
  ->first();

  $id_direccions= DB::table('escuelas')
  ->select('escuelas.id_direccion')
  ->where('escuelas.responsable', $id_admin)
  ->take(1)
  ->first();
  $id_direccions= $id_direccions->id_direccion;
  //$id_direccions= json_decode( json_encode($id_direccions), true);

  $direccion_director = DB::table('direcciones')
  ->select('direcciones.vialidad_principal', 'direcciones.vialidad_derecha', 'direcciones.vialidad_izquierda', 'direcciones.vialidad_psterior',
  'direcciones.num_exterior', 'direcciones.num_interior', 'direcciones.cp', 'direcciones.localidad','direcciones.municipio',
  'direcciones.entidad_federativa', 'direcciones.asentamiento_humano')
  ->where('direcciones.id_direccion',$id_direccions)
  ->take(1)
  ->first();

  $id_directores = DB::table('escuelas')
  ->select('escuelas.director')
  ->where('escuelas.responsable', $id_admin)
  ->take(1)
  ->first();

  //$id_directores= $id_directores->id_direccion;
  $id_directores= json_decode( json_encode($id_directores), true);

  $datos_director = DB::table('personas')
  ->select('personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
  ->where('personas.id_persona', $id_directores)
  ->take(1)
  ->first();

  return view ('personal_administrativo\planeacion.gral_escuela')
  ->with('codego', $codigo)->with('direccion_d', $direccion_director )->with('datos_director', $datos_director)->with('datos_escuela', $escuela_r);
}



protected function crear_escuela(Request $request){
  $usuario_actuales=\Auth::user();
   if($usuario_actuales->tipo_usuario!='2'){
     return redirect()->back();
    }
  $usuario_actual=auth()->user();
  $id=$usuario_actual->id_user;

  $id_persona = DB::table('users')
  ->select('users.id_persona')
  ->join('personas', 'personas.id_persona', '=', 'users.id_persona')
  ->where('users.id_persona',$id)
  ->take(1)
  ->first();
    $id_persona= $id_persona->id_persona;


  $valor_persona = DB::table('personas')->max('id_persona');
   $data = $request;
   $id_prueba= $valor_persona*4;
//   $id_persona= json_decode( json_encode($id_persona), true);
  $result = DB::table('escuelas')->count();
  $responsable_di = DB::table('escuelas')
  ->select('escuelas.director')
  ->take(1)
  ->first();

  if($result == 0){
    $valor_direccion = DB::table('direcciones')->max('id_direccion');
    $id_direc=$valor_direccion+1;

     $direccion = new Direccion;
     $direccion->id_direccion = $id_direc;
     $direccion->vialidad_principal=$data['vialidad_principal'];
     $direccion->vialidad_derecha=$data['vialidad_derecha'];
     $direccion->vialidad_izquierda=$data['vialidad_izquierda'];
     $direccion->vialidad_psterior=$data['vialidad_psterior'];
     $direccion->num_exterior=$data['num_exterior'];
     $direccion->num_interior=$data['num_interior'];
     $direccion->cp=$data['cp'];
     $direccion->localidad=$data['localidad'];
     $direccion->municipio=$data['municipio'];
     $direccion->entidad_federativa=$data['entidad_federativa'];
     $direccion->asentamiento_humano=$data['asentamiento_humano'];
     $direccion->save();

     if($direccion->save()){
     $persona=new Persona;
     $persona->id_persona=$id_prueba;
     $persona->nombre=$data['nombre'];
     $persona->apellido_paterno=$data['apellido_paterno'];
     $persona->apellido_materno=$data['apellido_materno'];
     $persona->save();

     if($persona->save()){
       $id_admin = DB::table('administrativos')
       ->select('administrativos.id_administrativo')
       ->where('administrativos.id_persona', $id_persona)
       ->take(1)
       ->first();
       $id_admin= $id_admin->id_administrativo;

    $escuela = new Escuela;
    $escuela->clave_institucion=$data['clave_institucion'];
    $escuela->clave_escuela=$data['clave_escuela'];
    $escuela->nombre_escuela=$data['nombre_escuela'];
    $escuela->id_direccion=$id_direc;
    $escuela->dependencia_normativa=$data['dependencia_normativa'];
    $escuela->institucion_pertenciente=$data['institucion_pertenciente'];
    $escuela->director=$id_prueba;
    $escuela->pagina_web_escuela=$data['pagina_web'];
    $escuela->responsable=$id_admin;
    $escuela->save();

     if($escuela->save()){
  return redirect()->route('gral_escuela')->with('success','¡Datos registrados correctamente!');
}}}}

  else {
    $id_admin = DB::table('administrativos')
    ->select('administrativos.id_administrativo')
    ->where('administrativos.id_persona', $id_persona)
    ->take(1)
    ->first();
    $id_admin= $id_admin->id_administrativo;

    $id_directores = DB::table('escuelas')
    ->select('escuelas.director')
    ->where('escuelas.responsable', $id_admin)
    ->take(1)
    ->first();
    $id_directores= json_decode( json_encode($id_directores), true);

    DB::table('personas')
        ->where('personas.id_persona',$id_directores)
        ->update(
          ['nombre' => $data['nombre'], 'apellido_paterno' => $data['apellido_paterno'], 'apellido_materno' => $data['apellido_materno']]);

     return redirect()->route('gral_escuela')->with('success','¡Datos actualizados correctamente!');
  }
}


public function gral_carrera(){
  $usuario_actuales=\Auth::user();
   if($usuario_actuales->tipo_usuario!='2'){
     return redirect()->back();
    }
  $usuario_actual=auth()->user();
  $id=$usuario_actual->id_user;

  $result = DB::table('escuelas')->count();
   if($result == 0){
     return redirect()->route('gral_escuela')->with('error', 'Para agregar una Carrera, primero debe registrar la Escuela');

   }
   $id_persona = DB::table('users')
   ->select('users.id_persona')
   ->join('personas', 'personas.id_persona', '=', 'users.id_persona')
   ->where('users.id_persona',$id)
   ->take(1)
   ->first();
     $id_persona= $id_persona->id_persona;

   $id_admin = DB::table('administrativos')
   ->select('administrativos.id_administrativo')
   ->where('administrativos.id_persona', $id_persona)
   ->take(1)
   ->first();
   $id_admin= $id_admin->id_administrativo;

   $escuela_r = DB::table('escuelas')
   ->select('escuelas.clave_institucion', 'escuelas.clave_escuela', 'escuelas.nombre_escuela', 'escuelas.dependencia_normativa',
            'escuelas.institucion_pertenciente', 'escuelas.pagina_web_escuela')
   ->where('escuelas.responsable', $id_admin)
   ->take(1)
   ->first();
  return view ('personal_administrativo\planeacion.gral_carrera')->with('re', $result)->with('datos_escuela', $escuela_r);
}

protected function crear_carrera(Request $request){

  $usuario_actuales=\Auth::user();
   if($usuario_actuales->tipo_usuario!='2'){
     return redirect()->back();
    }
  $usuario_actual=auth()->user();
  $id=$usuario_actual->id_user;
  $data = $request;
  $id_persona = DB::table('users')
  ->select('users.id_persona')
  ->join('personas', 'personas.id_persona', '=', 'users.id_persona')
  ->where('users.id_persona',$id)
  ->take(1)
  ->first();

    $id_persona= $id_persona->id_persona;
    $id_admin = DB::table('administrativos')
    ->select('administrativos.id_administrativo')
    ->where('administrativos.id_persona', $id_persona)
    ->take(1)
    ->first();
    $id_admin= $id_admin->id_administrativo;

    $escuela_r = DB::table('escuelas')
    ->select('escuelas.clave_institucion')
    ->where('escuelas.responsable', $id_admin)
    ->take(1)
    ->first();

     $escuela_r = $escuela_r->clave_institucion;
    // $escuela_r= json_decode( json_encode($escuela_r), true);

    $carrera = new Carrera;
    $carrera->clave_carrera = $data['clave_carrera'];$id_direc;
    $carrera->clave_institucion= $escuela_r;
    $carrera->facultad='FACULTAD DE IDIOMAS';
    $carrera->carrera=$data['carrera'];
    $carrera->modalidad=$data['modalidad'];
    $carrera->save();

    if($carrera->save()){
      return redirect()->route('carreras_registradas')->with('success', 'Carrera Registrada correctamente');

    }



}

protected function info_carreras(){

     $result = DB::table('carreras')
     ->select('carreras.clave_carrera', 'carreras.clave_institucion', 'carreras.facultad', 'carreras.carrera', 'carreras.modalidad')
     ->simplePaginate(10);

  return view ('personal_administrativo\planeacion.carreras')->with('info_carrera', $result);

}
/*REPORTE Semestral*/
public function reporte_semestral(){
  return view ('personal_administrativo\planeacion\reportes\reporte_semestral.reporte_semestral');
}

/*REPORTE 911.9*/
public function reporte911_9(){
  return view ('personal_administrativo\planeacion\reportes\reporte911_9.reporte911_9');
}

/*REPORTE 911.9A*/
public function reporte911_9A_0(){
  return view ('personal_administrativo\planeacion\reportes\reporte911_9A.reporte911_9A_0');
}

public function reporte911_9A_1(){
  return view ('personal_administrativo\planeacion\reportes\reporte911_9A.reporte911_9A_1');
}

public function reporte911_9A_2(){
  return view ('personal_administrativo\planeacion\reportes\reporte911_9A.reporte911_9A_2');
}

public function reporte911_9A_3(){
  return view ('personal_administrativo\planeacion\reportes\reporte911_9A.reporte911_9A_3');
}

public function reporte911_9A_4(){
  return view ('personal_administrativo\planeacion\reportes\reporte911_9A.reporte911_9A_4');
}

public function reporte911_9A_5(){
  return view ('personal_administrativo\planeacion\reportes\reporte911_9A.reporte911_9A_5');
}

public function reporte911_9A_6(){
  return view ('personal_administrativo\planeacion\reportes\reporte911_9A.reporte911_9A_6');
}
/*Servicio Social y Practicas Profesionales*/
public function info_practicasp(){
  return view ('personal_administrativo\planeacion\info_departamentos.info_practicasp');
}
public function info_serviciosocial(){
  return view ('personal_administrativo\planeacion\info_departamentos.info_serviciosocial');
}



}
