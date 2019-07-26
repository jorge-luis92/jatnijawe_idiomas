<link rel="shortcut icon" href="{{asset('logo.ico')}}">
@extends('layouts.plantilla_admin')
@section('title')
: Períodos
@endsection

@section('seccion')
 @include('flash-message')
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Períodos</h1>
<div class="container" id="font4">
</br>                    <form method="POST" action="">
                        @csrf


    <div class="form-row">

  <div class="form-group col-md-6">
    <label for="inicio" >{{ __('* Fecha de inicio') }}</label>
    <input id="inicio" type="date" class="form-control @error('inicio') is-invalid @enderror" name="inicio" required>
                                @error('inicio')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
                                @enderror
    </div>

    <div class="form-group col-md-6">
      <label for="final" >{{ __('* Fecha Final') }}</label>
      <input id="final" type="date" class="form-control @error('final') is-invalid @enderror" name="final" required>
                                  @error('final')
      <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
      </span>
                                  @enderror
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
