<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\OfferteController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;

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

Route::get('/company', [CompanyController::class, 'index'])->middleware(['auth']);

Route::resource('companies', CompanyController::class)->middleware(['auth']);

Route::resource('category', CategoryController::class)->middleware(['auth']);

Route::resource('products', ProductsController::Class);

Route::resource('offerte',OfferteController::class);

// Dashboard

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/finance', function () {
    return view('dashboard/finance');})->name('finance');

Route::get('/inkoop', function () {
    return view('dashboard/inkoop');})->name('inkoop');

Route::get('/maintenance', function () {
    return view('dashboard/maintenance');})->name('maintenance');

// Route::get('/sales', function () {
//     return view('dashboard/sales');})->name('sales');

Route::resource('dashboard/sales', ClientController::Class);

require __DIR__.'/auth.php';
