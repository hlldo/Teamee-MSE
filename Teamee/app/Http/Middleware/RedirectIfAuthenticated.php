<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
    public function handle($request, Closure $next, $guard = null)
    {
      // if (Auth::guard($guard)->check()) {
      //     return redirect('/');
      // }


    //   if (Auth::guard($guard)->guest()) {
     //
    //    if ($request->ajax() || $request->wantsJson()) {
    //      return response('Unauthorized.', 401);
    //     } else {
    //      Session::put('oldUrl', $request->url());
    //      return  redirect()->route('login');
    //    }
    //  }


        switch ($guard) {
          case 'admin':
            if (Auth::guard($guard)->check()) {
              return redirect()->route('admin.dashboard');
            }
            break;

            default:
            if (Auth::guard($guard)->check()) {
              return redirect('/user-dashboard');
           }
           break;

        }

        //if (Auth::guard($guard)->check()) {
        //    return redirect('/home');
      //  }

        return $next($request);
    }
}
