<?php

namespace App\Http\Controllers;
use App\User;
use App\Estudiante;
use App\Persona;
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
      $id=$usuario_actual->id;

      $users = DB::table('users')

      ->select('estudiantes.matricula', 'estudiantes.semestre', 'estudiantes.modalidad', 'estudiantes.estatus',
               'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'personas.fecha_nacimiento',
               'personas.curp', 'genero')
      ->join('estudiantes', 'users.id', '=', 'estudiantes.matricula')
      ->join('personas', 'users.id', '=', 'personas.id_persona')
      ->where('users.id',$id)
      ->take(1)
      ->first();

      //return view('consultitas',['users'=> $users]);
      return view('estudiante\datos.datos_generales')->with('u',$users);
}

public function datos_nombre()
{
  $usuario_actual=auth()->user();
  $id=$usuario_actual->id;

  $u;
  $GLOBALS["u"];

   $users = DB::table('users')
  ->select('personas.nombre', 'personas.apellido_paterno', 'apellido_materno')
  ->join('personas', 'users.id', '=', 'personas.id_persona')
  ->where('users.id',$id)
  ->take(1)
  ->first();

  //return view('consultitas',['users'=> $users]);
  return view('layouts\plantilla_estudiante')->with('u',$users);
}


}
