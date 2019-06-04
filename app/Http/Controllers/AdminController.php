<?php

namespace App\Http\Controllers;
use App\User;
use App\Estudiante;
use App\Persona;
use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function home_admin(){
      return view('personal_administrativo\admin_sistema.home_admin');
    }

    public function registro_estudiante(){
      return view('personal_administrativo\admin_sistema.registro_estudiante');
    }

    public function usuario_estudiante(){
      return view('personal_administrativo\admin_sistema.usuario_estudiante');
    }

    public function estudiante_activo(){
      return view('personal_administrativo\admin_sistema.estudiante_activo');
    }

    public function estudiante_inactivo(){
      return view('personal_administrativo\admin_sistema.estudiante_inactivo');
    }

    public function registro_cordinador(){
      return view('personal_administrativo\admin_sistema.registro_cordinador');
    }

    public function usuario_cordinador(){
      return view('personal_administrativo\admin_sistema.usuario_cordinador');
    }

    public function cordinador_activo(){
      return view('personal_administrativo\admin_sistema.cordinador_activo');
    }

    public function cordinador_inactivo(){
      return view('personal_administrativo\admin_sistema.cordinador_inactivo');
    }

    public function registro_tallerista(){
      return view('personal_administrativo\admin_sistema.registro_tallerista');
    }

    public function usuario_tallerista(){
      return view('personal_administrativo\admin_sistema.usuario_tallerista');
    }

    public function tallerista_activo(){
      return view('personal_administrativo\admin_sistema.tallerista_activo');
    }

    public function tallerista_inactivo(){
      return view('personal_administrativo\admin_sistema.tallerista_inactivo');
    }
}
