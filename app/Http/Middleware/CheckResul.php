<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Result;

class CheckResul
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
        $cekSpin = Result::where('user_id', Auth::user()->id)->first();
        if(!isset($cekSpin)){
            return redirect()->route('spin');
        }
        return $next($request);
    }
}
