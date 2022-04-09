<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'checkRole:admin'], function() {
    Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('admin.index');
});

Route::group(['middleware'=>'checkRole:vendor', 'prefix'=>'/dashboard/vendor', 'as'=>'vendor.'], function() {
    Route::get('/', [VendorController::class, 'index'])->name('index');
    Route::get('/toko', [VendorController::class, 'showProfile'])->name('profile.index');
    Route::resource('product', ProductController::class);
});
