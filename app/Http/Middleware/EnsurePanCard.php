<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class EnsurePanCard
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
        if (!is_null(Auth::user()) && Auth::user()->pan != NULL)
        {
          return $next($request);
        }else{
          return redirect('upload-pan');
        }
    }
}
