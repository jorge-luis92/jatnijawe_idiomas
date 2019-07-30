<?php $__env->startSection('title'); ?>
:Carrera
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center">Identificación de la Carrera</h1>
<div class="container" id="font7">
</br>                    <form method="POST" action="<?php echo e(route('agregar_carrera')); ?>">
                        <?php echo csrf_field(); ?>
                        <p style="font-size: 1.0em; color: #000000;"> Los Campos con un * son Obligatorios</p>
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <h6 align="left">Datos de la Escuela</h6>
                              </div>
                     </div>
   <div class="form-row">
     <div class="form-group col-md-4">
        <label for="clave_institucion" ><?php echo e(__('Clave de la Institución')); ?></label>
        <input id="clave_institucion" disabled type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('clave_institucion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('clave_institucion'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="clave_institucion" value="<?php if(empty($datos_escuela->clave_institucion)){ $vacio=null; echo $vacio;} else{ echo $datos_escuela->clave_institucion;} ?>"  required autocomplete="clave_institucion">
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

      <div class="form-group col-md-4">
        <label for="clave_escuela" ><?php echo e(__('Clave de la escuela ')); ?></label>
        <input id="clave_escuela" disabled type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('clave_escuela')) :
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

      <div class="form-group col-md-4">
         <label for="nombre_institucion" ><?php echo e(__('Nombre de la Escuela a la que pertenece')); ?></label>
         <input id="nombre_institucion" disabled type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('nombre_institucion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre_institucion'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nombre_institucion" value="<?php if(empty($datos_escuela->nombre_escuela)){ $vacio=null; echo $vacio;} else{ echo $datos_escuela->nombre_escuela;} ?>" required autocomplete="nombre_institucion">
                                 <?php if ($errors->has('nombre_institucion')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre_institucion'); ?>
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
      <h6 align="left">Datos de la Carrera</h6>
        </div>
</div>
<div class="form-row">
  <div class="form-group col-md-5">
    <label for="clave_carrera" ><?php echo e(__('*Clave de la Carrera ')); ?></label>
    <input id="clave_carrera" autofocus type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('clave_carrera')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('clave_carrera'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="clave_carrera" value="<?php echo e(old('clave_carrera')); ?>" required autocomplete="clave_carrera">
                                <?php if ($errors->has('clave_carrera')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('clave_carrera'); ?>
    <span class="invalid-feedback" role="alert">
    <strong><?php echo e($message); ?></strong>
    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
  </div>
    <div class="form-group col-md-7">
       <label for="facultad" ><?php echo e(__('Nombre de la Facultad')); ?></label>
       <input id="facultad" type="text" value="FACULTAD DE IDIOMAS" disabled onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('facultad')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('facultad'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="facultad" value="" required autocomplete="facultad">
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
    <div class="form-group col-md-8">
       <label for="carrera" ><?php echo e(__('*Nombre de la Carrera')); ?></label>
       <input id="carrera"  type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('carrera')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('carrera'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nombre_carrera" value=""   required autocomplete="carrera">
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
         <label for="modalidad">* Modalidad</label>
         <select name="modalidad" id="modalidad" required class="form-control">
         <option value="">Seleccione una opción</option>
         <option value="ESCOLARIZADO">ESCOLARIZADO</option>
         <option value="SEMIESCOLARIZADO">SEMIESCOLARIZADO</option>
         <option value="SEMIESCOLARIZADO">MIXTA</option>
         </select>
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

<?php echo $__env->make('layouts.plantilla_planeacion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\planeacion/gral_carrera.blade.php ENDPATH**/ ?>