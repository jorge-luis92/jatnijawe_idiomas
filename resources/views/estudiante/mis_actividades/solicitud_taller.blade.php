<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_estudiante')
@section('title')
: Solicitudes
@endsection

@section('seccion')
 @include('flash-message')
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Solicitud de Taller</h1>
<div class="container" id="font4">
</br>                    <form method="POST" action="{{ route('solicitud_taller_enviar') }}">

                        @csrf

<div class="form-row">
  <div class="form-group col-md-5">
    <label for="nombre" >{{ __('Nombre del Solicitante') }}</label>
    <input id="nombre" type="text" value="{{$u->nombre}} {{$u->apellido_paterno}} {{$u->apellido_materno}}" disabled onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre') is-invalid @enderror" name="nombre"  required autocomplete="nombre">
          @error('nombre')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
      </span>
        @enderror
</div>

<div class="form-group col-md-2">
  <input type="text"  hidden size=10  maxlength=10 name="fecha_nac"  onblur="calcular_edad();" id="fecha_nac">
    <label for="edad" >{{ __('* Edad') }}</label>
    <input id="edad" type="tel" maxlength="2"  value="{{$u->edad}}" disabled class="form-control @error('edad') is-invalid @enderror" onkeypress="return numeros (event)" name="edad" autocomplete="edad" required autofocus>
        @error('edad')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
        @enderror

</div>

<div class="form-group col-md-2" id="labels">
  <label for="semestre">Semestre</label>
  <input type="number" name="semestre" class="form-control" disabled id="semestre" value="{{$u->semestre}}" disabled>
</div>

<div class="form-group col-md-3">
  <label for="tel_celular">* Teléfono Celular</label>
  <input type="tel" name='tel_celular' class="form-control" disabled id="tel_celular" maxlength="10" value="<?php if(empty($num_c->numero)){ $vacio=null; echo $vacio;} else{ echo $num_c->numero;} ?>" onkeypress="return numeros (event)"  placeholder=""  pattern="([0-9]{3})([0-9]{7})" required>
</div>



</div>

<div class="form-row">

<div class="form-group col-md-12">
  <label for="nombre_taller" >{{ __('Nombre del Taller') }}</label>
    <input id="nombre_taller" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre_taller') is-invalid @enderror" name="nombre_taller" value="{{ old('nombre_taller') }}" required autocomplete="nombre_taller">
        @error('nombre_taller')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
      @enderror
  </div>
</div>

<div class="form-row">
<div class="form-group col-md-12">
  <label for="descripcion" >{{ __('Descripción') }}</label>
    <input id="descripcion" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="descripcion">
    @error('descripcion')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
</div>

<div class="form-row">
<div class="form-group col-md-12">
    <label for="objetivos" >{{ __('Objetivos') }}</label>
    <input id="objetivos"  onKeyUp="this.value = this.value.toUpperCase()"  type="text" class="form-control @error('objetivos') is-invalid @enderror" name="objetivos" value="{{ old('objetivos') }}" autocomplete="objetivos">
    @error('objetivos')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
</div>

<div class="form-row">
<div class="form-group col-md-12">
    <label for="justificacion" >{{ __('Justificación') }}</label>
    <input id="justificacion"  onKeyUp="this.value = this.value.toUpperCase()"  type="text" class="form-control @error('justificacion') is-invalid @enderror" name="justificacion" value="{{ old('justificacion') }}" autocomplete="justificacion">
    @error('justificacion')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
</div>

<div class="form-row">

  <div class="form-group col-md-4">
    <label for="duracion">Duración</label>
      <select name="duracion" id="duracion" required class="form-control" oninput="validarTipo(this)" >
    <option value="">Seleccione una opción</option>
    <option value="SEMESTRAL">SEMESTRAL (35 HORAS)</option>
    <option value="4MESES">4 MESES (30 HORAS)</option>
    <option value="3MESES">3 MESES (25 HORAS)</option>
    <option value="2MESES">2 MESES (20 HORAS)</option>
    <option value="1MESES">1 MES (15 HORAS)</option>
    <option value="CHARLA">CHARLA (2-15 HORAS)</option>
  </select>
  </div>

<div class="form-group col-md-4">
    <label for="hora_inicio">Hora de entrada(tentativo)</label>
        <input class="timepicker form-control" type="text" id="hora_inicio" name="hora_inicio" required>
    </div>



<div class="form-group col-md-4">
    <label for="hora_fin">Hora de salida (tentativo)</label>
      <input class="timepicker form-control" type="text" id="hora_fin" name="hora_fin" required>
</div>
<script type="text/javascript">
    $('.timepicker').datetimepicker({
        format: 'HH:mm'
    });
</script>
</div>

<div class="form-row">
  <div class="form-group col-md-2">
      <label for="creditos" >{{ __('Créditos') }}</label>
      <input id="creditos" type="tel" maxlength="2" disabled class="form-control @error('creditos') is-invalid @enderror" onkeypress="return numeros (event)" name="creditos" autocomplete="creditos" required autofocus>
          @error('creditos')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
          @enderror
  </div>
  <div class="form-group col-md-2">
      <label for="cupo" >{{ __('Cupo') }}</label>
      <input id="cupo" type="tel" maxlength="3"  class="form-control @error('cupo') is-invalid @enderror" onkeypress="return numeros (event)" name="cupo" autocomplete="cupo" required autofocus>
          @error('cupo')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
          @enderror
  </div>

  <div class="form-group col-md-8">
      <label for="materiales" >{{ __('Materiales') }}</label>
      <input id="materiales"  onKeyUp="this.value = this.value.toUpperCase()"  type="text" class="form-control @error('materiales') is-invalid @enderror" name="materiales" value="{{ old('materiales') }}" autocomplete="materiales">
      @error('materiales')
      <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
      </span>
      @enderror
  </div>

</div>

<div class="form-row">
<div class="form-group col-md-12">
    <label for="propuesta" >{{ __('Propuesta de Proyecto Final') }}</label>
    <input id="propuesta"  onKeyUp="this.value = this.value.toUpperCase()"  type="text" class="form-control @error('propuesta') is-invalid @enderror" name="propuesta" value="{{ old('propuesta') }}" autocomplete="propuesta">
    @error('propuesta')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
</div>


                       <div class="form-group">
                           <div class="col-xs-offset-2 col-xs-9" align="center">
                               <button type="submit" class="btn btn-primary">
                                   {{ __('Enviar solicitud') }}
                               </button>
                           </div>
                       </div>
                    </form>
                </div>

@endsection

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

<script>
function validarTipo(input) {
  var form = document.getElementById('duracion').value;
  if(form == ''){
  document.getElementById('creditos').value = 0 ;
}
  if(form == 'SEMESTRAL'){
  document.getElementById('creditos').value = 35 ;
}
if(form == '4MESES'){
document.getElementById('creditos').value = 30 ;
}
if(form == '3MESES'){
document.getElementById('creditos').value = 25 ;
}
if(form == '2MESES'){
document.getElementById('creditos').value = 20 ;
}
if(form == '1MES'){
document.getElementById('creditos').value = 15 ;
}
if(form == 'CHARLA'){
document.getElementById('creditos').value = 2+" a " +10;
}
}


</script>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
