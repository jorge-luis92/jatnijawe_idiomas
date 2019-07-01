@extends('layouts.plantilla_planeacion')
@section('title')
:Escuela
@endsection
@section('seccion')
<h1 style="font-size: 2.0em; color: #000000;" align="center">Identificación de la Escuela</h1>
<div class="container" id="font4">
</br>                    <form method="POST" action="{{ route('gral_escuela') }}">
                        @csrf

   <div class="form-row">

     <div class="form-group col-md-6">
        <label for="clave_institucion" >{{ __('Clave de la Institución') }}</label>
        <input id="clave_institucion" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('clave_institucion') is-invalid @enderror" name="clave_institucion" value="{{ old('clave_institucion') }}" required autocomplete="clave_institucion">
                                @error('clave_institucion')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
        </span>
                              @enderror
      </div>

  <div class="form-group col-md-6">
    <label for="clave_escuela" >{{ __('Clave de la escuela ') }}</label>
    <input id="clave_escuela" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('clave_escuela') is-invalid @enderror" name="clave_escuela" value="{{ old('clave_escuela') }}" required autocomplete="clave_escuela">
                                @error('clave_escuela')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
                                @enderror
  </div>
</div>

  <div class="form-row">

    <div class="form-group col-md-12">
       <label for="nombre_escuela" >{{ __('Nombre de la escuela') }}</label>
       <input id="nombre_escuela" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre_escuela') is-invalid @enderror" name="nombre_escuela" value="{{ old('nombre_escuela') }}" required autocomplete="nombre_escuela">
                               @error('nombre_escuela')
       <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
       </span>
                             @enderror
     </div>
  </div>
    <div class="form-row">

    <div class="form-group col-md-12">
    <label for="vialidad_principal" >{{ __('Vialidad Principal') }}</label>
    <input id="vialidad_principal"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control @error('vialidad_principal') is-invalid @enderror" name="vialidad_principal" value="{{ old('vialidad_principal') }}" required autocomplete="vialidad_principal">
                  @error('vialidad_principal')
   <span class="invalid-feedback" role="alert">
   <strong>{{ $message }}</strong>
  </span>
                                @enderror
  </div>

                      </div>

   <div class="form-row">

      <div class="form-group col-md-6">
      <label for="num_exterior" >{{ __('Número Exterior') }}</label>
      <input id="num_exterior" type="tel" maxlength="6" class="form-control @error('num_exterior') is-invalid @enderror" onkeypress="return numeros (event)" name="num_exterior" autocomplete="num_exterior" required autofocus>
                                @error('num_exterior')
      <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
                                @enderror
      </div>

      <div class="form-group col-md-6">
      <label for="num_interior" >{{ __('Número Interior ') }}</label>
      <input id="num_interior"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control @error('num_interior') is-invalid @enderror" name="num_interior" value="{{ old('num_interior') }}" required autocomplete="num_interior">
                    @error('num_interior')
     <span class="invalid-feedback" role="alert">
     <strong>{{ $message }}</strong>
    </span>
                                  @enderror
    </div>
  </div>
     <div class="form-row">
       <div class="form-group col-md-12">
       <label for="vialidad_derecha" >{{ __('Vialidad Derecha') }}</label>
       <input id="vialidad_derecha"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control @error('vialidad_derecha') is-invalid @enderror" name="vialidad_derecha" value="{{ old('vialidad_derecha') }}" required autocomplete="vialidad_derecha">
                     @error('vialidad_derecha')
      <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
     </span>
                                   @enderror
     </div>
</div>
<div class="form-row">
  <div class="form-group col-md-12">
  <label for="vialidad_izquierda" >{{ __('Vialidad Izquierda') }}</label>
  <input id="vialidad_izquierda"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control @error('vialidad_izquierda') is-invalid @enderror" name="vialidad_izquierda" value="{{ old('vialidad_izquierda') }}" required autocomplete="vialidad_izquierda">
                @error('vialidad_izquierda')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
