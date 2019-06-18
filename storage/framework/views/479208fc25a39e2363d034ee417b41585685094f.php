<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Solicitudes
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Solicitud de Taller</h1>
<div class="container" id="font4">
</br>                    <form method="POST" action="<?php echo e(route('solicitud_taller')); ?>">

                        <?php echo csrf_field(); ?>

<div class="form-row">
  <div class="form-group col-md-5">
    <label for="nombre" ><?php echo e(__('Nombre del Solicitante')); ?></label>
    <input id="nombre" type="text" value="<?php echo e($u->nombre); ?> <?php echo e($u->apellido_paterno); ?> <?php echo e($u->apellido_materno); ?>" disabled onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('nombre')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nombre"  required autocomplete="nombre">
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

<div class="form-group col-md-2">
  <input type="text"  hidden size=10  maxlength=10 name="fecha_nac"  onblur="calcular_edad();" id="fecha_nac">
    <label for="edad" ><?php echo e(__('* Edad')); ?></label>
    <input id="edad" type="tel" maxlength="2"  value="<?php echo e($u->edad); ?>" disabled class="form-control <?php if ($errors->has('edad')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('edad'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" onkeypress="return numeros (event)" name="edad" autocomplete="edad" required autofocus>
        <?php if ($errors->has('edad')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('edad'); ?>
    <span class="invalid-feedback" role="alert">
    <strong><?php echo e($message); ?></strong>
    </span>
        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

</div>

<div class="form-group col-md-2" id="labels">
  <label for="semestre">Semestre</label>
  <input type="number" name="semestre" class="form-control" disabled id="semestre" value="<?php echo e($u->semestre); ?>" disabled>
</div>

<div class="form-group col-md-3">
  <label for="tel_celular">* Teléfono Celular</label>
  <input type="tel"  class="form-control" disabled id="tel_celular" maxlength="10" value="<?php if(empty($num_->numero)){ $vacio=null; echo $vacio;} else{ echo $num_->numero;} ?>" onkeypress="return numeros (event)"  placeholder=""  pattern="([0-9]{3})([0-9]{7})" required>
</div>



</div>

<div class="form-row">

<div class="form-group col-md-12">
  <label for="nombre_taller" ><?php echo e(__('Nombre del Taller')); ?></label>
    <input id="nombre_taller" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('nombre_taller')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre_taller'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nombre_taller" value="<?php echo e(old('nombre_taller')); ?>" required autocomplete="nombre_taller">
        <?php if ($errors->has('nombre_taller')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre_taller'); ?>
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
  <label for="descripcion" ><?php echo e(__('Descripción')); ?></label>
    <input id="descripcion" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('descripcion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('descripcion'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="descripcion" value="<?php echo e(old('descripcion')); ?>" required autocomplete="descripcion">
    <?php if ($errors->has('descripcion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('descripcion'); ?>
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
    <label for="objetivos" ><?php echo e(__('Objetivos')); ?></label>
    <input id="objetivos"  onKeyUp="this.value = this.value.toUpperCase()"  type="text" class="form-control <?php if ($errors->has('objetivos')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('objetivos'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="objetivos" value="<?php echo e(old('objetivos')); ?>" autocomplete="objetivos">
    <?php if ($errors->has('objetivos')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('objetivos'); ?>
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
    <label for="justificacion" ><?php echo e(__('Justificación')); ?></label>
    <input id="justificacion"  onKeyUp="this.value = this.value.toUpperCase()"  type="text" class="form-control <?php if ($errors->has('justificacion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('justificacion'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="justificacion" value="<?php echo e(old('justificacion')); ?>" autocomplete="justificacion">
    <?php if ($errors->has('justificacion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('justificacion'); ?>
    <span class="invalid-feedback" role="alert">
    <strong><?php echo e($message); ?></strong>
    </span>
    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
</div>
</div>

<div class="form-row">

  <div class="form-group col-md-4">
    <label for="duracion">Duración</label>
      <select name="duracion" id="duracion" required class="form-control">
    <option value="">Seleccione una opción</option>
    <option value="SEMESTRAL">SEMESTRAL (35 HORAS)</option>
    <option value="4MESES">4 MESES (30 HORAS)</option>
    <option value="3MESES">3 MESES (25 HORAS)</option>
    <option value="2MESES">2 MESES (20 HORAS)</option>
    <option value="1MESES">1 MES (15 HORAS)</option>
    <option value="CHARLA">CHARLA (2-15 HORAS)</option>
  </select>
  </div>

<div class="form-group col-md-4">
        <label for="hora_inicio">Hora de entrada (Tentativo)</label>
        <input type="time" class="form-control"  id="hora_inicio" required class="form-control" >
  </div>

<div class="form-group col-md-4">
    <label for="hora_fin">Hora de salida (tentativo)</label>
    <input type="time" class="form-control"  id="hora_fin" required class="form-control" >
</div>

</div>

<div class="form-row">
  <div class="form-group col-md-2">
      <label for="creditos" ><?php echo e(__('Créditos')); ?></label>
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
  <div class="form-group col-md-2">
      <label for="cupo" ><?php echo e(__('Cupo')); ?></label>
      <input id="cupo" type="tel" maxlength="2" class="form-control <?php if ($errors->has('cupo')) :
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

  <div class="form-group col-md-8">
      <label for="materiales" ><?php echo e(__('Materiales')); ?></label>
      <input id="materiales"  onKeyUp="this.value = this.value.toUpperCase()"  type="text" class="form-control <?php if ($errors->has('materiales')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('materiales'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="materiales" value="<?php echo e(old('materiales')); ?>" autocomplete="materiales">
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

<div class="form-row">
<div class="form-group col-md-12">
    <label for="propuesta" ><?php echo e(__('Propuesta de Proyecto Final')); ?></label>
    <input id="propuesta"  onKeyUp="this.value = this.value.toUpperCase()"  type="text" class="form-control <?php if ($errors->has('propuesta')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('propuesta'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="propuesta" value="<?php echo e(old('propuesta')); ?>" autocomplete="propuesta">
    <?php if ($errors->has('propuesta')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('propuesta'); ?>
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
                                   <?php echo e(__('Enviar solicitud')); ?>

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

<script>
function calcular_edad()
{

 var form = document.getElementById('fecha_nac').value; //fecha de nacimiento en el formulario
//var fechaNacimiento = a.split("/");
  //  var form = document.getElementById('fecha_nac').value; //fecha de nacimiento en el formulario

  var fechaNacimiento = form.split("-");

    /*var dia = fechaNacimiento[0];
    var mes = fechaNacimiento[1];
    var ano = fechaNacimiento[2];
*/
var ano = fechaNacimiento[0];
var mes = fechaNacimiento[1];
var dia = fechaNacimiento[2];

    var fechaHoy = new Date(); // detecto la fecha actual y asigno el dia, mes y anno a variables distintas
    var ahora_ano = fechaHoy.getFullYear();
    var ahora_mes = fechaHoy.getMonth()+1;
    var ahora_dia = fechaHoy.getDate();

    // realizamos el calculo
    var edad = (ahora_ano + 1900) - ano;
    if ( ahora_mes < mes )
    {
        edad--;
    }
    if (mes == ahora_mes && ahora_dia < dia)
    {
        edad--;
    }
    if (edad > 1900)
    {
        edad -= 1900;
    }

    var meses=0;
    if(ahora_mes>mes)
        meses=ahora_mes-mes;
    if(ahora_mes<mes)
        meses=12-(mes-ahora_mes);

    //document.write("<br>"+edad);
    //document.write("<br>"+meses);
    document.getElementById('edad').value = edad;
    document.getElementById('mes').value = mes;
    //alert(edad);

}
//calcular_edad("01/09/1992");


</script>

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante\mis_actividades/solicitud_taller.blade.php ENDPATH**/ ?>