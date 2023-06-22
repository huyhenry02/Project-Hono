<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class AuthClient
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
        if(!Auth::guard('api')->check()){
            return redirect()->route('login_client.index')->with('no','Vui lòng đăng nhập vào hệ thống');
        }elseif (Auth::guard('api')->user()->status == 0){
            Auth::guard('api')->logout();
            return redirect()->route('login_client.index')->with('no','tài khoảng chưa được kích hoạt');
        }
        return $next($request);
    }
}
