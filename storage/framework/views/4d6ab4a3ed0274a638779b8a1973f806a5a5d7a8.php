<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
:Actividades Asignadas
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Actividades Asignadas</h1>
 <div class="container" id="font4">
 </br>                    <form  method="post" action="<?php echo e(route('actividades_asignadas')); ?>">
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
                                                          <th scope="col">TALLER</th>
                                                          <th scope="col">TUTOR</th>
                                                          <th scope="col">CREDITOS</th>
                                                          <th scope="col">AREA</th>
                                                          <th scope="col">MODALIDAD</th>
                                                          <th scope="col">TIPO</th>
                                                          <th colspan="2" >ACCIONES</th>

                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>
                                                               <th scope="row">DANZA</th>
                                                               <th scope="row">CITLALI CAYETANO</th>
                                                               <th scope="row">15</th>
                                                               <th scope="row">CULTURAL</th>
                                                               <th scope="row">ESCOLARIZADO</th>
                                                               <th scope="row">TALLER</th>
                                                               <td>  <a data-toggle="modal" href="#">DETALLES</a></td>
                                                               <td>  <a data-toggle="modal" href="#">FINALIZAR</a></td>

                                                             </tr>

                                                      </tbody>
                                                    </table>
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

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\formacion_integral\gestion_talleres/actividades_asignadas.blade.php ENDPATH**/ ?>