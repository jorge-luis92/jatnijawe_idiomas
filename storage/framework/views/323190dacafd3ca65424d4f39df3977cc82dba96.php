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
<p style="color: #000000; align: justify;"><span style="color: #000000;">NOTA: </span>Recuerda actualizar tus <span style="color: red;">Datos</span> cada inicio de semestre</br>
* Consulta el <a style="text-decoration: underline; color: #FFFFFF;"  href=<?php echo e(route('ma_estudiante')); ?>>Manual de Usuario</a></p>
</div>
</div>


  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante/home_estudiante.blade.php ENDPATH**/ ?>