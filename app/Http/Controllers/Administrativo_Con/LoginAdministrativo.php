<?php
namespace App\Http\Controllers\Administrativo_Con;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
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

class LoginAdministrativo extends Controller
{
  use AuthenticatesUsers;

  /**
   * Where to redirect users after login.
   *
   * @var string
   */
  //protected $redirectTo = '/home';

  /**
   * Create a new controller instance.
   *
   * @return void
   */
   public function __construct(Guard $auth)
     {
         $this->auth = $auth;
         //$this->middleware('guest', ['except' => 'getLogout']);

     }
     /**
      * Get a validator for an incoming registration request.
      *
      * @param  array  $data
      * @return \Illuminate\Contracts\Validation\Validator
      */

/*      protected function redirectTo()
   {
      // return view ('personal_administrativo.home_admin');
   }
*/
 //login

        protected function getLogin()
     {
         return view("personal_administrativo.login_personal");
     }

     public function postLogin(Request $request)
        {
         $this->validate($request, [
             'username' => 'required',
             'password' => 'required',
         ]);

         $credentials = $request->only('username', 'password');
         if ($this->auth->attempt($credentials, $request->has('remember')))
   {;
    if(Auth::user()->tipo_usuario == '5'){
    //  return view('personal_administrativo\admin_sistema.home_admin');
        return redirect()->route('home_admin')->with('sucess', 'Inicio de sesión correctamente');
    }
    if (Auth::user()->tipo_usuario == '1') {
      //  return view('personal_administrativo\formacion_integral.home_formacion');
          return redirect()->route('inicio_formacion')->with('sucess', 'Inicio de sesión correctamente');
    }
    if (Auth::user()->tipo_usuario == '2') {
      //  planeacion;
          return redirect()->route('home_planeacion')->with('sucess', 'Inicio de sesión correctamente');
    }
    if (Auth::user()->tipo_usuario == '3') {
      //  return view('personal_administrativo\formacion_integral.home_formacion');
          return redirect()->route('home_servicios')->with('sucess', 'Inicio de sesión correctamente');
    }
    elseif (Auth::user()->tipo_usuario == '4') {
      return redirect()->route('home_auxiliar_adm')->with('sucess', 'Inicio de sesión correctamente');
    }

   }

   return redirect()->route('admin')->with('error','Usuario invalido: !Verifique sus datos!');
        /* return view("personal_administrativo.login_personal");*/
    //   }
  }


  public function getLogout(Request $request)
{
    //$this->guard()->logout();
Auth::logout();
    //$request->session()->invalidate();
   return redirect()->route('perfiles')->with('sucess','Desconección Correcta!');
  //  return $this->loggedOut($request) ?: redirect('perfiles');
}

}
