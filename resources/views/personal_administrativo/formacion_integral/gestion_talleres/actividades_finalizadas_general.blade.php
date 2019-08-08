<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_formacion_integral')
@section('title')
:Talleres
  @endsection
 @section('seccion')
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Actividades Finalizadas</h1>
 <div class="container" id="font7">
   @include('flash-message')
 </br>                    <form method="POST" action="{{ route('actividades_registradas') }}">
                         @csrf
                          <div class="form-row">
                               <div class="table-responsive" style="border:1px solid #819FF7;">
                                 <table class="table table-bordered table-striped" style="color: #000000; font-size: 13px;"  >
                                 <thead>
                                   <tr>
                                     <th scope="col">ACTIVIDAD</th>
                                      <th scope="col">TIPO</th>
                                      <th scope="col">AREA</th>
                                       <th scope="col">MODALIDAD</th>
                                     <th scope="col">CREDITOS</th>
                                     <th scope="col">TUTOR</th>
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
                                      </tr>
                                   @endforeach
                               </tbody>
                           </table>
                         </div>
                       </br></br>
                           @if (count($dato))
                             {{ $dato->links() }}
                           @endif
                         </div>
                     </form>
                 </div>

 @endsection
