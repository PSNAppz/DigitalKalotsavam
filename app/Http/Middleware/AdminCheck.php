<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if(!Auth::User()->role==2){
        if ($request->ajax() || $request->wantsJson()) {
              return response('Unauthorized.', 401);
          } else {
              return redirect()->guest('login');
          }
      }
        return $next($request);
    }
}
