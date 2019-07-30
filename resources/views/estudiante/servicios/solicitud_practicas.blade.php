<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_estudiante')
@section('title')
: Solicitudes
@endsection

@section('seccion')
 @include('flash-message')
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Solicitud de Prácticas Profesionales </h1>
<div class="container" id="font7">
<h2 style="font-size: 1.2em; color: #000000;" align="left"><strong>Datos del Estudiante</strong></h2>
                  <form method="POST" action="{{ route('solicitud_practicasP') }}">

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

  <div class="form-group col-md-2" id="labels">
    <label for="semestre">Semestre</label>
    <input type="number" name="semestre" value="{{$u->semestre}}" class="form-control" id="semestre" value="" disabled>
  </div>

  <div class="form-group col-md-1">
      <label for="grupo" >{{ __('Grupo') }}</label>
      <input id="grupo" type="tel" value="{{$u->grupo}}" maxlength="2" class="form-control @error('grupo') is-invalid @enderror" onkeypress="return numeros (event)" name="grupo" autocomplete="grupo" required autofocus disabled>
          @error('grupo')
      <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
      </span>
          @enderror
  </div>

  <div class="form-group col-md-4">
    <label for="carrera" >{{ __('Carrera') }}</label>
    <input id="carrera" type="text" disabled  onKeyUp="this.value = this.value.toUpperCase()"  class="form-control @error('carrera') is-invalid @enderror" name="carrera"  required autocomplete="carrera">
          @error('carrera')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
      </span>
        @enderror
  </div>

  <div class="form-group col-md-3" id="labels">
    <label for="modalidad">Modalidad</label>
    <input type="text" name="modalidad" value="{{$u->modalidad}}" class="form-control" id="modalidad" value="" disabled>
  </div>
</div>

<div class="form-row">
<div class="form-group col-md-5">
    <label for="nombre" >{{ __('Nombre del Estudiante') }}</label>
    <input id="nombre" type="text"disabled  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{$u->nombre}} {{$u->apellido_paterno}} {{$u->apellido_materno}}" required autocomplete="nombre">
          @error('nombre')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
      </span>
        @enderror
</div>

<div class="form-group col-md-4">
    <label for="curp" >{{ __('CURP') }}</label>
          <input id="curp" type="text"  minlength="18" maxlength="18" onKeyUp="this.value = this.value.toUpperCase()" disabled class="form-control @error('curp') is-invalid @enderror" name="curp" value="{{ $u->curp}}" required autocomplete="curp">
        @error('curp')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
</div>

<div class="form-group col-md-3">
    <label for="edad" >{{ __('* Edad') }}</label>
        <input id="edad" type="tel" disabled maxlength="2"  value="{{$u->edad}}" class="form-control @error('edad') is-invalid @enderror" onkeypress="return numeros (event)" name="edad" autocomplete="edad" required autofocus>
        @error('edad')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
</div>
</div>

<div class="form-row">

<div class="form-group col-md-12">
      <label for="direccion_actual" >{{ __('Dirección Actual') }}</label>
      <textarea id="direccion_actual" disabled  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('direccion_actual') is-invalid @enderror" name="direccion_actual"  required autocomplete="nombre"><?php if(empty($d->vialidad_principal)){ $vacio=null; echo $vacio;} else {echo "CALLE: ".$d->vialidad_principal." #".$d->num_exterior.", C.P: ".$d->cp.", COLONIA: ".$d->localidad." MUNICIPIO: ".$d->municipio." CIUDAD: ".$d->entidad_federativa;}?> </textarea>
            @error('direccion_actual')
      <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
        </span>
          @enderror
</div>
</div>


<div class="form-row">
  <div class="form-group col-md-4">
    <label for="tel_celular">* Teléfono Celular</label>
    <input type="text"  class="form-control" disabled value="<?php if(empty($cel->numero)){ $vacio=null; echo $vacio;} else{ echo $cel->numero;} ?>"  id="tel_celular"  >
  </div>

  <div class="form-group col-md-4">
      <label for="email" >{{ __('Correo') }}</label>
          <input id="email" disabled type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email">
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>
  <div class="form-group col-md-4">
      <label for="fecha_ingreso" >{{ __(' Fecha de Ingreso') }}</label>
            <input id="fecha_ingreso" disabled type="date" value="{{$u->fecha_ingreso}}"  class="form-control" name="fecha_ingreso" required >
          @error('fecha_ingreso')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
  </div>
</div>

<hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">
<h3 style="font-size: 1.2em; color: #000000;" align="left"><strong>Datos de la Empresa</strong></h3>
<div class="form-row">

<div class="form-group col-md-12">
  <label for="institucion" >{{ __('Nombre del la Institución o Dependencia donde Realizará Prácticas Profesionales:') }}</label>
    <input id="institucion" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('institucion') is-invalid @enderror" name="institucion" value="{{ old('institucion') }}" required autocomplete="institucion">
        @error('institucion')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
      @enderror
  </div>
</div>
<label for="responsable" ><strong>{{ __('Información del Titular de la Dependencia(A quien va dirigido el oficio de Presentación)') }}</strong></label>

<div class="form-row">
<div class="form-group col-md-3">
   <label for="nombre_titular" >{{ __('* Nombre(s)') }}</label>
       <input id="nombre_titular" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre_titular') is-invalid @enderror" name="nombre_titular" value="{{ old('nombre_titular') }}" required autocomplete="nombre_titular">
       @error('nombre_titular')
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
     @enderror
</div>

<div class="form-group col-md-3">
   <label for="apellido_paterno" >{{ __('* Apellido Paterno') }}</label>
         <input id="apellido_paterno" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('apellido_paterno') is-invalid @enderror" name="apellido_paterno" value="{{ old('apellido_paterno') }}" required autocomplete="apellido_paterno">
       @error('apellido_paterno')
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
       @enderror
</div>

<div class="form-group col-md-3">
   <label for="apellido_materno" >{{ __('Apellido Materno') }}</label>
         <input id="apellido_materno"  onKeyUp="this.value = this.value.toUpperCase()"  type="text" class="form-control @error('apellido_materno') is-invalid @enderror" name="apellido_materno" value="{{ old('apellido_materno') }}" autocomplete="apellido_materno">
       @error('apellido_materno')
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
       @enderror
</div>

<div class="form-group col-md-3">
      <label for="cargo_responsable" >{{ __('Cargo del Titular') }}</label>
        <input id="cargo_responsable" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('cargo_responsable') is-invalid @enderror" name="cargo_responsable" value="{{ old('cargo_responsable') }}" required autocomplete="cargo_responsable">
            @error('cargo_responsable')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
          @enderror
      </div>
</div>

<label for="responsable" ><strong>{{ __('Dirección de la Institución o dependencia') }}</strong> </label>
<div class="form-row">
  <div class="form-group col-md-5">
    <label for="calle"  align="left">* Calle</label>
    <input type="text" class="form-control" id="calle" name="calle" placeholder="Calle" onKeyUp="this.value = this.value.toUpperCase();" required>
  </div>
  <div class="form-group col-md-2">
    <label for="numero"  >* Número</label>
    <input type="text"  class="form-control" id="numero" name="numero" placeholder="Número" onKeyUp="this.value = this.value.toUpperCase();" required>
  </div>
  <div class="form-group col-md-5">
    <label for="colonia" >*Colonia</label>
    <input type="text" class="form-control" id="colonia" name="colonia" placeholder="Colonia" onKeyUp="this.value = this.value.toUpperCase();" required >
  </div>
  <div class="form-group col-md-3">
    <label for="codigo_postal">* Código Postal</label>
    <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="Código Postal" onKeyUp="this.value = this.value.toUpperCase();" required>
  </div>
  <div class="form-group col-md-5">
    <label for="ciudad">* Ciudad</label>
    <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" onKeyUp="this.value = this.value.toUpperCase();" required>
  </div>
</div>

<div class="form-row">

  <div class="form-group col-md-4">
    <label for="telefono">* Teléfono de la Institución o Dependencia</label>
    <input type="tel"  class="form-control" id="tel_celular" maxlength="10"  onkeypress="return numeros (event)"  placeholder="Formato a 10 digitos"  pattern="([0-9]{3})([0-9]{7})" required>
  </div>

</div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="duracion">Periodo</label>
        <select name="duracion" id="duracion" required class="form-control">
      <option value="">Seleccione una opción</option>
      <option value="3MESES">3 MESES</option>
      <option value="6MESES">6 MESES</option>

    </select>
    </div>

    <div class="form-group col-md-4">
        <label for="fecha" >{{ __('Fecha de Realización de la Solicitud') }}</label>
              <input id="fecha" type="date" value="<?php echo date("Y-m-d");?>" disabled class="form-control @error('fecha') is-invalid @enderror" name="fecha" required>
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
