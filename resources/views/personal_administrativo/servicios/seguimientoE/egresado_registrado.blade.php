<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_servicios')
@section('title')
:Egresados
@endsection

@section('seccion')
 @include('flash-message')
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Seguimiento a Egresados</h1>
<div class="container" id="font5">
  </br>


  <div class="form-row">

<div class="form-group col-md-4">
</div>
 <div class="form-group col-md-4">
     <label for="nombre" >{{ __('') }}</label>
         <input id="nombre" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre">
         @error('nombre')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
       @enderror
 </div>

<br>
 <div class="form-group">
     <div class="col-xs-offset-1 col-xs-8" align="">
         <button type="submit" class="btn btn-primary">
             {{ __('Buscar') }}
         </button>
     </div>
 </div>
</form>
</div>


<div class="table-responsive">
  <table class="table table-bordered table-info" style="color: #000000;" >
    <thead>
      <tr>
        <th scope="col">MATRICULA</th>
        <th scope="col">NOMBRE</th>
        <th colspan="3" >VER</th>

      </tr>
    </thead>
    <tbody>
      <tr>
             <th scope="row">3316248</th>
             <td>FERNANDA LOPEZ</td>
                <td><a  href="{{ route ('generales_egresado_ver')}}">DATOS GENERALES</a></td>
                <td><a  href="{{ route ('cuestionario_egresado_ver')}}">CUESTIONARIO</a></td>
                <td><a  href="{{ route ('antecedentes_laborales_egresado')}}">DATOS GENERALES</a></td>
                       </tr>

    </tbody>
  </table>
</div>


</div>


  @endsection
