@extends('layouts.plantilla_admin')
@section('title')
: Editar Estudiante
@endsection
 @section('seccion')
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Editar Estudiante</h1>
<div class="container" id="font4">
  </br>                    <form method="POST" action="{{ route('registro_estudiante') }}">
                        @csrf
                         <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nombre" >{{ __('* Nombre(s)') }}</label>
                                <input id="nombre" type="text" value="{{$users->nombre}}" onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre') is-invalid @enderror" name="nombre"  required autocomplete="nombre">
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="apellido_paterno" >{{ __('* Apellido Paterno') }}</label>
                                  <input id="apellido_paterno" type="text" value="{{$users->apellido_paterno}}" onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('apellido_paterno') is-invalid @enderror" name="apellido_paterno"  required autocomplete="apellido_paterno">
                                @error('apellido_paterno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="apellido_materno" >{{ __('Apellido Materno') }}</label>
                                  <input id="apellido_materno" value="{{$users->apellido_materno}}" onKeyUp="this.value = this.value.toUpperCase()"  type="text" class="form-control @error('apellido_materno') is-invalid @enderror" name="apellido_materno" autocomplete="apellido_materno">
                                @error('apellido_materno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
</div>
                                <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="curp" >{{ __('* CURP') }}</label>
                                  <input id="curp" type="text" minlength="18" value="{{$users->curp}}"maxlength="18"  oninput="validarInput(this)"  onblur="setearFecha();"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('curp') is-invalid @enderror" name="curp" value="{{ old('curp') }}" required autocomplete="curp">
                                  <pre id="resultado"></pre>

                                @error('curp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group col-md-3">
                      <!--  <input type="text"  hidden size=10  maxlength=10 name="fecha_nac"  onblur="calcular_edad();" id="fecha_nac">-->
                            <label for="fecha_nacimiento" >{{ __('* Fecha de nacimiento') }}</label>
                                  <input id="fecha_nacimiento"    value="{{$users->fecha_nacimiento}}"type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" required>
                                @error('fecha_nacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group col-md-5">
                            <label for="lugar_nacimiento" >{{ __('* Lugar de Nacimiento') }}</label>
                                  <input id="lugar_nacimiento"  value="{{$users->lugar_nacimiento}}"onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control @error('lugar_nacimiento') is-invalid @enderror" name="lugar_nacimiento" required autocomplete="lugar_nacimiento">
                                @error('lugar_nacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                      </div>

                         <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="edad" >{{ __('* Edad') }}</label>
                                <input id="edad" type="tel" maxlength="2" value="{{$users->edad}}" class="form-control @error('edad') is-invalid @enderror" onkeypress="return numeros (event)" name="edad" autocomplete="edad" required autofocus>
                                @error('edad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group col-md-3">
                          <label for="genero">* Género</label>
                          <input name="genero"  id="genero" type="text" value="{{$users->genero}}" class="form-control" >
                        </div>


                        <div class="form-group col-md-4">
                          <label for="tipo_sangre">* Tipo de Sangre</label>
                            <input name="tipo_sangre"  id="tipo_sangre" type="text" value="{{$users->tipo_sangre}}" class="form-control" >
                        </div>
</div>

<hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">
</br>
                      <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="matricula" >{{ __('* Matricula') }}</label>
                                <input id="matricula" maxlength="12" type="tel" value="{{$users->matricula}}" class="form-control @error('matricula') is-invalid @enderror" onkeypress="return numeros (event)" name="matricula"  autocomplete="matricula" autofocus required>
                                @error('matricula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group col-md-3">
                          <label for="modalidad">* Modalidad</label>
                            <select name="modalidad" id="modalidad" required class="form-control">
                            <option value="">Seleccione una opción</option>
                            <option value="escolarizada">ESCOLARIZADA</option>
                            <option value="semiescolarizada">SEMIESCOLARIZADA</option>
                                </select>
                        </div>

                        <div class="form-group col-md-3">
                            <label for="fecha_ingreso" >{{ __('* Fecha Ingreso') }}</label>
                                  <input id="fecha_ingreso" value="{{$users->fecha_ingreso}}" type="date" class="form-control @error('fecha_ingreso') is-invalid @enderror" name="fecha_ingreso" required autocomplete="fecha_ingreso">
                                @error('fecha_ingreso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group col-md-3">
                          <label for="semestre">* Semestre</label>
                          <input id="semestre" type="tel" value="{{$users->semestre}}" maxlength="2" onkeypress="return numeros (event)" class="form-control @error('semestre') is-invalid @enderror"  name="semestre" autocomplete="grupo" autofocus>
                          @error('semestre')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-1">
                            <label for="grupo" >{{ __('* Grupo') }}</label>
                                <input id="grupo" type="text" maxlength="2" value="{{$users->grupo}}" onKeyUp="this.value = this.value.toUpperCase();" class="form-control @error('grupo') is-invalid @enderror"  name="grupo" autocomplete="grupo" autofocus>
                                @error('grupo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group col-md-3">
                          <label for="estatus">* Estatus</label>
                          <input id="estatus" type="text" value="{{$users->estatus}}" onKeyUp="this.value = this.value.toUpperCase();" class="form-control @error('estatus') is-invalid @enderror"  name="estatus" autocomplete="estatus" autofocus>
                          @error('estatus')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                        <div class="form-group col-md-5">
                            <label for="bachillerato_origen" >{{ __('* Bachillerato de Origen') }}</label>
                                <input id="bachillerato_origen" type="text" value="{{$users->bachillerato_origen}}" onKeyUp="this.value = this.value.toUpperCase();" class="form-control @error('bachillerato_origen') is-invalid @enderror"  name="bachillerato_origen" autocomplete="bachillerato_origen" autofocus>
                                @error('bachillerato_origen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="form-group col-md-3">
                            <label for="email" >{{ __('Correo') }}</label>
                                <input id="email" type="email" value="{{$emails->email}}" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-9" align="center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar') }}
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
