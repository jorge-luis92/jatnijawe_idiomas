<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_admin')
@section('title')
: Home
@endsection

@section('seccion')
</br>
<div class="container" id="font2">
  <h2 style="font-size: 1.8em; color: #000000;" align="center">Perfil: Administrador del Sistema</h2>
   @include('flash-message')
   <h1> {{$prueba}}</h1>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<div class="nota_alumno">
   <p style="color: #000000"align="center">* Para cualquier duda consulte el <a style="text-decoration: underline;" href="">Manual de Usuario</a> </p>
</div>
</div>


  @endsection
