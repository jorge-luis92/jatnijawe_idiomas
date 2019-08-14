<link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">

<?php $__env->startSection('title'); ?>
: Información Estudiantes
<?php $__env->stopSection(); ?>
 <?php $__env->startSection('seccion'); ?>
 <h1 style="font-size: 2.0em; color: #000000;" align="center">Información de Estudiantes</h1>
 <div class="container" id="font4">
 </br>
<form  method="post" action="<?php echo e(route('info_coord_academica2')); ?>">
                         <?php echo csrf_field(); ?>
<div class="form-row">
  <div class="table-responsive">


      <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>
      <h4 style="font-size: 1.0em; color: #000000;" align="center"><strong>Estudiantes Becados del ciclo escolar actual</strong></h4>
      <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Modalidad Escolarizada</h5>
      <tr>
        <th scope="row">Origen de la Beca</th>
        <th scope="row">Hombres </th>
        <th scope="row">Mujeres</th>
        <th scope="row">Total</th>
        <th scope="row">Con Discapacidad</th>
        <th scope="row">Hablante de Lengua</th>

      </tr>
      <tr>

        <th scope="col">Propia Institución</th>
        <td bgcolor="white"><?php echo e($total_masc_I); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_I); ?></td>
        <td bgcolor="white"><?php echo e($total_general_I); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_ESC['INSTITUCIONAL']); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_ESCL['INSTITUCIONAL']); ?></td>

      </tr>
      <tr>
        <th scope="col">Beca Federal</th>
        <td bgcolor="white"><?php echo e($total_masc_F); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_F); ?></td>
        <td bgcolor="white"><?php echo e($total_general_F); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_ESC['FEDERAL']); ?> </td>
        <td bgcolor="white"><?php echo e($tipos_becas_ESCL['FEDERAL']); ?></td>
      </tr>
      <tr>
        <th scope="col">Beca Estatal </th>
        <td bgcolor="white"><?php echo e($total_masc_E); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_E); ?></td>
        <td bgcolor="white"><?php echo e($total_general_E); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_ESC['ESTATAL']); ?> </td>
        <td bgcolor="white"><?php echo e($tipos_becas_ESCL['ESTATAL']); ?></td>
      </tr>
      <tr>
        <th scope="col">Beca Municipal</th>
        <td bgcolor="white"><?php echo e($total_masc_M); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_M); ?></td>
        <td bgcolor="white"><?php echo e($total_general_M); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_ESC['MUNICIPAL']); ?> </td>
        <td bgcolor="white"><?php echo e($tipos_becas_ESCL['MUNICIPAL']); ?></td>
      </tr>
      <tr>
        <th scope="col">Beca Particular</th>
        <td bgcolor="white"><?php echo e($total_masc_P); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_P); ?></td>
        <td bgcolor="white"><?php echo e($total_general_P); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_ESC['PARTICULAR']); ?> </td>
        <td bgcolor="white"><?php echo e($tipos_becas_ESCL['PARTICULAR']); ?></td>
      </tr>
      <tr>
        <th scope="col">Beca internacional</th>
        <td bgcolor="white"><?php echo e($total_masc_IN); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_IN); ?></td>
        <td bgcolor="white"><?php echo e($total_general_IN); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_ESC['INTERNACIONAL']); ?> </td>
        <td bgcolor="white"><?php echo e($tipos_becas_ESCL['INTERNACIONAL']); ?></td>
      </tr>
      <tr>
        <th scope="col">Total</th>
        <td bgcolor="white"><?php echo e($total_masc); ?></td>
        <td bgcolor="white"><?php echo e($total_fem); ?></td>
        <td bgcolor="white"><?php echo e($total_general_I + $total_general_F +
                              $total_general_E + $total_general_M +
                              $total_general_P + $total_general_IN); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_ESC['TOTAL']); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_ESCL['TOTAL']); ?></td>
      </tr>
      </table>
      <table class="table table-bordered table-info" style="color: #8181F7;" >
    <thead>
      <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Modalidad Semiescolarizada</h5>
      <tr>
        <th scope="row">Origen de la Beca</th>
        <th scope="row">Hombres </th>
        <th scope="row">Mujeres</th>
        <th scope="row">Total</th>
        <th scope="row">Con Discapacidad</th>
        <th scope="row">Hablante de Lengua</th>

      </tr>
      <tr>
        <th scope="col">Propia Institución</th>
        <td bgcolor="white"><?php echo e($total_masc_I_S); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_I_S); ?></td>
        <td bgcolor="white"><?php echo e($total_general_I_S); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_result['INSTITUCIONAL']); ?> </td>
        <td bgcolor="white"><?php echo e($tipos_becas_SEL['INSTITUCIONAL']); ?> </td>

      </tr>
      <tr>
        <th scope="col">Beca Federal</th>
        <td bgcolor="white"><?php echo e($total_masc_F_S); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_F_S); ?></td>
        <td bgcolor="white"><?php echo e($total_general_F_S); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_result['FEDERAL']); ?> </td>
        <td bgcolor="white"><?php echo e($tipos_becas_SEL['FEDERAL']); ?> </td>
      </tr>
      <tr>
        <th scope="col">Beca Estatal </th>
        <td bgcolor="white"><?php echo e($total_masc_E_S); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_E_S); ?></td>
        <td bgcolor="white"><?php echo e($total_general_E_S); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_result['ESTATAL']); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_SEL['ESTATAL']); ?> </td>
      </tr>
      <tr>
        <th scope="col">Beca Municipal</th>
        <td bgcolor="white"><?php echo e($total_masc_M_S); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_M_S); ?></td>
        <td bgcolor="white"><?php echo e($total_general_M_S); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_result['MUNICIPAL']); ?> </td>
        <td bgcolor="white"><?php echo e($tipos_becas_SEL['MUNICIPAL']); ?> </td>
      </tr>
      <tr>
        <th scope="col">Beca Particular</th>
        <td bgcolor="white"><?php echo e($total_masc_P_S); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_P_S); ?></td>
        <td bgcolor="white"><?php echo e($total_general_P_S); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_result['PARTICULAR']); ?> </td>
        <td bgcolor="white"><?php echo e($tipos_becas_SEL['PARTICULAR']); ?> </td>
      </tr>
      <tr>
        <th scope="col">Beca internacional</th>
        <td bgcolor="white"><?php echo e($total_masc_IN_S); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_IN_S); ?></td>
        <td bgcolor="white"><?php echo e($total_general_IN_S); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_result['INTERNACIONAL']); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_SEL['INTERNACIONAL']); ?> </td>
      </tr>
      <tr>
        <th scope="col">Total</th>
        <td bgcolor="white"><?php echo e($total_masc_S); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_S); ?></td>
        <td bgcolor="white"><?php echo e($total_general_I_S + $total_general_F_S +
                              $total_general_E_S + $total_general_M_S +
                              $total_general_P_S + $total_general_IN_S); ?></td>
        <td bgcolor="white"> <?php echo e($tipos_becas_result['TOTAL']); ?> </td>
        <td bgcolor="white"><?php echo e($tipos_becas_SEL['TOTAL']); ?></td>
      </tr>
      </table>

      <table class="table table-bordered table-info" style="color: #8181F7;" >
      <thead>
      <h5 style="font-size: 1.0em; color: #000000;" align="rigt">Total de Estudiantes del ciclo escolar Actual que cuentan con Beca</h5>
      <tr>
        <th scope="row">Origen de la Beca</th>
        <th scope="row">Hombres </th>
        <th scope="row">Mujeres</th>
        <th scope="row">Total</th>
        <th scope="row">Con Discapacidad</th>
        <th scope="row">Hablante de Lengua</th>

      </tr>
      <tr>
        <th scope="col">Propia Institución</th>
        <td bgcolor="white"><?php echo e($total_masc_becas_I); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_becas_I); ?></td>
        <td bgcolor="white"><?php echo e($total_becasMF_I); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_D['INSTITUCIONAL']); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_L['INSTITUCIONAL']); ?></td>

      </tr>
      <tr>
        <th scope="col">Beca Federal</th>
        <td bgcolor="white"><?php echo e($total_masc_becas_F); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_becas_F); ?></td>
        <td bgcolor="white"><?php echo e($total_becasMF_F); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_D['FEDERAL']); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_L['FEDERAL']); ?></td>
      </tr>
      <tr>
        <th scope="col">Beca Estatal </th>
        <td bgcolor="white"><?php echo e($total_masc_becas_E); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_becas_E); ?></td>
        <td bgcolor="white"><?php echo e($total_becasMF_E); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_D['ESTATAL']); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_L['ESTATAL']); ?></td>
      </tr>
      <tr>
        <th scope="col">Beca Municipal</th>
        <td bgcolor="white"><?php echo e($total_masc_becas_M); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_becas_M); ?></td>
        <td bgcolor="white"><?php echo e($total_becasMF_M); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_D['MUNICIPAL']); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_L['MUNICIPAL']); ?></td>
      </tr>
      <tr>
        <th scope="col">Beca Particular</th>
        <td bgcolor="white"><?php echo e($total_masc_becas_P); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_becas_P); ?></td>
        <td bgcolor="white"><?php echo e($total_becasMF_P); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_D['PARTICULAR']); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_L['PARTICULAR']); ?></td>
      </tr>
      <tr>
        <th scope="col">Beca internacional</th>
        <td bgcolor="white"><?php echo e($total_masc_becas_IN); ?></td>
        <td bgcolor="white"><?php echo e($total_fem_becas_IN); ?></td>
        <td bgcolor="white"><?php echo e($total_becasMF_IN); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_D['INTERNACIONAL']); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_L['INTERNACIONAL']); ?></td>
      </tr>
      <tr>
        <th scope="col">Total</th>
        <td bgcolor="white">
        <?php echo e($total_masc_becas_I + $total_masc_becas_F + $total_masc_becas_E
        + $total_masc_becas_M + $total_masc_becas_P + $total_masc_becas_IN); ?>

        </td>
        <td bgcolor="white">
        <?php echo e($total_fem_becas_I + $total_fem_becas_F + $total_fem_becas_E +
        $total_fem_becas_M + $total_fem_becas_P + $total_fem_becas_IN); ?>

        </td>
        <td bgcolor="white">
        <?php echo e($total_becasMF_I + $total_becasMF_F + $total_becasMF_E +
        $total_becasMF_M + $total_becasMF_P + $total_becasMF_IN); ?>

        </td>
        <td bgcolor="white"><?php echo e($tipos_becas_D['TOTAL']); ?></td>
        <td bgcolor="white"><?php echo e($tipos_becas_L['TOTAL']); ?></td>
      </tr>
      </table>

    </div>
  </form>
</div>

<a class="siguiente" href=<?php echo e(route('info_coord_academica1')); ?>>1</a>
<a class="siguiente" href=<?php echo e(route('info_coord_academica2')); ?>><strong>2</strong></a>
<!--<a class="siguiente" href=<?php echo e(route('info_coord_academica3')); ?>>3</a>-->
<a class="siguiente" href=<?php echo e(route('info_coord_academica4')); ?>>3</a>
<a class="siguiente" href=<?php echo e(route('info_coord_academica5')); ?>>4</a>
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

<?php echo $__env->make('layouts.plantilla_planeacion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo/planeacion/info_departamentos/info_coord_academica/info_coord_academica2.blade.php ENDPATH**/ ?>