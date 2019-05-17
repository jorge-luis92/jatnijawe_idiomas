@extends('layouts.plantillaperfil')
@section('title')
: Estudiante
@endsection

@section('seccion')
  <div class="container" align="center" >
    <h1 style="font-size: 33px; color: #000000">Bienvenido</h1>
    <h2 style="font-size: 15px; color: #000000" align="center">Ingresa tus datos para acceder al sistema</h2>
        <div class="form">
          <form method="POST" action="{{ route('login_studiante') }}">
              @csrf
         <div class="form-group has-feedback">
           <input id="email" type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

           @error('email')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
         </div>
         <div class="form-group has-feedback">
           <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

           @error('password')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
         </div>
           <button class="btn btn-outline-primary" name="ingresar" type="submit">  {{ __('Ingresar') }}</button>
                </br>
                </br>
                  <div class="opcioncontra" ><a href="../recuperar/recuperar.php" style="color: black">¿Olvidaste tu contraseña?</a>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>

       </form>
</div>
</div>

<script>
function numeros(e){
 key = e.keyCode || e.which;
 tecla = String.fromCharCode(key).toLowerCase();
 letras = " 0123456789";
 especiales = [8,37,39,46];

 tecla_especial = false
 for(var i in especiales){
if(key == especiales[i]){
  tecla_especial = true;
  break;
     }
 }

 if(letras.indexOf(tecla)==-1 && !tecla_especial)
     return false;
}
</script>
  @endsection
