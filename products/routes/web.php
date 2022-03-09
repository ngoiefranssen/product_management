<?php

use App\Http\Controllers\Backend\AgentController;
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
use App\Models\Register_client;

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
Route::get('/deleterole/{id}', [RoleController::class, 'delete'])->name('role.delete'); // Delete from role

Route::resource('peoples', PeopleController::class);
Route::get('/peopleDelete/{id}', [PeopleController::class, 'peopleDelete'])->name('peopleDelete.delete');

Route::resource('categories', CategoryController::class);
Route::get('/catergoryDelete/{id}', [CategoryController::class, 'categoryDelete'])->name('category.delete');

Route::resource('suppliers', SupplierController::class);
Route::get('/deleteSupplier/{id}', [SupplierController::class, 'deleteSupplier'])->name('deleteSupplier.delete');

Route::resource('products', ProductController::class);
Route::get('/deleteproduct/{id}', [ProductController::class, 'deleteproduct'])->name('deleteproduct.delete');

Route::resource('stocks', StockController::class);
Route::resource('clients', ClientController::class);
Route::get('/deleteClient/{id}', [ClientController::class, 'deleteClient'])->name('deleteClient.delete');

Route::resource('purchases', PurchaseController::class);
Route::get('/delete_purchase.delete/{id}', [PurchaseController::class, 'delete_purchase'])->name('delete_purchase.delete');

Route::resource('deliveries', DeliverieController::class);
Route::get('/deleteDelivery/{id}', [DeliverieController::class , 'deleteDelivery'])->name('deleteDelivery.delete');

Route::resource('register_clients', RegisterClient::class);
Route::get('/register_clientDelete.delete/{id}', [RegisterClient::class , 'register_client_delete'])->name('register_clientDelete.delete');

Route::resource('agents', AgentController::class);
Route::get('/deleteAgent/{id}', [AgentController::class, 'agentDelete'])->name('agent.delete');
