<?php $__env->startSection('title'); ?>
: Administrativos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
<div class="container">
     <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="opacity: 0.7;filter:alpha(opacity=5);">
                <div class="card-header" align="center"><?php echo e(__('Inicio de Sesión')); ?></div>

                <div class="card-body">
                  <?php if(count($errors) > 0): ?>
                  <div class="alert alert-danger">
                    <ul>
                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><?php echo e($error); ?></li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                  </div>
                  <?php endif; ?>
                    <form method="POST" action="<?php echo e(route('admin')); ?> ">
                      <?php echo csrf_field(); ?>

                      <div class="form-group row">
                          <label for="username" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('Nombre de Usuario')); ?></label>

                          <div class="col-md-6">
                              <input id="username" type="text"  class="form-control <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="username" value="<?php echo e(old('username')); ?>" required autocomplete="username" autofocus>

                              <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?>
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
endif; ?>" name="password" required autocomplete="current-password">

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

                        <div class="form-group row mb-0">
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantillaperfil', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo/login_personal.blade.php ENDPATH**/ ?>