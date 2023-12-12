<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class SessionsController extends Controller
{
    public function create() 
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('name', 'password');
        if(Auth::attempt($credentials)) {

            return redirect()->intended('game');
        }

        return redirect('/')->withErrors(['message' => 'The provided credentials do not match our records.']);
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->to('/');
    }
}
