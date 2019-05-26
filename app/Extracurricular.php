<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
  protected $table = 'extracurriculares';
  protected $primaryKey = 'id_extracurricular'; // or null
 //public $incrementing = false;
 protected $fillable = [
     'matricula', 'modalidad','fecha_ingreso', 'semestre','grupo','estatus','bachillerato_origen',
 ];



   public function store(Request $request)
   {
       // Validate the request...

       $table = new Extracurricular;

       $table->nombre_ec = $request->nombre_ec;

       $table->save();
   }
}
