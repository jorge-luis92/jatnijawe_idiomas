<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    //
public function home_servicios(){
return view('personal_administrativo\servicios.home_servicios');
}
public function solicitudes_practicas(){
return view('personal_administrativo\servicios\practicasP.solicitudes_practicas');
}

public function solicitudes_serviciosocial(){
return view('personal_administrativo\servicios\servicioS.solicitudes_serviciosocial');
}

public function estudiantes_activosPP(){
return view('personal_administrativo\servicios\practicasP.estudiantes_activosPP');
}


public function estudiantes_activosSS(){
return view('personal_administrativo\servicios\servicioS.estudiantes_activosSS');
}

public function egresado_registrado(){
return view('personal_administrativo\servicios\seguimientoE.egresado_registrado');
}

public function antecedentes_laborales_egresado(){
return view('personal_administrativo\servicios\seguimientoE.antecedentes_laborales_egresado');
}

public function cuestionario_egresado_ver(){
return view('personal_administrativo\servicios\seguimientoE.cuestionario_egresado_ver');
}

public function generales_egresado_ver(){
return view('personal_administrativo\servicios\seguimientoE.generales_egresado_ver');
}
}
