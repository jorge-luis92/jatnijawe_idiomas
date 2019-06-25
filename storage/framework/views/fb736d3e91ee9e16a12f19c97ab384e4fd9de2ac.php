<style>
body{
  margin: 0;
  font-family: 'Century Gothic';
}
#datos {border:2px solid; width:50%; text-align:center}
#datos tr {border:2px solid;}
#datos tr td{border:2px solid;}
#span1{font-size: 14px;  }
#span2{font-size: 12px;}
#span3{font-size: 10px;}
 #span4{font-size: 18px;}
</style>
<?php
$arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
$arrayDias = array('Domingo', 'Lunes', 'Martes','Miercoles', 'Jueves', 'Viernes', 'Sabado');
?>

  <table id="encabezado" >
    <tr class="fila" align="center">
    <td id="col_1" >
    <img src="./image/logos_idiomas/image1247.jpg">
    </td>
    <td id="col_2">
                    <span id="span1">Universidad Aut&oacute;noma &#34;Benito Ju&aacute;rez&#34; de Oaxaca</span>
                     <br>
                     <span id="span2">FACULTAD DE IDIOMAS</span>
                      <br>
                     <span id="span3">Burgoa s/n, Col Centro, C.P. 68000, Tel. y Fax. 51 4 00 49<br />
                                    Av. Universidad s/n, Ex. Hacienda de 5 Se&ntilde;ores, C.P. 68120, Tel. y Fax. 57 2 52 16<br />
 								Correo electrónico: idiomas@uabjo.mx      P&aacute;gina web: www.idiomas.uabjo.mx</span>
                 </td>
    <td id="col_4">
    <img width="90" height="100" src="./image/logos_idiomas/logo_idiomas.jpg">
    </td>
    </tr>
    <tr>
    <td height="0px"></td>
    </tr>
    <tr>
    <td colspan="3" align="center"><img src="./image/logos_idiomas/barra.jpg"></td>
    </tr>
  </table>

  <table  width="auto" >
  <tr>
  <td align="center">
  <br /><br /> <span style="text-align:center; font-size:18px"><strong><em>OTORGA LA PRESENTE</em></strong></span><br/>
  <span style="text-align:center; font-size:28px"><strong>C O N S T A N C I A<br /></strong></span> <br />
  </tr>

  <tr class="fila">
</br></br>
  <td>
	</br>
</br>
</br>
<center><strong> A: <?php echo e($data->nombre); ?> <?php echo e($data->apellido_paterno); ?> <?php echo e($data->apellido_materno); ?>


</strong></center>

    <BR />
  <center><strong>Por haber concluido con el total de horas extracurriculares en las siguientes actividades:
  </center></strong>
    <br />
  </tr>

  <td style="text-align: justify; align: center;">
     <span > <strong> ACAD&Eacute;MICA</strong></span><br />
    <?php $__currentLoopData = $aca; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    »   <?php echo e($acade->nombre_ec); ?> <br />
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <br />
    <strong>CULTURAL</strong><br />
    <?php $__currentLoopData = $cul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cultu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    »   <?php echo e($cultu->nombre_ec); ?> <br />
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <br />
    <strong>DEPORTIVA</strong><br />
    <?php $__currentLoopData = $dep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $depor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    »   <?php echo e($depor->nombre_ec); ?> <br />
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <br />
  <br />
  A petici&oacute;n del o la interesado(a) se extiende la presente para los usos administrativos y acad&eacute;micos a que haya lugar,
  en la ciudad de Oaxaca de Ju&aacute;rez, Oax. <?php date_default_timezone_set('UTC'); date_default_timezone_set("America/Mexico_City"); echo $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y'); ?><br /><br /><br />
  <div id="firma" style="text-align: center;">  Atentamente
  <br /><br /><br />

    <span style="text-align:center; font-size:18px"><center></strong><em>"CIENCIA ARTE Y LIBERTAD" </em></center></strong><span>


  <table id="footer">
    <tr>
    <td style="text-align: right;    width: 50%"></td>
    </tr>
      <tr class="fila">
      <td >
        <img src="./image/logos_idiomas/barra.jpg">
      </td>
      </tr>
      <tr>
      <td style="text-align: left;    width: 50%"></td>
      </tr>


   </table>

</body>
<?php /**PATH C:\xampp\htdocs\segunda_version\jatnijawe\resources\views/personal_administrativo\formacion_integral/constanciaParcial.blade.php ENDPATH**/ ?>