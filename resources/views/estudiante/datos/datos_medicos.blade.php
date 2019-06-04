<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_estudiante')
@section('title')
: Datos Médicos
@endsection

@section('seccion')
  <h1 style="font-size: 2.0em; color: #000000;" align="center"> Datos Médicos</h1>
<div class="container" id="font4">
    @include('flash-message')
</br>
<form method="POST" action="{{ route('act_datos_medicos') }}">
    @csrf
  <p style="font-size: 1.0em; color: #000000;"> Los Campos con un * son Obligatorios</p>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="tipo_sangre">* Tipo de Sangre</label>
      <input type="text" class="form-control" name="tipo_sangre" value="<?php if(empty($s->tipo_sangre)){ $vacio=null; echo $vacio;} else{ echo $s->tipo_sangre;} ?>" id="tipo_sangre" placeholder="Tipo de Sangre"  onKeyUp="this.value = this.value.toUpperCase();" required>
    </div>
    <div class="form-group col-md-4">
      <label for="nombre_responsable">* En caso de emergencia llamar a: </label>
      <input type="text" class="form-control" name="nombre_responsable" value="<?php if(empty($e->nombre_responsable)){ $vacio=null; echo $vacio;} else{ echo $e->nombre_responsable;} ?>" id="nombre_responsable" placeholder="Nombre"  onKeyUp="this.value = this.value.toUpperCase();" required>
    </div>
    <div class="form-group col-md-4">
      <label for="parentesco">* Parentesco</label>
      <input type="text" class="form-control" name="parentesco" value="<?php if(empty($e->parentesco)){ $vacio=null; echo $vacio;} else{ echo $e->parentesco;} ?>"id="parentesco" placeholder="Parentesco"  onKeyUp="this.value = this.value.toUpperCase();" required>
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-5">
      <label for="tel_emergencia">* Teléfono</label>
      <input type="tel" maxlength="10" name="tel_emergencia" value="<?php if(empty($ne->numero)){ $vacio=null; echo $vacio;} else{ echo $ne->numero;} ?>" class="form-control" onkeypress="return numeros (event)" id="tel_emergencia" placeholder="Teléfono de Emergencia a 10 dígitos" pattern="([0-9]{3})([0-9]{7})" required>
    </div>
  </div>
    <div class="radio col-md-12">
      <label>* ¿Sufres alguna Alergia o Enfermedad?</label>

     <input type="radio" id="si_alergia" name="alergias" value="si_alergia" onclick="habilita_alergia()" required >
     <label for="si_actividad">Si</label>

     <input type="radio" id="no_alergia" name="alergias" value="no_alergia" onclick="deshabilita_alergia()" required>
     <label for="no_actividad">No</label>
     </div>

      <div class="form-row">
         <div class="form-group col-md-3">
        <label for="tipo_enfer">Tipo</label></br>
          <select class="inputA" name="tipo_enfer" id="tipo_enfer" disabled required >
        <option value="">Seleccione una opción</option>
        <option value="alergia">Alergia</option>
        <option value="enfermedad">Enfermedad</option>
  </select>
</br>
  <a data-toggle="modal" href="#act_externas">Registro de Enfermedades - Alergias</a>
        </div>
     <div class="form-group col-md-3">
       <label for="nombre_enf_ale">Nombre</label></br>
       <input type="text" name="nombre_enf_ale" class="inputA" id="nombre_enf_ale" placeholder="Nombre" disabled required>
     </div>
     <div class="form-group col-md-3">
       <label for="des_enf_ale">Descripción</label>
        <textarea type="text" class="inputA" name="des_enf_ale" id="des_enf_ale" placeholder="Descripción" disabled required></textarea>
     </div>
     <div class="form-group col-md-3">
       <label for="ind_enf_ale">Indicaciones</label>
       <textarea type="text" class="inputA" name="ind_enf_ale" id="ind_enf_ale" placeholder="Indicaciones " disabled required></textarea>
     </div>
     </div>

     <div class="radio col-md-12">
       <label>* ¿Sufres alguna Discapacidad?</label>
      <input type="radio" id="tipo_discapacidad" name="enfermedades" value="si_enfermedad" onclick="habilita_enfermedad()" required>
      <label for="si_enfermedad">Si</label>

      <input type="radio" id="no_enfermedad" name="enfermedades" value="no_enfermedad" onclick="deshabilita_enfermedad()" required>
      <label for="si_enfermedad">No</label>
      </div>

      <div class="form-row">
      <div class="form-group col-md-4">
        <label for="tipo_discapacidad">Tipo de Discapacidad</label>
        <input type="text" class="inputEnfermedad" name="tipo_discapacidad" value="<?php if(empty($dis->tipo)){ $vacio=null; echo $vacio;} else{ echo $dis->tipo;} ?>"id="tipo_discapacidad" placeholder="Tipo de Discapacidad" disabled required>
      </div>
  </div>
  <div class="form-group">
   <br>
   <div class="col-xs-offset-2 col-xs-9" align="center">
       <input type="submit" class="btn btn-primary" name="agregar" value="Actualizar">
   </div>
</div>
</form>

</div>
</br>

<div class="modal fade" tabindex="-1" role="dialog" id="act_externas" aria-labelledby="act_externa " aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    <div class="modal-content" a>
      <div class="modal-header" >
        <h5 class="modal-title" id="act_externa" style="color: #000000">Registro de Enfermedades Y/O Alergías</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container" id="font7">
        </br>
      <div class="table-responsive">
        <table class="table table-bordered table-info" style="color: #000000;" >
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Tipo</th>
              <th scope="col">Descripción</th>
              <th scope="col">Indicaciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($ea as $eas)
            <tr>
              <td>{!! $eas->nombre_enfermedadalergia !!}</td>
              <td>{!! $eas->tipo_enfermedadalergia !!}</td>
              <td>{!! $eas->descripcion !!}</td>
              <td>{!! $eas->indicaciones !!}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div>
  </div>
  @endsection

<script language="JavaScript">
    function habilita_alergia(){
        $(".inputA").removeAttr("disabled");
    }

    function deshabilita_alergia(){
        $(".inputA").attr("disabled","disabled");
    }
</script>

<script language="JavaScript">
    function habilita_enfermedad(){
        $(".inputEnfermedad").removeAttr("disabled");
    }

    function deshabilita_enfermedad(){
        $(".inputEnfermedad").attr("disabled","disabled");
    }
</script>


<script>
function numeros(e){
 key = e.keyCode || e.which;
 tecla = String.fromCharCode(key).toLowerCase();
 letras = " 0123456789";
 especiales = [8,37,39,46];

 tecla_especial = false
 for(var i in especiales){
if(key == especiales[i]){
  tecla_especial = true;
  break;
     }
 }

 if(letras.indexOf(tecla)==-1 && !tecla_especial)
     return false;
}
</script>
