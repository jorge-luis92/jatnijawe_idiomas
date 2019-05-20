<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Str;
use Illuminate\Support\MessageBag;
use Illuminate\Support\ViewErrorBag;
use Illuminate\Support\Traits\Macroable;
use Illuminate\Support\Traits\ForwardsCalls;
use Illuminate\Session\Store as SessionStore;
use Illuminate\Contracts\Support\MessageProvider;
use Symfony\Component\HttpFoundation\File\UploadedFile as SymfonyUploadedFile;
use Symfony\Component\HttpFoundation\RedirectResponse as BaseRedirectResponse;
use PDF;


class HomeController extends Controller
{
  use AuthenticatesUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /*elseif ($usuario_actual->tipo_usuario=='form_integral') {
      return view('personal_administrativo\formacion_integral.home_formacion');
    }
    elseif ($usuario_actual->tipo_usuario=='admin') {
    return view('personal_administrativo\auxiliar_administrativo.gestion_estudiante');
  }*/
    /**
     *
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function index( Request $request)
    {
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){

         $this->guard()->logout();

         $request->session()->invalidate();

         return $this->loggedOut($request) ?: redirect('perfiles');
       }
      else {
        return view('estudiante.home_estudiante');
      }


      }
}
