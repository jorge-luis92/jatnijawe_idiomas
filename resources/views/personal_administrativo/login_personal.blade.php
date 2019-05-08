@extends('layouts.plantillaperfil')

@section('title')
: Personal Facultad
@endsection

@section('seccion')
  <div class="container" align="center" >
    <h1 style="font-size: 33px; color: #000000">Bienvenido</h1>
    <h2 style="font-size: 15px; color: #000000" align="center">Ingresa tus datos para acceder al sistema</h2>
        <div class="form">
          <form action= "user.php" method="POST">
            <input type="text" name="user" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit" name="ingresar" class="btn btn-outline-primary">Ingresar</button>
                      <div class="opcioncontra" ><a style="color: black" href="../recuperar/recuperar.php">¿Olvidaste tu contraseña?</a>
              </div>
        </form>
</div>
</div>
  @endsection
