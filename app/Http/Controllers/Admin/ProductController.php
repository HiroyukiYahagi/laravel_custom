<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ProductService;
use App\Models\Product;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->middleware('auth:web');
        $this->productService = $productService;
    }

    public function add(Request $request){
        $product = $this->productService->add($request->input("url"));
        return back();
    }

    public function edit(Request $request, Product $product){
        $products = $this->productService->edit($product->id, $request->all());
        return back();
    }

    public function delete(Product $product){
        $products = $this->productService->delete($product->id);
        return back();
    }
}
