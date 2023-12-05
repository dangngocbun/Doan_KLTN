<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get ('/',[ProductController::class, 'index']);



// gộp nhóm route
Route::prefix('admin')->group(function(){
    
    Route::get('posts/{post}/comments/{comment}', function($postID,$commentId){
        return "postID: $postID -commentId: $commentId";  
    });

    Route::get('user/{name}', function($name= 'Báo'){
        return $name;
    });

});

Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::resource('order_item', OrderItemController::class);
Route::post('/checkout', [OrderController::class,'checkout'])->name('checkout');


Route::get('/child',function(){
    return view('child');
});
Route::group(['prefix' => 'admin'], function(){
    Route::resource('users',App\Http\Controllers\Admin\UserController::class,['names' => 'admin.users']);

    Route::resource('products', App\Http\Controllers\Admin\ProductController::class, ['names' => 'admin.products']);

    //

    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class, ['names' => 'admin.categories']);
   
    Route::resource('orders', App\Http\Controllers\Admin\OrderController::class, ['names' => 'admin.orders']);
   
});
Auth::routes();

Route::get('/home', [ProductController::class, 'index'])->name('home');
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove_from_cart');
Route::get('/search', [ProductController::class, 'search'])->name('search');
