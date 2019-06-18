<style>
body{
  margin: 2.5;
}
#datos {border:2px solid; width:50%; text-align:center}
#datos tr {border:2px solid;}
#datos tr td{border:2px solid;}

</style>

<table id="encabezado" >
  <tr class="fila" align="center">
  <td id="col_1" >
  <img src="image/logos_idiomas/image1247.jpg">
  </td>
  <td id="col_2">
  <td align="right" width="380"><span style="font-size:12px; font-family: 'Century Gothic';"><strong>UNIVERSIDAD AUTONOMA &quot;BENITO JUAREZ &quot; DE OAXACA<br />FACULTAD DE IDIOMAS<br />LICENCIATURA DE ENSE&Ntilde;ANZA DE IDIOMAS</strong></span></td>
  <br />
  </td>

  <td id="col_3">
  <img width="90" height="100" src="image/logos_idiomas/logo_idiomas.jpg">
  </td>
  </tr>
  <tr>
  <td height="0px"></td>
  </tr>
  <td id="col_4">
  <td colspan="2" align="center"><span style="font-size:12px;"><strong>LICENCIATURA EN ENSE&Ntilde;ANZA DE IDIOMAS MODALIDAD SEMIESCOLARIZADA <br />REINSCRIPCI&Oacute;N AL SEMESTRE 2018-2019</strong></span></td>
    </td>
</table>


<hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">

<page_footer>
        <table>
        <tr>
        <td width="350" align="right">HOJA DE DATOS PERSONALES</td>
        </tr>
        </table>
</page_footer>

<table style="font-size:11px" >
<?php
$usuario_actual=\Auth::user();
 $id=$usuario_actual->id_user;

