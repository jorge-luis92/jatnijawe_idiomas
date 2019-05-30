<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Datos Personales
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
  <h1 style="font-size: 2.0em; color: #000000;" align="center"> Datos Personales  </h1>
<div class="container" id="font4">
</br>
<form  validate enctype="multipart/form-data" data-toggle="validator">
  <p style="font-size: 1.0em; color: #000000;"> Los Campos con un * son Obligatorios</p>
  <div class="form-row">
    <div class="form-group col-md-12">
      <h6 align="left">Dirección Actual</h6>
        </div>
    <div class="form-group col-md-5">
      <label for="calle"  align="left">* Calle</label>
      <input type="text" class="form-control" id="calle" placeholder="Calle" onKeyUp="this.value = this.value.toUpperCase();" required>
    </div>
    <div class="form-group col-md-2">
      <label for="numero"  >* Número</label>
      <input type="text"  class="form-control" id="numero" placeholder="Número" onKeyUp="this.value = this.value.toUpperCase();" required>
    </div>
    <div class="form-group col-md-5">
      <label for="colonia" >*Colonia</label>
      <input type="text" class="form-control" id="barrio" placeholder="Colonia" onKeyUp="this.value = this.value.toUpperCase();" required >
    </div>
    <div class="form-group col-md-3">
      <label for="codigo_postal">* Código Postal</label>
      <input type="text" class="form-control" id="codigo_postal" placeholder="Código Postal" onKeyUp="this.value = this.value.toUpperCase();" required>
    </div>
    <div class="form-group col-md-5">
      <label for="ciudad">* Ciudad</label>
      <input type="text" class="form-control" id="ciudad" placeholder="Ciudad" onKeyUp="this.value = this.value.toUpperCase();" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <h6 align="left">* Contacto</h6>
        </div>
    <div class="form-group col-md-4">
      <label for="tel_local">Teléfono Local</label>
        <input type="tel"  class="form-control" id="tel_local" maxlength="10"  onkeypress="return numeros (event)"  placeholder="Formato a 10 digitos -- Ejemplo: 9515115090"  pattern="([0-9]{3})([0-9]{7})">
    </div>
    <div class="form-group col-md-4">
      <label for="tel_celular">* Teléfono Celular</label>
      <input type="tel"  class="form-control" id="tel_celular" maxlength="10"  onkeypress="return numeros (event)"  placeholder="Formato a 10 digitos  -- Ejemplo: 9511234567"  pattern="([0-9]{3})([0-9]{7})" required>
    </div>
    <div class="form-group col-md-4">
      <label for="email">* Correo Electrónico</label>
      <input type="email" class="form-control"  id="email" value="<?php echo e(Auth::user()->email); ?>" placeholder="Correo Electrónico" required>
    </div>
 </div>
 <div class="form-group">
  <br>
  <div class="col-xs-offset-2 col-xs-9" align="center">
      <input type="submit" class="btn btn-primary" name="agregar" value="Actualizar">
     <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
  </div>
</div>
</form>
</div>
</br>

  <?php $__env->stopSection(); ?>

<script language="JavaScript">
    function habilita(){
        $(".inputText").removeAttr("disabled");
    }

    function deshabilita(){
        $(".inputText").attr("disabled","disabled");
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