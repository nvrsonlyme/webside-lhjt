<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UnitKerja
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$unit_kerja)
    {
        if(in_array($request->user()->unit_kerja, $unit_kerja)){
            return $next($request);
        }
        if(Auth::user()->unit_kerja == 'Admin'){
            return Redirect::to('admin.home');
        }
        elseif(Auth::user()->unit_kerja == 'Cakung'){
            return Redirect::to('admin.home');
        }
        elseif(Auth::user()->unit_kerja == 'Cipayung'){
            return Redirect::to('admin.home');
        }
        elseif(Auth::user()->unit_kerja == 'Ciracas'){
            return Redirect::to('admin.home');
        }
        elseif(Auth::user()->unit_kerja == 'Duren Sawit'){
            return Redirect::to('admin.home');
        }
        elseif(Auth::user()->unit_kerja == 'Jatinegara'){
            return Redirect::to('admin.home');
        }
        elseif(Auth::user()->unit_kerja == 'Kramat Jati'){
            return Redirect::to('admin.home');
        }
        elseif(Auth::user()->unit_kerja == 'Makasar'){
            return Redirect::to('admin.home');
        }
        elseif(Auth::user()->unit_kerja == 'Matraman'){
            return Redirect::to('admin.home');
        }
        elseif(Auth::user()->unit_kerja == 'Pasar Rebo'){
            return Redirect::to('admin.home');
        }
        elseif(Auth::user()->unit_kerja == 'Pulogadung'){
            return Redirect::to('admin.home');
        }
        return redirect('/')->with('error', "Data Tidak Terdaftar");
    }
}
