<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsAdmin
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if (!$user || !in_array(strtolower((string)($user->role ?? '')), ['admin', 'administrator'])) {
            return response()->json([
                'success' => false,
                'message' => 'Forbidden: Admins only.'
            ], 403);
        }

        return $next($request);
    }
}



