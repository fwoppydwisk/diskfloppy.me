<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GuestbookValidate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (
            !$request->validate([
                'name' => 'required',
                'message' => 'required'
            ]) ||
            $this->containsUrl($request->get('message')) ||
            $this->containsUrl($request->get('name'))
        ) {
            return response()->view('errors.guestbook-invalid', [], 400);
        }
        return $next($request);
    }

    public function containsUrl($str) {
        $matches = [];
        $pattern = '/\b(?:https?|ftp|www)(:\/\/)*[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i';
        preg_match_all($pattern, $str, $matches);
        return count($matches[0]);
    }
}
