<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Registro Taller
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Actividades Extracurriculares: Talleres</h1>
<div class="container" id="font7">
</br>
<form method="POST"  action="<?php echo e(route('registrar_taller')); ?>">
<?php echo csrf_field(); ?>
<div class="form-row">
    <div class="form-group col-md-7">
          <label for="nombre_ec" ><?php echo e(__('* Nombre del Taller')); ?></label>
          <input id="nombre_ec" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('nombre_ec')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre_ec'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nombre_ec" value="<?php echo e(old('nombre_ec')); ?>" required autocomplete="nombre_ec">
            <?php if ($errors->has('nombre_ec')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre_ec'); ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>

    <div class="form-group col-md-2">
        <label for="creditos" ><?php echo e(__('* Créditos')); ?></label>
        <input id="creditos" type="tel" maxlength="2" class="form-control <?php if ($errors->has('creditos')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('creditos'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" onkeypress="return numeros (event)" name="creditos" autocomplete="creditos" required autofocus>
        <?php if ($errors->has('creditos')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('creditos'); ?>
        <span class="invalid-feedback" role="alert">
          <strong><?php echo e($message); ?></strong>
        </span>
        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>

    <div class="form-group col-md-3">
        <label for="area">* Área</label>
        <select name="area" id="area" required class="form-control">
              <option value="">Seleccione una opción</option>
              <option value="ACADEMICA">ACADÉMICA</option>
              <option value="CULTURAL">CULTURAL</option>
              <option value="DEPORTIVA">DEPORTIVA</option>
        </select>
    </div>

</div>

<div class="form-row">

    <div class="form-group col-md-3">
        <label for="modalidad">* Modalidad</label>
        <select name="modalidad" id="modalidad" required class="form-control">
        <option value="">Seleccione una opción</option>
        <option value="ESCOLARIZADA">ESCOLARIZADA</option>
        <option value="SEMIESCOLARIZADA">SEMIESCOLARIZADA</option>
        </select>
    </div>


    <div class="form-group col-md-2">
        <label for="cupo" ><?php echo e(__('* Cupo')); ?></label>
        <input id="cupo" type="tel" maxlength="3" class="form-control <?php if ($errors->has('cupo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cupo'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" onkeypress="return numeros (event)" name="cupo" autocomplete="cupo" required autofocus>
        <?php if ($errors->has('cupo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cupo'); ?>
        <span class="invalid-feedback" role="alert">
        <strong><?php echo e($message); ?></strong>
        </span>
        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>

    <div class="form-group col-md-7">
          <label for="lugar" ><?php echo e(__('* Lugar')); ?></label>
          <input id="lugar" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('lugar')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('lugar'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="lugar" value="<?php echo e(old('lugar')); ?>" required autocomplete="lugar">
            <?php if ($errors->has('lugar')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('lugar'); ?>
          <span class="invalid-feedback" role="alert">
            <strong><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>

  </div>


  <div class="form-row">
        <div class="form-group col-md-3">
        <label for="fecha_inicio" ><?php echo e(__('* Fecha de Inicio')); ?></label>
        <input id="fecha_inicio" oninput="vamo()" type="date" min= "<?php echo date("Y-m-d");?>"  max="" class="form-control <?php if ($errors->has('fecha_inicio')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha_inicio'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="fecha_inicio" required>
        <?php if ($errors->has('fecha_inicio')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha_inicio'); ?>
        <span class="invalid-feedback" role="alert">
        <strong><?php echo e($message); ?></strong>
        </span>
        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
        </div>

  <div class="form-group col-md-3">
       <label for="fecha_fin" ><?php echo e(__('* Fecha Terminación')); ?></label>
       <input id="fecha_fin"  onchange="vamo()" type="date" min= "<?php echo date("Y-m-d");?>"  max="" class="form-control <?php if ($errors->has('fecha_fin')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha_fin'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="fecha_fin" required>
       <?php if ($errors->has('fecha_fin')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha_fin'); ?>
       <span class="invalid-feedback" role="alert">
       <strong><?php echo e($message); ?></strong>
       </span>
      <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
   </div>

  <div class="form-group col-md-3">
        <label for="hora_inicio">* Hora de entrada</label>
        <input id="hora_inicio" type="time" oninput="vamos()" min= "07:00" max="19:00" class="form-control"  name="hora_inicio"  required class="form-control" >
  </div>

  <div class="form-group col-md-3">
    <label for="hora_fin" ><?php echo e(__('* Hora Salida')); ?></label>
    <input id="hora_fin" type="time" onchange="vamos()"  name="hora_fin"  min="" max="20:00"  value="" class="form-control"  required>
          </div>
</div>

<div  class="form-row">
  <div class="form-group col-md-3">
   <label for="dias_sem">* Días de la semana</label>
   <input id="dias_sem" type="text" name="dias_sem" onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('dias_sem')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('dias_sem'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  value="<?php echo e(old('dias_sem')); ?>" required autocomplete="dias_sem">
     <?php if ($errors->has('dias_sem')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('dias_sem'); ?>
   <span class="invalid-feedback" role="alert">
   <strong><?php echo e($message); ?></strong>
   </span>
     <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
   </div>


<div class="form-group col-md-4">
    <label for="tutor">* Tutor</label>
    <select name="tutor" id="tutor" required class="form-control">
    <option value="">Seleccione una opción</option>
    <?php $__currentLoopData = $taller; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $talleres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo $talleres->id_tutor; ?>"><?php echo $talleres->nombre; ?> <?php echo $talleres->apellido_paterno; ?> <?php echo $talleres->apellido_materno; ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

  <div class="form-group col-md-5">
      <label for="materiales" ><?php echo e(__('* Materiales')); ?></label>
      <input id="materiales" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('materiales')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('materiales'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="materiales" value="<?php echo e(old('materiales')); ?>" required autocomplete="materiales">
        <?php if ($errors->has('materiales')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('materiales'); ?>
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
          <?php echo e(__('Registrar')); ?>

        </button>
    </div>
</div>
</form>
</div>

<?php $__env->stopSection(); ?>

<script>
function showCheckboxes() {
    var checkboxes = document.getElementById("checkboxes");
    if(checkboxes.classList.contains("hide")) {
        checkboxes.classList.remove("hide");
    } else {
        checkboxes.classList.add("hide");
    }
}
</script>
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

<script>
function vamo(){
    var ed = document.getElementById('fecha_inicio').value; //fecha de nacimiento en el formulario
   var fecha_inicio = ed.split("-");
    var anio = fecha_inicio[0];
    var mes = fecha_inicio[1];
    var dia = fecha_inicio[2];
  /*var mm = parseInt(mes);
  var anios= parseInt(anio);
var j=anio;
var hey;
if((mes >= 1) || (mes <12)){
  mm=1+mm;
if((mm > 1) || (mm < 10)){
hey =mm;*/
document.getElementById("fecha_fin").min = anio+'-'+'0'+hey+'-'+dia;
}

function vamos(){
    var ed = document.getElementById('hora_inicio').value; //fecha de nacimiento en el formulario
    var hours = ed.split(":")[0];
   var minutes = ed.split(":")[1];
var nueva_hora= parseInt(hours);
var primero;
if((nueva_hora >= 6) &&  (nueva_hora <= 8)){
       primero= nueva_hora + 1;
       document.getElementById("hora_fin").min = "0"+primero  + ":" + minutes;

     }

   if((nueva_hora >= 9) &&  (nueva_hora <= 19)){
          primero= nueva_hora + 1;
          document.getElementById("hora_fin").min = primero  + ":" + minutes;

        }
    if(nueva_hora == 20){
           primero= nueva_hora + 1;
           document.getElementById("hora_fin").min = primero  + ":" + minutes;

         }

}

</script>

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo/formacion_integral/gestion_talleres/registro_taller.blade.php ENDPATH**/ ?>