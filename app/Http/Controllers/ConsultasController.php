<?php

namespace App\Http\Controllers;
use App\User;
use App\Estudiante;
use App\Persona;
use Illuminate\Support\Facades\DB;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
//use Excel;

class ConsultasController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */

    public function carga_datos_general()
    {

      $users = DB::table('users')
            ->join('estudiantes', 'users.id', '=', 'estudiantes.matricula')
            ->select('users.id', 'users.email', 'estudiantes.matricula', 'estudiantes.semestre')
            ->get();

            return view('consultitas', ['users' => $users]);

}


}
