<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $validated = request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]
        );

        if (Auth::attempt($validated)) {
            return redirect('/dashboard')->with('success', 'authentication successful');
        };

        return back()->with('error', 'authentication failed');
    }

    public function create(Request $request)
    {
        $validated = request()->validate(
            [
                'name' => 'required',
                'username' => 'required',
                'password' => 'required'
            ]
        );

        // dd($request);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/')->with('success', 'account successfully registered');
    }

    public function register(){
        return view('register');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')->with('success', 'logout successful');
    }
}
