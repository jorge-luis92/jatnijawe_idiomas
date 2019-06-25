<?php
use Illuminate\Support\Facades\Input;
use App\User;
use App\Estudiante;
use App\Persona;
/* Página principal---*/
Route::get('/', 'Homepag@homepage')->name('welcome');

Route::get('prueba', 'UserSystemController@checando')->name('prueba');
Route::get('denegado', 'Homepag@restringdo')->name('denegado');

Route::get('cargar_datos_usuario_estudiante', 'UserSystemController@cargar_datos_usuario_estudiante')->name('carga_persona');
Route::post('cargar_datos_usuarios', 'UserSystemController@axcel')->name('cargar_datos_usuarios');
/* Rutas de logueo---*/
//Route::get('login', 'HomeController@index');
Route::get('login_studiante', 'Auth\LoginController@getLogin')->name('login_studiante');
Route::post('login_studiante', ['as' =>'login_studiante', 'uses' => 'Auth\LoginController@postLogin']);
//Route::post('login_admin', ['as' =>'login_admin', 'uses' => 'Administrativo_Con\AdministrativoController@index']);
//Route::post('login_studiante', ['as' =>'admin', 'uses' => 'Administrativo_Con\LoginAdministrativo@postLogin']);
Route::get('perfiles', 'Homepag@perfil')->name('perfiles');
Route::group(['middleware' => 'auth','talleristamiddleware'], function () {
//Route::get('login_personal', 'Administrativo_Con\AdministrativoController@login_admin')->name('login_personal');
Route::get('login_tallerista', 'Tallerista_Con\TalleristaController@logintallerista')->name('login_tallerista');
Route::get('home_tallerista', 'Tallerista_Con\TalleristaController@home_tallerista')->name('home_tallerista');
Route::get('talleres_tallerista', 'Tallerista_Con\TalleristaController@talleres_tallerista')->name('talleres_tallerista');
Route::get('grupo_tallerista', 'Tallerista_Con\TalleristaController@grupo_tallerista')->name('grupo_tallerista');
Route::get('talleres_finalizados', 'Tallerista_Con\TalleristaController@talleres_finalizados')->name('talleres_finalizados');


});
Route::get('tallerista', 'Tallerista_Con\LoginTallerista@getLoginTallerista');
Route::post('tallerista', ['as' =>'tallerista', 'uses' => 'Tallerista_Con\LoginTallerista@postLoginTallerista']);
Route::get('admin', 'Administrativo_Con\LoginAdministrativo@getLogin');
//Route::post('login_admin', ['as' =>'login_admin', 'uses' => 'Administrativo_Con\AdministrativoController@index']);
Route::post('admin', ['as' =>'admin', 'uses' => 'Administrativo_Con\LoginAdministrativo@postLogin']);
//Route::get('logout_admin', ['as' => 'logout', 'uses' => 'Administrativo_Con\LoginAdministrativo@getLogout']);
//Route::get('/', 'HomeController@index');
/* Rutas de Estudiante---*/
Route::group(['middleware' => 'auth'], function () {
Route::get('inicio_formacion', 'FormacionIntegralController@inicio_formacion')->name('inicio_formacion');
Route::get('home_auxiliar_adm', 'Administrativo_Con\AdministrativoController@home_auxiliar_adm')->name('home_auxiliar_adm');
Route::get('carga_de_datos', 'Administrativo_Con\AdministrativoController@carga_de_datos')->name('carga_de_datos');
Route::get('gestion_estudiante', 'Administrativo_Con\AdministrativoController@gestion_estudiante')->name('gestion_estudiante');
Route::get('grupo_auxadm', 'Administrativo_Con\AdministrativoController@grupo_auxadm')->name('grupo_auxadm');
Route::get('datos_estudiantes', 'Administrativo_Con\AdministrativoController@datos_estudiantes')->name('datos_estudiantes');
Route::get('registro_estudiante_aux', 'Administrativo_Con\AdministrativoController@registro_estudiante_aux')->name('registro_estudiante_aux');
Route::get('busqueda_estudiante_aux', 'Administrativo_Con\AdministrativoController@busqueda_estudiante_aux')->name('busqueda_estudiante_aux');
Route::any('busqueda_estudiantes_aux', 'AdminController@busqueda_aux')->name('busqueda_estudiantes_aux');
Route::get('estudiante_activo_aux', 'Administrativo_Con\AdministrativoController@estudiante_activo_aux')->name('estudiante_activo_aux');
Route::get('estudiante_inactivo_aux', 'Administrativo_Con\AdministrativoController@estudiante_inactivo_aux')->name('estudiante_inactivo_aux');
});

