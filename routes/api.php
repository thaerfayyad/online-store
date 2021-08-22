<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('get_all_category',[\App\Http\Controllers\Api\CategoriesController::class,'index']);
Route::get('all_products',[\App\Http\Controllers\Api\ProductsController::class,'index']);
// Route::post('login', [\App\Http\Controllers\Api\AuthController::class,'login']);

Route::group(['middleware' => ['auth:api']], function () {


 });
