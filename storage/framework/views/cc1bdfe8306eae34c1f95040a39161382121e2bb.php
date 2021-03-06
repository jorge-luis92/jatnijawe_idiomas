<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Mis Actividades
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
<!--<h1 style="font-size: 3.5em; color: #000000; font-family: Medium;" align="center">"JATWEB"</h1>-->
  <h2 style="font-size: 1.7em; color: #000000;" align="center">Actividades Extracurriculares </h2>
    <h2 style="font-size: 1.3em; color: #000000;" align="center"><em>Estudiante: </em><?php echo e(Auth::user()->name); ?>  </h2>

<div class="container" id="font2">
  </br>
  <h2 style="font-size: 1.0em; color: #0A122A;   max-width: 280px; text-decoration: underline;" align="left">AVANCE DE ACTIVIDADES:&nbsp; 2 horas</h2>

<div class="table-responsive">
  <table class="table table-bordered table-info" style="color: #000000;" >
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">CURSO</th>
        <th scope="col">CREDITOS</th>
        <th scope="col">AREA</th>
        <th scope="col">FECHA INICIO</th>
        <th scope="col">FECHA FIN</th>
        <th scope="col">TUTOR</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Relaciones Tóxicas</td>
        <td>2</td>
        <td>Cultural</td>
        <td>12/04/2018</td>
        <td>15/08/2018</td>
        <td>Lic. Kiara</td>
      </tr>
    </tbody>
  </table>
</div>
</div>


  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jatnijawe\resources\views/estudiante\mis_actividades/misActividades.blade.php ENDPATH**/ ?>