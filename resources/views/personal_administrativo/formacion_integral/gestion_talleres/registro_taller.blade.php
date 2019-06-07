<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_formacion_integral')
@section('title')
: Registro Taller
@endsection

@section('seccion')
 @include('flash-message')
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Actividades Extracurriculares: Talleres</h1>
<div class="container" id="font5">
</br>
<form method="POST" action="">
@csrf
<div class="form-row">
    <div class="form-group col-md-8">
          <label for="nombre_ec" >{{ __('* Nombre del Taller') }}</label>
          <input id="nombre_ec" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre_ec') is-invalid @enderror" name="nombre_ec" value="{{ old('nombre_ec') }}" required autocomplete="nombre_ec">
            @error('nombre_ec')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
    </div>

    <div class="form-group col-md-1">
        <label for="creditos" >{{ __('* Créditos') }}</label>
        <input id="creditos" type="creditos" maxlength="1" class="form-control @error('creditos') is-invalid @enderror" onkeypress="return numeros (event)" name="creditos" autocomplete="creditos" required autofocus>
        @error('creditos')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group col-md-3">
        <label for="area">* Área</label>
        <select name="area" id="area" required class="form-control">
              <option value="">Seleccione una opción</option>
              <option value="MASCULINO">ACADÉMICA</option>
              <option value="FEMEMINO">CULTURAL</option>
              <option value="FEMEMINO">DEPORTIVA</option>
        </select>
    </div>

</div>

<div class="form-row">

    <div class="form-group col-md-3">
        <label for="modalidad">* Modalidad</label>
        <select name="modalidad" id="modalidad" required class="form-control">
        <option value="">Seleccione una opción</option>
        <option value="ESCOLARIZADO">ESCOLARIZADO</option>
        <option value="SEMIESCOLARIZADO">SEMIESCOLARIZADO</option>
        </select>
    </div>


    <div class="form-group col-md-2">
        <label for="cupo" >{{ __('* Cupo') }}</label>
        <input id="cupo" type="tel" maxlength="3" class="form-control @error('cupo') is-invalid @enderror" onkeypress="return numeros (event)" name="cupo" autocomplete="cupo" required autofocus>
        @error('cupo')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group col-md-7">
          <label for="lugar" >{{ __('* Lugar') }}</label>
          <input id="lugar" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('lugar') is-invalid @enderror" name="lugar" value="{{ old('lugar') }}" required autocomplete="lugar">
            @error('lugar')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
    </div>

  </div>


  <div class="form-row">
        <div class="form-group col-md-3">
        <label for="fecha_inicio" >{{ __('* Fecha de Inicio') }}</label>
        <input id="fecha_inicio" type="date" class="form-control @error('fecha_inicio') is-invalid @enderror" name="fecha_inicio" required>
        @error('fecha_inicio')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>

  <div class="form-group col-md-3">
       <label for="fecha_fin" >{{ __('* Fecha de Terminación') }}</label>
       <input id="fecha_fin" type="date" class="form-control @error('fecha_fin') is-invalid @enderror" name="fecha_fin" required>
       @error('fecha_fin')
       <span class="invalid-feedback" role="alert">
       <strong>{{ $message }}</strong>
       </span>
      @enderror
   </div>

  <div class="form-group col-md-3">
        <label for="hora_inicio">* Hora de entrada</label>
        <input type="time" class="form-control"  id="hora_inicio" required class="form-control" >
  </div>

<div class="form-group col-md-3">
    <label for="hora_fin">* Hora de salida</label>
    <input type="time" class="form-control"  id="hora_fin" required class="form-control" >
</div>
</div>

<div class="form-row">

  <div class="form-group col-md-4">
    <label for="dias_sem">* Días de la semana</label>
      <select name="dias_sem" id="dias_sem" required class="form-control">
     <option value="">Seleccione una opción</option>
     <option value="1">LUNES A VIERNES</option>
     <option value="2">SÁBADO</option>
     <option value="3">LUNES</option>
     <option value="4">MARTES </option>
     <option value="5">MIERCOLES</option>
     <option value="6">MIERCOLES</option>
     <option value="7">JUEVES</option>
     <option value="8">VIERENES</option>
</select>
</div>


<div class="form-group col-md-3">
    <label for="tutor">* Tutor</label>
    <select name="tutor" id="tutor" required class="form-control">
    <option value="">Seleccione una opción</option>
    <option value="">Tutor</option>
    </select>
</div>

  <div class="form-group col-md-5">
      <label for="materiales" >{{ __('* Materiales') }}</label>
      <input id="materiales" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('materiales') is-invalid @enderror" name="materiales" value="{{ old('materiales') }}" required autocomplete="materiales">
        @error('materiales')
      <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
      </span>
        @enderror
  </div>

</div>

<div class="form-group">
    <div class="col-xs-offset-2 col-xs-9" align="center">
        <button type="submit" class="btn btn-primary">
          {{ __('Registrar') }}
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
