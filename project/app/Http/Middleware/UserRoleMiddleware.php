<?php

namespace App\Http\Middleware;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


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
            if ($userRole !== 2){
                abort(403);
            }
        }
         if ($role == 'user' || $role == 'admin') {
             if ($banOrNot === 1) {
                Auth::guard('web')->logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
 
                 return redirect('/')->with('error', 'Your Account has been deactivated');
             }
         }
       

        return $next($request);
    }
}
