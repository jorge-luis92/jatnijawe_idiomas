<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_estudiante')
@section('title')
: Foto de Perfil
@endsection

@section('seccion')

              <div class="container"  id="font6">
              </br>
          @include('flash-message')
                          <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}" validate enctype="multipart/form-data" data-toggle="validator">
                              {{ csrf_field() }}

                              <div class="form-group col-md-5" style="width: 2rem;" >
                                <span style="color: #000000"> </span>
                                <?php
                                $usuario_actual=auth()->user();
                               $id=$usuario_actual->id_user;
                                if($usuario_actual->imagenurl==""){ $usuario_actual->imagenurl="image/foto.png"; }  ?>

                                <img class="image" src="<?=  $usuario_actual->imagenurl;  ?>" width="100px">
                                   <input type="file" name="foto" accept="image/png, .jpeg, .jpg" required>
                              </div>

                              <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                  <label for="current-password" class="col-md-4 control-label">Contraseña Actual</label>

                                  <div class="col-md-6">
                                      <input id="current-password" type="password" class="form-control" name="current-password" required>

                                      @if ($errors->has('current-password'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('current-password') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                  <label for="new-password" class="col-md-4 control-label">Nueva Contraseña</label>

                                  <div class="col-md-6">
                                      <input id="new-password" type="password" class="form-control" name="new-password" required>

                                      @if ($errors->has('new-password'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('new-password') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="new-password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                                  <div class="col-md-6">
                                      <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                  </div>
                              </div>

                              <div class="form-group" align="center">
                                  <div class="col-md-6 col-md-offset-4">
                                      <button type="submit" class="btn btn-primary">
                                          Actualizar Datos
                                      </button>
                                  </div>
                              </div>
                          </form>

</br>
  @endsection
