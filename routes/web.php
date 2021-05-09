<?php

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\WareHouseController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProductTypeController;
use App\Http\Controllers\admin\imageProductController;
use App\Http\Controllers\admin\TransactionController;
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
    //Ware House
    Route::get('/home', [HomeController::class,'index'])->name('home.index');
    Route::get('/warehouse', [wareHouseController::class,'index'])->name('warehouse.index');
    Route::get('/warehouse/create', [wareHouseController::class,'create'])->name('warehouse.create');
    Route::post('/warehouse/store', [wareHouseController::class,'postcreate'])->name('warehouse.postcreate');
    Route::get('/warehouse/edit/{id}', [wareHouseController::class,'edit'])->name('warehouse.edit');
    Route::post('/warehouse/edit/{id}', [wareHouseController::class,'update'])->name('warehouse.update');
    Route::get('/warehouse/status/update', [wareHouseController::class,'updateStatus'])->name('updateStatusWareHouse');
    Route::get('/warehouse/delete/{id}', [wareHouseController::class,'delete'])->name('softDeleteWareHouse');
    Route::get('/warehouse/historydelete', [wareHouseController::class,'history'])->name('historyWareHouse');
    Route::get('/warehouse/restorehistorydelete/{id}', [wareHouseController::class,'restore'])->name('restoreWareHouse');
    //Product
    Route::get('/product', [ProductController::class,'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class,'create'])->name('createProduct');
    Route::post('/product/create', [ProductController::class,'store'])->name('storeProduct');
    Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('editProduct');
    Route::post('/product/edit/{id}', [ProductController::class,'update'])->name('updateProduct');
    Route::post('/product/edit/{id}', [ProductController::class,'updateWareHouse'])->name('updateWareHouse');
    Route::get('/product/status/update', [ProductController::class,'updateStatus'])->name('updateStatusProduct');
    Route::get('/product/delete/{id}', [ProductController::class,'delete'])->name('softDeleteProduct');
    Route::get('/product/historydelete', [ProductController::class,'history'])->name('historyProduct');
    Route::get('/product/restorehistory/{id}', [ProductController::class,'restore'])->name('restoreProduct');
    Route::get('/product/getCategory/{id}',[ProductController::class,'getCategory']);
    //Product Type
    Route::get('/producttype', [ProductTypeController::class,'index'])->name('producttype.index');
    Route::get('/producttype/create', [ProductTypeController::class,'create'])->name('createProductType');
    Route::post('/producttype/create', [ProductTypeController::class,'store'])->name('storeProductType');
    Route::get('/producttype/edit/{id}', [ProductTypeController::class,'edit'])->name('editProductType');
    Route::post('/producttype/edit/{id}', [ProductTypeController::class,'update'])->name('updateProductType');
    Route::get('/producttype/status/update', [ProductTypeController::class,'updateStatus'])->name('updateStatusProductType');
    Route::get('/producttype/delete/{id}', [ProductTypeController::class,'delete'])->name('softDeleteProductType');
    Route::get('/producttype/historydelete', [ProductTypeController::class,'history'])->name('historyProductType');
    Route::get('/producttype/restorehistorydelete/{id}', [ProductTypeController::class,'restore'])->name('restoreProductType');

    Route::get('/category', [CategoryController::class,'index'])->name('home.listcategory');
    Route::get('/category/create', [CategoryController::class,'create'])->name('home.createcategory');
    Route::post('/category/create', [CategoryController::class,'store'])->name('home.postcreatecategory');
    Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->name('home.geteditcategory');
    Route::post('/category/edit/{id}', [CategoryController::class,'update'])->name('home.posteditcategory');
    Route::get('/category/status/update', [CategoryController::class,'updateStatus'])->name('updateStatusCategoy');
    Route::get('/category/delete/{id}', [CategoryController::class,'delete'])->name('softDeleteCategory');
    Route::get('/category/historydelete', [CategoryController::class,'history'])->name('historyCategory');
    Route::get('/category/restorehistorydelete/{id}', [CategoryController::class,'restore'])->name('restoreCategory');

    Route::get('/imageproduct', [imageProductController::class,'index'])->name('listImageProduct');
    Route::get('/imageroduct/create', [imageProductController::class,'create'])->name('createImageProduct');
    Route::post('/imageproduct/create', [imageProductController::class,'store'])->name('storeImageProduct');
    // Route::get('/imageproduct/historydelete', [imageProductController::class,'history'])->name('historyImageProduct');
    // Route::get('/imageproduct/restorehistory/{id}', [imageProductController::class,'restore'])->name('restoreImageProduct');

    Route::get('/imageproduct/list', [HomeController::class,'listimageproduct'])->name('home.listimageproduct');
    Route::get('/imageproduct/upload', [HomeController::class,'uploadimageproduct'])->name('home.uploadimageproduct');
    Route::get('/ratings', [HomeController::class,'ratings'])->name('home.rating');
    // Route::get('/transaction/list', [HomeController::class,'transactionlist'])->name('home.transactionlist');
    Route::get('/transaction/listorder', [HomeController::class,'transactionlistorder'])->name('home.transaction.listorder');
    Route::get('/transaction/detail', [HomeController::class,'transaction.detail'])->name('home.transaction.detail');
    Route::get('/payment/list', [HomeController::class,'paymentlist'])->name('home.payment.list');
    Route::get('/payment/create', [HomeController::class,'paymentcreate'])->name('home.payment.create');
    Route::get('/user/create', [HomeController::class,'usercreate'])->name('home.user.create');
    Route::get('/user/edit', [HomeController::class,'useredit'])->name('home.user.edit');
    Route::get('/role/list', [HomeController::class,'rolelist'])->name('home.role.list');
    Route::get('/transaction/detail', [HomeController::class,'transactiondetail'])->name('transaction.detail');
    
    Route::get('/transaction/list', [TransactionController::class,'index'])->name('transactionlist');
    Route::get('/transaction/detail{id}', [TransactionController::class,'orderview'])->name('orderlist');

});
