<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: 911.9
  <?php $__env->stopSection(); ?>
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Información de Estudiantes</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="<?php echo e(route('reporte911_9')); ?>">
                         <?php echo csrf_field(); ?>
<div class="form-row">
  <div class="table-responsive">

  <table class="table table-bordered table-info" style="color: #8181F7;" >

  <h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>ESTUDIANTES BECADOS</strong></h4>
  <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Número de Estudiantes Becados del ciclo escolar actual</h5>

  <tr>
    <td colspan="6"align="center"><strong>Modalidad Escolarizada</strong></td>
 </tr>
    <tr>
      <td ><strong>Origen de la Beca</strong></td>
      <td bgcolor="white">Hombres</td>
      <td bgcolor="white">Mujeres</td>
        <td ><strong>Total</strong></td>
      <td bgcolor="white">Con discapacidad</td>
      <td bgcolor="white">Hablante de Lengua Índigena</td>
    </tr>

    <tr>
      <td bgcolor="white" >Propia Institución</td>
      <td bgcolor="white" ><?php echo e($tipos_becas_ESC_M['INSTITUCIONAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_ESC_F['INSTITUCIONAL']); ?></td>
      <td ><?php echo e($tipos_becas_ESC_G['INSTITUCIONAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_esco_D['INSTITUCIONAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_esco_L['INSTITUCIONAL']); ?></td>
    </tr>
    <tr>
      <td bgcolor="white" >Beca Federal</td>
      <td bgcolor="white" ><?php echo e($tipos_becas_ESC_M['FEDERAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_ESC_F['FEDERAL']); ?></td>
      <td ><?php echo e($tipos_becas_ESC_G['FEDERAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_esco_D['FEDERAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_esco_L['FEDERAL']); ?></td>
    </tr>
    <tr>
      <td bgcolor="white" >Beca Estatal</td>
      <td bgcolor="white" ><?php echo e($tipos_becas_ESC_M['ESTATAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_ESC_F['ESTATAL']); ?></td>
      <td ><?php echo e($tipos_becas_ESC_G['ESTATAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_esco_D['ESTATAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_esco_L['ESTATAL']); ?></td>    </tr>
    <tr>
      <td bgcolor="white" >Beca Municipal</td>
      <td bgcolor="white" ><?php echo e($tipos_becas_ESC_M['MUNICIPAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_ESC_F['MUNICIPAL']); ?></td>
      <td ><?php echo e($tipos_becas_ESC_G['MUNICIPAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_esco_D['MUNICIPAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_esco_L['MUNICIPAL']); ?></td>
    </tr>
    <tr>
      <td bgcolor="white" >Beca Particular</td>
      <td bgcolor="white" ><?php echo e($tipos_becas_ESC_M['PARTICULAR']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_ESC_F['PARTICULAR']); ?></td>
      <td ><?php echo e($tipos_becas_ESC_G['PARTICULAR']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_esco_D['PARTICULAR']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_esco_L['PARTICULAR']); ?></td>
    </tr>
    <tr>
      <td bgcolor="white" >Beca Internacional</td>
      <td bgcolor="white" ><?php echo e($tipos_becas_ESC_M['INTERNACIONAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_ESC_F['INTERNACIONAL']); ?></td>
      <td ><?php echo e($tipos_becas_ESC_G['INTERNACIONAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_esco_D['INTERNACIONAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_esco_L['INTERNACIONAL']); ?></td>
    </tr>

    <tr>
    <td ><strong>Total</strong></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_ESC_M['TOTAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_ESC_F['TOTAL']); ?></td>
      <td ><?php echo e($tipos_becas_ESC_G['TOTAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_esco_D['TOTAL']); ?></td>
      <td bgcolor="white" ><?php echo e($tipos_becas_esco_L['TOTAL']); ?></td>
    </tr>
  </table>

    <table class="table table-bordered table-info" style="color: #8181F7;" >
      <tr>
        <td colspan="6"align="center"><strong>Modalidad Semiescolarizada</strong></td>
     </tr>
        <tr>
          <td ><strong>Origen de la Beca</strong></td>
          <td bgcolor="white">Hombres</td>
          <td bgcolor="white">Mujeres</td>
            <td ><strong>Total</strong></td>
          <td bgcolor="white">Con discapacidad</td>
          <td bgcolor="white">Hablante de Lengua Índigena</td>
        </tr>

        <tr>
          <td bgcolor="white" >Propia Institución</td>
          <td bgcolor="white" ><?php echo e($tipos_becas_SEMI_M['INSTITUCIONAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_SEMI_F['INSTITUCIONAL']); ?></td>
          <td ><?php echo e($tipos_becas_SEMI_G['INSTITUCIONAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_semi_D['INSTITUCIONAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_semi_L['INSTITUCIONAL']); ?></td>
        </tr>
        <tr>
          <td bgcolor="white" >Beca Federal</td>
          <td bgcolor="white" ><?php echo e($tipos_becas_SEMI_M['FEDERAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_SEMI_F['FEDERAL']); ?></td>
          <td ><?php echo e($tipos_becas_SEMI_G['FEDERAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_semi_D['FEDERAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_semi_L['FEDERAL']); ?></td>
        </tr>
        <tr>
          <td bgcolor="white" >Beca Estatal</td>
          <td bgcolor="white" ><?php echo e($tipos_becas_SEMI_M['ESTATAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_SEMI_F['ESTATAL']); ?></td>
          <td ><?php echo e($tipos_becas_SEMI_G['ESTATAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_semi_D['ESTATAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_semi_L['ESTATAL']); ?></td>    </tr>
        <tr>
          <td bgcolor="white" >Beca Municipal</td>
          <td bgcolor="white" ><?php echo e($tipos_becas_SEMI_M['MUNICIPAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_SEMI_F['MUNICIPAL']); ?></td>
          <td ><?php echo e($tipos_becas_SEMI_G['MUNICIPAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_semi_D['MUNICIPAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_semi_L['MUNICIPAL']); ?></td>
        </tr>
        <tr>
          <td bgcolor="white" >Beca Particular</td>
          <td bgcolor="white" ><?php echo e($tipos_becas_SEMI_M['PARTICULAR']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_SEMI_F['PARTICULAR']); ?></td>
          <td ><?php echo e($tipos_becas_SEMI_G['PARTICULAR']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_semi_D['PARTICULAR']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_semi_L['PARTICULAR']); ?></td>
        </tr>
        <tr>
          <td bgcolor="white" >Beca Internacional</td>
          <td bgcolor="white" ><?php echo e($tipos_becas_SEMI_M['INTERNACIONAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_SEMI_F['INTERNACIONAL']); ?></td>
          <td ><?php echo e($tipos_becas_SEMI_G['INTERNACIONAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_semi_D['INTERNACIONAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_semi_L['INTERNACIONAL']); ?></td>
        </tr>

        <tr>
        <td ><strong>Total</strong></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_SEMI_M['TOTAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_SEMI_F['TOTAL']); ?></td>
          <td ><?php echo e($tipos_becas_SEMI_G['TOTAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_semi_D['TOTAL']); ?></td>
          <td bgcolor="white" ><?php echo e($tipos_becas_semi_L['TOTAL']); ?></td>
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

<?php echo $__env->make('layouts.plantilla_planeacion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo/planeacion/reportes/reporte911_9/reporte911_9.blade.php ENDPATH**/ ?>