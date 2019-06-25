<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_formacion_integral')
@section('title')
:Solicitudes
 @section('seccion')
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Solicitudes de Talleres </h1>
 <div class="container" id="font7">
 </br>
                             <div class="table-responsive">
                               <table class="table table-bordered table-info" style="color: #000000;" >
                                 <thead>
                                   <tr>
                                     <th scope="col">SOLICITUD</th>
                                      <th scope="col">ESTUDIANTE</th>
                                       <th scope="col">TALLER</th>
                                     <th scope="col">FECHA</th>
                                     <th colspan="2" >ACCIONES</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <tr>
                                          <th scope="row">1</th>
                                          <th scope="row">JORGE LUIS HNDZ</th>
                                          <th scope="row">LECTURA Y REDACCIÓN</th>
                                          <th scope="row">05/06/2019</th>
                                          <td>  <a data-toggle="modal" href="#">VER SOLICITUD</a></td>
                                          <td>  <a data-toggle="modal" href="#">ELIMINAR</a></td>

                                        </tr>


                                 </tbody>
                               </table>
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



  @endsection
