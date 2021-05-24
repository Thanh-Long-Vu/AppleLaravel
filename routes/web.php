<?php

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\WareHouseController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProductTypeController;
use App\Http\Controllers\admin\imageProductController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\Auth\LoginController;
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


//Auth::routes();
//Authentication
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/producttype', [App\Http\Controllers\HomeController::class, 'productype'])->name('productype');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');
Route::get('/checkout', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
Route::get('/track-your-order', [App\Http\Controllers\HomeController::class, 'track_your_order'])->name('track_your_order');
Route::get('/NotFound', [App\Http\Controllers\HomeController::class, 'NotFound'])->name('NotFound');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'Contact'])->name('contact');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'Blog'])->name('blog');
Route::get('/blog-detail', [App\Http\Controllers\HomeController::class, 'Blogdetail'])->name('Blogdetail');
Route::get('/categories/{category}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');
Route::get('/products/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');

Route::prefix('admin')->middleware(['auth','admin'])->group(function () {
    //Ware House
    Route::get('/home', [HomeController::class,'index'])->name('home.index');
    Route::get('/warehouse', [WareHouseController::class,'index'])->name('warehouse.index');
    Route::get('/warehouse/create', [WareHouseController::class,'create'])->name('warehouse.create');
    Route::post('/warehouse/store', [WareHouseController::class,'postcreate'])->name('warehouse.postcreate');
    Route::get('/warehouse/edit/{id}', [WareHouseController::class,'edit'])->name('warehouse.edit');
    Route::post('/warehouse/edit/{id}', [WareHouseController::class,'update'])->name('warehouse.update');
    Route::get('/warehouse/status/update', [WareHouseController::class,'updateStatus'])->name('updateStatusWareHouse');
    Route::get('/warehouse/delete/{id}', [WareHouseController::class,'delete'])->name('softDeleteWareHouse');
    Route::get('/warehouse/historydelete', [WareHouseController::class,'history'])->name('historyWareHouse');
    Route::get('/warehouse/restorehistorydelete/{id}', [WareHouseController::class,'restore'])->name('restoreWareHouse');
    //Product
    Route::get('/product', [ProductController::class,'index'])->name('product.index');
    Route::get('/product/create/{id}', [ProductController::class,'create'])->name('createProduct');
    Route::post('/product/create/{id}', [ProductController::class,'store'])->name('storeProduct');
    Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('editProduct');
    Route::post('/product/edit/{id}', [ProductController::class,'update'])->name('updateProduct');
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

    Route::get('/imageproduct/{id}', [imageProductController::class,'index'])->name('viewImageProduct');
    Route::get('/imageroduct/create', [imageProductController::class,'create'])->name('createImageProduct');
    Route::post('/imageproduct/create', [imageProductController::class,'store'])->name('storeImageProduct');
    Route::get('/imageproduct/delete/{id}', [imageProductController::class,'delete'])->name('deleteImageProduct');
    Route::get('/imageproduct/offStatus/{id}', [imageProductController::class,'offStatus'])->name('offStatus');
    Route::get('/imageproduct/OnlStatus/{id}', [imageProductController::class,'OnlStatus'])->name('OnlStatus');

    Route::get('/imageproduct/upload', [HomeController::class,'uploadimageproduct'])->name('home.uploadimageproduct');
    Route::get('/ratings', [HomeController::class,'ratings'])->name('home.rating');

    Route::get('/transaction/listorder', [HomeController::class,'transactionlistorder'])->name('home.transaction.listorder');
    Route::get('/transaction/detail', [HomeController::class,'transaction.detail'])->name('home.transaction.detail');
    Route::get('/payment/list', [HomeController::class,'paymentlist'])->name('home.payment.list');
    Route::get('/payment/create', [HomeController::class,'paymentcreate'])->name('home.payment.create');
    Route::get('/user/create', [HomeController::class,'usercreate'])->name('home.user.create');
    Route::get('/user/edit', [HomeController::class,'useredit'])->name('home.user.edit');
    Route::get('/role/list', [HomeController::class,'rolelist'])->name('home.role.list');

    Route::get('/transaction/list', [TransactionController::class,'index'])->name('transactionlist');
    Route::get('/transaction/detail{id}', [TransactionController::class,'orderview'])->name('orderlist');
    Route::get('/transaction/change/status/{id}', [TransactionController::class,'changeStatus'])->name('changeStatusTransaction');
    Route::get('/transaction/status/update', [TransactionController::class,'updateStatus'])->name('updateStatusTransaction');

    Route::get('/slider', [SliderController::class,'index'])->name('sliderlist');
    Route::get('/slider/create', [SliderController::class,'create'])->name('sliderCreate');
    Route::post('/slider/create', [SliderController::class,'store'])->name('sliderStore');
    Route::get('/slider/edit/{id}', [SliderController::class,'edit'])->name('editSlider');
    Route::post('/slider/edit/{id}', [SliderController::class,'update'])->name('updateSilder');
    Route::get('/slider/delete/{id}', [SliderController::class,'delete'])->name('deleteSlider');
    Route::get('/slider/status/update', [SliderController::class,'updateStatus'])->name('updateStatusSlider');

    Route::get('/blogs/list', [BlogController::class,'index'])->name('admin.blog.list.get');
    Route::get('/blogs/create', [BlogController::class,'create'])->name('admin.blog.create.get');
    Route::post('/blogs/create', [BlogController::class,'store'])->name('admin.blog.create.post');
    Route::get('/blogs/edit/{id}', [BlogController::class,'edit'])->name('admin.blog.edit.get');
    Route::post('/blogs/edit/{id}', [BlogController::class,'update'])->name('admin.blog.edit.post');
    Route::get('/blogs/delete/{id}', [BlogController::class,'delete'])->name('admin.blog.delete');


});
