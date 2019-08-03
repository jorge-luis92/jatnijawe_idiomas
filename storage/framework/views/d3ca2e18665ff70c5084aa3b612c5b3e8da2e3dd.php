<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Egresados
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center">Datos Generales del Egresado</h1>
<div class="container" id="font7">
    <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</br>
<form method="POST" action="<?php echo e(route('generales_egresado_actu')); ?>">
                        <?php echo csrf_field(); ?>
<p style="font-size: 1.0em; color: #000000;"> Los Campos con un * son Obligatorios</p>
   <div class="form-row">
     <div class="form-group col-md-12">
       <h6 align="left">Datos Personales</h6>
         </div>

     <div class="form-group col-md-3" id="labels">
       <label for="nombre">Nombre(s)</label>
       <input type="text" class="form-control" value="<?php echo e($u->nombre); ?>" disabled>
     </div>
     <div class="form-group col-md-3" id="labels">
       <label for="apellido_paterno">Apellido Paterno</label>
       <input type="text" class="form-control" id="ap_pat"  value="<?php echo e($u->apellido_paterno); ?>" disabled>
     </div>
     <div class="form-group col-md-3" id="labels">
       <label for="ap_mat">Apellido Materno</label>
       <input type="text" class="form-control" id="ap_mat" value="<?php echo e($u->apellido_materno); ?>" disabled>
     </div>

     <div class="form-group col-md-3" id="labels">
       <label for="genero">Género</label>
       <input type="text" class="form-control" id="genero" value="<?php echo e($u->genero); ?>" disabled>
     </div>
</div>

<hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">
</br>
 <div class="form-row">
   <div class="form-group col-md-12">
     <h6 align="left">Datos Escolares</h6>
       </div>
</div>
<div class="form-row">
  <div class="form-group col-md-4">
  <label for="bachillerato_origen" ><?php echo e(__('Bachillerato de Origen')); ?></label>
  <input id="bachillerato_origen" disabled value="<?php if(empty($u->bachillerato_origen)){ $vacio=null; echo $vacio;} else{ echo $u->bachillerato_origen;} ?>" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control"  name="bachillerato_origen">
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

<div class="form-group col-md-4">
<label for="nombre_escuela" ><?php echo e(__('Escuela en la que cursó la Licenciatura')); ?></label>
<input id="nombre_escuela" disabled type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control"  name="nombre_escuela">
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

<div class="form-group col-md-4" id="labels">
  <label for="modalidad">Modalidad</label>
  <input type="text" class="form-control" id="modalidad" value="<?php echo e($u->modalidad); ?>" disabled>
</div>

</div>

<div class="form-row">
<div class="form-group col-md-4">
<label for="generacion" ><?php echo e(__('* Generación')); ?></label>
<input id="generacion" name="generacion" required pattern="(([0-9]{4})+([-])+([0-9]{4}))" placeholder="Ejemplo: 2010-2014" value="<?php if(empty($pro->generacion)){ $vacio=null; echo $vacio;} else{ echo $pro->generacion;} ?>" autofocus type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('generacion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('generacion'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>">
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
  <label for="promedio_final">* Promedio Final</label>
  <input type="tel" name="promedio_final" maxlength="3" required pattern="(([0-9]{1})+(['.']{1})+([0-9]{1}))" placeholder="Ejemplo: 8.5"  value="<?php if(empty($pro->promedio_final)){ $vacio=null; echo $vacio;} else{ echo $pro->promedio_final;} ?>" onkeypress="return numeros (event)" class="form-control">
</div>

</div>

<hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">
</br>
<div class="form-row">
  <div class="form-group col-md-12">
    <h6 align="left">Lenguas Registradas</h6>
      </div>
</div>

<div class="table-responsive" style="border:1px solid #819FF7;" >
<table class="table table-bordered table-striped" >
    <thead>
      <tr>
        <th scope="col" id="labels">Nombre Lengua</th>
        <th scope="col" id="labels">Nivel de Entendimiento</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $l; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $le): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td id="labels"><?php echo $le->nombre_lengua; ?></td>
        <td id="labels"><?php echo $le->tipo; ?></td>
      </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
</br>
<hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">
</br>

<div class="form-row">
  <div class="form-group col-md-12">
    <h6 align="left">Enfermedades Y/O Alergias Registradas</h6>
      </div>
</div>
<div class="table-responsive" style="border:1px solid #819FF7;">
<table class="table table-bordered table-striped" >
    <thead>
      <tr>
        <th scope="col" id="labels">Nombre</th>
        <th scope="col" id="labels">Tipo</th>
        <th scope="col" id="labels">Descripción</th>
        <th scope="col" id="labels">Indicaciones</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $ea; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td id="labels"><?php echo $eas->nombre_enfermedadalergia; ?></td>
        <td id="labels"><?php echo $eas->tipo_enfermedadalergia; ?></td>
        <td id="labels"><?php echo $eas->descripcion; ?></td>
        <td id="labels"><?php echo $eas->indicaciones; ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
</br>
<hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">
</br>

<div class="form-row">

  <div class="form-group col-md-12">
    <h6 align="left">Contacto</h6>
      </div>
      <div class="form-group col-md-3">
        <label for="tel_local">Teléfono de Casa</label>
          <input type="tel" disabled  class="form-control <?php if ($errors->has('tel_local')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tel_local'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="tel_local" id="tel_local" value="<?php if(empty($nl->numero)){ $vacio=null; echo $vacio;} else{ echo $nl->numero;} ?>" maxlength="10"  onkeypress="return numeros (event)"  placeholder="Formato a 10 digitos -- Ejemplo: 9515115090"  pattern="([0-9]{10})">
            <?php if ($errors->has('tel_local')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tel_local'); ?>
            <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
            </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
      </div>
      <div class="form-group col-md-3">
        <label for="tel_celular">Teléfono Celular</label>
        <input type="tel"   disabled class="form-control <?php if ($errors->has('tel_celular')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tel_celular'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="tel_celular" id="tel_celular" value="<?php if(empty($nc->numero)){ $vacio=null; echo $vacio;} else{ echo $nc->numero;} ?>" maxlength="10"  onkeypress="return numeros (event)"  placeholder="Formato a 10 digitos  -- Ejemplo: 9511234567"  pattern="([0-9]{3})([0-9]{7})" required>
          <?php if ($errors->has('tel_celular')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tel_celular'); ?>
          <span class="invalid-feedback" role="alert">
          <strong><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
      </div>

  <div class="form-group col-md-3">
    <label for="contacto_persona">Contacto de un familiar</label>
    <input type="tel" name="tel_emergencia" maxlength="10" disabled class="form-control" value="<?php if(empty($ne->numero)){ $vacio=null; echo $vacio;} else{ echo $ne->numero;} ?>" onkeypress="return numeros (event)" required id="tel_emergencia" placeholder="Teléfono de Emergencia a 10 dígitos" pattern="([0-9]{3})([0-9]{7})" >
  </div>

      <div class="form-group col-md-3">
      <label for="email" ><?php echo e(__('Correo')); ?></label>
      <input id="email" type="email"  disabled class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(Auth::user()->email); ?>" autocomplete="email">
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

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/seguimiento_egresadosP/generales_egresado.blade.php ENDPATH**/ ?>