<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Catálogo de Actividades
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
<!--<h1 style="font-size: 3.5em; color: #000000; font-family: Medium;" align="center">"JATWEB"</h1>-->
  <h2 style="font-size: 1.7em; color: #000000;" align="center">Catálogo de Actividades</h2>

<div class="container" id="font7">
  <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </br>
<div class="table-responsive">
  <table class="table table-bordered table-info" style="color: #000000; font-size: 12px;" >
    <thead>
      <tr>
        <th scope="col">NOMBRE</th>
        <th scope="col">TIPO</th>
        <th scope="col">CREDITOS</th>
        <th scope="col">AREA</th>
        <th scope="col">MODALIDAD</th>
        <th scope="col">TUTOR</th>
        <th scope="col">DURACION</th>
        <th scope="col">HORARIO</th>
        <th colspan="1" >ACCIONES</th>
      </tr>
    </thead>

    <tbody>
      <?php $__currentLoopData = $dato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr style="color: #000000;">

          <td><?php echo e($datos->nombre_ec); ?></td>
          <td><?php echo e($datos->tipo); ?> </td>
          <td><?php echo e($datos->creditos); ?></td>
          <td><?php echo e($datos->area); ?></td>
          <td><?php echo e($datos->modalidad); ?></td>
          <td><?php echo e($datos->nombre); ?> <?php echo e($datos->apellido_paterno); ?> <?php echo e($datos->apellido_materno); ?></td>
          <td><?php echo e(date('d-m-Y', strtotime($datos->fecha_inicio))); ?>

           <?php if(empty($datos->fecha_fin)){ $vacio=null; echo $vacio;} else{ echo date('d-m-Y', strtotime($datos->fecha_inicio));}?></td>
          <td><?php if(empty($datos->dias_sem) && empty($datos->hora_fin)){ echo $datos->hora_inicio;} else{ echo $datos->dias_sem; echo "\n\n"; echo $datos->hora_inicio;echo " a "; echo $datos->hora_fin;} ?>
            </td>
          <td><a href="inscripcion_extracurricular/<?php echo e($datos->id_extracurricular); ?>/<?php echo e($datos->creditos); ?>">INSCRIBIRSE</a></td>
         </tr>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </tbody>
     </table>
     </div>
     <?php if(count($dato)): ?>
     <?php echo e($dato->links()); ?>

     <?php endif; ?>
</div>

<div class="modal fade"  tabindex="-1" role="dialog"  id="actividad_detalle"  aria-labelledby="detalles_mi" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="width: 26rem; background-color: #cda434;">
      <div class="modal-header">
        <h5 class="modal-title" id="detalles_mi" style="color: #FFFFFF">Info de Taller</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container" align="left">
            <div class="card" >
      <div class="card-body">
        <h5 class="card-title">Nombre del Taller: <?php echo e($datos->nombre_ec); ?></h5>
        <h6 class="card-subtitle mb-2 text-muted">Tutor: <?php echo e(Auth::user()->email); ?></h6>
        <p class="card-text">Area: Cultural</p>
        <p>Fecha de Inicio: 02/03/2019</p>
        <p>Fecha de Terminación: 11/07/2019 </p>
      </div>
    </div>
   </div>
</div>
      </div>
    </div>
  </div>



  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante\mis_actividades/catalogo_actividades.blade.php ENDPATH**/ ?>