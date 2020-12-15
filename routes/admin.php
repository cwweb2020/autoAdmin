<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;




Route::get('admin',[AdminController::class,'indexAdmin'])->name('index');

Route::get('admin/crear', [AdminController::class,'crear'])->name('admin.crear');

Route::post('store', [AdminController::class,'store'])->name('admin.store');

Route::get('admin/{id}/edit', [AdminController::class,'edit'])->name('admin.edit');

Route::put('admin/{id}', [AdminController::class,'update'])->name('admin.update');
