<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create() 
    {
        return view('register');
    }
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|unique:users',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8'
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/game');
    }
}
