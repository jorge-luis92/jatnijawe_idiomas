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
use Illuminate\Support\Facades\Validator;
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
      return view('estudiante.home_estudiante')->with('sucess', 'Inicio de sesión correctamente');
  //  return redirect()->route('home_estudiante')->with('sucess', 'Inicio de sesión correctamente');
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

      //  $id=$request->input('id_usuario_foto');
		$archivo = $request->file('foto');
        $input  = array('image' => $archivo) ;
        $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif|max:900');
        $validacion = Validator::make($input,  $reglas);
        if ($validacion->fails())
        {
        //  return view("mensajes.msj_rechazado")->with("msj","El archivo no es una imagen valida");
            return redirect()->route('cuenta')->with('error','El archivo no es una imagen valida');
        }
        else
        {
	        $nombre_original=$archivo->getClientOriginalName();
			$extension=$archivo->getClientOriginalExtension();
			$nuevo_nombre="userimagen-".$id.".".$extension;
		    $r1=Storage::disk('fotografias')->put($nuevo_nombre,  \File::get($archivo) );
		    $rutadelaimagen="../storage/fotografias/".$nuevo_nombre;
		    //if ($r1){
			   // $usuario=User::find($id);
            $usuario = Auth::user();
			    $usuario->imagenurl=$rutadelaimagen;
			    $r2=$usuario->save();
		       /* return view("mensajes.msj_correcto")->with("msj","Imagen agregada correctamente");
		    }
		    else
		    {
		    	return view("mensajes.msj_rechazado")->with("msj","no se cargo la imagen");
		    }

      }*/}

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
          return redirect()->route('cuenta')->with('success','Contraseña Actualizada Correctamente');
        }

    }


    public function foto_perfil(Request $request){

    //  $id=$request->input('id_usuario_foto');
  $archivo = $request->file('foto');
      $input  = array('image' => $archivo) ;
      $reglas = array('image' => 'required|image|mimes:jpeg,jpg,bmp,png,gif|max:900');
      $validacion = Validator::make($input,  $reglas);
      if ($validacion->fails())
      {
      //  return view("mensajes.msj_rechazado")->with("msj","El archivo no es una imagen valida");
          return redirect()->route('foto_perfil')->with('error','El archivo no es una imagen valida');
      }
      else
      {
        $nombre_original=$archivo->getClientOriginalName();
    $extension=$archivo->getClientOriginalExtension();
    $nuevo_nombre="userimagen-".$id.".".$extension;
      $r1=Storage::disk('fotografias')->put($nuevo_nombre,  \File::get($archivo) );
      $rutadelaimagen="../storage/fotografias/".$nuevo_nombre;
    if ($r1){
       // $usuario=User::find($id);
          $usuario = Auth::user();
        $usuario->imagenurl=$rutadelaimagen;
        $r2=$usuario->save();
          return redirect()->route('foto_perfil')->with('success','Foto de Perfil Actualizada Correctamente');
         // return view("mensajes.msj_correcto")->with("msj","Imagen agregada correctamente");

      }
      else
      {
          return redirect()->route('foto_perfil')->with('error','No se pudo Cargar la imagen, Intente con Otra');
      }
    }
  }

  }
