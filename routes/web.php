<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\CheckTimeAccess;
use App\Http\Middleware\CheckAgeAccess;
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

Route::prefix('pronduct')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/', 'index')->middleware(CheckTimeAccess::class);
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
        route::post('/checkRegister','checkRegister')->middleware(CheckAgeAccess::class);
    });
});
Route::resource('test',TestController::class);



