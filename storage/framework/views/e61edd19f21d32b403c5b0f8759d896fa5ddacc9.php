<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Búsqueda Estudiantes
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Búsqueda de Estudiantes</h1>
 <div class="container" id="font4">
 </br>                    <form method="POST" action="<?php echo e(route('busqueda_estudiante_aux')); ?>">
                         <?php echo csrf_field(); ?>

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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

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



  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_auxadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\auxiliar_administrativo/busqueda_estudiante_aux.blade.php ENDPATH**/ ?>