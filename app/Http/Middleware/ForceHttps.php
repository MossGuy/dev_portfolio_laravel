<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\URL;

class ForceHttps
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Alleen in productie forceren
        if (app()->environment('production')) {
            URL::forceScheme('https');

            // Optioneel: als iemand per ongeluk via http komt, redirect naar https
            if (!$request->secure()) {
                return redirect()->secure($request->getRequestUri());
            }
        }

        return $next($request);
    }
}
