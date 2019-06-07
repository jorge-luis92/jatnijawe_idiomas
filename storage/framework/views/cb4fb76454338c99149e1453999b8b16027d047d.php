<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
</br>
<div class="container" id="font2">
  <h2 style="font-size: 1.8em; color: #000000;" align="center">Perfil: Coordinadora Formación Integral</h2>
   <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<div class="nota_alumno">
   <p style="color: #000000"align="center">* Para cualquier duda consulte el <a style="text-decoration: underline;" href="">Manual de Usuario</a> </p>
</div>
</div>


  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\formacion_integral/home_formacion.blade.php ENDPATH**/ ?>