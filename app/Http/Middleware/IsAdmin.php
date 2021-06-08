<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Auth;

<<<<<<< HEAD
class IsAdmin
{
    
=======

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
>>>>>>> e44c87904599f61e54f3f9d6489bd5a784a81def
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->isAdmin) {
            return $next($request );
        }
         return redirect()->route('/');
    }
<<<<<<< HEAD
=======

>>>>>>> e44c87904599f61e54f3f9d6489bd5a784a81def
}
