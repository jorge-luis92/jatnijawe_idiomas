<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php echo $__env->make('estudiante\datos.datos_generales', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('estudiante\datos.datos_personales', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('estudiante\datos.datos_laborales', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('estudiante\datos.datos_medicos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('estudiante\mis_actividades.detalles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('estudiante\mis_actividades.gestion_mi_taller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title'); ?>
: Mis Actividades
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
<!--<h1 style="font-size: 3.5em; color: #000000; font-family: Medium;" align="center">"JATWEB"</h1>-->
  <h2 style="font-size: 1.7em; color: #000000;" align="center">TALLERES</h2>


<div class="container" id="font2">
  </br>

<div class="table-responsive">
  <table class="table table-bordered table-info" style="color: #000000;" >
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">CURSO</th>
        <th scope="col">ESTATUS</th>
        <th colspan="2" >ACCIONES</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <th scope="row">1</th>
        <td>RUGBY</td>
        <td>ACTIVO</td>
        <td>  <a data-toggle="modal" href="#detalles_taller">DETALLES</a></td>
        <td><a href="pdfs">DESCARGAR LISTA</a></td>
      </tr>

    </tbody>
  </table>

</div>
</div>


  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jatnijawe\resources\views/estudiante\mis_actividades/gestion_mi_taller.blade.php ENDPATH**/ ?>