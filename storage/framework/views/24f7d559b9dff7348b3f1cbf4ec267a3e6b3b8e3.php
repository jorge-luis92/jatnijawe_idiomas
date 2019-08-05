<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
:Solicitudes Aprobadas
<?php $__env->stopSection(); ?>
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Talleres Activos </h1>
 <div class="container" id="font7">
   <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 </br>
                    <div class="table-responsive" style="border:1px solid #819FF7;">
                     <table class="table table-bordered table-striped" style="color: #000000; font-size: 13px;"  >
                                 <thead>
                                   <tr>
                                     <!--<th scope="col">SOLICITUD</th>-->
                                      <th scope="col">ESTUDIANTE</th>
                                       <th scope="col">TALLER</th>
                                     <th scope="col">FECHA DE SOLICITUD</th>
                                     <th scope="col">ESTATUS</th>
                                     <th scope="col">DETALLES</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detalles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr style="color: #000000;">
                                      <!--  <td><?php echo e($detalles->num_solicitud); ?></td>-->
                                        <td><?php echo e($detalles->nombre); ?> <?php echo e($detalles->apellido_paterno); ?> <?php echo e($detalles->apellido_materno); ?></td>
                                        <td><?php echo e($detalles->nombre_taller); ?></td>
                                        <td><?php echo e(date('d-m-Y', strtotime($detalles->fecha_solicitud))); ?> </td>
                                        <td><?php echo e($detalles->estado); ?></td>
                                        <td><a href="pdf_taller_aprobado/<?php echo e($detalles->matricula); ?>" target="_blank">VER</a></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                             </div>
                             <?php if(count($data)): ?>
                             <?php echo e($data->links()); ?>

                             <?php endif; ?>
                             <br />
                         </div>
                         <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\formacion_integral\gestion_talleres/talleres_aprobados_estudiante.blade.php ENDPATH**/ ?>