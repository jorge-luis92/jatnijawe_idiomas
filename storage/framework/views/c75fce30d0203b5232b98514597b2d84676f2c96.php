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
    <div class="table-responsive" style="border:1px solid #819FF7;">
    <table class="table table-bordered table-striped"  style="color: #000000; font-size: 12px;">
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
        <th scope="col">CUPO</th>
        <th colspan="1" >ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $dato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
      $usuario_actual=auth()->user();
      $id=$usuario_actual->id_user;
      $usuario=DB::table('detalle_extracurriculares')
      ->select('detalle_extracurriculares.actividad')
    //  ->where('detalle_extracurriculares.actividad', $datos->id_extracurricular)
      ->where([['detalle_extracurriculares.actividad',$datos->id_extracurricular], ['detalle_extracurriculares.matricula', $id],])
      ->first(1); ?>
      <tr style="color: #000000;">

          <td><?php echo e($datos->nombre_ec); ?></td>
          <td><?php echo e($datos->tipo); ?> </td>
          <td><?php echo e($datos->creditos); ?></td>
          <td><?php echo e($datos->area); ?></td>
          <td><?php echo e($datos->modalidad); ?></td>
          <td><?php echo e($datos->nombre); ?> <?php echo e($datos->apellido_paterno); ?> <?php echo e($datos->apellido_materno); ?></td>
          <td><?php echo e(date('d-m-Y', strtotime($datos->fecha_inicio))); ?>

           <?php if(empty($datos->fecha_fin)){ $vacio=null; echo $vacio;} else{ echo date('d-m-Y', strtotime($datos->fecha_fin));}?></td>
          <td><?php if(empty($datos->dias_sem) && empty($datos->hora_fin)){ echo $datos->hora_inicio;} else{ echo $datos->dias_sem; echo "\n\n"; echo $datos->hora_inicio;echo " a "; echo $datos->hora_fin;} ?>
            </td>
            <td><?php echo e($datos->control_cupo); ?></td>
            <td><a href="inscripcion_extracurricular/<?php echo e($datos->id_extracurricular); ?>/<?php echo e($datos->creditos); ?>"><?php if(empty($usuario)){echo "INSCRIBIRSE";}?></a></td>
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

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante\mis_actividades/catalogo_actividades.blade.php ENDPATH**/ ?>