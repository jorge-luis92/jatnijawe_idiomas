<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
//use Excel;

class UserSystemController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::table('users')->simplePaginate(7);
        $users = DB::table('users')->where([
      ['tipo_usuario', '=', 'tallerista'],
      ['bandera', '=', '1'],
      ])->simplePaginate(7 );

        return view('personal_administrativo\formacion_integral\gestion_tallerista.read', ['users' => $users]);

    }

    public function form_nuevo_usuario()
	{
    $usuario_actual=\Auth::user();
     if($usuario_actual->tipo_usuario!='admin'){
       return redirect()->back();
      }
		return view('personal_administrativo\formacion_integral\gestion_tallerista.create');
	}

    public function agregar_nuevo_usuario(Request $request)
	{
    $this->validate($request, [
      'id' => ['required', 'string', 'max:60', 'unique:users'],
      'name' => ['required', 'string', 'max:255', 'unique:users'],
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
      return redirect()->route('registros_talleristas')->with('success','Usuario Creado Correctamente');
    }

	}


  public function cargar_datos_usuario_estudiante(){

     return view('personal_administrativo\auxiliar_administrativo.carga_de_datos');

}

public function import()
    {
        Excel::import(new UsersImport, 'archivodatos.xlsx');

        $usuario=new User;
        $usuario->save();

        return redirect('busqueda')->with('success', 'Perfecto!');
    }


  public function cargar_datos_usuarios(Request $request)
{
     $archivo = $request->file('archivo');
     $nombre_original=$archivo->getClientOriginalName();
   $extension=$archivo->getClientOriginalExtension();
     $r1=Storage::disk('archivos')->put($nombre_original,  \File::get($archivo) );
     $ruta  =  storage_path('archivos') ."/". $nombre_original;

     if($r1){
            $ct=0;
            Excel::selectSheetsByIndex(0)->load($ruta, function($hoja) {

          $hoja->each(function($fila) {
            $usersemails=User::where("email","=",$fila->email)->first();
            if(count( $usersemails)==0){
              $usuario=new User;
              $usuario->id= $fila->id;
              $usuario->name= $fila->name;
              $usuario->email= $fila->email;
              $usuario->password= Hash::make($fila->password);
                $usuario->tipo_usuario= $fila->tipo_usuario;
              $usuario->save();
                }

          });

          });

          if($userio->save()){
            return redirect()->route('cargar_datos_usuario_estudiante')->with('success','Carga de datos exitosa');
          }


     }
     else
     {
          return redirect()->route('carga_de_datos')->with('error','Error al subir el archivo, verifique el archivo');
     }

}
}