</span>
                              @enderror
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
  <label for="vialidad_posterior" >{{ __('Vialidad Posterior') }}</label>
  <input id="vialidad_posterior"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control @error('vialidad_posterior') is-invalid @enderror" name="vialidad_posterior" value="{{ old('vialidad_posterior') }}" required autocomplete="vialidad_posterior">
                @error('vialidad_posterior')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
</span>
                              @enderror
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-8">
  <label for="asentamiento_humano" >{{ __('Asentamiento Humano') }}</label>
  <input id="asentamiento_humano"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control @error('asentamiento_humano') is-invalid @enderror" name="asentamiento_humano" value="{{ old('asentamiento_humano') }}" required autocomplete="asentamiento_humano">
                @error('asentamiento_humano')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
</span>
                              @enderror
</div>

<div class="form-group col-md-4">
    <label for="cp" >{{ __('Código Postal') }}</label>
        <input id="cp" maxlength="12" type="tel" class="form-control @error('cp') is-invalid @enderror" onkeypress="return numeros (event)" name="cp"  autocomplete="cp" autofocus required>
        @error('cp')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
</div>
</div>
<div class="form-row">
  <div class="form-group col-md-12">
  <label for="localidad" >{{ __('Localidad') }}</label>
  <input id="localidad"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control @error('localidad') is-invalid @enderror" name="localidad" value="{{ old('localidad') }}" required autocomplete="localidad">
                @error('localidad')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
</span>
                              @enderror
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
  <label for="municipio" >{{ __('Municipio o Delegación') }}</label>
  <input id="municipio"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control @error('municipio') is-invalid @enderror" name="municipio" value="{{ old('municipio') }}" required autocomplete="municipio">
                @error('municipio')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
</span>
                              @enderror
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
  <label for="entidad_federativa" >{{ __('Entidad Federativa') }}</label>
  <input id="entidad_federativa"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control @error('entidad_federativa') is-invalid @enderror" name="entidad_federativa" value="{{ old('entidad_federativa') }}" required autocomplete="entidad_federativa">
                @error('entidad_federativa')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
</span>
                              @enderror
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-4">
      <label for="telefono" >{{ __('Teléfono') }}</label>
          <input id="telefono" maxlength="10" type="tel" class="form-control @error('telefono') is-invalid @enderror" onkeypress="return numeros (event)" name="telefono"  autocomplete="telefono" autofocus required>
          @error('telefono')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>
  <div class="form-group col-md-2">
      <label for="extension" >{{ __('Extensión') }}</label>
          <input id="extension" maxlength="5" type="tel" class="form-control @error('extension') is-invalid @enderror" onkeypress="return numeros (event)" name="extension"  autocomplete="extension" autofocus required>
          @error('extension')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
  <label for="dependencia_normativa" >{{ __('Dependencia Normativa') }}</label>
  <input id="dependencia_normativa"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control @error('dependencia_normativa') is-invalid @enderror" name="dependencia_normativa" value="{{ old('dependencia_normativa') }}" required autocomplete="dependencia_normativa">
                @error('dependencia_normativa')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
</span>
                              @enderror
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
  <label for="institucion_perteneciente" >{{ __('Nombre de la Institución a la que pertenece') }}</label>
  <input id="institucion_perteneciente"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control @error('institucion_perteneciente') is-invalid @enderror" name="institucion_perteneciente" value="{{ old('institucion_perteneciente') }}" required autocomplete="institucion_perteneciente">
                @error('institucion_perteneciente')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
</span>
                              @enderror
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
  <label for="director" >{{ __('Nombre del Director de la Escuela') }}</label>
  <input id="director"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control @error('director') is-invalid @enderror" name="director" value="{{ old('director') }}" required autocomplete="director">
                @error('director')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
</span>
                              @enderror
</div>
</div>

<div class="form-row">

  <div class="form-group col-md-6">
      <label for="pagina_web" >{{ __('Página Web de la Escuela') }}</label>
          <input id="pagina_web" type="email" class="form-control @error('pagina_web') is-invalid @enderror" name="pagina_web" value="{{ old('pagina_web') }}" required autocomplete="pagina_web">
          @error('pagina_web')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>
                        <div class="form-group col-md-6">
                            <label for="email" >{{ __('Correo eléctronico del responsable ') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
  </div>

                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-9" align="center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
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
