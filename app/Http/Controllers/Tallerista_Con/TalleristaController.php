<?php

namespace App\Http\Controllers\Tallerista_Con;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TalleristaController extends Controller
{
  public function logintallerista(){
      return view('tallerista.login_tallerista');
  }
}
