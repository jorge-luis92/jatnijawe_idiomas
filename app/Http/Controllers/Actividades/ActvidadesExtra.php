<?php
namespace App\Http\Controllers\Actividades;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActvidadesExtra extends Controller
{
    public function catalogos(){
      return view("estudiante\mis_actividades.catalogo_actividades");
    }
}
