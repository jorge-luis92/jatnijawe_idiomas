<?php

namespace App\Http\Controllers;
use App\User;
use App\Estudiante;
use App\Persona;
use App\Administrativo;
use App\Nivel;
use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function home_admin(){
 $CURP = [];
      $CURP[0] = 'hola';
//$CURP[3] = $("#nombre").val().charAt(0).toUpperCase();
        return view('personal_administrativo\admin_sistema.home_admin')->with('prueba', $CURP[0]);
      }

      public function registro_estudiante(){
        return view('personal_administrativo\admin_sistema.registro_estudiante');
      }

      public function busqueda_estudiante(){
        return view('personal_administrativo\admin_sistema.busqueda_estudiante');
      }

      public function estudiante_activo(){
        return view('personal_administrativo\admin_sistema.estudiante_activo');
      }

      public function estudiante_inactivo(){
        return view('personal_administrativo\admin_sistema.estudiante_inactivo');
      }

      public function registro_coordinador(){
        $this->validate($request, [
          'nombre' => ['required', 'string', 'max:25'],
          'apellido_paterno' => ['required', 'string', 'max:25'],
          'curp' => ['required', 'string', 'min:18','max:18', 'unique:personas'],
          'edad' => ['required', 'string', 'max:100'],
          'genero' => ['required', 'string'],
          'matricula' => ['required', 'string', 'max:10', 'unique:estudiantes'],
          'semestre' => ['required', 'string', 'max:12',],
          'grupo' => ['required', 'string', 'max:1'],
         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $data = $request;
        $id_prueba= random_int(1, 532986) +232859 * 123 -43 +(random_int(1, 1234));
        $password= $data['curp'];
        $tipo_usuario= 'estudiante';
        $persona=new Persona;
        $persona->id_persona=$id_prueba;
        $persona->nombre=$data['nombre'];
        $persona->apellido_paterno=$data['apellido_paterno'];
        $persona->apellido_materno=$data['apellido_materno'];
        $persona->curp=$data['curp'];
        $persona->fecha_nacimiento=$data['fecha_nacimiento'];
        $persona->lugar_nacimiento=$data['lugar_nacimiento'];
        $persona->tipo_sangre=$data['tipo_sangre'];
        $persona->edad=$data['edad'];
        $persona->genero=$data['genero'];
        $persona->save();

        if($persona->save()){
          $estudiante=new Estudiante;
          $estudiante->matricula=$data['matricula'];
          $estudiante->modalidad=$data['modalidad'];
          $estudiante->fecha_ingreso=$data['fecha_ingreso'];
          $estudiante->semestre=$data['semestre'];
          $estudiante->grupo=$data['grupo'];
          $estudiante->estatus=$data['estatus'];
          $estudiante->bachillerato_origen=$data['bachillerato_origen'];
          $estudiante->id_persona=$id_prueba;
          $estudiante->save();
          if($estudiante->save()){

            $user=new User;
            $user->id_user=$data['matricula'];
            $user->username=$data['nombre'];
            $user->email=$data['email'];
            $user->password = Hash::make($password);
            $user->tipo_usuario=$tipo_usuario;
            $user->id_persona=$id_prueba;
            $user->save();
              if($user->save()){
            return redirect()->route('perfiles')->with('success','¡Datos registrados correctamente!');
          }}}
      else{
       return redirect()->route('register')->with('error','error en la creacion');
      }
      }

      public function registrar_coordinador(){
        return view('personal_administrativo\admin_sistema.registro_coordinador');
      }


      public function busqueda_coordinador(){
        return view('personal_administrativo\admin_sistema.busqueda_coordinador');
      }

      public function coordinador_activo(){
        return view('personal_administrativo\admin_sistema.coordinador_activo');
      }

      public function coordinador_inactivo(){
        return view('personal_administrativo\admin_sistema.coordinador_inactivo');
      }


}
