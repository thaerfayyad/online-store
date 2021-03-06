<?php

use Illuminate\Support\Facades\Route;




// Auth::routes(['verify' => true]);

// ->middleware('verified');
////////////////////////////// the Dashboard Routes in admin.php File
/// this Route just for FrontEnd Route
////////////home page routes
Route::name('web.')->group(function (){
    Route::get('/home',[\App\Http\Controllers\Site\HomeController::class,'index'])->name('home');
    Route::get('/', [\App\Http\Controllers\Site\HomeController::class,'index'])->name('home');
    /// cart routes
    Route::get('cart',[\App\Http\Controllers\Site\ProductController::class,'cart'])->name('cart');
    Route::get('add-cart/{id}',[\App\Http\Controllers\Site\ProductController::class,'add_cart'])->name('add.cart');
    Route::get('update-cart/{id}',[\App\Http\Controllers\Site\ProductController::class,'update'])->name('update.cart');
    Route::get('destroy-cart/{id}',[\App\Http\Controllers\Site\ProductController::class,'destroy'])->name('destroy.cart');

// ///////////////////////products routes
    Route::resource('/products',\App\Http\Controllers\Site\ProductController::class);
//     ///////////login routes
    Route::get('/sign-in',[\App\Http\Controllers\Site\UserController::class,'get_sign_in'])->name('signin');
    Route::post('/sign-in',[\App\Http\Controllers\Site\UserController::class,'userLogin'])->name('users.signIn');
//     ////////////signup routes
    Route::get('/sign-up',[\App\Http\Controllers\Site\UserController::class,'get_sign_up'])->name('get.users.signup');
    Route::post('/store',[\App\Http\Controllers\Site\UserController::class,'sign_up'])->name('signup');
    Route::get('logout', [\App\Http\Controllers\Site\UserController::class,'log_out'])->name('user.logout');
});
