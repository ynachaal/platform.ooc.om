<?php

namespace App\Http\Middleware;

use Closure;
use App;

class Language
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
        if(session()->get('mylocale') == null || empty(session()->get('mylocale'))){
            session()->put('mylocale','ar');
        }
        App::setLocale(session()->get('mylocale'));
        return $next($request);
    }
}
