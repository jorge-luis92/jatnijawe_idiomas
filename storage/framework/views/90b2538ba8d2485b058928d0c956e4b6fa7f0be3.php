<?php $__env->startSection('seccion'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center"><?php echo e(__('ACCESO DENEGADO')); ?></div>
    </br>
                        <div class="form-group row mb-0" >
                            <div class="col-md-8 offset-md-4" >
                                <a align="center" role="button" class="btn btn-dark"  href=<?php echo e(route('login')); ?>>
                                    <?php echo e(__('Regresar a mi Perfil')); ?>


                                </a>
                            </div>


                </div>
              </br>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.redireccionar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/errores/intentosfallidos.blade.php ENDPATH**/ ?>