<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Períodos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Períodos</h1>
<div class="container" id="font4">
</br>                    <form method="POST" action="">
                        <?php echo csrf_field(); ?>


    <div class="form-row">

  <div class="form-group col-md-6">
    <label for="inicio" ><?php echo e(__('* Fecha de inicio')); ?></label>
    <input id="inicio" type="date" class="form-control <?php if ($errors->has('inicio')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('inicio'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="inicio" required>
                                <?php if ($errors->has('inicio')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('inicio'); ?>
    <span class="invalid-feedback" role="alert">
    <strong><?php echo e($message); ?></strong>
    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>

    <div class="form-group col-md-6">
      <label for="final" ><?php echo e(__('* Fecha Final')); ?></label>
      <input id="final" type="date" class="form-control <?php if ($errors->has('final')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('final'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="final" required>
                                  <?php if ($errors->has('final')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('final'); ?>
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

<?php echo $__env->make('layouts.plantilla_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\admin_sistema/nuevo_periodo.blade.php ENDPATH**/ ?>