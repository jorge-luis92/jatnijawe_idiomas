<?php

namespace App\Http\Controllers;
use App\User;
use App\Estudiante;
use App\Persona;
use App\Lengua;
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
      $lengua = DB::table('personas')
      ->select('lenguas.nombre_lengua')
      ->join('personas', 'personas.id_persona', '=', 'lenguas.id_persona')
      ->where('personas.id_persona',$id_persona)
      ->take(1)
      ->first();

      if(empty($lengua)){
    $users = DB::table('estudiantes')
    ->select('estudiantes.matricula', 'estudiantes.semestre', 'estudiantes.modalidad', 'estudiantes.estatus',
             'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'personas.fecha_nacimiento',
             'personas.curp', 'personas.genero')
    ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
  //  ->join('detalle_extracurriculares', 'estudiantes.matricula', '=', 'detalle_extracurriculares.matricula')
    ->where('estudiantes.matricula',$id)
    ->take(1)
    ->first();

    return view('estudiante\datos.datos_generales')->with('u',$users);
  }
    else{
        $users = DB::table('estudiantes')
        ->select('estudiantes.matricula', 'estudiantes.semestre', 'estudiantes.modalidad', 'estudiantes.estatus',
                 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'personas.fecha_nacimiento',
                 'personas.curp', 'personas.genero')
        ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
      //  ->join('detalle_extracurriculares', 'estudiantes.matricula', '=', 'detalle_extracurriculares.matricula')
        ->where('estudiantes.matricula',$id)
        ->take(1)
        ->union($lengua)
        ->first();

        return view('estudiante\datos.datos_generales')->with('u',$users);}
      }


public function datos_nombre()
{
  $usuario_actual=auth()->user();
  $id=$usuario_actual->id;

   $users = DB::table('users')
  ->select('personas.nombre', 'personas.apellido_paterno', 'apellido_materno')
  ->join('personas', 'users.id', '=', 'users.id_persona')
  ->where('users.id',$id)
  ->take(1)
  ->first();

  //return view('consultitas',['users'=> $users]);
  return view('layouts\plantilla_estudiante')->with('u',$users);
}


}
