<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('estudiante.home_estudiante');
    }

    public function generatePDF()
    {
        $data = ['title' => 'listado'];
        $pdf = PDF::loadView('estudiante\mis_actividades.listado', $data);

        return $pdf->download('listado_estudiantes.pdf');
    }
}
