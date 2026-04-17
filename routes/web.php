<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController; // Pastikan ini diimport
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\TickerController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\EventController as AdminEventController;

// Rute User Area
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/event/1', [EventController::class, 'show'])->name('events.show');
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout');
Route::get('/my-ticket', [TickerController::class, 'show'])->name('ticket');

// Rute Admin Area
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    // Jika Anda ingin mengelola event di admin, arahkan ke method di controller admin nantinya
    // Route::get('/events', [AdminEventController::class, 'index'])->name('events.index');
});





// Rute Admin Area
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    // Kelola Event
    Route::get('/events', [AdminEventController::class, 'index'])->name('events.index');
    
    // Laporan Transaksi
    Route::get('/transactions', [DashboardController::class, 'transactions'])->name('transactions.index');
});