<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Búsqueda Tutores
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Tutores Registrados</h1>
 <div class="container" id="font4">
 </br>
                             <div class="table-responsive">
                               <table class="table table-bordered table-info" style="color: #000000;" >
                                 <thead>
                                   <tr>
                                     <th scope="col">RFC</th>
                                     <th scope="col">NOMBRE</th>
                                     <th scope="col">GRADO DE ESTUDIOS</th>
                                     <th colspan="2" >ACCIONES</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <?php $__currentLoopData = $re; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <tr>
                                          <th scope="row"><?php echo e($res->rfc); ?></th>
                                          <td><?php echo e($res->nombre); ?> <?php echo e($res->apellido_paterno); ?> <?php echo e($res->apellido_materno); ?></td>
                                          <td><?php echo e($res->grado_estudios); ?></td>
                                          <td>  <a data-toggle="modal" href="#">DETALLES</a></td>
                                          <td>  <a data-toggle="modal" href="#">DESACTIVAR</a></td>
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

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\formacion_integral\gestion_tutores/busqueda_tutor.blade.php ENDPATH**/ ?>