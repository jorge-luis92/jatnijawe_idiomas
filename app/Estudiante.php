<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
     protected $table = 'estudiantes';
     protected $primaryKey = 'id'; // or null
    public $incrementing = false;
    const created_at = 'fecha_alta';
    const updated_at = 'fecha_actualizacion';
   $table = App\Estudiante::all();


   public function store(Request $request)
   {
       // Validate the request...

       $table = new Estudiante;

       $table->name = $request->name;

       $table->save();
   }
}
