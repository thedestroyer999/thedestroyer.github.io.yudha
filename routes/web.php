<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hallo');
});
use App\Http\Controllers\CongratulationController;
Route::get('/congratulation', [CongratulationController::class, 'showCongratulationPage'])->name('congratulation');
