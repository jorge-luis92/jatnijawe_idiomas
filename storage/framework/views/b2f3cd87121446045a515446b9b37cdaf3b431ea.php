<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Solicitudes
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Solicitud de Prácticas Profesionales</h1>
<div class="container" id="font4">
</br>                    <form method="POST" action="<?php echo e(route('solicitud_practicasP')); ?>">

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
    <label for="semestre">Semestre</label>
    <input type="number" name="semestre" value="<?php echo e($u->semestre); ?>" class="form-control" id="semestre" value="" disabled>
  </div>

  <div class="form-group col-md-1">
      <label for="grupo" ><?php echo e(__('Grupo')); ?></label>
      <input id="grupo" type="tel" value="<?php echo e($u->grupo); ?>" maxlength="2" class="form-control <?php if ($errors->has('grupo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('grupo'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" onkeypress="return numeros (event)" name="grupo" autocomplete="grupo" required autofocus disabled>
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

  <div class="form-group col-md-4">
    <label for="carrera" ><?php echo e(__('Carrera')); ?></label>
    <input id="carrera" type="text" disabled  onKeyUp="this.value = this.value.toUpperCase()"  class="form-control <?php if ($errors->has('carrera')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('carrera'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="carrera"  required autocomplete="carrera">
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

  <div class="form-group col-md-3" id="labels">
    <label for="modalidad">Modalidad</label>
    <input type="text" name="modalidad" value="<?php echo e($u->modalidad); ?>" class="form-control" id="modalidad" value="" disabled>
  </div>
</div>

<div class="form-row">
<div class="form-group col-md-5">
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
  <div class="form-group col-md-4">
    <label for="tel_celular">* Teléfono Celular</label>
    <input type="text"  class="form-control" disabled value="" id="tel_celular" maxlength="10"    value="<?php if(empty($cel->numero)){ $vacio=null; echo $vacio;} else{ echo $cel->numero;} ?>" >
  </div>

  <div class="form-group col-md-4">
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
  <div class="form-group col-md-4">
      <label for="fecha_ingreso" ><?php echo e(__(' Fecha de Ingreso')); ?></label>
            <input id="fecha_ingreso" disabled type="date" class="form-control <?php if ($errors->has('fecha_ingreso')) :
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
</div>

<hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">
</br>

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
  <div class="form-group col-md-8">
        <label for="direccion" ><?php echo e(__('Dirección')); ?></label>
        <input id="direccion" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('direccion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('direccion'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="direccion" value="<?php echo e(old('direccion')); ?>" required autocomplete="direccion">
              <?php if ($errors->has('direccion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('direccion'); ?>
        <span class="invalid-feedback" role="alert">
        <strong><?php echo e($message); ?></strong>
          </span>
            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
  </div>
  <div class="form-group col-md-4">
    <label for="telefono">* Teléfono</label>
    <input type="tel"  class="form-control" id="tel_celular" maxlength="10"  onkeypress="return numeros (event)"  placeholder="Formato a 10 digitos"  pattern="([0-9]{3})([0-9]{7})" required>
  </div>

</div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="duracion">Periodo</label>
        <select name="duracion" id="duracion" required class="form-control">
      <option value="">Seleccione una opción</option>
      <option value="3MESES">3 MESES</option>
      <option value="6MESES">6 MESES</option>

    </select>
    </div>
<?php $now = new \DateTime(); ?>
    <div class="form-group col-md-4">
        <label for="fecha" ><?php echo e(__('Fecha')); ?></label>
              <input id="fecha" type="date" value="" class="form-control <?php if ($errors->has('fecha')) :
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

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante\servicios/solicitud_practicas.blade.php ENDPATH**/ ?>