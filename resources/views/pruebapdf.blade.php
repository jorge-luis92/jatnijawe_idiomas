<style>
body{
  margin: 0;
}

</style>
<?php
$arrayMeses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
              'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
     $arrayDias = array( 'Domingo', 'Lunes', 'Martes',
                 'Miercoles', 'Jueves', 'Viernes', 'Sabado');

   ?>

<body style="background:url(./image/logos_idiomas/logo_fon.png) center center no-repeat;">
        <table id="encabezado" >

            <tr class="fila" align="center">
                <td id="col_1" >
                  <img src="image/logos_idiomas/image1247.jpg">
                </td>
                <td id="col_2">
                    <span id="span4" >La Facultad de Idiomas de la  <BR /> Universidad Aut&oacute;noma Benito Ju&aacute;rez de Oaxaca </span>
                </td>

                <td id="col_4">
                   <img src="image/logos_idiomas/logo_idiomas.jpg">
                </td>
            </tr>
            <tr>
            	<td height="40px"></td>
            </tr>
            <tr>

            <td colspan="3" align="center"><img src="image/logos_idiomas/barra.jpg"></td>
            </tr>
        </table>



    <table  width="auto" >
    <tr>
    	<td align="center">
       <br /><br /> <span style="text-align:center; font-size:14px">otorga la presente</span> <br /><br /><br />
                <span style="text-align:center; font-size:22px"><strong>C O N S T A N C I A</strong></span> <br />
        </td>
    </tr>

        <tr class="fila">

            <td>
				</br>

				A el/la C.   {{ Auth::user()->name }} <strong style="font-size:14px"> </strong></br>
                Alumno(a) de la <strong style="font-size:14px">LICENCIATURA EN ENSE&Ntilde;ANZA DE IDIOMAS .........................<BR /></strong>Por haber cumplido satisfactoriamente con las Horas Extracurriculares en el:


            </td>

        </tr>

        <tr>
            <td >
                <table id="datos" align="center">
                    <tr class="fila" style="background-color:#999;">
                        <td style="width:70%">
                            &Aacute;REA
                        </td>
                        <td style="width:30%">
                           HORAS
                        </td>
                    </tr>
                     <tr class="fila">
                        <td style="width:70%">
                            ACAD&Eacute;MICA
                        </td>
                        <td style="width:30%;text-align:center">

                        </td>
                    </tr>
                     <tr class="fila">
                        <td style="width:70%">
                            CULTURAL
                        </td>
                        <td style="width:30%; text-align:center">

                        </td>
                        </tr>
                         <tr class="fila">
                        <td style="width:70%">
                            DEPORTIVA
                        </td>
                        <td style="width:30%; text-align:center">

                        </td>
                    </tr>
                     <tr class="fila">
                        <td style="width:70%">
                            TOTAL DE HORAS
                        </td>
                        <td style="width:30%; text-align:center">
                </td>
                    </tr>

                </table>
            </td>
        </tr>
      <tr>
            <td style="text-align: justify;">

               Expediendose las presente por tener cumplidos los requisitos previstos por el reglamento de horas extracurriculares.
               <br /><br />
               A petici&oacute;n del o la interesado(a) se extiende la presente para los usos administrativos y acad&eacute;micos a que haya lugar,
               en la ciudad de Oaxaca de Ju&aacute;rez, Oax. <?php date_default_timezone_set('UTC'); date_default_timezone_set("America/Mexico_City"); echo $arrayDias[date('w')].", ".date('d')." de ".$arrayMeses[date('m')-1]." de ".date('Y'); ?><br /><br /><br />
              <div id="firma" style="text-align: center;">  Atentamente   <?php $anio= date("d"); echo $anio?>
        <br /><br /><br />
        CIENCIA ARTE Y LIBERTAD


        <br /><br /><br /><br /><br />
      </div>
            </td>
        </tr>

    </table>
    <table>
    	<tr>
        <td style="text-align:center; width:280">LIC. ROLANDO FERNANDO MART&Iacute;NEZ S&Aacute;NCHEZ<br />DIRECTOR</td>
        <td style="text-align:center; width:300">LIC. ANA EDITH LOPEZ CRUZ <br /> COORDINADORA DE FORMACI&Oacute;N INTEGRAL</td>
        </tr>
    </table>

    <table id="footer">
             <tr>

                    <td style="text-align: right;    width: 50%">pagina 1/1</td>
                </tr>
                <tr class="fila">
                    <td >
                       <img src="./image/logos_idiomas/barra.jpg">
                    </td>
                </tr>
            </table>

</body>