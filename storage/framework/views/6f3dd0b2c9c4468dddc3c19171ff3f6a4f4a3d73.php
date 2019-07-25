<?php $__env->startSection('title'); ?>
:Tutorías
<?php $__env->stopSection(); ?>
<?php $__env->startSection('seccion'); ?>
<h1 style="font-size: 2.0em; color: #000000;" align="center">Encuesta</h1>
<div class="container" id="font7">
</br>                    <form method="POST" action="<?php echo e(route('tutorias')); ?>">
                        <?php echo csrf_field(); ?>
  <p style="color: #000000; font-size: 1,5em; "><strong>Todas las preguntas son Obligatorias</strong> </p>
  <div class="form-row">
  <div class="radio col-md-12" id="labels" align="justify">
  <label>Durante el semestre pasado, ¿Tuviste el acompañamiento de un/a Tutor/a?</label>
  </br>
  <div align="justify">

   <input type="radio" id="tutor_si" name="tutor" value="SI"  onclick="checar(this.id)" required >
   <label for="tutor_si">Si</label>

   <input type="radio" id="tutor_no" name="tutor" value="NO" onclick="nochecar(this.id)" required>
   <label for="tutor_no">No</label>
   </div>
  </div>
  </div>

</br>
</br>

  <div class="form-row">

  <div class="radio col-md-12" id="labels" align="justify">
  <label>De acuerdo a la siguiente escala ubica el desempeño del tutor/a, considerando el 5 como el valor máximo:</label>
  </br>
  <div align="justify">

   <input type="radio" id="uno" name="desempenio" value="1"  required disabled>
   <label for="uno">1</label>

   <input type="radio" id="dos" name="desempenio" value="2"  required disabled>
   <label for="dos">2</label>

   <input type="radio" id="tres" name="desempenio" value="3"  required disabled>
   <label for="res">3</label>

   <input type="radio" id="cuatro" name="desempenio" value="4" required disabled>
   <label for="cuatro">4</label>

   <input type="radio" id="cinco" name="desempenio" value="5"  required disabled>
   <label for="cinco">5</label>
   </div>

  </div>
  </div>

</br>
</br>

  <div class="form-row">

  <div class="radio col-md-12" id="labels" align="justify">
  <label>De las siguientes dimensiones de la Formación Integral, identifica 3 áreas que te gustaría trabajar con tu tutor/a este semestre:
  </label>
  </br>

  </div>
  <div class="radio col-md-12" id="labels" align="justify">

   <input type="checkbox"  name="area" value="Académico"  required >
   <label for="uno">Académico </label>
</div>
<div class="radio col-md-12" id="labels" align="justify">
   <input type="checkbox"  name="area" value="Emocional"  required>
   <label for="dos">Emocional </label>
</div>
<div class="radio col-md-12" id="labels" align="justify">
   <input type="checkbox"  name="area" value="Cuidado de la Salud"  required>
   <label for="res">Cuidado de la Salud </label>
</div>
<div class="radio col-md-12" id="labels" align="justify">
   <input type="checkbox"  name="area" value="Actitudes y Valores"  required>
   <label for="cuatro">Actitudes y Valores </label>
</div>
<div class="radio col-md-12" id="labels" align="justify">
   <input type="checkbox"  name="area" value="Relaciones personales" required>
   <label for="cinco">Relaciones inter e intra personales</label>
   </div>
  </div>

</br>
</br>

                  <div class="form-group">
                  <div class="col-xs-offset-2 col-xs-9" align="center">
                  <button type="submit" class="btn btn-primary">
                  <?php echo e(__('Guardar')); ?>

                  </button>
                  </div>
                  </div>
                  </form>
                </div>

<?php $__env->stopSection(); ?>


<script language="JavaScript">
    function checar(id){
      // document.getElementById("nombre_lengua").removeAttr("disabled");
       //$(".inputText").removeAttr("disabled");
       if ( id == "tutor_si" ) {
        document.getElementById("uno").removeAttribute("disabled");
        document.getElementById("dos").removeAttribute("disabled");
        document.getElementById("tres").removeAttribute("disabled");
        document.getElementById("cuatro").removeAttribute("disabled");
        document.getElementById("cinco").removeAttribute("disabled");
      }
    }

    function nochecar(id){
      if ( id == "tutor_no" ) {
       document.getElementById("uno").setAttribute("disabled","disabled");
       document.getElementById('uno').checked = false;
       document.getElementById("dos").setAttribute("disabled","disabled");
       document.getElementById('dos').checked = false;
       document.getElementById("tres").setAttribute("disabled","disabled");
       document.getElementById('tres').checked = false;
       document.getElementById("cuatro").setAttribute("disabled","disabled");
       document.getElementById('cuatro').checked = false;
       document.getElementById("cinco").setAttribute("disabled","disabled");
       document.getElementById('cinco').checked = false;
         }

    }
</script>

<?php echo $__env->make('layouts.plantilla_estudiante', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/estudiante/tutorias.blade.php ENDPATH**/ ?>