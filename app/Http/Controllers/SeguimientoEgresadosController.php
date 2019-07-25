<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeguimientoEgresadosController extends Controller
{

public function home_seguimiento_egresados()
{
return view('seguimiento_egresadosP.home_seguimiento_egresados');
}

public function generales_egresado()
{
return view('seguimiento_egresadosP.generales_egresado');
}

public function cuestionario_egresado()
{
return view('seguimiento_egresadosP.cuestionario_egresado');
}

public function antecedentes_laborales()
{
  return view('seguimiento_egresadosP.antecedentes_laborales');
}
}
