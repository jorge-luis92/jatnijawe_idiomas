<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_formacion_integral')
@section('title')
:Talleres
 @section('seccion')
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Talleres Registrados</h1>
 <div class="container" id="font7">
 </br>                    <form method="POST" action="{{ route('actividades_registradas') }}">
                         @csrf
                          <div class="form-row">
                             <div class="table-responsive">
                               <table class="table table-bordered table-info" style="color: #000000;" >
                                 <thead>
                                   <tr>
                                     <th scope="col">ACTIVIDAD</th>
                                      <th scope="col">TIPO</th>
                                      <th scope="col">AREA</th>
                                       <th scope="col">MODALIDAD</th>
                                     <th scope="col">CREDITOS</th>
                                     <th scope="col">TUTOR</th>
                                     <th colspan="2" >ACCIONES</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   @foreach($dato as $datos)
                                   <tr style="color: #000000;">
                                       <td>{{$datos->nombre_ec}}</td>
                                       <td>{{$datos->tipo}} </td>
                                       <td>{{$datos->area}}</td>
                                       <td>{{$datos->modalidad}}</td>
                                       <td>{{$datos->creditos}}</td>
                                       <td>{{$datos->nombre}} {{$datos->apellido_paterno}} {{$datos->apellido_materno}}</td>
                                       <td><a data-toggle="modal" href="#actividad_detalle">Detalles</a></td>
                                        <td><a href="">Desactivar</a></td>
                                      </tr>
                                   @endforeach
                               </tbody>
                           </table>
                         </div>
                           @if (count($dato))
                             {{ $dato->links() }}
                           @endif
                         </div>
                     </form>
                 </div>

                 <div class="modal fade" tabindex="-1" role="dialog" id="actividad_detalle" aria-labelledby="#actividad_detalles " aria-hidden="true">
                   <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                       <div class="container" id="font7">
                         </br>
                       <div class="table-responsive">
                         <table class="table table-bordered table-info" style="color: #000000;" >
                           <thead>
                             <tr>
                               <th scope="col">Fecha Inicio</th>
                               <th scope="col">Fecha Terminación</th>
                               <th scope="col">Hora Inicio</th>
                               <th scope="col">Hora Fin</th>
                             </tr>
                           </thead>
                           <tbody>
                             @foreach($dato as $datos)
                             <tr>
                               <td>{!! $datos->fecha_inicio !!}</td>
                               <td>{!! $datos->fecha_fin !!}</td>
                               <td>{!! $datos->hora_inicio !!}</td>
                               <td>{!! $datos->hora_fin !!}</td>
                             </tr>
                      @endforeach
                           </tbody>
                         </table>
                       </div>
                       @if (count($dato))
                         {{ $dato->links() }}
                       @endif
                       </div>
                     </div>
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
