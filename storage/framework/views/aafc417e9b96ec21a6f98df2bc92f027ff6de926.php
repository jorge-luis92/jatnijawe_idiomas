<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Estudiantes Inactivos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Estudiantes Inactivos</h1>
<div class="container" id="font5">
  </br>
<div class="table-responsive">
  <table class="table table-bordered table-info" style="color: #000000;" >
    <thead>
      <tr>
        <th scope="col">MATRICULA</th>
        <th scope="col">NOMBRE</th>
        <th colspan="1" >ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <tr>
             <th scope="row"> </th>
             <td> </td>
             <td>  <a data-toggle="modal" href="#"> ACTIVAR</a></td>

           </tr>

    </tbody>
  </table>
</div>


</div>


  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\admin_sistema/estudiante_inactivo.blade.php ENDPATH**/ ?>