<?php

use App\Http\Controllers\{CustomerController, LeadController, ProductController};
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::patch('/product/status/{id}',[ProductController::class, 'status'])->name('product.status');
Route::resource('product', ProductController::class)
    ->only(['index', 'store', 'create', 'show', 'edit', 'update', 'destroy']);


Route::patch('/customer/status/{id}', [CustomerController::class, 'status'])->name('customer.status');
Route::resource('customer', CustomerController::class)
    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);



Route::get('/lead/{id}/stages/{stage}',[LeadController::class, 'stages'])->name('lead.stages');
Route::patch('/lead/status/{id}', [LeadController::class, 'status'])->name('lead.status');
Route::resource('lead', LeadController::class)
    ->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);




Route::get('/dashboard', function () {
    return view('layout.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Original - Breeze
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
