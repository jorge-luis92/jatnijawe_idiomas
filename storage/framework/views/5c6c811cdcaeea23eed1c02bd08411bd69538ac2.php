<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Registro Taller
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Actividades Extracurriculares: Talleres</h1>
<div class="container" id="font7">
</br>
<form method="POST" action="">
<?php echo csrf_field(); ?>
<div class="form-row">
    <div class="form-group col-md-8">
          <label for="nombre_ec" ><?php echo e(__('* Nombre del Taller')); ?></label>
          <input id="nombre_ec" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('nombre_ec')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre_ec'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nombre_ec" value="<?php echo e(old('nombre_ec')); ?>" required autocomplete="nombre_ec">
            <?php if ($errors->has('nombre_ec')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre_ec'); ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>

    <div class="form-group col-md-1">
        <label for="creditos" ><?php echo e(__('* Créditos')); ?></label>
        <input id="creditos" type="creditos" maxlength="1" class="form-control <?php if ($errors->has('creditos')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('creditos'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" onkeypress="return numeros (event)" name="creditos" autocomplete="creditos" required autofocus>
        <?php if ($errors->has('creditos')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('creditos'); ?>
        <span class="invalid-feedback" role="alert">
          <strong><?php echo e($message); ?></strong>
        </span>
        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>

    <div class="form-group col-md-3">
        <label for="area">* Área</label>
        <select name="area" id="area" required class="form-control">
              <option value="">Seleccione una opción</option>
              <option value="MASCULINO">ACADÉMICA</option>
              <option value="FEMEMINO">CULTURAL</option>
              <option value="FEMEMINO">DEPORTIVA</option>
        </select>
    </div>

</div>

<div class="form-row">

    <div class="form-group col-md-3">
        <label for="modalidad">* Modalidad</label>
        <select name="modalidad" id="modalidad" required class="form-control">
        <option value="">Seleccione una opción</option>
        <option value="ESCOLARIZADO">ESCOLARIZADO</option>
        <option value="SEMIESCOLARIZADO">SEMIESCOLARIZADO</option>
        </select>
    </div>


    <div class="form-group col-md-2">
        <label for="cupo" ><?php echo e(__('* Cupo')); ?></label>
        <input id="cupo" type="tel" maxlength="3" class="form-control <?php if ($errors->has('cupo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cupo'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" onkeypress="return numeros (event)" name="cupo" autocomplete="cupo" required autofocus>
        <?php if ($errors->has('cupo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cupo'); ?>
        <span class="invalid-feedback" role="alert">
        <strong><?php echo e($message); ?></strong>
        </span>
        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>

    <div class="form-group col-md-7">
          <label for="lugar" ><?php echo e(__('* Lugar')); ?></label>
          <input id="lugar" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('lugar')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('lugar'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="lugar" value="<?php echo e(old('lugar')); ?>" required autocomplete="lugar">
            <?php if ($errors->has('lugar')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('lugar'); ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>

  </div>


  <div class="form-row">
        <div class="form-group col-md-3">
        <label for="fecha_inicio" ><?php echo e(__('* Fecha de Inicio')); ?></label>
        <input id="fecha_inicio" type="date" class="form-control <?php if ($errors->has('fecha_inicio')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha_inicio'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="fecha_inicio" required>
        <?php if ($errors->has('fecha_inicio')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha_inicio'); ?>
        <span class="invalid-feedback" role="alert">
        <strong><?php echo e($message); ?></strong>
        </span>
        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>

  <div class="form-group col-md-3">
       <label for="fecha_fin" ><?php echo e(__('* Fecha de Terminación')); ?></label>
       <input id="fecha_fin" type="date" class="form-control <?php if ($errors->has('fecha_fin')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha_fin'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="fecha_fin" required>
       <?php if ($errors->has('fecha_fin')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha_fin'); ?>
       <span class="invalid-feedback" role="alert">
       <strong><?php echo e($message); ?></strong>
       </span>
      <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
   </div>

  <div class="form-group col-md-3">
        <label for="hora_inicio">* Hora de entrada</label>
        <input type="time" class="form-control"  id="hora_inicio" required class="form-control" >
  </div>

<div class="form-group col-md-3">
    <label for="hora_fin">* Hora de salida</label>
    <input type="time" class="form-control"  id="hora_fin" required class="form-control" >
</div>
</div>

<div class="form-row">

  <div class="form-group col-md-4">
    <label for="dias_sem">* Días de la semana</label>
      <select name="dias_sem" id="dias_sem" required class="form-control">
     <option value="">Seleccione una opción</option>
     <option value="1">LUNES A VIERNES</option>
     <option value="2">SÁBADO</option>
     <option value="3">LUNES</option>
     <option value="4">MARTES </option>
     <option value="5">MIERCOLES</option>
     <option value="6">MIERCOLES</option>
     <option value="7">JUEVES</option>
     <option value="8">VIERENES</option>
</select>
</div>


<div class="form-group col-md-3">
    <label for="tutor">* Tutor</label>
    <select name="tutor" id="tutor" required class="form-control">
    <option value="">Seleccione una opción</option>
    <option value="">Tutor</option>
    </select>
</div>

  <div class="form-group col-md-5">
      <label for="materiales" ><?php echo e(__('* Materiales')); ?></label>
      <input id="materiales" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('materiales')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('materiales'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="materiales" value="<?php echo e(old('materiales')); ?>" required autocomplete="materiales">
        <?php if ($errors->has('materiales')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('materiales'); ?>
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

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\formacion_integral\gestion_talleres/registro_taller.blade.php ENDPATH**/ ?>