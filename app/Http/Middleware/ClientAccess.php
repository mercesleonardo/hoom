<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ClientAccess
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
        if(auth()->check() AND auth()->user()->options == 0) {
            return $next($request);
        }
        // dd('Acesso negado, você não é um cliente');
        return redirect()->route('client.login');
    }
}
