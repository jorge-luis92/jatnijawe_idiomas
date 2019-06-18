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
    <input id="nombre" type="text" value="{{$u->nombre}} {{$u->apellido_paterno}} {{$u->apellido_materno}}" disabled onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre') is-invalid @enderror" name="nombre"  required autocomplete="nombre">
          @error('nombre')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
      </span>
        @enderror
</div>

<div class="form-group col-md-2">
  <input type="text"  hidden size=10  maxlength=10 name="fecha_nac"  onblur="calcular_edad();" id="fecha_nac">
    <label for="edad" >{{ __('* Edad') }}</label>
    <input id="edad" type="tel" maxlength="2"  value="{{$u->edad}}" disabled class="form-control @error('edad') is-invalid @enderror" onkeypress="return numeros (event)" name="edad" autocomplete="edad" required autofocus>
        @error('edad')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
        @enderror

</div>

<div class="form-group col-md-2" id="labels">
  <label for="semestre">Semestre</label>
  <input type="number" name="semestre" class="form-control" disabled id="semestre" value="{{$u->semestre}}" disabled>
</div>

<div class="form-group col-md-3">
  <label for="tel_celular">* Teléfono Celular</label>
  <input type="tel"  class="form-control" disabled id="tel_celular" maxlength="10" value="<?php if(empty($num_->numero)){ $vacio=null; echo $vacio;} else{ echo $num_->numero;} ?>" onkeypress="return numeros (event)"  placeholder=""  pattern="([0-9]{3})([0-9]{7})" required>
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

<script>
function calcular_edad()
{

 var form = document.getElementById('fecha_nac').value; //fecha de nacimiento en el formulario
//var fechaNacimiento = a.split("/");
  //  var form = document.getElementById('fecha_nac').value; //fecha de nacimiento en el formulario

  var fechaNacimiento = form.split("-");

    /*var dia = fechaNacimiento[0];
    var mes = fechaNacimiento[1];
    var ano = fechaNacimiento[2];
*/
var ano = fechaNacimiento[0];
var mes = fechaNacimiento[1];
var dia = fechaNacimiento[2];

    var fechaHoy = new Date(); // detecto la fecha actual y asigno el dia, mes y anno a variables distintas
    var ahora_ano = fechaHoy.getFullYear();
    var ahora_mes = fechaHoy.getMonth()+1;
    var ahora_dia = fechaHoy.getDate();

    // realizamos el calculo
    var edad = (ahora_ano + 1900) - ano;
    if ( ahora_mes < mes )
    {
        edad--;
    }
    if (mes == ahora_mes && ahora_dia < dia)
    {
        edad--;
    }
    if (edad > 1900)
    {
        edad -= 1900;
    }

    var meses=0;
    if(ahora_mes>mes)
        meses=ahora_mes-mes;
    if(ahora_mes<mes)
        meses=12-(mes-ahora_mes);

    //document.write("<br>"+edad);
    //document.write("<br>"+meses);
    document.getElementById('edad').value = edad;
    document.getElementById('mes').value = mes;
    //alert(edad);

}
//calcular_edad("01/09/1992");


</script>
