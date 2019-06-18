@extends('layouts.plantilla_admin')

@section('seccion')
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Estudiantes</h1>
<div class="container" id="font4">
</br>                    <form method="POST" action="{{ route('registro_estudiante') }}">
                        @csrf

                         <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="nombre" >{{ __('* Nombre(s)') }}</label>
                                <input id="nombre" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre">
                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="apellido_paterno" >{{ __('* Apellido Paterno') }}</label>
                                  <input id="apellido_paterno" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('apellido_paterno') is-invalid @enderror" name="apellido_paterno" value="{{ old('apellido_paterno') }}" required autocomplete="apellido_paterno">
                                @error('apellido_paterno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="apellido_materno" >{{ __('Apellido Materno') }}</label>
                                  <input id="apellido_materno"  onKeyUp="this.value = this.value.toUpperCase()"  type="text" class="form-control @error('apellido_materno') is-invalid @enderror" name="apellido_materno" value="{{ old('apellido_materno') }}" autocomplete="apellido_materno">
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
                                  <input id="curp" type="text" minlength="18" maxlength="18" onfocus="setearGenero();"  onfocus="validarInput(this)"  onblur="setearFecha();" onKeyUp="this.value = this.value.toUpperCase()" class="form-control @error('curp') is-invalid @enderror" name="curp" value="{{ old('curp') }}" required autocomplete="curp">
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
                                  <input id="fecha_nacimiento" onfocus="calcular_edad();"  type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" required>
                                @error('fecha_nacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group col-md-5">
                            <label for="lugar_nacimiento" >{{ __('* Lugar de Nacimiento') }}</label>
                                  <input id="lugar_nacimiento"   onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control @error('lugar_nacimiento') is-invalid @enderror" name="lugar_nacimiento" value="{{ old('lugar_nacimiento') }}" required autocomplete="lugar_nacimiento">
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
                                <input id="edad" type="tel" maxlength="2" class="form-control @error('edad') is-invalid @enderror" onkeypress="return numeros (event)" name="edad" autocomplete="edad" required autofocus>
                                @error('edad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group col-md-3">
                          <label for="genero">* Género</label>
                            <select name="genero" id="genero" required class="form-control">
                          <option value="">Seleccione una opción</option>
                          <option value="MASCULINO">MASCULINO</option>
                          <option value="FEMEMINO">FEMEMINO</option>
                    </select>
                        </div>


                        <div class="form-group col-md-4">
                          <label for="tipo_sangre">* Tipo de Sangre</label>
                            <select name="tipo_sangre" id="tipo_sangre" required class="form-control" autocomplete="tipo_sangre" autofocus>
                          <option value="">Seleccione una opción</option>
                          <option value="O RH+">0 +(Positivo) u ORh +(Positivo) </option>
                          <option value="O RH-">0 -(Negativo) u ORh -(Negativo)</option>
                          <option value="A RH+">A +(Positivo) ó ARh +(Positivo)</option>
                          <option value="A RH-">A -(Negativo) ó ARh -(Negativo)</option>
                          <option value="B RH+">B +(Positivo) ó BRh +(Positivo)</option>
                          <option value="B RH-">B -(Negativo) u BRh -(Negativo)</option>
                          <option value="AB RH+">AB +(Positivo) ó ABRh +(Positivo)</option>
                          <option value="AB RH-">AB -(Negativo) ó ABRh -(Negativo)</option>
                    </select>
                        </div>
</div>

<hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">
</br>
                      <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="matricula" >{{ __('* Matricula') }}</label>
                                <input id="matricula" maxlength="12" type="tel" class="form-control @error('matricula') is-invalid @enderror" onkeypress="return numeros (event)" name="matricula"  autocomplete="matricula" autofocus required>
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
                                  <input id="fecha_ingreso" type="date" class="form-control @error('fecha_ingreso') is-invalid @enderror" name="fecha_ingreso" required autocomplete="fecha_ingreso">
                                @error('fecha_ingreso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group col-md-3">
                          <label for="semestre">* Semestre</label>
                            <select name="semestre" id="semestre" required class="form-control">
                            <option value="">Seleccione una opción</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>

                                </select>
                        </div>

                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-1">
                            <label for="grupo" >{{ __('* Grupo') }}</label>
                                <input id="grupo" type="text" maxlength="1" onKeyUp="this.value = this.value.toUpperCase();" class="form-control @error('grupo') is-invalid @enderror"  name="grupo" autocomplete="grupo" autofocus>
                                @error('grupo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group col-md-3">
                          <label for="estatus">* Estatus</label>
                            <select name="estatus" id="estatus" required class="form-control">
                          <option value="">Seleccione una opción</option>
                          <option value="regular">REGULAR</option>
                          <option value="irregular">IRREGULAR</option>
                    </select>
                        </div>

                        <div class="form-group col-md-5">
                            <label for="bachillerato_origen" >{{ __('* Bachillerato de Origen') }}</label>
                                <input id="bachillerato_origen" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control @error('bachillerato_origen') is-invalid @enderror"  name="bachillerato_origen" autocomplete="bachillerato_origen" autofocus>
                                @error('bachillerato_origen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="form-group col-md-3">
                            <label for="email" >{{ __('Correo') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                                    {{ __('Registrar') }}
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

<script>
function curpValida(curp) {
    var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
        validado = curp.match(re);

    if (!validado)  //Coincide con el formato general?
    	return false;

    //Validar que coincida el dígito verificador
    function digitoVerificador(curp17) {
        //Fuente https://consultas.curp.gob.mx/CurpSP/
        var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
            lngSuma      = 0.0,
            lngDigito    = 0.0;
        for(var i=0; i<17; i++)
            lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
        lngDigito = 10 - lngSuma % 10;
        if (lngDigito == 10) return 0;
        return lngDigito;
    }

    if (validado[2] != digitoVerificador(validado[1]))
    	return false;

    return true; //Validado
}


//Handler para el evento cuando cambia el input
//Lleva la CURP a mayúsculas para validarlo
function validarInput(input) {
    var curp = input.value.toUpperCase(),
        resultado = document.getElementById("resultado"),
        valido = "No válido";

    if (curpValida(curp)) { // ?? Acá se comprueba
    	valido = "Válido"
        resultado.classList.add("ok");
    } else {
    	resultado.classList.remove("ok");
    }

    resultado.innerText =  "Formato: " + valido;
}
</script>
<script>
function calcular_edad()
{
    var form = document.getElementById('fecha_nacimiento').value; //fecha de nacimiento en el formulario
    var fechaNacimiento = form.split("-");
    var ano = fechaNacimiento[0];
    var mes = fechaNacimiento[1];
    var dia = fechaNacimiento[2];
    var fechaHoy = new Date(); // detecto la fecha actual y asigno el dia, mes y anno a variables distintas
    var ahora_ano = fechaHoy.getFullYear();
    var ahora_mes = fechaHoy.getMonth()+1;
    var ahora_dia = fechaHoy.getDate();

    var edad = (ahora_ano + 1900) - ano;
    if(ano < ahora_ano && edad >1899){
    if ( ahora_mes < mes )
    {
        edad--;
    }
    if (mes == ahora_mes && ahora_dia < dia)
    {
        edad--;
    }
    if (edad > 1900)
    {
        edad -= 1900;
    }
    if (edad == 1900)
    {
        edad =0;
    }
  }
  else {
    edad=0;
  }
    var meses=0;
    if(ahora_mes>mes)
        meses=ahora_mes-mes;
    if(ahora_mes<mes)
        meses=12-(mes-ahora_mes);
    document.getElementById('edad').value = edad;
    document.getElementById('mes').value = mes;}
</script>

<script>
function setearFecha() {
    var form = document.getElementById('curp').value;
var  a = form.substring(16,17);
//var che= form.substring(4,6);
if(a == 0){
var anio =  "19"+form.substring(4,6)+"-"+ form.substring(6,8)+ "-"+  form.substring(8,10);

document.getElementById('fecha_nacimiento').value = anio ;}
else {
  var anio ="20"+form.substring(4,6)+"-"+ form.substring(6,8)+ "-"+  form.substring(8,10);

  document.getElementById('fecha_nacimiento').value = anio ;
}
//alert(fe);HEVJ920901HOCRLR08
}
</script>

<script>
function setearGenero() {
    var form = document.getElementById('curp').value;
var  a = form.substring(10,11);
if( a == 'H'){
document.getElementById('lugar_nacimiento').value = "MASCULINO" ;
//alert(fe);HEVJ920901HOCRLR08
}
else {
  document.getElementById('lugar_nacimiento').value = "FEMEMINO" ;
}
}
</script>
