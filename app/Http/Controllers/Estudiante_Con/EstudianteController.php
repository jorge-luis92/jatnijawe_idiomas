<?php

namespace App\Http\Controllers\Estudiante_Con;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class EstudianteController extends Controller
{

      public function inicio_estudiante(){
      return view('estudiante.home_estudiante');
    }


    public function dato_general(){
    return view('estudiante\datos.datos_generales');
  }

  public function dato_laboral(){
  return view('estudiante\datos.datos_laborales');
}

public function dato_medico(){
return view('estudiante\datos.datos_medicos');
}

public function dato_personal(){
return view('estudiante\datos.datos_personales');
}

    public function activities(){

      return  view ('estudiante\mis_actividades.misActividades');
    }

    public function talleres_activos(){

      return  view ('estudiante\mis_actividades.mis_talleres');
    }


    public function loginestudiantes(){
      return view('estudiante.login_studiante');
    }

    public function m_estudiantes(){
    return view('m_usuario\m_estudiante');
  }
    public function generatePDF()
    {
        $data = ['title' => 'prueba'];
        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('hoja_datos_personales.pdf');
    }

    public function index()
        {
            $data['notes'] = Note::paginate(10);

            return view('list',$data);
        }

    public function pdf_g(){

      $data = ['title' => 'prueba'];
      $pdf = PDF::loadView('notes_pdf', $data);

      return $pdf->download('hoja_datos_personales.pdf');
  }

}
