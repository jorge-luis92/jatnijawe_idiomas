<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Búsqueda Estudiantes
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Búsqueda de Estudiantes</h1>
   <div class="container" id="font7">
       <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </br>
   <form action="<?php echo e(route ('busqueda_estudiante_fi')); ?>" method="POST" role="search">
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
       <table class="table table-bordered table-striped" >
           <thead>
               <tr style="color: #000000;">
                   <th>Matricula</th>
                   <th>Nombre</th>
                   <th>Semestre</th>
                   <th>Modalidad</th>
                   <th>Avance</th>
                   <th colspan="2" style="text-align: center;" >ACCIONES</th>
               </tr>
           </thead>
           <tbody>
               <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr style="color: #000000;">
                   <td><?php echo e($user->matricula); ?></td>
                   <td><?php echo e($user->nombre); ?> <?php echo e($user->apellido_paterno); ?> <?php echo e($user->apellido_materno); ?></td>
                   <td><?php echo e($user->semestre); ?></td>
                   <td><?php echo e($user->modalidad); ?></td>
                   <td><a href="avance_estudiante/<?php echo e($user->matricula); ?>">Detalles</a></td>
                    <td><a href="desactivar_estudiante/<?php echo e($user->id_user); ?>">Generar Comprobante</a></td>
                    <td><a href="desactivar_estudiante/<?php echo e($user->id_user); ?>">Generar Constancia</a></td>
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

 <script>
 function numeros(e){
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = " 0123456789";
  especiales = [8,37,39,46];

  tecla_especial = false
  for(var i in especiales){
 if(key == especiales[i]){
   tecla_especial = true;
   break;
      }
  }

  if(letras.indexOf(tecla)==-1 && !tecla_especial)
      return false;
 }
 </script>



  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\formacion_integral/busqueda_estudiante_fi.blade.php ENDPATH**/ ?>