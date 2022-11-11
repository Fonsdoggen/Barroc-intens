<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\FactuurController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\QuotationController;
use App\Models\Product;
use App\Http\Controllers\AccountController;
use App\Http\Livewire\Calendar;
use App\Http\Controllers\FullCalenderController;
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

Route::resource('products', ProductsController::class);

Route::resource('factuur', InvoiceController::class);

Route::resource('quotation', QuotationController::class);

Route::resource('accounts', AccountController::class);

Route::get('/maintenance', function () {
    return view('dashboard/maintenance');})->name('maintenance');

// Dashboard

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('dashboard/finance', FinanceController::Class);

Route::get('/inkoop', function () {
    $products = Product::all();
    return view('dashboard/inkoop', ['products' => $products]);})->name('inkoop');


Route::get('/maintenance', function () {
    return view('dashboard/maintenance');})->name('maintenance');
// Route::get('/sales', function () {
//     return view('dashboard/sales');})->name('sales');

Route::resource('dashboard/sales', ClientController::Class);

Route::get('full-calender', [FullCalenderController::class, 'index']);

Route::post('full-calender/action', [FullCalenderController::class, 'action']);



require __DIR__.'/auth.php';
