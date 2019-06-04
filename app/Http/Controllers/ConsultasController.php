<?php

namespace App\Http\Controllers;
use App\User;
use App\Estudiante;
use App\Persona;
use App\Lengua;
use App\Beca;
use App\Telefono;
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
        $lenguas_r = DB::table('personas')
        ->select('lenguas.id_lengua', 'lenguas.nombre_lengua', 'lenguas.tipo')
        ->join('lenguas', 'lenguas.id_persona', '=', 'personas.id_persona')
        ->where('personas.id_persona',$id_persona)
        ->simplePaginate(7 );

        $users = DB::table('estudiantes')
        ->select('estudiantes.matricula', 'estudiantes.semestre', 'estudiantes.modalidad', 'estudiantes.estatus',
                 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'personas.fecha_nacimiento',
                 'personas.curp', 'personas.genero')
        ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
        ->where('estudiantes.matricula',$id)
        ->take(1)
        ->first();

        $becas_r = DB::table('estudiantes')
        ->select('becas.nombre', 'becas.tipo_beca', 'becas.id_beca')
        ->join('becas', 'estudiantes.matricula', '=', 'becas.matricula')
        //->where('estudiantes.matricula',$id)
        ->where([['estudiantes.matricula',$id], ['becas.bandera', '=', '1'],])
        ->simplePaginate(7);

        return view('estudiante\datos.datos_generales')->with('u',$users)->with('l',$lenguas_r)->with('b',$becas_r);
      }


      public function carga_otras_actividades()
      {
        $usuario_actual=auth()->user();
        $id=$usuario_actual->id_user;

          $users = DB::table('estudiantes')
          ->select('datos_externos.nombre_actividadexterna', 'datos_externos.tipo_actividadexterna',
                   'datos_externos.dias_sem', 'datos_externos.hora_entrada',
                   'datos_externos.hora_salida', 'datos_externos.lugar',  'datos_externos.id_externos')
          ->join('datos_externos', 'estudiantes.matricula', '=', 'datos_externos.matricula')
          ->where([['estudiantes.matricula',$id], ['datos_externos.bandera', '=', '1'],])
          ->simplePaginate(7);
          return view('estudiante\datos.datos_laborales')->with('u',$users);
        }

        public function carga_datos_personales(Request $request)
        {
          $usuario_actual=auth()->user();
          $id=$usuario_actual->id_user;
          $data = $request;
          $id_persona = DB::table('estudiantes')
          ->select('estudiantes.id_persona')
          ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
          ->where('estudiantes.matricula',$id)
          ->take(1)
          ->first();
            $id_persona= json_decode( json_encode($id_persona), true);

            $direccion = DB::table('personas')
            ->select('direcciones.vialidad_principal', 'direcciones.num_exterior', 'direcciones.cp', 'direcciones.localidad',
            'direcciones.municipio', 'direcciones.entidad_federativa')
            ->join('direcciones', 'direcciones.id_persona', '=', 'personas.id_persona')
            ->where('personas.id_persona',$id_persona)
            ->take(1)
            ->first();

            $num_local = DB::table('personas')
            ->select('telefonos.numero')
            ->join('telefonos', 'telefonos.id_persona', '=', 'personas.id_persona')
            ->where([['personas.id_persona',$id_persona], ['telefonos.tipo', '=', 'local'],])
            ->take(1)
            ->first();

            $num_cel = DB::table('personas')
            ->select('telefonos.numero')
            ->join('telefonos', 'telefonos.id_persona', '=', 'personas.id_persona')
            ->where([['personas.id_persona',$id_persona], ['telefonos.tipo', '=', 'celular'],])
            ->take(1)
            ->first();

            return view('estudiante\datos.datos_personales')->with('d',$direccion)->with('nl',$num_local)->with('nc',$num_cel);
          }


}