Route::group(['middleware' => 'auth','checar'], function () {
//Route::get('home_auxiliar', 'HomeController@index')->name('home_auxiliar');
Route::get('register_tallerista', 'FormacionIntegralController@getRegister');
//Route::post('register_tallerista', ['as' => 'register_tallerista', 'uses' => 'FormacionIntegralController@postRegister']);
Route::get('registros_talleristas', 'UserSystemController@index')->name('registros_talleristas');
//Route::get('form_nuevo_usuario', 'UserSystemController@form_nuevo_usuario')->name('form_nuevo_usuario');
//Route::post('agregar_nuevo_usuario', 'UserSystemController@agregar_nuevo_usuario')->name('agregar_nuevo_usuario');
Route::get('form_nuevo_taller', 'FormacionIntegralController@form_nuevo_taller')->name('form_nuevo_taller');
Route::post('agregar_nuevo_taller', 'FormacionIntegralController@agregar_nuevo_taller')->name('agregar_nuevo_taller');
});
Route::group(['middleware' => 'auth'], function () {
//Route::get('busqueda', 'Administrativo_Con\AdministrativoController@formacion_busqueda')->name('busqueda');
});


Route::group(['middleware' => 'auth'], function () {
// Route::get('home', 'HomeController@index')->name('home_estudiante');
  Route::get('home_estudiante', 'Estudiante_Con\EstudianteController@inicio_estudiante')->name('home_estudiante');
  Route::get('mis_actividades', 'Estudiante_Con\EstudianteController@activities')->name('mis_actividades');
//  Route::get('datos_general', 'Estudiante_Con\EstudianteController@dato_general')->name('datos_general');
  Route::get('perfil_estudiante', 'ConsultasController@datos_nombre')->name('perfil_estudiante');
  Route::get('datos_general', 'ConsultasController@carga_datos_general')->name('datos_general');
  Route::post('datos_general_actualizar', 'RegistroEstudiantes@actualizacion_estudiante')->name('datos_general_actualizar');

  Route::get('otras_actividades', 'ConsultasController@carga_otras_actividades')->name('otras_actividades');
  Route::post('otras_actividades_actualizar', 'ActualizacionesEstudiante@actualizacion_actividades')->name('otras_actividades_actualizar');
  Route::post('act_actividades', 'ActualizacionesEstudiante@act_mis_actividades')->name('act_actividades');

  Route::get('datos_medico', 'ConsultasController@carga_datos_medicos')->name('datos_medico');
  Route::get('datos_personal', 'ConsultasController@carga_datos_personales')->name('datos_personal');
  Route::get('catalogo', 'Actividades\ActvidadesExtra@catalogos')->name('catalogo');
  Route::get('inscripcion_extracurricular/{id_extracurricular}/{creditos}', 'Actividades\ActvidadesExtra@inscripcion_extra');
  Route::post('changePassword','HomeController@changePassword')->name('changePassword');
  //Route::post('subir_imagen_usuario', 'HomeController@changePassword');
  Route::get('ma_estudiante', 'Estudiante_Con\EstudianteController@m_estudiantes')->name('ma_estudiante');
  Route::get('mis_actividades', 'Estudiante_Con\EstudianteController@activities')->name('mis_actividades');
  Route::get('avance', 'Estudiante_Con\EstudianteController@avance_horas')->name('avance');
  Route::get('mi_taller', 'Estudiante_Con\EstudianteController@talleres_activos')->name('mi_taller');
  Route::get('pdfs','Estudiante_Con\EstudianteController@generatePDF');
  Route::get('cuenta', 'Estudiante_Con\EstudianteController@cuenta_estudiante')->name('cuenta');
  Route::get('foto_perfil', 'Estudiante_Con\EstudianteController@foto_perfil')->name('foto_perfil');
  Route::post('act_foto','HomeController@act_foto')->name('act_foto');
  Route::get('cuenta_form', 'FormacionIntegralController@cuenta_formacion')->name('cuenta_form');
  Route::get('cambiar_estatus_beca/{id_beca}', 'ActualizacionesEstudiante@desactivar_lengua');
  //Route::get('editar_actividad/{id_externos}', 'Estudiante_Con\EstudianteController@editar_actividades');
  Route::get('quitar_act/{id_externos}', 'ActualizacionesEstudiante@desactivar_act');
  Route::post('act_actividades', 'ActualizacionesEstudiante@act_actividades')->name('act_actividades');
  Route::post('act_datos_personales', 'ActualizacionesEstudiante@act_datos_personales')->name('act_datos_personales');
  Route::post('act_datos_medicos', 'ActualizacionesEstudiante@act_datos_medicos')->name('act_datos_medicos');

  Route::get('solicitud_taller', 'Estudiante_Con\EstudianteController@solicitud_taller')->name('solicitud_taller');
  Route::post('solicitud_taller_enviar', 'Actividades\ActvidadesExtra@envio_taller')->name('solicitud_taller_enviar');
  Route::get('solicitud_practicasP', 'Estudiante_Con\EstudianteController@solicitud_practicasP')->name('solicitud_practicasP');
  Route::get('solicitud_servicioSocial', 'Estudiante_Con\EstudianteController@solicitud_servicioSocial')->name('solicitud_servicioSocial');
});


