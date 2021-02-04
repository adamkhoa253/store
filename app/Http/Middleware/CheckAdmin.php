<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   if(Auth::guest()){
        return redirect()->route('admin.login')->with('danger','Bạn phải đăng nhập để thực hiện quyền này');
    }
        return $next($request);
    }
}