<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudTaller extends Model
{
  protected $table = 'solicitud_talleres';
  protected $primaryKey = 'num_solicitud'; // or null
 //public $incrementing = false;
 protected $fillable = [
     'fecha_solicitud','nombre_taller', 'descripcion', 'objetivos', 'justificacion', 'creditos', 'proyecto_final', 'cupo', 'matricula',
     'departamento', 'estado',
 ];
}
