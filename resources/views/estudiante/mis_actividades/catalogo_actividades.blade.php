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
          <th colspan="2" >ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>LENGUAS INDÍGENAS</td>
        <td>CONFERENCIA</td>
        <td >2</td>
        <td><a data-toggle="modal" href="#catalogo_act">  <i class="fa fa-info-circle fa-1x fa-fw"></i><span>&nbsp;DETALLES</span></a></td>
        <td><a href="#" >
            <i class="fa fa-plus fa-1x fa-fw"></i><span>&nbsp;INSCRIBIRSE</span>
        </a></td>
      </tr>


    </tbody>
  </table>
</div>
<div class="modal fade"  tabindex="-1" role="dialog"  id="catalogo_act"  aria-labelledby="catalogo_acti" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="width: 26rem; background-color: #cda434;">
      <div class="modal-header">
        <h5 class="modal-title" id="catalogo_acti" style="color: #FFFFFF">Información</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container" align="left">
            <div class="card" >
      <div class="card-body">
        <h5 class="card-title">Nombre: LENGUAS INDÍGENAS</h5>
        <h6 class="card-subtitle mb-2 text-muted">Tutor: {{ Auth::user()->name }}</h6>
        <p class="card-text">Area: ACÁDEMICA</p>
        <p>Fecha de Inicio: 02/03/2019</p>
        <p>Fecha de Terminación: 11/07/2019 </p>
      </div>
    </div>
   </div>
</div>
      </div>
    </div>
  </div>
</div>


  @endsection
