<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Búsqueda Tutores
<?php $__env->stopSection(); ?>
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Tutores Registrados</h1>
 <div class="container" id="font7">
 </br>
 <div class="table-responsive" style="border:1px solid #819FF7;">
  <table class="table table-bordered table-striped" style="color: #000000; font-size: 13px;"  >
      <thead>
                                   <tr style="font-size: 12px;" >
                                     <th scope="col">NOMBRE</th>
                                     <th scope="col">GRADO DE ESTUDIOS</th>
                                      <th scope="col">TELÉFONO CONTACTO</th>
                                       <th scope="col">PROCEDENCIA INTERNA</th>
                                        <th scope="col">PROCEDENCIA EXTERNA</th>
                                     <th colspan="1" >ACCIONES</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <?php $__currentLoopData = $re; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <tr>
                                          <td><?php echo e($res->nombre); ?> <?php echo e($res->apellido_paterno); ?> <?php echo e($res->apellido_materno); ?></td>
                                          <td><?php echo e($res->grado_estudios); ?></td>
                                          <td><?php echo e($res->numero); ?></td>
                                          <td><?php echo e($res->procedencia_interna); ?></td>
                                          <td><?php echo e($res->procedencia_externa); ?></td>
                                          <td><a href="desactivar_tutor/<?php echo e($res->id_tutor); ?>">DESACTIVAR</a></td>
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

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo/formacion_integral/gestion_tutores/busqueda_tutor.blade.php ENDPATH**/ ?>