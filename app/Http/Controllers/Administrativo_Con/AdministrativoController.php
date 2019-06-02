<?php

namespace App\Http\Controllers\Administrativo_Con;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministrativoController extends Controller
{

  /**
   *
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
   public function __construct()
   {
       $this->middleware('guest')->except('logout');

   }

   public function username()
   {
       return 'name';
   }
   public function logout(Request $request)
   {
     $this->guard()->logout();

     $request->session()->invalidate();

     return $this->loggedOut($request) ?: redirect('perfiles');
   }

   public function admin_inicio(){
     $usuario_actual=auth()->user();
      if($usuario_actual->tipo_usuario!='admin'){
       return redirect()->back();
     }
        return view('personal_administrativo\admin_sistema.admin_sistema');
   }
    public function login_admin(){
        return view('personal_administrativo.login_personal');
    }

    public function auxiliar(){
      return view('personal_administrativo\auxiliar_administrativo.gestion_estudiante');
    }

    public function auxiliar_carga(){
      return view('personal_administrativo\auxiliar_administrativo.carga_de_datos');
    }

    public function formacion_busqueda(){
      return view('personal_administrativo\formacion_integral.home_formacion');
    }
}
