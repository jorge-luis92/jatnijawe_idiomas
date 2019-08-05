<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Solicitud Rechazada
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--<h1 style="font-size: 2.0em; color: #000000;" align="center"><?php echo e($estudiante_matricula); ?> Replantamiento de Solicitud de Taller|</h1>-->
<div class="container">
<?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header" align="center"><?php echo e(__('Mensaje Nuevo')); ?></div>

              <div class="card-body">
                <form method="POST" action="<?php echo e(route('taller_rechazo')); ?>">
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
            <input id="asunto" name="asunto" type="text" value="Taller Rechazado" onKeyUp="this.value = this.value.toUpperCase()" class="form-control" required >
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
        <label for="nombre_taller" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('Nombre del Taller:')); ?></label>
        <div class="col-md-6">
            <input id="nombre_taller" value="<?php echo e($datos_taller->nombre_taller); ?>" name="nombre_taller" type="text" class="form-control" disabled>
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
        <button type="submit" class="btn btn-primary">
          <?php echo e(__('Enviar Notificación')); ?>

        </button>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/mails/notificacionrechazo.blade.php ENDPATH**/ ?>