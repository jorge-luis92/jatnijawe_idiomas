<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Información Formación Integral
<?php $__env->stopSection(); ?>
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Información de Estudiantes</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="<?php echo e(route('info_formacion_integral1')); ?>">
                         <?php echo csrf_field(); ?>
<div class="form-row">
  <div class="table-responsive">
    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>
    <h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>Actividades Extracurriculares del Ciclo Escolar Actual</strong></h4>
    <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Modalidad Escolarizada</h5>


    </table>

    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>

    <tr>
      <th scope="row">Actividad</th>
      <th scope="row">Tipo</th>
      <th scope="row">Area</th>
      <th scope="row">Creditos</th>
      <th scope="row">Hombres </th>
      <th scope="row">Mujeres</th>
      <th scope="row">Total</th>
    </tr>
    <tr>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td > </td>
    </tr>
  </table>


    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>
    <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Modalidad Semiescolarizada</h5>
    <tr>
      <th scope="row">Actividad</th>
      <th scope="row">Tipo</th>
      <th scope="row">Area</th>
      <th scope="row">Creditos</th>
      <th scope="row">Hombres </th>
      <th scope="row">Mujeres</th>
      <th scope="row">Total</th>
    </tr>
    <tr>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td > </td>
    </tr>
    </table>

    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>
    <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Total de Estudiantes que se encuentran activos en Formación integral</h5>
    <tr>
      <th scope="row">Actividad</th>
      <th scope="row">Hombres </th>
      <th scope="row">Mujeres</th>
      <th scope="row">Total</th>
    </tr>
    <tr>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
      <td bgcolor="white"> </td>
          <td > </td>
    </tr>
    </table>



  <!--<a> Páginas</a>
  <a class="siguiente" href=<?php echo e(route('info_coord_academica1')); ?>><strong>1</strong></a>
  <a class="siguiente" href=<?php echo e(route('info_coord_academica2')); ?>>2</a>
  <a class="siguiente" href=<?php echo e(route('info_coord_academica3')); ?>>3</a>
  <a class="siguiente" href=<?php echo e(route('info_coord_academica4')); ?>>4</a>
  <a class="siguiente" href=<?php echo e(route('info_coord_academica5')); ?>>5</a>-->
    </div>
  </form>
</div>


</div>

 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_planeacion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\planeacion\info_departamentos\info_form_integral/info_formacion_integral1.blade.php ENDPATH**/ ?>