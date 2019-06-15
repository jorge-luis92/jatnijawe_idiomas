<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>

  <div class="container" id="font2" >
    <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if(session('status')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
    </br>
    <div class="form-row">
      <div class="form-group  col-md-12">
            <a href=<?php echo e(route('admin')); ?> class="btn btn-primary" role="button" aria-pressed="true">ADMINISTRATIVOS</a>
      </div>

 </br>

 <div class="form-group col-md-6" align="center">
        <a href=<?php echo e(route('login')); ?> class="btn btn-primary" role="button" aria-pressed="true">ESTUDIANTES</a>
      </div>
      <div class="form-group col-md-6" align="center">
    <a href=<?php echo e(route('tallerista')); ?> class="btn btn-primary" role="button" aria-pressed="true">TALLERISTAS</a>
    </div>

</br>
</br>
</br>
</br>

</div>
<div class="nota">
<p style="Times New Roman, Times, serif, cursive; color: blue;"><span style="color: red;">NOTA: </span> Seleccione su <span style="color: #190707;">Usuario</span> de acuerdo al Rol que desempeña en la Facultad de Idiomas </p>
</div>
</div>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantillaperfil', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/perfiles.blade.php ENDPATH**/ ?>