<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Información Estudiantes
<?php $__env->stopSection(); ?>
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Información de Estudiantes</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="<?php echo e(route('info_coord_academica3')); ?>">
                         <?php echo csrf_field(); ?>
<div class="form-row">
<div class="table-responsive">

  <table class="table table-bordered table-info" style="color: #8181F7;" >
  <thead>
  <h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>Estudiantes Hablantes de Lengua del ciclo escolar actual</strong></h4>
  <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Modalidad Escolarizada</h5>
  </thead>
  </table>

  <table class="table table-bordered table-info" style="color: #8181F7;" >
  <tbody>
  <tr>
    <th style="width:50px" scope="row">Lengua</th>
    <th style="width:15px" scope="row">Hombres </th>
  </tr>

  <?php $__currentLoopData = $total_lenguasM; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datosM): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
  <td><?php echo e($datosM->nombre_lengua); ?></td>
  <td bgcolor="white"><?php echo e($datosM->total_lenguam); ?> </td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <th scope="col">Total</th>
      <th scope="col"><?php echo e($totalG_masculinoL); ?></th>
  </tr>
</tbody>
  </table>

  <table class="table table-bordered table-info" style="color: #8181F7;" align="center">
  <thead>
  <tr>
    <th style="width:50px" scope="row">Lengua</th>
    <th style="width:15px" scope="row">Mujeres</th>
  </tr>
  </thead>
  <tbody>
    <tr>
      <?php $__currentLoopData = $total_lenguasF; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datosF): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <td><?php echo e($datosF->nombre_lengua); ?></td>
      <td bgcolor="white"><?php echo e($datosF->total_lengua); ?> </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tr>
  <tr>
    <th scope="col">Total</th>
    <th scope="col"><?php echo e($totalG_femeninoL); ?></th>
  </tr>
  </tbody>
  </table>

  <table class="table table-bordered table-info" style="color: #8181F7;" align="center">
  <thead>
  <tr>
    <th scope="row">Lengua</th>
    <th scope="row">Estudiantes hablantes</th>
  </tr>
  </thead>
  <tbody>
    <tr>
      <?php $__currentLoopData = $total_lenguasE; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datosE): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <td><?php echo e($datosE->nombre_lengua); ?></td>
      <td bgcolor="white"><?php echo e($datosE->total_lengua); ?> </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tr>
  <tr>
    <th scope="col">Total</th>
    <th scope="col"><?php echo e($totalGLMF); ?></th>
  </tr>
  </tbody>
  </table>

<table class="table table-bordered table-info" style="color: #8181F7;" >
<thead>
<h5 style="font-size: 1.0em; color: #000000;" align="rigt">Modalidad Semiescolarizada</h5>
</thead>
</table>

<table class="table table-bordered table-info" style="color: #8181F7;" >
<tbody>
<tr>
  <th style="width:50px" scope="row">Lengua</th>
  <th style="width:15px" scope="row">Hombres </th>
</tr>
<?php $__currentLoopData = $total_lenguasMS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datosMS): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($datosMS->nombre_lengua); ?></td>
<td bgcolor="white"><?php echo e($datosMS->total_lengua); ?> </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<tr>
  <th scope="col">Total</th>
    <th scope="col"></th>
</tr>
</tbody>
</table>


<table class="table table-bordered table-info" style="color: #8181F7;" >
<tbody>
<tr>
  <th style="width:50px" scope="row">Lengua</th>
  <th style="width:15px" scope="row">Mujeres</th>
</tr>
<?php $__currentLoopData = $total_lenguasFS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datosFS): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($datosFS->nombre_lengua); ?></td>
<td bgcolor="white"><?php echo e($datosFS->total_lengua); ?> </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<tr>
<tr>
  <th scope="col">Total</th>
    <th scope="col"><?php echo e($totalGS_femeninoL); ?></th>
</tr>
</tbody>
</table>

<table class="table table-bordered table-info" style="color: #8181F7;" align="center">
<thead>
<tr>
  <th scope="row">Lengua</th>
  <th scope="row">Estudiantes hablantes</th>
</tr>
</thead>
<tbody>
  <tr>
    <?php $__currentLoopData = $total_lenguasS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datosS): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <td><?php echo e($datosS->nombre_lengua); ?></td>
    <td bgcolor="white"><?php echo e($datosS->total_lengua); ?> </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tr>
<tr>
  <th scope="col">Total</th>
  <th scope="col"><?php echo e($totalGSLMF); ?></th>
</tr>
</tbody>
</table>


  <table class="table table-bordered table-info" style="color: #8181F7;" >
  <thead>
  <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Total de estudiantes del ciclo escolar actual Hablantes de Lengua</h5>

  <tr>
    <th scope="row">Lengua</th>
    <th scope="row">Total</th>


  </tr>
  <?php $__currentLoopData = $total_lenguasG; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datosLG): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <th scope="col"><?php echo e($datosLG->nombre_lengua); ?></th>
    <td bgcolor="white"><?php echo e($datosLG->total_lengua); ?></td>
  </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <tr>
    <th scope="col">Total</th>
    <td bgcolor="white"><?php echo e($total_lenguasT); ?></td>

  </tr>

  </table>

    </div>
  </form>
</div>

<a class="siguiente" href=<?php echo e(route('info_coord_academica1')); ?>>1</a>
<a class="siguiente" href=<?php echo e(route('info_coord_academica2')); ?>>2</a>
<a class="siguiente" href=<?php echo e(route('info_coord_academica3')); ?>><strong>3</strong></a>
<a class="siguiente" href=<?php echo e(route('info_coord_academica4')); ?>>4</a>
<a class="siguiente" href=<?php echo e(route('info_coord_academica5')); ?>>5</a>
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

<?php echo $__env->make('layouts.plantilla_planeacion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo/planeacion/info_departamentos/info_coord_academica/info_coord_academica3.blade.php ENDPATH**/ ?>