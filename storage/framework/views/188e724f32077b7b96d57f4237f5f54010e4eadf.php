<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Búsqueda Estudiantes
  <?php $__env->stopSection(); ?>
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Búsqueda de Estudiantes</h1>
   <div class="container" id="font7">
       <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </br>
   <form action="<?php echo e(route ('busqueda_atras_fi')); ?>" method="POST" role="search">
       <?php echo e(csrf_field()); ?>

        <div class="form-row">

          <div class="input-group col-md-6">
            <!--   <input type="text" ng-model="test" class="search-query form-control" placeholder="Nombre de familia"><p>&nbsp;</p>
   --><input type="text" class="form-control" name="q" placeholder="Buscar Estudiante"><p>&nbsp;</p>
                  <span class="input-group-btn">
                    <button class="btn btn-danger" type="submit"><span>&nbsp;
                  <i class="fa fa-search" ></i></span>
                     </button>
                  </span>
           </div>
   </div>
   </form>

       <?php if(isset($details)): ?>
       <div class="table-responsive" style="border:1px solid #819FF7;">
         <table class="table table-bordered table-striped" style="color: #000000; font-size: 13px;"  >
             <thead>
               <tr style="color: #000000;">
                   <th>ID</th>
                   <th>Nombre</th>
                   <th>Modalidad</th>
                   <th>Avance</th>
                   <th colspan="2" style="text-align: center;" >ACCIONES</th>
               </tr>
           </thead>
           <tbody>
               <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr style="color: #000000;">
                   <td><?php echo e($user->ID); ?></td>
                   <td><?php echo e($user->nombre); ?> </td>
                    <td><?php echo e($user->modalidad); ?> </td>
                   <td><a href="avance_estudiante_a/<?php echo e($user->ID); ?>">Detalles</a></td>
                    <td><a href="constancia_parcial_a/<?php echo e($user->ID); ?>" target="_blank">Generar Comprobante</a></td>
                    <td><a href="constancia_valida_a/<?php echo e($user->ID); ?>" target="_blank">Generar Constancia</a></td>
                   </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </tbody>
       </table>
       <?php if(count($details)): ?>
         <?php echo e($details->links()); ?>

         <?php endif; ?>
         <?php endif; ?>
     </div>
   </div>
   </div>
   </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\formacion_integral/busqueda_atras.blade.php ENDPATH**/ ?>