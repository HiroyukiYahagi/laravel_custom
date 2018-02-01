<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ProductService;

class IndexController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->middleware('auth:web');
        $this->productService = $productService;
    }

    public function mypage(){
        $products = $this->productService->getAll();
        return view("admin.mypage", [
            "products" => $products
        ]);
    }
}
