<?php

namespace App\Http\Middleware;

use App\Helper\WebResponse;
use Closure;
use Exception;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\JsonResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $user = auth('api')->userOrFail();
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\UserNotDefinedException){
                return WebResponse::webResponse(401, 'UNAUTHORIZED', null, 'Token Invalid');
            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return WebResponse::webResponse(401, 'UNAUTHORIZED', null, 'Token Expired');
            }else{
                return WebResponse::webResponse(401, 'UNAUTHORIZED', null, 'Token not found');
            }
        }
        return $next($request);
    }
}
