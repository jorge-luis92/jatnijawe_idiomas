<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_formacion_integral')
@section('title')
:Talleres
 @section('seccion')
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Talleres Registrados</h1>
 <div class="container" id="font4">
 </br>                    <form method="POST" action="{{ route('actividades_registradas') }}">
                         @csrf

                          <div class="form-row">
                         <div class="form-group col-md-4">
                             <label for="nombre" >{{ __('') }}</label>
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
                                     <th scope="col">ACTIVIDAD</th>
                                      <th scope="col">TIPO</th>
                                      <th scope="col">AREA</th>
                                       <th scope="col">MODALIDAD</th>
                                     <th scope="col">CREDITOS</th>
                                     <th scope="col">TUTOR</th>
                                     <th colspan="2" >ACCIONES</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <tr>
                                          <th scope="row">DANZA</th>
                                          <th scope="row">TALLER</th>
                                          <th scope="row">CULTURAL</th>
                                          <th scope="row">ESCOLARIZADO</th>
                                          <th scope="row">25</th>
                                          <td>  <a data-toggle="modal" href="#">DETALLES</a></td>
                                          <td>  <a data-toggle="modal" href="#">DESACTIVAR</a></td>

                                        </tr>


                                 </tbody>
                               </table>
                             </div>

                         </div>
                     </form>
                 </div>

 @endsection

 <script>
 function numeros(e){
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = " 0123456789";
  especiales = [8,37,39,46];

  tecla_especial = false
  for(var i in especiales){
 if(key == especiales[i]){
   tecla_especial = true;
   break;
      }
  }

  if(letras.indexOf(tecla)==-1 && !tecla_especial)
      return false;
 }
 </script>



  @endsection
