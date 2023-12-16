<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', [ProductController::class,'index'])->name('products.index');
// Route::get('/products/create', [ProductController::class,'create'])->name('products.create');
// Route::post('/products/store', [ProductController::class,'store'])->name('products.store');
// Route::get('products/{id}/edit', [ProductController::class,'edit']);
// Route::put('products/{id}/update',[ProductController::class,'update']);
// // Route::get('products/{id}/delete',[ProductController::class,'destroy']);
// Route::delete('products/{id}/delete',[ProductController::class,'destroy']);
// Route::get('products/{id}/show',[ProductController::class,'show']);


Route::get('/', [ProductController::class,'index']);

// group prefix
// Route::prefix('products')->group(function(){
//     Route::get('/create', [ProductController::class,'create']);
//     Route::post('/store', [ProductController::class,'store']);
//     Route::get('/{id}/edit', [ProductController::class,'edit']);
//     Route::put('/{id}/update', [ProductController::class,'update']);
//     Route::delete('/{id}/delete', [ProductController::class,'destroy']);
//     Route::get('/{id}/show', [ProductController::class,'show']);
// });


// gorup controller
Route::controller(ProductController::class)->group(function(){
    Route::prefix('products')->group(function(){
        Route::get('/create','create');
        Route::post('/store','store');
        Route::get('/{id}/edit','edit');
        Route::put('/{id}/update','update');
        Route::delete('/{id}/delete','destroy');
        Route::get('/{id}/show','show');
    });
});

// this is for changing 404 not found page
Route::fallback(function(){
    return "<h1>Page Not Foound</h1>";
});


// testing include subviews
Route::get('/welcome',function(){
    return view('welcome');
});
