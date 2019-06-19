<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
:Registro de Estudiantes
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Estudiantes</h1>
<div class="container" id="font4">
</br>                    <form method="POST" action="<?php echo e(route('registro_estudiante_auxa')); ?>">
                        <?php echo csrf_field(); ?>

                         <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="nombre" ><?php echo e(__('* Nombre(s)')); ?></label>
                                <input id="nombre" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('nombre')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nombre" value="<?php echo e(old('nombre')); ?>" required autocomplete="nombre">
                                <?php if ($errors->has('nombre')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="apellido_paterno" ><?php echo e(__('* Apellido Paterno')); ?></label>
                                  <input id="apellido_paterno" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('apellido_paterno')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('apellido_paterno'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="apellido_paterno" value="<?php echo e(old('apellido_paterno')); ?>" required autocomplete="apellido_paterno">
                                <?php if ($errors->has('apellido_paterno')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('apellido_paterno'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="apellido_materno" ><?php echo e(__('Apellido Materno')); ?></label>
                                  <input id="apellido_materno"  onKeyUp="this.value = this.value.toUpperCase()"  type="text" class="form-control <?php if ($errors->has('apellido_materno')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('apellido_materno'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="apellido_materno" value="<?php echo e(old('apellido_materno')); ?>" autocomplete="apellido_materno">
                                <?php if ($errors->has('apellido_materno')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('apellido_materno'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
</div>
                                <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="curp" ><?php echo e(__('* CURP')); ?></label>
                                  <input id="curp" type="text" minlength="18" maxlength="18"  oninput="validarInput(this)"  onblur="setearFecha();"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('curp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('curp'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="curp" value="<?php echo e(old('curp')); ?>" required autocomplete="curp">
                                  <pre id="resultado"></pre>

                                <?php if ($errors->has('curp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('curp'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>

                        <div class="form-group col-md-3">
                      <!--  <input type="text"  hidden size=10  maxlength=10 name="fecha_nac"  onblur="calcular_edad();" id="fecha_nac">-->
                            <label for="fecha_nacimiento" ><?php echo e(__('* Fecha de nacimiento')); ?></label>
                                  <input id="fecha_nacimiento"  onfocus="calcular_edad();"   type="date" class="form-control <?php if ($errors->has('fecha_nacimiento')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha_nacimiento'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="fecha_nacimiento" required>
                                <?php if ($errors->has('fecha_nacimiento')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha_nacimiento'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>

                        <div class="form-group col-md-5">
                            <label for="lugar_nacimiento" ><?php echo e(__('* Lugar de Nacimiento')); ?></label>
                                  <input id="lugar_nacimiento"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('lugar_nacimiento')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('lugar_nacimiento'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="lugar_nacimiento" value="<?php echo e(old('lugar_nacimiento')); ?>" required autocomplete="lugar_nacimiento">
                                <?php if ($errors->has('lugar_nacimiento')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('lugar_nacimiento'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>


                      </div>

                         <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="edad" ><?php echo e(__('* Edad')); ?></label>
                                <input id="edad" type="tel" maxlength="2" onfocus="calcular_edad();" class="form-control <?php if ($errors->has('edad')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('edad'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" onkeypress="return numeros (event)" name="edad" autocomplete="edad" required autofocus>
                                <?php if ($errors->has('edad')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('edad'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>

                        <div class="form-group col-md-3">
                          <label for="genero">* Género</label>
                          <input name="genero"  id="genero" type="text" class="form-control" >
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
                            <label for="matricula" ><?php echo e(__('* Matricula')); ?></label>
                                <input id="matricula" maxlength="12" type="tel" class="form-control <?php if ($errors->has('matricula')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('matricula'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" onkeypress="return numeros (event)" name="matricula"  autocomplete="matricula" autofocus required>
                                <?php if ($errors->has('matricula')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('matricula'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
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
                            <label for="fecha_ingreso" ><?php echo e(__('* Fecha Ingreso')); ?></label>
                                  <input id="fecha_ingreso" type="date" class="form-control <?php if ($errors->has('fecha_ingreso')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha_ingreso'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="fecha_ingreso" required autocomplete="fecha_ingreso">
                                <?php if ($errors->has('fecha_ingreso')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha_ingreso'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
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
                            <label for="grupo" ><?php echo e(__('* Grupo')); ?></label>
                                <input id="grupo" type="text" maxlength="1" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('grupo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('grupo'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="grupo" autocomplete="grupo" autofocus>
                                <?php if ($errors->has('grupo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('grupo'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
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
                            <label for="bachillerato_origen" ><?php echo e(__('* Bachillerato de Origen')); ?></label>
                                <input id="bachillerato_origen" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('bachillerato_origen')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('bachillerato_origen'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="bachillerato_origen" autocomplete="bachillerato_origen" autofocus>
                                <?php if ($errors->has('bachillerato_origen')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('bachillerato_origen'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>


                        <div class="form-group col-md-3">
                            <label for="email" ><?php echo e(__('Correo')); ?></label>
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-9" align="center">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Registrar')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>

<?php $__env->stopSection(); ?>


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


    var  as= form.substring(10,11);
    if( as == 'H'){
    document.getElementById('genero').value = "MASCULINO" ;
    //alert(fe);HEVJ920901HOCRLR08
    }
    if( as == 'M'){
    document.getElementById('genero').value = "FEMEMINO" ;
    }
    var l = document.getElementById('curp').value;
  var  lug = l.substring(11,13);
  if(lug == 'AS'){
    document.getElementById('lugar_nacimiento').value = "AGUASCALIENTES";
  }
  if(lug == 'BC'){
    document.getElementById('lugar_nacimiento').value = "BAJA CALIFORNIA";
  }

  if(lug == 'BS'){
    document.getElementById('lugar_nacimiento').value = "BAJA CALIFORNIA SUR";
  }

  if(lug == 'CC'){
    document.getElementById('lugar_nacimiento').value = "CAMPECHE";
  }

  if(lug == 'CL'){
    document.getElementById('lugar_nacimiento').value = "COAHUILA";
  }

  if(lug == 'CM'){
    document.getElementById('lugar_nacimiento').value = "COLIMA";
  }

  if(lug == 'CS'){
    document.getElementById('lugar_nacimiento').value = "CHIAPAS";
  }

  if(lug == 'CH'){
    document.getElementById('lugar_nacimiento').value = "CHIHUAHUA";
  }

  if(lug == 'DF'){
    document.getElementById('lugar_nacimiento').value = "DISTRITO FEDERAL";
  }

  if(lug == 'DG'){
    document.getElementById('lugar_nacimiento').value = "DURANGO";
  }

  if(lug == 'GT'){
    document.getElementById('lugar_nacimiento').value = "GUANAJUATO";
  }

  if(lug == 'GR'){
    document.getElementById('lugar_nacimiento').value = "GUERRERO";
  }

  if(lug == 'HG'){
    document.getElementById('lugar_nacimiento').value = "HIDALGO";
  }

  if(lug == 'JC'){
    document.getElementById('lugar_nacimiento').value = "JALISCO";
  }

  if(lug == 'MC'){
    document.getElementById('lugar_nacimiento').value = "MÉXICO";
  }

  if(lug == 'MN'){
    document.getElementById('lugar_nacimiento').value = "MICHOACÁN";
  }
  if(lug == 'MS'){
    document.getElementById('lugar_nacimiento').value = "MORELOS";
  }

  if(lug == 'NT'){
    document.getElementById('lugar_nacimiento').value = "NAYARIT";
  }

  if(lug == 'NL'){
    document.getElementById('lugar_nacimiento').value = "NUEVO LEÓN";
  }

  if(lug == 'OC'){
  document.getElementById('lugar_nacimiento').value = "OAXACA";
  }

  if(lug == 'PL'){
    document.getElementById('lugar_nacimiento').value = "PUEBLA";
  }

  if(lug == 'QT'){
    document.getElementById('lugar_nacimiento').value = "QUERÉTARO";
  }

  if(lug == 'QR'){
    document.getElementById('lugar_nacimiento').value = "QUINTANA ROO";
  }

  if(lug == 'SP'){
    document.getElementById('lugar_nacimiento').value = "SANTA LUIS POTOSÍ";
  }

  if(lug == 'SL'){
    document.getElementById('lugar_nacimiento').value = "SINALOA";
  }

  if(lug == 'SR'){
    document.getElementById('lugar_nacimiento').value = "SONORA";
  }

  if(lug == 'TC'){
    document.getElementById('lugar_nacimiento').value = "TABASCO";
  }

  if(lug == 'TS'){
    document.getElementById('lugar_nacimiento').value = "TAMAULIPAS";
  }

  if(lug == 'TL'){
    document.getElementById('lugar_nacimiento').value = "TLAXCALA";
  }

  if(lug == 'VZ'){
    document.getElementById('lugar_nacimiento').value = "VERACRUZ";
  }

  if(lug == 'YN'){
    document.getElementById('lugar_nacimiento').value = "YUCATÁN";
  }

  if(lug == 'ZS'){
    document.getElementById('lugar_nacimiento').value = "ZACATECAS";
  }

  if(lug == 'NE'){
    document.getElementById('lugar_nacimiento').value = "NACIDO EN EL EXTRANJERO";
  }

  if(lug == ''){
    document.getElementById('lugar_nacimiento').value = "";
  }
    var ed = document.getElementById('fecha_nacimiento').value; //fecha de nacimiento en el formulario
    var fechaNacimiento = ed.split("-");
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
    document.getElementById('mes').value = mes;


}

</script>

<?php echo $__env->make('layouts.plantilla_auxadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\auxiliar_administrativo/registro_estudiante_aux.blade.php ENDPATH**/ ?>