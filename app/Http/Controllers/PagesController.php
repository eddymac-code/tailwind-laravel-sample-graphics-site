<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('acme.index');
    }

    public function about()
    {
        return view('acme.about');
    }

    public function gallery()
    {
        $data = Entry::all();

        return view('acme.gallery', [
            'data' => $data
        ]);
    }
}
