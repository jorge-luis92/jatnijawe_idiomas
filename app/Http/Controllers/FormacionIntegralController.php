<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Extracurricular;
use App\Detalle_extracurricular;
use App\Estudiante;
use App\Persona;
use App\Administrativo;
use App\Nivel;
use App\Departamento;
use App\Dpto_Administrativo;
use App\Telefono;
use App\Tutor;
use App\SolicitudTaller;
use Illuminate\Support\Facades\DB;
use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use PDF;
use Dompdf\Dompdf;



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
    $usuario_actual=\Auth::user();
     if($usuario_actual->tipo_usuario!='1'){
       return redirect()->back();
      }
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
      ->select('personas.nombre', 'personas.edad', 'personas.apellido_paterno', 'personas.apellido_materno', 'tutores.bandera',
      'tutores.procedencia_interna', 'tutores.procedencia_externa','nivel.grado_estudios', 'telefonos.numero')
      ->join('tutores', 'personas.id_persona', '=', 'tutores.id_persona')
      ->join('nivel', 'tutores.id_nivel', '=', 'nivel.id_nivel')
      ->join('telefonos', 'telefonos.id_persona', '=', 'personas.id_persona')
      ->where([['tutores.bandera', '=', '1'], ['telefonos.tipo', '=', 'celular'],])
      //->orderBy('personas.apellido_paterno', 'asc')
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
      ->orderBy('personas.nombre', 'asc')
      ->get();
    return view('personal_administrativo\formacion_integral\gestion_talleres.registro_taller')->with('taller', $result);
    }

    public function registrar_taller(Request $request)
    {
      $this->validate($request, [
        'nombre_ec' => ['required', 'string', 'max:100'],
        'creditos' => ['required', 'string', 'max:100'],
        'area' => ['required', 'string', 'max:25'],
        'modalidad' => ['required', 'string', 'max:30'],
        'cupo' => ['required', 'string', 'max:200'],
        'lugar' => ['required', 'string', 'max:100'],
      ]);

      $data = $request;
      DB::table('extracurriculares')
          ->Insert(
              ['nombre_ec' => $data['nombre_ec'], 'tipo' => 'Taller', 'creditos' => $data['creditos'], 'area'=> $data['area'],
               'modalidad'=> $data['modalidad'],  'cupo'=> $data['cupo'], 'lugar'=> $data['lugar'], 'fecha_inicio'=> $data['fecha_inicio'],
               'fecha_fin'=> $data['fecha_fin'],  'hora_inicio'=> $data['hora_inicio'],  'hora_fin'=> $data['hora_fin'],
               'dias_sem'=> $data['dias_sem'],  'materiales'=> $data['materiales'],  'tutor'=> $data['tutor']],
          );
      return redirect()->route('actividades_registradas')->with('sucess','Taller Registrado Correctamente');
    }


    public function registrar_conferencia(Request $request)
    {
      $this->validate($request, [
        'nombre_ec' => ['required', 'string', 'max:100'],
        'lugar' => ['required', 'string', 'max:100'],
        'creditos' => ['required', 'string', 'max:100'],
        'area' => ['required', 'string', 'max:25'],
        'modalidad' => ['required', 'string', 'max:30'],
        'cupo' => ['required', 'string', 'max:200'],
        'lugar' => ['required', 'string', 'max:100'],
      ]);

      $data = $request;
      DB::table('extracurriculares')
          ->Insert(
              ['nombre_ec' => $data['nombre_ec'], 'tipo' => 'Conferencia', 'creditos' => $data['creditos'], 'area'=> $data['area'],
               'modalidad'=> $data['modalidad'],  'cupo'=> $data['cupo'], 'lugar'=> $data['lugar'], 'fecha_inicio'=> $data['fecha_inicio'],
               'hora_inicio'=> $data['hora_inicio'],   'tutor'=> $data['tutor']],
          );
      return redirect()->route('actividades_registradas')->with('sucess','Conferencia Registrada Correctamente');
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
      $result = DB::table('extracurriculares')
      ->select('extracurriculares.id_extracurricular', 'extracurriculares.dias_sem', 'extracurriculares.nombre_ec', 'extracurriculares.tipo',
      'extracurriculares.creditos', 'extracurriculares.area', 'extracurriculares.modalidad', 'extracurriculares.fecha_inicio',
      'extracurriculares.fecha_fin', 'extracurriculares.hora_inicio', 'extracurriculares.hora_fin', 'tutores.id_tutor',
      'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
      ->join('tutores', 'extracurriculares.tutor', '=', 'tutores.id_tutor')
      ->join('personas', 'personas.id_persona', '=', 'tutores.id_persona')
      ->where('extracurriculares.bandera', '=', '1')
      //->where([['extracurriculares.control_cupo', '>', '0'], ['extracurriculares.control_cupo', '=', '1'],])
      ->orderBy('personas.nombre', 'asc')
      ->simplePaginate(10);
    return view('personal_administrativo\formacion_integral\gestion_talleres.actividades_registradas')->with('dato', $result);
    }

    public function solicitudes()
    {
        $result = DB::table('solicitud_talleres')
      ->select('solicitud_talleres.num_solicitud', 'solicitud_talleres.fecha_solicitud', 'solicitud_talleres.nombre_taller', 'solicitud_talleres.descripcion',
      'solicitud_talleres.objetivos', 'solicitud_talleres.justificacion', 'solicitud_talleres.creditos',
      'solicitud_talleres.proyecto_final', 'solicitud_talleres.cupo', 'solicitud_talleres.matricula', 'solicitud_talleres.departamento',
      'solicitud_talleres.estado', 'estudiantes.matricula', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
      ->join('estudiantes', 'solicitud_talleres.matricula', '=', 'estudiantes.matricula')
      ->join('personas', 'estudiantes.id_persona', '=', 'personas.id_persona')
      ->where('solicitud_talleres.estado', '=', 'pendiente')
      ->orderBy('solicitud_talleres.matricula', 'asc')
      ->get();
    return view('personal_administrativo\formacion_integral\gestion_talleres.solicitudes')->with('data', $result);
    }

    public function asignar_taller()
    {
    return view('personal_administrativo\formacion_integral\gestion_talleres.asignar_taller');
    }

    public function actividades_asignadas()
    {
    return view('personal_administrativo\formacion_integral\gestion_talleres.actividades_asignadas');
    }

    public function registro_tallerista()
    {
      $result = DB::table('personas')
      ->select('personas.id_persona', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'tutores.id_tutor')
      ->join('tutores', 'personas.id_persona', '=', 'tutores.id_persona')
      ->orderBy('personas.nombre', 'asc')
      ->get();
    return view('personal_administrativo\formacion_integral\gestion_tallerista.registro_tallerista')->with('taller', $result);
    }

    public function registrar_talleristas(Request $request)
    {
      $this->validate($request, [
        'id_persona' => ['required', 'string', 'max:60', 'unique:users'],
        'username' => ['required', 'string', 'max:25', 'unique:users'],
        'password' => ['required', 'string', 'max:25'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      ]);

      $data = $request;

      $user=new User;
      $user->id_user=$data['id_persona'];
      $user->username=$data['username'];
      $user->email=$data['email'];
      $user->password = Hash::make($data['password']);
      $user->tipo_usuario='tallerista';
      $user->id_persona=$data['id_persona'];
      $user->save();
      if($user->save()){
    return redirect()->route('tallerista_activo')->with('success','¡Datos registrados correctamente!');
  }
else{
return redirect()->route('registro_tallerista')->with('error','error en la creacion');
}
    }

    public function tallerista_activo()
    {
      $result = DB::table('personas')
      ->select('users.id_user', 'users.username', 'users.email',  'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'nivel.rfc')
      ->join('tutores', 'personas.id_persona', '=', 'tutores.id_persona')
      ->join('nivel', 'tutores.id_nivel', '=', 'nivel.id_nivel')
      ->join('users', 'personas.id_persona', '=', 'users.id_persona')
      //->where(['users.bandera', '=', '1'])
      ->where([['users.bandera','=', '1'], ['users.tipo_usuario', '=', 'tallerista'],])
      ->orderBy('personas.nombre', 'asc')
      ->simplePaginate(7);
    return view('personal_administrativo\formacion_integral\gestion_tallerista.tallerista_activo')->with('re', $result);
    }

    public function tallerista_inactivo()
    {
      $result = DB::table('personas')
      ->select('users.id_user', 'users.bandera', 'users.username', 'users.email', 'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'nivel.rfc')
      ->join('tutores', 'personas.id_persona', '=', 'tutores.id_persona')
      ->join('nivel', 'tutores.id_nivel', '=', 'nivel.id_nivel')
      ->join('users', 'personas.id_persona', '=', 'users.id_persona')
      //->where('users.bandera', '=', '0')
      ->where([['users.bandera','=', '0'], ['users.tipo_usuario', '=', 'tallerista'],])
      ->orderBy('personas.nombre', 'asc')
      ->simplePaginate(7);
    return view('personal_administrativo\formacion_integral\gestion_tallerista.tallerista_inactivo')->with('re', $result);
    }

    public function activar_tallerista($id_user){

      $valor=$id_user;
      DB::table('users')
          ->where('users.id_user', $valor)
          ->update(
              ['bandera' => '1'],
          );
          return redirect()->route('tallerista_activo')->with('success','¡El Usuario ha sido Activado!');

    }

    public function desactivar_tallerista($id_user){
      $valor=$id_user;
      DB::table('users')
          ->where('users.id_user', $valor)
          ->update(
              ['bandera' => '0'],
          );
          return redirect()->route('tallerista_inactivo')->with('success','¡El Usuario ha sido desactivado!');

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
    }
  }

    public function registrar_tutor_fi(Request $request){
      $usuario_actuales=\Auth::user();
       if($usuario_actuales->tipo_usuario!='1'){
         return redirect('register');
        }

      $this->validate($request, [
        'nombre' => ['required', 'string', 'max:25'],
    //    'apellido_paterno' => ['required', 'string', 'max:25'],
      //  'curp' => ['required', 'string', 'min:18','max:18'],
      //  'edad' => ['required', 'string', 'max:100'],
      //  'genero' => ['required', 'string'],
//       'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
]);

      $data = $request;
      $id_prueba= random_int(1, 532986) +232859 * 123 -43 +(random_int(1, 1234));
      $password= $data['apellido_paterno'];
      $persona=new Persona;
    //  $persona->id_persona=$data['curp'];
     $persona->id_persona=$id_prueba;
      $persona->nombre=$data['nombre'];
      $persona->apellido_paterno=$data['apellido_paterno'];
      $persona->apellido_materno=$data['apellido_materno'];
    //  $persona->curp=$data['curp'];
     $persona->curp=$id_prueba;
      $persona->fecha_nacimiento=$data['fecha_nacimiento'];
      $persona->edad=$data['edad'];
      $persona->genero=$data['genero'];
      $persona->save();

      if($persona->save()){
        $administrativo=new Administrativo;
      //  $administrativo->id_persona=$data['curp'];
       $administrativo->id_persona=$id_prueba;
        $administrativo->save();

        if($administrativo->save()){
          $bus_adm = DB::table('administrativos')
          ->select('administrativos.id_administrativo')
          ->join('personas', 'personas.id_persona', '=', 'administrativos.id_persona')
          //->where('personas.id_persona',$data['curp'])
          ->where('personas.id_persona',$id_prueba)
          ->take(1)
          ->first();
           $bus_adm = $bus_adm->id_administrativo;
              $nivel = new Nivel();
              $nivel ->id_administrativo= $bus_adm;
              $nivel ->grado_estudios=$data['grado_estudios'];
            //  $nivel ->rfc=$data['curp'];
            $nivel ->rfc=$id_prueba;
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
              //  $tutor ->id_persona= $data['curp'];
              $tutor ->id_persona= $id_prueba;
                $tutor ->id_nivel= $bus_nivel;
            if($tutor->save()){
              $tel = new Telefono();
              $tel->tipo='celular';
              $tel->numero=$data['tel_celular'];
            //  $tel->id_persona=$data['curp'];
             $tel->id_persona=$id_prueba;
                if($tel->save()){
        /*  $user=new User;
          $user->id_user=$data['curp'];
          $user->username=$data['nombre'];
          $user->email=$data['email'];
          $user->password = Hash::make($data['apellido_paterno']);
          $user->tipo_usuario='tallerista';
          $user->id_persona=$data['curp'];
          $user->bandera='0';
          $user->save();
            if($user->save()){*/
          return redirect()->route('inicio_formacion')->with('success','¡Datos registrados correctamente!');
        }}}}}
      //}
    else{
     return redirect()->route('inicio_formacion')->with('error','error en la creacion');
    }
    }

    protected function anteriores(){
      $result = DB::table('personas')
      ->select('personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno', 'tutores.id_tutor')
      ->join('tutores', 'personas.id_persona', '=', 'tutores.id_persona')
      ->where('personas.nombre', '=', 'FACULTAD DE IDIOMAS')
      ->get();
      return view('personal_administrativo\formacion_integral.registro_estudiantes')->with('taller', $result);
    }

    protected function ver_avance($matricula){

      $id=$matricula;
      $result = DB::table('detalle_extracurriculares')
      ->select('detalle_extracurriculares.actividad', 'detalle_extracurriculares.estado','extracurriculares.id_extracurricular',  'extracurriculares.dias_sem', 'extracurriculares.nombre_ec', 'extracurriculares.tipo',
      'extracurriculares.creditos', 'extracurriculares.area', 'extracurriculares.modalidad', 'extracurriculares.fecha_inicio',
      'extracurriculares.fecha_fin', 'extracurriculares.hora_inicio', 'extracurriculares.hora_fin', 'tutores.id_tutor',
      'personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
      ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
      ->join('tutores', 'extracurriculares.tutor', '=', 'tutores.id_tutor')
      ->join('personas', 'personas.id_persona', '=', 'tutores.id_persona')
      ->where([['detalle_extracurriculares.matricula','=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'],])
      ->orderBy('extracurriculares.nombre_ec', 'asc')
      ->simplePaginate(10);

      $academicas = DB::table('detalle_extracurriculares')
       ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
       ->where([['detalle_extracurriculares.matricula', '=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'], ['extracurriculares.area', '=', 'ACADEMICA'],])
        ->sum('detalle_extracurriculares.creditos');
      $culturales = DB::table('detalle_extracurriculares')
       ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
       ->where([['detalle_extracurriculares.matricula', '=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'], ['extracurriculares.area', '=', 'CULTURAL'],])
       ->sum('detalle_extracurriculares.creditos');
      $deportivas = DB::table('detalle_extracurriculares')
      ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
      ->where([['detalle_extracurriculares.matricula', '=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'], ['extracurriculares.area', '=', 'DEPORTIVA'],])
      ->sum('detalle_extracurriculares.creditos');
      $sumas = $academicas + $culturales + $deportivas;

    return  view ('personal_administrativo\formacion_integral.avance_estudiante')->with('dato', $result)
    ->with('aca',$academicas)
    ->with('cul',$culturales)
    ->with('dep',$deportivas)
    ->with('suma',$sumas)
    ->with('mat',$id);
    }

protected function acreditar_estudiantes($actividad, $matricula){
$act=$actividad;
$mat=$matricula;

  DB::table('detalle_extracurriculares')
        ->where([['detalle_extracurriculares.matricula','=', $mat], ['detalle_extracurriculares.actividad', '=', $act],])
        ->update(
          ['estado' => 'Acreditado'],
      );
      return redirect()->route('inicio_formacion')->with('success','¡Acreditación Correcta!');
}

protected function constancia_par($matricula){
  $id=$matricula;
  $datos_estudiante = DB::table('estudiantes')
   ->select('personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
  ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
  ->where('estudiantes.matricula',$id)
  ->take(1)
  ->first();

  $academicas = DB::table('detalle_extracurriculares')
  ->select('extracurriculares.nombre_ec')
   ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
   ->where([['detalle_extracurriculares.matricula', '=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'], ['extracurriculares.area', '=', 'ACADEMICA'],])
   ->orderBy('extracurriculares.nombre_ec', 'asc')
   ->get();

  $culturales = DB::table('detalle_extracurriculares')
   ->select('extracurriculares.nombre_ec')
   ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
   ->where([['detalle_extracurriculares.matricula', '=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'], ['extracurriculares.area', '=', 'CULTURAL'],])
   ->orderBy('extracurriculares.nombre_ec', 'asc')
   ->get();

  $deportivas = DB::table('detalle_extracurriculares')
  ->select('extracurriculares.nombre_ec')
  ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
  ->where([['detalle_extracurriculares.matricula', '=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'], ['extracurriculares.area', '=', 'DEPORTIVA'],])
  ->orderBy('extracurriculares.nombre_ec', 'asc')
  ->get();

  $paper_orientation = 'letter';
  $customPaper = array(2.5,2.5,600,950);

  $pdf = PDF::loadView('personal_administrativo\formacion_integral.constanciaParcial', ['data' =>  $datos_estudiante,
  'aca' => $academicas, 'cul' => $culturales, 'dep' => $deportivas])
  ->setPaper($customPaper,$paper_orientation);
  return $pdf->stream('constancia_oficial.pdf');

}

protected function constancia_val($matricula){
$id=$matricula;
  $datos_estudiante = DB::table('estudiantes')
   ->select('personas.nombre', 'personas.apellido_paterno', 'personas.apellido_materno')
  ->join('personas', 'personas.id_persona', '=', 'estudiantes.id_persona')
  ->where('estudiantes.matricula',$id)
  ->take(1)
  ->first();

$academicas = DB::table('detalle_extracurriculares')
 ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
 ->where([['detalle_extracurriculares.matricula', '=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'], ['extracurriculares.area', '=', 'ACADEMICA'],])
  ->sum('detalle_extracurriculares.creditos');
$culturales = DB::table('detalle_extracurriculares')
 ->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
 ->where([['detalle_extracurriculares.matricula', '=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'], ['extracurriculares.area', '=', 'CULTURAL'],])
 ->sum('detalle_extracurriculares.creditos');
$deportivas = DB::table('detalle_extracurriculares')
->join('extracurriculares', 'extracurriculares.id_extracurricular', '=', 'detalle_extracurriculares.actividad')
->where([['detalle_extracurriculares.matricula', '=', $id], ['detalle_extracurriculares.estado', '=', 'Acreditado'], ['extracurriculares.area', '=', 'DEPORTIVA'],])
->sum('detalle_extracurriculares.creditos');
$sumas = $academicas + $culturales + $deportivas;
if($academicas >= 80 && $sumas >= 200){
    $paper_orientation = 'letter';
    $customPaper = array(2.5,2.5,600,950);

 $pdf = PDF::loadView('personal_administrativo\formacion_integral.constanciaOficial', ['data' =>  $datos_estudiante,
 'aca' => $academicas, 'cul' => $culturales, 'dep' => $deportivas, 'suma' => $sumas])
->setPaper($customPaper,$paper_orientation);
 return $pdf->stream('constancia_oficial.pdf');
}
else{
  return redirect()->route('busqueda_estudiante_fi')->with('error','¡El Estudiante no cumple con los requisitos para generar la constancia!');
}
}

protected function desactivar_extracurricular($actividad){
$id_extra= $actividad;
  DB::table('extracurriculares')
      ->where('extracurriculares.id_extracurricular', $id_extra)
      ->update(
          ['bandera' => '0'],
      );
      return redirect()->route('actividades_registradas')->with('success','¡Actividad Desactivada!');


}
}
