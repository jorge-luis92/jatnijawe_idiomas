<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_estudiante')
@section('title')
: Foto de Perfil
@endsection

@section('seccion')

<div class="container" align="center" id="font6" >
      <div class="form">
        @include('flash-message')
                        <form class="form-horizontal" method="POST" action="{{ route('act_foto') }}" validate enctype="multipart/form-data" data-toggle="validator">
                            {{ csrf_field() }}

                            <div style="width: 2rem;" >
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
<?php if($usuario_actual->imagenurl==""){ $im="foto.png"; }  ?>
                              <img   src="{{ asset("/image/users/$im")}}"   width="150px">
                                 <input type="file" name="foto" accept="image/png, .jpeg, .jpg" required>
                             </div>
                             <br />
                            <div class="form-group" align="center">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Actualizar Foto
                                    </button>
                                </div>
                            </div>
                        </form>
</div>
</div>

  @endsection
