<?php
namespace App\Http\Controllers\Actividades;
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
use Illuminate\Support\Facades\DB;
use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
class ActvidadesExtra extends Controller
{
    public function catalogos(){

      $usuario_actual=\Auth::user();
        $id=$usuario_actual->id_user;
       if($usuario_actual->tipo_usuario!='estudiante'){
        return redirect()->back();
        }

        $result = DB::table('extracurriculares')
        ->select('extracurriculares.id_extracurricular',  'extracurriculares.dias_sem', 'extracurriculares.nombre_ec', 'extracurriculares.tipo',
        'extracurriculares.creditos', 'extracurriculares.area', 'extracurriculares.control_cupo', 'extracurriculares.modalidad', 'extracurriculares.fecha_inicio',
        'extracurriculares.fecha_fin', 'extracurriculares.hora_inicio', 'extracurriculares.hora_fin', 'tutores.id_tutor',
        'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
      //  ->join('detalle_extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
        ->join('tutores', 'extracurriculares.tutor', '=', 'tutores.id_tutor')
        ->join('personas', 'personas.id_persona', '=', 'tutores.id_persona')
        //->where('extracurriculares.control_cupo', '>', '0')
        ->where([['extracurriculares.control_cupo', '>', '0'], ['extracurriculares.bandera', '=', '1'],])
        ->orderBy('personas.nombre', 'asc')
        ->simplePaginate(10);
    return view("estudiante\mis_actividades.catalogo_actividades")->with('dato', $result);
    }

    public function inscripcion_extra($id_extracurricular, $creditos){
      $extra= $id_extracurricular;
      $credito= $creditos;
      $usuario_actual=auth()->user();
      $id=$usuario_actual->id_user;
      $result = DB::table('extracurriculares')
      ->select('extracurriculares.control_cupo')
     ->where('extracurriculares.id_extracurricular',$extra )
    ->take(1)
    ->first();

       $aa = DB::table('detalle_extracurriculares')
      ->select('detalle_extracurriculares.actividad')
      ->join('estudiantes', 'estudiantes.matricula', '=', 'detalle_extracurriculares.matricula')
        ->where([['estudiantes.matricula',$id], ['detalle_extracurriculares.actividad', $extra],])
      ->take(1)
      ->first();
if(empty($aa)){
      DB::table('detalle_extracurriculares')
          //->where('becas.id_beca', $valor)
          ->Insert(
              ['matricula' => $id, 'actividad' => $extra, 'creditos' => $credito, 'estado' => 'Cursando'],
          );
       $reducir=($result->control_cupo)-1;
          DB::table('extracurriculares')
              ->where('extracurriculares.id_extracurricular',$extra )
              ->update(['control_cupo' => $reducir],);


      return redirect()->route('mis_actividades')->with('success','¡Inscripción Realizada correctamente!');
    }
    else {
        return redirect()->route('catalogo')->with('error','Ya estás inscrito en esta actividad!');
    }

  }


}
