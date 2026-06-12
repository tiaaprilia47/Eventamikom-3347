<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function create(Event $event)
    {
        // Mengambil daftar kategori untuk keperluan menu footer
        $categories = \App\Models\Category::all();

        return view('checkout.create', compact('event', 'categories'));
    }

    public function store(Request $request, Event $event)
    {
        // 1. Validasi Input sesuai name attribute di form Blade
        $request->validate([
            'customer_name'  => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
        ]);

        // 2. Tambahkan Ongkos Admin Rp 5.000 ke harga tiket asli
        $biayaAdmin = 5000;
        $totalHarga = $event->price + $biayaAdmin;

        // 3. Simpan Pesanan Fiktif ke Database
        Transaction::create([
            'event_id'       => $event->id,
            'order_id'       => 'INV-' . strtoupper(Str::random(8)),
            'customer_name'  => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_phone' => $request->customer_phone,
            'total_price'    => $totalHarga,
            'status'         => 'PENDING', // Status default dummy
            'snap_token'     => null,
        ]);

        // 4. Kurangi stok tiket jika diperlukan
        if ($event->stock > 0) {
            $event->decrement('stock');
        }

        // 5. Kembalikan ke halaman utama dengan pesan sukses
        return redirect()->route('home')->with('success', 'Pesanan uji coba berhasil disimpan! Silakan cek menu transaksi di Panel Admin.');
    }
}