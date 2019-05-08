@extends('layouts.plantillaperfil')
@section('title')
: Estudiante
@endsection

@section('seccion')
  <div class="container" align="center" >
    <h1 style="font-size: 33px; color: #000000">Bienvenido</h1>
    <h2 style="font-size: 15px; color: #000000" align="center">Ingresa tus datos para acceder al sistema</h2>
        <div class="form">
          <form action= "user.php" method="POST">
            <input type="text" name="user" placeholder="Matrícula" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button class="btn btn-outline-primary" name="ingresar" type="submit">Ingresar</button>
          </br>
            <div class="opcioncontra" ><a href="../recuperar/recuperar.php" style="color: black">¿Olvidaste tu contraseña?</a>
              </div>
        </form>
</div>
</div>
  @endsection
