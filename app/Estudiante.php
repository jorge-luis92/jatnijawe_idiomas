<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
  protected $table = 'estudiantes';
  protected $primaryKey = 'matricula'; // or null
 public $incrementing = false;
 protected $fillable = [
     'matricula', 'modalidad','fecha_ingreso', 'semestre','grupo','estatus','bachillerato_origen',
 ];



   public function store(Request $request)
   {
       // Validate the request...

       $table = new Estudiante;

       $table->name = $request->name;

       $table->save();
   }
}
