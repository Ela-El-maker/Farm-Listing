<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('admin.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // dd(Auth::guard('admin')->attempt($request->only('email', 'password')));

        $request->authenticate('admin');

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::ADMIN_DASHBOARD);
    }
    // public function store(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::guard('admin')->attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect()->intended(RouteServiceProvider::ADMIN_DASHBOARD);
    //     }

    //     return back()->withErrors([
    //         'email' => 'These credentials do not match our records.',
    //     ]);
    // }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
