<?php

use App\Http\Controllers\Api\barangApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//CRUD Barang
route::apiResource('barang',barangApiController::class);