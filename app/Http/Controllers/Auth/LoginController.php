<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $isLoggedIn = Auth::attempt($request->only('email', 'password'));
        if (!$isLoggedIn) {
            return back()->with('status', 'Invalid Login Details');
        }

        return redirect()->route('dashboard');
    }
}
