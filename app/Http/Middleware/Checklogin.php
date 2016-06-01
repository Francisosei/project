<?php

namespace project\Http\Middleware;

use Closure;

class Checklogin
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
          //we have a logged user check if it's admin
            if($this->auth->user()->admin){
              return new RedirectResponse(url('/admin'));
            }else{
              return new RedirectResponse(url('/user'));
            }
        return $next($request);
    }
}
