<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Kategori
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if(in_array($request->user()->role, $roles)){
            return $next($request);
        }
        if(Auth::user()->role == 'Admin'){
            return Redirect::to('admin.home');
        }
        elseif(Auth::user()->role == 'Pengguna'){
            return Redirect::to('users.home');
        }
        return redirect('/')->with('error', "Data Tidak Terdaftar");
    }
}
