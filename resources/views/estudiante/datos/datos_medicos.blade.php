<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_estudiante')
@section('title')
: Datos Médicos
@endsection

@section('seccion')
  <h1 style="font-size: 2.0em; color: #000000;" align="center"> Datos Médicos</h1>
<div class="container" id="font4">
</br>
<form  validate enctype="multipart/form-data" data-toggle="validator">
  <p style="font-size: 1.0em; color: #000000;"> Los Campos con un * son Obligatorios</p>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="jornada">* Tipo de Sangre</label>
        <select name="comunidad" required class="form-control">
      <option value="">Seleccione una opción</option>
      <option value="1">0 +(Positivo) u ORh +(Positivo) </option>
      <option value="2">0 -(Negativo) u ORh -(Negativo)</option>
      <option value="3">A +(Positivo) ó ARh +(Positivo)</option>
      <option value="4">A -(Negativo) ó ARh -(Negativo)</option>
      <option value="5">B +(Positivo) ó BRh +(Positivo)</option>
      <option value="6">B -(Negativo) u BRh -(Negativo)</option>
      <option value="7">AB +(Positivo) ó ABRh +(Positivo)</option>
      <option value="8">AB -(Negativo) ó ABRh -(Negativo)</option>
</select>
    </div>
    <div class="form-group col-md-4">
      <label for="tutor">* En caso de emergencia llamar a: </label>
      <input type="text" class="form-control" id="tutor" placeholder="Nombre" required>
    </div>
    <div class="form-group col-md-4">
      <label for="parentesco">* Parentesco</label>
      <input type="text" class="form-control" id="parentesco" placeholder="Parentesco" required>
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-5">
      <label for="tel_emergencia">* Teléfono</label>
      <input type="tel" maxlength="10"class="form-control" onkeypress="return numeros (event)" id="tel_emergencia" placeholder="Teléfono de Emergencia a 10 dígitos" pattern="([0-9]{3})([0-9]{7})" required>
    </div>
  </div>
    <div class="radio col-md-12">
      <label>* ¿Sufres alguna Alergia?</label>

     <input type="radio" id="si_alergia" name="alergias" value="si_alergia" onclick="habilita_alergia()" required >
     <label for="si_actividad">Si</label>

     <input type="radio" id="no_alergia" name="alergias" value="no_alergia" onclick="deshabilita_alergia()" required>
     <label for="no_actividad">No</label>
     </div>

      <div class="form-row">
     <div class="form-group col-md-4">
       <label for="nombre_alergia">Nombre Alergia</label>
       <input type="text" class="inputAlergia" id="nombre_alergia" placeholder="Nombre de Alergia" disabled required>
     </div>
     <div class="form-group col-md-4">
       <label for="descripcion_alergia">Descripción</label>
        <textarea class="inputAlergia" id="descripcion_alergia" placeholder="Descripción Alergia" disabled required></textarea>
     </div>
     <div class="form-group col-md-4">
       <label for="indicacion_alergia">Indicaciones</label>
       <textarea class="inputAlergia" id="indicacion_alergia" placeholder="Indicaciones Alergia" disabled required></textarea>
     </div>
     </div>

     <div class="radio col-md-12">
       <label>* ¿Sufres alguna Enfermedad?</label>
      <input type="radio" id="si_enfermedad" name="enfermedades" value="si_enfermedad" onclick="habilita_enfermedad()" required>
      <label for="si_enfermedad">Si</label>

      <input type="radio" id="no_enfermedad" name="enfermedades" value="no_enfermedad" onclick="deshabilita_enfermedad()" required>
      <label for="si_enfermedad">No</label>
      </div>

      <div class="form-row">
      <div class="form-group col-md-4">
        <label for="nombre_enfermedad">Nombre Enfermedad</label>
        <input type="text" class="inputEnfermedad" id="nombre_enfermedad" placeholder="Nombre Enfermedad" disabled required>
      </div>
      <div class="form-group col-md-4">
        <label for="descripcion_enfermedad">Descripción</label>
        <textarea class="inputEnfermedad" id="descripción" placeholder="Descripción Enfermedad" disabled required ></textarea>
              </div>
      <div class="form-group col-md-4">
        <label for="indicacion_enfermedad">Indicaciones</label>
        <textarea class="inputEnfermedad" id="indicacion_enfermedad" placeholder="Indicaciones Enfermedad" disabled required></textarea>
      </div>
  </div>
  <div class="form-group">
   <br>
   <div class="col-xs-offset-2 col-xs-9" align="center">
       <input type="submit" class="btn btn-primary" name="agregar" value="Actualizar">
      <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
   </div>
</div>
</form>

</div>
</br>

  @endsection







<script language="JavaScript">
    function habilita_alergia(){
        $(".inputAlergia").removeAttr("disabled");
    }

    function deshabilita_alergia(){
        $(".inputAlergia").attr("disabled","disabled");
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
