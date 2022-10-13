<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Product;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\OfferteController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CompanyController;
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

Route::get('/', [PagesController::class, 'home']);

Route::resource('companies', CompanyController::class);

Route::resource('products', ProductsController::Class);

Route::resource('offerte',OfferteController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
