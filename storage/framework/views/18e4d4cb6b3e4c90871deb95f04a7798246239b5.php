<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Información Estudiantes
  <?php $__env->stopSection(); ?>
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Información de Estudiantes</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="<?php echo e(route('info_serviciosocial')); ?>">
                         <?php echo csrf_field(); ?>
<div class="form-row">
  <div class="table-responsive">
    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>ESTUDIANTES ACTIVOS QUE PRESTAN SERVICIOS</strong></h4>
    <h6 style="font-size: 1.0em; color: #000000;" align="left"><strong>MODALIDAD ESCOLARIZADA</strong></h6>


      <tr>
        <td colspan="6"align="center"><strong>PRACTICAS PROFESIONALES</strong></td>
     </tr>
        <tr>
          <td ><strong></strong></td>
          <td align="center"><strong>Hombres</strong></td>
          <td align="center"><strong>Mujeres</strong></td>
          <td ><strong>Total</strong></td>

        </tr>



        <tr>
          <td ><strong>Estudiantes activos</strong></td>
          <td bgcolor="white" ><?php echo e($total_inscritos_SS); ?></td>
          <td bgcolor="white" ><?php echo e($total_inscritos_PP); ?></td>
          <td bgcolor="white" ></td>
        </tr>



        <tr>
        <td ><strong>Total</strong></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
        </tr>


        <tr>
          <td colspan="6"align="center"><strong>SERVICIO SOCIAL</strong></td>
       </tr>
          <tr>
            <td ><strong></strong></td>
            <td align="center"><strong>Hombres</strong></td>
            <td align="center"><strong>Mujeres</strong></td>
            <td ><strong>Total</strong></td>

          </tr>



          <tr>
            <td ><strong>Estudiantes activos</strong></td>
            <td bgcolor="white" ></td>
            <td bgcolor="white" ></td>
            <td bgcolor="white" ></td>
          </tr>



          <tr>
          <td ><strong>Total</strong></td>
            <td bgcolor="white" ></td>
            <td bgcolor="white" ></td>
            <td bgcolor="white" ></td>
          </tr>
    </table>
    <table class="table table-bordered table-info" style="color: #8181F7;" >
    <h6 style="font-size: 1.0em; color: #000000;" align="left"><strong>MODALIDAD SEMIESCOLARIZADA</strong></h6>


      <tr>
        <td colspan="6"align="center"><strong>PRACTICAS PROFESIONALES</strong></td>
     </tr>
        <tr>
          <td ><strong></strong></td>
          <td align="center"><strong>Hombres</strong></td>
          <td align="center"><strong>Mujeres</strong></td>
          <td ><strong>Total</strong></td>

        </tr>



        <tr>
          <td ><strong>Estudiantes activos</strong></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
        </tr>



        <tr>
        <td ><strong>Total</strong></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
        </tr>


        <tr>
          <td colspan="6"align="center"><strong>SERVICIO SOCIAL</strong></td>
       </tr>
          <tr>
            <td ><strong></strong></td>
            <td align="center"><strong>Hombres</strong></td>
            <td align="center"><strong>Mujeres</strong></td>
            <td ><strong>Total</strong></td>

          </tr>



          <tr>
            <td ><strong>Estudiantes activos</strong></td>
            <td bgcolor="white" ></td>
            <td bgcolor="white" ></td>
            <td bgcolor="white" ></td>
          </tr>



          <tr>
          <td ><strong>Total</strong></td>
            <td bgcolor="white" ></td>
            <td bgcolor="white" ></td>
            <td bgcolor="white" ></td>
          </tr>
    </table>
    </div>
  </form>
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




</div>

<?php echo $__env->make('layouts.plantilla_planeacion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo/planeacion/info_departamentos/info_serviciosocial.blade.php ENDPATH**/ ?>