<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_formacion_integral')
@section('title')
: Talleristas Inactivos
@endsection

@section('seccion')
 @include('flash-message')
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Talleristas Inactivos</h1>
 <div class="container" id="font4">
 </br>
                             <div class="table-responsive">
                               <table class="table table-bordered table-info" style="color: #000000;" >
                                 <thead>
                                   <tr>
                                     <th scope="col">NOMBRE</th>
                                     <th scope="col">USUARIO</th>
                                     <th scope="col">EMAIL</th>
                                     <th scope="col">ACCIONES</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   @foreach($re as $res)
                                   <tr>
                                     <td>{{$res->nombre}} {{$res->apellido_paterno}} {{$res->apellido_materno}}</td>
                                     <th scope="row">{{$res->username}}</th>
                                     <th scope="row">{{$res->email}}</th>
                                            <td><a href="activar_tallerista/{{ $res->id_user }}">ACTIVAR</a></td>
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
