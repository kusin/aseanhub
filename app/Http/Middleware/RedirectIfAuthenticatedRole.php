<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticatedRole
{
    public function handle(Request $request, Closure $next): Response
    {
        // Urutan guard PENTING
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }

        if (Auth::guard('judge')->check()) {
            return redirect()->route('judges.dashboard');
        }

        if (Auth::guard('participant')->check()) {
            return redirect()->route('participants.dashboard');
        }

        if (Auth::guard('voter')->check()) {
            return redirect()->route('voters.dashboard');
        }

        return $next($request);
    }
}
