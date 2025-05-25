<?php

use Illuminate\Http\Request;

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('hello',function(Request $request){
    return 'test hello';
});

Route::post('/register',[AuthController::class,'register']);