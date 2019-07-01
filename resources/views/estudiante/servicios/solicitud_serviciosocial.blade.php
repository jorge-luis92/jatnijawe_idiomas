<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_estudiante')
@section('title')
: Solicitudes
@endsection

@section('seccion')
 @include('flash-message')
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Solicitud de Servicio Social</h1>
<div class="container" id="font4">
</br>                    <form method="POST" action="{{ route('solicitud_servicioSocial') }}">

                        @csrf

<div class="form-row">

  <div class="form-group col-md-2">
      <label for="matricula" >{{ __('* Matricula') }}</label>
          <input id="matricula" maxlength="12" type="tel" value="{{$u->matricula}}" class="form-control @error('matricula') is-invalid @enderror" onkeypress="return numeros (event)" name="matricula"  autocomplete="matricula" autofocus required disabled>
          @error('matricula')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>

  <div class="form-group col-md-2">
    <label for="estatus"> Estatus</label>
      <select name="estatus" id="estatus" required class="form-control">
    <option value="">Seleccione una opción</option>
    <option value="regular">ESTUDIANTE</option>
    <option value="irregular">PASANTE</option>
</select>
  </div>

  <div class="form-group col-md-4">
    <label for="carrera" >{{ __('Carrera') }}</label>
    <input id="carrera" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('carrera') is-invalid @enderror" name="carrera" value="{{ old('carrera') }}" required autocomplete="carrera">
          @error('carrera')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
      </span>
        @enderror
  </div>

  <div class="form-group col-md-4">
    <label for="facultad" >{{ __('Facultad') }}</label>
    <input id="facultad" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('facultad') is-invalid @enderror" name="facultad" value="{{ old('facultad') }}" required autocomplete="facultad">
          @error('facultad')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
      </span>
        @enderror
  </div>

</div>

<div class="form-row">
  <div class="form-group col-md-6">
      <label for="nombre" >{{ __('Nombre del Estudiante') }}</label>
      <input id="nombre" type="text"disabled  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{$u->nombre}} {{$u->apellido_paterno}} {{$u->apellido_materno}}" required autocomplete="nombre">
            @error('nombre')
      <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
        </span>
          @enderror
  </div>

<div class="form-group col-md-4">
    <label for="curp" >{{ __('* CURP') }}</label>
          <input id="curp" type="text" minlength="18" maxlength="18"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('curp') is-invalid @enderror" name="curp" value="{{ old('curp') }}" required autocomplete="curp">
        @error('curp')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
</div>

<div class="form-group col-md-2">
    <label for="edad" >{{ __('* Edad') }}</label>
        <input id="edad" type="tel" maxlength="2" class="form-control @error('edad') is-invalid @enderror" onkeypress="return numeros (event)" name="edad" autocomplete="edad" required autofocus>
        @error('edad')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
</div>
</div>

<div class="form-row">

<div class="form-group col-md-6">
      <label for="direccion_actual" >{{ __('Dirección Actual') }}</label>
      <input id="direccion_actual" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('direccion_actual') is-invalid @enderror" name="direccion_actual" value="{{ old('direccion_actual') }}" required autocomplete="nombre">
            @error('direccion_actual')
      <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
        </span>
          @enderror
</div>

<div class="form-group col-md-3">
  <label for="tel_celular">* Teléfono Celular</label>
  <input type="tel"  class="form-control" id="tel_celular" maxlength="10"  onkeypress="return numeros (event)"  placeholder="Formato a 10 digitos"  pattern="([0-9]{3})([0-9]{7})" required>
</div>

<div class="form-group col-md-3">
    <label for="email" >{{ __('Correo') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
</div>
</div>

<div class="form-row">

  <div class="form-group col-md-3">
      <label for="fecha_ingreso" >{{ __(' Fecha de Ingreso') }}</label>
            <input id="fecha_ingreso" type="date" class="form-control @error('fecha_ingreso') is-invalid @enderror" name="fecha_ingreso" required autocomplete="fecha_ingreso">
          @error('fecha_ingreso')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>

  <div class="form-group col-md-3">
      <label for="anio" >{{ __('Año') }}</label>
          <input id="anio" type="text" maxlength="1" onKeyUp="this.value = this.value.toUpperCase();" class="form-control @error('anio') is-invalid @enderror"  name="anio" autocomplete="anio" autofocus>
          @error('anio')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>

  <div class="form-group col-md-3">
    <label for="semestre">Semestre</label>
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
      <label for="avance" >{{ __('Porcentaje de Avance') }}</label>
          <input id="avance" type="text" maxlength="1" onKeyUp="this.value = this.value.toUpperCase();" class="form-control @error('avance') is-invalid @enderror"  name="avance" autocomplete="avance" autofocus>
          @error('grupo')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>

</div>

<hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">
</br>

<div class="form-row">

<div class="form-group col-md-12">
  <label for="institucion" >{{ __('Nombre del la Institución o Dependencia donde Realizará Servicio Social:') }}</label>
    <input id="institucion" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('institucion') is-invalid @enderror" name="institucion" value="{{ old('institucion') }}" required autocomplete="institucion">
        @error('institucion')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
      @enderror
  </div>
</div>
<div class="form-row">
  <div class="form-group col-md-8">
    <label for="responsable" >{{ __('Nombre del Titular de la Dependencia(A quien va dirigido el oficio de Presentación)') }}</label>
      <input id="responsable" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('institucion') is-invalid @enderror" name="responsable" value="{{ old('responsable') }}" required autocomplete="responsable">
          @error('institucion')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
        @enderror
    </div>
    <div class="form-group col-md-4">
      <label for="cargo_responsable" >{{ __('Cargo del Titular') }}</label>
        <input id="cargo_responsable" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('cargo_responsable') is-invalid @enderror" name="cargo_responsable" value="{{ old('cargo_responsable') }}" required autocomplete="cargo_responsable">
            @error('cargo_responsable')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
          @enderror
      </div>
</div>



  <div class="form-row">
<div class="form-group col-md-2">
    <label for="fecha" >{{ __('Fecha') }}</label>
          <input id="fecha" type="date" class="form-control @error('fecha') is-invalid @enderror" name="fecha" required>
        @error('fecha')
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
