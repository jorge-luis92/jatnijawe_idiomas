<?php

namespace App\Http\Controllers\Estudiante_Con;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class EstudianteController extends Controller
{
    /*public function index(){
      return view('estudiante.home_estudiante');
    }*/

      public function inicio_estudiante(){
      return view('estudiante.home_estudiante');
    }


    public function activities(){

      return  view ('estudiante\mis_actividades.misActividades');
    }

    public function talleres_act(){

      return  view ('estudiante\mis_actividades.mis_talleres');
    }

    public function home_estudiante_dos(){
      return view('estudiante.homedos');
    }

    public function homes_estudiante(){
      return view('estudiante.estudiante_perfil');
    }

    public function datos(){
      return view('estudiante.hoja_datos_personales');
    }

    public function loginestudiantes(){
      return view('estudiante.login_studiante');
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
