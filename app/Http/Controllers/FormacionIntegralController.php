<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Extracurricular;
use Illuminate\Support\Facades\DB;
use Storage;
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
  $user->id_user=$data['id'];
  $user->name=$data['name'];
  $user->email=$data['email'];
  $user->password=Hash::make($data['password']);
  $user->tipo_usuario=$data['tipo_usuario'];

  if($user->save()){
    return redirect()->route('registros_talleristas')->with('success','Usuario Registrado Correctamente');
  }

}

  public function inicio_formacion()
  {
    return view('personal_administrativo\formacion_integral\home_formacion');
    }

    public function cuenta_formacion(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='1'){
         return redirect()->back();
        }
    return view('personal_administrativo\formacion_integral.configuracion_cuenta');
    }
    public function read(){
    return view('personal_administrativo\formacion_integral\gestion_tallerista.read');
    }

    public function busqueda_estudiante_fi()
    {
    return view('personal_administrativo\formacion_integral.busqueda_estudiante_fi');
    }

    public function registrar_tutor()
    {
    return view('personal_administrativo\formacion_integral\gestion_tutores.registrar_tutor');
    }

    public function busqueda_tutor()
    {
    return view('personal_administrativo\formacion_integral\gestion_tutores.busqueda_tutor');
    }

    public function tutor_activo()
    {
    return view('personal_administrativo\formacion_integral\gestion_tutores.tutor_activo');
    }

    public function tutor_inactivo()
    {
    return view('personal_administrativo\formacion_integral\gestion_tutores.tutor_inactivo');
    }

    public function registro_extracurricular()
    {
    return view('personal_administrativo\formacion_integral\gestion_talleres.registro_extracurricular');
    }

    public function registro_taller()
    {
    return view('personal_administrativo\formacion_integral\gestion_talleres.registro_taller');
    }

    public function registro_conferencia()
    {
    return view('personal_administrativo\formacion_integral\gestion_talleres.registro_conferencia');
    }

    public function actividades_registradas()
    {
    return view('personal_administrativo\formacion_integral\gestion_talleres.actividades_registradas');
    }

    public function solicitudes()
    {
    return view('personal_administrativo\formacion_integral\gestion_talleres.solicitudes');
    }

    public function asignar_taller()
    {
    return view('personal_administrativo\formacion_integral\gestion_talleres.asignar_taller');
    }

    public function actividades_asignadas()
    {
    return view('personal_administrativo\formacion_integral\gestion_talleres.actividades_asignadas');
    }
}
