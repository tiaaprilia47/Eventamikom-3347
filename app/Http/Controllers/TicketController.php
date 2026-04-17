<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TickerController extends Controller
{
    //
    public function index()
    {
        return view('ticket');
    }
}
