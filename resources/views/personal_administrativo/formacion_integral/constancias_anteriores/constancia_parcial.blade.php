<style>
body{
  margin: 0;
}
#datos {border:2px solid; width:50%; text-align:center}
#datos tr {border:2px solid;}
#datos tr td{border:2px solid;}
</style>
<?php
$arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
$arrayDias = array('Domingo', 'Lunes', 'Martes','Miercoles', 'Jueves', 'Viernes', 'Sabado');
?>

  <table id="encabezado" >
    <tr class="fila" align="center">
    <td id="col_1" >
    <img src="image/logos_idiomas/image1247.jpg">
    </td>
    <td id="col_2">
    <span id="span4" > Universidad Aut&oacute;noma Benito Ju&aacute;rez de Oaxaca <BR />FACULTAD DE IDIOMAS<BR /></span>
    </td>

    <td id="col_4">
    <img width="90" height="100" src="image/logos_idiomas/logo_idiomas.jpg">
    </td>
    </tr>
    <tr>
    <td height="0px"></td>
    </tr>
    <tr>
    <td colspan="3" align="center"><img src="image/logos_idiomas/barra.jpg"></td>
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
<center><strong> A: {{$data->nombre}}
</strong></center>

    <BR />
  <center><strong>Por haber concluido con el total de horas extracurriculares en las siguientes actividades:
  </center></strong>
    <br />
  </tr>

   <td style="text-align: justify; align: center;">
     <span > <strong> ACAD&Eacute;MICA</strong></span><br />
    @foreach($aca as $acade)
    »   {{$acade->nombre}} <br />
    @endforeach
    <br />
    <strong>CULTURAL</strong><br />
    @foreach($cul as $cultu)
    »   {{$cultu->nombre}} <br />
    @endforeach
    <br />
    <strong>DEPORTIVA</strong><br />
    @foreach($dep as $depor)
    »   {{$depor->nombre}} <br />
    @endforeach
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
        <img src="./image/logos_idiomas/barracopia.jpg">
      </td>
      </tr>
      <tr>
      <td style="text-align: left;    width: 50%"></td>
      </tr>
      <td id="col_2">
      <span id="span4" >
      <span style="text-align:center; font-size:12px"><center>Burgoa s/n, Col Centro, C.P. 68000, Tel. y Fax. 51 4 00 49 <BR />
      Av. Universidad s/n, Ex. Hacienda de 5 Señores, C.P. 68120, Tel. y Fax. 57 2 52 16<BR />
        Correo electrico: idiomas@uabjo.mx Página web: www.idiomas.uabjo.mx</center></span>
      </span>
      </td>


   </table>

</body>
