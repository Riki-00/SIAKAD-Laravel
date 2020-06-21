<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
// use ill

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        $user = $request->input('email');
        $pass = $request->input('password');
        $role = $request->input('role');


        if (Auth::attempt((['email' => $user, 'password' => $pass, 'role' => '1']))) {
            return redirect('/admin/index');
        } else
        if (Auth::attempt((['email' => $user, 'password' => $pass, 'role' =>  '2']))) {
            return redirect('/guru/index');
        } else
        if (Auth::attempt((['email' => $user, 'password' => $pass, 'role' =>  '3']))) {
            return redirect('/siswa/index');
        }
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
        Session::flush();
        // if (Auth::attempt(['email' => $email, 'password' => $password]))
    }
}
