<?php

namespace App\Http\Controllers;
use App\User;
use App\Estudiante;
use App\Persona;
use App\Lengua;
use App\Beca;
use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RegistroEstudiantes extends Controller
{
  public function create_estudiante(Request $request)
{
  $this->validate($request, [
    'nombre' => ['required', 'string', 'max:25'],
    'apellido_paterno' => ['required', 'string', 'max:25'],
    'curp' => ['required', 'string', 'min:18','max:18', 'unique:personas'],
    'lugar_nacimiento' => ['required', 'string', 'max:45'],
    'edad' => ['required', 'string', 'max:100'],
    'genero' => ['required', 'string'],
    'matricula' => ['required', 'string', 'max:10', 'unique:estudiantes'],
    'semestre' => ['required', 'string', 'max:12',],
    'grupo' => ['required', 'string', 'max:1'],
   'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
  ]);

  $data = $request;
  $id_prueba= random_int(1, 532986) +232859 * 123 -43 +(random_int(1, 1234));
  $password= $data['matricula'];
  $tipo_usuario= 'estudiante';
  if($data['edad'] > 16){
  $persona=new Persona;
  $persona->id_persona=$id_prueba;
  $persona->nombre=$data['nombre'];
  $persona->apellido_paterno=$data['apellido_paterno'];
  $persona->apellido_materno=$data['apellido_materno'];
  $persona->curp=$data['curp'];
  $persona->fecha_nacimiento=$data['fecha_nacimiento'];
  $persona->lugar_nacimiento=$data['lugar_nacimiento'];
  $persona->tipo_sangre=$data['tipo_sangre'];
  $persona->edad=$data['edad'];
  $persona->genero=$data['genero'];
  $persona->save();

  if($persona->save()){
    $estudiante=new Estudiante;
    $estudiante->matricula=$data['matricula'];
    $estudiante->modalidad=$data['modalidad'];
    $estudiante->fecha_ingreso=$data['fecha_ingreso'];
    $estudiante->semestre=$data['semestre'];
    $estudiante->grupo=$data['grupo'];
    $estudiante->estatus=$data['estatus'];
    $estudiante->bachillerato_origen=$data['bachillerato_origen'];
    $estudiante->id_persona=$id_prueba;
    $estudiante->save();
    if($estudiante->save()){

      $user=new User;
      $user->id_user=$data['matricula'];
      $user->username=$data['nombre'];
      $user->email=$data['email'];
      $user->password = Hash::make($password);
      $user->tipo_usuario=$tipo_usuario;
      $user->id_persona=$id_prueba;
      $user->save();
        if($user->save()){
      return redirect()->route('home_admin')->with('success','¡Datos registrados correctamente!');
    }}}}
else{
 return redirect()->route('registro_estudiante')->with('error','El estudiante debe ser mayor de 16 años');
}

}

public function create_estudiante_aux(Request $request)
{
$this->validate($request, [
  'nombre' => ['required', 'string', 'max:25'],
  'apellido_paterno' => ['required', 'string', 'max:25'],
  'curp' => ['required', 'string', 'min:18','max:18', 'unique:personas'],
  'lugar_nacimiento' => ['required', 'string', 'max:45'],
  'edad' => ['required', 'string', 'max:100'],
  'genero' => ['required', 'string'],
  'matricula' => ['required', 'string', 'max:10', 'unique:estudiantes'],
  'semestre' => ['required', 'string', 'max:12',],
  'grupo' => ['required', 'string', 'max:1'],
 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
]);

$data = $request;
$id_prueba= random_int(1, 532986) +232859 * 123 -43 +(random_int(1, 1234));
$password= $data['matricula'];
$tipo_usuario= 'estudiante';
if(($data['edad']) >16){
$persona=new Persona;
$persona->id_persona=$id_prueba;
$persona->nombre=$data['nombre'];
$persona->apellido_paterno=$data['apellido_paterno'];
$persona->apellido_materno=$data['apellido_materno'];
$persona->curp=$data['curp'];
$persona->fecha_nacimiento=$data['fecha_nacimiento'];
$persona->lugar_nacimiento=$data['lugar_nacimiento'];
$persona->tipo_sangre=$data['tipo_sangre'];
$persona->edad=$data['edad'];
$persona->genero=$data['genero'];
$persona->save();

if($persona->save()){
  $estudiante=new Estudiante;
  $estudiante->matricula=$data['matricula'];
  $estudiante->modalidad=$data['modalidad'];
  $estudiante->fecha_ingreso=$data['fecha_ingreso'];
  $estudiante->semestre=$data['semestre'];
  $estudiante->grupo=$data['grupo'];
  $estudiante->estatus=$data['estatus'];
  $estudiante->bachillerato_origen=$data['bachillerato_origen'];
  $estudiante->id_persona=$id_prueba;
  $estudiante->save();
  if($estudiante->save()){

    $user=new User;
    $user->id_user=$data['matricula'];
    $user->username=$data['nombre'];
    $user->email=$data['email'];
    $user->password = Hash::make($password);
    $user->tipo_usuario=$tipo_usuario;
    $user->id_persona=$id_prueba;
    $user->save();
      if($user->save()){
    return redirect()->route('home_auxiliar_adm')->with('success','¡Datos registrados correctamente!');
  }}}}
else{
return redirect()->route('registro_estudiante_aux')->with('error','El estudiante debe ser mayor a 16 años');
}

}

public function actualizacion_estudiante(Request $request)
{
  $data=$request;
$usuario_actual=auth()->user();
$id=$usuario_actual->id_user;

DB::table('estudiantes')
->where('estudiantes.matricula', $id)
->update(
        ['grupo' => $data['grupo']],
    );

 $id_persona = DB::table('estudiantes')
->select('estudiantes.id_persona')
->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
->where('estudiantes.matricula',$id)
->take(1)
->first();
$id_persona = $id_persona->id_persona;

$lengua = DB::table('lenguas')
->select('lenguas.id_lengua')
->join('personas', 'lenguas.id_persona', '=', 'personas.id_persona')
->where('personas.id_persona',$id_persona)
->take(1)
->first();

if(($data['nombre_lengua'] == null) && ($data['tipo_lengua'] == null)){
  if(($data['nombre_beca'] == null) && ($data['tipo_beca'] == null)){
      return redirect()->route('datos_general')->with('success','¡Datos actualizados correctamente!');
  }
  else{
  $buscar = DB::table('becas')
  ->select('becas.id_beca')
  ->join('estudiantes', 'estudiantes.matricula', '=', 'becas.matricula')
  ->where('estudiantes.matricula',$id)
  ->take(1)
  ->first();
  $buscar= json_decode( json_encode($buscar), true);

  DB::table('becas')
      //->where('becas.id_beca', $buscar)
      ->updateOrInsert(
          ['nombre' => $data['nombre_beca'], 'tipo_beca' => $data['tipo_beca'], 'monto' => $data['monto'],  'matricula' => $id],
      );
      return redirect()->route('datos_general')->with('success','¡Datos actualizados correctamente!');

  }
}
else {
DB::table('lenguas')

    // ->where('lenguas.id_lengua', $lengua)
    ->updateOrInsert(
        ['nombre_lengua' => $data['nombre_lengua'], 'tipo' => $data['tipo_lengua'], 'id_persona'=> $id_persona],
    );

    DB::table('personas')
        ->where('personas.id_persona', $id_persona)
        ->update(
            ['lengua' => '1'],
        );
    if(($data['nombre_beca'] == null) && ($data['tipo_beca'] == null)){
        return redirect()->route('datos_general')->with('success','¡Datos actualizados correctamente!');
    }
    else{
    $buscar = DB::table('becas')
    ->select('becas.id_beca')
    ->join('estudiantes', 'estudiantes.matricula', '=', 'becas.matricula')
    ->where('estudiantes.matricula',$id)
    ->take(1)
    ->first();
    $buscar= json_decode( json_encode($buscar), true);

    DB::table('becas')
        //->where('becas.id_beca', $buscar)
        ->updateOrInsert(
            ['nombre' => $data['nombre_beca'], 'tipo_beca' => $data['tipo_beca'], 'matricula' => $id],
        );
        return redirect()->route('datos_general')->with('success','¡Datos actualizados correctamente!');

    }

}
}

public function desactivar_lengua($id_beca){
  $valor=$id_beca;
  DB::table('becas')
      ->where('becas.id_beca', $valor)
      ->update(
          ['bandera' => '0'],
      );
      return redirect()->route('datos_general')->with('success','¡Datos actualizados correctamente!');

}

}
