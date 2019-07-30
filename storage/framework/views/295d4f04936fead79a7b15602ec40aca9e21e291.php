<?php $__env->startSection('title'); ?>
:Escuela
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center">Identificación de la Escuela</h1>
<div class="container" id="font7">
    <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</br>                    <form method="POST" action="<?php echo e(route('agregar_escuela')); ?>">
                        <?php echo csrf_field(); ?>
       <label align="left" ><strong><?php echo e(__('Información de la Escuela ')); ?></strong> </label>
   <div class="form-row">

     <div class="form-group col-md-6">
        <label for="clave_institucion" ><?php echo e(__('Clave de la Institución')); ?></label>
        <input id="clave_institucion" type="text" disabled onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('clave_institucion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('clave_institucion'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="clave_institucion" value="<?php if(empty($datos_escuela->clave_institucion)){ $vacio=null; echo $vacio;} else{ echo $datos_escuela->clave_institucion;} ?>" autofocus required autocomplete="clave_institucion">
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
    <input id="clave_escuela" type="text"  disabled onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('clave_escuela')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('clave_escuela'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="clave_escuela" value="<?php if(empty($datos_escuela->clave_escuela)){ $vacio=null; echo $vacio;} else{ echo $datos_escuela->clave_escuela;} ?>" required autocomplete="clave_escuela">
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

    <div class="form-group col-md-6">
       <label for="nombre_escuela" ><?php echo e(__('Nombre de la escuela')); ?></label>
       <input id="nombre_escuela" type="text" disabled required onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('nombre_escuela')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre_escuela'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nombre_escuela" value="<?php if(empty($datos_escuela->nombre_escuela)){ $vacio=null; echo $vacio;} else{ echo $datos_escuela->nombre_escuela;} ?>" required autocomplete="nombre_escuela">
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

     <div class="form-group col-md-6">
     <label for="institucion_pertenciente" >Nombre de la Institución a la que pertenece</label>
     <input id="institucion_pertenciente" disabled onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('institucion_pertenciente')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('institucion_pertenciente'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php if(empty($datos_escuela->institucion_pertenciente)){ $vacio=null; echo $vacio;} else{ echo $datos_escuela->institucion_pertenciente;} ?>" name="institucion_pertenciente"  required >
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="dependencia_normativa" ><?php echo e(__('Dependencia Normativa')); ?></label>
    <input id="dependencia_normativa" disabled  onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('dependencia_normativa')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('dependencia_normativa'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php if(empty($datos_escuela->dependencia_normativa)){ $vacio=null; echo $vacio;} else{ echo $datos_escuela->dependencia_normativa;} ?>" name="dependencia_normativa"  required >
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

  <div class="form-group col-md-6">
      <label for="pagina_web" ><?php echo e(__('Página Web de la Escuela')); ?></label>
          <input id="pagina_web" disabled value="<?php if(empty($datos_escuela->pagina_web_escuela)){ $vacio=null; echo $vacio;} else{ echo $datos_escuela->pagina_web_escuela;} ?>" type="url" class="form-control <?php if ($errors->has('pagina_web')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('pagina_web'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="pagina_web"  >
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
  </div>
  <label align="left" ><strong><?php echo e(__('Dirección de la escuela ')); ?></strong> </label>
    <div class="form-row">
    <div class="form-group col-md-8">
    <label for="vialidad_principal" ><?php echo e(__('Vialidad Principal')); ?></label>
    <input id="vialidad_principal" disabled onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('vialidad_principal')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vialidad_principal'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="vialidad_principal" value="<?php if(empty($direccion_d->vialidad_principal)){ $vacio=null; echo $vacio;} else{ echo $direccion_d->vialidad_principal;} ?>" >
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
  <div class="form-group col-md-2">
  <label for="num_exterior" ><?php echo e(__('Número Exterior')); ?></label>
  <input id="num_exterior" disabled onKeyUp="this.value = this.value.toUpperCase()" type="text" maxlength="6" class="form-control <?php if ($errors->has('num_exterior')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('num_exterior'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"   value="<?php if(empty($direccion_d->num_exterior)){ $vacio=null; echo $vacio;} else{ echo $direccion_d->num_exterior;} ?>"  name="num_exterior"  required>
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

  <div class="form-group col-md-2">
  <label for="num_interior" ><?php echo e(__('Número Interior ')); ?></label>
  <input id="num_interior" disabled onKeyUp="this.value = this.value.toUpperCase()" type="text" maxlength="6" class="form-control <?php if ($errors->has('num_interior')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('num_interior'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"  value="<?php if(empty($direccion_d->num_interior)){ $vacio=null; echo $vacio;} else{ echo $direccion_d->num_interior;} ?>" name="num_interior"  autocomplete="num_interior">
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
       <div class="form-group col-md-4">
       <label for="vialidad_derecha" ><?php echo e(__('Vialidad Derecha')); ?></label>
       <input id="vialidad_derecha" disabled onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('vialidad_derecha')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vialidad_derecha'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="vialidad_derecha"  value="<?php if(empty($direccion_d->vialidad_derecha)){ $vacio=null; echo $vacio;} else{ echo $direccion_d->vialidad_derecha;} ?>" required autocomplete="vialidad_derecha">
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

     <div class="form-group col-md-4">
     <label for="vialidad_izquierda" ><?php echo e(__('Vialidad Izquierda')); ?></label>
     <input id="vialidad_izquierda"  disabled onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('vialidad_izquierda')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vialidad_izquierda'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="vialidad_izquierda"  value="<?php if(empty($direccion_d->vialidad_izquierda)){ $vacio=null; echo $vacio;} else{ echo $direccion_d->vialidad_izquierda;} ?>" required autocomplete="vialidad_posterior">
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

   <div class="form-group col-md-4">
   <label for="vialidad_psterior" ><?php echo e(__('Vialidad Posterior')); ?></label>
   <input id="vialidad_psterior"  disabled onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('vialidad_psterior')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vialidad_psterior'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="vialidad_psterior"  value="<?php if(empty($direccion_d->vialidad_psterior)){ $vacio=null; echo $vacio;} else{ echo $direccion_d->vialidad_psterior;} ?>" required autocomplete="vialidad_posterior">
                 <?php if ($errors->has('vialidad_psterior')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vialidad_psterior'); ?>
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
  <label for="asentamiento_humano" ><?php echo e(__('Asentamiento Humano')); ?></label>
  <input id="asentamiento_humano" disabled onKeyUp="this.value = this.value.toUpperCase()" type="text" class="form-control <?php if ($errors->has('asentamiento_humano')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('asentamiento_humano'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="asentamiento_humano"  value="<?php if(empty($direccion_d->asentamiento_humano)){ $vacio=null; echo $vacio;} else{ echo $direccion_d->asentamiento_humano;} ?>"  required >
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

<!--<div class="form-group col-md-4">
    <label for="cp" ><?php echo e(__('*Código Postal')); ?></label>
        <input id="cp" maxlength="5" type="tel"  value="" class="form-control <?php if ($errors->has('cp')) :
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
</div>-->

<div class="form-group col-md-4">
    <label for="cp">Código Postal</label>
    <input type="tel" class="form-control" disabled name="cp" id="cp"  value="<?php if(empty($direccion_d->cp)){ $vacio='68120'; echo $vacio;} else{ echo $direccion_d->cp;} ?>"  maxlength="5"  onkeypress="return numeros (event)"  placeholder="Código Postal" onKeyUp="this.value = this.value.toUpperCase();" required>
  </div>

<div class="form-group col-md-4">
<label for="localidad" ><?php echo e(__('Localidad')); ?></label>
<input id="localidad"  disabled onKeyUp="this.value = this.value.toUpperCase()"  value="<?php if(empty($direccion_d->localidad)){ $vacio='null'; echo $vacio;} else{ echo $direccion_d->localidad;} ?>" type="text" class="form-control <?php if ($errors->has('localidad')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('localidad'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="localidad" >
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
  <div class="form-group col-md-4">
  <label for="municipio" ><?php echo e(__('Municipio o Delegación')); ?></label>
  <input id="municipio" disabled onKeyUp="this.value = this.value.toUpperCase()"  value="<?php if(empty($codego->municipio)){ $vacio=null; echo $vacio;} else{ echo $codego->municipio;} ?>" type="text" class="form-control <?php if ($errors->has('municipio')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('municipio'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="municipio"  required autocomplete="municipio">
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

  <div class="form-group col-md-4">
  <label for="entidad_federativa" ><?php echo e(__('Entidad Federativa')); ?></label>
  <input id="entidad_federativa" disabled onKeyUp="this.value = this.value.toUpperCase()"  value="<?php if(empty($codego->estado)){ $vacio=null; echo $vacio;} else{ echo $codego->estado;} ?>" type="text" class="form-control <?php if ($errors->has('entidad_federativa')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('entidad_federativa'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="entidad_federativa" required autocomplete="entidad_federativa">
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


<!--<div class="form-row">
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
</div>-->

<label align="left" ><strong><?php echo e(__('Información del Director de la Escuela ')); ?></strong> </label>
<div class="form-row">
<div class="form-group col-md-4">
   <label for="nombre" ><?php echo e(__('* Nombre(s)')); ?></label>
       <input id="nombre" type="text"  name='nombre' onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('nombre_titular')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre_titular'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"   value="<?php if(empty($datos_director->nombre)){ $vacio=null; echo $vacio;} else{ echo $datos_director->nombre;} ?>"  required autocomplete="nombre_titular">
       <?php if ($errors->has('nombre_titular')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre_titular'); ?>
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
endif; ?>" name="apellido_paterno" value="<?php if(empty($datos_director->apellido_paterno)){ $vacio=null; echo $vacio;} else{ echo $datos_director->apellido_paterno;} ?>" required autocomplete="apellido_paterno">
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
endif; ?>" name="apellido_materno" value="<?php if(empty($datos_director->apellido_materno)){ $vacio=null; echo $vacio;} else{ echo $datos_director->apellido_materno;} ?>" autocomplete="apellido_materno">
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
<!--
<div class="form-row">


                        <div class="form-group col-md-6">
                            <label for="email" ><?php echo e(__('*Correo eléctronico del responsable ')); ?></label>
                                <input id="email" type="email" value="<?php echo e(Auth::user()->email); ?>" disabled class="form-control" name="email">

                        </div>
  </div>
-->
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