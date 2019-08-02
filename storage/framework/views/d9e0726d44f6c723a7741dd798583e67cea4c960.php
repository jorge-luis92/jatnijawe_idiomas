<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Estudiantes Activos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Estudiantes Activos en Prácticas Profesionales </h1>
<div class="container" id="font7">
  </br>
  <div class="form-row">
  <label for="nombre" ><?php echo e(__('Buscar Estudiantes')); ?></label>

<div class="form-group col-md-4">

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

   <div class="col-xs-offset-2 col-xs-9" align="center">
       <button type="submit" class="btn btn-primary">
           <?php echo e(__('Buscar')); ?>

       </button>
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
             <th scope="row">685400</th>
             <td>OCTAVIO ARANGO CRUZ</td>
             <td>  <a data-toggle="modal" href="#">DETALLES</a></td>
             <td>  <a data-toggle="modal" href="#">AVANCE</a></td>
           </tr>

    </tbody>
  </table>
</div>


</div>

</div>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_servicios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\servicios\practicasP/estudiantes_activosPP.blade.php ENDPATH**/ ?>