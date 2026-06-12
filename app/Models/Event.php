<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'category_id', 'title', 'description', 'date',
        'location', 'price', 'stock', 'poster_path'
    ];

    // Tambahkan casting di sini agar kolom 'date' otomatis menjadi objek Carbon/Tanggal
    protected $casts = [
        'date' => 'date',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}