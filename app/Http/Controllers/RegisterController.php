<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view ('register.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request -> validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users|max:255',
            'password' => 'min:5|max:255|required|confirmed',
            // 'password_confirmation' => 'required|min:5',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('registration_succes','Registration succes!');
    }
}
