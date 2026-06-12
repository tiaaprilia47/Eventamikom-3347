<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Import model Event
use App\Models\Partner; // Import model Partner agar kode di bawah lebih rapi

class HomeController extends Controller
{
    public function index()
    {
        // 1. Ambil data partner terbaru
        $partners = Partner::latest()->get();

        // 2. Ambil data event terbaru untuk ditampilkan di bagian "Event Terdekat"
        // Kita ambil semua atau bisa dibatasi menggunakan ->take(6) jika terlalu banyak
        $events = Event::with('category')->latest()->get();

        // 3. Kirim kedua variabel ($partners dan $events) ke view 'welcome'
        return view('welcome', compact('partners', 'events'));
    }
}
