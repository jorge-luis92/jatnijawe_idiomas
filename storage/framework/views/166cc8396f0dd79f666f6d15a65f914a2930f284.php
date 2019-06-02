<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Datos Laborales
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
  <h1 style="font-size: 2.0em; color: #000000;" align="center"> Otras Actividades</h1>
<div class="container" id="font4">
  <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</br>
<form method="POST" action="<?php echo e(route('otras_actividades_actualizar')); ?>">
    <?php echo csrf_field(); ?>
  <p style="font-size: 1.0em; color: #000000;"> Los Campos con un * son Obligatorios</p>

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
         <div class="form-row">
       <div class="form-group col-md-4">
         <label for="nombre_actividadexterna">Nombre Actividad</label>
         <input type="text"class="form-control" onKeyUp="this.value = this.value.toUpperCase()" placeholder="Nombre" id="nombre_actividadexterna" disabled  required>
       </div>

       <div class="form-group col-md-4" >
         <label for="tipo_actividadexterna">* Tipo de Actividad</label>
           <select class="form-control" name="comunidad" id="tipo_actividadexterna" disabled required >
         <option value="">Seleccione una opción</option>
         <option value="Laboral">LABORAL</option>
         <option value="Escolar">ESCOLAR</option>
   </select>
       </div>

      <div class="form-group col-md-4">
         <label for="dias_sem">Días de la semana: </label>
            <input type="text"class="form-control" onKeyUp="this.value = this.value.toUpperCase()" placeholder="Ejemplo: Lunes a Viernes" id="dias_sem" disabled  required>
 </div>
</div>
<div class="form-row">
    <div class="form-group col-md-2">
      <label for="hora_entrada">Entrada</label>
      <input type="time"class="form-control" id="hora_entrada" disabled  required>
    </div>
    <div class="form-group col-md-2">
      <label for="hora_salida">Salida</label>
      <input type="time" class="form-control"  id="hora_salida" disabled  required >
    </div>
    <div class="form-group col-md-4">
      <label for="lugar">Nombre del lugar</label>
      <input type="text" class="form-control" onKeyUp="this.value = this.value.toUpperCase()" placeholder="Nombre" id="lugar" onKeyUp="this.value = this.value.toUpperCase();" disabled  required>
    </div>

    <div class="form-group col-md-4">
      <label for="lugar_trabajo">Actividades Registradas</label>
    </br>
         <a data-toggle="modal" href="#act_externas">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ver Actividades</a>
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

<div class="modal fade" tabindex="-1" role="dialog" id="act_externas" aria-labelledby="#act_externa " aria-hidden="true">
  <div class="modal-dialog modal-none">
    <div class="modal-content">
      <div class="container" id="font5">
        </br>
      <div class="table-responsive">
        <table class="table table-bordered table-info" style="color: #000000;" >
          <thead>
            <tr>
              <th scope="col">Nombre Actividad</th>
              <th scope="col">Tipo de Actividad</th>
              <th scope="col">Días de actividad</th>
              <th colspan="1" >ACCIONES</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $u; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo $us->nombre_actividadexterna; ?></td>
              <td><?php echo $us->tipo_actividadexterna; ?></td>
              <td><?php echo $us->dias_sem; ?></td>
              <td><a href="cambiar_estatus_beca/<?php echo e($us->id_externos); ?>">Quitar</a></td>
            </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div>
</div>
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