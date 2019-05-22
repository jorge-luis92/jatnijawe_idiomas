<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserSystemController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
      /*$users = DB::table('users')->where([
    ['tipo_usuario', '=', 'conferencista'],
    ['bandera', '=', '1'],
    ])
    ->orWhere('tipo_usuario','=', 'tallerista')
    ->get();*/
        //$users = DB::table('users')->where('tipo_usuario', '=', 'tallerista')->Paginate(2);
        $users = DB::table('users')->where([
      ['tipo_usuario', '=', 'tallerista'],
      ['bandera', '=', '1'],
      ])->paginate(2);

        return view('personal_administrativo\formacion_integral\gestion_tallerista.read', ['users' => $users]);

    }

    public function form_nuevo_usuario()
	{
		return view('personal_administrativo\formacion_integral\gestion_tallerista.create');
	}

    public function agregar_nuevo_usuario(Request $request)
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
      return redirect()->route('registros_talleristas')->with('success','Usuario Creado Correctamente');
    }

	}
}
