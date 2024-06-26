<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class APIClientMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $check = Auth::guard('client')->check();

        if ($check) {
            return $next($request);
        }

        return response()->json([
            'status'    => 0,
            'typeErr'   => 0,
            'message'   => 'Bạn chưa đăng nhập tài khoản!',
        ]);

    }
}
