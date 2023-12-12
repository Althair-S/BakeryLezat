<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('user/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('admin', [HomeController::class, 'adminPage'])->name('admin.home')->defaults('page', 'adminHome');

    Route::get('admin/orders', [HomeController::class, 'adminPage'])->name('admin.orders')->defaults('page', 'orders');

    Route::get('admin/products', [HomeController::class, 'showProducts'])->name('admin.products')->defaults('page', 'products');
    Route::get('admin/products/create', [HomeController::class, 'create'])->name('admin.products.create')->defaults('page', 'products.create');
    Route::post('admin/products/store', [HomeController::class, 'store'])->name('admin.products.store');

    Route::get('admin/customers', [HomeController::class, 'adminPage'])->name('admin.customers')->defaults('page', 'customers');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
