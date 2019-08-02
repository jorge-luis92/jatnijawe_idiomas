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

class CoordinadorAcademico extends Controller
{
    protected function ver_futuros_egresados(){

      $usuario_actuales=\Auth::user();
       if($usuario_actuales->tipo_usuario!='4'){
         return redirect()->back();
        }
      $usuario_actual=auth()->user();
      $id=$usuario_actual->id_user;

      $est = DB::table('estudiantes')
      ->select('estudiantes.matricula', 'estudiantes.semestre', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'personas.genero', 'users.id_user', 'users.bandera')
      ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
      ->join('users', 'users.id_persona', '=', 'personas.id_persona')
      ->where([['estudiantes.egresado', '=', '0'], ['estudiantes.semestre', '=', '8'], ['estudiantes.sede', '=', 'C.U.']])
       ->orderBy('estudiantes.matricula', 'asc')
      ->simplePaginate(10);

      return view('personal_administrativo\auxiliar_administrativo.futuros_egresados')->with('estudiante', $est);
    }

    protected function egresados_estudiantes(){

      $usuario_actuales=\Auth::user();
       if($usuario_actuales->tipo_usuario!='4'){
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
      ->simplePaginate(10);

      return view('personal_administrativo\auxiliar_administrativo.egresados_estudiantes_idiomas')->with('estudiante', $est);
    }


    public function cambiar_estudiante($matricula){
      $usuario_actuales=\Auth::user();
       if($usuario_actuales->tipo_usuario!='4'){
         return redirect()->back();
        }
      $usuario_actual=auth()->user();
      $id=$usuario_actual->id_user;

      $estudiante= $matricula;

      DB::table('estudiantes')
          ->where('estudiantes.matricula', $estudiante)
          ->update(['egresado' => '1']);
          return redirect()->route('estudiantes_egresados')->with('success','¡El Estudiante ha sido activado como Egresado!');

  }
}
