<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
:Talleres
<?php $__env->stopSection(); ?>
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Actividades Registradas</h1>
 <div class="container" id="font7">
   <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </br>
                               <div class="table-responsive" style="border:1px solid #819FF7;">
                                 <table class="table table-bordered table-striped" style="color: #000000; font-size: 13px;"  >
                                 <thead>
                                   <tr>
                                     <th scope="col">ACTIVIDAD</th>
                                      <th scope="col">TIPO</th>

                                      <th scope="col">AREA</th>
                                       <th scope="col">MODALIDAD</th>
                                     <th scope="col">CREDITOS</th>
                                     <th scope="col">TUTOR</th>
                                     <th colspan="1" >ACCIONES</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <?php $__currentLoopData = $dato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <tr style="color: #000000;">
                                       <td><?php echo e($datos->nombre_ec); ?></td>
                                       <td><?php echo e($datos->tipo); ?> </td>

                                       <td><?php echo e($datos->area); ?></td>
                                       <td><?php echo e($datos->modalidad); ?></td>
                                       <td><?php echo e($datos->creditos); ?></td>
                                       <td><?php echo e($datos->nombre); ?> <?php echo e($datos->apellido_paterno); ?> <?php echo e($datos->apellido_materno); ?></td>
                                       <td><a href="desactivar_extra/<?php echo e($datos->id_extracurricular); ?>">Desactivar</a></td>
                                         <td><a href="finalizar/<?php echo e($datos->id_extracurricular); ?>">Finalizar Grupo</a></td>

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

 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\formacion_integral\gestion_talleres/actividades_registradas.blade.php ENDPATH**/ ?>