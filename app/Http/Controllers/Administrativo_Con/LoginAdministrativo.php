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
         $this->middleware('guest', ['except' => 'getLogout']);

     }

     /**
      * Get a validator for an incoming registration request.
      *
      * @param  array  $data
      * @return \Illuminate\Contracts\Validation\Validator
      */



 //login

        protected function getLogin()
     {
         return view("personal_administrativo.login_personal");
     }

     public function postLogin(Request $request)
        {


         $this->validate($request, [
             'name' => 'required',
             'password' => 'required',
         ]);

         $credentials = $request->only('name', 'password');

         if ($this->auth->attempt($credentials, $request->has('remember')))
         {
             return view("personal_administrativo.admin_sistema");
         }
else{


         return view("personal_administrativo.login_personal");

       }
     }

  public function username()
  {

      return 'name';
  }
  public function getLogout(Request $request)
{
    $this->guard()->logout();

    $request->session()->invalidate();

    return $this->loggedOut($request) ?: redirect('perfiles');
}

}
