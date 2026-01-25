<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/test', function () {
    return response()->json(['message' => 'This is a test route']);
});
route::fallback(function(){
    return view('error.404');
});
route::get('/sinhvien/{name?}/{mssv?}', function($name = "Luong Xuan Hieu", $mssv = "123456"){
    return "Hello ban $name, MSSV: $mssv";
});
Route::get('/banco/{n}', function (int $n) {
    return view('banco', ['n' => $n]);
});

Route::prefix('product')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/detail/{id}', 'getDetail');
        Route::get('/create', 'create')->name('add');
        Route::post('/store', 'store');
    });
});
Route::prefix('authentication')->group(function () {
    Route::controller(AuthenticationController::class)->group(function () {
        Route::post('/checkLogin', 'checkLogin');
        Route::get('/login', 'login');
        Route::get('/register','register');
        route::post('/checkRegister','checkRegister');
    });
});



