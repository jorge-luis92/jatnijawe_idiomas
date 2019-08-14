<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Información Estudiantes
<?php $__env->stopSection(); ?>
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Información de Estudiantes</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="<?php echo e(route('info_coord_academica4')); ?>">
                         <?php echo csrf_field(); ?>
<div class="form-row">
  <div class="table-responsive">

  <table class="table table-bordered table-info" style="color: #8181F7;" >
<thead>
  <h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>Estudiantes Con Enfermedades y Alergias del ciclo escolar actual</strong></h4>
  <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Modalidad Escolarizada</h5>
  <tr>
    <th scope="row">Tipo</th>
    <th scope="row">Hombres </th>
    <th scope="row">Mujeres</th>
    <th scope="row">Total</th>


  </tr>
  <tr>
    <th scope="col">Alergia</th>
    <td bgcolor="white"><?php echo e($tipos_eaM_ESC['Alergia']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_eaF_ESC['Alergia']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_ea_ESC['Alergia']); ?></td>
  </tr>
  <tr>
    <th scope="col">Enfermedad</th>
    <td bgcolor="white"><?php echo e($tipos_eaM_ESC['Enfermedad']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_eaF_ESC['Enfermedad']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_ea_ESC['Enfermedad']); ?></td>
  </tr>

  <tr>
    <th scope="col">Total</th>
    <td bgcolor="white"><?php echo e($tipos_eaM_ESC['TOTAL']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_eaF_ESC['TOTAL']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_ea_ESC['TOTAL']); ?></td>

  </tr>
  </table>


  <table class="table table-bordered table-info" style="color: #8181F7;" >
<thead>
  <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Modalidad Semiescolarizada</h5>

  <tr>
    <th scope="row">Tipo</th>
    <th scope="row">Hombres </th>
    <th scope="row">Mujeres</th>
    <th scope="row">Total</th>


  </tr>
  <tr>
    <th scope="col">Alergia</th>
    <td bgcolor="white"><?php echo e($tipos_eaM_SEMI['Alergia']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_eaF_SEMI['Alergia']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_eaG_SEMI['Alergia']); ?></td>
  </tr>
  <tr>
    <th scope="col">Enfermedad</th>
    <td bgcolor="white"><?php echo e($tipos_eaM_SEMI['Enfermedad']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_eaF_SEMI['Enfermedad']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_eaG_SEMI['Enfermedad']); ?></td>
  </tr>

  <tr>
    <th scope="col">Total</th>
    <td bgcolor="white"><?php echo e($tipos_eaM_SEMI['TOTAL']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_eaF_SEMI['TOTAL']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_eaG_SEMI['TOTAL']); ?></td>

  </tr>
  </table>



  <table class="table table-bordered table-info" style="color: #8181F7;" >
<thead>
  <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Total de Estudiantes del ciclo escolar actual con Alergias y Enfermedades</h5>

  <tr>
    <th scope="row">Tipo</th>
    <th scope="row">Hombres </th>
    <th scope="row">Mujeres</th>
    <th scope="row">Total</th>


  </tr>
  <tr>
    <th scope="col">Alergia</th>
    <td bgcolor="white"><?php echo e($tipos_eaM_T['Alergia']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_eaM_TF['Alergia']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_eaM_TG['Alergia']); ?></td>
  </tr>
  <tr>
    <th scope="col">Enfermedad</th>
    <td bgcolor="white"><?php echo e($tipos_eaM_T['Enfermedad']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_eaM_TF['Enfermedad']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_eaM_TG['Enfermedad']); ?></td>
  </tr>

  <tr>
    <th scope="col">Total</th>
    <td bgcolor="white"><?php echo e($tipos_eaM_T['TOTAL']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_eaM_TF['TOTAL']); ?></td>
    <td bgcolor="white"><?php echo e($tipos_eaM_TG['TOTAL']); ?></td>

  </tr>
  </table>


    </div>
  </form>
</div>

<a class="siguiente" href=<?php echo e(route('info_coord_academica1')); ?>>1</a>
<a class="siguiente" href=<?php echo e(route('info_coord_academica2')); ?>>2</a>
<!--<a class="siguiente" href=<?php echo e(route('info_coord_academica3')); ?>>3</a>-->
<a class="siguiente" href=<?php echo e(route('info_coord_academica4')); ?>><strong>3</strong></a>
<a class="siguiente" href=<?php echo e(route('info_coord_academica5')); ?>>4</a>
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

<?php echo $__env->make('layouts.plantilla_planeacion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo/planeacion/info_departamentos/info_coord_academica/info_coord_academica4.blade.php ENDPATH**/ ?>