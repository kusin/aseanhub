<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        # step 1.
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        # step 2.
        $credentials = $request->only('email', 'password');

        # step 3.
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        if (Auth::guard('judge')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('judges.dashboard');
        }

        if (Auth::guard('participant')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('participants.dashboard');
        }

        if (Auth::guard('voter')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('voters.dashboard');
        }

        return back()->withErrors([
            'email' => 'Make sure your email and password are correct',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        // Daftar guard yang kita pakai
        $guards = ['admin', 'judge', 'participant', 'voter'];

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                Auth::guard($guard)->logout();
                break;
            }
        }

        // Invalidate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
