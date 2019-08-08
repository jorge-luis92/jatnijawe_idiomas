<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Mis Talleres
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
<!--<h1 style="font-size: 3.5em; color: #000000; font-family: Medium;" align="center">"JATWEB"</h1>-->
  <h2 style="font-size: 1.7em; color: #000000;" align="center">TALLERES</h2>
<div class="container" id="font7">
    <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </br>

  <div class="table-responsive" style="border:1px solid #819FF7;">
  <table class="table table-bordered table-striped"  style="color: #000000; font-size: 12px;">
    <thead>
      <tr>
        <th scope="col">NOMBRE DE TALLER </th>
        <th scope="col">ESTATUS</th>
        <th colspan="2" >ACCIONES</th>
      </tr>
    </thead>
    <tbody>
  <?php $__currentLoopData = $dato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($datos->nombre_ec); ?></td>
        <td>ACTIVO</td>
        <td><a href="descargar_solicitud_taller_act/<?php echo e($datos->id_extracurricular); ?>" target="_blank">DETALLES</a></td>
        <td><a href="descarga_lista_estudiante/<?php echo e($datos->id_extracurricular); ?>" target="_blank">DESCARGAR LISTA</a></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </tbody>
     </table>
     </div>
     <?php if(count($dato)): ?>
     <?php echo e($dato->links()); ?>

     <?php endif; ?>
</div>


  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante\mis_actividades/mis_talleres.blade.php ENDPATH**/ ?>