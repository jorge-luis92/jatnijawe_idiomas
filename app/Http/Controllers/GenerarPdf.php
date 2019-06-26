<?php
namespace App\Http\Controllers;
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


class GenerarPdf extends Controller
{
  protected function pdf_solicitud_taller_estudiante($matricula){
  $id=$matricula;
  $datos_estudiante = DB::table('solicitud_talleres')
  ->select('solicitud_talleres.num_solicitud', 'solicitud_talleres.fecha_solicitud', 'solicitud_talleres.nombre_taller', 'solicitud_talleres.descripcion',
  'solicitud_talleres.objetivos', 'solicitud_talleres.justificacion', 'solicitud_talleres.creditos',
  'solicitud_talleres.proyecto_final', 'solicitud_talleres.cupo', 'solicitud_talleres.matricula', 'solicitud_talleres.departamento',
  'solicitud_talleres.estado','estudiantes.semestre', 'estudiantes.modalidad','telefonos.numero', 'personas.edad', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
  ->join('estudiantes', 'solicitud_talleres.matricula', '=', 'estudiantes.matricula')
  ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
  ->join('telefonos', 'telefonos.id_persona', '=', 'personas.id_persona')
  ->where('estudiantes.matricula',$id)
  ->where([['estudiantes.matricula',$id], ['telefonos.tipo', '=', 'celular'],])
  ->take(1)
  ->first();

      $paper_orientation = 'letter';
      $customPaper = array(2.5,2.5,600,950);

   $pdf = PDF::loadView('estudiante\mis_actividades.pdf_solicitud', ['data' =>  $datos_estudiante])
  ->setPaper($customPaper,$paper_orientation);
   return $pdf->stream('solicitud_taller.pdf');

  }
}
