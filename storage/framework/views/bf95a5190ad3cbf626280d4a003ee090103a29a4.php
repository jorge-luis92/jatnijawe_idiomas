<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Egresados
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center">Cuestionario al Egresado</h1>
<div class="container" id="font7">
</br>
<form method="POST" action="<?php echo e(route('cuestionario_egresado_ver')); ?>">
                        <?php echo csrf_field(); ?>

  <div class="form-row">
   <div class="form-group col-md-2">
   <label for="titulo">Títulado</label>
   <input name="estado" id="estado" required class="form-control"></input>
                       </div>


<div class="form-group col-md-5" id="labels">
  <label for="fecha_expedicion">Fecha de Expedición del título</label>
  <input type="date" class="form-control" id="fecha_expedicion" >
</div>


  <div class="form-group col-md-5">
    <label for="modalidad_tit">Modalidad de Titulación</label>
    <input name="modalidad_tit" id="modalidad_tit" required class="form-control"></input>
</div>

</div>

</br>
<div class="form-row">
  <div class="form-group col-md-12">
  <label for="motivos_post" ><?php echo e(__('En caso de no haberse titulado, ¿Cuales son los motivos de haber postergado la Titulación?')); ?></label>
  <input id="motivos_post" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('motivos_post')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('motivos_post'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="motivos_post" autocomplete="motivos_post" autofocus>
    <?php if ($errors->has('motivos_post')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('motivos_post'); ?>
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
  <label for="bachillerato_origen" ><?php echo e(__('¿Cual es la razón de haber estudiado la Licenciatura?')); ?></label>
  <input id="bachillerato_origen" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('bachillerato_origen')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('bachillerato_origen'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="bachillerato_origen" autocomplete="bachillerato_origen" autofocus>
    <?php if ($errors->has('bachillerato_origen')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('bachillerato_origen'); ?>
  <span class="invalid-feedback" role="alert">
  <strong><?php echo e($message); ?></strong>
  </span>
                              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-2">
<label>Estudios de Posgrado</label>
<input name="posgrado" id="posgrado" required class="form-control"></input>
</div>



  <div class="form-group col-md-10">
  <label for="posgrado" ><?php echo e(__('Especificaciones')); ?></label>
  <input id="posgrado" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('posgrado')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('posgrado'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="posgrado" autocomplete="posgrado" autofocus>
    <?php if ($errors->has('posgrado')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('posgrado'); ?>
  <span class="invalid-feedback" role="alert">
  <strong><?php echo e($message); ?></strong>
  </span>
                              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
</div>
</div>

<div class="form-row">
<div class="form-group col-md-2">
<label>Realiza otros estudios</label>
<input name="estudios_despues" id="estudios_despues" required class="form-control"></input>
</div>



  <div class="form-group col-md-10">
  <label for="posgrado" ><?php echo e(__('Especificaciones')); ?></label>
  <input id="posgrado" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('posgrado')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('posgrado'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="posgrado" autocomplete="posgrado" autofocus>
    <?php if ($errors->has('posgrado')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('posgrado'); ?>
  <span class="invalid-feedback" role="alert">
  <strong><?php echo e($message); ?></strong>
  </span>
                              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
</div>
</div>



<div class="form-row">
  <div class="form-group col-md-8">
    <label for="grado_satisfaccion">¿Cuál es el	Grado de satisfacción en cuanto a la formación recibida por la Licenciatura?</label>
    <input name="grado_satisfaccion" id="grado_satisfaccion" required class="form-control"></input>

</div>
</div>

<div class="form-row">
 <div class="form-row">
  <label>¿Eligiria la misma institución nuevamente?</label>
   <div class="form-group col-md-2">
 <input name="estudios_despues" id="estudios_despues" required class="form-control"></input>
 </div>
</div>



<div class="form-group col-md-10">
<label for="la_misma" ><?php echo e(__('¿Por qué?')); ?></label>
<input id="la_misma" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('la_misma')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('la_misma'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="la_misma" autocomplete="la_misma" autofocus>
  <?php if ($errors->has('la_misma')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('la_misma'); ?>
<span class="invalid-feedback" role="alert">
<strong><?php echo e($message); ?></strong>
</span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
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

<?php echo $__env->make('layouts.plantilla_servicios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\servicios\seguimientoE/cuestionario_egresado_ver.blade.php ENDPATH**/ ?>