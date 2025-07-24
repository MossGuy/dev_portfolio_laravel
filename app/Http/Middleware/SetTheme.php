<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetTheme
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $sessionTheme = $request->session()->get('theme');
        $cookieTheme = $request->cookie('theme');

        // 1. Als sessie bestaat, niets doen
        if ($sessionTheme) {
            return $next($request);
        }

        // 2. Als cookie bestaat, zet deze in sessie
        if ($cookieTheme) {
            $request->session()->put('theme', $cookieTheme);
            return $next($request);
        }

        // 3. Geen sessie of cookie → zet default thema
        $defaultTheme = 'basic_white';
        $request->session()->put('theme', $defaultTheme);
        cookie()->queue('theme', $defaultTheme, 60 * 24 * 30); // 30 dagen

        return $next($request);
    }
}
