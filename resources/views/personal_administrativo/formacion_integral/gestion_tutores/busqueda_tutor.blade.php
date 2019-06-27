<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_formacion_integral')
@section('title')
: Búsqueda Tutores
 @section('seccion')
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Tutores Registrados</h1>
 <div class="container" id="font4">
 </br>
                             <div class="table-responsive">
                               <table class="table table-bordered table-info" style="color: #000000;" >
                                 <thead>
                                   <tr>
                                     <th scope="col">NOMBRE</th>
                                      <th scope="col">EDAD</th>
                                     <th scope="col">GRADO DE ESTUDIOS</th>
                                      <th scope="col">TELEFONO CONTACTO</th>
                                       <th scope="col">PROCEDENCIA INTERNA</th>
                                        <th scope="col">PROCEDENCIA EXTERNA</th>
                                     <th colspan="1" >ACCIONES</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   @foreach($re as $res)
                                   <tr>
                                          <td>{{$res->nombre}} {{$res->apellido_paterno}} {{$res->apellido_materno}}</td>
                                          <td>{{$res->grado_estudios}}</td>
                                            <td>  <a data-toggle="modal" href="#">DESACTIVAR</a></td>
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
