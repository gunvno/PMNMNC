<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view( 'hello');
});
Route::get('/test', function () {
    return response()->json(['message' => 'This is a test route']);
});
route::fallback(function(){
    return view('error.404');
});

Route::prefix('product')->group(function () {

    Route::get('/', function () {
        return view('product.index');
    })->name('index');

Route::get('/add', function () {
    return view('product.add');
})->name('add');

Route::get('/{id}', function ($id) {
    return view('product.detail', ['id' => $id]);
})->name('detail');

});
