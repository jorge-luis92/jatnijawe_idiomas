<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Catálogo de Actividades
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
<!--<h1 style="font-size: 3.5em; color: #000000; font-family: Medium;" align="center">"JATWEB"</h1>-->
  <h2 style="font-size: 1.7em; color: #000000;" align="center">Catálogo de Actividades</h2>

<div class="container" id="font5">
  </br>
<div class="table-responsive">
  <table class="table table-bordered table-info" style="color: #000000;" >
    <thead>
      <tr>
        <th scope="col">NOMBRE</th>
        <th scope="col">TIPO</th>
        <th scope="col">CREDITOS</th>
          <th scope="col">TUTOR</th>
          <th colspan="2" >ACCIONES</th>
      </tr>
    </thead>

    <tbody>
      <?php $__currentLoopData = $dato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr style="color: #000000;">
          <td><?php echo e($datos->nombre_ec); ?></td>
          <td><?php echo e($datos->tipo); ?> </td>
          <td><?php echo e($datos->creditos); ?></td>
          <td><?php echo e($datos->nombre); ?> <?php echo e($datos->apellido_paterno); ?> <?php echo e($datos->apellido_materno); ?></td>
          <td><a data-toggle="modal" href="#actividad_detalle">Detalles</a></td>
          <td><a href=""><i class="fa fa-plus fa-1x fa-fw"></i><span>&nbsp;INSCRIBIRSE</span></a></td>
         </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </tbody>
     </table>
     </div>
     <?php if(count($dato)): ?>
     <?php echo e($dato->links()); ?>

     <?php endif; ?>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="actividad_detalle" aria-labelledby="#actividad_detalles " aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="container" id="font5">
        </br>
      <div class="table-responsive">
        <table class="table table-bordered table-info" style="color: #000000;" >
          <thead>
            <tr>
              <th scope="col">Fecha Inicio</th>
              <th scope="col">Fecha Terminación</th>
              <th scope="col">Hora Inicio</th>
              <th scope="col">Hora Fin</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $dato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo $datos->fecha_inicio; ?></td>
              <td><?php echo $datos->fecha_fin; ?></td>
              <td><?php echo $datos->hora_inicio; ?></td>
              <td><?php echo $datos->hora_fin; ?></td>
            </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
      <?php if(count($dato)): ?>
        <?php echo e($dato->links()); ?>

      <?php endif; ?>
      </div>
    </div>
  </div>
</div>


  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante\mis_actividades/catalogo_actividades.blade.php ENDPATH**/ ?>