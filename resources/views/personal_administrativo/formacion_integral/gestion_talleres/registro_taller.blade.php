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
        <input type="time" class="form-control"  name="hora_inicio" id="hora_inicio" required class="form-control" >
  </div>

<div class="form-group col-md-3">
    <label for="hora_fin">* Hora de salida</label>
    <input type="time" class="form-control"  name="hora_fin" id="hora_fin" required class="form-control" >
</div>
</div>

<div  class="form-row">
  <!--<div class="form-group col-md-3">
   <label for="dias_sem">* Días de la semana</label>
    <div class="multiselect">
         <div class="selectBox" onclick="showCheckboxes()">
             <select name="dias_sem" id="dias_sem" class="form-control"  required>
                 <option>Selecciona una opcion</option>
             </select>
             <div class="overSelect"></div>
         </div>
         <div id="checkboxes" class="hide"  required>
             <label for="lunes"><input type="checkbox" name="dias_sem" value="Lunes" >Lunes</label>
             <label for="martes"><input type="checkbox" name="dias_sem" value="Martes">Martes</label>
             <label for="miercoles"><input type="checkbox" name="dias_sem" value="Miercoles">Miércoles</label>
             <label for="jueves"><input type="checkbox" name="dias_sem" value="Jueves">Jueves</label>
             <label for="viernes"><input type="checkbox" name="dias_sem" value="Viernes">Viernes</label>
             <label for="sabado"><input type="checkbox" name="dias_sem" value="Sábado"Sábado</label>

         </div>
     </div>
  </div>-->
  <div class="form-group col-md-3">
   <label for="dias_sem">* Días de la semana</label>
   <input id="dias_sem" type="text" name="dias_sem" onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('dias_sem') is-invalid @enderror"  value="{{ old('dias_sem') }}" required autocomplete="dias_sem">
     @error('dias_sem')
   <span class="invalid-feedback" role="alert">
   <strong>{{ $message }}</strong>
   </span>
     @enderror
   </div>


<div class="form-group col-md-3">
    <label for="tutor">* Tutor</label>
    <select name="tutor" id="tutor" required class="form-control">
    <option value="">Seleccione una opción</option>
    @foreach ($taller as $talleres)
    <option value="{!! $talleres->id_tutor !!}">{!! $talleres->nombre !!} {!! $talleres->apellido_paterno !!} {!! $talleres->apellido_materno !!}</option>
      @endforeach
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
