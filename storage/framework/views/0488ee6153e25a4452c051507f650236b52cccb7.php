<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Registro Actividad
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Actividades Extracurriculares</h1>
<div class="container" id="font4">
</br>
                           <div class="form-row">
                           <div class="form-group col-md-4">
                           </div>
                             </div>
                            </div>

<div class="modal fade" tabindex="-1" role="dialog" id="lenguas_detalle" aria-labelledby="#lenguas_detalles " aria-hidden="true">
  <div class="modal-dialog modal-none">
    <div class="modal-content">
      <div class="container" id="font5">
        </br>
      <div class="table-responsive">
        <table class="table table-bordered table-info" style="color: #000000;" >
          <thead>
            <tr>
              <th scope="col">Nombre Lengua</th>
              <th scope="col">Tipo de Lengua</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>Japonés</td>
              <td>Extranjera</td>
            </tr>

          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div>
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

<?php echo $__env->make('layouts.plantilla_formacion_integral', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\formacion_integral\gestion_talleres/registro_extracurricular.blade.php ENDPATH**/ ?>