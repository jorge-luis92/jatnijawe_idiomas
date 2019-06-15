<?php
namespace App\Http\Controllers;
use App\User;
use App\Estudiante;
use App\Persona;
use App\Administrativo;
use App\Nivel;
use App\Departamento;
use App\Dpto_Administrativo;
use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    //
    public function home_admin(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='5'){
         return redirect('register');
        }
        return view('personal_administrativo\admin_sistema.home_admin');
      }

      public function registro_estudiante(){
        $usuario_actual=\Auth::user();
         if($usuario_actual->tipo_usuario!='5'){
           return redirect('register');
          }
        return view('personal_administrativo\admin_sistema.registro_estudiante');
      }

      public function busqueda_estudiante(){
        $usuario_actual=\Auth::user();
         if($usuario_actual->tipo_usuario!='5'){
           return redirect('register');
          }
        return view('personal_administrativo\admin_sistema.busqueda_estudiante');
      }

      public function estudiante_activo(){
        $usuario_actual=\Auth::user();
         if($usuario_actual->tipo_usuario!='5'){
           return redirect('register');
          }
        $est = DB::table('estudiantes')
        ->select('estudiantes.matricula', 'estudiantes.semestre', 'users.updated_at', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'users.bandera')
        ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
        ->join('users', 'users.id_persona', '=', 'personas.id_persona')
        ->where('users.bandera', '=', '1')
         ->orderBy('users.updated_at', 'asc')
        ->simplePaginate(10);

        return view('personal_administrativo\admin_sistema.estudiante_activo')->with('estudiante', $est);
      }

      public function estudiante_inactivo(){
        $usuario_actual=\Auth::user();
         if($usuario_actual->tipo_usuario!='5'){
           return redirect('register');
          }
        $est = DB::table('estudiantes')
        ->select('estudiantes.matricula', 'estudiantes.semestre', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'users.id_user', 'users.bandera')
        ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
        ->join('users', 'users.id_persona', '=', 'personas.id_persona')
        ->where('users.bandera', '=', '0')
         ->orderBy('estudiantes.semestre', 'asc')
        ->simplePaginate(10);

        return view('personal_administrativo\admin_sistema.estudiante_inactivo')->with('estudiante', $est);
      }

      public function registro_coordinador(){
        $usuario_actual=\Auth::user();
         if($usuario_actual->tipo_usuario!='5'){
           return redirect('register');
          }
        $dep = DB::table('departamentos')
        ->select('departamentos.id_departamento', 'departamentos.departamento')
        ->get();
      return view('personal_administrativo\admin_sistema.registro_coordinador')->with('de', $dep);
    }

      public function registrar_coordinador(Request $request){
        $usuario_actuales=\Auth::user();
         if($usuario_actuales->tipo_usuario!='5'){
           return redirect('register');
          }

        $this->validate($request, [
          'nombre' => ['required', 'string', 'max:25'],
          'apellido_paterno' => ['required', 'string', 'max:25'],
          'curp' => ['required', 'string', 'min:18','max:18'],
          'edad' => ['required', 'string', 'max:100'],
          'genero' => ['required', 'string'],
         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $data = $request;
        $id_prueba= random_int(1, 532986) +232859 * 123 -43 +(random_int(1, 1234));
        $password= $data['apellido_paterno'];
        $persona=new Persona;
        $persona->id_persona=$id_prueba;
        $persona->nombre=$data['nombre'];
        $persona->apellido_paterno=$data['apellido_paterno'];
        $persona->apellido_materno=$data['apellido_materno'];
        $persona->curp=$data['curp'];
        $persona->fecha_nacimiento=$data['fecha_nacimiento'];
        $persona->edad=$data['edad'];
        $persona->genero=$data['genero'];
        $persona->save();

        if($persona->save()){
          $administrativo=new Administrativo;
          $administrativo->puesto=$data['puesto'];
          $administrativo->id_persona=$id_prueba;
          $administrativo->save();

          if($administrativo->save()){
            $bus_adm = DB::table('administrativos')
            ->select('administrativos.id_administrativo')
            ->join('personas', 'personas.id_persona', '=', 'administrativos.id_persona')
            ->where('personas.id_persona',$id_prueba)
            ->take(1)
            ->first();
             $bus_adm = $bus_adm->id_administrativo;
            $depto_admin=new Dpto_Administrativo;
            $depto_admin->id_departamento=$data['departamento'];
            $depto_admin->id_administrativo=$bus_adm;
            $depto_admin->save();

              if($depto_admin->save()){
                $nivel = new Nivel();
                $nivel ->id_administrativo= $bus_adm;
                $nivel ->grado_estudios=$data['grado_estudios'];
                $nivel ->rfc=$data['curp'];
                $nivel ->save();

              if($nivel->save()){
            $user=new User;
            $user->id_user=$id_prueba;
            $user->username=$data['username'];
            $user->email=$data['email'];
            $user->password = Hash::make($data['password']);
            $user->tipo_usuario=$data['departamento'];
            $user->id_persona=$id_prueba;
            $user->save();
              if($user->save()){
            return redirect()->route('home_admin')->with('success','¡Datos registrados correctamente!');
          }}}}}
      else{
       return redirect()->route('home_admin')->with('error','error en la creacion');
      }
      }

      public function Busqueda(Request $request){
        $usuario_actual=\Auth::user();
         if($usuario_actual->tipo_usuario!='5'){
           return redirect('register');
          }
        $est = DB::table('users')
        ->where('users.bandera', '=', '1')
        ->get();

        $q = $request->get('q');
        if($q != null){
        $user = Estudiante::where( 'estudiantes.matricula', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'estudiantes.semestre', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'estudiantes.modalidad', 'LIKE', '%' . $q . '%' )
                            ->orWhere( 'personas.nombre', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'personas.apellido_paterno', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'personas.apellido_materno', 'LIKE', '%' . $q . '%' )
                            ->orWhere ( 'users.email', 'LIKE', '%' . $q . '%' )
                            ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
                            ->join('users', 'users.id_persona', '=', 'personas.id_persona')
                            ->simplePaginate(10);
                            $est = DB::table('users')
                            ->where('users.bandera', '=', '1')
                            ->get();

    
      if ((count ($user) > 0 ) && ($est != null)){
            return view ( 'personal_administrativo\admin_sistema.busqueda_estudiante' )->withDetails ($user )->withQuery ($q);
    }
  else{
  return redirect()->route('busqueda_estudiante')->with('error','¡Sin resultados!');
  }}  else{
        return redirect()->route('busqueda_estudiante')->with('error','¡Sin resultados!');
    }

    }

      public function activar_estudiante($id_user){

        $valor=$id_user;
        DB::table('users')
            ->where('users.id_user', $valor)
            ->update(
                ['bandera' => '1'],
            );
            return redirect()->route('estudiante_activo')->with('success','¡El estudiante ha sido Activado!');

      }

      public function desactivar_estudiante($id_user){
        $valor=$id_user;
        DB::table('users')
            ->where('users.id_user', $valor)
            ->update(
                ['bandera' => '0'],
            );
            return redirect()->route('estudiante_inactivo')->with('success','¡El estudiante ha sido desactivado!');

      }
      public function busqueda_coordinador(){
        $usuario_actual=\Auth::user();
         if($usuario_actual->tipo_usuario!='5'){
           return redirect('register');
          }
        return view('personal_administrativo\admin_sistema.busqueda_coordinador');
      }

      public function coordinador_activo(){
        $usuario_actual=\Auth::user();
         if($usuario_actual->tipo_usuario!='5'){
           return redirect('register');
          }
        return view('personal_administrativo\admin_sistema.coordinador_activo');
      }

      public function coordinador_inactivo(){
        $usuario_actual=\Auth::user();
         if($usuario_actual->tipo_usuario!='5'){
           return redirect('register');
          }
        return view('personal_administrativo\admin_sistema.coordinador_inactivo');
      }


}
