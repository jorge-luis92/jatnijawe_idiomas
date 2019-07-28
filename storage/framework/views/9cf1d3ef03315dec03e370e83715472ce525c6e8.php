<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Períodos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
 <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Registro de Períodos - Semestre</h1>
<div class="container" id="font5">
</br>                    <form method="POST" action="<?php echo e(route('nuevo_periodo_agregar')); ?>">
                        <?php echo csrf_field(); ?>


    <div class="form-row">

  <div class="form-group col-md-6">
    <label for="inicio" ><?php echo e(__('* Fecha de inicio')); ?></label>
    <input id="inicio" type="date" name="inicio" min="<?php echo date("Y-m-d");?>" onblur="ba();"  class="form-control"  required>
    </div>

    <div class="form-group col-md-6">
      <label for="final" ><?php echo e(__('* Fecha Final')); ?></label>
      <input id="final" type="date" name="final" min= "<?php echo date("Y-m-d");?>"  class="form-control" name="final" required>
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

                    <hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">
                  </br>
                    <h3 style="font-size: 1.0em; color: #0A122A; max-width: 280px;" align="left"><strong>Periodos Registrados</strong></h3>
                                          <div class="table-responsive" style="border:1px solid #819FF7;">
                          <table class="table table-bordered table-striped" style="color: #000000; font-size: 13px;"  >
                        <thead>
                          <tr>
                            <th scope="col">Inicio Periodo</th>
                            <th scope="col">Final de Periodo</th>
                            <th scope="col">Tipo de Periodo</th>
                            <th scope="col">Fecha de Creación</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $guardados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p_guar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr style="color: #000000;">

                              <td><?php echo e(date('d-m-Y', strtotime($p_guar->inicio))); ?></td>
                              <td><?php echo e(date('d-m-Y', strtotime($p_guar->final))); ?></td>
                              <td><?php echo e($p_guar->estatus); ?></td>
                              <td><?php echo e(date('d-m-Y', strtotime($p_guar->created_at))); ?></td>
                              </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </tbody>
                         </table>
                       </br>
                         </div>
                         <?php if(count($guardados)): ?>
                         <?php echo e($guardados->links()); ?>

                         <?php endif; ?>
                </div>
<input id="ss" type="text">

<?php $__env->stopSection(); ?>
<script>
function ba(){
  var ed = document.getElementById('inicio').value; //fecha de nacimiento en el formulario
  var fechaNacimiento = ed.split("-");
  var mes = fechaNacimiento[1];
  document.getElementById('ss').value = mes;
}
</script>

<?php echo $__env->make('layouts.plantilla_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\admin_sistema/nuevo_periodo.blade.php ENDPATH**/ ?>