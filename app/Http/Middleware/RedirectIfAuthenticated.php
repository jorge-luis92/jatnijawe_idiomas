<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
   public function handle($request, Closure $next, $guard = null)
    {
      //$usuario_actual=\Auth::user();

/*      $usuario_actual=Auth::user()->tipo_usuario;
  if($usuario_actual == 'estudiante'){
     return $next($request);
  }
  if($usuario_actual=='1'){
     return $next($request);
  }
  if($usuario_actual=='4'){
     return $next($request);
  }
*/return $next($request);
    }
}
