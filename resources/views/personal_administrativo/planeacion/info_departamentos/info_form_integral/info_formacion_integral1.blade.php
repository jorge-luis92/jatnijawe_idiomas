<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_planeacion')
@section('title')
: Información Formación Integral
  @endsection
 @section('seccion')
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Información de Estudiantes</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="{{ route('info_formacion_integral1') }}">
                         @csrf
<div class="form-row">
  <div class="table-responsive">
    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>
    <h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>Actividades Extracurriculares del Ciclo Escolar Actual</strong></h4>
    <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Modalidad Escolarizada</h5>

    <tr>
      <th scope="row">Actividad</th>
      <th scope="row">Tipo</th>
      <th scope="row">Area</th>
      <th scope="row">Creditos</th>
    </tr>
    <tr>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
    </tr>
    </table>

    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>
    <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Total de Actividades </h5>
    <tr>
      <th scope="row">Actividad</th>
      <th scope="row">Tipo</th>
      <th scope="row">Area</th>
      <th scope="row">Creditos</th>
      <th scope="row">Hombres </th>
      <th scope="row">Mujeres</th>
      <th scope="row">Total</th>
    </tr>
  </table>


    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>
    <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Modalidad Semiescolarizada</h5>
    <tr>
      <th scope="row">Actividad</th>
      <th scope="row">Tipo</th>
      <th scope="row">Area</th>
      <th scope="row">Creditos</th>
      <th scope="row">Hombres </th>
      <th scope="row">Mujeres</th>
      <th scope="row">Total</th>
    </tr>
    <tr>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td > </td>
    </tr>
    </table>

    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>
    <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Total de Estudiantes que se encuentran activos en Formación integral</h5>
    <tr>
      <th scope="row">Actividad</th>
      <th scope="row">Hombres </th>
      <th scope="row">Mujeres</th>
      <th scope="row">Total</th>
    </tr>
    <tr>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
          <td > </td>
    </tr>
    </table>



  <a> Páginas</a>
  <a class="siguiente" href={{ route('info_coord_academica1')}}><strong>1</strong></a>
  <a class="siguiente" href={{ route('info_coord_academica2')}}>2</a>
  <a class="siguiente" href={{ route('info_coord_academica3')}}>3</a>
  <a class="siguiente" href={{ route('info_coord_academica4')}}>4</a>
  <a class="siguiente" href={{ route('info_coord_academica5')}}>5</a>
    </div>
  </form>
</div>


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
