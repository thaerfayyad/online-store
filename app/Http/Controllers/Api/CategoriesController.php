<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ProductApiResource;
use App\Http\Resources\CategoryApiResource;

use App\Models\Category;

class CategoriesController extends Controller
{
 public function index()
 {
    $category = Category::all();
    return CategoryApiResource::collection($category);
 }
}
