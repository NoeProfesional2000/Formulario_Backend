<?php

use App\Http\Controllers\HabilityController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UserController::class, 'index']);
        Route::post('/', [UserController::class, 'store']);
        Route::post('/edit/{id}', [UserController::class, 'edit']);
        Route::post('/delete/{id}', [UserController::class, 'delete']);
    });
});