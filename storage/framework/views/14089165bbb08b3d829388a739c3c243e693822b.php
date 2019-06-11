<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
:Talleres
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Talleres Registrados</h1>
 <div class="container" id="font4">
 </br>                    <form method="POST" action="<?php echo e(route('actividades_registradas')); ?>">
                         <?php echo csrf_field(); ?>
                          <div class="form-row">
                             <div class="table-responsive">
                               <table class="table table-bordered table-info" style="color: #000000;" >
                                 <thead>
                                   <tr>
                                     <th scope="col">ACTIVIDAD</th>
                                      <th scope="col">TIPO</th>
                                      <th scope="col">AREA</th>
                                       <th scope="col">MODALIDAD</th>
                                     <th scope="col">CREDITOS</th>
                                     <th scope="col">TUTOR</th>
                                     <th colspan="2" >ACCIONES</th>
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
                                       <td><a data-toggle="modal" href="#actividad_detalle">Detalles</a></td>
                                        <td><a href="">Desactivar</a></td>
                                      </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               </tbody>
                           </table>
                         </div>
                           <?php if(count($dato)): ?>
                             <?php echo e($dato->links()); ?>

                           <?php endif; ?>
                         </div>
                     </form>
                 </div>

                 <div class="modal fade" tabindex="-1" role="dialog" id="actividad_detalle" aria-labelledby="#actividad_detalles " aria-hidden="true">
                   <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                       <div class="container" id="font5">
                         </br>
                       <div class="table-responsive">
                         <table class="table table-bordered table-info" style="color: #000000;" >
                           <thead>
                             <tr>
                               <th scope="col">Fecha Inicio</th>
                               <th scope="col">Fecha Terminación</th>
                               <th scope="col">Hora Inicio</th>
                               <th scope="col">Hora Fin</th>
                             </tr>
                           </thead>
                           <tbody>
                             <?php $__currentLoopData = $dato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                               <td><?php echo $datos->fecha_inicio; ?></td>
                               <td><?php echo $datos->fecha_fin; ?></td>
                               <td><?php echo $datos->hora_inicio; ?></td>
                               <td><?php echo $datos->hora_fin; ?></td>
                             </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </tbody>
                         </table>
                       </div>
                       <?php if(count($dato)): ?>
                         <?php echo e($dato->links()); ?>

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

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\formacion_integral\gestion_talleres/actividades_registradas.blade.php ENDPATH**/ ?>