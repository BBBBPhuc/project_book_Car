<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ClientMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $check = Auth::guard('client')->check();
        if (!$check) {
            toastr()->error('Chưa Đăng Nhập Tài Khoản! Yêu Cầu Đăng Nhập');
            return redirect('/login&register');
        }
        return $next($request);
    }
}
