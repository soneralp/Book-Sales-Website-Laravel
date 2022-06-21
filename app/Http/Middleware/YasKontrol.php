<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class YasKontrol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $yas = 17;
        if (yas<=17){
           return redirect('/yas-kontrol');
        }

        return $next($request);
    }
}





