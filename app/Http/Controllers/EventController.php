<?php

namespace App\Http\Controllers;

use App\Models\Event; // Pastikan Model Event diimport
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Ubah fungsi show agar menerima parameter Event secara otomatis (Route Model Binding)
    public function show(Event $event)
    {
        // Memuat relasi kategori agar nama kategorinya tidak kosong/error
        $event->load('category');

        // Mengirimkan variabel $event ke file view event-detail
        return view('event-detail', compact('event'));
    }
}