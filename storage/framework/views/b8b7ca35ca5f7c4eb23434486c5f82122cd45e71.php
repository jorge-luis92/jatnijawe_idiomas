<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
<div class="container">
<?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header" align="center"><?php echo e(__('Finalizar Extracurricular')); ?></div>
            </br>
   <label align="center">*Nota: Al dar clic en Finalizar no se podrá deshacer está acción </label>
              <div class="card-body">
                <form method="POST" action="<?php echo e(route('finalizar_talleres')); ?>">
                <?php echo csrf_field(); ?>

    <div class="form-group row">
        <label for="nombre_taller" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('Nombre de la Actividad:')); ?></label>
        <div class="col-md-6">
            <input id="nombre_taller" value="<?php echo e($datos->nombre_ec); ?>" name="nombre_taller" type="text" class="form-control" disabled>
    </div>
  </div>


    <div class="form-group row">
        <label for="observaciones" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('Observaciones:')); ?></label>
        <div class="col-md-6">
            <textarea id="observaciones" name="observaciones" rows="6" style="resize: both;" class="form-control" required ></textarea>
            <?php if ($errors->has('observaciones')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('observaciones'); ?>
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
        <button class="btn btn-primary" type="submit" >
          <?php echo e(__('Finalizar Taller')); ?>

        </button>
    </div>
</div>
<a class="dropdown-item" >

</form>
</div>
</div>
</div>
</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo/formacion_integral/gestion_talleres/finalizar_taller_admin.blade.php ENDPATH**/ ?>