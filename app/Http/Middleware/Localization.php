<?php

namespace App\Http\Middleware;

use Closure;

class Localization
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
        if($request->query('locale'))
        {
            \App::setlocale($request->query('locale'));
            session(['locale' => $request->query('locale')]);

        }else if(\Session::has('locale')){
            \App::setlocale(\Session::get('locale'));
        }else{
            \App::setlocale("ar");
        }
           
        return $next($request);
    }

    
}
