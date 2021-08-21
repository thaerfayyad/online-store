<?php

use Illuminate\Support\Facades\Route;
Route::group(['prefix' => 'dashboard'], function (){
        Route::get('/', [\App\Http\Controllers\Dashboard\DashboradController::class,'index'])->name('dashboard');
        Route::get('logout', 'AdminController@log_out')->name('admin.logout');
        Route::resource('/users', 'UserController');
        Route::resource('/categories',\App\Http\Controllers\Dashboard\CategoryController::class);
        Route::resource('/products',\App\Http\Controllers\Dashboard\ProductController::class);
    });
Route::group(['prefix' => 'dashboard'], function () {

    Route::get('login', [\App\Http\Controllers\Dashboard\AdminController::class,'getLogin'])->name('admin.get.login');
    Route::post('login', 'AdminController@login')->name('admin.login');
});