Route::get('register_tallerista', 'Auth\RegisterController@getRegister');
Route::post('register_tallerista', ['as' => 'register_tallerista', 'uses' => 'Auth\RegisterController@postRegister']);
Route::get('registros_talleristas', 'UserSystemController@index')->name('registros_talleristas');

/*Controller ADMIN DEL SISTEMA
***********************************************************
*/
Route::group(['middleware' => 'auth'], function () {
  Route::get('form_nuevo_usuario', 'UserSystemController@form_nuevo_usuario')->name('form_nuevo_usuario');
  Route::post('agregar_nuevo_usuario', 'UserSystemController@agregar_nuevo_usuario')->name('agregar_nuevo_usuario');
  //Route::get('gestion_estudiante', 'Administrativo_Con\AdministrativoController@auxiliar')->name('gestion_estudiante');
  Route::get('busqueda', 'Administrativo_Con\AdministrativoController@formacion_busqueda')->name('busqueda');
  Route::get('home_admin', 'AdminController@home_admin')->name('home_admin');
  Route::get('registro_estudiante', 'AdminController@registro_estudiante')->name('registro_estudiante');
  Route::get('busqueda_estudiante', 'AdminController@busqueda_estudiante')->name('busqueda_estudiante');
  Route::get('estudiante_activo', 'AdminController@estudiante_activo')->name('estudiante_activo');
  Route::get('estudiante_inactivo', 'AdminController@estudiante_inactivo')->name('estudiante_inactivo');
  Route::get('editar_estudiante', 'AdminController@editar_estudiante')->name('editar_estudiante');

  Route::get('editar_estudiante/{id_user}', 'AdminController@editar_estudiante');

  Route::get('registro_coordinador', 'AdminController@registro_coordinador')->name('registro_coordinador');
  Route::post('registro_estudiantes', 'RegistroEstudiantes@create_estudiante')->name('registro_estudiantes');
  Route::post('registro_estudiante_auxa', 'RegistroEstudiantes@create_estudiante_aux')->name('registro_estudiante_auxa');
  Route::post('registrar_coordinador', 'AdminController@registrar_coordinador')->name('registrar_coordinador');
  Route::get('busqueda_coordinador', 'AdminController@busqueda_coordinador')->name('busqueda_coordinador');
  Route::get('coordinador_activo', 'AdminController@coordinador_activo')->name('coordinador_activo');
  Route::get('coordinador_inactivo', 'AdminController@coordinador_inactivo')->name('coordinador_inactivo');
  Route::any('busqueda_estudiantes', 'AdminController@Busqueda')->name('busqueda_estudiantes');
  Route::get('desactivar_estudiante/{id_user}', 'AdminController@desactivar_estudiante');
  Route::get('activar_estudiante/{id_user}', 'AdminController@activar_estudiante');


  //Route::get('home_admin', 'Administrativo_Con\AdministrativoController@admin_inicio')->name('home_admin');
});

