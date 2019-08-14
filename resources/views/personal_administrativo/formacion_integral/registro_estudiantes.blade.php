<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_formacion_integral')
@section('title')
: Registro Horas
@endsection

@section('seccion')
 @include('flash-message')
<h1 style="font-size: 1.5em; color: #000000;" align="center"> Registro de Horas</h1>
<h2 style="font-size: 1.2em; color: #000000;" align="center"> Estudiante: {{$estudiante_da->nombre}} {{$estudiante_da->apellido_paterno}} {{$estudiante_da->apellido_materno}} Matricula: {{$estudiante_da->matricula}}</h2>
<div class="container" id="font5">
</br>
<form method="POST" action="{{route ('horas_estudiante')}}">
@csrf
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="tutor">* Nombre de la Actividad</label>
      <select name="extra" id="tutor" required class="form-control">
      @foreach ($extra as $curricular)
      <option value="{!! $curricular->id_extracurricular !!}"> {!! $curricular->nombre_ec !!}</option>
        @endforeach
      </select>
  </div>

<div class="form-group col-md-6">
    <label for="tutor">* Tutor</label>
    <select name="tutor" id="tutor" required class="form-control">
    @foreach ($taller as $talleres)
    <option value="{!! $talleres->id_tutor !!}">{!! $talleres->nombre !!} {!! $talleres->apellido_paterno !!} {!! $talleres->apellido_materno !!}</option>
      @endforeach
    </select>
</div>

<input type="text" id="matricula" hidden name="matricula" value="{{$uno}}">

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
