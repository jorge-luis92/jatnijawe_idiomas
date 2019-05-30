<?php

/* Página principal---*/
Route::get('/', 'Homepag@homepage')->name('welcome');

Route::get('prueba', 'UserSystemController@checando')->name('prueba');
Route::get('denegado', 'Homepag@restringdo')->name('denegado');

Route::get('cargar_datos_usuario_estudiante', 'UserSystemController@cargar_datos_usuario_estudiante');
Route::post('cargar_datos_usuarios', 'UserSystemController@importUsers');

Route::post('registro_persona', 'RegistroEstudiantes@create_persona')->name('registro_persona');
/* Rutas de logueo---*/
Route::get('login', 'HomeController@index');
Route::get('login_studiante', 'Estudiante_Con\EstudianteController@loginestudiantes')->name('login_studiante');
Route::get('perfiles', 'Homepag@perfil')->name('perfiles');
//Route::get('login_personal', 'Administrativo_Con\AdministrativoController@login_admin')->name('login_personal');
Route::get('login_tallerista', 'Tallerista_Con\TalleristaController@logintallerista')->name('login_tallerista');

Route::get('admin', 'Administrativo_Con\LoginAdministrativo@getLogin');
//Route::post('login_admin', ['as' =>'login_admin', 'uses' => 'Administrativo_Con\AdministrativoController@index']);
Route::post('admin', ['as' =>'admin', 'uses' => 'Administrativo_Con\LoginAdministrativo@postLogin']);
//Route::get('logout_admin', ['as' => 'logout', 'uses' => 'Administrativo_Con\LoginAdministrativo@getLogout']);
//Route::get('/', 'HomeController@index');

Route::get('form_nuevo_usuario', 'UserSystemController@form_nuevo_usuario')->name('form_nuevo_usuario');
Route::post('agregar_nuevo_usuario', 'UserSystemController@agregar_nuevo_usuario')->name('agregar_nuevo_usuario');
/* Rutas de Estudiante---*/
Route::group(['middleware' => 'auth'], function () {

Route::get('home_auxiliar', 'HomeController@index')->name('home_auxiliar');
Route::get('gestion_estudiante', 'Administrativo_Con\AdministrativoController@auxiliar')->name('gestion_estudiante');
});
Route::group(['middleware' => 'auth','checar'], function () {
Route::get('home_admin', 'Administrativo_Con\AdministrativoController@admin_inicio')->name('home_admin');
Route::get('register_tallerista', 'FormacionIntegralController@getRegister');
//Route::post('register_tallerista', ['as' => 'register_tallerista', 'uses' => 'FormacionIntegralController@postRegister']);
Route::get('registros_talleristas', 'UserSystemController@index')->name('registros_talleristas');
//Route::get('form_nuevo_usuario', 'UserSystemController@form_nuevo_usuario')->name('form_nuevo_usuario');
//Route::post('agregar_nuevo_usuario', 'UserSystemController@agregar_nuevo_usuario')->name('agregar_nuevo_usuario');
Route::get('form_nuevo_taller', 'FormacionIntegralController@form_nuevo_taller')->name('form_nuevo_taller');
Route::post('agregar_nuevo_taller', 'FormacionIntegralController@agregar_nuevo_taller')->name('agregar_nuevo_taller');
});
Route::group(['middleware' => 'auth'], function () {
Route::get('home_formacion', 'HomeController@index')->name('home_formacion');
//Route::get('busqueda', 'Administrativo_Con\AdministrativoController@formacion_busqueda')->name('busqueda');
});
Route::get('busqueda', 'Administrativo_Con\AdministrativoController@formacion_busqueda')->name('busqueda');

Route::group(['middleware' => 'auth'], function () {
  Route::get('home', 'HomeController@index')->name('home_estudiante');
  //Route::get('home_estudiante', 'Estudiante_Con\EstudianteController@inicio_estudiante')->name('home_estudiante');
  Route::get('mis_actividades', 'Estudiante_Con\EstudianteController@activities')->name('mis_actividades');
//  Route::get('datos_general', 'Estudiante_Con\EstudianteController@dato_general')->name('datos_general');
   Route::get('datos_general', 'ConsultasController@carga_datos_general')->name('datos_general');
    Route::get('perfil_estudiante', 'ConsultasController@datos_nombre')->name('perfil_estudiante');
  Route::get('otras_actividades', 'Estudiante_Con\EstudianteController@dato_laboral')->name('otras_actividades');
  Route::get('datos_medico', 'Estudiante_Con\EstudianteController@dato_medico')->name('datos_medico');
  Route::get('datos_personal', 'Estudiante_Con\EstudianteController@dato_personal')->name('datos_personal');
  Route::get('catalogo', 'Actividades\ActvidadesExtra@catalogos')->name('catalogo');
  Route::post('changePassword','HomeController@changePassword')->name('changePassword');
  //Route::get('home_estudiante', 'HomeController@index');

  Route::get('ma_estudiante', 'Estudiante_Con\EstudianteController@m_estudiantes')->name('ma_estudiante');
  Route::get('mis_actividades', 'Estudiante_Con\EstudianteController@activities')->name('mis_actividades');
  Route::get('mi_taller', 'Estudiante_Con\EstudianteController@talleres_activos')->name('mi_taller');
  Route::get('pdfs','Estudiante_Con\EstudianteController@generatePDF');
  Route::get('cuenta', 'Estudiante_Con\EstudianteController@cuenta_estudiante')->name('cuenta');
});



/* Routes of formacion_integral---*/
Route::get('register_tallerista', 'Auth\RegisterController@getRegister');
Route::post('register_tallerista', ['as' => 'register_tallerista', 'uses' => 'Auth\RegisterController@postRegister']);
Route::get('registros_talleristas', 'UserSystemController@index')->name('registros_talleristas');



/* endroutes formacion_integral---*/

/* Rutas de auxiliar---*/


/* endroutes auxiliar---*/



/* Rutas de Talleristas---*/

/* endroutes Tallerista---*/

/* Rutas de Coordinadores---*/
/* endroutes Coordinadores---*/

//Route::get('home_estudiante', 'Estudiante_Con\EstudianteController@inicio_estudiante')->name('home_estudiante');

// Registration routes...

Route::get('sisi','Homepag@sino');
Route::get('notes', 'Estudiante_Con\EstudianteController@index');
Route::get('pdf', 'Estudiante_Con\EstudianteController@pdf_g');
Route::get('consultitas', 'ConsultasController@carga_datos_general');


Auth::routes();
