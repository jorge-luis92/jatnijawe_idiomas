<?php

namespace App\Http\Controllers\Tallerista_Con;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TalleristaController extends Controller
{
  public function logintallerista(){
      return view('tallerista.login_tallerista');
  }

  public function home_tallerista(){
return view('tallerista.home_tallerista');
}

public function talleres_tallerista(){
return view('tallerista.talleres_tallerista');
}

public function talleres_finalizados(){
return view('tallerista.talleres_finalizados');
}


public function grupo_tallerista(){
return view('tallerista.grupo_tallerista');
}
}
