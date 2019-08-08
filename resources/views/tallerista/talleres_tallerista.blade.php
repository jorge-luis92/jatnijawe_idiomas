<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_tallerista')
@section('title')
: Mis talleres
@endsection
@section('seccion')
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Mis talleres activos</h1>
 <div class="container" id="font7">
 </br>
          <div class="table-responsive">
          <table class="table table-bordered table-info" style="color: #000000;" >
          <thead>
          <tr>
            <th scope="col">NOMBRE DE TALLER</th>
            <th scope="col">CREDITOS</th>
            <th scope="col">DÍAS DE LA SEMANA</th>
            <th scope="col">HORARIO</th>
            <th colspan="3" align="center" >ACCIONES</th>

          </tr>
          </thead>
          <tbody>
            @foreach($dato as $datos)
                <tr>
                  <td>{{$datos->nombre_ec}}</td>
                  <td>{{$datos->creditos}}</td>
                  <td>{{$datos->dias_sem}}</td>
                  <td>{{$datos->hora_inicio}} a {{$datos->hora_fin}}</td>
                  <td><a href="descarga_lista_estudiante/{{$datos->id_extracurricular}}" target="_blank">Ver Grupo</a></td>
                  <td><a href="descargar_lista_taller/{{$datos->id_extracurricular}}" target="_blank">Descargar Lista</a></td>
                  <td><a href="finalizar_grupo/{{$datos->id_extracurricular}}">Finalizar Actividad</a></td>
                </tr>
                @endforeach
               </tbody>
               </table>
               </div>
               @if (count($dato))
               {{ $dato->links() }}
               @endif
          </div>
 @endsection
