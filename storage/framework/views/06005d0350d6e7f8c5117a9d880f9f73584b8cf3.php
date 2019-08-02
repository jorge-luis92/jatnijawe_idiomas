<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Fechas de Actualización
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Fechas de Actualización(Estudiante)</h1>
<div class="container" id="font7">
</br>                    <form method="POST" action="<?php echo e(route('agregar_fecha_actualizacion')); ?>">
                        <?php echo csrf_field(); ?>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="fecha_inicio" ><?php echo e(__('* Fecha de inicio')); ?></label>
    <input id="fecha_inicio" type="date"  oninput="vamo()" name="fecha_inicio"  min= "<?php echo date("Y-m-d");?>"  max="" value="<?php if(empty($fechas->fecha_inicio)){ $vacio=null; echo $vacio;} else{ echo $fechas->fecha_inicio;} ?>" onblur="ba();"  class="form-control"  required>
    </div>
    <div class="form-group col-md-6">
      <label for="fecha_fin" ><?php echo e(__('* Fecha Final')); ?></label>
      <input id="fecha_fin" type="date" onchange="vamo()"  name="fecha_fin"  min="<?php echo date("Y-m-d");?>"  max="" value="<?php if(empty($fechas->fecha_fin)){ $vacio=null; echo $vacio;} else{ echo $fechas->fecha_fin;} ?>"class="form-control"  required>
            </div>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="hora_inicio" ><?php echo e(__('* Hora de inicio')); ?></label>
              <input id="hora_inicio" type="time"  oninput="vamos()" name="hora_inicio"  min= "07:00" max="20:00" value="" class="form-control"  required>
              </div>
              <div class="form-group col-md-6">
                <label for="hora_fin" ><?php echo e(__('* Hora Final')); ?></label>
                <input id="hora_fin" type="time" onchange="vamos()"  name="hora_fin"  min="" max="20:00"  value="" class="form-control"  required>
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
                    <input  type="text"  id ="otro" value="<?php echo e($ss); ?> <?php echo date("Y-m-d");?>" class="form-control"  >
</div>

<?php $__env->stopSection(); ?>

<script>
function vamo(){
    var ed = document.getElementById('fecha_inicio').value; //fecha de nacimiento en el formulario
    var fecha_inicio = ed.split("-");
    var anio = fecha_inicio[0];
    var mes = fecha_inicio[1];
    var dia = fecha_inicio[2];
  var mm = parseInt(mes);
  var anios= parseInt(anio);
var j=anio;
var hey;
if((mes >= 1) || (mes <12)){
  mm=1+mm;
if((mm > 1) || (mm < 10)){
hey =mm;
document.getElementById("fecha_fin").min = anio+'-'+'0'+hey+'-'+dia;
//document.getElementById("fecha_fin").max = j+'-'+'0'+vale+'-'+dia;
document.getElementById("otro").value = anio+'-'+mes+'-'+dia + '  fecha: mes: '+hey +' : '+j;
}
}

}

function vamos(){
    var ed = document.getElementById('hora_inicio').value; //fecha de nacimiento en el formulario
    var hours = ed.split(":")[0];
   var minutes = ed.split(":")[1];
   var nueva_hora= parseInt(hours);

    document.getElementById("hora_fin").min = hours + ":" + minutes;
    document.getElementById("otro").value = nueva_hora + ":" + minutes;
}
</script>

<?php echo $__env->make('layouts.plantilla_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\admin_sistema/fecha_actualizacion.blade.php ENDPATH**/ ?>