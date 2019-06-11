<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_estudiante')
@section('title')
: Catálogo de Actividades
@endsection

@section('seccion')
<!--<h1 style="font-size: 3.5em; color: #000000; font-family: Medium;" align="center">"JATWEB"</h1>-->
  <h2 style="font-size: 1.7em; color: #000000;" align="center">Catálogo de Actividades</h2>

<div class="container" id="font5">
  </br>
<div class="table-responsive">
  <table class="table table-bordered table-info" style="color: #000000;" >
    <thead>
      <tr>
        <th scope="col">NOMBRE</th>
        <th scope="col">TIPO</th>
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
          <td>{{$datos->creditos}}</td>
          <td>{{$datos->nombre}} {{$datos->apellido_paterno}} {{$datos->apellido_materno}}</td>
          <td><a data-toggle="modal" href="#actividad_detalle">Detalles</a></td>
          <td><a href=""><i class="fa fa-plus fa-1x fa-fw"></i><span>&nbsp;INSCRIBIRSE</span></a></td>
         </tr>
      @endforeach
     </tbody>
     </table>
     </div>
     @if (count($dato))
     {{ $dato->links() }}
     @endif
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="actividad_detalle" aria-labelledby="#actividad_detalles " aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="container" id="font5">
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
