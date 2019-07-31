<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Fechas de Actualización
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Fechas de Actualización(Estudiante)</h1>
<div class="container" id="font7">
</br>                    <form method="POST" action="<?php echo e(route('agregar_fecha_actualizacion')); ?>">
                        <?php echo csrf_field(); ?>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="fecha_inicio" ><?php echo e(__('* Fecha de inicio')); ?></label>
    <input id="fecha_inicio" type="date"  name="fecha_inicio"  value="<?php if(empty($fechas->fecha_inicio)){ $vacio=null; echo $vacio;} else{ echo $fechas->fecha_inicio;} ?>" onblur="ba();"  class="form-control"  required>
    </div>
    <div class="form-group col-md-6">
      <label for="fecha_fin" ><?php echo e(__('* Fecha Final')); ?></label>
      <input id="fecha_fin" type="date" name="fecha_fin" min= "<?php echo date("Y-m-d");?>"  value="<?php if(empty($fechas->fecha_fin)){ $vacio=null; echo $vacio;} else{ echo $fechas->fecha_fin;} ?>"class="form-control"  required>
            </div>
            </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-9" align="center">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Guardar')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                    <input  type="text"  value="<?php echo e($ss); ?>" class="form-control"  >


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\admin_sistema/fecha_actualizacion.blade.php ENDPATH**/ ?>