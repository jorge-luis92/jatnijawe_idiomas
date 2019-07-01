<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_planeacion')
@section('title')
:Reporte Semestral
  @endsection
 @section('seccion')
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Coordinación de Planeación</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="{{ route('reporte_semestral') }}">
                         @csrf
<div class="form-row">
  <div class="table-responsive">
    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>REPORTE SEMESTRAL</strong></h4>


      <tr>
        <td colspan="6"align="center"><strong>LICENCIATURA</strong></td>
     </tr>
        <tr>
          <td ><strong></strong></td>
          <td align="center"><strong>P1</br>Modalidad Escolarizada</strong></td>
          <td align="center"><strong>P2</br>Modalidad Semiescolarizada</strong></td>
          <td ><strong>Total</strong></td>

        </tr>

        <tr>
          <td>Matrícula Atendidida</td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
        </tr>

        <tr>
          <td >Alumnos Reinscritos</td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
        </tr>

        <tr>
          <td >Alumnos en Servicio Social</td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
        </tr>

        <tr>
          <td >Alumnos en Prácticas Profesionales</td>
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
