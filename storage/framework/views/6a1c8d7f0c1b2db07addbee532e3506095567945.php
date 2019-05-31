<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Datos Generales
<?php $__env->stopSection(); ?>

<?php $__env->startSection('seccion'); ?>
  <h1 style="font-size: 2.0em; color: #000000;" align="center"> Datos Generales</h1>
<div class="container" id="font4">
    <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</br>
  <form method="POST" action="<?php echo e(route('datos_general_actualizar')); ?>">
    <?php echo csrf_field(); ?>
  <p style="font-size: 1.0em; color: #000000;"> Los Campos con un * son Obligatorios</p>
    <div class="form-row">

  <!--    <div class="form-group col-md-3" style="width: 2rem;" >
        <span style="color: #000000">* </span>
        <img class="image" src="image/foto.png" width="100px">
           <input type="file" accept="image/png, .jpeg, .jpg" required>
      </div>-->
      <div class="form-group col-md-3" id="labels">
        <label  for="matricula">Matricula</label>
        <input type="text" class="form-control" id="matricula"  value="<?php echo e($u->matricula); ?>" disabled>
      </div>

      <div class="form-group col-md-3" id="labels">
        <label for="semestre">Semestre</label>
        <input type="number" class="form-control" id="semestre" value="<?php echo e($u->semestre); ?>" disabled>
      </div>
      <div class="form-group col-md-3" id="labels">
        <label for="modalidad">Modalidad</label>
        <input type="text" class="form-control" id="modalidad" value="<?php echo e($u->modalidad); ?>" disabled>
      </div>
      <div class="form-group col-md-3" id="labels">
        <label for="estatus">Estatus</label>
        <input type="text" class="form-control" id="estatus" value="<?php echo e($u->estatus); ?>"disabled>
      </div>
    </div>

    <div class="form-row">

      <div class="form-group col-md-3" id="labels">
        <label for="nombre">Nombre(s)</label>
        <input type="text" class="form-control" value="<?php echo e($u->nombre); ?>" disabled>
      </div>
      <div class="form-group col-md-3" id="labels">
        <label for="apellido_paterno">Apellido Paterno</label>
        <input type="text" class="form-control" id="ap_pat"  value="<?php echo e($u->apellido_paterno); ?>" disabled>
      </div>
      <div class="form-group col-md-3" id="labels">
        <label for="ap_mat">Apellido Materno</label>
        <input type="text" class="form-control" id="ap_mat" value="<?php echo e($u->apellido_materno); ?>" disabled>
      </div>
      <div class="form-group col-md-3" id="labels">
        <label for="fecha_nac">Fecha de Nacimiento</label>
        <input type="date" class="form-control" id="fecha_nac" value="<?php echo e($u->fecha_nacimiento); ?>" disabled>
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-3" id="labels">
        <label for="ap_pat">CURP</label>
        <input type="text" class="form-control" id="curp" value="<?php echo e($u->curp); ?>" disabled>
      </div>
      <div class="form-group col-md-3" id="labels">
        <label for="genero">Género</label>
        <input type="text" class="form-control" id="genero" value="<?php echo e($u->genero); ?>" disabled>
      </div>
      <div class="radio col-md-3" id="labels">
        <label>* ¿Hablante de alguna Lengua?</label>
      <div align="left">

       <input type="radio" id="si_lengua" name="lengua" value="si_lengua" onclick="checar()" required >
       <label for="si_actividad">Si</label>

       <input type="radio" id="no_lengua" name="lengua" value="no_lengua" onclick="nochecar()" required>
       <label for="no_actividad">No</label>
     </div>

       </div>
    <div class="form-group col-md-2" id="labels">
      <label for="nombre_lengua">Nombre de Lengua</label>
    </br>
      <input type="text"  name="nombre_lengua" id="nombre_lengua" required disabled class='inputText'  placeholder="Especifica" value="<?php if(empty($l->nombre_lengua)){ $vacio=null; echo $vacio;} else{ echo $l->nombre_lengua;} ?>" >
    </div>

    <div class="form-group col-md-3">
      <label for="tipo_lengua">Tipo de Lengua</label>
        <select name="tipo_lengua" id="tipo_lengua" required disabled class='inputText'>
        <option value="">Seleccione una opción</option>
        <option value="materna">Materna</option>
        <option value="extranjera">Extranjera</option>
            </select>
    </div>

    <div class="radio col-md-3" id="labels">
      <label>* ¿Cuentas con alguna BECA?</label>
    <div align="left">

     <input type="radio" id="si_beca" name="beca" value="si_beca" onclick="checar_beca()" required >
     <label for="si_beca">Si</label>

     <input type="radio" id="no_beca" name="beca" value="no_beca" onclick="nochecar_beca()" required>
     <label for="no_beca">No</label>
   </div>

     </div>
  <div class="form-group col-md-3" id="labels">
    <label for="nombre_beca">Nombre Beca</label>
  </br>
    <input type="text"  name="nombre_beca" id="nombre_beca" placeholder="Especifica" value="<?php if(empty($b->nombre)){ $vacio=null; echo $vacio;} else{ echo $b->nombre;} ?>" disabled class='inputBeca' required>
  </div>

  <div class="form-group col-md-3" id="labels">
    <label for="tipo_beca">Tipo de Beca</label>
  </br>
    <input type="text"  name="tipo_beca" id="tipo_beca" placeholder="Especifica" value="<?php if(empty($b->tipo_beca)){ $vacio=null; echo $vacio;} else{ echo $b->tipo_beca;} ?>" disabled class='inputBeca' required>
  </div>
    </div>

     <div class="form-group" id="labels">
      <br>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-9" align="center">
                <button type="submit" class="btn btn-primary">
                    <?php echo e(__('Actualizar')); ?>

                </button>
              <!--  <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cancelar</button>-->
            </div>
        </div>
  </div>
  </form>
    <br>

</div>
</br>

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
        empty(value());
    }
</script>

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante\datos/datos_generales.blade.php ENDPATH**/ ?>