<?php
use Illuminate\Support\Facades\Input;
use App\User;
use App\Estudiante;
use App\Persona;
use App\Invoice;
/* Página principal---*/
Route::get('/', 'Homepag@homepage')->name('welcome');
Route::get('perfiles', 'Homepag@perfil')->name('perfiles');
Route::get('prueba', 'UserSystemController@checando')->name('prueba');
Route::get('denegado', 'Homepag@restringdo')->name('denegado');
/* Rutas de logueo---*/
Route::get('estudiante', 'Auth\LoginController@getLogin')->name('estudiante');
Route::post('login_studiante', ['as' =>'login_studiante', 'uses' => 'Auth\LoginController@postLogin']);
Route::get('tallerista', 'Tallerista_Con\LoginTallerista@getLoginTallerista')->name('tallerista');
Route::post('tallerista', ['as' =>'tallerista', 'uses' => 'Tallerista_Con\LoginTallerista@postLoginTallerista']);
Route::get('administrativo', 'Administrativo_Con\LoginAdministrativo@getLogin')->name('administrativo');
Route::post('logout_system', ['as' => 'logout_system', 'uses' => 'Administrativo_Con\LoginAdministrativo@getLogout']);
Route::post('admin', ['as' =>'admin', 'uses' => 'Administrativo_Con\LoginAdministrativo@postLogin']);

Route::group(['middleware' => 'auth','talleristamiddleware'], function () {
//Route::get('login_personal', 'Administrativo_Con\AdministrativoController@login_admin')->name('login_personal');
Route::get('login_tallerista', 'Tallerista_Con\TalleristaController@logintallerista')->name('login_tallerista');
Route::get('home_tallerista', 'Tallerista_Con\TalleristaController@home_tallerista')->name('home_tallerista');
Route::get('talleres_tallerista', 'Tallerista_Con\TalleristaController@talleres_tallerista')->name('talleres_tallerista');
Route::get('grupo_tallerista', 'Tallerista_Con\TalleristaController@grupo_tallerista')->name('grupo_tallerista');
Route::get('talleres_finalizados', 'Tallerista_Con\TalleristaController@talleres_finalizados')->name('talleres_finalizados');
});
/* Rutas de Acdemico---*/
Route::group(['middleware' => 'auth', 'academicomiddleware'], function () {
Route::get('home_auxiliar_adm', 'Administrativo_Con\AdministrativoController@home_auxiliar_adm')->name('home_auxiliar_adm');
Route::get('carga_de_datos', 'Administrativo_Con\AdministrativoController@carga_de_datos')->name('carga_de_datos');
Route::get('registros_estudiantes', 'Administrativo_Con\AdministrativoController@carga_hoy')->name('registros_estudiantes');
Route::get('registro_estudiante_aux', 'Administrativo_Con\AdministrativoController@registro_estudiante_aux')->name('registro_estudiante_aux');
Route::post('registro_estudiante_auxa', 'RegistroEstudiantes@create_estudiante_aux')->name('registro_estudiante_auxa');
Route::get('busqueda_estudiante_aux', 'Administrativo_Con\AdministrativoController@busqueda_estudiante_aux')->name('busqueda_estudiante_aux');
Route::get('estudiante_activo_aux', 'Administrativo_Con\AdministrativoController@estudiante_activo_aux')->name('estudiante_activo_aux');
Route::get('estudiante_inactivo_aux', 'Administrativo_Con\AdministrativoController@estudiante_inactivo_aux')->name('estudiante_inactivo_aux');
Route::get('desactivar_estudiante_auxiliar/{id_user}', 'AdminController@desactivar_estudiante_aux');
Route::get('activar_estudiante_auxiliar/{id_user}', 'AdminController@activar_estudiante_aux');
Route::get('gestion_estudiante', 'Administrativo_Con\AdministrativoController@gestion_estudiante')->name('gestion_estudiante');
Route::get('grupo_auxadm', 'Administrativo_Con\AdministrativoController@grupo_auxadm')->name('grupo_auxadm');
Route::get('datos_estudiantes', 'Administrativo_Con\AdministrativoController@datos_estudiantes')->name('datos_estudiantes');
Route::get('futuros_egresados', 'CoordinadorAcademico@ver_futuros_egresados')->name('futuros_egresados');
Route::get('acreditar_egresado/{matricula}', 'CoordinadorAcademico@cambiar_estudiante');
Route::get('estudiantes_egresados', 'CoordinadorAcademico@egresados_estudiantes')->name('estudiantes_egresados');
Route::any('busqueda_estudiantes_aux', 'AdminController@busqueda_aux')->name('busqueda_estudiantes_aux');
Route::get('cargar_datos_usuario_estudiante', 'UserSystemController@cargar_datos_usuario_estudiante')->name('carga_persona');
Route::post('cargar_datos_usuarios', 'UserSystemController@axcel')->name('cargar_datos_usuarios');
});

