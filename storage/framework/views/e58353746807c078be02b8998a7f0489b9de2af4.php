<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Información Estudiantes
<?php $__env->stopSection(); ?>
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Información de Estudiantes</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="<?php echo e(route('info_coord_academica2')); ?>">
                         <?php echo csrf_field(); ?>
<div class="form-row">
  <div class="table-responsive">


      <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>
      <h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>Estudiantes Becados del ciclo escolar actual</strong></h4>
      <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Modalidad Escolarizada</h5>
      <tr>
        <th scope="row">Origen de la Beca</th>
        <th scope="row">Hombres </th>
        <th scope="row">Mujeres</th>
        <th scope="row">Total</th>
        <th scope="row">Con Discapacidad</th>
        <th scope="row">Hablante de Lengua</th>

      </tr>
      <tr>
        <th scope="col">Propia Institución</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>

      </tr>
      <tr>
        <th scope="col">Beca Federal</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      <tr>
        <th scope="col">Beca Estatal </th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      <tr>
        <th scope="col">Beca Municipal</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      <tr>
        <th scope="col">Beca Particular</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      <tr>
        <th scope="col">Beca internacional</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      <tr>
        <th scope="col">Total</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      </table>
      <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>
      <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Modalidad Semiescolarizada</h5>
      <tr>
        <th scope="row">Origen de la Beca</th>
        <th scope="row">Hombres </th>
        <th scope="row">Mujeres</th>
        <th scope="row">Total</th>
        <th scope="row">Con Discapacidad</th>
        <th scope="row">Hablante de Lengua</th>

      </tr>
      <tr>
        <th scope="col">Propia Institución</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>

      </tr>
      <tr>
        <th scope="col">Beca Federal</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      <tr>
        <th scope="col">Beca Estatal </th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      <tr>
        <th scope="col">Beca Municipal</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      <tr>
        <th scope="col">Beca Particular</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      <tr>
        <th scope="col">Beca internacional</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      <tr>
        <th scope="col">Total</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      </table>

      <table class="table table-bordered table-info" style="color: #8181F7;" >
      <thead>
      <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Total de Estudiantes del ciclo escolar Actual que cuentan con Beca</h5>
      <tr>
        <th scope="row">Origen de la Beca</th>
        <th scope="row">Hombres </th>
        <th scope="row">Mujeres</th>
        <th scope="row">Total</th>
        <th scope="row">Con Discapacidad</th>
        <th scope="row">Hablante de Lengua</th>

      </tr>
      <tr>
        <th scope="col">Propia Institución</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>

      </tr>
      <tr>
        <th scope="col">Beca Federal</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      <tr>
        <th scope="col">Beca Estatal </th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      <tr>
        <th scope="col">Beca Municipal</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      <tr>
        <th scope="col">Beca Particular</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      <tr>
        <th scope="col">Beca internacional</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      <tr>
        <th scope="col">Total</th>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
        <td bgcolor="white"> </td>
      </tr>
      </table>

    </div>
  </form>
</div>

<a class="siguiente" href=<?php echo e(route('info_coord_academica1')); ?>>1</a>
<a class="siguiente" href=<?php echo e(route('info_coord_academica2')); ?>><strong>2</strong></a>
<a class="siguiente" href=<?php echo e(route('info_coord_academica3')); ?>>3</a>
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

<?php echo $__env->make('layouts.plantilla_planeacion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\planeacion\info_departamentos\info_coord_academica/info_coord_academica2.blade.php ENDPATH**/ ?>