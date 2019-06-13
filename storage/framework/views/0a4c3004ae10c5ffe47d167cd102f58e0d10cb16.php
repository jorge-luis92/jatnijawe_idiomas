<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Mis talleres
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Mis talleres Finalizados</h1>
 <div class="container" id="font4">
 </br>     <form  method="post" action="<?php echo e(route('talleres_finalizados')); ?>">
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

          <div class="table-responsive">
          <table class="table table-bordered table-info" style="color: #000000;" >
          <thead>
          <tr>
            <th scope="col">CLAVE</th>
            <th scope="col">TALLER</th>
            <th scope="col">CREDITOS</th>
            <th scope="col">ESTATUS</th>
            <th colspan="2" >DETALLES</th>

          </tr>
          </thead>
          <tbody>
          <tr>
            <th scope="row">12387</th>
            <th scope="row">DANZA</th>
            <th scope="row">25</th>
            <th scope="row">FINALIZADO</th>
            <td>  <a  href="#">VER</a></td>
            </tr>
            <tr>
              <th scope="row">39580</th>
              <th scope="row">FOTOGRAFIA</th>
              <th scope="row">15</th>
              <th scope="row">CANCELADO</th>
              <td>  <a  href="#">VER</a></td>
              </tr>

          </tbody>
          </table>
          </div>
          </form>
          </div>
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

<?php echo $__env->make('layouts.plantilla_tallerista', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/tallerista/talleres_finalizados.blade.php ENDPATH**/ ?>