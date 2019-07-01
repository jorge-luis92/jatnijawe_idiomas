<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaneacionController extends Controller
{

  public function home_planeacion(){
    return view('personal_administrativo\planeacion.home_planeacion');
  }

/*INFO COORDINACION ACADEMICA*/
  public function info_coord_academica1(){
  return view('personal_administrativo\planeacion\info_departamentos\info_coord_academica.info_coord_academica1');
  }

  public function info_coord_academica2(){
  return view('personal_administrativo\planeacion\info_departamentos\info_coord_academica.info_coord_academica2');
  }

  public function info_coord_academica3(){
  return view('personal_administrativo\planeacion\info_departamentos\info_coord_academica.info_coord_academica3');
  }

  public function info_coord_academica4(){
  return view('personal_administrativo\planeacion\info_departamentos\info_coord_academica.info_coord_academica4');
  }
  public function info_coord_academica5(){
  return view('personal_administrativo\planeacion\info_departamentos\info_coord_academica.info_coord_academica5');
  }

/*INFO FORMACION INTEGRAL */
  public function info_formacion_integral1(){
    return view('personal_administrativo\planeacion\info_departamentos\info_form_integral.info_formacion_integral1');
  }

public function gral_escuela(){
  return view ('personal_administrativo\planeacion.gral_escuela');
}


public function gral_carrera(){
  return view ('personal_administrativo\planeacion.gral_carrera');
}

/*REPORTE Semestral*/
public function reporte_semestral(){
  return view ('personal_administrativo\planeacion\reportes\reporte_semestral.reporte_semestral');
}

/*REPORTE 911.9*/
public function reporte911_9(){
  return view ('personal_administrativo\planeacion\reportes\reporte911_9.reporte911_9');
}

/*REPORTE 911.9A*/
public function reporte911_9A_0(){
  return view ('personal_administrativo\planeacion\reportes\reporte911_9A.reporte911_9A_0');
}

public function reporte911_9A_1(){
  return view ('personal_administrativo\planeacion\reportes\reporte911_9A.reporte911_9A_1');
}

public function reporte911_9A_2(){
  return view ('personal_administrativo\planeacion\reportes\reporte911_9A.reporte911_9A_2');
}

public function reporte911_9A_3(){
  return view ('personal_administrativo\planeacion\reportes\reporte911_9A.reporte911_9A_3');
}

public function reporte911_9A_4(){
  return view ('personal_administrativo\planeacion\reportes\reporte911_9A.reporte911_9A_4');
}

public function reporte911_9A_5(){
  return view ('personal_administrativo\planeacion\reportes\reporte911_9A.reporte911_9A_5');
}

public function reporte911_9A_6(){
  return view ('personal_administrativo\planeacion\reportes\reporte911_9A.reporte911_9A_6');
}
/*Servicio Social y Practicas Profesionales*/
public function info_practicasp(){
  return view ('personal_administrativo\planeacion\info_departamentos.info_practicasp');
}
public function info_serviciosocial(){
  return view ('personal_administrativo\planeacion\info_departamentos.info_serviciosocial');
}



}
