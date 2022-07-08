<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    // public function authenticate(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => 'required|email:dns',
    //         'password' => 'required'
    //     ]);
        
    //     if(Auth::attempt($credentials)){
    //         $request->session()->regenerate();

    //         return redirect()->intended('/');
    //     }

    //     return back()->with('loginError','Login failed!');
    // }

    public function authenticate(Request $request)
    {


        try {
            $credentials = $request->validate([
                'email' => 'required|email:dns',
                'password' => 'required'
            ]);
        } catch (Throwable $e) {

            if (Auth::attempt(['name' => $request['email'], 'password' => $request['password']])) {
                dd('login dengan Nama');
            }

            return back()->with('loginError', 'Login failed!');

            // return false;
        }



        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login failed!');
    }

    

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
