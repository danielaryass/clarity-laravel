<?php

use Illuminate\Support\Facades\Route;
// use dashboard controller
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
// use produk controller
// testimoni controller 
use App\Http\Controllers\TestimoniController;
// report
use App\Http\Controllers\ReportController;
// use frontsite controller
use App\Http\Controllers\FrontsiteController;
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

Route::get('/', [FrontsiteController::class, 'home'])->name('home');
Route::get('/shop', [FrontsiteController::class, 'produk'])->name('shop');
Route::get('/about', [FrontsiteController::class, 'about'])->name('about');
Route::get('/support', [FrontsiteController::class, 'support'])->name('support');
Route::get('/shop/{id}', [FrontsiteController::class, 'produkdetail'])->name('produkdetail');
Route::get('/storeonline', [FrontsiteController::class, 'storeonline'])->name('storeonline');
Route::get('/storeoffline', [FrontsiteController::class, 'storeoffline'])->name('storeoffline');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('testimoni', TestimoniController::class);
    Route::resource('report', ReportController::class);



    });

