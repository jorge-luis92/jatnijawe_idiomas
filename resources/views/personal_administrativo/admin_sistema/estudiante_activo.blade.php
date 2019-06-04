<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_admin')
@section('title')
: Estudiantes Activos
@endsection

@section('seccion')
 @include('flash-message')
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Estudiantes Activos</h1>
<div class="container" id="font5">
  </br>
<div class="table-responsive">
  <table class="table table-bordered table-info" style="color: #000000;" >
    <thead>
      <tr>
        <th scope="col">MATRICULA</th>
        <th scope="col">NOMBRE</th>
        <th colspan="1" >ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <tr>
             <th scope="row">13161458</th>
             <td>AMI MEOW</td>
             <td>  <a data-toggle="modal" href="#">DESACTIVAR</a></td>

           </tr>

    </tbody>
  </table>
</div>


</div>


  @endsection
