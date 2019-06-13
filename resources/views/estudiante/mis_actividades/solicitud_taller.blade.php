<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_estudiante')
@section('title')
: Solicitudes
@endsection

@section('seccion')
 @include('flash-message')
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Solicitud de Taller</h1>
<div class="container" id="font4">
</br>                    <form method="POST" action="{{ route('solicitud_taller') }}">

                        @csrf

<div class="form-row">
  <div class="form-group col-md-5">
    <label for="nombre" >{{ __('Nombre del Solicitante') }}</label>
    <input id="nombre" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre">
          @error('nombre')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
      </span>
        @enderror
</div>

<div class="form-group col-md-1">
    <label for="edad" >{{ __('* Edad') }}</label>
    <input id="edad" type="tel" maxlength="2" class="form-control @error('edad') is-invalid @enderror" onkeypress="return numeros (event)" name="edad" autocomplete="edad" required autofocus>
        @error('edad')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
        @enderror
</div>

<div class="form-group col-md-3">
  <label for="semestre">* Semestre</label>
    <select name="semestre" id="semestre" required class="form-control">
    <option value="">Seleccione una opción</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>

        </select>
</div>

<div class="form-group col-md-3">
  <label for="tel_celular">* Teléfono Celular</label>
  <input type="tel"  class="form-control" id="tel_celular" maxlength="10"  onkeypress="return numeros (event)"  placeholder="Formato a 10 digitos"  pattern="([0-9]{3})([0-9]{7})" required>
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
      <select name="duracion" id="duracion" required class="form-control">
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
        <label for="hora_inicio">Hora de entrada (Tentativo)</label>
        <input type="time" class="form-control"  id="hora_inicio" required class="form-control" >
  </div>

<div class="form-group col-md-4">
    <label for="hora_fin">Hora de salida (tentativo)</label>
    <input type="time" class="form-control"  id="hora_fin" required class="form-control" >
</div>

</div>

<div class="form-row">
  <div class="form-group col-md-2">
      <label for="creditos" >{{ __('Créditos') }}</label>
      <input id="creditos" type="tel" maxlength="2" class="form-control @error('creditos') is-invalid @enderror" onkeypress="return numeros (event)" name="creditos" autocomplete="creditos" required autofocus>
          @error('creditos')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
          @enderror
  </div>
  <div class="form-group col-md-2">
      <label for="cupo" >{{ __('Cupo') }}</label>
      <input id="cupo" type="tel" maxlength="2" class="form-control @error('cupo') is-invalid @enderror" onkeypress="return numeros (event)" name="cupo" autocomplete="cupo" required autofocus>
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
