<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
:Egresados
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Estudiantes Inactivos</h1>
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
          <th style="text-align: center;" >ESTATUS</th>
          <th colspan="3" >VER</th>
        </tr>
      </thead>
      <tbody>
          <?php $__currentLoopData = $estudiante; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudiantes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
               <th ><?php echo $estudiantes->matricula; ?></th>
                <th><?php echo $estudiantes->semestre; ?></th>
               <td><?php echo $estudiantes->nombre; ?> <?php echo $estudiantes->apellido_paterno; ?> <?php echo $estudiantes->apellido_materno; ?></td>
                 <th ><?php if(($estudiantes->genero == 'M') or ($estudiantes->genero == 'MASCULINO')){echo "MASCULINO";}else {echo "FEMENINO";}?></th>
               <td style="text-align: center;">EGRESADO</td>
               <td><a  href=""></a></td>
               <td ><a href="generales_egresado_ver/<?php echo e($estudiantes->matricula); ?>">DATOS GENERALES</a></td>
               <td><a  href="<?php echo e(route ('cuestionario_egresado_ver')); ?>">CUESTIONARIO</a></td>
               <td><a  href="<?php echo e(route ('antecedentes_laborales_egresado')); ?>">DATOS LABORALES</a></td>

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

<?php echo $__env->make('layouts.plantilla_servicios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo/servicios/seguimientoE/egresado_registrado.blade.php ENDPATH**/ ?>