/* Rutas de Estudiante---*/
  Route::group(['middleware' => 'auth','estudiantes'], function () {
  Route::get('home_estudiante', 'Estudiante_Con\EstudianteController@inicio_estudiante')->name('home_estudiante');
  Route::get('mis_actividades', 'Estudiante_Con\EstudianteController@activities')->name('mis_actividades');
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
  Route::get('quitar_act/{id_externos}', 'ActualizacionesEstudiante@desactivar_act');
  Route::post('act_actividades', 'ActualizacionesEstudiante@act_actividades')->name('act_actividades');
  Route::post('act_datos_personales', 'ActualizacionesEstudiante@act_datos_personales')->name('act_datos_personales');
  Route::post('act_datos_medicos', 'ActualizacionesEstudiante@act_datos_medicos')->name('act_datos_medicos');
  Route::get('solicitud_taller', 'Estudiante_Con\EstudianteController@solicitud_taller')->name('solicitud_taller');
  Route::get('pdf_solicitud_taller/{matricula}','GenerarPdf@pdf_solicitud_taller_estudiante');
  Route::post('solicitud_taller_enviar', 'Actividades\ActvidadesExtra@envio_taller')->name('solicitud_taller_enviar');
  Route::get('descargar_solicitud_taller', 'GenerarPdf@descarga_taller');
  Route::get('solicitud_practicasP', 'Estudiante_Con\EstudianteController@solicitud_practicasP')->name('solicitud_practicasP');
  Route::get('solicitud_servicioSocial', 'Estudiante_Con\EstudianteController@solicitud_servicioSocial')->name('solicitud_servicioSocial');
  Route::get('tutorias', 'Estudiante_Con\EstudianteController@tutorias')->name('tutorias');
  Route::get('lineamientos', 'Estudiante_Con\EstudianteController@lineamientos')->name('lineamientos');
  Route::get('equipamientosalon', 'Estudiante_Con\EstudianteController@equipamientosalon')->name('equipamientosalon');
  Route::get('generales_egresado', 'SeguimientoEgresadosController@generales_egresado')->name('generales_egresado');
  Route::post('generales_egresado_actu', 'SeguimientoEgresadosController@generales_egresado_actualizar')->name('generales_egresado_actu');
  Route::get('cuestionario_egresado', 'SeguimientoEgresadosController@cuestionario_egresado')->name('cuestionario_egresado');
  Route::post('cuestionario_egresado_actu', 'SeguimientoEgresadosController@cuestionario_egresado_actualizar')->name('cuestionario_egresado_actu');
  Route::get('antecedentes_laborales', 'SeguimientoEgresadosController@antecedentes_laborales')->name('antecedentes_laborales');
  Route::post('antecedentes_laborales_actu', 'SeguimientoEgresadosController@antecedentes_laborales_actualizar')->name('antecedentes_laborales_actu');

});


Route::get('register_tallerista', 'Auth\RegisterController@getRegister');
Route::post('register_tallerista', ['as' => 'register_tallerista', 'uses' => 'Auth\RegisterController@postRegister']);
Route::get('registros_talleristas', 'UserSystemController@index')->name('registros_talleristas');

