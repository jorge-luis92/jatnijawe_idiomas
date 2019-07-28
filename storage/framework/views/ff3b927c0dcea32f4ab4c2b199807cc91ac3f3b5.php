<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Solicitudes
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Solicitud de Servicio Social</h1>
<div class="container" id="font7">
  <h2 style="font-size: 1.2em; color: #000000;" align="left"><strong>Datos del Estudiante</strong></h2>
                  <form method="POST" action="<?php echo e(route('solicitud_servicioSocial')); ?>">

                        <?php echo csrf_field(); ?>

<div class="form-row">

  <div class="form-group col-md-2">
      <label for="matricula" ><?php echo e(__('* Matricula')); ?></label>
          <input id="matricula" maxlength="12" type="tel" value="<?php echo e($u->matricula); ?>" class="form-control <?php if ($errors->has('matricula')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('matricula'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" onkeypress="return numeros (event)" name="matricula"  autocomplete="matricula" autofocus required disabled>
          <?php if ($errors->has('matricula')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('matricula'); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
  </div>
  <div class="form-group col-md-2" id="labels">
    <label for="estatus">Estatus</label>
    <input type="text" class="form-control" id="estatus" value="<?php echo e($u->estatus); ?>"disabled>
  </div>

  <div class="form-group col-md-4">
    <label for="carrera" ><?php echo e(__('Carrera')); ?></label>
    <input id="carrera" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('carrera')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('carrera'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="carrera" value="<?php echo e(old('carrera')); ?>" required autocomplete="carrera">
          <?php if ($errors->has('carrera')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('carrera'); ?>
    <span class="invalid-feedback" role="alert">
    <strong><?php echo e($message); ?></strong>
      </span>
        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
  </div>

  <div class="form-group col-md-4">
    <label for="facultad" ><?php echo e(__('Facultad')); ?></label>
    <input id="facultad" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('facultad')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('facultad'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="facultad" value="<?php echo e(old('facultad')); ?>" required autocomplete="facultad">
          <?php if ($errors->has('facultad')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('facultad'); ?>
    <span class="invalid-feedback" role="alert">
    <strong><?php echo e($message); ?></strong>
      </span>
        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
  </div>

</div>

<div class="form-row">
  <div class="form-group col-md-6">
      <label for="nombre" ><?php echo e(__('Nombre del Estudiante')); ?></label>
      <input id="nombre" type="text"disabled  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('nombre')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nombre" value="<?php echo e($u->nombre); ?> <?php echo e($u->apellido_paterno); ?> <?php echo e($u->apellido_materno); ?>" required autocomplete="nombre">
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

  <div class="form-group col-md-3">
      <label for="curp" ><?php echo e(__('CURP')); ?></label>
            <input id="curp" type="text"  minlength="18" maxlength="18" onKeyUp="this.value = this.value.toUpperCase()" disabled class="form-control <?php if ($errors->has('curp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('curp'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="curp" value="<?php echo e($u->curp); ?>" required autocomplete="curp">
          <?php if ($errors->has('curp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('curp'); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
  </div>

  <div class="form-group col-md-3">
      <label for="edad" ><?php echo e(__('* Edad')); ?></label>
          <input id="edad" type="tel" disabled maxlength="2"  value="<?php echo e($u->edad); ?>" class="form-control <?php if ($errors->has('edad')) :
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
</div>

<div class="form-row">
  <div class="form-group col-md-12">
        <label for="direccion_actual" ><?php echo e(__('Dirección Actual')); ?></label>
        <textarea id="direccion_actual" disabled  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('direccion_actual')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('direccion_actual'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="direccion_actual"  required autocomplete="nombre"><?php if(empty($d->vialidad_principal)){ $vacio=null; echo $vacio;} else {echo "CALLE: ".$d->vialidad_principal." #".$d->num_exterior.", C.P: ".$d->cp.", COLONIA: ".$d->localidad." MUNICIPIO: ".$d->municipio." CIUDAD: ".$d->entidad_federativa;}?> </textarea>
              <?php if ($errors->has('direccion_actual')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('direccion_actual'); ?>
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
    <label for="tel_celular">* Teléfono Celular</label>
    <input type="text"  class="form-control" value="<?php if(empty($cel->numero)){ $vacio=null; echo $vacio;} else{ echo $cel->numero;} ?>" disabled  id="tel_celular" maxlength="10">
  </div>

  <div class="form-group col-md-3">
      <label for="email" ><?php echo e(__('Correo')); ?></label>
          <input id="email" disabled type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(Auth::user()->email); ?>" required autocomplete="email">
          <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
  </div>

  <div class="form-group col-md-3">
      <label for="fecha_ingreso" ><?php echo e(__(' Fecha de Ingreso')); ?></label>
            <input id="fecha_ingreso" type="date" class="form-control" value="<?php echo e($u->fecha_ingreso); ?>"  disabled name="fecha_ingreso" required autocomplete="fecha_ingreso">
          <?php if ($errors->has('fecha_ingreso')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha_ingreso'); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
  </div>

  <div class="form-group col-md-3">
      <label for="anio" ><?php echo e(__('Año Escolar')); ?></label>
          <input id="anio" type="text" maxlength="1" value="<?php  ?>" disabled onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('anio')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('anio'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="anio" autocomplete="anio" autofocus>
          <?php if ($errors->has('anio')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('anio'); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
  </div>
</div>

<div class="form-row">
  <div class="form-group col-md-3" id="labels">
    <label for="semestre">Semestre</label>
    <input type="number" class="form-control" id="semestre" value="<?php echo e($u->semestre); ?>" disabled>
  </div>

  <div class="form-group col-md-3">
      <label for="avance" ><?php echo e(__('Porcentaje de Avance')); ?></label>
          <input id="avance" type="text" maxlength="1" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('avance')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('avance'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="avance" autocomplete="avance" autofocus>
          <?php if ($errors->has('grupo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('grupo'); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
  </div>

</div>

<hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">
<h3 style="font-size: 1.2em; color: #000000;" align="left"><strong>Datos de la Empresa</strong></h3>

<div class="form-row">

<div class="form-group col-md-12">
  <label for="institucion" ><?php echo e(__('Nombre del la Institución o Dependencia donde Realizará Prácticas Profesionales:')); ?></label>
    <input id="institucion" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('institucion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('institucion'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="institucion" value="<?php echo e(old('institucion')); ?>" required autocomplete="institucion">
        <?php if ($errors->has('institucion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('institucion'); ?>
    <span class="invalid-feedback" role="alert">
      <strong><?php echo e($message); ?></strong>
    </span>
      <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
  </div>
</div>

<label for="responsable" ><?php echo e(__('Nombre del Titular de la Dependencia(A quien va dirigido el oficio de Presentación)')); ?></label>
<div class="form-row">
<div class="form-group col-md-4">
   <label for="nombre" ><?php echo e(__('* Nombre(s)')); ?></label>
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

<div class="form-group col-md-4">
   <label for="apellido_paterno" ><?php echo e(__('* Apellido Paterno')); ?></label>
         <input id="apellido_paterno" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('apellido_paterno')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('apellido_paterno'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="apellido_paterno" value="<?php echo e(old('apellido_paterno')); ?>" required autocomplete="apellido_paterno">
       <?php if ($errors->has('apellido_paterno')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('apellido_paterno'); ?>
           <span class="invalid-feedback" role="alert">
               <strong><?php echo e($message); ?></strong>
           </span>
       <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
</div>

<div class="form-group col-md-4">
   <label for="apellido_materno" ><?php echo e(__('Apellido Materno')); ?></label>
         <input id="apellido_materno"  onKeyUp="this.value = this.value.toUpperCase()"  type="text" class="form-control <?php if ($errors->has('apellido_materno')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('apellido_materno'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="apellido_materno" value="<?php echo e(old('apellido_materno')); ?>" autocomplete="apellido_materno">
       <?php if ($errors->has('apellido_materno')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('apellido_materno'); ?>
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
      <label for="cargo_responsable" ><?php echo e(__('Cargo del Titular')); ?></label>
        <input id="cargo_responsable" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('cargo_responsable')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cargo_responsable'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="cargo_responsable" value="<?php echo e(old('cargo_responsable')); ?>" required autocomplete="cargo_responsable">
            <?php if ($errors->has('cargo_responsable')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cargo_responsable'); ?>
        <span class="invalid-feedback" role="alert">
          <strong><?php echo e($message); ?></strong>
        </span>
          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
      </div>
      <div class="form-group col-md-4">
          <label for="fecha" ><?php echo e(__('Fecha de Realización de la Solicitud')); ?></label>
                <input id="fecha" type="date" value="<?php echo date("Y-m-d");?>" disabled class="form-control <?php if ($errors->has('fecha')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="fecha" required>
              <?php if ($errors->has('fecha')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha'); ?>
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
window.onload = function anio_es(){
  var ed = document.getElementById('fecha_ingreso').value; //fecha de nacimiento en el formulario
  var fechaNacimiento = ed.split("-");
  var ano = fechaNacimiento[0];
  var mes = fechaNacimiento[1];
  var dia = fechaNacimiento[2];
  var fechaHoy = new Date(); // detecto la fecha actual y asigno el dia, mes y anno a variables distintas
  var ahora_ano = fechaHoy.getFullYear();
  var ahora_mes = fechaHoy.getMonth()+1;
  var ahora_dia = fechaHoy.getDate();

  var anio_se;
  anio_se=ahora_ano-ano;

  document.getElementById('avance').value = anio_se;

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

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante\servicios/solicitud_servicioSocial.blade.php ENDPATH**/ ?>