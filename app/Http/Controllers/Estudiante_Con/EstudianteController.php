<?php
namespace App\Http\Controllers\Estudiante_Con;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use Storage;
use Illuminate\Support\Facades\Auth;
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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response as FacadeResponse;


//use Excel;

class EstudianteController extends Controller
{

  public function inicio_estudiante(){
    $usuario_actual=auth()->user();
    if($usuario_actual->tipo_usuario=='estudiante'){
      if($usuario_actual->bandera=='1'){
   return view('estudiante.home_estudiante');
//return redirect()->route('home_estudiante')->with('sucess', 'Inicio de sesión correctamente');
   }
      }
      return redirect()->back();

  }
    public function dato_general()
    {
      $usuario_actual=auth()->user();
      $id=$usuario_actual->id_user;
       if($id->tipo_usuario!='estudiante'){
        return redirect()->back();
      }
      else{
        return view('estudiante\datos.datos_generales');
          }
  }

  public function dato_laboral(){
    $usuario_actual=auth()->user();
    $id=$usuario_actual->id_user;
     if($id->tipo_usuario!='estudiante'){
      return redirect()->back();
      }
  return view('estudiante\datos.datos_laborales');
}

public function dato_medico(){
  $usuario_actual=\Auth::user();
   if($usuario_actual->tipo_usuario!='estudiante'){
     return redirect()->back();
    }
return view('estudiante\datos.datos_medicos');
}

public function dato_personal(){
  $usuario_actual=\Auth::user();
   if($usuario_actual->tipo_usuario!='estudiante'){
     return redirect()->back();
    }
return view('estudiante\datos.datos_personales');
}

    public function activities(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return redirect()->back();
        }
        $id=$usuario_actual->id_user;
        $result = DB::table('detalle_extracurriculares')
        ->select('detalle_extracurriculares.estado','extracurriculares.id_extracurricular',  'extracurriculares.dias_sem', 'extracurriculares.nombre_ec', 'extracurriculares.tipo',
        'extracurriculares.creditos', 'extracurriculares.area', 'extracurriculares.modalidad', 'extracurriculares.fecha_inicio',
        'extracurriculares.fecha_fin', 'extracurriculares.hora_inicio', 'extracurriculares.hora_fin', 'tutores.id_tutor',
        'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
        ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
        ->join('tutores', 'extracurriculares.tutor', '=', 'tutores.id_tutor')
        ->join('personas', 'personas.id_persona', '=', 'tutores.id_persona')
        //->where('estudiantes.matricula',$id)
        ->where([['detalle_extracurriculares.matricula','=', $id], ['detalle_extracurriculares.estado', '=', 'cursando'],])
        //->where([['users.bandera','=', '1'], ['users.tipo_usuario', '=', 'tallerista'],])
      //  ->orderBy('personas.nombre', 'asc')
        ->simplePaginate(10);

      return  view ('estudiante\mis_actividades.misActividades')->with('dato', $result);
    }


        public function avance_horas(){
          $usuario_actual=\Auth::user();
           if($usuario_actual->tipo_usuario!='estudiante'){
             return redirect()->back();
            }
            $id=$usuario_actual->id_user;
            $result = DB::table('detalle_extracurriculares')
            ->select('detalle_extracurriculares.estado','extracurriculares.id_extracurricular',  'extracurriculares.dias_sem', 'extracurriculares.nombre_ec', 'extracurriculares.tipo',
            'extracurriculares.creditos', 'extracurriculares.area', 'extracurriculares.modalidad', 'extracurriculares.fecha_inicio',
            'extracurriculares.fecha_fin', 'extracurriculares.hora_inicio', 'extracurriculares.hora_fin', 'tutores.id_tutor',
            'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
            ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
            ->join('tutores', 'extracurriculares.tutor', '=', 'tutores.id_tutor')
            ->join('personas', 'personas.id_persona', '=', 'tutores.id_persona')
            ->where([['detalle_extracurriculares.matricula','=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'],])
            ->simplePaginate(10);

            $avance = DB::table('detalle_extracurriculares')
             ->where([['detalle_extracurriculares.matricula','=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'],])
             ->sum('detalle_extracurriculares.creditos');

          return  view ('estudiante\mis_actividades.avance_horas')->with('dato', $result)->with('av',$avance);
        }

    public function talleres_activos(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return redirect()->back();
        }
      return  view ('estudiante\mis_actividades.mis_talleres');
    }