Route::get('inicio_formacion', 'FormacionIntegralController@inicio_formacion')->name('inicio_formacion');
Route::get('busqueda_estudiante_fi', 'FormacionIntegralController@busqueda_estudiante_fi')->name('busqueda_estudiante_fi');
Route::any('busqueda_estudiante_fi', 'FormacionIntegralController@busqueda_fi')->name('busqueda_estudiante_fi');
Route::get('registrar_tutor', 'FormacionIntegralController@registrar_tutor')->name('registrar_tutor');
Route::post('registrar_tutor_fi', 'FormacionIntegralController@registrar_tutor_fi')->name('registrar_tutor_fi');
Route::get('busqueda_tutor', 'FormacionIntegralController@busqueda_tutor')->name('busqueda_tutor');
Route::get('tutor_activo', 'FormacionIntegralController@tutor_activo')->name('tutor_activo');
Route::get('tutor_inactivo', 'FormacionIntegralController@tutor_inactivo')->name('tutor_inactivo');
Route::get('registro_extracurricular', 'FormacionIntegralController@registro_extracurricular')->name('registro_extracurricular');
Route::get('registro_taller', 'FormacionIntegralController@registro_taller')->name('registro_taller');
Route::post('registrar_taller', 'FormacionIntegralController@registrar_taller')->name('registrar_taller');
Route::get('registro_conferencia', 'FormacionIntegralController@registro_conferencia')->name('registro_conferencia');
Route::post('registrar_conferencia', 'FormacionIntegralController@registrar_conferencia')->name('registrar_conferencia');
//
Route::get('registro_tallerista', 'FormacionIntegralController@registro_tallerista')->name('registro_tallerista');
Route::post('registrar_talleristas', 'FormacionIntegralController@registrar_talleristas')->name('registrar_talleristas');
Route::get('tallerista_activo', 'FormacionIntegralController@tallerista_activo')->name('tallerista_activo');
Route::get('tallerista_inactivo', 'FormacionIntegralController@tallerista_inactivo')->name('tallerista_inactivo');
Route::get('desactivar_tallerista/{id_user}', 'FormacionIntegralController@desactivar_tallerista');
Route::get('activar_tallerista/{id_user}', 'FormacionIntegralController@activar_tallerista');
//
Route::get('actividades_registradas', 'FormacionIntegralController@actividades_registradas')->name('actividades_registradas');
Route::get('solicitudes', 'FormacionIntegralController@solicitudes')->name('solicitudes');
Route::get('asignar_taller', 'FormacionIntegralController@asignar_taller')->name('asignar_taller');
Route::get('actividades_asignadas', 'FormacionIntegralController@actividades_asignadas')->name('actividades_asignadas');
Route::get('registro_horas', 'FormacionIntegralController@anteriores')->name('registro_horas');
Route::get('avance_estudiante/{matricula}', 'FormacionIntegralController@ver_avance');
Route::get('constancia_parcial/{matricula}', 'FormacionIntegralController@constancia_par');
Route::get('constancia_valida/{matricula}', 'FormacionIntegralController@constancia_val');
Route::get('acreditar_estudiantes_formacion/{actividad}/{matricula}', 'FormacionIntegralController@acreditar_estudiantes');
Route::get('desactivar_extra/{actividad}', 'FormacionIntegralController@desactivar_extracurricular');



/*Controller ADMIN DEL SISTEMA
***********************************************************
*/
Route::get('sisi','Homepag@sino');
Route::get('notes', 'Estudiante_Con\EstudianteController@index');
Route::get('pdf', 'Estudiante_Con\EstudianteController@pdf_g');
Route::get('consultitas', 'ConsultasController@carga_datos_general');

Route::get('busqueda_estudiante_fi', 'FormacionIntegralController@busqueda_estudiante_fi')->name('busqueda_estudiante_fi');
Route::get('registrar_tutor', 'FormacionIntegralController@registrar_tutor')->name('registrar_tutor');

/*SERVICIO SOCIAL Y PRÁCTICAS PROFESIONALES
***********************************************************
*/
Route::get('home_servicios', 'ServiciosController@home_servicios')->name('home_servicios');
Route::get('solicitudes_practicas', 'ServiciosController@solicitudes_practicas')->name('solicitudes_practicas');
Route::get('solicitudes_serviciosocial', 'ServiciosController@solicitudes_serviciosocial')->name('solicitudes_serviciosocial');
Route::get('solicitudes_serviciosocial', 'ServiciosController@solicitudes_serviciosocial')->name('solicitudes_serviciosocial');
Route::get('estudiantes_activosPP', 'ServiciosController@estudiantes_activosPP')->name('estudiantes_activosPP');
Route::get('estudiantes_activosSS', 'ServiciosController@estudiantes_activosSS')->name('estudiantes_activosSS');

/*AUXILIAR ADMINISTRATIVO
***********************************************************
*/
Route::get('home_auxiliar_adm', 'Administrativo_Con\AdministrativoController@home_auxiliar_adm')->name('home_auxiliar_adm');
Route::get('carga_de_datos', 'Administrativo_Con\AdministrativoController@carga_de_datos')->name('carga_de_datos');
Route::get('gestion_estudiante', 'Administrativo_Con\AdministrativoController@gestion_estudiante')->name('gestion_estudiante');
Route::get('grupo_auxadm', 'Administrativo_Con\AdministrativoController@grupo_auxadm')->name('grupo_auxadm');
Route::get('datos_estudiantes', 'Administrativo_Con\AdministrativoController@datos_estudiantes')->name('datos_estudiantes');
Route::get('registro_estudiante_aux', 'Administrativo_Con\AdministrativoController@registro_estudiante_aux')->name('registro_estudiante_aux');
Route::get('busqueda_estudiante_aux', 'Administrativo_Con\AdministrativoController@busqueda_estudiante_aux')->name('busqueda_estudiante_aux');
Route::get('estudiante_activo_aux', 'Administrativo_Con\AdministrativoController@estudiante_activo_aux')->name('estudiante_activo_aux');
Route::get('estudiante_inactivo_aux', 'Administrativo_Con\AdministrativoController@estudiante_inactivo_aux')->name('estudiante_inactivo_aux');





Auth::routes();
