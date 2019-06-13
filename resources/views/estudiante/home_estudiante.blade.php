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
</br>
</br>
</br>
</br>
</br>
<div class="nota_alumno">
<p style="color: #000000; align: justify;"><span style="color: #000000;">NOTA: </span>Recuerda actualizar tus <span style="color: red;">Datos</span> cada inicio de semestre</br>
* Consulta el <a style="text-decoration: underline; color: #FFFFFF;"  href={{route('ma_estudiante')}}>Manual de Usuario</a></p>
</div>
</div>


  @endsection
