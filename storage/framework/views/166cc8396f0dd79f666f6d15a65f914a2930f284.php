<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Datos Laborales
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
  <h1 style="font-size: 2.0em; color: #000000;" align="center"> Otras Actividades</h1>
<div class="container" id="font4">
</br>
<form  validate enctype="multipart/form-data" data-toggle="validator">
  <p style="font-size: 1.0em; color: #000000;"> Los Campos con un * son Obligatorios</p>
  <div class="form-row">
  <div class="radio col-md-12">
    <label >* ¿Realizas alguna actividad durante la semana?</label>

   <input type="radio" id="si_actividad" name="actividad" value="si_actividad" onclick="sitrabaja()" required  >
   <label for="si_actividad" >Si</label>

   <input type="radio" id="no_actividad" name="actividad" value="no_actividad" onclick="notrabaja()" required >
   <label for="no_actividad" >No</label>
   </div>
   <div class="form-group col-md-12">
     <h6 style="color: #000000;">Horario</h6>
       </div>
       <div class="form-group col-md-4">
         <label for="nombre_actividadexterna">Nombre Actividad</label>
         <input type="text"class="form-control" id="nombre_actividadexterna" disabled  required>
       </div>

       <div class="form-group col-md-4" >
         <label for="tipo_actividadexterna">* Tipo de Actividad</label>
           <select class="form-control" name="comunidad" id="tipo_actividadexterna" disabled required >
         <option value="">Seleccione una opción</option>
         <option value="1">LABORAL</option>
         <option value="2">ESCOLAR</option>
   </select>
       </div>
       <div class="form-group col-md-4">
         <label for="días">Días</label>
         <input type="checkbox"class="form-control" id="días" disabled  required>
       </div>
      <!-- <div class="form-group col-md-4">
         <label for="jornada">Días: </label>
           <select name="comunidad" required disabled class="form-control">
         <option value="">Seleccione una opción</option>
         <option value="5">LUNES A VIERNES</option>
         <option value="6">LUNES A SÁBADO</option>
         <option value="7">LUNES A DOMINGO</option>
         <option value="2">FINES DE SEMANA</option>
         <option value="3">ENTRE SEMANA</option>
   </select>
 </div>-->

    <div class="form-group col-md-2">
      <label for="tel_celular">Entrada</label>
      <input type="time"class="form-control" id="entrada" disabled  required>
    </div>
    <div class="form-group col-md-2">
      <label for="salida">Salida</label>
      <input type="time" class="form-control"  id="salida" disabled  required >
    </div>
    <div class="form-group col-md-4">
      <label for="lugar_trabajo">Nombre del lugar</label>
      <input type="text" class="form-control" placeholder="Nombre" id="lugar_trabajo" onKeyUp="this.value = this.value.toUpperCase();" disabled  required>
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

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante\datos/datos_laborales.blade.php ENDPATH**/ ?>