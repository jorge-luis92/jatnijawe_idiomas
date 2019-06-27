<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Datos Personales
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
  <h1 style="font-size: 2.0em; color: #000000;" align="center"> Datos Personales  </h1>
<div class="container" id="font4">
  <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</br>

<form method="POST" action="<?php echo e(route('act_datos_personales')); ?>">
  <?php echo csrf_field(); ?>
  <p style="font-size: 1.0em; color: #000000;"> Los Campos con un * son Obligatorios</p>
  <div class="form-row">
    <div class="form-group col-md-12">
      <h6 align="left">Dirección Actual</h6>
        </div>
    <div class="form-group col-md-4">
      <label for="vialidad_principal"  align="left">* Calle</label>
      <input type="text" class="form-control" name="vialidad_principal" value="<?php if(empty($d->vialidad_principal)){ $vacio=null; echo $vacio;} else{ echo $d->vialidad_principal;} ?>" id="vialidad_principal" placeholder="Calle" onKeyUp="this.value = this.value.toUpperCase();" required>
    </div>
    <div class="form-group col-md-2">
      <label for="num_exterior"  >* Número</label>
      <input type="tel"  class="form-control" name="num_exterior" value="<?php if(empty($d->num_exterior)){ $vacio=null; echo $vacio;} else{ echo $d->num_exterior;} ?>" id="num_exterior" placeholder="Número" onKeyUp="this.value = this.value.toUpperCase();" required>
    </div>
    <div class="form-group col-md-3">
      <label for="cp">* Código Postal</label>
      <input type="tel" onkeypress="return buscar();" class="form-control" name="cp" id="cp" value="<?php if(empty($d->cp)){ $vacio=null; echo $vacio;} else{ echo $d->cp;} ?>" maxlength="5"  onkeypress="return numeros (event)"  placeholder="Código Postal" onKeyUp="this.value = this.value.toUpperCase();" required>
    </div>
    <div class="form-group col-md-3">
      <label for="localidad" >*Colonia</label>
      <input type="text" class="form-control" name="localidad" value="<?php if(empty($d->localidad)){ $vacio=null; echo $vacio;} else{ echo $d->localidad;} ?>" id="localidad" placeholder="Colonia" onKeyUp="this.value = this.value.toUpperCase();" required >
    </div>

    <div class="form-group col-md-5">
      <label for="municipio">* Municipio</label>
      <input type="text" class="form-control" name="municipio" value="<?php if(empty($d->municipio)){ $vacio=null; echo $vacio;} else{ echo $d->municipio;} ?>"  id="municipio" placeholder="Municipio" onKeyUp="this.value = this.value.toUpperCase();" required>
    </div>
    <div class="form-group col-md-5">
      <label for="entidad_federativa">* Ciudad</label>
      <input type="text" class="form-control" name="entidad_federativa" value="<?php if(empty($d->entidad_federativa)){ $vacio=null; echo $vacio;} else{ echo $d->entidad_federativa;} ?>" id="entidad_federativa" placeholder="Ciudad" onKeyUp="this.value = this.value.toUpperCase();" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <h6 align="left"> Contacto</h6>
        </div>
    <div class="form-group col-md-4">
      <label for="tel_local">Teléfono de Casa</label>
        <input type="tel"  class="form-control <?php if ($errors->has('tel_local')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tel_local'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="tel_local" id="tel_local" value="<?php if(empty($nl->numero)){ $vacio=null; echo $vacio;} else{ echo $nl->numero;} ?>" maxlength=""  onkeypress="return numeros (event)"  placeholder="Formato a 7 digitos -- Ejemplo: 5115090"  pattern="([0-9]{7})">
          <?php if ($errors->has('tel_local')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tel_local'); ?>
          <span class="invalid-feedback" role="alert">
          <strong><?php echo e($message); ?></strong>
          </span>
          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>
    <div class="form-group col-md-4">
      <label for="tel_celular">* Teléfono Celular</label>
      <input type="tel"  class="form-control <?php if ($errors->has('tel_celular')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tel_celular'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="tel_celular" id="tel_celular" value="<?php if(empty($nc->numero)){ $vacio=null; echo $vacio;} else{ echo $nc->numero;} ?>" maxlength="10"  onkeypress="return numeros (event)"  placeholder="Formato a 10 digitos  -- Ejemplo: 9511234567"  pattern="([0-9]{3})([0-9]{7})" required>
        <?php if ($errors->has('tel_celular')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('tel_celular'); ?>
        <span class="invalid-feedback" role="alert">
        <strong><?php echo e($message); ?></strong>
        </span>
        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
    </div>
    <div class="form-group col-md-4">
      <label for="email">* Correo Electrónico</label>
      <input type="email" class="form-control" name="email" id="email" value="<?php echo e(Auth::user()->email); ?>" placeholder="Correo Electrónico" required>
    </div>
 </div>
 <div class="form-group">
  <br>
  <div class="col-xs-offset-2 col-xs-9" align="center">
      <input type="submit" class="btn btn-primary" name="agregar" value="Actualizar">
  </div>
</div>
</form>
</div>
</br>


  <?php $__env->stopSection(); ?>

  <script type="text/javascript">
      function buscar(){
          var opcion = document.getElementById('cp').value;
        //  window.location.href = 'http://localhost:8888/autofillform/index.php?opcion='+opcion;
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

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante\datos/datos_personales.blade.php ENDPATH**/ ?>