<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
  protected $table = 'personas';
  protected $primaryKey = 'id_persona'; // or null
 public $incrementing = false;
 protected $fillable = [
     'id_persona', 'nombre','apellido_paterno', 'apellido_materno','curp','fecha_nacimiento','lugar_nacimiento','tipo_sangre','edad','genero',
 ];

   public function store(Request $request)
   {
       // Validate the request...

       $table = new Persona;

       $table->name = $request->name;

       $table->save();
   }
}
