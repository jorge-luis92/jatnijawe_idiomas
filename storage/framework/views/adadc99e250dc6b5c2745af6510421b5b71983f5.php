<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Talleristas Inactivos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Talleristas Inactivos</h1>
 <div class="container" id="font7">
 </br>
                             <div class="table-responsive">
                               <table class="table table-bordered table-info" style="color: #000000;" >
                                 <thead>
                                   <tr>
                                     <th scope="col">NOMBRE</th>
                                     <th scope="col">USUARIO</th>
                                     <th scope="col">EMAIL</th>
                                     <th scope="col">ACCIONES</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <?php $__currentLoopData = $re; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <tr>
                                     <td><?php echo e($res->nombre); ?> <?php echo e($res->apellido_paterno); ?> <?php echo e($res->apellido_materno); ?></td>
                                     <th scope="row"><?php echo e($res->username); ?></th>
                                     <th scope="row"><?php echo e($res->email); ?></th>
                                            <td><a href="activar_tallerista/<?php echo e($res->id_user); ?>">ACTIVAR</a></td>
                                            </tr>

                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </tbody>
                               </table>
                             </div>
                             <?php if(count($re)): ?>
                               <?php echo e($re->links()); ?>

                             <?php endif; ?>
                           </div>

            <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\formacion_integral\gestion_tallerista/tallerista_inactivo.blade.php ENDPATH**/ ?>