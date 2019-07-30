<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Egresados
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center">Cuestionario al Egresado</h1>
<div class="container" id="font7">
</br>
<form method="POST" action="<?php echo e(route('cuestionario_egresado')); ?>">
                        <?php echo csrf_field(); ?>

 <div class="form-row">
<div class="radio col-md-4" id="labels">
  <label>¿Títulado?</label>

 <input type="radio" id="si_titulo" name="titulo" value="si_titulo" onclick="checar()" required >
 <label for="si_titulo">Si</label>

 <input type="radio" id="no_titulo" name="titulo" value="no_titulo" onclick="nochecar()" required>
 <label for="no_titulo">No</label>

</div>

<div class="form-group col-md-4" id="labels">
  <label for="fecha_expedicion">Fecha de Expedición del título</label>
  <input type="date" class="form-control" id="fecha_expedicion" >
</div>


  <div class="form-group col-md-4">
    <label for="modalidad_tit">Modalidad de Titulación</label>
      <select name="modalidad_tit" id="modalidad_tit" required class="form-control">
      <option value="">Seleccione una opción</option>
      <option value="escolarizada">TESIS</option>
      <option value="semiescolarizada">PROMEDIO</option>
      <option value="flexi">CENEVAL</option>
      <option value="flexi">EXPERIENCIA PROFESIONAL</option>
      <option value="flexi">OTRO</option>
          </select>
</div>

</div>

</br>
<div class="form-row">
  <div class="form-group col-md-12">
  <label for="motivos_notitulado" ><?php echo e(__('En caso de no haberse titulado, ¿Cuales son los motivos de haber postergado la Titulación?')); ?></label>
  <textarea id="motivos_notitulado" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('motivos_notitulado')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('motivos_notitulado'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="motivos_notitulado" autocomplete="motivos_notitulado"> </textarea>
    <?php if ($errors->has('motivos_notitulado')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('motivos_notitulado'); ?>
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
  <label for="razon_carrera" ><?php echo e(__('¿Cual es la razón de haber estudiado la Licenciatura?')); ?></label>
  <textarea id="razon_carrera" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('razon_carrera')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('razon_carrera'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="razon_carrera" autocomplete="razon_carrera" > </textarea>
    <?php if ($errors->has('razon_carrera')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('razon_carrera'); ?>
  <span class="invalid-feedback" role="alert">
  <strong><?php echo e($message); ?></strong>
  </span>
                              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
</div>
</div>

<div class="form-row">
<div class="radio col-md-8" id="labels">
 <label>¿Has realizado o actualmente realizas estudios de Posgrado?</label>

<input type="radio" id="si_titulo" name="titulo" value="si_titulo" onclick="checar()" required >
<label for="si_titulo">Si</label>

<input type="radio" id="no_titulo" name="titulo" value="no_titulo" onclick="nochecar()" required>
<label for="no_titulo">No</label>
</div>
</div>

<div class="form-group col-md-4">
  <label for="modalidad_tit">Específique</label>
    <select name="modalidad_tit" id="modalidad_tit" required class="form-control">
    <option value="">Seleccione una opción</option>
    <option value="escolarizada">DIPLOMADO</option>
    <option value="semiescolarizada">MAESTRÍA</option>
    <option value="flexi">DOCTORADO</option>

        </select>
</div>


<div class="form-row">
<div class="radio col-md-12" id="labels">
 <label>¿Has realizado o actualmente realizas otros estudios en un ámbito diferente al perfil?</label>

<input type="radio" id="si_titulo" name="titulo" value="si_titulo" onclick="checar()" required >
<label for="si_titulo">Si</label>

<input type="radio" id="no_titulo" name="titulo" value="no_titulo" onclick="nochecar()" required>
<label for="no_titulo">No</label>
</div>
</div>

<div class="form-row">
  <div class="form-group col-md-12">
  <label for="estudios_despues" ><?php echo e(__('Específique')); ?></label>
  <input id="estudios_despues" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('estudios_despues')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('estudios_despues'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="estudios_despues" autocomplete="estudios_despues" >
    <?php if ($errors->has('estudios_despues')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('estudios_despues'); ?>
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
    <label for="modalidad_tit">¿Cuál es el	Grado de satisfacción en cuanto a la formación recibida por la Licenciatura?</label>
      <select name="modalidad_tit" id="modalidad_tit" required class="form-control">
      <option value="">Seleccione una opción</option>
      <option value="excelente">EXCELENTE</option>
      <option value="bueno">BUENO</option>
      <option value="regular">REGULAR</option>
      <option value="malo">MALO</option>
          </select>
</div>
</div>

<div class="form-row">
<div class="radio col-md-4" id="labels">
 <label>¿Elegirías la misma institución?</label>

<input type="radio" id="si_titulo" name="titulo" value="si_titulo" onclick="checar()" required >
<label for="si_titulo">Si</label>

<input type="radio" id="no_titulo" name="titulo" value="no_titulo" onclick="nochecar()" required>
<label for="no_titulo">No</label>

</div>

</div>

<div class="form-group col-md-12">
<label for="la_misma" ><?php echo e(__('¿Por qué?')); ?></label>
<input id="la_misma" type="text" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('la_misma')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('la_misma'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="la_misma" autocomplete="la_misma" >
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

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/seguimiento_egresadosP/cuestionario_egresado.blade.php ENDPATH**/ ?>