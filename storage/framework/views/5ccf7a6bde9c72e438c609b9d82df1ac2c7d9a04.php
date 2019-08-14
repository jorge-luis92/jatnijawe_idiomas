<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: 911.9A
  <?php $__env->stopSection(); ?>
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Información de Estudiantes</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="<?php echo e(route('reporte911_9A_1')); ?>">
                         <?php echo csrf_field(); ?>
<div class="form-row">
  <div class="table-responsive">

    <table class="table table-bordered table-info" style="color: #8181F7;" >

    <h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>ESTUDIANTES DE PRIMER INGRESO DEL CICLO ESCOLAR ACTUAL</strong></h4>
    <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Número de estudiantes de primer ingreso a la carrera del ciclo escolar actual</h5>

    <tr>
      <th scope="row">Hombres </th>
      <th scope="row">Mujeres</th>
      <th scope="row">Total</th>
      <th scope="row">Con Discapacidad</th>
      <th scope="row">Hablante de Lengua</th>
    </tr>

    <tr>
      <td bgcolor="white"><?php echo e($total_estudiantes_inscritos_m); ?></td>
      <td bgcolor="white"><?php echo e($total_estudiantes_inscritos_f); ?></td>
      <td bgcolor="white"><?php echo e($total_inscritos); ?></td>
      <td bgcolor="white"><?php echo e($total_estudiantes_discapacidad); ?></td>
      <td bgcolor="white"><?php echo e($total_estudiantes_lengua); ?></td>
    </tr>
    </table>

<a> Páginas</a>
    <a class="siguiente" align="rigth" href=<?php echo e(route('reporte911_9A_0')); ?>>1</a>
    <a class="siguiente" align="rigth" href=<?php echo e(route('reporte911_9A_1')); ?>><strong>2</strong></a>
    <a class="siguiente" align="rigth" href=<?php echo e(route('reporte911_9A_3')); ?>>3</a>


    </div>
  </form>
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

<?php echo $__env->make('layouts.plantilla_planeacion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo/planeacion/reportes/reporte911_9A/reporte911_9A_1.blade.php ENDPATH**/ ?>