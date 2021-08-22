<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductApiResource;
use App\Models\Product;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $product = Product::all();
         return ProductApiResource::collection($product);
    }
}
