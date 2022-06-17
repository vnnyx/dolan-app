<?php

namespace App\Http\Middleware;

use App\Helper\WebResponse;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class UserMiddleware
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
        $user = User::where('username', '=', auth('api')->payload()->get('username'));
        if ($user == null){
            return WebResponse::webResponse(401, 'UNAUTHORIZED', null, 'UNAUTHORIZED');
        }
        return $next($request);
    }
}
