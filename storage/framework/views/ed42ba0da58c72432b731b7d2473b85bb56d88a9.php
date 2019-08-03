<?php $__env->startSection('title'); ?>
: Estudiantes
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
<div class="container">
  <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="opacity: 0.7;filter:alpha(opacity=5);">
                <div class="card-header" align="center"><?php echo e(__('Inicio de Sesión')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login_studiante')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <label for="id_user" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('Matrícula')); ?></label>

                            <div class="col-md-6">
                                <input id="id_user" type="tel" onkeypress="return numeros (event)" class="form-control <?php if ($errors->has('id_user')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('id_user'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="id_user" value="<?php echo e(old('id_user')); ?>" required autocomplete="id_user" autofocus>

                                <?php if ($errors->has('id_user')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('id_user'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Contraseña')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('password')); ?>" name="password" required >

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
                        </div>



                        <div class="form-group row mb-0" >
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Ingresar')); ?>

                                </button>
                                <?php if(Route::has('password.request')): ?>
                                   <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                       <?php echo e(__('¿Olvidaste tu Contraseña?')); ?>

                                   </a>
                               <?php endif; ?>
                                    </div>



                        </div>

                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

<?php echo $__env->make('layouts.plantillaperfil', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante/login_studiante.blade.php ENDPATH**/ ?>