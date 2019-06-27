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
      <div class="form-group col-md-3" id="labels">
        <label  for="matricula">Matricula</label>
        <input type="text" class="form-control" id="matricula"  value="<?php echo e($u->matricula); ?>" disabled>
      </div>

      <div class="form-group col-md-2" id="labels">
        <label for="semestre">Semestre</label>
        <input type="number" class="form-control" id="semestre" value="<?php echo e($u->semestre); ?>" disabled>
      </div>

      <div class="form-group col-md-1" id="labels">
        <label for="grupo">Grupo</label>
        <input type="text" class="form-control" max="2"  onKeyUp="this.value = this.value.toUpperCase()" name="grupo" id="grupo" value="<?php echo e($u->grupo); ?>" >
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
      <div class="form-group col-md-2" id="labels">
        <label for="ap_mat">Apellido Materno</label>
        <input type="text" class="form-control" id="ap_mat" value="<?php echo e($u->apellido_materno); ?>" disabled>
      </div>
      <div class="form-group col-md-3" id="labels">
        <label for="fecha_nac">Fecha de Nacimiento</label>
        <input type="date" class="form-control" id="fecha_nac" value="<?php echo e($u->fecha_nacimiento); ?>" disabled>
      </div>
      <div class="form-group col-md-1" id="labels">
        <label for="edad">Edad</label>
        <input type="text" class="form-control" id="edad"  value="<?php echo e($u->edad); ?>" disabled>
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
        <label>* ¿Hablante de Lengua Indígena?</label>
      <div align="left">

       <input type="radio" id="si_lengua" name="lengua" value="si" onclick="checar(this.id)" required >
       <label for="si_actividad">Si</label>

       <input type="radio" id="no_lengua" name="lengua" value="no" onclick="nochecar(this.id)" required>
       <label for="no_actividad">No</label>
     </div>

       </div>
    <div class="form-group col-md-3" id="labels">
      <label for="nombre_lengua">Nombre de Lengua</label>
    </br>
      <input type="text"  name="nombre_lengua" id="nombre_lengua" required disabled class="form-control"  onKeyUp="this.value = this.value.toUpperCase()" placeholder="Especifica"  >
    </div>

    <div class="form-group col-md-3">
      <label for="tipo_lengua">Nivel de Comprensión</label>
        <select name="tipo_lengua" id="tipo_lengua" required disabled class="form-control">
        <option value="">Seleccione una opción</option>
        <option value="comprende">Comprende</option>
        <option value="comprende-habla">Comprende y Habla</option>
        <option value="comprende-habla-escribe">Comprende, Habla y Escribe</option>
            </select>
            <a data-toggle="modal" href="#lenguas_detalle">Lenguas Registradas</a>
    </div>

    <div class="radio col-md-2" id="labels">
      <label>* ¿Cuentas con alguna BECA?</label>
    <div align="left">

     <input type="radio" id="si_beca" name="beca" value="si" onclick="checar_beca(this.id)" required >
     <label for="si_beca">Si</label>

     <input type="radio" id="no_beca" name="beca" value="no" onclick="nochecar_beca(this.id)" required>
     <label for="no_beca">No</label>
   </div>

     </div>
  <div class="form-group col-md-2" id="labels">
    <label for="nombre_beca">Nombre Beca</label>
    <input type="text"  name="nombre_beca" id="nombre_beca" class="form-control" placeholder="Especifica"  onKeyUp="this.value = this.value.toUpperCase()" disabled  required>
  <a data-toggle="modal" href="#becas_detalle">Becas Registradas</a>
  </div>
<!-- -->
<div class="form-group col-md-3">
  <label for="tipo_beca">Tipo de Beca</label>
    <select name="tipo_beca" id="tipo_beca" required disabled class="form-control">
    <option value="">Seleccione una opción</option>
    <option value="FEDERAL">BECA FEDERAL</option>
    <option value="ESTATAL">BECA ESTATAL</option>
    <option value="MUNICIPAL">BECA MUNICIPAL</option>
    <option value="PARTICULAR">BECA PARTICULAR</option>
    <option value="INTERNACIONAL">BECA INTERNACIONAL</option>
        </select>
</div>
<div class="form-group col-md-2" id="labels">
  <label for="monto">Monto</label>
  <input type="tel"  name="monto" id="monto" maxlength="5" onkeypress="return numeros (event)" class="form-control" placeholder="Monto mensual"  disabled  required>
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
</div>
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
                <th scope="col">Nivel de Entendimiento</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $l; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $le): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo $le->nombre_lengua; ?></td>
                <td><?php echo $le->tipo; ?></td>
              </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" tabindex="-1" role="dialog" id="becas_detalle" aria-labelledby="#becas_detalles " aria-hidden="true">
    <div class="modal-dialog modal-none">
      <div class="modal-content">
        <div class="container" id="font5">
          </br>
        <div class="table-responsive">
          <table class="table table-bordered table-info" style="color: #000000;" >
            <thead>
              <tr>
                <th scope="col">Nombre Beca</th>
                <th scope="col">Tipo de Beca</th>
                <th scope="col">Monto Mensual</th>
                <th colspan="1" >ACCIONES</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $b; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $be): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo $be->nombre; ?></td>
                <td><?php echo $be->tipo_beca; ?></td>
                <td>$ <?php echo $be->monto; ?></td>
                <td><a href="cambiar_estatus_beca/<?php echo e($be->id_beca); ?>">Quitar</a></td>
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
    function checar(id){
      // document.getElementById("nombre_lengua").removeAttr("disabled");
       //$(".inputText").removeAttr("disabled");
       if ( id == "si_lengua" ) {
        document.getElementById("nombre_lengua").removeAttribute("disabled");
        document.getElementById("tipo_lengua").removeAttribute("disabled");
      }
    }

    function nochecar(id){
      if ( id == "no_lengua" ) {
       document.getElementById("nombre_lengua").setAttribute("disabled","disabled");
       document.getElementById("tipo_lengua").setAttribute("disabled","disabled");
         }

    }
</script>

<script language="JavaScript">
    function checar_beca(id){
      if ( id == "si_beca" ) {
       document.getElementById("nombre_beca").removeAttribute("disabled");
       document.getElementById("tipo_beca").removeAttribute("disabled");
        document.getElementById("monto").removeAttribute("disabled");
     }
    }

    function nochecar_beca(id){
      if ( id == "no_beca" ) {
       document.getElementById("nombre_beca").setAttribute("disabled","disabled");
       document.getElementById("tipo_beca").setAttribute("disabled","disabled");
       document.getElementById("monto").setAttribute("disabled","disabled");
         }

    }

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

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante\datos/datos_generales.blade.php ENDPATH**/ ?>