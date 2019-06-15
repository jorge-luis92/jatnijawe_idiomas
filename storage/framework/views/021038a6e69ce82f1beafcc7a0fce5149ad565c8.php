<link rel="shortcut icon" href="<?php echo e(asset('/logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Carga de Datos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
</br>
<div class="container" id="font2">
  <div class="col-md-12">
      <div class="box box-primary">
                      <div class="box-header">
                        <h3 class="box-title">Carga de Datos para Cuenta de Usuario(Estudiantes)</h3>
                      </div><!-- /.box-header -->



                    <form method="post"  action="cargar_datos_usuarios"  enctype="multipart/form-data" >
                     <?php echo e(csrf_field()); ?>


       <input type="hidden" name="_token" id="_token"  value="<?= csrf_token(); ?>">

      <div class="box-body">



      <div class="form-group col-xs-12"  >
             <label>Agregar Archivo de Excel </label>
              <input name="excel" id="excel" type="file" accept=".xlsx, .xls, .csv"   class="archivo form-control" /><br /><br />
      </div>


      <div class="box-footer">
                          <button type="submit" class="btn btn-primary">Cargar Datos</button>
      </div>




      </div>

      </form>

      </div>

  </div>
</div>


  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_auxadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\auxiliar_administrativo/carga_de_datos.blade.php ENDPATH**/ ?>