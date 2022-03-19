<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //validate user
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed'
        ]);

        //store user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        //sign in user
            //a longer method - I'll comment this out

        /*
        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        */

             //cleaner method - I'll use this
        auth()->attempt($request->only('email', 'password'));

        //redirect
        return redirect()->route('dashboard');

    }
}
