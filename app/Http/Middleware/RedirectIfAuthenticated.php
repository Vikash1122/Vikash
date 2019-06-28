<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    // public function handle($request, Closure $next, $guard = null)
    // {
    //     if (Auth::guard($guard)->check()) {
    //         return redirect('/home');
    //     }

    //     return $next($request);
    // }

    public function handle($request, Closure $next, $guard = null)
    {
      switch ($guard) {
        case 'admin':
          if (Auth::guard($guard)->check()) {
           //print_r("asldjf");die;
            return redirect()->route('admin.dashboard');
          }
          break;
          case 'doctor':
          if (Auth::guard($guard)->check()) {
            return redirect()->route('doctor.dashboard');
          }
          break;
          case 'consultant':
          if (Auth::guard($guard)->check()) {
            return redirect()->route('consultant.dashboard');
          }
          break;
        default:
          if (Auth::guard($guard)->check()) {
              return redirect('/');
          }
          break;
      }
      //print_r("alsdfjklsadk");die;
      return $next($request);
    }
}
