<?php

use App\Http\Controllers\HabilityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'hability'], function () {
        Route::get('/', [HabilityController::class, 'index']);
    });
});