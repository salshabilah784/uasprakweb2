<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AfterRegisterController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\AboutController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['auth','peran:-admin-manager']], function(){
Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[DashboardController::class, 'index']);
    Route::get('/logout',[DashboardController::class, 'logout']);
    Route::get('/produk',[ProdukController::class, 'index']);
    Route::get('/produk/create',[ProdukController::class, 'create']);
    Route::post('/produk/store',[ProdukController::class, 'store']);
    Route::get('/produk/edit/{id}',[ProdukController::class, 'edit']);
    Route::get('/produk/detail/{id}',[ProdukController::class, 'show']);
    Route::post('/produk/update/{id}',[ProdukController::class, 'update']);
    Route::get('/produk/delete/{id}',[ProdukController::class, 'destroy']);
    Route::get('/logout/delete/{id}',[DashboardController::class, 'logout']);

    Route::get('/jenis_produk',[JenisController::class, 'index']);
    Route::get('/jenis_produk/delete/{id}',[JenisController::class, 'destroy']);
    Route::get('/jenis_produk/create',[JenisController::class, 'create']);
    Route::post('/jenis_produk/store',[JenisController::class, 'store']);

    Route::get('/pelanggan',[PelangganController::class, 'index']);
    Route::get('/pelanggan/create',[PelangganController::class, 'create']);
    Route::post('/pelanggan/store',[PelangganController::class, 'store']);
    Route::get('/pelanggan/edit/{id}',[PelangganController::class, 'edit']);
    Route::post('/pelanggan/update/{id}',[PelangganController::class, 'update']);
    Route::get('/pelanggan/delete/{id}',[PelangganController::class, 'destroy']);
});
});

Route::prefix('views')->group(function(){
    Route::get('/after_register',[AfterRegisterController::class,'index']);
    Route::get('/shop',[ShopController::class,'index']);
    Route::get('/catalog',[CatalogController::class,'index']);
    Route::get('/about',[AboutController::class,'index']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
