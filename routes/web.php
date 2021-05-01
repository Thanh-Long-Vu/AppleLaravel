<?php

use App\Http\Controllers\admin\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/home', [HomeController::class,'index'])->name('home.index');
    Route::get('/warehouse/list', [HomeController::class,'list'])->name('home.list');
    Route::get('/warehouse/create', [HomeController::class,'create'])->name('home.create');
    Route::get('/warehouse/edit', [HomeController::class,'edit'])->name('home.edit');
    Route::get('/product/listproduct', [HomeController::class,'listproduct'])->name('home.listproduct');
    Route::get('/product/createproduct', [HomeController::class,'createproduct'])->name('home.createproduct');
    Route::get('/product/editproduct', [HomeController::class,'editproduct'])->name('home.editproduct');
    Route::get('/category/list', [HomeController::class,'listcategory'])->name('home.listcategory');
    Route::get('/category/edit', [HomeController::class,'editcategory'])->name('home.editcategory');
    Route::get('/category/create', [HomeController::class,'createcategory'])->name('home.createcategory');
    Route::get('/imageproduct/list', [HomeController::class,'listimageproduct'])->name('home.listimageproduct');
    Route::get('/imageproduct/upload', [HomeController::class,'uploadimageproduct'])->name('home.uploadimageproduct');
    Route::get('/ratings', [HomeController::class,'ratings'])->name('home.rating');
    Route::get('/transaction/list', [HomeController::class,'transactionlist'])->name('home.transactionlist');
    Route::get('/transaction/listorder', [HomeController::class,'transactionlistorder'])->name('home.transaction.listorder');
    Route::get('/transaction/detail', [HomeController::class,'transaction.detail'])->name('home.transaction.detail');
    Route::get('/payment/list', [HomeController::class,'paymentlist'])->name('home.payment.list');
    Route::get('/payment/create', [HomeController::class,'paymentcreate'])->name('home.payment.create');
    Route::get('/user/create', [HomeController::class,'usercreate'])->name('home.user.create');
    Route::get('/user/edit', [HomeController::class,'useredit'])->name('home.user.edit');
    Route::get('/role/list', [HomeController::class,'rolelist'])->name('home.role.list');
    Route::get('/transaction/detail', [HomeController::class,'transactiondetail'])->name('transaction.detail');

});
