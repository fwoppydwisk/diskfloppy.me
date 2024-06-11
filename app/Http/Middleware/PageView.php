<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use PostHog\PostHog;
use Symfony\Component\HttpFoundation\Response;

class PageView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        PostHog::capture([
            'distinctId' => request()->ip(),
            'event' => '$pageview',
            'properties' => array(
                '$current_url' => url()->current(),
            ),
        ]);
        return $next($request);
    }
}
