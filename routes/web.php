<?php

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

    Route::get('/', function () {
        return view('product.index');
    })->name('index');

Route::get('/add', function () {
    return view('product.add');
})->name('add');

Route::get('/{id?}', function (string $id = '123') {
    return view('product.detail', ['id' => $id]);
});

});
