<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = $request->user();   // null if guest

        // redirect to login if not authenticated
        if (! $user) {
            return redirect()->route('login');
        }

        // redirect to respective homepage/dashboard based on user role
        if (! in_array($user->role, $roles, true)) {
            return redirect($this->redirectPathForRole($user->role));
        }

        return $next($request);
    }

    protected function redirectPathForRole(string $role): string
    {
        return match ($role) {
            'admin' => '/dashboard',
            'user' => '/products',
            default => '/login',
        };
    }
}
