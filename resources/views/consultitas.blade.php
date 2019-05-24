<!doctype html>
<html lang="es">
<head>
  <title>Consultitas</title>

</head>

<body >
<ul>
  @foreach($users  as $user)

  <li>{{$user->id}}</li>
    <li>{{$user->email}}</li>
    <h1> spe</h1>
    <li>{{$user->matricula}}</li>
      <li>{{$user->semestre}}</li>
  @endforeach
</ul>
</body>

</html>