/*FormacionIntegralController*/
Route::group(['middleware' => 'auth','formacionmiddleware'], function () {
Route::get('inicio_formacion', 'FormacionIntegralController@inicio_formacion')->name('inicio_formacion');
Route::get('register_tallerista', 'FormacionIntegralController@getRegister');
Route::get('form_nuevo_taller', 'FormacionIntegralController@form_nuevo_taller')->name('form_nuevo_taller');
Route::post('agregar_nuevo_taller', 'FormacionIntegralController@agregar_nuevo_taller')->name('agregar_nuevo_taller');
Route::get('busqueda_estudiante_fi', 'FormacionIntegralController@busqueda_estudiante_fi')->name('busqueda_estudiante_fi');
Route::any('busqueda_estudiante_formacion', 'FormacionIntegralController@busqueda_fi')->name('busqueda_estudiante_formacion');
Route::get('registrar_tutor', 'FormacionIntegralController@registrar_tutor')->name('registrar_tutor');
Route::post('registrar_tutor_fi', 'FormacionIntegralController@registrar_tutor_fi')->name('registrar_tutor_fi');
Route::get('busqueda_tutor', 'FormacionIntegralController@busqueda_tutor')->name('busqueda_tutor');
Route::get('tutor_activo', 'FormacionIntegralController@tutor_activo')->name('tutor_activo');
Route::get('desactivar_tutor/{id_tutor}', 'FormacionIntegralController@desactivar_tutor');
Route::get('activar_tutor/{id_tutor}', 'FormacionIntegralController@activar_tutor');
Route::get('tutor_inactivo', 'FormacionIntegralController@tutor_inactivo')->name('tutor_inactivo');
Route::get('registro_extracurricular', 'FormacionIntegralController@registro_extracurricular')->name('registro_extracurricular');
Route::get('registro_taller', 'FormacionIntegralController@registro_taller')->name('registro_taller');
Route::post('registrar_taller', 'FormacionIntegralController@registrar_taller')->name('registrar_taller');
Route::get('registro_conferencia', 'FormacionIntegralController@registro_conferencia')->name('registro_conferencia');
Route::post('registrar_conferencia', 'FormacionIntegralController@registrar_conferencia')->name('registrar_conferencia');
Route::get('fechas_actividades', 'FormacionIntegralController@actualizar_fechas_solicitud')->name('fechas_actividades');
Route::get('registro_tallerista', 'FormacionIntegralController@registro_tallerista')->name('registro_tallerista');
Route::post('registrar_talleristas', 'FormacionIntegralController@registrar_talleristas')->name('registrar_talleristas');
Route::get('tallerista_activo', 'FormacionIntegralController@tallerista_activo')->name('tallerista_activo');
Route::get('tallerista_inactivo', 'FormacionIntegralController@tallerista_inactivo')->name('tallerista_inactivo');
Route::get('desactivar_tallerista/{id_user}', 'FormacionIntegralController@desactivar_tallerista');
Route::get('activar_tallerista/{id_user}', 'FormacionIntegralController@activar_tallerista');
Route::get('actividades_registradas', 'FormacionIntegralController@actividades_registradas')->name('actividades_registradas');
Route::get('solicitudes', 'FormacionIntegralController@solicitudes')->name('solicitudes');
Route::get('asignar_taller', 'FormacionIntegralController@asignar_taller')->name('asignar_taller');
Route::get('actividades_asignadas', 'FormacionIntegralController@actividades_asignadas')->name('actividades_asignadas');
Route::get('registro_horas', 'FormacionIntegralController@anteriores')->name('registro_horas');
Route::get('busqueda_atras', 'BusquedaAnteriorController@vista_atras')->name('busqueda_atras');
Route::any('busqueda_atras_fi', 'BusquedaAnteriorController@anteriores_busqueda')->name('busqueda_atras_fi');
Route::get('avance_estudiante_a/{ID}', 'BusquedaAnteriorController@ver_avance');
Route::get('constancia_parcial_a/{ID}', 'BusquedaAnteriorController@constancia_par');
Route::get('constancia_valida_a/{ID}', 'BusquedaAnteriorController@constancia_val');
Route::get('avance_estudiante/{matricula}', 'FormacionIntegralController@ver_avance');
Route::get('constancia_parcial/{matricula}', 'FormacionIntegralController@constancia_par');
Route::get('constancia_valida/{matricula}', 'FormacionIntegralController@constancia_val');
Route::get('acreditar_estudiantes_formacion/{actividad}/{matricula}', 'FormacionIntegralController@acreditar_estudiantes');
Route::get('desactivar_extra/{actividad}', 'FormacionIntegralController@desactivar_extracurricular');
Route::get('solicitud_correcion/{id_matricula}', 'Notificaciones@solicitud_correcion');
Route::post('replantear_solicitud', 'Notificaciones@enviar_correccion')->name('replantear_solicitud');
Route::get('solicitud_rechazo/{id_matricula}', 'Notificaciones@solicitud_rechazo');
Route::post('taller_rechazo', 'Notificaciones@enviar_rechazo')->name('taller_rechazo');
Route::get('solicitud_aprobada/{id_matricula}', 'Notificaciones@solicitud_aceptada');
Route::post('taller_aprobado', 'Notificaciones@enviar_aprobacion')->name('taller_aprobado');
Route::get('talleres_aprobados', 'FormacionIntegralController@taller_aprobado')->name('talleres_aprobados');
Route::get('pdf_taller_aprobado/{matricula}','GenerarPdf@pdf_apro_taller_estudiante');
Route::get('fecha_solicitud', 'FormacionIntegralController@actualizar_fechas_solicitud')->name('fecha_solicitud');
Route::get('notificaciones_enviadas', 'Notificaciones@enviadas_notifaciones')->name('notificaciones_enviadas');
Route::post('agregar_fecha_taller', 'FormacionIntegralController@fecha_taller')->name('agregar_fecha_taller');
});
/*Rutas ADMIN DEL SISTEMA*/
Route::group(['middleware' => 'auth', 'adminmiddleware' ], function () {
  Route::get('form_nuevo_usuario', 'UserSystemController@form_nuevo_usuario')->name('form_nuevo_usuario');
  Route::post('agregar_nuevo_usuario', 'UserSystemController@agregar_nuevo_usuario')->name('agregar_nuevo_usuario');
  Route::get('busqueda', 'Administrativo_Con\AdministrativoController@formacion_busqueda')->name('busqueda');
  Route::get('home_admin', 'AdminController@home_admin')->name('home_admin');
  Route::get('registro_estudiante', 'AdminController@registro_estudiante')->name('registro_estudiante');
  Route::get('busqueda_estudiante', 'AdminController@busqueda_estudiante')->name('busqueda_estudiante');
  Route::get('estudiante_activo', 'AdminController@estudiante_activo')->name('estudiante_activo');
  Route::get('estudiante_inactivo', 'AdminController@estudiante_inactivo')->name('estudiante_inactivo');
  Route::get('editar_estudiante/{matricula}', 'AdminController@editar_estudiante');
  Route::get('registro_coordinador', 'AdminController@registro_coordinador')->name('registro_coordinador');
  Route::post('registro_estudiantes', 'RegistroEstudiantes@create_estudiante')->name('registro_estudiantes');
  Route::post('registrar_coordinador', 'AdminController@registrar_coordinador')->name('registrar_coordinador');
  Route::get('busqueda_coordinador', 'AdminController@busqueda_coordinador')->name('busqueda_coordinador');
  Route::any('busqueda_coordinadores', 'AdminController@busqueda_coor')->name('busqueda_coordinadores');
  Route::get('coordinador_activo', 'AdminController@coordinador_activo')->name('coordinador_activo');
  Route::get('coordinador_inactivo', 'AdminController@coordinador_inactivo')->name('coordinador_inactivo');
  Route::any('busqueda_estudiantes', 'AdminController@Busqueda')->name('busqueda_estudiantes');
  Route::get('desactivar_estudiante/{id_user}', 'AdminController@desactivar_estudiante');
  Route::get('activar_estudiante/{id_user}', 'AdminController@activar_estudiante');
  Route::get('activar_coord/{id_user}', 'AdminController@activar_cordinador');
  Route::get('desactivar_coord/{id_user}', 'AdminController@desactivar_cordinador');
  Route::get('nuevo_periodo', 'AdminController@nuevo_periodo')->name('nuevo_periodo');
  Route::post('nuevo_periodo_agregar', 'AdminController@crear_periodo')->name('nuevo_periodo_agregar');
  Route::get('agregar_fecha', 'AdminController@nueva_actualizacion')->name('agregar_fecha');
  Route::post('agregar_fecha_actualizacion', 'AdminController@crear_fecha')->name('agregar_fecha_actualizacion');
});

