<?php

use App\Http\Controllers\GerarPdfController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {


    // $users = DB::table('users')->insert([
    //     'name' => 'John Doe',
    //     'email' => 'lilito@gmail.com',
    //     'password' => '12345678',
    // ]);

    //$users = User::get();

    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/generate-pdf', [GerarPdfController::class, 'index'])->name('generate-pdf.generate');
});

require __DIR__ . '/auth.php';
