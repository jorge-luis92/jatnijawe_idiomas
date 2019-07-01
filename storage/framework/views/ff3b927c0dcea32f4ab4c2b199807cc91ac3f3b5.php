<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Solicitudes
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Solicitud de Servicio Social</h1>
<div class="container" id="font4">
</br>                    <form method="POST" action="<?php echo e(route('solicitud_servicioSocial')); ?>">

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

  <div class="form-group col-md-2">
    <label for="estatus"> Estatus</label>
      <select name="estatus" id="estatus" required class="form-control">
    <option value="">Seleccione una opción</option>
    <option value="regular">ESTUDIANTE</option>
    <option value="irregular">PASANTE</option>
</select>
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

<div class="form-group col-md-4">
    <label for="curp" ><?php echo e(__('* CURP')); ?></label>
          <input id="curp" type="text" minlength="18" maxlength="18"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('curp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('curp'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="curp" value="<?php echo e(old('curp')); ?>" required autocomplete="curp">
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

<div class="form-group col-md-2">
    <label for="edad" ><?php echo e(__('* Edad')); ?></label>
        <input id="edad" type="tel" maxlength="2" class="form-control <?php if ($errors->has('edad')) :
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

<div class="form-group col-md-6">
      <label for="direccion_actual" ><?php echo e(__('Dirección Actual')); ?></label>
      <input id="direccion_actual" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('direccion_actual')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('direccion_actual'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="direccion_actual" value="<?php echo e(old('direccion_actual')); ?>" required autocomplete="nombre">
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

<div class="form-group col-md-3">
  <label for="tel_celular">* Teléfono Celular</label>
  <input type="tel"  class="form-control" id="tel_celular" maxlength="10"  onkeypress="return numeros (event)"  placeholder="Formato a 10 digitos"  pattern="([0-9]{3})([0-9]{7})" required>
</div>

<div class="form-group col-md-3">
    <label for="email" ><?php echo e(__('Correo')); ?></label>
        <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">
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
</div>

<div class="form-row">

  <div class="form-group col-md-3">
      <label for="fecha_ingreso" ><?php echo e(__(' Fecha de Ingreso')); ?></label>
            <input id="fecha_ingreso" type="date" class="form-control <?php if ($errors->has('fecha_ingreso')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha_ingreso'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="fecha_ingreso" required autocomplete="fecha_ingreso">
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
      <label for="anio" ><?php echo e(__('Año')); ?></label>
          <input id="anio" type="text" maxlength="1" onKeyUp="this.value = this.value.toUpperCase();" class="form-control <?php if ($errors->has('anio')) :
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

  <div class="form-group col-md-3">
    <label for="semestre">Semestre</label>
      <select name="semestre" id="semestre" required class="form-control">
      <option value="">Seleccione una opción</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>

          </select>
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
</br>

<div class="form-row">

<div class="form-group col-md-12">
  <label for="institucion" ><?php echo e(__('Nombre del la Institución o Dependencia donde Realizará Servicio Social:')); ?></label>
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
<div class="form-row">
  <div class="form-group col-md-8">
    <label for="responsable" ><?php echo e(__('Nombre del Titular de la Dependencia(A quien va dirigido el oficio de Presentación)')); ?></label>
      <input id="responsable" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('institucion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('institucion'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="responsable" value="<?php echo e(old('responsable')); ?>" required autocomplete="responsable">
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
</div>



  <div class="form-row">
<div class="form-group col-md-2">
    <label for="fecha" ><?php echo e(__('Fecha')); ?></label>
          <input id="fecha" type="date" class="form-control <?php if ($errors->has('fecha')) :
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