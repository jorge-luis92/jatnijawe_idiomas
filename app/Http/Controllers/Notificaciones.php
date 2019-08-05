<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Extracurricular;
use App\Detalle_extracurricular;
use App\Estudiante;
use App\Persona;
use App\Administrativo;
use App\Nivel;
use App\Departamento;
use App\Dpto_Administrativo;
use App\Telefono;
use App\Tutor;
use App\Alumno;
use App\AlumnoCurso;
use App\Periodo;
use App\SolicitudTaller;
use App\Mail\CorreccionDeSolicitudDeTaller;
use App\Mail\AprobacionDeSolicitudDeTaller;
use App\Mail\RechazoDeSolicitudDeTaller;
use Illuminate\Support\Facades\DB;
use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class Notificaciones extends Controller
{
    public function solicitud_correcion($id_matricula){
      $matricula= $id_matricula;

      $datos_correo= DB::table('users')
       ->select('users.email', 'personas.nombre', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
       ->join('personas', 'users.id_persona', '=' , 'personas.id_persona')
       ->where('users.id_user', $matricula)
       ->take(1)
       ->first();
       $datos_taller= DB::table('solicitud_talleres')
        ->select('solicitud_talleres.nombre_taller')
        ->join('periodos', 'periodos.id_periodo', '=', 'solicitud_talleres.periodo')
        ->where('solicitud_talleres.matricula', $matricula)
        ->take(1)
        ->first();


      return view('mails.notificacioncorrecion')
      ->with('datos_estudiante', $datos_correo)->
      with('estudiante_matricula', $matricula)
        ->with('datos_taller', $datos_taller);
    }

    public function enviar_correccion(Request $request){
      $data= $request;

      $datos_correo= DB::table('users')
       ->select('users.email', 'users.id_user', 'personas.nombre', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
       ->join('personas', 'users.id_persona', '=' , 'personas.id_persona')
       ->where('users.id_user', $data['matricula'])
       ->take(1)
       ->first();

       $datos_taller= DB::table('solicitud_talleres')
        ->select('solicitud_talleres.nombre_taller')
        ->join('periodos', 'periodos.id_periodo', '=', 'solicitud_talleres.periodo')
        ->where('solicitud_talleres.matricula',  $data['matricula'])
        ->take(1)
        ->first();

       Mail::to($datos_correo->email)
       ->send(new CorreccionDeSolicitudDeTaller($datos_correo, $data, $datos_taller));

          return redirect()->route('solicitudes')->with('success','¡Notificación Enviada Correctamente!');
    }

    public function solicitud_rechazo($id_matricula){
      $matricula= $id_matricula;

      $datos_taller= DB::table('solicitud_talleres')
       ->select('solicitud_talleres.nombre_taller')
       ->join('periodos', 'periodos.id_periodo', '=', 'solicitud_talleres.periodo')
      // ->where('solicitud_talleres.matricula', $matricula)
       ->where([['solicitud_talleres.matricula', $matricula], ['periodos.estatus', '=', 'actual']])
       ->take(1)
       ->first();

      $datos_correo= DB::table('users')
       ->select('users.email', 'personas.nombre', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
       ->join('personas', 'users.id_persona', '=' , 'personas.id_persona')
       ->where('users.id_user', $matricula)
       ->take(1)
       ->first();

      return view('mails.notificacionrechazo')
      ->with('datos_estudiante', $datos_correo)
      ->with('estudiante_matricula', $matricula)
      ->with('datos_taller', $datos_taller);
    }

    public function enviar_rechazo(Request $request){
      $data= $request;

      DB::table('solicitud_talleres')
          ->where('solicitud_talleres.matricula', $data['matricula'])
          ->update(
            ['estado' => 'Rechazado']);

      $datos_correo= DB::table('users')
       ->select('users.email', 'users.id_user', 'personas.nombre', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
       ->join('personas', 'users.id_persona', '=' , 'personas.id_persona')
       ->where('users.id_user', $data['matricula'])
       ->take(1)
       ->first();

       $datos_taller= DB::table('solicitud_talleres')
        ->select('solicitud_talleres.nombre_taller')
        ->join('periodos', 'periodos.id_periodo', '=', 'solicitud_talleres.periodo')
        ->where('solicitud_talleres.matricula',  $data['matricula'])
        ->take(1)
        ->first();

       Mail::to($datos_correo->email)
       ->send(new RechazoDeSolicitudDeTaller($datos_correo, $data, $datos_taller));

          return redirect()->route('solicitudes')->with('success','¡Notificación Enviada Correctamente!');
    }

    public function solicitud_aceptada($id_matricula){
      $matricula= $id_matricula;

      $datos_taller= DB::table('solicitud_talleres')
       ->select('solicitud_talleres.nombre_taller')
       ->join('periodos', 'periodos.id_periodo', '=', 'solicitud_talleres.periodo')
      // ->where('solicitud_talleres.matricula', $matricula)
       ->where([['solicitud_talleres.matricula', $matricula], ['periodos.estatus', '=', 'actual']])
       ->take(1)
       ->first();

      $datos_correo= DB::table('users')
       ->select('users.email', 'personas.nombre', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
       ->join('personas', 'users.id_persona', '=' , 'personas.id_persona')
       ->where('users.id_user', $matricula)
       ->take(1)
       ->first();

      return view('mails.notificacionaprobado')
      ->with('datos_estudiante', $datos_correo)
      ->with('estudiante_matricula', $matricula)
      ->with('datos_taller', $datos_taller);
    }

    public function taller_aprobado(Request $request){
      $data= $request;

      $datos_correo= DB::table('users')
       ->select('users.email', 'users.id_user', 'personas.nombre', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
       ->join('personas', 'users.id_persona', '=' , 'personas.id_persona')
       ->where('users.id_user', $data['matricula'])
       ->take(1)
       ->first();

       $datos_taller= DB::table('solicitud_talleres')
        ->select('solicitud_talleres.nombre_taller')
        ->join('periodos', 'periodos.id_periodo', '=', 'solicitud_talleres.periodo')
        ->where('solicitud_talleres.matricula',  $data['matricula'])
        ->take(1)
        ->first();

       Mail::to($datos_correo->email)
       ->send(new AprobacionSolicitudDeTaller($datos_correo, $data, $datos_taller));

          return redirect()->route('solicitudes')->with('success','¡Notificación Enviada Correctamente!');
    }


}
