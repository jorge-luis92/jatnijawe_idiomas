<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
<div class="container">
<?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header" align="center"><?php echo e(__('Desactivar Extracurricular')); ?></div>
            </br>
   <label align="center">*Nota: Al dar clic en Finalizar no se podrá deshacer está acción </label>
              <div class="card-body">
                <form method="POST" action="<?php echo e(route('desactivar_extra')); ?>">
                <?php echo csrf_field(); ?>


                <div class="form-group row">
                    <label for="id_user" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('Nombre de estudiante')); ?></label>

                    <div class="col-md-6">
                      <input id="nombre_estudiante" type="text" value="<?php echo e($datos_estudiante->nombre); ?> <?php echo e($datos_estudiante->apellido_paterno); ?> <?php echo e($datos_estudiante->apellido_materno); ?>"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control" name="nombre_estudiante" disabled >
                        <?php if ($errors->has('nombre_estudiante')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre_estudiante'); ?>
                      <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                      </span>
                      <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                </div>

    <div class="form-group row">
        <label for="nombre_taller" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('Nombre de la Actividad:')); ?></label>
        <div class="col-md-6">
            <input id="nombre_taller" value="<?php echo e($datos_taller->nombre_ec); ?>" name="nombre_taller" type="text" class="form-control" disabled>
    </div>
  </div>
                <input name="id_extracurricular" hidden id="id_extracurricular" type="text" value="<?php echo e($datos->id_extracurricular); ?>">

    <div class="form-group row">
        <label for="observaciones" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('Observaciones de Taller:')); ?></label>
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
    <div class="form-group row">
        <label for="id_user" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('Correo:')); ?></label>
        <div class="col-md-6">
            <input id="email" type="email" disabled value="<?php echo e($datos_estudiante->email); ?>" onKeyUp="this.value = this.value.toUpperCase()" class="form-control" name="email">
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
    <input type="text" name="matricula"  hidden class="form-control" value="<?php echo e($estudiante_matricula); ?>">

    <div class="form-group row">
    <label for="asunto" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('Asunto:')); ?></label>
    <div class="col-md-6">
        <input id="asunto" name="asunto" type="text" value="Taller Cancelado" onKeyUp="this.value = this.value.toUpperCase()" class="form-control" required >
        <?php if ($errors->has('asunto')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('asunto'); ?>
      <span class="invalid-feedback" role="alert">
        <strong><?php echo e($message); ?></strong>
      </span>
      <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>
</div>

<div class="form-group row">
    <label for="contenido" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('Contenido del Mensaje:')); ?></label>
    <div class="col-md-6">
        <textarea id="contenido" name="contenido" rows="6" style="resize: both;" class="form-control" required ></textarea>
        <?php if ($errors->has('contenido')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('contenido'); ?>
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
          <?php echo e(__('Desactivar Taller')); ?>

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

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo/formacion_integral/gestion_talleres/desactivar_extra_estudiante.blade.php ENDPATH**/ ?>