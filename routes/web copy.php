<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('layout.index');
});
