<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Avance Estudiante
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Historial del Estudiante </h1>
 <!--<a  href=<?php echo e(route('busqueda_estudiante_fi')); ?> >  <i class="fas fa-reply fa-sm fa-fw mr-2 text-black-400"></i> Volver a Búsquedas
</a>-->
 <h2 style="font-size: 1.5em; color: #0A122A;   max-width: 280px;" align="left">&nbsp;* Avance de Horas &nbsp;</h2>
 <p style="font-size: 1.0em; color: #0A122A;">&nbsp; Académicas: <?php echo e($aca); ?> &nbsp; Culturales: <?php echo e($cul); ?> &nbsp; Deportivas: <?php echo e($dep); ?>

 &nbsp; Total: <?php echo e($suma); ?> </p>

   <div class="container" id="font7">
       <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </br>
   <div class="table-responsive">
     <table class="table table-bordered table-info" style="color: #000000; font-size: 12px;" >
       <thead>
         <tr>
           <th scope="col">NOMBRE</th>
           <th scope="col">TIPO</th>
           <th scope="col">CREDITOS</th>
           <th scope="col">AREA</th>
           <th scope="col">MODALIDAD</th>
           <th scope="col">TUTOR</th>
           <th scope="col" >ESTATUS</th>
         </tr>
         <tbody>
       </thead>
         <?php $__currentLoopData = $dato; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr style="color: #000000;">

             <td><?php echo e($datos->nombre_ec); ?></td>
             <td><?php echo e($datos->tipo); ?> </td>
             <td><?php echo e($datos->creditos); ?></td>
             <td><?php echo e($datos->area); ?></td>
             <td><?php echo e($datos->modalidad); ?></td>
             <td><?php echo e($datos->nombre); ?> <?php echo e($datos->apellido_paterno); ?> <?php echo e($datos->apellido_materno); ?></td>
             <td><?php echo e($datos->estado); ?></td>
          <!--     <td><a href="acreditar_estudiantes_formacion/<?php echo e($datos->actividad); ?>/<?php echo e($mat); ?>">Acreditar</a></td>
        -->    </tr>

         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
        </div>
        <?php if(count($dato)): ?>
        <?php echo e($dato->links()); ?>

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

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\formacion_integral/avance_estudiante.blade.php ENDPATH**/ ?>