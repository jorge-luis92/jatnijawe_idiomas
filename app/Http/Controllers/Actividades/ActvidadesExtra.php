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
      $result = DB::table('extracurriculares')
      ->select('extracurriculares.id_extracurricular', 'extracurriculares.nombre_ec', 'extracurriculares.tipo',
      'extracurriculares.creditos', 'extracurriculares.area', 'extracurriculares.modalidad', 'extracurriculares.fecha_inicio',
      'extracurriculares.fecha_fin', 'extracurriculares.hora_inicio', 'extracurriculares.hora_fin', 'tutores.id_tutor',
      'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
      ->join('tutores', 'extracurriculares.tutor', '=', 'tutores.id_tutor')
      ->join('personas', 'personas.id_persona', '=', 'tutores.id_persona')
      ->orderBy('personas.nombre', 'asc')
      ->simplePaginate(10);

      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
        return redirect()->back();
        }
    return view("estudiante\mis_actividades.catalogo_actividades")->with('dato', $result);
    }


}
