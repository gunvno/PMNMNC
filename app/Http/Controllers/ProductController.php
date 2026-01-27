<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckTimeAccess;
use Illuminate\Http\Request;

class ProductController extends Controller implements CheckTimeAccess
{
    //
    public function middleware(){
        return [
            CheckTimeAccess::class,
        ];
    }
    public function index()
    {
        $title = "Product List";
        return view('product.index',['title' => $title,
        'products' => [
            ['name' => 'Product 1', 'price' => 100],
            ['name' => 'Product 2', 'price' => 200],
            ['name' => 'Product 3', 'price' => 300]
        ]]);
    }
    public function getDetail($id = '123')
    {
        return view('product.detail', ['id' => $id]);
    }
    public function create() {
        return view('product.add');
    }
    public function store(Request $request) {
        return $request->all();
    }
}
