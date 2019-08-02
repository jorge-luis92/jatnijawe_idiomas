<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_admin')
@section('title')
: Fechas de Actualización
@endsection

@section('seccion')
 @include('flash-message')
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Fechas de Actualización(Estudiante)</h1>
<div class="container" id="font7">
</br>                    <form method="POST" action="{{ route('agregar_fecha_actualizacion')}}">
                        @csrf
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="fecha_inicio" >{{ __('* Fecha de inicio') }}</label>
    <input id="fecha_inicio" type="date"  name="fecha_inicio"  min= "<?php echo date("Y-m-d");?>"  value="<?php if(empty($fechas->fecha_inicio)){ $vacio=null; echo $vacio;} else{ echo $fechas->fecha_inicio;} ?>" onblur="ba();"  class="form-control"  required>
    </div>
    <div class="form-group col-md-6">
      <label for="fecha_fin" >{{ __('* Fecha Final') }}</label>
      <input id="fecha_fin" type="date" name="fecha_fin" min="<?php echo date("Y-m-d");?>"  value="<?php if(empty($fechas->fecha_fin)){ $vacio=null; echo $vacio;} else{ echo $fechas->fecha_fin;} ?>"class="form-control"  required>
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
                    <input  type="text"  value="{{ $ss }} <?php echo date("Y-m-d");?>" class="form-control"  >
</div>

@endsection
