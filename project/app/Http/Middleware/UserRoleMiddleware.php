<?php

namespace App\Http\Middleware;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $userRole = $request->user()->role;
        $banOrNot = $request->user()->isbanned;

        if ($role == 'admin') {
            if ($userRole !== 2 || $banOrNot === 1) {
                abort(403);
            }
        }
         if ($role == 'user') {
             if ($banOrNot === 1) {
                return redirect('/');
             }
         }
       

        return $next($request);
    }
}