$imagen = DB::table('users')
->select('users.imagenurl')
->where('users.id_user',$id)
->take(1)
->first();
$im=$usuario_actual->imagenurl;
if(empty($im)){
  $d='image/users/foto.png';

}
else {
  $d='image/users/'.$im;
}
?>
    <tr >
                <td rowspan="4">
          <!--  <img width="90" height="90" src="image/users/$im" />-->
           <img src="<?=  $d;  ?>" width="80" height="100" ></td>
          <td  width="90" align="right">SEMESTRE A CURSAR: </td>
          <td><input name="semestre" type="text" required id="semestre" value="<?php if(empty($data->semestre)){ $vacio=null; echo $vacio;} else{ echo $data->semestre;} ?>"  /></td>
          <td width="120" align="left">MATR&Iacute;CULA:
            <input name="matricula"  type="text" required id="matricula" value="<?php if(empty($data->matricula)){ $vacio=null; echo $vacio;} else{ echo $data->matricula;} ?>"   /></td>
    </tr>
    <tr>
          <td>ESTATUS: </td>
          <td colspan="1"><input name="status"  type="text" required id="status" value="<?php if(empty($data->estatus)){ $vacio=null; echo $vacio;} else{ echo $data->estatus;} ?>">
          </td>

          <td colspan="4">MATERIA/S PENDIENTE/S:
          <input name="matpend"  type="text" width="100"  required id="matpend" value="" /></td>

    </tr>
    <tr>
    </tr>
    <tr>
      <td colspan="1">NOMBRE(S)</td>
      <td ><input name="nombre" type="text" required id="nombre" value="<?php if(empty($data->nombre)){ $vacio=null; echo $vacio;} else{ echo $data->nombre;} ?>" /></td>
    </tr>
    <tr>
      <td colspan="2">APELLIDO PATERNO</td>
      <td ><input name="apepat" type="text" required id="apepat" value="<?php if(empty($data->apellido_paterno)){ $vacio=null; echo $vacio;} else{ echo $data->apellido_paterno;} ?>" /></td>
      <td >APELLIDO MATERNO</td>
      <td ><input name="apemat" type="text" required id="apemat" value="<?php if(empty($data->apellido_materno)){ $vacio=null; echo $vacio;} else{ echo $data->apellido_materno;} ?>" /></td>
    </tr>
    <tr>
      <td colspan="2">FECHA DE NACIMIENTO (DD/MM/AA) </td>
      <td ><input name="fec_nac" type="text" required id="fec_nac" value="<?php if(empty($data->fecha_nacimiento)){ $vacio=null; echo $vacio;} else{ echo date('d-m-Y', strtotime($data->fecha_nacimiento));} ?>" /></td>

      <td >G&Eacute;NERO</td>
      <td ><input name="genero" type="text" required id="genero" value="<?php if(empty($data->genero)){ $vacio=null; echo $vacio;} else{ echo $data->genero;} ?>" /></td>
    </tr>
    <tr>
      <td colspan="5">DIRECCI&Oacute;N:</td>

                      </tr>
                      <tr>
                          <td colspan="5"><textarea name="direccion"  cols="94" rows="3" required id="direccion"><?php if(empty($di->vialidad_principal)){ $vacio=null; echo $vacio;} else{ echo $di->vialidad_principal;} ?></td></textarea>
                      </tr>
                      <tr>
                        <td colspan="2">TEL. LOCAL</td>
                        <td><input name="tellocal" type="text" required id="tellocal" value="<?php if(empty($nu_l->numero)){ $vacio=null; echo $vacio;} else{ echo $nu_l->numero;} ?>" /></td>
                        <td>TEL. CELULAR</td>
                        <td><input name="telcel" type="text" required id="telcel" value="<?php if(empty($nu_ce->numero)){ $vacio=null; echo $vacio;} else{ echo $nu_ce->numero;} ?>" /></td>
                    </tr>
                     <tr>
                      <td>  EMAIL</td>
                        <td ><input id="email"name="email" type="text" value=""></td>
                        <td >FACEBOOK</td><td ><input name="face" type="text" required id="face"  value=""/></td>

                    </tr>
                    <tr>
                        <td colspan="4">¿TIENES ALGUNA ACTIVIDAD LABORAL Y/O ESCOLAR DURANTE LA SEMANA?  </td>

                        <td ><input name="actividadlaboral" type="text" required id="actividadlaboral" value=""/></td>

                    </tr>
                     <tr>
                        <td colspan="5">ESPEC&Iacute;FICA:</td>

                    </tr>
                    <tr>
                        <td colspan="5"><textarea name="especifica"  cols="94" rows="3" required id="especifica"></textarea></td>

                    </tr>
                    <tr>
                        <td colspan="3">LUGAR:</td>
                        <td colspan="6">HORARIO:</td>
                    </tr>
                    <tr>
                        <td colspan="3"><textarea name="lugar"  cols="15" rows="2" required id="lugar"> </textarea></td>
                          <td colspan="2"><textarea name="horario"  cols="15" rows="2" required id="horario">  </textarea></td>

                    </tr>

                    <tr>
                     <td colspan="3">HORARIO DISPONIBLE PARA LAS ASESORIAS  </td>
                        <td colspan="4"><input name="hor_dis" type="text" width="155" required id="hor_dis" value=""  /></td>

                    </tr>
                    <tr>
                     <td colspan="2">¿HABLAS ALGUNA LENGUA? </td>
                        <td>
                                  <input name="hablaslengua" type="text" required id="hablaslengua" value=""  />	</td>
                         <td align="center" >ESPECIFICA</td>
                         <td><input name="lenguacual" type="text" required id="lenguacual" value=""/></td>

                    </tr>
                     <tr>
                     <td colspan="2">EN CASO DE EMERGENCIA AVISAR A:</td>
                        <td colspan="3"><input name="emergencia" type="text"  required id="emergencia" value=""/></td>

                    </tr>
                    <tr>
                     <td colspan="2">RELACIÓN O PARENTESCO:</td>
                        <td colspan="3"><input name="relacion" type="text" required id="relacion" value=""/></td>

                    </tr>
                    <tr>
                        <td colspan="2">TEL. LOCAL</td>
                        <td ><input name="tellocalemer" type="text" required id="tellocalemer" value=""/></td>
                        <td >TEL. CELULAR</td>
                        <td ><input name="telcelemer" type="text" required id="telcelemer" value=""/></td>

                    </tr>
                    <tr>
                        <td colspan="2">TIPO DE SANGRE:</td>
                        <td ><input name="sangre" type="text" required id="sangre" value=""/></td>
                        <td >ALERGIAS</td>
                        <td ><input name="alergias" type="text" required id="alergias" value=""/></td>

                    </tr>
                    <tr>
                      <td colspan="3">PADECES ALGUNA ENFERMEDAD CRÓNICA:</td>
                        <td colspan="2"><input name="cronica" type="text" required id="cronica" value=""/></td>

                    </tr>
                    <tr>
                      <td colspan="5" align="center"><strong><br /><br /><BR />FIRMA</strong></td>
                    </tr>
                    <tr>
                      <td colspan="5" align="center"><strong><br /><br /><BR />__________________________________________</strong></td>
                    </tr>


                      <tr>

                    	<td colspan="10" style="text-align: justify; ">
                          <br/><br/><strong >•	Aviso de privacidad simplificado</strong><br />
La FACULTAD DE IDIOMAS de la UABJO es responsable del tratamiento de los datos personales que aquí nos proporcione, los cuales serán usados para: actualizar su expediente escolar y gestión académica, para mayor información del tratamiento ARCO de sus datos, consulte nuestro aviso de privacidad integral en http://www.idiomas.uabjo.mx.
                      </td>
                    </tr>

       </table>
</style>
