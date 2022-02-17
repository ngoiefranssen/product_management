<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\RegisterClient;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\StockController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\PeopleController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PurchaseController;
use App\Http\Controllers\Backend\SupplierController;
use App\Http\Controllers\Backend\DeliverieController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('home.main');
})->name('dashboard');
Route::get('home', function(){ return view('home.main'); });
Route::resource('roles', RoleController::class);

Route::resource('peoples', PeopleController::class);
Route::resource('categories', CategoryController::class);
Route::resource('suppliers', SupplierController::class);

Route::resource('products', ProductController::class);
Route::resource('stocks', StockController::class);
Route::resource('clients', ClientController::class);

Route::resource('purchases', PurchaseController::class);
Route::resource('deliveries', DeliverieController::class);
Route::resource('register_clients', RegisterClient::class);

Route::get('/delete/{id}', [RoleController::class, 'delete'])->name('role.delete'); // Delete from role
Route::get('/catergoryDelete/{id}', [CategoryController::class, 'categoryDelete'])->name('category.delete');
Route::get('/peopleDelete/{id}', [PeopleController::class, 'peopleDelete'])->name('peopleDelete.delete');

Route::get('/deleteSupplier/{id}', [SupplierController::class, 'deleteSupplier'])->name('deleteSupplier.delete');
Route::get('/deleteproduct/{id}', [ProductController::class, 'deleteproduct'])->name('deleteproduct.delete');
Route::get('/deleteClient/{id}', [ClientController::class, 'deleteClient'])->name('deleteClient.delete');
