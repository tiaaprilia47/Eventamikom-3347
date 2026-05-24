<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $partners = \App\Models\Partner::latest()->get();

        return view('welcome', compact('partners'));
    }
}
