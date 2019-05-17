<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Perfil
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
<div class="container" id="font2">
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
<p style="Times New Roman, Times, serif, cursive; color: blue;">
  <span style="color: red;">NOTA: </span>
   Recuerda actualizar tus
   <span style="color: #190707">Datos</span> cada inicio de semestre</p>
   <p style="color: #000000"align="center">* Consulta el <a style="text-decoration: underline; color: #FFFFFF;"  href="">Manual de Usuario</a> </p>
</div>
</div>


  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jatnijawe\resources\views/estudiante/home_estudiante.blade.php ENDPATH**/ ?>