<style>
body{
  margin: 0;
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

<h4><center>LISTA DE ASISTENCIA</center></h4>

<table align="left" style="font-size:15px" >
    <tr>
      <td colspan="3">NOMBRE DE TALLER</td>
      <td><input type="text" value="" /></td>
      <td colspan="3">NOMBRE DE TUTOR</td>
      <td><input  type="text" required  value="" /></td>
    </tr>
    <tr>
      <td colspan="3">FECHA INICIO</td>
      <td><input type="text"  value="" /></td>
      <td colspan="3">FECHA FIN</td>
      <td><input  type="text"  value="" /></td>
    </tr>
</table>
<br/><br/>
<table align="left" style="font-size:15px" >
      <tr>
      <td colspan="2">HORA DE ENTRADA </td>
      <td><input  type="text"  value="" /></td>
      <td colspan="2">HORA DE SALIDA</td>
      <td><input type="text" value="" /></td>
    </tr>
</table>
<br/><br/>
<div class="table">
  <table align="center"class="table table-bordered table-info" border="1" style="font-size:18px; font-family: 'Century Gothic'; border:2px solid #819FF7; max-width: auto;">
/*  border-radius:40px 0 40px 0;-->*/
  text-align: left;
  box-shadow: 10px 10px 6px -5px rgba(11,23,59,1);">
  <thead>
    <tr>
        <th style="width:auto; font-size: 12px;">MATR&Iacute;CULA</th>
        <th style="width:200px; font-size: 12px;">NOMBRE</th>
        <th colspan="1" style="width:auto; font-size: 10px;" >TEL&Eacute;FONO</th>
        <th style="width:50px; font-size: 12px;">FIRMA</th>
        <th style="width:150px; font-size: 12px;">OBSERVACIONES</th>
        <th width="100" style="width:100px; font-size: 12px;" colspan="10">ASISTENCIAS</th>
    </tr>
  </thead>
  <tbody>
      @foreach($dato as $datos)
      <tr>
        <th style="width:auto; font-size: 12px;" scope="row">{{$datos->matricula }}</th>
        <td style="width:250px; font-size: 12px;">{{$datos->nombre }} {{$datos->apellido_paterno }} {{$datos->apellido_materno }}</td>
        <td style="width:auto; font-size: 12px;" ></td>
        <td style="width:50px; font-size: 12px;"> </td>
        <td style="width:100px; font-size: 12px;"> </td>
        <td>  <a ></a></td>
        <td>  <a ></a></td>
        <td>  <a ></a></td>
        <td>  <a ></a></td>
        <td>  <a ></a></td>
        <td>  <a ></a></td>
        <td>  <a ></a></td>
        <td>  <a ></a></td>
        <td>  <a ></a></td>
        <td>  <a ></a></td>
           </tr>
  @endforeach
    </tbody>
  </table>
</div>
