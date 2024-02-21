<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CekLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth::check()){
            if(auth()->user()->hak_akses == 'petugas'){
                $hak_akses = ['dashboard', 'pelanggan'];
                if(in_array($request->route()->getName(), $hak_akses)){
                    return $next($request);
                } else {
                    abort(403, 'unauthorized');
                }
            } else if (auth()->user()->hak_akses == 'test'){
                $hak_akses = ['dashboard'];
                if(in_array($request->route()->getName(), $hak_akses)){
                    return $next($request);
                } else {
                    abort(403, 'unauthorized');
                }
            }
            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}
