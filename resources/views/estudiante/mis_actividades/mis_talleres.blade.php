<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_estudiante')
@include('estudiante\datos.datos_generales')
@include('estudiante\datos.datos_personales')
@include('estudiante\datos.datos_laborales')
@include('estudiante\datos.datos_medicos')
@include('estudiante\mis_actividades.detalles')
@include('estudiante\mis_actividades.gestion_mi_taller')

@section('title')
: Mis Actividades
@endsection

@section('seccion')
<!--<h1 style="font-size: 3.5em; color: #000000; font-family: Medium;" align="center">"JATWEB"</h1>-->
  <h2 style="font-size: 1.7em; color: #000000;" align="center">Actividades Extracurriculares </h2>
    <h2 style="font-size: 1.3em; color: #000000;" align="center"><em>Estudiante: </em>{{ Auth::user()->name }}  </h2>

<div class="container" id="font2">
  </br>

<div class="table-responsive">
  <table class="table table-bordered table-info" style="color: #000000;" >
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">CURSO</th>
        <th scope="col">ESTATUS</th>
        <th colspan="3" align="right">ACCIONES</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <th scope="row">1</th>
        <td>RUGBY</td>
        <td>ACTIVO</td>
        <td>  <a data-toggle="modal" href="#detalles_taller">DETALLES</a></td>
        <td><a href="pdfs">DESCARGAR LISTA</a></td>
       <td><a href="">GESTIÓN DE CURSO</a></td>
      </tr>

    </tbody>
  </table>

</div>
</div>


  @endsection
