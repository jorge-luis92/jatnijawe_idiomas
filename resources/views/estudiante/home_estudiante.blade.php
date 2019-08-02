@if(auth()->check())
<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_estudiante')
@section('title')
: Perfil
@endsection
@section('seccion')
<div class="container" id="font7">
   @include('flash-message')
  </br>
  <h1 style="font-size: 2.0em; color: #000000;" align="center">Perfil del Estudiante</h1>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<div class="nota_alumno">
<p style="Times New Roman, Times, serif, cursive; color: #FFFFFF;" align="center">
  <span style="color: #FFFFFF;"><strong>AVISO IMPORTANTE: </strong></span></br>
   Para tener acceso a todos los servicios del sistema debes leer y aceptar
   <span style="color: #190707">LOS LINEAMIENTOS</span> cada inicio de semestre</p>
   <p style="color: #000000"align="center"><a style="text-decoration: underline; color: #FFFFFF;"  href={{route('lineamientos')}}>Lineamientos</a> </p>
</div>
  @endsection
@endif
