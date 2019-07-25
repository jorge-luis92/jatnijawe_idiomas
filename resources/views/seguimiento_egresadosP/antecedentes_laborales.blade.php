<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_seguimiento_egresados')
@section('title')
: Egresados
@endsection
@section('seccion')
<h1 style="font-size: 2.0em; color: #000000;" align="center">Antecedentes Laborales</h1>
<div class="container" id="font4">
</br>
<form method="POST" action="{{ route('antecedentes_laborales') }}">
                        @csrf

      <div class="form-row">
      <div class="radio col-md-12" id="labels">
      <label> ¿Actualmente Laboras?</label>

      <input type="radio" id="si_labora" name="si_labora" value="si_labora" onclick="checar()" required >
      <label for="si_labora">Si</label>

      <input type="radio" id="no_labora" name="no" value="no_labora" onclick="nochecar()" required>
      <label for="no_labora">No</label>

      </div>
      </div>

      <div class="form-row">
      <div class="form-group col-md-12">
      <label for="labor_actual_lugar" >{{ __('Lugar donde labora') }}</label>
       <input id="labor_actual_lugar" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control @error('labor_actual_lugar') is-invalid @enderror"  name="labor_actual_lugar" autocomplete="labor_actual_lugar" autofocus>
         @error('labor_actual_lugar')
       <span class="invalid-feedback" role="alert">
       <strong>{{ $message }}</strong>
       </span>
                                   @enderror
      </div>
      </div>

      <div class="form-row">
      <div class="form-group col-md-12">
      <label for="labor_actual" >{{ __('Función que desempeña') }}</label>
       <input id="labor_actual" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control @error('labor_actual') is-invalid @enderror"  name="labor_actual" autocomplete="labor_actual" autofocus>
         @error('labor_actual')
       <span class="invalid-feedback" role="alert">
       <strong>{{ $message }}</strong>
       </span>
                                   @enderror
      </div>
      </div>

      <div class="form-row">
      <div class="radio col-md-4" id="labels">
      <label> ¿El trabajo actual coincide con  los estudios realizados?</label>

      <input type="radio" id="coincide" name="coincide" value="coincide" onclick="checar()" required >
      <label for="coincide">Si</label>

      <input type="radio" id="no_coincide" name="lengua" value="no_coincide" onclick="nochecar()" required>
      <label for="no_coincide">No</label>

      </div>


    <div class="form-group col-md-4">
    <label for="ingreso_mensual" >{{ __('¿Cuál es su ingreso mensual?') }}</label>
    <input id="ingreso_mensual" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control @error('ingreso_mensual') is-invalid @enderror"  name="ingreso_mensual" autocomplete="ingreso_mensual" autofocus>
      @error('ingreso_mensual')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
                                @enderror
    </div>

    <div class="form-group col-md-4">
    <label for="antiguedad" >{{ __('Antigüedad') }}</label>
    <input id="antiguedad" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control @error('antiguedad') is-invalid @enderror"  name="antiguedad" autocomplete="antiguedad" autofocus>
      @error('antiguedad')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
                                @enderror
    </div>
  </div>

<div class="form-row">
  <div class="form-group col-md-10">
  <label for="trabajos_anteriores" >{{ __('Trabajos Anteriores') }}</label>
  <input id="trabajos_anteriores" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control @error('trabajos_anteriores') is-invalid @enderror"  name="trabajos_anteriores" autocomplete="trabajos_anteriores" autofocus>
    @error('trabajos_anteriores')
  <span class="invalid-feedback" role="alert">
  <strong>{{ $message }}</strong>
  </span>
                              @enderror
  </div>

<div class="form-group col-md-2" >
  <button name="button" style='width:80px;min-height:30px;margin:33px auto;' >Agregar</button>
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
