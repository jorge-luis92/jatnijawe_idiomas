<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_formacion_integral')
@section('title')
: Talleristas Activos
@endsection

@section('seccion')
 @include('flash-message')
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Talleristas Activos</h1>
 <div class="container" id="font4">
 </br>
                             <div class="table-responsive">
                               <table class="table table-bordered table-info" style="color: #000000;" >
                                 <thead>
                                   <tr>
                                     <th scope="col">RFC</th>
                                     <th scope="col">NOMBRE</th>
                                     <th scope="col">ACCIONES</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   @foreach($re as $res)
                                   <tr>
                                          <th scope="row">{{$res->rfc}}</th>
                                          <td>{{$res->nombre}} {{$res->apellido_paterno}} {{$res->apellido_materno}}</td>
                                            <td><a href="desactivar_tallerista/{{ $res->id_user }}">DESACTIVAR</a></td>
                                            </tr>

                                              @endforeach
                                 </tbody>
                               </table>
                             </div>
                             @if (count($re))
                               {{ $re->links() }}
                             @endif
                           </div>

            @endsection
