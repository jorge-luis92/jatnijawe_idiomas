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

   protected function redirectTo()
   {
   return 'admin_sistema';
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



 public function index( Request $request)
  {
    $usuario_actual=\Auth::user();
     if($usuario_actual->tipo_usuario!='admin'){
       $this->guard()->logout();

      $request->session()->invalidate();

       return $this->loggedOut($request) ?: redirect('perfiles');
     }
    else{
          return view('personal_administrativo.admin_sistema');
    }
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
      return view('personal_administrativo\formacion_integral.busqueda');
    }
}
