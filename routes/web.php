<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',  [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/cart', [PageController::class, 'cart']);

Route::get('/checkout', [PageController::class, 'checkout']);

Route::get('/gallery', [PageController::class, 'gallery']);

Route::get('/my-account', [PageController::class, 'myAccount']);

Route::get('/shop-detail', [PageController::class, 'shopDetail']);

Route::get('/shop', [PageController::class, 'shop']);

Route::get('/wishlist', [PageController::class, 'wishlist']);

Route::get('/contact-us', [PageController::class, 'contactUs']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
