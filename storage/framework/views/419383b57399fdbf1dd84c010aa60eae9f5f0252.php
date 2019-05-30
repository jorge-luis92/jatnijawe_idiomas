<?php $__env->startSection('seccion'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container"  id="font5">
                <div class="card-header" style="opacity: 0.7;filter:alpha(opacity=5); color: #000000;"><?php echo e(__('Alta Tallerista')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('agregar_nuevo_usuario')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right"><?php echo e(__('RFC')); ?></label>

                            <div class="col-md-6">
                                <input  id="id" type="id" class="form-control <?php if ($errors->has('id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('id'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="id" value="<?php echo e(old('id')); ?>" required autocomplete="id" onKeyUp="this.value = this.value.toUpperCase();" >

                                <?php if ($errors->has('id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('id'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Usuario')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" >

                                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

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


                        <div class="form-group row">

                            <label for="tipo_usuario" class="col-md-4 col-form-label text-md-right">Tipo de Usuario</label>
                              <div class="col-md-6">
                              <select name="tipo_usuario" required class="form-control">
                              <option value="tallerista">Tallerista</option>
                            <!-- <option value="conferencista">Conferencista</option>-->
                      </select>
                      <?php if ($errors->has('tipo_usuario')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tipo_usuario'); ?>
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
endif; ?>" name="password" required autocomplete="new-password">

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

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirmar Contraseña')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Registrar')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </br>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\formacion_integral\gestion_tallerista/create.blade.php ENDPATH**/ ?>