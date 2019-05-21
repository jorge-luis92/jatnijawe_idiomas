<?php

/* Página principal---*/
Route::get('/', 'Homepag@homepage')->name('welcome');

Route::get('prueba', 'Homepag@pruebas')->name('prueba');
Route::get('denegado', 'Homepag@restringdo')->name('denegado');


/* Rutas de logueo---*/
Route::get('login', 'HomeController@index');
Route::get('login_studiante', 'Estudiante_Con\EstudianteController@loginestudiantes')->name('login_studiante');
Route::get('perfiles', 'Homepag@perfil')->name('perfiles');
//Route::get('login_personal', 'Administrativo_Con\AdministrativoController@login_admin')->name('login_personal');
Route::get('login_tallerista', 'Tallerista_Con\TalleristaController@logintallerista')->name('login_tallerista');

Route::get('login_admin', 'Administrativo_Con\LoginAdministrativo@getLogin');
//Route::post('login_admin', ['as' =>'login_admin', 'uses' => 'Administrativo_Con\AdministrativoController@index']);
Route::post('login_admin', ['as' =>'login_admin', 'uses' => 'Administrativo_Con\LoginAdministrativo@postLogin']);
//Route::get('logout_admin', ['as' => 'logout', 'uses' => 'Administrativo_Con\LoginAdministrativo@getLogout']);
//Route::get('/', 'HomeController@index');


/* Rutas de Estudiante---*/
Route::group(['middleware' => 'auth'], function () {
  Route::get('home_admin', 'Administrativo_Con\AdministrativoController@index');
Route::get('home_auxiliar', 'HomeController@index')->name('home_auxiliar');
Route::get('gestion_estudiante', 'Administrativo_Con\AdministrativoController@auxiliar')->name('gestion_estudiante');
});

Route::group(['middleware' => 'auth'], function () {
Route::get('home_formacion', 'HomeController@index')->name('home_formacion');
Route::get('busqueda', 'Administrativo_Con\AdministrativoController@formacion_busqueda')->name('busqueda');

});



Route::group(['middleware' => 'auth'], function () {
  Route::get('home', 'HomeController@index')->name('home_estudiante');
  //Route::get('home_estudiante', 'Estudiante_Con\EstudianteController@inicio_estudiante')->name('home_estudiante');
  Route::get('mis_actividades', 'Estudiante_Con\EstudianteController@activities')->name('mis_actividades');
  Route::get('datos_general', 'Estudiante_Con\EstudianteController@dato_general')->name('datos_general');
  Route::get('datos_laboral', 'Estudiante_Con\EstudianteController@dato_laboral')->name('datos_laboral');
  Route::get('datos_medico', 'Estudiante_Con\EstudianteController@dato_medico')->name('datos_medico');
  Route::get('datos_personal', 'Estudiante_Con\EstudianteController@dato_personal')->name('datos_personal');
  Route::get('catalogo', 'Actividades\ActvidadesExtra@catalogos')->name('catalogo');
  //Route::get('home_estudiante', 'HomeController@index');

  Route::get('ma_estudiante', 'Estudiante_Con\EstudianteController@m_estudiantes')->name('ma_estudiante');
  Route::get('mis_actividades', 'Estudiante_Con\EstudianteController@activities')->name('mis_actividades');
  Route::get('mi_taller', 'Estudiante_Con\EstudianteController@talleres_activos')->name('mi_taller');
  Route::get('pdfs','Estudiante_Con\EstudianteController@generatePDF');
  Route::get('cuenta', 'Estudiante_Con\EstudianteController@cuenta_estudiante')->name('cuenta');
});



/* Rutas de Administrativo---*/


/* endroutes admin---*/

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

Auth::routes();
