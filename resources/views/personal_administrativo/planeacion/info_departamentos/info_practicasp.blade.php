<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_planeacion')
@section('title')
: Información Estudiantes
@endsection
 @section('seccion')
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Información de Estudiantes</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="{{ route('info_practicasp') }}">
                         @csrf
<div class="form-row">
  <div class="table-responsive">
    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>ESTUDIANTES ACTIVOS EN PRÁCTICAS PROFESIONALES</strong></h4>


      <tr>
        <td colspan="6"align="center"><strong>LICENCIATURA</strong></td>
     </tr>
        <tr>
          <td ><strong></strong></td>
          <td align="center"><strong>Modalidad Escolarizada</strong></td>
          <td align="center"><strong>Modalidad Semiescolarizada</strong></td>
          <td ><strong>Total</strong></td>

        </tr>



        <tr>
          <td ><strong>Alumnos en Prácticas Profesionales </strong></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
        </tr>



        <tr>
        <td ><strong>Total</strong></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
        </tr>
    </table>
    </div>
  </form>
</div>
</div>

 @endsection
