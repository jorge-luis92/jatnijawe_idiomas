<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
<div class="container" id="font5">
  </br>
<div class="table-responsive">
  <table class="table table-bordered table-info" style="color: #000000;" >
    <thead>
      <tr>
        <th scope="col">RFC</th>
        <th scope="col">USUARIO</th>
        <th scope="col">EMAIL</th>
        <th scope="col">TIPO DE USUARIO</th>
        <th colspan="2" >ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <th scope="row"><?php echo $user->id; ?></th>
        <td><?php echo $user->name; ?></td>
        <td><?php echo $user->email; ?></td>
          <td><?php echo $user->tipo_usuario; ?></td>
        <td><a href="#">ACTUALIZAR</a></td>
        <td><a href="#">DESACTIVAR</a></td>
      </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>

<?php if(count($users)): ?>
  <?php echo e($users->links()); ?>

<?php endif; ?>

</div>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jatnijawe\resources\views/personal_administrativo\formacion_integral\gestion_tallerista/read.blade.php ENDPATH**/ ?>