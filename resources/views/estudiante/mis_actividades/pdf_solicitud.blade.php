
<style>
body{
  margin:0;
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
  <td align="right" width="380"><span style="font-size:12px;"><strong>UNIVERSIDAD AUTONOMA &quot;BENITO JUAREZ &quot; DE OAXACA<br />FACULTAD DE IDIOMAS<br />LICENCIATURA DE ENSE&Ntilde;ANZA DE IDIOMAS</strong></span></td>
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
  <td colspan="2" align="center"><span style="font-size:18px;"><strong>COORDINACIÓN DE FORMACIÓN INTEGRAL</strong></span></td>
    </td>
</table>


<hr style="height:1px; border:none; color:#000; background-color:#000; width:100%; text-align:left; margin: 0 auto 0 0;">


<h4><center>SOLICITUD DE TALLER</center></h4>
<table style="font-size:14px" >
    <tr>
      <td colspan="3">NOMBRE DEL SOLICITANTE: </td>
      <td ><label >{{$datos->nombre}} {{$datos->apellido_paterno}} {{$datos->apellido_materno}}</label></td>
      <td >SEMESTRE</td>
      <td ><input name="semestre" type="text" align="center"  id="semestre" value="2" /></td>
    </tr>
    <tr>
      <td colspan="3">MATRICULA:</td>
      <td ><label >{{$data->matricula}}</label></td>
      <td >MODALIDAD</td>
      <td ><input name="modalidad" type="text"  id="modalidad" value="{{$datos->modalidad}}" /></td>
      </tr>
    <tr>
      <td colspan="3">EDAD</td>
      <td ><input name="edad" type="text" required id="edad" value="{{$datos->edad}}" /></td>
      <td >TELÉFONO CELULAR</td>
      <td ><input name="telefono" type="text"  id="telefono" value="<?php if(empty($nu_ce->numero)){ $vacio=null; echo $vacio;} else{ echo $nu_ce->numero;} ?>" /></td>
    </tr>
    <tr>
      <td colspan="3">NOMBRE DEL TALLER</td>
      <td ><input name="nombre_ec" type="text" id="nombre_ec" value="{{$data->nombre_taller}}" /></td>
      <td >ÁREA</td>
      <td ><input name="area" type="text"  id="area" value="{{$data->area}}" /></td>
    </tr>
    <tr>
      <td colspan="3">CUPO</td>
      <td ><input name="cupo" type="text" required id="cupo" value="{{$data->cupo}}" /></td>
    <td >CREDITOS</td>
    <td ><input name="creditos" type="text" required id="creditos" value="{{$data->creditos}}" /></td>
    </tr>

    <tr>
    <td colspan="5">DESCRIPCI&Oacute;N:</td>
    </tr>
    <tr>
    <td colspan="8"><textarea name="descripcion"  cols="94" rows="3" required id="descripcion">{{$data->descripcion}}</textarea></td>
    </tr>

    <tr>
    <td colspan="5">OBJETIVOS:</td>
    </tr>
    <tr>
    <td colspan="8"><textarea name="objetivos"  cols="94" rows="3" required id="objetivos">{{$data->objetivos}}</textarea></td>
    </tr>

    <tr>
    <td colspan="5">JUSTIFICACI&Oacute;N:</td>
    </tr>
    <tr>
    <td colspan="8"><textarea name="justificacion"  cols="94" rows="3" required id="justificacion">{{$data->justificacion}}</textarea></td>
    </tr>

    <tr>
      <td colspan="3">DURACIÓN</td>
      <td ><input name="duracion" type="text" required id="duracion" value="{{$data->duracion}}" /></td>
    </tr>

    <tr>
    <td colspan="5">HORARIO TENTATIVO:</td>
    </tr>
    <tr>
    <td colspan="8"><textarea name="horario"  cols="94" rows="3"  id="horario">Fecha : Del {{ date('d-m-Y', strtotime($data->fecha_inicio)) }} al {{ date('d-m-Y', strtotime($data->fecha_fin)) }} <br />Horario: {{$data->dias_sem}} de {{$data->hora_inicio}} a {{$data->hora_fin}}</textarea></td>
    </tr>>

    <tr>
    <td colspan="5">MATERIALES:</td>
    </tr>
    <tr>
    <td colspan="8"><textarea name="materiales"  cols="94" rows="3" required id="materiales">{{$data->materiales}}</textarea></td>
    </tr>

    <tr>
    <td colspan="5">PROPUESTA DE PROYECTO FINAL:</td>
    </tr>
    <tr>
    <td colspan="8"><textarea name="Proyecto"  cols="94" rows="3" required id="proyecto">{{$data->proyecto_final}}</textarea></td>
    </tr>

       </table>
