<?php
namespace App\Http\Controllers;
use App\User;
use App\Estudiante;
use App\Persona;
use App\Lengua;
use App\Beca;
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

  DB::table('datos_externos')
      //->where('datos_externos.matricula', $i)
      ->updateOrInsert(
      /*   'datos_externos.hora_entrada',
                 'datos_externos.hora_salida', 'datos_externos.lugar'*/
          ['nombre_actividadexterna' => $data['nombre_actividadexterna'], 'tipo_actividadexterna' => $data['tipo_actividadexterna'],
           'dias_sem'=>  $data['dias_sem'], 'hora_entrada'=>  $data['hora_entrada'], 'hora_salida'=>  $data['hora_salida'],
           'lugar'=>  $data['lugar'], 'matricula'=>  $id],
      );
      return redirect()->route('otras_actividades')->with('success','¡Datos actualizados correctamente!');

}
}
