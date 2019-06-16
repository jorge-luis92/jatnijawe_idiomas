<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_estudiante')
@section('title')
: Foto de Perfil
@endsection

@section('seccion')

              <div class="container"  id="font6">
              </br>
          @include('flash-message')
                          <form class="form-horizontal" method="POST" action="{{ route('act_foto') }}" validate enctype="multipart/form-data" data-toggle="validator">
                              {{ csrf_field() }}

                              <div class="form-group col-md-8" style="width: 2rem;" >
                                <span style="color: #000000"> </span>
                                <?php
                                $usuario_actual=auth()->user();
                               $id=$usuario_actual->id_user;
                               $imagen = DB::table('users')
                              ->select('users.imagenurl')
                              ->where('users.id_user',$id)
                              ->take(1)
                              ->first();
                              $im=$usuario_actual->imagenurl;

                     ?>
<?php if($usuario_actual->imagenurl==""){ $usuario_actual->imagenurl="image/foto.png"; }  ?>
                                <img class="image"  src="{{ asset("storage/$im")}}"   width="150px">



                                   <input type="file" name="foto" accept="image/png, .jpeg, .jpg" required>
                              </div>
<h1 style="font-size: 12px;"> {{$im}}</h1>
                              <div class="form-group" align="center">
                                  <div class="col-md-6 col-md-offset-4">
                                      <button type="submit" class="btn btn-primary">
                                          Actualizar Foto
                                      </button>
                                  </div>
                              </div>
                          </form>
                        </div>

</br>
  @endsection
