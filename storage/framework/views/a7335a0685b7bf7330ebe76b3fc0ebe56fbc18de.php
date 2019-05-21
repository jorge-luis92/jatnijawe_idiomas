<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Cuenta
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center">Configuración de Cuenta</h1>
<div class="container" id="font4">
  <form  validate enctype="multipart/form-data" data-toggle="validator">
  <p style="font-size: 1.0em; color: #000000;"> Los Campos con un * son Obligatorios</p>
    <div class="form-row">

      <div class="form-group col-md-5" style="width: 2rem;" >
        <span style="color: #000000">* </span>
        <img class="image" src="image/foto.png" width="100px">
           <input type="file" accept="image/png, .jpeg, .jpg" required>
      </div>

      <div class="form-group  col-md-3">
          <label for="password" ><?php echo e(__('Contraseña')); ?></label>

              <input id="password" class="form-control" type="password" name="password">

              <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                  <span class="invalid-feedback" role="alert">
                      <strong><?php echo e($message); ?></strong>
                  </span>
              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

      </div>

      <div class="form-group  col-md-3">
          <label for="password-confirm" ><?php echo e(__('Confirmar Contraseña')); ?></label>
              <input id="password-confirm" class="form-control"  type="password" name="password_confirmation">

      </div>


</div>
<div class="form-group" id="labels">
 <br>
 <div class="col-xs-offset-2 col-xs-9" align="center">
     <input type="submit" class="btn btn-primary" name="agregar" value="Actualizar">
    <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
 </div>
</div>
</form>


</div>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jatnijawe\resources\views/estudiante/configuracion_cuenta.blade.php ENDPATH**/ ?>