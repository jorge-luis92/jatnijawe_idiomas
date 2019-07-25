<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_estudiante')
@section('title')
: Perfil
@endsection

@section('seccion')
<div class="container" id="font2">
  </br>
  <h1 style="font-size: 2.0em; color: #000000;" align="center">Perfil del Estudiante</h1>
</br>
</br>
</br>

<div class="nota_alumno">
<p style="Times New Roman, Times, serif, cursive; color: #F7FE2E" align="center">
  <span style="color: red;"><strong>AVISO IMPORTANTE: </strong></span></br>
   Para tener acceso a todos los servicios del sistema debes leer y aceptar
   <span style="color: #190707">LOS LINEAMIENTOS</span> cada inicio de semestre</p>
   <p style="color: #000000"align="center"><a style="text-decoration: underline; color: #FFFFFF;"  href={{route('ma_estudiante')}}>Lineamientos</a> </p>
</div>

</br>
</br>
</br>
</br>
</br>
<div class="nota_alumno">
<p style="Times New Roman, Times, serif, cursive; color: blue;">
  <span style="color: red;">NOTA: </span>
   Recuerda actualizar tus
   <span style="color: #190707">Datos</span> cada inicio de semestre</p>
   <p style="color: #000000"align="center">* Consulta el <a style="text-decoration: underline; color: #FFFFFF;"  href={{route('ma_estudiante')}}>Manual de Usuario</a> </p>
</div>
</div>


  @endsection
