@extends('layouts.plantilla_planeacion')
@section('title')
:Carrera
@endsection
@section('seccion')
<h1 style="font-size: 2.0em; color: #000000;" align="center">Identificación de la Carrera</h1>
<div class="container" id="font4">
</br>                    <form method="POST" action="{{ route('gral_carrera') }}">
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

</div>

<div class="form-row">

<div class="form-group col-md-12">
   <label for="nombre_institucion" >{{ __('Nombre de la Institución a la que pertenece') }}</label>
   <input id="nombre_institucion" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre_institucion') is-invalid @enderror" name="nombre_institucion" value="{{ old('nombre_institucion') }}" required autocomplete="nombre_institucion">
                           @error('nombre_institucion')
   <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
   </span>
                         @enderror
 </div>
</div>

  <div class="form-row">
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
       <label for="nombre_facultad" >{{ __('Nombre de la Facultad') }}</label>
       <input id="nombre_facultad" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre_facultad') is-invalid @enderror" name="nombre_facultad" value="{{ old('nombre_facultad') }}" required autocomplete="nombre_facultad">
                               @error('nombre_facultad')
       <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
       </span>
                             @enderror
     </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="clave_carrera" >{{ __('Clave de la Carrera ') }}</label>
      <input id="clave_carrera" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('clave_carrera') is-invalid @enderror" name="clave_carrera" value="{{ old('clave_carrera') }}" required autocomplete="clave_carrera">
                                  @error('clave_carrera')
      <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
      </span>
                                  @enderror
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-12">
     <label for="nombre_carrera" >{{ __('Nombre de la Carrera') }}</label>
     <input id="nombre_carrera" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre_carrera') is-invalid @enderror" name="nombre_carrera" value="{{ old('nombre_carrera') }}" required autocomplete="nombre_carrera">
                             @error('nombre_carrera')
     <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
     </span>
                           @enderror
   </div>
</div>

<div class="form-row">
<div class="form-group col-md-4">
    <label for="modalidad">* Modalidad</label>
    <select name="modalidad" id="modalidad" required class="form-control">
    <option value="">Seleccione una opción</option>
    <option value="ESCOLARIZADO">ESCOLARIZADO</option>
    <option value="SEMIESCOLARIZADO">SEMIESCOLARIZADO</option>
    <option value="SEMIESCOLARIZADO">MIXTA</option>
    </select>
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
