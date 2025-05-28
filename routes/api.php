<?php

use App\Http\Controllers\{AuthController,CategoriesController,CustomerController, OrganizationController};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::controller(AuthController::class)->group(function(){
    Route::get('/users','index');
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::post('/logout','logout');
});


Route::controller(CategoriesController::class)->group(function(){
    Route::post('/store-category','store');
});



Route::controller(CustomerController::class)->group(function(){
    Route::post('store-customer','store');
});


Route::controller(OrganizationController::class)->group(function(){
    Route::post('store-organization','store');
});


Route::get('/', function() {
    return response()->json([
        'status' => 'success',
        'message' => 'Welcome to the API',
    ]);
});