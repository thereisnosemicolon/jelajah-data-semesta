<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin 
{
 
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->is_admin == true){
            return $next($request);
        }       
        return response()->json(['messages'=>'Unauthenticated'],400);
    }

}
