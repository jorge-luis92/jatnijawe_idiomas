<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_formacion_integral')
@section('title')
: Registro Tutor
@endsection

@section('seccion')
 @include('flash-message')
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Tutores</h1>
<div class="container" id="font4">
</br>                    <form method="POST" action="{{ route('registrar_tutor_fi')}}">
                        @csrf

                         <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="nombre" >{{ __('* Nombre(s)') }}</label>
                                <input id="nombre" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}"  autocomplete="nombre">
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="apellido_paterno" >{{ __('* Apellido Paterno') }}</label>
                                  <input id="apellido_paterno" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('apellido_paterno') is-invalid @enderror" name="apellido_paterno" value="{{ old('apellido_paterno') }}"  autocomplete="apellido_paterno">
                                @error('apellido_paterno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="apellido_materno" >{{ __('Apellido Materno') }}</label>
                                  <input id="apellido_materno"  onKeyUp="this.value = this.value.toUpperCase()"  type="text" class="form-control @error('apellido_materno') is-invalid @enderror" name="apellido_materno" value="{{ old('apellido_materno') }}" autocomplete="apellido_materno">
                                @error('apellido_materno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
</div>
                                <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="curp" >{{ __('* CURP') }}</label>
                                  <input id="curp" type="text" minlength="18" maxlength="18"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('curp') is-invalid @enderror" name="curp" value="{{ old('curp') }}"  autocomplete="curp">
                                @error('curp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group col-md-3">
                            <label for="fecha_nacimiento" >{{ __('* Fecha nacimiento') }}</label>
                                  <input id="fecha_nacimiento" type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" >
                                @error('fecha_nacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="form-group col-md-2">
                            <label for="edad" >{{ __('* Edad') }}</label>
                                <input id="edad" type="tel" maxlength="2" class="form-control @error('edad') is-invalid @enderror" onkeypress="return numeros (event)" name="edad" autocomplete="edad"  autofocus>
                                @error('edad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group col-md-3">
                          <label for="genero">* Género</label>
                            <select name="genero" id="genero" class="form-control">
                          <option value="">Seleccione una opción</option>
                          <option value="MASCULINO">MASCULINO</option>
                          <option value="FEMEMINO">FEMEMINO</option>
                    </select>
                        </div>
</div>

<!--<hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">-->

<div class="form-row">
  <div class="form-group col-md-3">
    <label for="grado_estudios">Grado de Estudios</label>
      <select name="grado_estudios" id="grado_estudios"  class="form-control">
      <option value="">Seleccione una opción</option>
      <option value="licenciatura">LICENCIATURA</option>
      <option value="maestria">MAESTRÍA</option>
      <option value="doctorado">DOCTORADO</option>
      <option value="otro">OTRO</option>
          </select>
  </div>
  <div class="form-group col-md-3">
      <label for="procendencia_interna" >{{ __('* Procedencia Interna') }}</label>
            <input id="procedencia_interna" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('procendencia_interna') is-invalid @enderror" name="procedencia_interna" value="{{ old('procedencia_interna') }}" autocomplete="procedencia_interna">
          @error('procedencia_interna')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>
  <div class="form-group col-md-3">
      <label for="procedencia_externa" >{{ __('* Procedencia Externa') }}</label>
            <input id="procedencia_externa" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('procedencia_externa') is-invalid @enderror" name="procedencia_externa" value="{{ old('procedencia_externa') }}"  autocomplete="procedencia_externa">
          @error('procedencia_externa')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>

     <div class="form-group col-md-3">
       <label for="tel_celular">* Teléfono Celular</label>
       <input type="tel"  class="form-control" name="tel_celular" id="tel_celular"  maxlength="10"  onkeypress="return numeros (event)"  placeholder="Formato a 10 digitos"  pattern="([0-9]{3})([0-9]{7})" >
     </div>

  <!--<div class="form-group col-md-4">
        <label for="email" >{{ __('E-Mail Address') }}</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>-->
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
                </div>
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