Route::get('notes', 'Estudiante_Con\EstudianteController@index');
Route::get('pdf', 'Estudiante_Con\EstudianteController@pdf_g');
Route::get('consultitas', 'ConsultasController@carga_datos_general');

/*SERVICIO SOCIAL Y PRÁCTICAS PROFESIONALES*/
Route::group(['middleware' => 'auth', 'serviciomiddleware' ], function () {
  Route::get('home_servicios', 'ServiciosController@home_servicios')->name('home_servicios');
  Route::get('solicitudes_practicas', 'ServiciosController@solicitudes_practicas')->name('solicitudes_practicas');
  Route::get('solicitudes_serviciosocial', 'ServiciosController@solicitudes_serviciosocial')->name('solicitudes_serviciosocial');
  Route::get('estudiantes_activosPP', 'ServiciosController@estudiantes_activosPP')->name('estudiantes_activosPP');
  Route::get('estudiantes_activosSS', 'ServiciosController@estudiantes_activosSS')->name('estudiantes_activosSS');
  Route::get('egresado_registrado', 'ServiciosController@egresado_registrado')->name('egresado_registrado');
  Route::get('antecedentes_laborales_egresado', 'ServiciosController@antecedentes_laborales_egresado')->name('antecedentes_laborales_egresado');
  Route::get('cuestionario_egresado_ver', 'ServiciosController@cuestionario_egresado_ver')->name('cuestionario_egresado_ver');
  Route::get('generales_egresado_ver/{matricula}', 'ServiciosController@generales_egresado_ver');
  });

