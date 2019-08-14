<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Registro Horas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1 style="font-size: 1.5em; color: #000000;" align="center"> Registro de Horas</h1>
<h2 style="font-size: 1.2em; color: #000000;" align="center"> Estudiante: <?php echo e($estudiante_da->nombre); ?> <?php echo e($estudiante_da->apellido_paterno); ?> <?php echo e($estudiante_da->apellido_materno); ?> Matricula: <?php echo e($estudiante_da->matricula); ?></h2>
<div class="container" id="font5">
</br>
<form method="POST" action="<?php echo e(route ('horas_estudiante')); ?>">
<?php echo csrf_field(); ?>
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="tutor">* Nombre de la Actividad</label>
      <select name="extra" id="tutor" required class="form-control">
      <?php $__currentLoopData = $extra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curricular): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo $curricular->id_extracurricular; ?>"> <?php echo $curricular->nombre_ec; ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
  </div>

<div class="form-group col-md-6">
    <label for="tutor">* Tutor</label>
    <select name="tutor" id="tutor" required class="form-control">
    <?php $__currentLoopData = $taller; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $talleres): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo $talleres->id_tutor; ?>"><?php echo $talleres->nombre; ?> <?php echo $talleres->apellido_paterno; ?> <?php echo $talleres->apellido_materno; ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<input type="text" id="matricula" hidden name="matricula" value="<?php echo e($uno); ?>">

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

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo/formacion_integral/registro_estudiantes.blade.php ENDPATH**/ ?>