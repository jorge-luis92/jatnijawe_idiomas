<link rel="shortcut icon" href="<?php echo e(asset('/logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Carga de Datos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
<div class="loader"></div>
<div class="container" align="center" id="font7" >
      <div class="form">
        <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
      <div id="content" class="col-lg-12">

      </div>
  </div>
                        <form class="form-horizontal" method="POST" action="<?php echo e(route('cargar_datos_usuarios')); ?>" validate enctype="multipart/form-data" data-toggle="validator">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group col-md-8" id="labels">
                              <label  for="archivo">Agregar Archivo de Excel </label>
                              <input name="archivo" id="archivo" type="file" accept=".xlsx, .xls, .csv"  class="form-control <?php if ($errors->has('archivo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('archivo'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" /><br /><br />
                              <?php if ($errors->has('archivo')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('archivo'); ?>
                            <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            <br />
                            <div class="form-group" align="center">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Cargar Datos
                                    </button>
                                </div>
                            </div>
                        </form>
      </div>
  </div>

  <script type="text/javascript">
  $(window).load(function() {
      $(".loader").fadeOut("slow");
  });
  </script>

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_auxadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\auxiliar_administrativo/carga_de_datos.blade.php ENDPATH**/ ?>