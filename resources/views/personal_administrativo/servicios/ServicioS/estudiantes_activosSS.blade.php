<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_servicios')
@section('title')
: Estudiantes Activos
@endsection

@section('seccion')
 @include('flash-message')
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Estudiantes Activos que prestan Servicio Social</h1>
<div class="container" id="font5">
  </br>
  <div class="form-row">
  <label for="nombre" >{{ __('Buscar Estudiantes') }}</label>

<div class="form-group col-md-4">

       <input id="nombre" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre">
       @error('nombre')
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
     @enderror
</div>

   <div class="col-xs-offset-2 col-xs-9" align="center">
       <button type="submit" class="btn btn-primary">
           {{ __('Buscar') }}
       </button>
   </div>

<div class="table-responsive">
  <table class="table table-bordered table-info" style="color: #000000;" >
    <thead>
      <tr>
        <th scope="col">MATRICULA</th>
        <th scope="col">NOMBRE</th>
        <th colspan="2" >ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <tr>
             <th scope="row">6811400</th>
             <td>MARIA FRANCISCO GARCIA</td>
             <td>  <a data-toggle="modal" href="#">DETALLES</a></td>
             <td>  <a data-toggle="modal" href="#">AVANCE</a></td>
           </tr>

    </tbody>
  </table>
</div>


</div>

</div>
  @endsection
