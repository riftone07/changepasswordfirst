<?php

namespace riftone07\changepasswordfirst\Http\Middleware;

use Closure;
use Auth;
class PasswordExpired
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
       
       if (is_null(Auth::user()->password_changed_at)) {
        return redirect()->route('motdepasse.expired');
        
      }


      return $next($request);
    }
}
