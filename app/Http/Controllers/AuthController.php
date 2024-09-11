<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('welcome');
    }

    public function authenticate(Request $request)
    {
        $validate = request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($validate)) {
            return redirect('/dashboard')->with('success', 'Authentication successful');
        };

        return back()->with('error', 'Authentication failed');
    }

    public function logout() {
        Auth::logout();

        return redirect('/')->with('success', 'Logout successful');
    }
}