/*RUTAS Planeación*/
Route::group(['middleware' => 'auth', 'planeacionmiddleware' ], function () {
  Route::get('home_planeacion', 'PlaneacionController@home_planeacion')->name('home_planeacion');
  Route::get('info_coord_academica1', 'PlaneacionController@info_coord_academica1')->name('info_coord_academica1');
  Route::get('info_coord_academica2', 'PlaneacionController@info_coord_academica2')->name('info_coord_academica2');
  Route::get('info_coord_academica3', 'PlaneacionController@info_coord_academica3')->name('info_coord_academica3');
  Route::get('info_coord_academica4', 'PlaneacionController@info_coord_academica4')->name('info_coord_academica4');
  Route::get('info_coord_academica5', 'PlaneacionController@info_coord_academica5')->name('info_coord_academica5');
  Route::get('info_formacion_integral1', 'PlaneacionController@info_formacion_integral1')->name('info_formacion_integral1');
  Route::get('gral_escuela', 'PlaneacionController@gral_escuela')->name('gral_escuela');
  Route::post('agregar_escuela', 'PlaneacionController@crear_escuela')->name('agregar_escuela');
  Route::get('gral_carrera', 'PlaneacionController@gral_carrera')->name('gral_carrera');
  Route::post('agregar_carrera', 'PlaneacionController@crear_carrera')->name('agregar_carrera');
  Route::get('carreras_registradas', 'PlaneacionController@info_carreras')->name('carreras_registradas');
  /*REPORTE Semestral*/
  Route::get('reporte_semestral', 'PlaneacionController@reporte_semestral')->name('reporte_semestral');
  /*REPORTE 911.9*/
  Route::get('reporte911_9', 'PlaneacionController@reporte911_9')->name('reporte911_9');
  /*REPORTE 911.9A*/
  Route::get('reporte911_9A_0', 'PlaneacionController@reporte911_9A_0')->name('reporte911_9A_0');
  Route::get('reporte911_9A_1', 'PlaneacionController@reporte911_9A_1')->name('reporte911_9A_1');
  Route::get('reporte911_9A_2', 'PlaneacionController@reporte911_9A_2')->name('reporte911_9A_2');
  Route::get('reporte911_9A_3', 'PlaneacionController@reporte911_9A_3')->name('reporte911_9A_3');
  Route::get('reporte911_9A_4', 'PlaneacionController@reporte911_9A_4')->name('reporte911_9A_4');
  Route::get('reporte911_9A_5', 'PlaneacionController@reporte911_9A_5')->name('reporte911_9A_5');
  Route::get('reporte911_9A_6', 'PlaneacionController@reporte911_9A_6')->name('reporte911_9A_6');
  /*Planeación ss y pp*/
  Route::get('info_practicasp', 'PlaneacionController@info_practicasp')->name('info_practicasp');
  Route::get('info_serviciosocial', 'PlaneacionController@info_serviciosocial')->name('info_serviciosocial');
  });
/*INFO FORMACIÓN INTEGRAL*/ /*Seguimiento a Egresados*/
Route::get('home_seguimiento_egresados', 'SeguimientoEgresadosController@home_seguimiento_egresados')->name('home_seguimiento_egresados');
Route::get('registro_externo', 'RegistrosController@ver')->name('registro_externo');
Route::post('registro_externos', 'RegistrosController@create')->name('registro_externos');
Auth::routes();
