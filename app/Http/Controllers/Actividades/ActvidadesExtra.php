<?php
namespace App\Http\Controllers\Actividades;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActvidadesExtra extends Controller
{
    public function catalogos(){

      $usuario_actual=\Auth::user();
       if($usuario_actual->tipo_usuario!='estudiante'){
        return redirect()->back();
        }
    return view("estudiante\mis_actividades.catalogo_actividades");
    }


}
