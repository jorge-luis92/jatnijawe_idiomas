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
return view('personal_administrativo\servicios.solicitudes_practicas');
}

public function solicitudes_serviciosocial(){
return view('personal_administrativo\servicios.solicitudes_serviciosocial');
}

public function estudiantes_activosPP(){
return view('personal_administrativo\servicios.estudiantes_activosPP');
}


public function estudiantes_activosSS(){
return view('personal_administrativo\servicios.estudiantes_activosSS');
}

}
