<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::controller(AuthController::class)->group(function(){
    Route::get('/users','index');
    Route::post('/register', [AuthController::class,'register']);
});




Route::get('/', function() {
    return response()->json([
        'status' => 'success',
        'message' => 'Welcome to the API',
    ]);
});