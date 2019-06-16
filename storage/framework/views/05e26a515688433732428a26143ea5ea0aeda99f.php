<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Foto de Perfil
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>

              <div class="container"  id="font6">
              </br>
          <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                          <form class="form-horizontal" method="POST" action="<?php echo e(route('act_foto')); ?>" validate enctype="multipart/form-data" data-toggle="validator">
                              <?php echo e(csrf_field()); ?>


                              <div class="form-group col-md-8" style="width: 2rem;" >
                                <span style="color: #000000"> </span>
                                <?php
                                $usuario_actual=auth()->user();
                               $id=$usuario_actual->id_user;
                               $imagen = DB::table('users')
                              ->select('users.imagenurl')
                              ->where('users.id_user',$id)
                              ->take(1)
                              ->first();
                              $im=$usuario_actual->imagenurl;

                     ?>
<?php if($usuario_actual->imagenurl==""){ $usuario_actual->imagenurl="image/foto.png"; }  ?>
                                <img class="image"  src="<?php echo e(asset("storage/$im")); ?>"   width="150px">



                                   <input type="file" name="foto" accept="image/png, .jpeg, .jpg" required>
                              </div>
<h1 style="font-size: 12px;"> <?php echo e($im); ?></h1>
                              <div class="form-group" align="center">
                                  <div class="col-md-6 col-md-offset-4">
                                      <button type="submit" class="btn btn-primary">
                                          Actualizar Foto
                                      </button>
                                  </div>
                              </div>
                          </form>
                        </div>

</br>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante/foto_perfil.blade.php ENDPATH**/ ?>