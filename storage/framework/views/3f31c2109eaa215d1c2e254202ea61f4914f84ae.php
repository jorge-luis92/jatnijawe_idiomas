<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
:Reporte Semestral
  <?php $__env->stopSection(); ?>
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Coordinación de Planeación</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="<?php echo e(route('reporte_semestral')); ?>">
                         <?php echo csrf_field(); ?>
<div class="form-row">
  <div class="table-responsive">
    <table class="table table-bordered " style="color: #8181F7; background-color: #F2F2F2;" >
    <h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>REPORTE SEMESTRAL</strong></h4>


      <tr>
        <td colspan="6"align="center"><strong>LICENCIATURA</strong></td>
     </tr>
        <tr>
          <td ><strong></strong></td>
          <td align="center"><strong>P1</br>Modalidad Escolarizada</strong></td>
          <td align="center"><strong>P2</br>Modalidad Semiescolarizada</strong></td>
          <td ><strong>Total</strong></td>

        </tr>

        <tr>
          <td><strong>Matrícula Atendidida</strong></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
        </tr>

        <tr>
          <td ><strong>Alumnos Reinscritos</strong></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
        </tr>

        <tr>
          <td ><strong>Alumnos en Servicio Social</strong></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
        </tr>

        <tr>
          <td ><strong>Alumnos en Prácticas Profesionales</strong></td>
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

<?php echo $__env->make('layouts.plantilla_planeacion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\planeacion\reportes\reporte_semestral/reporte_semestral.blade.php ENDPATH**/ ?>