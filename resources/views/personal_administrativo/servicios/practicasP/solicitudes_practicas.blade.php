<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_servicios')
@section('title')
:Solicitudes
 @section('seccion')
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Solicitudes de Practicas Profesionales </h1>
 <div class="container" id="font7">
 </br>                    <form method="POST" action="{{ route('solicitudes_practicas') }}">
                         @csrf
                         <div class="form-row">
                              <div class="table-responsive" style="border:1px solid #819FF7;">
                                <table class="table table-bordered table-striped" style="color: #000000; font-size: 13px;"  >

                                 <thead>
                                   <tr>
                                      <th scope="col">ESTUDIANTE</th>
                                       <th scope="col">ESTABLECIMIENTO</th>
                                     <th scope="col">FECHA SOLICITUD</th>
                                     <th colspan="2" >ACCIONES</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <tr>
                                        <th scope="row">ANGELICA MENDEZ ORTIZ</th>
                                          <th scope="row">INGLÉS DE OAXACA</th>
                                          <th scope="row">08/06/2019</th>
                                          <td>  <a data-toggle="modal" href="#">ACREDITAR</a></td>
                                         <td>  <a data-toggle="modal" href="#">GENERAR CARTA PRESENTACION</a></td>
                                      </tr>
                                 </tbody>
                               </table>
                             </div>

                         </div>
                     </form>
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



  @endsection
