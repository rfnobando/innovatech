<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller {
    public function store(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);

        if( !Auth::attempt($credentials, $request->boolean('remember')) ) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        } 

        $request->session()->regenerate();
        $welcome = '¡Bienvenido ' . Auth::user()->name . '!';
        return redirect()->intended()->with('status', $welcome);
    }

    public function destroy(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login');
    }
}
