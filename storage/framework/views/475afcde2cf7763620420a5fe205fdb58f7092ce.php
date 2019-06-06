<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Registro Usuarios
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Usuarios</h1>
<div class="container" id="font4">
</br>                    <form method="POST" action="<?php echo e(route('registrar_coordinador')); ?>">
                        <?php echo csrf_field(); ?>

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

                        <div class="form-group col-md-3">
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

                        <div class="form-group col-md-3">
                            <label for="fecha_nacimiento" ><?php echo e(__('* Fecha de nacimiento')); ?></label>
                                  <input id="fecha_nacimiento" type="date" class="form-control <?php if ($errors->has('fecha_nacimiento')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha_nacimiento'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="fecha_nacimiento" required>
                                <?php if ($errors->has('fecha_nacimiento')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('fecha_nacimiento'); ?>
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

                        <div class="form-group col-md-4">
                          <label for="genero">* Género</label>
                            <select name="genero" id="genero" required class="form-control">
                          <option value="">Seleccione una opción</option>
                          <option value="MASCULINO">MASCULINO</option>
                          <option value="FEMEMINO">FEMEMINO</option>
                    </select>
                        </div>

</div>

<hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">

<div class="form-row">
  <div class="form-group col-md-4">
      <label for="puesto" ><?php echo e(__('Puesto')); ?></label>
          <input id="puesto" type="text" class="form-control <?php if ($errors->has('puesto')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('puesto'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  name="puesto"  autocomplete="puesto" autofocus required>
          <?php if ($errors->has('puesto')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('puesto'); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
  </div>

  <div class="form-group col-md-4">
    <label for="grado_estudios">Departamento</label>
      <select name="departamento" id="departamento" required class="form-control">
      <option value="">Seleccione una opción</option>
      <?php $__currentLoopData = $de; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $des): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo $des->id_departamento; ?>"><?php echo $des->departamento; ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
        </div>

  <div class="form-group col-md-4">
    <label for="grado_estudios">Grado de Estudios</label>
      <select name="grado_estudios" id="grado_estudios" required class="form-control">
      <option value="">Seleccione una opción</option>
      <option value="licenciatura">LICENCIATURA</option>
      <option value="maestria">MAESTRÍA</option>
      <option value="doctorado">DOCTORADO</option>
      <option value="doctorado">OTRO</option>
          </select>
        </div>
</div>

<div class="form-row">
  <div class="form-group col-md-4">
    <label for="username" ><?php echo e(__('Nombre de Usuario')); ?></label>
        <input id="username" type="text"  class="form-control <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="username" value="<?php echo e(old('username')); ?>" required autocomplete="username" autofocus>
        <?php if ($errors->has('username')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('username'); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
</div>

<div class="form-group col-md-4">
    <label for="password" ><?php echo e(__('Contraseña')); ?></label>
        <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password">

        <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
            </span>
        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
</div>

<div class="form-group col-md-4">
    <label for="email" ><?php echo e(__('Correo Electrónico')); ?></label>
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

<?php echo $__env->make('layouts.plantilla_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\admin_sistema/registro_coordinador.blade.php ENDPATH**/ ?>