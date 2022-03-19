<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function store()
    {
        // Log out user
        auth()->logout();

        //redirect to homepage
        return redirect()->route('home');
    }
}
