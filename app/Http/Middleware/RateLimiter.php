<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class RateLimiter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            return $next($request);
        }
        $ipAddress = $request->ip();
        $cacheKey = 'rate_limit_'.$ipAddress;

        if (Cache::has($cacheKey)) {
            // If the cache key exists, the IP has submitted an entry within the last hour.
            return response()->view('errors.guestbook-ratelimit', [], 429);
        }

        // Add the IP address to the cache and set the expiration time to one hour.
        Cache::put($cacheKey, true, 3600);

        return $next($request);
    }
}
