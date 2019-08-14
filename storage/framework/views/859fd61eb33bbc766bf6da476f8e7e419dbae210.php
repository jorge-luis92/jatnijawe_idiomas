<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
:Talleres
  <?php $__env->stopSection(); ?>
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Actividades Finalizadas</h1>
 <div class="container" id="font7">
   <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </br>                    <form method="POST" action="<?php echo e(route('actividades_registradas')); ?>">
                         <?php echo csrf_field(); ?>
                          <div class="form-row">
                               <div class="table-responsive" style="border:1px solid #819FF7;">
                                 <table class="table table-bordered table-striped" style="color: #000000; font-size: 13px;"  >
                                 <thead>
                                   <tr>
                                     <th scope="col">NOMBRE DE ACTIVIDAD </th>
                                     <th scope="col">TUTOR</th>
                                     <th scope="col">TIPO</th>
                                     <th scope="col">CREDITOS</th>
                                     <th scope="col">ESTATUS</th>
                                     <th scope="col">FECHA INICIO </th>
                                     <th scope="col">FECHA FIN</th>
                                     <th scope="col">OBSERVACIONES</th>

                                                     </tr>
                                 </thead>
                                 <tbody>
                                   <?php $__currentLoopData = $dato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <tr style="color: #000000;">
                                       <td><?php echo e($datos->nombre_ec); ?></td>
                                       <td><?php echo e($datos->nombre); ?> <?php echo e($datos->apellido_paterno); ?> <?php echo e($datos->apellido_materno); ?></td>
                                       <td><?php echo e($datos->tipo); ?> </td>
                                       <td><?php echo e($datos->creditos); ?></td>
                                       <td>FINALIZADO</td>
                                       <td><?php echo e(date('d-m-Y', strtotime($datos->fecha_inicio))); ?></td>
                                       <td><?php echo e(date('d-m-Y', strtotime($datos->fecha_fin))); ?></td>
                                       <td><?php echo e($datos->observaciones); ?></td>
                                         </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               </tbody>
                           </table>
                         </div>
                       </br></br>
                           <?php if(count($dato)): ?>
                             <?php echo e($dato->links()); ?>

                           <?php endif; ?>
                         </div>
                     </form>
                 </div>

 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo/formacion_integral/gestion_talleres/actividades_finalizadas_general.blade.php ENDPATH**/ ?>