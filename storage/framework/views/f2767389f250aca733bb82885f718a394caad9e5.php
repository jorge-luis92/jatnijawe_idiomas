<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Datos Laborales
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
  <h1 style="font-size: 2.0em; color: #000000;" align="center"> Datos Laborales</h1>
<div class="container" id="font4">
</br>
<form  validate enctype="multipart/form-data" data-toggle="validator">
  <p style="font-size: 1.0em; color: #000000;"> Los Campos con un * son Obligatorios</p>
  <div class="form-row">
  <div class="radio col-md-12">
    <label >* ¿Tienes alguna actividad laboral durante la semana?</label>

   <input type="radio" id="si_actividad" name="actividad" value="si_actividad" onclick="sitrabaja()" required  >
   <label for="si_actividad" >Si</label>

   <input type="radio" id="no_actividad" name="actividad" value="no_actividad" onclick="notrabaja()" required >
   <label for="no_actividad" >No</label>
   </div>
   <div class="form-group col-md-12">
     <h6 style="color: #000000;">Horario</h6>
       </div>
    <div class="form-group col-md-2">
      <label for="tel_celular">Entrada</label>
      <input type="time"class="form-control" id="entrada" disabled  required>
    </div>
    <div class="form-group col-md-2">
      <label for="salida">Salida</label>
      <input type="time" class="form-control"  id="salida" disabled  required >
    </div>
    <div class="form-group col-md-5">
      <label for="lugar_trabajo">Lugar de Trabajo</label>
      <input type="text" class="form-control" placeholder="Nombre" id="lugar_trabajo" onKeyUp="this.value = this.value.toUpperCase();" disabled  required>
    </div>
    <div class="form-group col-md-2">
      <label for="puesto">Puesto</label>
      <input type="text" class="form-control"  id="puesto" placeholder="Puesto" onKeyUp="this.value = this.value.toUpperCase();" disabled  required >
    </div>
    <div class="form-group col-md-5">
      <label for="jornada">Jornada Laboral</label>
        <select name="comunidad" required disabled class="form-control">
      <option value="">Seleccione una opción</option>
      <option value="1">LUNES A VIERNES</option>
      <option value="2">FINES DE SEMANA</option>
      <option value="3">ENTRE SEMANA</option>
      <option value="4">LUNES A DOMINGO</option>
</select>

    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <h6>Dirección Trabajo</h6>
        </div>
        <div class="form-group col-md-5">
          <label for="calle_trabajo">Calle</label>
          <input type="text" class="form-control" id="calle_trabajo" placeholder="Calle" onKeyUp="this.value = this.value.toUpperCase();" disabled  required>
        </div>
        <div class="form-group col-md-2">
          <label for="numero_trabajo">Número</label>
          <input type="text"  class="form-control" id="numero_trabajo" placeholder="Número" onKeyUp="this.value = this.value.toUpperCase();" disabled  required>
        </div>
        <div class="form-group col-md-5">
          <label for="colonia_trabajo">Colonia</label>
          <input type="text" class="form-control" id="colonia_trabajo" placeholder="Colonia" onKeyUp="this.value = this.value.toUpperCase();" disabled  required>
        </div>
        <div class="form-group col-md-2">
          <label for="codigo_postal_trabajo">Código Postal</label>
          <input type="text" class="form-control" id="codigo_postal_trabajo" placeholder="Código Postal" disabled  required>
        </div>
        <div class="form-group col-md-4">
          <label for="ciudad_trabajo">Ciudad</label>
          <input type="text" class="form-control" id="ciudad" placeholder="Ciudad" disabled  onKeyUp="this.value = this.value.toUpperCase();" required>
          </div>
          <div class="form-group col-md-5">
            <label for="tel_trabajo">Teléfono Celular</label>
            <input type="tel" class="form-control" id="tel_trabajo" maxlength="10"  onkeypress="return numeros (event)"  placeholder="Formato a 10 digitos  -- Ejemplo: 9511234567"  pattern="([0-9]{3})([0-9]{7})" disabled required>
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
    function sitrabaja(){
        $(".form-control").removeAttr("disabled");
    }

    function notrabaja(){
        $(".form-control").attr("disabled","disabled");
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

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\jatnijawe\resources\views/estudiante\datos/datos_laborales.blade.php ENDPATH**/ ?>