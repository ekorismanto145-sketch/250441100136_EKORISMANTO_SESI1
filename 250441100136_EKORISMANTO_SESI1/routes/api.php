<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayananController;

Route::get('layanan', function (Request $request) {
    return 
    $request->layanan();
})->middleware('auth:sanctum');
