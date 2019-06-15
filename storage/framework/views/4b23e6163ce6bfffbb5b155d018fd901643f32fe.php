<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Configuración de Contraseña
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>

              <div class="container"  id="font6">
              </br>
          <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                          <form class="form-horizontal" method="POST" action="<?php echo e(route('changePassword')); ?>" validate enctype="multipart/form-data" data-toggle="validator">
                              <?php echo e(csrf_field()); ?>


                              <div class="form-group col-md-5" style="width: 2rem;" >
                                <span style="color: #000000"> </span>
                                <?php
                                $usuario_actual=auth()->user();
                               $id=$usuario_actual->id_user;
                                if($usuario_actual->imagenurl==""){ $usuario_actual->imagenurl="image/foto.png"; }  ?>

                                <img class="image" src="<?=  $usuario_actual->imagenurl;  ?>" width="100px">
                                   <input type="file" name="foto" accept="image/png, .jpeg, .jpg" required>
                              </div>

                              <div class="form-group<?php echo e($errors->has('current-password') ? ' has-error' : ''); ?>">
                                  <label for="current-password" class="col-md-4 control-label">Contraseña Actual</label>

                                  <div class="col-md-6">
                                      <input id="current-password" type="password" class="form-control" name="current-password" required>

                                      <?php if($errors->has('current-password')): ?>
                                          <span class="help-block">
                                              <strong><?php echo e($errors->first('current-password')); ?></strong>
                                          </span>
                                      <?php endif; ?>
                                  </div>
                              </div>

                              <div class="form-group<?php echo e($errors->has('new-password') ? ' has-error' : ''); ?>">
                                  <label for="new-password" class="col-md-4 control-label">Nueva Contraseña</label>

                                  <div class="col-md-6">
                                      <input id="new-password" type="password" class="form-control" name="new-password" required>

                                      <?php if($errors->has('new-password')): ?>
                                          <span class="help-block">
                                              <strong><?php echo e($errors->first('new-password')); ?></strong>
                                          </span>
                                      <?php endif; ?>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="new-password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                                  <div class="col-md-6">
                                      <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                                  </div>
                              </div>

                              <div class="form-group" align="center">
                                  <div class="col-md-6 col-md-offset-4">
                                      <button type="submit" class="btn btn-primary">
                                          Actualizar Datos
                                      </button>
                                  </div>
                              </div>
                          </form>

</br>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante/configuracion_cuenta.blade.php ENDPATH**/ ?>