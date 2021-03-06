<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Cordinadores Inactivos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Cordinadores Inactivos</h1>
<div class="container" id="font7">
  <div class="table-responsive" style="border:1px solid #819FF7;">
  <table class="table table-bordered table-striped"  style="color: #000000; font-size: 12px;">
    <thead>
      <tr>
        <th scope="col">NOMBRE</th>
        <th scope="col">PUESTO</th>
        <th colspan="1" >USUARIO</th>
        <th colspan="1" >EMAIL</th>
        <th colspan="1" >ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $coordi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coordinadores): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <th scope="row"> <?php echo $coordinadores->nombre; ?> <?php echo $coordinadores->apellido_paterno; ?> <?php echo $coordinadores->apellido_materno; ?></th>
        <td><?php echo $coordinadores->puesto; ?></td>
        <td><?php echo $coordinadores->username; ?></td>
        <td><?php echo $coordinadores->email; ?></td>
             <td><a href="activar_coord/<?php echo e($coordinadores->id_user); ?>">ACTIVAR</a></td
           </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<?php if(count($coordi)): ?>
  <?php echo e($coordi->links()); ?>

<?php endif; ?>
</div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\admin_sistema/coordinador_inactivo.blade.php ENDPATH**/ ?>