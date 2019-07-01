<?php $__env->startSection('title'); ?>
:Escuela
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center">Identificación de la Escuela</h1>
<div class="container" id="font4">
</br>                    <form method="POST" action="<?php echo e(route('gral_escuela')); ?>">
                        <?php echo csrf_field(); ?>

   <div class="form-row">

     <div class="form-group col-md-6">
        <label for="clave_institucion" ><?php echo e(__('Clave de la Institución')); ?></label>
        <input id="clave_institucion" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('clave_institucion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('clave_institucion'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="clave_institucion" value="<?php echo e(old('clave_institucion')); ?>" required autocomplete="clave_institucion">
                                <?php if ($errors->has('clave_institucion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('clave_institucion'); ?>
        <span class="invalid-feedback" role="alert">
                <strong><?php echo e($message); ?></strong>
        </span>
                              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
      </div>

  <div class="form-group col-md-6">
    <label for="clave_escuela" ><?php echo e(__('Clave de la escuela ')); ?></label>
    <input id="clave_escuela" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('clave_escuela')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('clave_escuela'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="clave_escuela" value="<?php echo e(old('clave_escuela')); ?>" required autocomplete="clave_escuela">
                                <?php if ($errors->has('clave_escuela')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('clave_escuela'); ?>
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
       <label for="nombre_escuela" ><?php echo e(__('Nombre de la escuela')); ?></label>
       <input id="nombre_escuela" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('nombre_escuela')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre_escuela'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nombre_escuela" value="<?php echo e(old('nombre_escuela')); ?>" required autocomplete="nombre_escuela">
                               <?php if ($errors->has('nombre_escuela')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre_escuela'); ?>
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
    <label for="vialidad_principal" ><?php echo e(__('Vialidad Principal')); ?></label>
    <input id="vialidad_principal"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('vialidad_principal')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vialidad_principal'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="vialidad_principal" value="<?php echo e(old('vialidad_principal')); ?>" required autocomplete="vialidad_principal">
                  <?php if ($errors->has('vialidad_principal')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vialidad_principal'); ?>
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
      <label for="num_exterior" ><?php echo e(__('Número Exterior')); ?></label>
      <input id="num_exterior" type="tel" maxlength="6" class="form-control <?php if ($errors->has('num_exterior')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('num_exterior'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" onkeypress="return numeros (event)" name="num_exterior" autocomplete="num_exterior" required autofocus>
                                <?php if ($errors->has('num_exterior')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('num_exterior'); ?>
      <span class="invalid-feedback" role="alert">
      <strong><?php echo e($message); ?></strong>
    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
      </div>

      <div class="form-group col-md-6">
      <label for="num_interior" ><?php echo e(__('Número Interior ')); ?></label>
      <input id="num_interior"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('num_interior')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('num_interior'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="num_interior" value="<?php echo e(old('num_interior')); ?>" required autocomplete="num_interior">
                    <?php if ($errors->has('num_interior')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('num_interior'); ?>
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
       <label for="vialidad_derecha" ><?php echo e(__('Vialidad Derecha')); ?></label>
       <input id="vialidad_derecha"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('vialidad_derecha')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vialidad_derecha'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="vialidad_derecha" value="<?php echo e(old('vialidad_derecha')); ?>" required autocomplete="vialidad_derecha">
                     <?php if ($errors->has('vialidad_derecha')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vialidad_derecha'); ?>
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
  <label for="vialidad_izquierda" ><?php echo e(__('Vialidad Izquierda')); ?></label>
  <input id="vialidad_izquierda"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('vialidad_izquierda')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vialidad_izquierda'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="vialidad_izquierda" value="<?php echo e(old('vialidad_izquierda')); ?>" required autocomplete="vialidad_izquierda">
                <?php if ($errors->has('vialidad_izquierda')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vialidad_izquierda'); ?>
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
  <label for="vialidad_posterior" ><?php echo e(__('Vialidad Posterior')); ?></label>
  <input id="vialidad_posterior"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('vialidad_posterior')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vialidad_posterior'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="vialidad_posterior" value="<?php echo e(old('vialidad_posterior')); ?>" required autocomplete="vialidad_posterior">
                <?php if ($errors->has('vialidad_posterior')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vialidad_posterior'); ?>
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
  <label for="asentamiento_humano" ><?php echo e(__('Asentamiento Humano')); ?></label>
  <input id="asentamiento_humano"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('asentamiento_humano')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('asentamiento_humano'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="asentamiento_humano" value="<?php echo e(old('asentamiento_humano')); ?>" required autocomplete="asentamiento_humano">
                <?php if ($errors->has('asentamiento_humano')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('asentamiento_humano'); ?>
 <span class="invalid-feedback" role="alert">
 <strong><?php echo e($message); ?></strong>
</span>
                              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
</div>

<div class="form-group col-md-4">
    <label for="cp" ><?php echo e(__('Código Postal')); ?></label>
        <input id="cp" maxlength="12" type="tel" class="form-control <?php if ($errors->has('cp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cp'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" onkeypress="return numeros (event)" name="cp"  autocomplete="cp" autofocus required>
        <?php if ($errors->has('cp')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cp'); ?>
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
  <label for="localidad" ><?php echo e(__('Localidad')); ?></label>
  <input id="localidad"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('localidad')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('localidad'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="localidad" value="<?php echo e(old('localidad')); ?>" required autocomplete="localidad">
                <?php if ($errors->has('localidad')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('localidad'); ?>
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
  <label for="municipio" ><?php echo e(__('Municipio o Delegación')); ?></label>
  <input id="municipio"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('municipio')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('municipio'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="municipio" value="<?php echo e(old('municipio')); ?>" required autocomplete="municipio">
                <?php if ($errors->has('municipio')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('municipio'); ?>
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
  <label for="entidad_federativa" ><?php echo e(__('Entidad Federativa')); ?></label>
  <input id="entidad_federativa"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('entidad_federativa')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('entidad_federativa'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="entidad_federativa" value="<?php echo e(old('entidad_federativa')); ?>" required autocomplete="entidad_federativa">
                <?php if ($errors->has('entidad_federativa')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('entidad_federativa'); ?>
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
      <label for="telefono" ><?php echo e(__('Teléfono')); ?></label>
          <input id="telefono" maxlength="10" type="tel" class="form-control <?php if ($errors->has('telefono')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('telefono'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" onkeypress="return numeros (event)" name="telefono"  autocomplete="telefono" autofocus required>
          <?php if ($errors->has('telefono')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('telefono'); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
  </div>
  <div class="form-group col-md-2">
      <label for="extension" ><?php echo e(__('Extensión')); ?></label>
          <input id="extension" maxlength="5" type="tel" class="form-control <?php if ($errors->has('extension')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('extension'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" onkeypress="return numeros (event)" name="extension"  autocomplete="extension" autofocus required>
          <?php if ($errors->has('extension')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('extension'); ?>
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
  <label for="dependencia_normativa" ><?php echo e(__('Dependencia Normativa')); ?></label>
  <input id="dependencia_normativa"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('dependencia_normativa')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('dependencia_normativa'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="dependencia_normativa" value="<?php echo e(old('dependencia_normativa')); ?>" required autocomplete="dependencia_normativa">
                <?php if ($errors->has('dependencia_normativa')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('dependencia_normativa'); ?>
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
  <label for="institucion_perteneciente" ><?php echo e(__('Nombre de la Institución a la que pertenece')); ?></label>
  <input id="institucion_perteneciente"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('institucion_perteneciente')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('institucion_perteneciente'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="institucion_perteneciente" value="<?php echo e(old('institucion_perteneciente')); ?>" required autocomplete="institucion_perteneciente">
                <?php if ($errors->has('institucion_perteneciente')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('institucion_perteneciente'); ?>
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
  <label for="director" ><?php echo e(__('Nombre del Director de la Escuela')); ?></label>
  <input id="director"  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('director')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('director'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="director" value="<?php echo e(old('director')); ?>" required autocomplete="director">
                <?php if ($errors->has('director')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('director'); ?>
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
      <label for="pagina_web" ><?php echo e(__('Página Web de la Escuela')); ?></label>
          <input id="pagina_web" type="email" class="form-control <?php if ($errors->has('pagina_web')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pagina_web'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="pagina_web" value="<?php echo e(old('pagina_web')); ?>" required autocomplete="pagina_web">
          <?php if ($errors->has('pagina_web')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pagina_web'); ?>
              <span class="invalid-feedback" role="alert">
                  <strong><?php echo e($message); ?></strong>
              </span>
          <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
  </div>
                        <div class="form-group col-md-6">
                            <label for="email" ><?php echo e(__('Correo eléctronico del responsable ')); ?></label>
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

<?php echo $__env->make('layouts.plantilla_planeacion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\planeacion/gral_escuela.blade.php ENDPATH**/ ?>