    public function loginestudiantes(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return redirect()->back();
        }
      return view('estudiante.login_studiante');
    }

    public function m_estudiantes(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return redirect()->back();
        }
    return view('m_usuario\m_estudiante');
  }

  public function verDatos(){
     $usuario_actual=\Auth::user();
    return view('estudiantes\datos.hoja_datos')-with('s', $prueba);
  }
    public function generatePDF()
    {
      $usuario_actual=auth()->user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return redirect()->back();
        }
       $usuario=auth()->user();
        $ids=$usuario->id_user;
        $id_persona = DB::table('estudiantes')
        ->select('estudiantes.id_persona')
        ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
        ->where('estudiantes.matricula',$ids)
        ->take(1)
        ->first();
          $id_persona= json_decode( json_encode($id_persona), true);
          $users = DB::table('estudiantes')
        /*  ->select('estudiantes.matricula', 'estudiantes.semestre', 'estudiantes.modalidad', 'estudiantes.estatus', 'estudiantes.grupo',
                   'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'personas.fecha_nacimiento',
                   'personas.curp', 'personas.genero', 'direcciones.vialidad_principal', 'direcciones.num_exterior', 'direcciones.cp',
                   'direcciones.localidad', 'direcciones.municipio', 'direcciones.entidad_federativa')*/
           ->select('estudiantes.matricula', 'estudiantes.semestre', 'estudiantes.modalidad', 'estudiantes.estatus', 'estudiantes.grupo',
                      'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'personas.fecha_nacimiento',
                      'personas.curp', 'personas.genero')
          ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
          //->join('direcciones', 'personas.id_persona', '=', 'direcciones.id_persona')
          ->where('estudiantes.matricula',$ids)
          ->take(1)
          ->first();

          $direccion = DB::table('direcciones')
                        ->select('direcciones.vialidad_principal', 'direcciones.num_exterior', 'direcciones.cp',
                                 'direcciones.localidad', 'direcciones.municipio', 'direcciones.entidad_federativa')
                         ->join('personas', 'personas.id_persona', '=', 'direcciones.id_persona')
                         //->join('direcciones', 'personas.id_persona', '=', 'direcciones.id_persona')
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
           $paper_orientation = 'letter';
           $customPaper = array(2.5,2.5,600,950);

        $pdf = PDF::loadView('estudiante\datos.hoja_datos',  ['data' =>  $users, 'di' => $direccion, 'nu_l' => $num_local
        , 'nu_ce' => $num_cel])
      ->setPaper($customPaper,$paper_orientation);
        return $pdf->stream('hoja_datos_personales.pdf');


    }
    public function cuenta_estudiante(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return redirect()->back();
        }
    return view('estudiante.configuracion_cuenta');
    }

    public function foto_perfil(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
         return redirect()->back();
        }
    return view('estudiante.foto_perfil');
    }



  public function editar_actividades($id_externos)
  {
    $usuario_actual=\Auth::user();
    $externo= $id_externos;
     if($usuario_actual->tipo_usuario!='estudiante'){
      return redirect()->back();
    }
    else{
      return view('estudiante\datos.editar_externas')->with('e',$externo);
        }
}

  public function solicitud_taller(){
    $usuario_actual=\Auth::user();
     if($usuario_actual->tipo_usuario!='estudiante'){
       return redirect()->back();
      }
        $id=$usuario_actual->id_user;

        $id_persona = DB::table('estudiantes')
        ->select('estudiantes.id_persona')
        ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
        ->where('estudiantes.matricula',$id)
        ->take(1)
        ->first();
          $id_persona= json_decode( json_encode($id_persona), true);

          $users = DB::table('estudiantes')
          ->select('estudiantes.semestre', 'estudiantes.modalidad', 'personas.edad', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
          ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
          ->where('estudiantes.matricula',$id)
          ->take(1)
          ->first();

          $num_cel = DB::table('personas')
          ->select('telefonos.numero')
          ->join('telefonos', 'telefonos.id_persona', '=', 'personas.id_persona')
          ->where([['personas.id_persona',$id_persona], ['telefonos.tipo', '=', 'celular'],])
          ->take(1)
          ->first();

          $detalles = DB::table('solicitud_talleres')
          ->select('solicitud_talleres.num_solicitud', 'solicitud_talleres.duracion', 'solicitud_talleres.fecha_solicitud', 'solicitud_talleres.nombre_taller', 'solicitud_talleres.descripcion',
          'solicitud_talleres.objetivos', 'solicitud_talleres.lugar', 'solicitud_talleres.justificacion', 'solicitud_talleres.creditos', 'solicitud_talleres.area',
          'solicitud_talleres.proyecto_final', 'solicitud_talleres.cupo', 'solicitud_talleres.matricula', 'solicitud_talleres.departamento',
          'solicitud_talleres.estado', 'solicitud_talleres.fecha_inicio', 'solicitud_talleres.fecha_fin', 'solicitud_talleres.hora_inicio',
          'solicitud_talleres.hora_fin', 'solicitud_talleres.dias_sem', 'solicitud_talleres.materiales' )
          ->where('solicitud_talleres.matricula',$id)
          ->take(1)
          ->first();
  return view('estudiante\mis_actividades.solicitud_taller')->with('u',$users)->with('num_c', $num_cel)->with('taller', $detalles);
   }

   public function solicitud_practicasP(){
     $usuario_actuales=\Auth::user();
      if($usuario_actuales->tipo_usuario!='estudiante'){
      return redirect()->back();
       }

     $usuario_actual=auth()->user();
     $id=$usuario_actual->id_user;
  $validar = DB::table('estudiantes')
     ->select('estudiantes.semestre', 'estudiantes.estatus')
     ->where('estudiantes.matricula',$id)
     ->take(1)
     ->first();

     if((($validar->semestre) >= 4 ) && (($validar->estatus) == 'REGULAR')){
     $id_persona = DB::table('estudiantes')
     ->select('estudiantes.id_persona')
     ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
     ->where('estudiantes.matricula',$id)
     ->take(1)
     ->first();
       $id_persona= json_decode( json_encode($id_persona), true);

       $users = DB::table('estudiantes')
       ->select('estudiantes.matricula', 'estudiantes.semestre', 'estudiantes.modalidad', 'estudiantes.estatus', 'estudiantes.grupo',
                'personas.nombre', 'personas.id_persona', 'personas.edad', 'personas.apellido_paterno', 'personas.apellido_materno', 'personas.fecha_nacimiento',
                'personas.curp', 'personas.genero')
       ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
       ->where('estudiantes.matricula',$id)
       ->take(1)
       ->first();

         $direccion = DB::table('personas')
         ->select('direcciones.vialidad_principal', 'direcciones.num_exterior', 'direcciones.cp', 'direcciones.localidad',
         'direcciones.municipio', 'direcciones.entidad_federativa')
         ->join('direcciones', 'direcciones.id_persona', '=', 'personas.id_persona')
         ->where('personas.id_persona',$users->id_persona)
         ->take(1)
         ->first();
   return view('estudiante\servicios.solicitud_practicas')->with('u',$users)->with('ss', $validar)->with('d', $direccion);
 }else{
  return redirect()->route('home_estudiante')->with('error','Revisa los requisitos previos para poder
   solicitar Prácticas PROFESIONALES');}
 }
   public function solicitud_servicioSocial(){
   return view('estudiante\servicios.solicitud_servicioSocial');
   }


}
