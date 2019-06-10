<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Extracurricular;
use App\Estudiante;
use App\Persona;
use App\Administrativo;
use App\Nivel;
use App\Departamento;
use App\Dpto_Administrativo;
use App\Telefono;
use App\Tutor;
use Illuminate\Support\Facades\DB;
use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;



class FormacionIntegralController extends Controller
{


  protected function getRegister()
    {
        return view('personal_administrativo\formacion_integral\gestion_tallerista.create');
    }

  protected function postRegister(Request $request)

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
  $user->id_user=$data['id'];
  $user->name=$data['name'];
  $user->email=$data['email'];
  $user->password=Hash::make($data['password']);
  $user->tipo_usuario=$data['tipo_usuario'];

  if($user->save()){
    return redirect()->route('registros_talleristas')->with('success','Usuario Registrado Correctamente');
  }

}

  public function inicio_formacion()
  {
    return view('personal_administrativo\formacion_integral\home_formacion');
    }

    public function cuenta_formacion(){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='1'){
         return redirect()->back();
        }
    return view('personal_administrativo\formacion_integral.configuracion_cuenta');
    }
    public function read(){
    return view('personal_administrativo\formacion_integral\gestion_tallerista.read');
    }

    public function busqueda_estudiante_fi()
    {
    return view('personal_administrativo\formacion_integral.busqueda_estudiante_fi');
    }

    public function registrar_tutor()
    {
    return view('personal_administrativo\formacion_integral\gestion_tutores.registrar_tutor');
    }

    public function busqueda_tutor()
    {
      $result = DB::table('personas')
      ->select('personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'tutores.bandera', 'tutores.procedencia_interna', 'nivel.rfc', 'nivel.grado_estudios')
      ->join('tutores', 'personas.id_persona', '=', 'tutores.id_persona')
      ->join('nivel', 'tutores.id_nivel', '=', 'nivel.id_nivel')
      ->join('users', 'personas.id_persona', '=', 'users.id_persona')
      ->where('tutores.bandera', '=', '1')
      ->orderBy('tutores.created_at', 'asc')
      ->simplePaginate(7);
    return view('personal_administrativo\formacion_integral\gestion_tutores.busqueda_tutor')->with('re', $result);
    }

    public function tutor_activo()
    {
    return view('personal_administrativo\formacion_integral\gestion_tutores.tutor_activo');
    }

    public function tutor_inactivo()
    {
    return view('personal_administrativo\formacion_integral\gestion_tutores.tutor_inactivo');
    }

    public function registro_extracurricular()
    {
    return view('personal_administrativo\formacion_integral\gestion_talleres.registro_extracurricular');
    }

    public function registro_taller()
    {
      $result = DB::table('personas')
      ->select('personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'tutores.id_tutor')
      ->join('tutores', 'personas.id_persona', '=', 'tutores.id_persona')
      ->get();
    return view('personal_administrativo\formacion_integral\gestion_talleres.registro_taller')->with('taller', $result);
    }

    public function registro_conferencia()
    {
      $result = DB::table('personas')
      ->select('personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'tutores.id_tutor')
      ->join('tutores', 'personas.id_persona', '=', 'tutores.id_persona')
      ->get();
    return view('personal_administrativo\formacion_integral\gestion_talleres.registro_conferencia')->with('taller', $result);
    }

    public function actividades_registradas()
    {
    return view('personal_administrativo\formacion_integral\gestion_talleres.actividades_registradas');
    }

    public function solicitudes()
    {
    return view('personal_administrativo\formacion_integral\gestion_talleres.solicitudes');
    }

    public function asignar_taller()
    {
    return view('personal_administrativo\formacion_integral\gestion_talleres.asignar_taller');
    }

    public function actividades_asignadas()
    {
    return view('personal_administrativo\formacion_integral\gestion_talleres.actividades_asignadas');
    }

    public function registrar_tallerista()
    {
    return view('personal_administrativo\formacion_integral\gestion_tallerista.registro_tallerista');
    }

    public function tallerista_activo()
    {
      $result = DB::table('personas')
      ->select('personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'nivel.rfc')
      ->join('tutores', 'personas.id_persona', '=', 'tutores.id_persona')
      ->join('nivel', 'tutores.id_nivel', '=', 'nivel.id_nivel')
      ->join('users', 'personas.id_persona', '=', 'users.id_persona')
      ->where('users.bandera', '=', '1')
      ->orderBy('users.created_at', 'asc')
      ->simplePaginate(7);
    return view('personal_administrativo\formacion_integral\gestion_tallerista.tallerista_activo')->with('re', $result);
    }

    public function tallerista_inactivo()
    {
      $result = DB::table('personas')
      ->select('users.bandera', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'nivel.rfc')
      ->join('tutores', 'personas.id_persona', '=', 'tutores.id_persona')
      ->join('nivel', 'tutores.id_nivel', '=', 'nivel.id_nivel')
      ->join('users', 'personas.id_persona', '=', 'users.id_persona')
      ->where('users.bandera', '=', '0')
      ->orderBy('users.created_at', 'asc')
      ->simplePaginate(7);
    return view('personal_administrativo\formacion_integral\gestion_tallerista.tallerista_inactivo')->with('re', $result);
    }


    public function busqueda_fi(Request $request){
      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='1'){
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
          return view ( 'personal_administrativo\formacion_integral.busqueda_estudiante_fi' )->withDetails ($user )->withQuery ($q);
    }
  else{
    return redirect()->route('busqueda_estudiante_fi')->with('error','¡Sin resultados!');
  }}  else{
        return redirect()->route('busqueda_estudiante_fi')->with('error','¡Sin resultados!');
    }}

    public function registrar_tutor_fi(Request $request){
      $usuario_actuales=\Auth::user();
       if($usuario_actuales->tipo_usuario!='1'){
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
      $persona->id_persona=$data['curp'];
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
        $administrativo->id_persona=$data['curp'];
        $administrativo->save();

        if($administrativo->save()){
          $bus_adm = DB::table('administrativos')
          ->select('administrativos.id_administrativo')
          ->join('personas', 'personas.id_persona', '=', 'administrativos.id_persona')
          ->where('personas.id_persona',$data['curp'])
          ->take(1)
          ->first();
           $bus_adm = $bus_adm->id_administrativo;
              $nivel = new Nivel();
              $nivel ->id_administrativo= $bus_adm;
              $nivel ->grado_estudios=$data['grado_estudios'];
              $nivel ->rfc=$data['curp'];
              $nivel ->save();
           if($nivel->save()){
             $bus_nivel = DB::table('nivel')
             ->select('nivel.id_nivel')
             ->join('administrativos', 'nivel.id_administrativo', '=', 'administrativos.id_administrativo')
             ->where('administrativos.id_administrativo',$bus_adm)
             ->take(1)
             ->first();
                $bus_nivel = $bus_nivel->id_nivel;
               $tutor = new Tutor();
                $tutor ->procedencia_interna= $data['procedencia_interna'];
                $tutor ->procedencia_externa= $data['procedencia_externa'];
                $tutor ->id_persona= $data['curp'];
                $tutor ->id_nivel= $bus_nivel;
            if($tutor->save()){
              $tel = new Telefono();
              $tel->tipo='celular';
              $tel->numero=$data['tel_celular'];
              $tel->id_persona=$data['curp'];
                if($tel->save()){
          $user=new User;
          $user->id_user=$data['curp'];
          $user->username=$data['nombre'];
          $user->email=$data['email'];
          $user->password = Hash::make($data['apellido_paterno']);
          $user->tipo_usuario='tallerista';
          $user->id_persona=$data['curp'];
          $user->bandera='0';
          $user->save();
            if($user->save()){
          return redirect()->route('inicio_formacion')->with('success','¡Datos registrados correctamente!');
        }}}}}}
    else{
     return redirect()->route('inicio_formacion')->with('error','error en la creacion');
    }
    }
}
