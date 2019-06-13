<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Estudiantes Activos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Estudiantes Activos</h1>
<div class="container" id="font5">
  </br>
  <div class="form-row">

<div class="form-group col-md-4">
</div>
 <div class="form-group col-md-4">
     <label for="nombre" ><?php echo e(__('')); ?></label>
         <input id="nombre" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('nombre')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nombre" value="<?php echo e(old('nombre')); ?>" required autocomplete="nombre">
         <?php if ($errors->has('nombre')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre'); ?>
             <span class="invalid-feedback" role="alert">
                 <strong><?php echo e($message); ?></strong>
             </span>
       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
 </div>

<br>
 <div class="form-group">
     <div class="col-xs-offset-1 col-xs-8" align="">
         <button type="submit" class="btn btn-primary">
             <?php echo e(__('Buscar')); ?>

         </button>
     </div>
 </div>
</form>
</div>



<div class="table-responsive">
  <table class="table table-bordered table-info" style="color: #000000;" >
    <thead>
      <tr>
        <th scope="col">MATRICULA</th>
        <th scope="col">NOMBRE</th>
        <th colspan="2" >ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <tr>
             <th scope="row">13161458</th>
             <td>AMI MEOW</td>
             <td>  <a data-toggle="modal" href="#">DETALLES</a></td>
             <td>  <a data-toggle="modal" href="#">DESACTIVAR</a></td>
           </tr>

    </tbody>
  </table>
</div>


</div>


  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_auxadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\auxiliar_administrativo/estudiante_activo_aux.blade.php ENDPATH**/ ?>