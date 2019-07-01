<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_planeacion')
@section('title')
: 911.9A
  @endsection
 @section('seccion')
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Información de Estudiantes</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="{{ route('reporte911_9A_0') }}">
                         @csrf
<div class="form-row">
  <div class="table-responsive">
    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>
    <h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>ALUMNOS DE PRIMER INGRESO DEL CICLO ESCOLAR ANTERIOR</strong></h4>

    <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Número de alumnos de primer ingreso a la carrera del ciclo escolar anterior</h5>
    <tr>
      <th scope="row">Hombres </th>
      <th scope="row">Mujeres</th>
      <th scope="row">Total</th>

    </tr>
    <tr>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>

    </tr>
    </table>

<a> Páginas</a>
<a class="siguiente" href={{ route('reporte911_9A_0')}}><strong>1</strong></a>
<a class="siguiente" href={{ route('reporte911_9A_1')}}>2</a>
<a class="siguiente" href={{ route('reporte911_9A_2')}}>3</a>
<a class="siguiente" href={{ route('reporte911_9A_3')}}>4</a>
<a class="siguiente" href={{ route('reporte911_9A_4')}}>5</a>
<a class="siguiente" href={{ route('reporte911_9A_5')}}>6</a>
<a class="siguiente" href={{ route('reporte911_9A_6')}}>7</a>



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
