<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
       if($usuario_actual->tipo_usuario=='estudiante'){
         if($usuario_actual->bandera=='1'){
      return view('estudiante.home_estudiante');
      }
      else {
         $this->guard()->logout();

         $request->session()->invalidate();

      return $this->loggedOut($request) ?: redirect('login')->with('error', 'Usuario Incorrecto, ¡Favor de Verificar Datos!');
      }
       }
      elseif ($usuario_actual->tipo_usuario=='5'){
         if($usuario_actual->bandera=='1'){
         return view('personal_administrativo\admin_sistema.home_admin');
       }
       else {
          $this->guard()->logout();

          $request->session()->invalidate();

       return $this->loggedOut($request) ?: redirect('perfiles');
       }
        }
        elseif ($usuario_actual->tipo_usuario=='1'){
           if($usuario_actual->bandera=='1'){
           return view('personal_administrativo\formacion_integral.home_formacion');
         }
         else {
            $this->guard()->logout();

            $request->session()->invalidate();

         return $this->loggedOut($request) ?: redirect('perfiles');
         }
        }

      }


      public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Su contraseña actual no coincide con la contraseña que proporcionó. Inténtalo de nuevo.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","La nueva contraseña no puede ser la misma que su contraseña actual. Por favor, elija una contraseña diferente.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        if($user->save()){
          return redirect()->route('cuenta')->with('success','Datos actualizados correctamente');
        }

    }
    }
