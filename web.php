<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PesanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/kenalan', [FormController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/pesan', [PesanController::class, 'index']);
Route::post('/pesan', [PesanController::class, 'store']);