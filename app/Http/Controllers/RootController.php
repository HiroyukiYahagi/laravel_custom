<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Services\ProductService;
use App\Services\TagService;

class RootController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService){
        $this->productService = $productService;
    }

    public function index(){
        $products = $this->productService->getAll();
        return view('root.index', [
            "products" => $products
        ]);
    }
}