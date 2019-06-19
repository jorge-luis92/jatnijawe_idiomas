<?php

namespace App\Http\Middleware;

use Closure;
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
      $usuario_actual=\Auth::user();
      if($usuario_actual->tipo_usuario=='1'){
         return $next($request);
      }
      if($usuario_actual->tipo_usuario=='4'){
         return $next($request);
      }

    }
}
