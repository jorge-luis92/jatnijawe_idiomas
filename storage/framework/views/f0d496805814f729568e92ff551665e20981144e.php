<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Mis Grupos
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center"> Estudiantes cursando Taller actualmente</h1>
<div class="container" id="font4">
</br>  <form  method="post" action="<?php echo e(route('grupo_tallerista')); ?>">
                        <?php echo csrf_field(); ?>
<div class="form-row">

    <div class="form-group col-md-4">
    </div>
          <div class="form-group col-md-4">
              <label for="nombre" ><?php echo e(__('')); ?></label>
              <input id="nombre" type="text"  onKeyUp="this.value = this.value.toUpperCase()" class="form-control <?php if ($errors->has('nombre')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nombre" value="<?php echo e(old('nombre')); ?>" required autocomplete="nombre">
              <?php if ($errors->has('nombre')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nombre'); ?>
              <span class="invalid-feedback" role="alert">
              <strong><?php echo e($message); ?></strong>
              </span>
               <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
              </div>

<br>
    <div class="form-group">
    <div class="col-xs-offset-1 col-xs-8" align="">
        <button type="submit" class="btn btn-primary">
          <?php echo e(__('Buscar')); ?>

         </button>
    </div>
    </div>
<div class="table-responsive">
<table class="table table-bordered table-info" style="color: #000000;" >
    <thead>
    <tr>
    <th scope="col">MATRICULA</th>
    <th scope="col">NOMBRE</th>
    <th scope="col">SEMESTRE</th>
    <th scope="col">GRUPO</th>
    <th colspan="2" >ESTATUS</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <th scope="row">238957</th>
    <th scope="row">KAREN CRUZ NUÑEZ</th>
    <th scope="row">8</th>
    <th scope="row">D</th>
    <td>  <a data-toggle="modal" href="#">ACREDITADO</a></td>
    <td>  <a data-toggle="modal" href="#">NO ACREDITADO</a></td>
    </tr>

    </tbody>
    </table>
    </div>
    </form>
    </div>

</div>

  <?php $__env->stopSection(); ?>






<script language="JavaScript">
    function checar(){
        $(".inputText").removeAttr("disabled");
    }

    function nochecar(){
        $(".inputText").attr("disabled","disabled");
    }
</script>

<script language="JavaScript">
    function checar_beca(){
        $(".inputBeca").removeAttr("disabled");
    }

    function nochecar_beca(){
        $(".inputBeca").attr("disabled","disabled");
    }
</script>

<?php echo $__env->make('layouts.plantilla_tallerista', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/tallerista/grupo_tallerista.blade.php ENDPATH**/ ?>