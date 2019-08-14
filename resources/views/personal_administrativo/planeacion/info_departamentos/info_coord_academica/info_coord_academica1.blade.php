<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_planeacion')
@section('title')
: Información Estudiantes
@endsection
 @section('seccion')
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Información de Estudiantes</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="{{ route('info_coord_academica1') }}">
                         @csrf
<div class="form-row">
  <div class="table-responsive">
    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>
    <h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>Estudiantes Inscritos en el ciclo escolar actual</strong></h4>
    <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Modalidad Escolarizada</h5>
    <tr>
      <th scope="row">Hombres </th>
      <th scope="row">Mujeres</th>
      <th scope="row">Total</th>
      <th scope="row">Con Discapacidad</th>
      <th scope="row">Hablante de Lengua</th>
    </tr>
    <tr>
      <td bgcolor="white">{{$total_masculino}}</td>
      <td bgcolor="white">{{$total_femenino}}</td>
      <td bgcolor="white">{{$total}}</td>
      <td bgcolor="white">{{$total_estudiantes_discapacidadESC}}</td>
      <td bgcolor="white">{{$total_estudiantes_lenguaESCO}}</td>
    </tr>
    </table>

    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>
    <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Modalidad Semiescolarizada</h5>
    <tr>
      <th scope="row">Hombres </th>
      <th scope="row">Mujeres</th>
      <th scope="row">Total</th>
      <th scope="row">Con Discapacidad</th>
      <th scope="row">Hablante de Lengua</th>
    </tr>

    <tr>

      <td bgcolor="white">{{$total_masculino2}}</td>
      <td bgcolor="white">{{$total_femenino2}}</td>
      <td bgcolor="white">{{$total2}}</td>
      <td bgcolor="white">{{$total_estudiantes_discapacidadSEMI}}</td>
      <td bgcolor="white">{{$total_estudiantes_lenguaSEMI}}</td>


    </tr>
    </table>

    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>
    <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Total de Estudiantes del Ciclo escolar actual</h5>
    <tr>
      <th scope="row">Hombres </th>
      <th scope="row">Mujeres</th>
      <th scope="row">Total</th>
      <th scope="row">Con Discapacidad</th>
      <th scope="row">Hablante de Lengua</th>
    </tr>

    <tr>
      <td bgcolor="white">{{$total_inscritos_masc}}</td>
      <td bgcolor="white">{{$total_inscritos_fem}}</td>
      <td bgcolor="white">{{$total_general}}</td>
      <td bgcolor="white">{{$total_estudiantes_discapacidad}}</td>
      <td bgcolor="white">{{$total_estudiantes_lengua}}</td>
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
