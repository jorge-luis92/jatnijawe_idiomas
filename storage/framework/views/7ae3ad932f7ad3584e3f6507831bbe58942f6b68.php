<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Búsqueda Estudiantes
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Estudiantes Egresados</h1>
  <div class="container" id="font7">
    </br>
  <div class="table-responsive">
    <table class="table table-bordered table-striped" style="color: #000000;" >
      <thead>
        <tr>
          <th scope="col">MATRICULA</th>
            <th scope="col">SEMESTRE</th>
          <th scope="col">NOMBRE</th>
          <th scope="col">GENERO</th>
          <th style="text-align: center;" colspan="1" >ESTATUS</th>
        </tr>
      </thead>
      <tbody>
          <?php $__currentLoopData = $estudiante; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudiantes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
               <th scope="row"><?php echo $estudiantes->matricula; ?></th>
                <th scope="row"><?php echo $estudiantes->semestre; ?></th>
               <td><?php echo $estudiantes->nombre; ?> <?php echo $estudiantes->apellido_paterno; ?> <?php echo $estudiantes->apellido_materno; ?></td>
               <th ><?php echo $estudiantes->genero; ?></th>
               <td style="text-align: center;">EGRESADO</td>

             </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
  <?php if(count($estudiante)): ?>
    <?php echo e($estudiante->links()); ?>

  <?php endif; ?>
  </div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_auxadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\auxiliar_administrativo/egresados_estudiantes_idiomas.blade.php ENDPATH**/ ?>