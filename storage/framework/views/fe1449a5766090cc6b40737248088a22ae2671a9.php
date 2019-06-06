<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Estudiantes Activos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Estudiantes Activos</h1>
 <form action="/search" method="POST" role="search">
   <?php echo e(csrf_field()); ?>

  <div class="form-group col-md-4" align="center">
       <input type="text" class="form-control" name="q"  placeholder="Search users">
       <button type="submit" class="btn btn-default" name="Buscar">
 </button>
   </div>
</form>
<div class="container" id="font7">
  </br>
<div class="table-responsive">
  <table class="table table-bordered table-striped" style="color: #000000;" >
    <thead>
      <tr>
        <th scope="col">MATRICULA</th>
          <th scope="col">SEMESTRE</th>
        <th scope="col">NOMBRE</th>
        <th colspan="2" >ACCIONES</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $estudiante; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudiantes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
             <th scope="row"><?php echo $estudiantes->matricula; ?></th>
              <th scope="row"><?php echo $estudiantes->semestre; ?></th>
             <td><?php echo $estudiantes->nombre; ?> <?php echo $estudiantes->apellido_paterno; ?> <?php echo $estudiantes->apellido_materno; ?></td>
             <td>  <a data-toggle="modal" href="#">DETALLES</a></td>
              <td>  <a data-toggle="modal" href="#">DESACTIVAR</a></td>
           </tr>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
<?php if(count($estudiante)): ?>
  <?php echo e($estudiante->links()); ?>

<?php endif; ?>

</div>


  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\admin_sistema/estudiante_activo.blade.php ENDPATH**/ ?>