<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_admin')
@section('title')
: Períodos
@endsection

@section('seccion')
 @include('flash-message')
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Períodos - Semestre</h1>
<div class="container" id="font5">
</br>                    <form method="POST" action="{{ route('nuevo_periodo_agregar')}}">
                        @csrf


    <div class="form-row">

  <div class="form-group col-md-6">
    <label for="inicio" >{{ __('* Fecha de inicio') }}</label>
    <input id="inicio" type="date" name="inicio" min="<?php echo date("Y-m-d");?>" onblur="ba();"  class="form-control"  required>
    </div>

    <div class="form-group col-md-6">
      <label for="final" >{{ __('* Fecha Final') }}</label>
      <input id="final" type="date" name="final" min= "<?php echo date("Y-m-d");?>"  class="form-control" name="final" required>
            </div>
            </div>



                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-9" align="center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">
                  </br>
                    <h3 style="font-size: 1.0em; color: #0A122A; max-width: 280px;" align="left"><strong>Periodos Registrados</strong></h3>
                                          <div class="table-responsive" style="border:1px solid #819FF7;">
                          <table class="table table-bordered table-striped" style="color: #000000; font-size: 13px;"  >
                        <thead>
                          <tr>
                            <th scope="col">Inicio Periodo</th>
                            <th scope="col">Final de Periodo</th>
                            <th scope="col">Tipo de Periodo</th>
                            <th scope="col">Fecha de Creación</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($guardados as $p_guar)
                          <tr style="color: #000000;">

                              <td>{{ date('d-m-Y', strtotime($p_guar->inicio))}}</td>
                              <td>{{ date('d-m-Y', strtotime($p_guar->final))}}</td>
                              <td>{{$p_guar->estatus}}</td>
                              <td>{{ date('d-m-Y', strtotime($p_guar->created_at))}}</td>
                              </tr>
                              @endforeach
                         </tbody>
                         </table>
                       </br>
                         </div>
                         @if (count($guardados))
                         {{ $guardados->links() }}
                         @endif
                </div>


@endsection
<script>
function ba(){
  var ed = document.getElementById('inicio').value; //fecha de nacimiento en el formulario
  var fechaNacimiento = ed.split("-");
  var mes = fechaNacimiento[1];
  document.getElementById('ss').value = mes;
}
</script>
