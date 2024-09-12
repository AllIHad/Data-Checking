<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function register()
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $validated = request()->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ]
        );

        // dd($request->username, $request->password);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/')->with('success', 'account successfully registered');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')->with('success', 'Logout successful');
    }
}
