<?php

use Illuminate\Support\Facades\Route;

Route::post('/result', [App\Http\Controllers\AlgorithmController::class, 'calculate']);
