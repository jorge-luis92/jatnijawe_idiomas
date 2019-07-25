<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_seguimiento_egresados')
@section('title')
: Egresados
@endsection
@section('seccion')
<h1 style="font-size: 2.0em; color: #000000;" align="center">Cuestionario al Egresado</h1>
<div class="container" id="font4">
</br>
<form method="POST" action="{{ route('cuestionario_egresado') }}">
                        @csrf

 <div class="form-row">
<div class="radio col-md-4" id="labels">
  <label>Títulado</label>

 <input type="radio" id="si_titulo" name="titulo" value="si_titulo" onclick="checar()" required >
 <label for="si_titulo">Si</label>

 <input type="radio" id="no_titulo" name="titulo" value="no_titulo" onclick="nochecar()" required>
 <label for="no_titulo">No</label>

</div>

<div class="form-group col-md-4" id="labels">
  <label for="fecha_expedicion">Fecha de Expedición del título</label>
  <input type="date" class="form-control" id="fecha_expedicion" >
</div>


  <div class="form-group col-md-4">
    <label for="modalidad_tit">Modalidad de Titulación</label>
      <select name="modalidad_tit" id="modalidad_tit" required class="form-control">
      <option value="">Seleccione una opción</option>
      <option value="escolarizada">TESIS</option>
      <option value="semiescolarizada">PROMEDIO</option>
      <option value="flexi">CENEVAL</option>
      <option value="flexi">EXPERIENCIA PROFESIONAL</option>
      <option value="flexi">OTRO</option>
          </select>
</div>

</div>

</br>
<div class="form-row">
  <div class="form-group col-md-12">
  <label for="motivos_post" >{{ __('En caso de no haberse titulado, ¿Cuales son los motivos de haber postergado la Titulación?') }}</label>
  <input id="motivos_post" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control @error('motivos_post') is-invalid @enderror"  name="motivos_post" autocomplete="motivos_post" autofocus>
    @error('motivos_post')
  <span class="invalid-feedback" role="alert">
  <strong>{{ $message }}</strong>
  </span>
                              @enderror
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
  <label for="bachillerato_origen" >{{ __('¿Cual es la razón de haber estudiado la Licenciatura?') }}</label>
  <input id="bachillerato_origen" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control @error('bachillerato_origen') is-invalid @enderror"  name="bachillerato_origen" autocomplete="bachillerato_origen" autofocus>
    @error('bachillerato_origen')
  <span class="invalid-feedback" role="alert">
  <strong>{{ $message }}</strong>
  </span>
                              @enderror
</div>
</div>

<div class="form-row">
<div class="radio col-md-8" id="labels">
 <label>¿Has realizado o actualmente realizas estudios de Posgrado?</label>

<input type="radio" id="si_titulo" name="titulo" value="si_titulo" onclick="checar()" required >
<label for="si_titulo">Si</label>

<input type="radio" id="no_titulo" name="titulo" value="no_titulo" onclick="nochecar()" required>
<label for="no_titulo">No</label>
</div>
</div>

<div class="form-group col-md-4">
  <label for="modalidad_tit">Específique</label>
    <select name="modalidad_tit" id="modalidad_tit" required class="form-control">
    <option value="">Seleccione una opción</option>
    <option value="escolarizada">DIPLOMADO</option>
    <option value="semiescolarizada">MAESTRÍA</option>
    <option value="flexi">DOCTORADO</option>

        </select>
</div>


<div class="form-row">
<div class="radio col-md-12" id="labels">
 <label>¿Has realizado o actualmente realizas otros estudios en un ámbito diferente al perfil?</label>

<input type="radio" id="si_titulo" name="titulo" value="si_titulo" onclick="checar()" required >
<label for="si_titulo">Si</label>

<input type="radio" id="no_titulo" name="titulo" value="no_titulo" onclick="nochecar()" required>
<label for="no_titulo">No</label>
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
  <label for="estudios_despues" >{{ __('Específique') }}</label>
  <input id="estudios_despues" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control @error('estudios_despues') is-invalid @enderror"  name="estudios_despues" autocomplete="estudios_despues" autofocus>
    @error('estudios_despues')
  <span class="invalid-feedback" role="alert">
  <strong>{{ $message }}</strong>
  </span>
                              @enderror
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-8">
    <label for="modalidad_tit">¿Cuál es el	Grado de satisfacción en cuanto a la formación recibida por la Licenciatura?</label>
      <select name="modalidad_tit" id="modalidad_tit" required class="form-control">
      <option value="">Seleccione una opción</option>
      <option value="excelente">EXCELENTE</option>
      <option value="bueno">BUENO</option>
      <option value="regular">REGULAR</option>
      <option value="malo">MALO</option>
          </select>
</div>
</div>

<div class="form-row">
<div class="radio col-md-4" id="labels">
 <label>¿Elegirías la misma institución?</label>

<input type="radio" id="si_titulo" name="titulo" value="si_titulo" onclick="checar()" required >
<label for="si_titulo">Si</label>

<input type="radio" id="no_titulo" name="titulo" value="no_titulo" onclick="nochecar()" required>
<label for="no_titulo">No</label>

</div>

</div>

<div class="form-group col-md-12">
<label for="la_misma" >{{ __('¿Por qué?') }}</label>
<input id="la_misma" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control @error('la_misma') is-invalid @enderror"  name="la_misma" autocomplete="la_misma" autofocus>
  @error('la_misma')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
                            @enderror
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
