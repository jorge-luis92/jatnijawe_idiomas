<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: 911.9A
  <?php $__env->stopSection(); ?>
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Información de Estudiantes</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="<?php echo e(route('reporte911_9A_4')); ?>">
                         <?php echo csrf_field(); ?>
<div class="form-row">
  <div class="table-responsive">


<table class="table table-bordered table-info" style="color: #8181F7;" >

<h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>ALUMNOS INSCRITOS POR EDAD Y GRADO DE AVANCE</strong></h4>

      <tr>
        <td colspan="10"align="center"><strong>Grado de Avance</strong></td>
     </tr>
        <tr>
          <td ><strong>Edad</strong></td>
          <td bgcolor="white">Primero</td>
          <td bgcolor="white">Segundo</td>
          <td bgcolor="white">Tercero</td>
          <td bgcolor="white">Cuarto</td>
          <td bgcolor="white">Quinto</td>
          <td bgcolor="white">Sexto</td>
          <td bgcolor="white">Séptimo</td>
          <td bgcolor="white">Octavo</td>
          <td ><strong>Total</strong></td>
        </tr>

        <tr>
          <td ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td ></td>
        </tr>
        <tr>
        <td ><strong>Total</strong></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white" ></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td bgcolor="white"></td>
          <td ></td>
        </tr>

        </table>
<a> Páginas</a>
        <a class="siguiente" align="rigth" href=<?php echo e(route('reporte911_9A_0')); ?>>1</a>
        <a class="siguiente" align="rigth" href=<?php echo e(route('reporte911_9A_1')); ?>>2</a>
        <a class="siguiente" align="rigth" href=<?php echo e(route('reporte911_9A_2')); ?>>3</a>
        <a class="siguiente" align="rigth" href=<?php echo e(route('reporte911_9A_3')); ?>>4</a>
        <a class="siguiente" align="rigth" href=<?php echo e(route('reporte911_9A_4')); ?>><strong>5</strong></a>
        <a class="siguiente" align="rigth" href=<?php echo e(route('reporte911_9A_5')); ?>>6</a>
        <a class="siguiente" align="rigth" href=<?php echo e(route('reporte911_9A_6')); ?>>7</a>
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

<?php echo $__env->make('layouts.plantilla_planeacion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\planeacion\reportes\reporte911_9A/reporte911_9A_4.blade.php ENDPATH**/ ?>