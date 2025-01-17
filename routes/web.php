<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongsController;

Route::get('/', [SongsController::class, 'index'])->name('index');

Route::get('/song', [SongsController::class, 'show'])->name('song');

Route::get('/share', [SongsController::class, 'create'])->name('share');

Route::post('/share', [SongsController::class, 'store'])->name('share');

Route::get('/update', [SongsController::class, 'edit'])->name('edit');

Route::put('/update', [SongsController::class, 'update'])->name('update');

Route::delete('/index', [SongsController::class, 'destroy'])->name('delete');

