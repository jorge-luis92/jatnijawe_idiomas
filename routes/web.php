<?php

Route::get('/', 'Homepag@homepage')->name('welcome'); /* Página principal---*/
Route::get('prueba', 'Homepag@pruebas')->name('prueba');

/* Rutas de Estudiante---*/
Route::get('login_studiante', 'Estudiante_Con\EstudianteController@loginestudiantes')->name('login_studiante');
Route::get('estudiante_perfil', 'Estudiante_Con\EstudianteController@homes_estudiante')->name('estudiante_perfil');
Route::get('home_estudiante', 'Estudiante_Con\EstudianteController@inicio_estudiante')->name('home_estudiante');
Route::get('mis_actividades', 'Estudiante_Con\EstudianteController@activities')->name('mis_actividades');
/* endroutes Estudiante---*/

/* Rutas de Administrativo---*/
Route::get('perfiles', 'Homepag@perfil')->name('perfiles');
Route::get('login_personal', 'Administrativo_Con\AdministrativoController@login_admin')->name('login_personal');

/* endroutes admin---*/

/* Rutas de auxiliar---*/
Route::get('gestion_estudiante', 'Administrativo_Con\AdministrativoController@auxiliar')->name('gestion_estudiante');
Route::get('carga_datos_estudiantes', 'Administrativo_Con\AdministrativoController@auxiliar_carga')->name('carga_datos_estudiantes');
/* endroutes auxiliar---*/



/* Rutas de Talleristas---*/
Route::get('login_tallerista', 'Tallerista_Con\TalleristaController@logintallerista')->name('login_tallerista');
/* endroutes Tallerista---*/

/* Rutas de Coordinadores---*/
/* endroutes Coordinadores---*/

//Route::get('home_estudiante', 'Estudiante_Con\EstudianteController@inicio_estudiante')->name('home_estudiante');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);
Route::get('home_estudiante', 'HomeController@index');
Route::get('login', 'HomeController@index');


Route::get('home', 'HomeController@index')->name('home_estudiante');
Route::get('home_estudiante', function () {
})->middleware('auth');

Route::get('datos_generales', function () {
})->middleware('auth');
Route::get('datos_general', 'Estudiante_Con\EstudianteController@dato_general')->name('datos_general');
Route::get('mis_actividades', 'Estudiante_Con\EstudianteController@activities')->name('mis_actividades');


Route::get('mi_taller', function () {
})->middleware('auth');
Route::get('mi_taller', 'Estudiante_Con\EstudianteController@talleres_activos')->name('mi_taller');


Route::get('pdfs','HomeController@generatePDF');
Route::get('sisi','Homepag@sino');
Route::get('notes', 'Estudiante_Con\EstudianteController@index');
Route::get('pdf', 'Estudiante_Con\EstudianteController@pdf_g');

Auth::routes();
