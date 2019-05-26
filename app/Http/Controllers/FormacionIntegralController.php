<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Extracurricular;
use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FormacionIntegralController extends Controller
{


  protected function getRegister()
    {
        return view('personal_administrativo\formacion_integral\gestion_tallerista.create');
    }

  protected function postRegister(Request $request)

 {
  $this->validate($request, [
    'id' => ['required', 'string', 'max:60', 'unique:users'],
    'name' => ['required', 'string', 'max:255'],
    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    'password' => ['required', 'string', 'min:8', 'confirmed'],
    'tipo_usuario' => ['required', 'string', 'max:255'],
  ]);


  $data = $request;


  $user=new User;
  $user->id=$data['id'];
  $user->name=$data['name'];
  $user->email=$data['email'];
  $user->password=Hash::make($data['password']);
  $user->tipo_usuario=$data['tipo_usuario'];

  if($user->save()){
    return redirect()->route('registros_talleristas')->with('success','Usuario Registrado Correctamente');
  }

}
  public function read(){
    return view('personal_administrativo\formacion_integral\gestion_tallerista.read');
  }



}
