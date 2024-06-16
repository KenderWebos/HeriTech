<?php

namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;
use Illuminate\Auth\Events\Registered;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required|max:255|min:2',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'terms' => 'required'
        ]);
         
        $user = User::create($attributes);

        event(new Registered($user)); // envia email de verificacion al registrarse un usuario
        
        auth()->login($user);

        // return redirect('/dashboard');
        return redirect('/email/verify');
    }
}
