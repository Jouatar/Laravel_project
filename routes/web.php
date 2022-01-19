<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DpController;

Route::get('/', function () {return view('welcome');});

Route::get('pattern', [DpController::class, 'index']);
Route::get('pattern/{n}', [DpController::class, 'show'])->where('n', '[0-9]+');