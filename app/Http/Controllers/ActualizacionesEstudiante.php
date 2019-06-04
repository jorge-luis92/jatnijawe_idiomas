<?php
namespace App\Http\Controllers;
use App\User;
use App\Estudiante;
use App\Persona;
use App\Lengua;
use App\Beca;
use App\Direccion;
use App\Datos_externo;
use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ActualizacionesEstudiante extends Controller
{
  public function actualizacion_actividades(Request $request)
  {
    $data=$request;
  $usuario_actual=auth()->user();
  $id=$usuario_actual->id_user;

if($data['nombre_actividadexterna'] == null){
  return redirect()->route('otras_actividades')->with('success','¡Datos actualizados correctamente!');
}
else{
  $bus_act = DB::table('datos_externos')
  ->select('datos_externos.nombre_actividadexterna', 'datos_externos.hora_entrada', 'datos_externos.hora_salida',
   'datos_externos.tipo_actividadexterna')
  ->where('datos_externos.matricula',$id)
  ->get();

  DB::table('datos_externos')
      ->updateOrInsert(
          ['nombre_actividadexterna' => $data['nombre_actividadexterna'], 'tipo_actividadexterna' => $data['tipo_actividadexterna'],
           'dias_sem'=>  $data['dias_sem'], 'hora_entrada'=>  $data['hora_entrada'], 'hora_salida'=>  $data['hora_salida'],
           'lugar'=>  $data['lugar'], 'matricula'=>  $id],
      );
      return redirect()->route('otras_actividades')->with('success','¡Datos actualizados correctamente!');
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

public function act_actividades(Request $request){
  $data = $request;
  $externos=$data['id_externos'];
  DB::table('datos_externos')
      ->where('datos_externos.id_externos', $externos)
      ->update(
          ['dias_sem' => $data['dias_sem'], 'hora_entrada' => $data['hora_entrada'], 'hora_salida' => $data['hora_salida']],
      );
      return redirect()->route('otras_actividades')->with('success','¡Datos actualizados correctamente!');
}

public function desactivar_act($id_externos){
  $valor=$id_externos;
  DB::table('datos_externos')
      ->where('datos_externos.id_externos', $valor)
      ->update(
          ['bandera' => '0'],
      );
      return redirect()->route('otras_actividades')->with('success','¡Datos actualizados correctamente!');

}

public function act_datos_personales(Request $request)
{
  $this->validate($request, [
    //'id_persona' => ['required', 'string', 'max:60', 'unique:personas'],
    'tel_local' => ['string', 'min:10', 'max:10'],
    'tel_celular' => ['required', 'string', 'min:10', 'max:105'],
  ]);
  $usuario_actual=auth()->user();
  $id=$usuario_actual->id_user;
  $data = $request;
  $id_persona = DB::table('estudiantes')
  ->select('estudiantes.id_persona')
  ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
  ->where('estudiantes.matricula',$id)
  ->take(1)
  ->first();
  $id_persona = $id_persona->id_persona;
    $direccion = DB::table('personas')
    ->select('direcciones.id_persona')
    ->join('direcciones', 'direcciones.id_persona', '=', 'personas.id_persona')
    ->where('personas.id_persona',$id_persona)
    ->take(1)
    ->first();

    $tels = DB::table('personas')
    ->select('telefonos.id_persona')
    ->join('telefonos', 'telefonos.id_persona', '=', 'personas.id_persona')
    ->where('personas.id_persona',$id_persona)
    ->first();

if(empty($direccion) or empty($tels)){
  DB::table('direcciones')
      ->updateOrInsert(
          ['vialidad_principal' => $data['vialidad_principal'], 'num_exterior' => $data['num_exterior'],
          'cp' => $data['cp'], 'localidad' =>  $data['localidad'], 'municipio' => $data['municipio'],
               'entidad_federativa' => $data['entidad_federativa'], 'id_persona' => $id_persona],
      );

     if($data['tel_local'] == null){
          DB::table('telefonos')
              ->updateOrInsert(
                    ['numero' => $data['tel_celular'], 'tipo' => 'celular', 'id_persona' => $id_persona],
              );
            }
    else {
      DB::table('telefonos')
          ->updateOrInsert(
              ['numero' => $data['tel_local'], 'tipo' => 'local', 'id_persona' => $id_persona],
              ['numero' => $data['tel_celular'], 'tipo' => 'celular', 'id_persona' => $id_persona],
          );
    }

          return redirect()->route('datos_personal')->with('success','¡Datos actualizados correctamente!');
}
else {
  DB::table('direcciones')
      ->where('direcciones.id_persona', $id_persona)
      ->update(
        ['vialidad_principal' => $data['vialidad_principal'], 'num_exterior' => $data['num_exterior'],
         'localidad' =>  $data['localidad'], 'municipio' => $data['municipio'],
          'cp' => $data['cp'],   'entidad_federativa' => $data['entidad_federativa']],
        );

        $user = auth()->user();
        $user->email = $data['email'];
        $user->save();

      return redirect()->route('datos_personal')->with('success','¡Datos actualizados correctamente!');
}
  }
}
