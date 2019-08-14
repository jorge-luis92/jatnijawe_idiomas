<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_planeacion')
@section('title')
: Información Estudiantes
@endsection
 @section('seccion')
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Información de Estudiantes</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="{{ route('info_coord_academica3') }}">
                         @csrf
<div class="form-row">
<div class="table-responsive">

  <table class="table table-bordered table-info" style="color: #8181F7;" >
  <thead>
  <h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>Estudiantes Hablantes de Lengua del ciclo escolar actual</strong></h4>
  <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Modalidad Escolarizada</h5>
  </thead>
  </table>

  <table class="table table-bordered table-info" style="color: #8181F7;" >
  <tbody>
  <tr>
    <th style="width:50px" scope="row">Lengua</th>
    <th style="width:15px" scope="row">Hombres </th>
  </tr>

  @foreach($total_lenguasM as $datosM)
  <tr>
  <td>{{$datosM->nombre_lengua}}</td>
  <td bgcolor="white">{{$datosM->total_lenguam}} </td>
  </tr>
  @endforeach
  <tr>
    <th scope="col">Total</th>
      <th scope="col">{{$totalG_masculinoL}}</th>
  </tr>
</tbody>
  </table>

  <table class="table table-bordered table-info" style="color: #8181F7;" align="center">
  <thead>
  <tr>
    <th style="width:50px" scope="row">Lengua</th>
    <th style="width:15px" scope="row">Mujeres</th>
  </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($total_lenguasF as $datosF)
      <td>{{$datosF->nombre_lengua}}</td>
      <td bgcolor="white">{{$datosF->total_lengua}} </td>
        </tr>
      @endforeach
    </tr>
  <tr>
    <th scope="col">Total</th>
    <th scope="col">{{$totalG_femeninoL}}</th>
  </tr>
  </tbody>
  </table>

  <table class="table table-bordered table-info" style="color: #8181F7;" align="center">
  <thead>
  <tr>
    <th scope="row">Lengua</th>
    <th scope="row">Estudiantes hablantes</th>
  </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($total_lenguasE as $datosE)
      <td>{{$datosE->nombre_lengua}}</td>
      <td bgcolor="white">{{$datosE->total_lengua}} </td>
        </tr>
      @endforeach
    </tr>
  <tr>
    <th scope="col">Total</th>
    <th scope="col">{{$totalGLMF}}</th>
  </tr>
  </tbody>
  </table>

<table class="table table-bordered table-info" style="color: #8181F7;" >
<thead>
<h5 style="font-size: 1.0em; color: #000000;" align="rigt">Modalidad Semiescolarizada</h5>
</thead>
</table>

<table class="table table-bordered table-info" style="color: #8181F7;" >
<tbody>
<tr>
  <th style="width:50px" scope="row">Lengua</th>
  <th style="width:15px" scope="row">Hombres </th>
</tr>
@foreach($total_lenguasMS as $datosMS)
<tr>
<td>{{$datosMS->nombre_lengua}}</td>
<td bgcolor="white">{{$datosMS->total_lengua}} </td>
</tr>
@endforeach
<tr>
  <th scope="col">Total</th>
    <th scope="col"></th>
</tr>
</tbody>
</table>


<table class="table table-bordered table-info" style="color: #8181F7;" >
<tbody>
<tr>
  <th style="width:50px" scope="row">Lengua</th>
  <th style="width:15px" scope="row">Mujeres</th>
</tr>
@foreach($total_lenguasFS as $datosFS)
<tr>
<td>{{$datosFS->nombre_lengua}}</td>
<td bgcolor="white">{{$datosFS->total_lengua}} </td>
</tr>
@endforeach
<tr>
<tr>
  <th scope="col">Total</th>
    <th scope="col">{{$totalGS_femeninoL}}</th>
</tr>
</tbody>
</table>

<table class="table table-bordered table-info" style="color: #8181F7;" align="center">
<thead>
<tr>
  <th scope="row">Lengua</th>
  <th scope="row">Estudiantes hablantes</th>
</tr>
</thead>
<tbody>
  <tr>
    @foreach($total_lenguasS as $datosS)
    <td>{{$datosS->nombre_lengua}}</td>
    <td bgcolor="white">{{$datosS->total_lengua}} </td>
      </tr>
    @endforeach
  </tr>
<tr>
  <th scope="col">Total</th>
  <th scope="col">{{$totalGSLMF}}</th>
</tr>
</tbody>
</table>


  <table class="table table-bordered table-info" style="color: #8181F7;" >
  <thead>
  <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Total de estudiantes del ciclo escolar actual Hablantes de Lengua</h5>

  <tr>
    <th scope="row">Lengua</th>
    <th scope="row">Total</th>


  </tr>
  @foreach($total_lenguasG as $datosLG)
  <tr>
    <th scope="col">{{$datosLG->nombre_lengua}}</th>
    <td bgcolor="white">{{$datosLG->total_lengua}}</td>
  </tr>
    @endforeach

  <tr>
    <th scope="col">Total</th>
    <td bgcolor="white">{{$total_lenguasT}}</td>

  </tr>

  </table>

    </div>
  </form>
</div>

<a class="siguiente" href={{ route('info_coord_academica1')}}>1</a>
<a class="siguiente" href={{ route('info_coord_academica2')}}>2</a>
<a class="siguiente" href={{ route('info_coord_academica3')}}><strong>3</strong></a>
<a class="siguiente" href={{ route('info_coord_academica4')}}>4</a>
<a class="siguiente" href={{ route('info_coord_academica5')}}>5</a>
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
