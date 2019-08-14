<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Carreras Registradas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
<!--<h1 style="font-size: 3.5em; color: #000000; font-family: Medium;" align="center">"JATWEB"</h1>-->
  <h2 style="font-size: 1.7em; color: #000000;" align="center">Carreras Registradas</h2>
<div class="container" id="font7">
  <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </br>
    <div class="table-responsive" style="border:1px solid #819FF7;">
    <table class="table table-bordered table-striped"  style="color: #000000; font-size: 12px;">
    <thead>
      <tr>
        <th scope="col">CLAVE CARRERA</th>
        <th scope="col">CLAVE INSTITUCION</th>
        <th scope="col">FACULTAD</th>
        <th scope="col">CARRERA</th>
        <th scope="col">MODALIDAD</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $info_carrera; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr style="color: #000000;">
          <td><?php echo e($datos->clave_carrera); ?></td>
          <td><?php echo e($datos->clave_institucion); ?></td>
          <td><?php echo e($datos->facultad); ?></td>
          <td><?php echo e($datos->carrera); ?></td>
          <td><?php echo e($datos->modalidad); ?></td>
          </tr>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </tbody>
     </table>
     </div>
     <?php if(count($info_carrera)): ?>
     <?php echo e($info_carrera->links()); ?>

     <?php endif; ?>
   </br>
</div>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_planeacion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo/planeacion/carreras.blade.php ENDPATH**/ ?>