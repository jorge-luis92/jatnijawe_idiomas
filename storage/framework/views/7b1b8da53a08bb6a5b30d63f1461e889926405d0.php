<!doctype html>
<html lang="es">
<head>
  <title>Consultitas</title>

</head>

<body >
<ul>
  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <li><?php echo e($user->id); ?></li>
    <li><?php echo e($user->email); ?></li>
    <h1> spe</h1>
    <li><?php echo e($user->matricula); ?></li>
      <li><?php echo e($user->semestre); ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\jatnijawe\resources\views/consultitas.blade.php ENDPATH**/ ?>