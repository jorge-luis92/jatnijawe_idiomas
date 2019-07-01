<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_planeacion')
@section('title')
: 911.9
  @endsection
 @section('seccion')
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Información de Estudiantes</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="{{ route('reporte911_9') }}">
                         @csrf
<div class="form-row">
  <div class="table-responsive">

  <table class="table table-bordered table-info" style="color: #8181F7;" >

  <h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>ALUMNOS BECADOS</strong></h4>
  <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Número de Alumnos Becados del ciclo escolar actual</h5>

  <tr>
    <td colspan="6"align="center"><strong>Modalidad Escolarizada</strong></td>
 </tr>
    <tr>
      <td ><strong>Origen de la Beca</strong></td>
      <td bgcolor="white">Hombres</td>
      <td bgcolor="white">Mujeres</td>
        <td ><strong>Total</strong></td>
      <td bgcolor="white">Con discapacidad</td>
      <td bgcolor="white">Hablante de Lengua Índigena</td>
    </tr>

    <tr>
      <td bgcolor="white" ></td>
      <td bgcolor="white" ></td>
      <td bgcolor="white" ></td>
      <td ></td>
      <td bgcolor="white" ></td>
      <td bgcolor="white" ></td>
    </tr>

    <tr>
    <td ><strong>Total</strong></td>
      <td bgcolor="white" ></td>
      <td bgcolor="white" ></td>
      <td ></td>
      <td bgcolor="white" ></td>
      <td bgcolor="white" ></td>
    </tr>
  </table>

    <table class="table table-bordered table-info" style="color: #8181F7;" >
      <tr>
        <td colspan="6"align="center"><strong>Modalidad Semiescolarizada</strong></td>
     </tr>
        <tr>
          <td ><strong>Origen de la Beca</strong></td>
          <td bgcolor="white">Hombres</td>
          <td bgcolor="white">Mujeres</td>
            <td ><strong>Total</strong></td>
          <td bgcolor="white">Con discapacidad</td>
          <td bgcolor="white">Hablante de Lengua Índigena</td>
        </tr>

        <tr>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
        </tr>

        <tr>
        <td ><strong>Total</strong></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
        </tr>
    </table>

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