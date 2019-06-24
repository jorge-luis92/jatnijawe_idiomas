<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_formacion_integral')
@section('title')
: Registro Horas
@endsection

@section('seccion')
 @include('flash-message')
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Horas</h1>
<div class="container" id="font5">
</br>
<form method="POST" action="registrar_taller">
@csrf
<div class="form-row">
    <div class="form-group col-md-7">
          <label for="nombre_ec" >{{ __('* Nombre del Taller') }}</label>
          <input id="nombre_ec" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre_ec') is-invalid @enderror" name="nombre_ec" value="{{ old('nombre_ec') }}" required autocomplete="nombre_ec">
            @error('nombre_ec')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
    </div>

    <div class="form-group col-md-2">
        <label for="creditos" >{{ __('* Créditos') }}</label>
        <input id="creditos" type="creditos" maxlength="2" class="form-control @error('creditos') is-invalid @enderror" onkeypress="return numeros (event)" name="creditos" autocomplete="creditos" required autofocus>
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
              <option value="ACADEMICA">ACADÉMICA</option>
              <option value="CULTURAL">CULTURAL</option>
              <option value="DEPORTIVA">DEPORTIVA</option>
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


<div class="form-group col-md-4">
    <label for="tutor">* Tutor</label>
    <select name="tutor" id="tutor" required class="form-control">
    @foreach ($taller as $talleres)
    <option value="{!! $talleres->id_tutor !!}">{!! $talleres->nombre !!} {!! $talleres->apellido_paterno !!} {!! $talleres->apellido_materno !!}</option>
      @endforeach
    </select>
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
function showCheckboxes() {
    var checkboxes = document.getElementById("checkboxes");
    if(checkboxes.classList.contains("hide")) {
        checkboxes.classList.remove("hide");
    } else {
        checkboxes.classList.add("hide");
    }
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
