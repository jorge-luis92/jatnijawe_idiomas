<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Egresados
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center">Datos Generales del Egresado</h1>
<div class="container" id="font4">
</br>
<form method="POST" action="<?php echo e(route('generales_egresado')); ?>">
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
<div class="form-group col-md-5">
  <label for="genero">* Género</label>
    <select name="genero" id="genero" required class="form-control">
  <option value="">Seleccione una opción</option>
  <option value="MASCULINO">MASCULINO</option>
  <option value="FEMEMINO">FEMEMINO</option>
</select>
</div>
</div>

<hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">
</br>
 <div class="form-row">
<div class="radio col-md-12" id="labels">
  <label>* ¿Hablante de alguna Lengua?</label>

 <input type="radio" id="si_lengua" name="lengua" value="si_lengua" onclick="checar()" required >
 <label for="si_actividad">Si</label>

 <input type="radio" id="no_lengua" name="lengua" value="no_lengua" onclick="nochecar()" required>
 <label for="no_actividad">No</label>

</div>
</div>
<div class="form-row">
<div class="form-group col-md-5" id="labels">
<label for="nombre_lengua">Nombre de Lengua</label>
</br>
<input type="text"  name="nombre_lengua" id="nombre_lengua" required disabled class='inputText'  placeholder="Especifica" value="<?php if(empty($l->nombre_lengua)){ $vacio=null; echo $vacio;} else{ echo $l->nombre_lengua;} ?>" >
</div>

<div class="form-group col-md-4">
<label for="tipo_lengua">Nivel de Comprensión </label>
  <select name="tipo_lengua" id="tipo_lengua" required disabled class='inputText'>
  <option value="">Seleccione una opción</option>
  <option value="entiende">Entiende</option>
  <option value="entiende_habla">Entiende y Habla</option>
  <option value="entiende_habla_escribe">Entiende, Habla y Escribe</option>
      </select>
</div>
</div>


</br>
<div class="form-row">
<div class="radio col-md-12">
  <label>* ¿Sufres alguna Enfermedad?</label>
 <input type="radio" id="si_enfermedad" name="enfermedades" value="si_enfermedad" onclick="habilita_enfermedad()" required>
 <label for="si_enfermedad">Si</label>

 <input type="radio" id="no_enfermedad" name="enfermedades" value="no_enfermedad" onclick="deshabilita_enfermedad()" required>
 <label for="si_enfermedad">No</label>
 </div>
 </div>
 <div class="form-row">
 <div class="form-group col-md-4">
   <label for="nombre_enfermedad">Nombre Enfermedad</label>
   <input type="text" class="inputEnfermedad" id="nombre_enfermedad" placeholder="Nombre Enfermedad" disabled required>
 </div>
 <div class="form-group col-md-4">
   <label for="descripcion_enfermedad">Descripción</label>
   <textarea class="inputEnfermedad" id="descripción" placeholder="Descripción Enfermedad" disabled required ></textarea>
         </div>
 <div class="form-group col-md-4">
   <label for="indicacion_enfermedad">Indicaciones</label>
   <textarea class="inputEnfermedad" id="indicacion_enfermedad" placeholder="Indicaciones Enfermedad" disabled required></textarea>
 </div>
</div>



<hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">
</br>



 <div class="form-row">
   <div class="form-group col-md-12">
     <h6 align="left">Datos Escolares</h6>
       </div>

  <div class="form-group col-md-12">
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
</div>

<div class="form-row">
 <div class="form-group col-md-12">
 <label for="nombre_escuela" ><?php echo e(__('Escuela en la que cursó la Licenciatura')); ?></label>
 <input id="nombre_escuela" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('nombre_escuela')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre_escuela'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="nombre_escuela" autocomplete="nombre_escuela" autofocus>
   <?php if ($errors->has('nombre_escuela')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre_escuela'); ?>
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
    <label for="modalidad">Sistema/Modalidad</label>
      <select name="modalidad" id="modalidad" required class="form-control">
      <option value="">Seleccione una opción</option>
      <option value="escolarizada">ESCOLARIZADA</option>
      <option value="semiescolarizada">SEMIESCOLARIZADA</option>
      <option value="flexi">FLEXI</option>
          </select>
</div>

<div class="form-group col-md-4">
<label for="generacion" ><?php echo e(__('Generación')); ?></label>
<input id="generacion" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('generacion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('generacion'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="generacion" autocomplete="generacion" autofocus>
  <?php if ($errors->has('generacion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('generacion'); ?>
<span class="invalid-feedback" role="alert">
<strong><?php echo e($message); ?></strong>
</span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
</div>
<div class="form-group col-md-3" id="labels">
  <label for="promedio_final">Promedio Final</label>
  <input type="number" class="form-control" id="promedio_final">
</div>

</div>


<hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">
</br>

<div class="form-row">

  <div class="form-group col-md-12">
    <h6 align="left">Contacto</h6>
      </div>
  <div class="form-group col-md-6">
    <label for="tel_local">Teléfono Local</label>
      <input type="tel"  class="form-control" id="tel_local" maxlength="10"  onkeypress="return numeros (event)"  placeholder="Formato a 10 digitos -- Ejemplo: 9515115090"  pattern="([0-9]{3})([0-9]{7})">
  </div>
  <div class="form-group col-md-6">
    <label for="tel_celular">* Teléfono Celular</label>
    <input type="tel"  class="form-control" id="tel_celular" maxlength="10"  onkeypress="return numeros (event)"  placeholder="Formato a 10 digitos  -- Ejemplo: 9511234567"  pattern="([0-9]{3})([0-9]{7})" required>
  </div>
</div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="contacto_persona">Contacto de un familiar</label>
    <input type="tel" maxlength="10" class="form-control" onkeypress="return numeros (event)" id="contacto_persona" placeholder="Teléfono de un Familiar a 10 dígitos" pattern="([0-9]{3})([0-9]{7})" required>
  </div>

      <div class="form-group col-md-6">
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
                                    <?php echo e(__('Guardar')); ?>

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

<?php echo $__env->make('layouts.plantilla_seguimiento_egresados', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/seguimiento_egresadosP/generales_egresado.blade.php ENDPATH**/ ?>