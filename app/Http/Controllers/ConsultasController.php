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
//use Excel;

class ConsultasController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */

    public function carga_datos_general()
    {
      $usuario_actual=auth()->user();
      $id=$usuario_actual->id_user;
      $id_persona = DB::table('estudiantes')
      ->select('estudiantes.id_persona')
      ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
      ->where('estudiantes.matricula',$id)
      ->take(1)
      ->first();
        $id_persona= json_decode( json_encode($id_persona), true);
        //  $id_persona= '28851488';
         $lengua = DB::table('personas')
         ->select('lenguas.id_lengua', 'lenguas.nombre_lengua', 'lenguas.tipo')
         ->join('lenguas', 'lenguas.persona', '=', 'personas.id_persona')
         ->where('personas.id_persona',$id_persona)
         ->take(1)
         ->first();
          //$lengua= json_decode( json_encode($lengua), true);
        //  $lengua = Lengua::find($id_persona);
    /*  if(empty($lengua)){
    $users = DB::table('estudiantes')
    ->select('estudiantes.matricula', 'estudiantes.semestre', 'estudiantes.modalidad', 'estudiantes.estatus',
             'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'personas.fecha_nacimiento',
             'personas.curp', 'personas.genero')
    ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
  //  ->join('detalle_extracurriculares', 'estudiantes.matricula', '=', 'detalle_extracurriculares.matricula')
    ->where('estudiantes.matricula',$id)
    ->take(1)
    ->first();

    return view('estudiante\datos.datos_generales')->with('u',$users)->with('l', $lengua);
  }*/
    /*else{*/
        $users = DB::table('estudiantes')
        ->select('estudiantes.matricula', 'estudiantes.semestre', 'estudiantes.modalidad', 'estudiantes.estatus',
                 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'personas.fecha_nacimiento',
                 'personas.curp', 'personas.genero')
        ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
      //  ->join('detalle_extracurriculares', 'estudiantes.matricula', '=', 'detalle_extracurriculares.matricula')
        ->where('estudiantes.matricula',$id)
        ->take(1)
      //  ->union($lengua)
        ->first();

        $beca = DB::table('estudiantes')
        ->select('becas.nombre', 'becas.tipo_beca')
        ->join('becas', 'estudiantes.matricula', '=', 'becas.matricula')
        ->where('estudiantes.matricula',$id)
        ->take(1)
        ->first();

        return view('estudiante\datos.datos_generales')->with('u',$users)->with('l',$lengua)->with('b',$beca);
      }
      //}


public function datos_nombre()
{
  $usuario_actual=auth()->user();
  $id=$usuario_actual->id_user;

   $users = DB::table('users')
  ->select('personas.nombre', 'personas.apellido_patersno', 'apellido_materno')
  ->join('personas', 'users.id', '=', 'users.id_persona')
  ->where('users.id_user',$id)
  ->take(1)
  ->first();

  //return view('consultitas',['users'=> $users]);
  return view('layouts\plantilla_estudiante')->with('us',$users);
  //return route('home_estudiante ')->with('usuario',$users);
}


}