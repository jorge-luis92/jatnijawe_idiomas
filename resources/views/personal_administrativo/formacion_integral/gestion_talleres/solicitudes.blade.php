<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_formacion_integral')
@section('title')
:Solicitudes
@endsection
 @section('seccion')
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Solicitudes de Talleres </h1>
 <div class="container" id="font7">
 </br>
                    <div class="table-responsive" style="border:1px solid #819FF7;">
                     <table class="table table-bordered table-striped" style="color: #000000; font-size: 13px;"  >
                                 <thead>
                                   <tr>
                                     <!--<th scope="col">SOLICITUD</th>-->
                                      <th scope="col">ESTUDIANTE</th>
                                       <th scope="col">TALLER</th>
                                     <th scope="col">FECHA DE SOLICITUD</th>
                                     <th scope="col">ESTATUS</th>
                                     <th scope="col">DETALLES</th>
                                     <th colspan="3" >ACCIONES</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($data as $detalles)
                                    <tr style="color: #000000;">
                                      <!--  <td>{{$detalles->num_solicitud}}</td>-->
                                        <td>{{$detalles->nombre}} {{$detalles->apellido_paterno}} {{$detalles->apellido_materno}}</td>
                                        <td>{{$detalles->nombre_taller}}</td>
                                        <td>{{ date('d-m-Y', strtotime($detalles->fecha_solicitud))}} </td>
                                        <td>{{$detalles->estado}}</td>
                                        <td><a href="pdf_solicitud_taller/{{$detalles->matricula}}" target="_blank">VER SOLICITUD</a></td>
                                        <td>  <a data-toggle="modal" href="#">APROBAR</a></td>
                                        <td>  <a data-toggle="modal" href="#">RECHAZAR</a></td>
                                        <td>  <a data-toggle="modal" href="#">RE-PLANTEAR</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                             </div>
                             <br />
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
