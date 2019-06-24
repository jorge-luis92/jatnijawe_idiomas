<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_estudiante')
@section('title')
: Catálogo de Actividades
@endsection

@section('seccion')
<!--<h1 style="font-size: 3.5em; color: #000000; font-family: Medium;" align="center">"JATWEB"</h1>-->
  <h2 style="font-size: 1.7em; color: #000000;" align="center">Catálogo de Actividades</h2>

<div class="container" id="font7">
  @include('flash-message')
  </br>
<div class="table-responsive">
  <table class="table table-bordered table-info" style="color: #000000; font-size: 12px;" >
    <thead>
      <tr>
        <th scope="col">NOMBRE</th>
        <th scope="col">TIPO</th>
        <th scope="col">CREDITOS</th>
        <th scope="col">AREA</th>
        <th scope="col">MODALIDAD</th>
        <th scope="col">TUTOR</th>
        <th scope="col">DURACION</th>
        <th scope="col">HORARIO</th>
        <th scope="col">CUPO</th>
        <th colspan="1" >ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      @foreach($dato as $datos)
      <?php
      $usuario_actual=auth()->user();
      $id=$usuario_actual->id_user;
      $usuario=DB::table('detalle_extracurriculares')
      ->select('detalle_extracurriculares.actividad')
    //  ->where('detalle_extracurriculares.actividad', $datos->id_extracurricular)
      ->where([['detalle_extracurriculares.actividad',$datos->id_extracurricular], ['detalle_extracurriculares.matricula', $id],])
      ->first(1); ?>
      <tr style="color: #000000;">

          <td>{{$datos->nombre_ec}}</td>
          <td>{{$datos->tipo}} </td>
          <td>{{$datos->creditos}}</td>
          <td>{{$datos->area}}</td>
          <td>{{$datos->modalidad}}</td>
          <td>{{$datos->nombre}} {{$datos->apellido_paterno}} {{$datos->apellido_materno}}</td>
          <td>{{ date('d-m-Y', strtotime($datos->fecha_inicio)) }}
           <?php if(empty($datos->fecha_fin)){ $vacio=null; echo $vacio;} else{ echo date('d-m-Y', strtotime($datos->fecha_fin));}?></td>
          <td><?php if(empty($datos->dias_sem) && empty($datos->hora_fin)){ echo $datos->hora_inicio;} else{ echo $datos->dias_sem; echo "\n\n"; echo $datos->hora_inicio;echo " a "; echo $datos->hora_fin;} ?>
            </td>
            <td>{{$datos->control_cupo}}</td>
            <td><a href="inscripcion_extracurricular/{{ $datos->id_extracurricular}}/{{ $datos->creditos}}"><?php if(empty($usuario)){echo "INSCRIBIRSE";}?></a></td>
          </tr>
      @endforeach
     </tbody>
     </table>
     </div>
     @if (count($dato))
     {{ $dato->links() }}
     @endif
</div>

<div class="modal fade"  tabindex="-1" role="dialog"  id="actividad_detalle"  aria-labelledby="detalles_mi" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="width: 26rem; background-color: #cda434;">
      <div class="modal-header">
        <h5 class="modal-title" id="detalles_mi" style="color: #FFFFFF">Info de Taller</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container" align="left">
            <div class="card" >
      <div class="card-body">
        <h5 class="card-title">Nombre del Taller: </h5>
        <h6 class="card-subtitle mb-2 text-muted">Tutor: {{ Auth::user()->email }}</h6>
        <p class="card-text">Area: Cultural</p>
        <p>Fecha de Inicio: 02/03/2019</p>
        <p>Fecha de Terminación: 11/07/2019 </p>
      </div>
    </div>
   </div>
</div>
      </div>
    </div>
  </div>



  @endsection
