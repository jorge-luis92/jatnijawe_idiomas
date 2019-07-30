<?php

namespace App\Http\Controllers;
use App\User;
use App\Estudiante;
use App\Persona;
use App\Lengua;
use App\Beca;
use App\Telefono;
use App\Datos_emergencia;
use App\Discapacidad;
use App\Enfermedad_Alergia;
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
      $usuario_actuales=\Auth::user();
       if($usuario_actuales->tipo_usuario!='estudiante'){
         return redirect()->back();
        }


      $usuario_actual=auth()->user();
      $id=$usuario_actual->id_user;
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

        $users = DB::table('estudiantes')
        ->select('estudiantes.matricula', 'estudiantes.semestre', 'estudiantes.modalidad', 'estudiantes.estatus', 'estudiantes.grupo',
                 'personas.nombre', 'personas.apellido_paterno', 'personas.edad',  'personas.apellido_materno', 'personas.fecha_nacimiento',
                 'personas.curp', 'personas.genero')
        ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
        ->where('estudiantes.matricula',$id)
        ->take(1)
        ->first();

        $becas_r = DB::table('estudiantes')
        ->select('becas.nombre', 'becas.tipo_beca', 'becas.id_beca', 'becas.monto')
        ->join('becas', 'estudiantes.matricula', '=', 'becas.matricula')
        //->where('estudiantes.matricula',$id)
        ->where([['estudiantes.matricula',$id], ['becas.bandera', '=', '1']])
        ->simplePaginate(7);

        return view('estudiante\datos.datos_generales')->with('u',$users)->with('l',$lenguas_r)->with('b',$becas_r);
      }


      public function carga_otras_actividades()
      {
        $usuario_actuales=\Auth::user();
         if($usuario_actuales->tipo_usuario!='estudiante'){
           return redirect()->back();
          }
        $usuario_actual=auth()->user();
        $id=$usuario_actual->id_user;

          $users = DB::table('estudiantes')
          ->select('datos_externos.nombre_actividadexterna', 'datos_externos.tipo_actividadexterna',
                   'datos_externos.dias_sem', 'datos_externos.hora_entrada',
                   'datos_externos.hora_salida', 'datos_externos.lugar',  'datos_externos.id_externos')
          ->join('datos_externos', 'estudiantes.matricula', '=', 'datos_externos.matricula')
          ->where([['estudiantes.matricula',$id], ['datos_externos.bandera', '=', '1']])
          ->simplePaginate(7);
          return view('estudiante\datos.datos_laborales')->with('u',$users);
        }

        public function carga_datos_personales(Request $request)
        {
          $usuario_actuales=\Auth::user();
           if($usuario_actuales->tipo_usuario!='estudiante'){
             return redirect()->back();
            }
          $usuario_actual=auth()->user();
          $id=$usuario_actual->id_user;
          $data = $request;
          $id_persona = DB::table('estudiantes')
          ->select('estudiantes.id_persona')
          ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
          ->where('estudiantes.matricula',$id)
          ->take(1)
          ->first();
            $id_persona= $id_persona->id_persona;

            $direccion = DB::table('personas')
            ->select('direcciones.vialidad_principal', 'direcciones.num_exterior', 'direcciones.cp', 'direcciones.localidad',
            'direcciones.municipio', 'direcciones.entidad_federativa')
            ->join('direcciones', 'direcciones.id_direccion', '=' , 'personas.id_direccion')
            ->where('personas.id_persona',$id_persona)
            ->take(1)
            ->first();

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
      

            $codigos = DB::table('codigos_postales')
            ->select('codigos_postales.cp')
            ->where('codigos_postales.estado', '=', 'Oaxaca')
            ->get();
            return view('estudiante\datos.datos_personales')
            ->with('d',$direccion)->with('nl',$num_local)->with('nc',$num_cel)->with('codes_o', $codigos);
          }

          public function carga_datos_medicos(Request $request)
          {
            $usuario_actuales=\Auth::user();
             if($usuario_actuales->tipo_usuario!='estudiante'){
               return redirect()->back();
              }
            $usuario_actual=auth()->user();
            $id=$usuario_actual->id_user;
            $data = $request;
            $id_persona = DB::table('estudiantes')
            ->select('estudiantes.id_persona')
            ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
            ->where('estudiantes.matricula',$id)
            ->take(1)
            ->first();
              $id_persona= $id_persona->id_persona;

              $sangre = DB::table('personas')
              ->select('personas.tipo_sangre')
              ->where('personas.id_persona',$id_persona)
              ->take(1)
              ->first();

              $emergencia_dato = DB::table('datos_emergencias')
              ->select('datos_emergencias.responsable')
              ->join('estudiantes', 'estudiantes.matricula', '=', 'datos_emergencias.matricula')
              ->where('estudiantes.matricula', $id)
              ->take(1)
              ->first();
            //  $emergencia_dato= $emergencia_dato->responsable;
              $emergencia_dato= json_decode( json_encode($emergencia_dato), true);

              $emergencia = DB::table('personas')
              ->select('personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
              ->where('personas.id_persona', $emergencia_dato)
              ->take(1)
              ->first();

              $parentesco = DB::table('datos_emergencias')
              ->select('datos_emergencias.parentesco')
              ->where('datos_emergencias.matricula', $id)
              ->take(1)
              ->first();

              $num_emergencia = DB::table('personas')
              ->select('telefonos.numero')
              ->join('telefonos', 'telefonos.id_persona', '=', 'personas.id_persona')
              ->where([['personas.id_persona',$id_persona], ['telefonos.tipo', '=', 'emergencia']])
              ->take(1)
              ->first();


              $enf_ale = DB::table('estudiantes')
              ->select('enfermedades_alergias.nombre_enfermedadalergia', 'enfermedades_alergias.tipo_enfermedadalergia',
              'enfermedades_alergias.descripcion', 'enfermedades_alergias.indicaciones')
              ->join('enfermedades_alergias', 'estudiantes.matricula', '=', 'enfermedades_alergias.matricula')
              ->where('estudiantes.matricula',$id)
              //->where([['estudiantes.matricula',$id], ['becas.bandera', '=', '1'],])
              ->simplePaginate(7);

              $disca= DB::table('personas')
              ->select('discapacidades.tipo')
              ->join('discapacidades', 'discapacidades.id_persona', '=', 'personas.id_persona')
              ->where('personas.id_persona',$id_persona)
              ->take(1)
              ->first();

              return view('estudiante\datos.datos_medicos')
              ->with('s',$sangre)
              ->with('e',$emergencia)
              ->with('ne',$num_emergencia)
              ->with('ea', $enf_ale)
              ->with('dis', $disca)
              ->with('p', $parentesco);
            }


}
