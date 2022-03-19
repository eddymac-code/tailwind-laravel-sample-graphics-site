<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        //validate user
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        //sign in user or throw  an error in case of wrong credentials.
        if (!auth()->attempt($request->only('email', 'password'), $request->remember))
        {
            return back()->with('status', 'Invalid login credentials');
        };

        //redirect user
        return redirect()->route('dashboard');
    }
}


