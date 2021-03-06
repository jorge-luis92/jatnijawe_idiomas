<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Búsqueda Estudiantes
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Búsqueda de Estudiantes</h1>


<div class="container" id="font7">
    <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</br>
<form action="<?php echo e(route ('busqueda_estudiantes_aux')); ?>" method="POST" role="search">
    <?php echo e(csrf_field()); ?>

     <div class="form-row">

       <div class="input-group col-md-6">
         <!--   <input type="text" ng-model="test" class="search-query form-control" placeholder="Nombre de familia"><p>&nbsp;</p>
--><input type="text" class="form-control" name="q" placeholder="Buscar Estudiante"><p>&nbsp;</p>
               <span class="input-group-btn">
                 <button class="btn btn-danger" type="submit"><span>&nbsp;
               <i class="fa fa-search" ></i></span>
                  </button>
               </span>
        </div>
</div>
</form>

    <?php if(isset($details)): ?>
    <div class="table-responsive" style="border:1px solid #819FF7;">
    <table class="table table-bordered table-striped" >
        <thead>
            <tr style="color: #000000;">
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Semestre</th>
                <th>Modalidad</th>
                <th colspan="2" >ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr style="color: #000000;">
                <td><?php echo e($user->matricula); ?></td>
                <td><?php echo e($user->nombre); ?> <?php echo e($user->apellido_paterno); ?> <?php echo e($user->apellido_materno); ?></td>
                <td><?php echo e($user->semestre); ?></td>
                <td><?php echo e($user->modalidad); ?></td>
                <td><a data-toggle="modal" href="#">EDITAR</a></td>
                 <td><a href="desactivar_estudiante_auxiliar/<?php echo e($user->id_user); ?>">DESACTIVAR</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
  </div>
    <?php if(count($details)): ?>
      <?php echo e($details->links()); ?>

    <?php endif; ?>
    <?php endif; ?>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_auxadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\auxiliar_administrativo/busqueda_estudiante_aux.blade.php ENDPATH**/ ?>