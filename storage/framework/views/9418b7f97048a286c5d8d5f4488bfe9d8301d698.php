<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Egresados
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center">Antecedentes Laborales</h1>
<div class="container" id="font7">
</br>
<form method="POST" action="<?php echo e(route('antecedentes_laborales_egresado')); ?>">
                        <?php echo csrf_field(); ?>

      <div class="form-row">
      <div class="form-group col-md-3">
      <label>Labora Actualmente</label>
      <input id="labora" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('labora')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('labora'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="labora" autocomplete="labora" autofocus>
   </div>
      </div>

      <div class="form-row">
      <div class="form-group col-md-12">
      <label for="labor_actual" ><?php echo e(__('Lugar')); ?></label>
       <input id="labor_actual" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('labor_actual')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('labor_actual'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="labor_actual" autocomplete="labor_actual" autofocus>
         <?php if ($errors->has('labor_actual')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('labor_actual'); ?>
       <span class="invalid-feedback" role="alert">
       <strong><?php echo e($message); ?></strong>
       </span>
                                   <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
      </div>
      </div>


      <div class="form-row">
      <label> ¿El trabajo actual coincide con  los estudios realizados?</label>
        <div class="form-group col-md-4">
      <input name="coincide" id="coincide" required class="form-control"></input>
        </div>


    <div class="form-group col-md-4">
    <label for="ingreso_mensual" ><?php echo e(__('¿Cuál es su ingreso mensual?')); ?></label>
    <input id="ingreso_mensual" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('ingreso_mensual')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('ingreso_mensual'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="ingreso_mensual" autocomplete="ingreso_mensual" autofocus>
      <?php if ($errors->has('ingreso_mensual')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('ingreso_mensual'); ?>
    <span class="invalid-feedback" role="alert">
    <strong><?php echo e($message); ?></strong>
    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>

    <div class="form-group col-md-4">
    <label for="antiguedad" ><?php echo e(__('Antigüedad')); ?></label>
    <input id="antiguedad" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('antiguedad')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('antiguedad'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="antiguedad" autocomplete="antiguedad" autofocus>
      <?php if ($errors->has('antiguedad')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('antiguedad'); ?>
    <span class="invalid-feedback" role="alert">
    <strong><?php echo e($message); ?></strong>
    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>
  </div>

<div class="form-row">
  <div class="form-group col-md-12">
  <label for="trabajos_anteriores" ><?php echo e(__('Trabajos Anteriores')); ?></label>
  <input id="trabajos_anteriores" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('trabajos_anteriores')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('trabajos_anteriores'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="trabajos_anteriores" autocomplete="trabajos_anteriores" autofocus>
    <?php if ($errors->has('trabajos_anteriores')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('trabajos_anteriores'); ?>
  <span class="invalid-feedback" role="alert">
  <strong><?php echo e($message); ?></strong>
  </span>
                              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
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

<?php echo $__env->make('layouts.plantilla_servicios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\servicios\seguimientoE/antecedentes_laborales_egresado.blade.php ENDPATH**/ ?>