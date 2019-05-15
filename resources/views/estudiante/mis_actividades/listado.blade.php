<!doctype html>
<html>
<head>
	  <link href="css/pdfss.css" rel="stylesheet">
	<title>LISTADO</title>
</head>
<body >
	<h2 style="font-size: 3.7em; color: #000000;" align="center">RUBGY</h2>
  <div class="table-responsive">
    <table class="table table-bordered table-info" style="color: #000000;" >
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">CURSO</th>
          <th scope="col">CREDITOS</th>
          <th scope="col">AREA</th>
          <th scope="col">FECHA INICIO</th>
          <th scope="col">FECHA FIN</th>
          <th scope="col">TUTOR</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Relaciones Tóxicas</td>
          <td>2</td>
          <td>Cultural</td>
          <td>12/04/2018</td>
          <td>15/08/2018</td>
          <td>{{ Auth::user()->name }}</td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
