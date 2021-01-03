<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class,'index'])->name('home.index');

Route::get('/mostrar{categoria}', [HomeController::class,'show']);

Route::get('/contacto', [HomeController::class,'contact'])->name('contacto.contact');

Route::post('contacto', [ContactController::class,'store'])->name('contacto.store');






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
