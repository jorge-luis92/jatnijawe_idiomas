<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: 911.9A
  <?php $__env->stopSection(); ?>
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Información de Estudiantes</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="<?php echo e(route('reporte911_9A_0')); ?>">
                         <?php echo csrf_field(); ?>
<div class="form-row">
  <div class="table-responsive">
    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>
    <h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>ESTUDIANTES DE PRIMER INGRESO DEL CICLO ESCOLAR ANTERIOR</strong></h4>

    <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Número de estudiantes de primer ingreso a la carrera del ciclo escolar anterior</h5>
    <h6 style="font-size: 1.0em; color: #000000;" align="left"><strong>MODALIDAD ESCOLARIZADA<strong></h6>

    <tr>
      <th scope="row">Hombres </th>
      <th scope="row">Mujeres</th>
      <th scope="row">Total</th>

    </tr>
    <tr>
      <td bgcolor="white"><?php echo e($total_masculino_primerE); ?></td>
      <td bgcolor="white"><?php echo e($total_femenino_primerE); ?></td>
      <td bgcolor="white"><?php echo e($total_primerE); ?></td>

    </tr>
    </table>

    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>
    <h6 style="font-size: 1.0em; color: #000000;" align="left"><strong>MODALIDAD SEMIESCOLARIZADA<strong></h6>

    <tr>
      <th scope="row">Hombres </th>
      <th scope="row">Mujeres</th>
      <th scope="row">Total</th>

    </tr>
    <tr>
      <td bgcolor="white"><?php echo e($total_masculino_primerS); ?></td>
      <td bgcolor="white"><?php echo e($total_femenino_primerS); ?></td>
      <td bgcolor="white"><?php echo e($total_primerS); ?></td>

    </tr>
    </table>
  </table>

  <table class="table table-bordered table-info" style="color: #8181F7;" >
  <thead>
  <h6 style="font-size: 1.0em; color: #000000;" align="left">
  <strong>TOTAL DE ESTUDIANTES DE PRIMER INGRESO DEL CICLO ESCOLAR ANTERIOR<strong></h6>

  <tr>
    <th scope="row">Hombres </th>
    <th scope="row">Mujeres</th>
    <th scope="row">Total</th>

  </tr>
  <tr>
    <td bgcolor="white"><?php echo e($total_masculino_primerG); ?></td>
    <td bgcolor="white"><?php echo e($total_femenino_primerG); ?></td>
    <td bgcolor="white"><?php echo e($total_primerG); ?></td>

  </tr>
  </table>

<a> Páginas</a>
<a class="siguiente" href=<?php echo e(route('reporte911_9A_0')); ?>><strong>1</strong></a>
<a class="siguiente" href=<?php echo e(route('reporte911_9A_1')); ?>>2</a>
<a class="siguiente" href=<?php echo e(route('reporte911_9A_3')); ?>>3</a>




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

<?php echo $__env->make('layouts.plantilla_planeacion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo/planeacion/reportes/reporte911_9A/reporte911_9A_0.blade.php ENDPATH**/ ?>