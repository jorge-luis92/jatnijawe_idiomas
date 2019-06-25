<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_formacion_integral')
@section('title')
: Avance Estudiante
 @section('seccion')
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Historial del Estudiante </h1>
 <!--<a  href={{ route('busqueda_estudiante_fi')}} >  <i class="fas fa-reply fa-sm fa-fw mr-2 text-black-400"></i> Volver a Búsquedas
</a>-->
 <h2 style="font-size: 1.5em; color: #0A122A;   max-width: 280px;" align="left">&nbsp;* Avance de Horas &nbsp;</h2>
 <p style="font-size: 1.0em; color: #0A122A;">&nbsp; Académicas: {{$aca}} &nbsp; Culturales: {{$cul}} &nbsp; Deportivas: {{$dep}}
 &nbsp; Total: {{$suma}} </p>

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
           <th scope="col" >ESTATUS</th>
         </tr>
         <tbody>
       </thead>
         @foreach($dato as $datos)
         <tr style="color: #000000;">

             <td>{{$datos->nombre_ec}}</td>
             <td>{{$datos->tipo}} </td>
             <td>{{$datos->creditos}}</td>
             <td>{{$datos->area}}</td>
             <td>{{$datos->modalidad}}</td>
             <td>{{$datos->nombre}} {{$datos->apellido_paterno}} {{$datos->apellido_materno}}</td>
             <td>{{$datos->estado}}</td>
          <!--     <td><a href="acreditar_estudiantes_formacion/{{ $datos->actividad }}/{{$mat}}">Acreditar</a></td>
        -->    </tr>

         @endforeach
        </tbody>
        </table>
        </div>
        @if (count($dato))
        {{ $dato->links() }}
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
