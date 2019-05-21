<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_estudiante')
@section('title')
: Cuenta
@endsection

@section('seccion')
<h1 style="font-size: 2.0em; color: #000000;" align="center">Configuración de Cuenta</h1>
<div class="container" id="font4">
  <form  validate enctype="multipart/form-data" data-toggle="validator">
  <p style="font-size: 1.0em; color: #000000;"> Los Campos con un * son Obligatorios</p>
    <div class="form-row">

      <div class="form-group col-md-5" style="width: 2rem;" >
        <span style="color: #000000">* </span>
        <img class="image" src="image/foto.png" width="100px">
           <input type="file" accept="image/png, .jpeg, .jpg" required>
      </div>

      <div class="form-group  col-md-3">
          <label for="password" >{{ __('Contraseña') }}</label>

              <input id="password" class="form-control" type="password" name="password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

      </div>

      <div class="form-group  col-md-3">
          <label for="password-confirm" >{{ __('Confirmar Contraseña') }}</label>
              <input id="password-confirm" class="form-control"  type="password" name="password_confirmation">

      </div>


</div>
<div class="form-group" id="labels">
 <br>
 <div class="col-xs-offset-2 col-xs-9" align="center">
     <input type="submit" class="btn btn-primary" name="agregar" value="Actualizar">
    <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
 </div>
</div>
</form>


</div>

  @endsection
