<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Admin;

Route::post('get-customer',[Admin::class,'getCustomer']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
