<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->get('/api/call-test', function (Request $request) {
    return [];
});

Route::middleware('auth:api')->get('/api/user-test', function (Request $request) {
    return $request->user();
});



