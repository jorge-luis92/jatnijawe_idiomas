<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_planeacion')
@section('title')
: 911.9A
  @endsection
 @section('seccion')
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Información de Estudiantes</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="{{ route('reporte911_9A_4') }}">
                         @csrf
<div class="form-row">
  <div class="table-responsive">


<table class="table table-bordered table-info" style="color: #8181F7;" >

<h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>ALUMNOS INSCRITOS POR EDAD Y GRADO DE AVANCE</strong></h4>

      <tr>
        <td colspan="10"align="center"><strong>Grado de Avance</strong></td>
     </tr>
        <tr>
          <td ><strong>Edad</strong></td>
          <td bgcolor="white">Primero</td>
          <td bgcolor="white">Segundo</td>
          <td bgcolor="white">Tercero</td>
          <td bgcolor="white">Cuarto</td>
          <td bgcolor="white">Quinto</td>
          <td bgcolor="white">Sexto</td>
          <td bgcolor="white">Séptimo</td>
          <td bgcolor="white">Octavo</td>
          <td ><strong>Total</strong></td>
        </tr>

        <tr>
          <td >Menos de 18 años</td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td ></td>
        </tr>

        <tr>
          <td >18 años</td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td ></td>
        </tr>
        <tr>
          <td >19 años</td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td ></td>
        </tr>
        <tr>
          <td >20 años</td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td ></td>
        </tr>
        <tr>
          <td >21 años</td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td ></td>
        </tr>
        <tr>
          <td >22 años</td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td ></td>
        </tr>
        <tr>
          <td >23 años</td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td ></td>
        </tr>
        <tr>
          <td >24 años</td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td ></td>
        </tr>
        <tr>
          <td >25 años</td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td ></td>
        </tr>
        <tr>
          <td >26 años</td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td ></td>
          </tr>
          <tr>
            <td >27 años</td>
            <td bgcolor="white" ></td>
            <td bgcolor="white" ></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td bgcolor="white"></td>
            <td ></td>
          </tr>
            <tr>
              <td >28 años</td>
              <td bgcolor="white" ></td>
              <td bgcolor="white" ></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td ></td>
            </tr>
            <tr>
              <td >29 años</td>
              <td bgcolor="white" ></td>
              <td bgcolor="white" ></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td ></td>
            </tr>
            <tr>
              <td >30 a 34 años</td>
              <td bgcolor="white" ></td>
              <td bgcolor="white" ></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td ></td>
            </tr>
            <tr>
              <td >35 a 39 años</td>
              <td bgcolor="white" ></td>
              <td bgcolor="white" ></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td ></td>
            </tr>
            <tr>
              <td >40 años o más</td>
              <td bgcolor="white" ></td>
              <td bgcolor="white" ></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td bgcolor="white"></td>
              <td ></td>
            </tr>
        <tr>
        <td ><strong>Total</strong></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td ></td>
        </tr>

        </table>
<a> Páginas</a>
        <a class="siguiente" align="rigth" href={{ route('reporte911_9A_0')}}>1</a>
        <a class="siguiente" align="rigth" href={{ route('reporte911_9A_1')}}>2</a>
  <!--  <a class="siguiente" align="rigth" href={{ route('reporte911_9A_2')}}>3</a>-->
        <a class="siguiente" align="rigth" href={{ route('reporte911_9A_3')}}>3</a>
        <a class="siguiente" align="rigth" href={{ route('reporte911_9A_4')}}><strong>4</strong></a>
        <a class="siguiente" align="rigth" href={{ route('reporte911_9A_5')}}>5</a>
        <a class="siguiente" align="rigth" href={{ route('reporte911_9A_6')}}>6</a>
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
