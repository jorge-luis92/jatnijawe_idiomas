<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
:Solicitudes
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center"> Solicitudes de Practicas Profesionales </h1>
 <div class="container" id="font4">
 </br>                    <form method="POST" action="<?php echo e(route('solicitudes_practicas')); ?>">
                         <?php echo csrf_field(); ?>

                          <div class="form-row">
                            <label for="nombre" ><?php echo e(__('Buscar solictudes')); ?></label>
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
                                     <th scope="col">SOLICITUD</th>
                                      <th scope="col">ESTUDIANTE</th>
                                       <th scope="col">ESTABLECIMIENTO</th>
                                     <th scope="col">FECHA</th>
                                     <th colspan="2" >ACCIONES</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <tr>
                                          <th scope="row">1</th>
                                          <th scope="row">ANGELICA MENDEZ ORTIZ</th>
                                          <th scope="row">INGLÉS DE OAXACA</th>
                                          <th scope="row">08/06/2019</th>
                                          <td>  <a data-toggle="modal" href="#">VER SOLICITUD</a></td>
                                          <td>  <a data-toggle="modal" href="#">ELIMINAR</a></td>

                                        </tr>


                                 </tbody>
                               </table>
                             </div>

                         </div>
                     </form>
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



  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_servicios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\servicios/solicitudes_practicas.blade.php ENDPATH**/ ?>