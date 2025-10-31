<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\AktifitasController;
use App\Http\Controllers\KontakController;

Route::get('/', [BerandaController::class, 'index']);

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // ✅ PERBAIKAN: Route GET untuk halaman login
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form'); // ✅ TAMBAHKAN INI
    
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
    Route::middleware(['auth','is_admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });
});

Route::get('/datadiri', [DataDiriController::class, 'index']);
Route::resource('aktifitas', AktifitasController::class)->names([
'index' => 'aktifitas.index',
'create' => 'aktifitas.create',
'store' => 'aktifitas.store',
'edit' => 'aktifitas.edit',
'update' => 'aktifitas.update',
'destroy' => 'aktifitas.destroy'
]);
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak/kirim', [KontakController::class, 'kirim']);