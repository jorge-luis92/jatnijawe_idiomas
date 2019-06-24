<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Registro Horas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Horas</h1>
<div class="container" id="font5">
</br>
<form method="POST" action="registrar_taller">
<?php echo csrf_field(); ?>
<div class="form-row">
    <div class="form-group col-md-7">
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

    <div class="form-group col-md-2">
        <label for="creditos" ><?php echo e(__('* Créditos')); ?></label>
        <input id="creditos" type="creditos" maxlength="2" class="form-control <?php if ($errors->has('creditos')) :
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
              <option value="ACADEMICA">ACADÉMICA</option>
              <option value="CULTURAL">CULTURAL</option>
              <option value="DEPORTIVA">DEPORTIVA</option>
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


<div class="form-group col-md-4">
    <label for="tutor">* Tutor</label>
    <select name="tutor" id="tutor" required class="form-control">
    <?php $__currentLoopData = $taller; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $talleres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo $talleres->id_tutor; ?>"><?php echo $talleres->nombre; ?> <?php echo $talleres->apellido_paterno; ?> <?php echo $talleres->apellido_materno; ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
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
function showCheckboxes() {
    var checkboxes = document.getElementById("checkboxes");
    if(checkboxes.classList.contains("hide")) {
        checkboxes.classList.remove("hide");
    } else {
        checkboxes.classList.add("hide");
    }
}
</script>
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

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\formacion_integral/registro_estudiantes.blade.php ENDPATH**/ ?>