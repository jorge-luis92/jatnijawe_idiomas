<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Mis talleres
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Mis talleres activos</h1>
 <div class="container" id="font7">
 </br>
          <div class="table-responsive">
          <table class="table table-bordered table-info" style="color: #000000;" >
          <thead>
          <tr>
            <th scope="col">NOMBRE DE TALLER</th>
            <th scope="col">CREDITOS</th>
            <th scope="col">DÍAS DE LA SEMANA</th>
            <th scope="col">HORARIO</th>
            <th colspan="3" align="center" >ACCIONES</th>

          </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $dato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($datos->nombre_ec); ?></td>
                  <td><?php echo e($datos->creditos); ?></td>
                  <td><?php echo e($datos->dias_sem); ?></td>
                  <td><?php echo e($datos->hora_inicio); ?> a <?php echo e($datos->hora_fin); ?></td>
                  <td><a href="descarga_lista_estudiante/<?php echo e($datos->id_extracurricular); ?>" target="_blank">Ver Grupo</a></td>
                  <td><a href="descargar_lista_taller/<?php echo e($datos->id_extracurricular); ?>" target="_blank">Descargar Lista</a></td>
                  <td><a href="finalizar_grupo/<?php echo e($datos->id_extracurricular); ?>">Finalizar Grupo</a></td>
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

<?php echo $__env->make('layouts.plantilla_tallerista', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/tallerista/talleres_tallerista.blade.php ENDPATH**/ ?>