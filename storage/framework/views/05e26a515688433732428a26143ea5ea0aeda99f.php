<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Foto de Perfil
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>

<div class="container" align="center" id="font6" >
      <div class="form">
        <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('act_foto')); ?>" validate enctype="multipart/form-data" data-toggle="validator">
                            <?php echo e(csrf_field()); ?>


                            <div style="width: 2rem;" >
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
<?php if($usuario_actual->imagenurl==""){ $im="foto.png"; }  ?>
</br>
                              <img   src="<?php echo e(asset("/image/users/$im")); ?>"  width="200" height="250" ></br>
</br>
                                 <input type="file" name="foto" accept="image/png, .jpeg, .jpg" required>
                             </div>
                             <br />
                            <div class="form-group" align="center">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Actualizar Foto
                                    </button>
                                </div>
                            </div>
                        </form>
</div>
</div>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante/foto_perfil.blade.php ENDPATH**/ ?>