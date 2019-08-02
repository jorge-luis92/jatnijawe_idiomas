<?php if(auth()->check()): ?>
<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Perfil
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
<div class="container" id="font7">
   <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </br>
  <h1 style="font-size: 2.0em; color: #000000;" align="center">Perfil del Estudiante</h1>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<div class="nota_alumno">
<p style="Times New Roman, Times, serif, cursive; color: #FFFFFF;" align="center">
  <span style="color: #FFFFFF;"><strong>AVISO IMPORTANTE: </strong></span></br>
   Para tener acceso a todos los servicios del sistema debes leer y aceptar
   <span style="color: #190707">LOS LINEAMIENTOS</span> cada inicio de semestre</p>
   <p style="color: #000000"align="center"><a style="text-decoration: underline; color: #FFFFFF;"  href=<?php echo e(route('lineamientos')); ?>>Lineamientos</a> </p>
</div>
  <?php $__env->stopSection(); ?>
<?php endif; ?>

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante/home_estudiante.blade.php ENDPATH**/ ?>