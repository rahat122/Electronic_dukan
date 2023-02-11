<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\SearchController;
use App\Http\Controllers\ProductController;
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

Route::get('/',[HomeController::class,'Home'])->name('home');
Route::post('/login-front',[HomeController::class,'loginFront'])->name('login.front');
Route::post('/registration-front',[HomeController::class,'registrationFront'])->name('registration.front');
Route::get('/logout-fron',[HomeController::class,'logoutFront'])->name('logout.front');



Route::get('/registration',[AuthController::class,'registrationForm'])->name('registration.form');
Route::post('/registration-submit',[AuthController::class,'registrationSubmit'])->name('registration.submit');

Route::get('/admin-login',[AuthController::class,'loginForm'])->name('login.form');
Route::post('/login-submit',[AuthController::class,'loginSubmit'])->name('login.submit');


Route::get('/cart',[CartController::class,'cartDetails'])->name('cart.details');
Route::get('/add-cart{id}',[CartController::class,'addCartPage'])->name('add.cart.page');
Route::get('/cart-delete/{id}',[CartController::class,'deleteCart'])->name('delete.cart');




Route::get('/search',[SearchController::class,'searchBar'])->name('search.bar');









Route::group(["middleware"=>"CheckAdmin"],function(){

    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

    Route::get('/admin-dashboard',[AdminController::class,'dashboard']);
    Route::get('/admin-master',[AdminController::class,'master']);
    Route::get('/admin-newpage',[AdminController::class,'newPage'])->name('admin.newPage');



    Route::get('/customer-list',[CustomerController::class,'customerList'])->name('customer.list');
    Route::get('/customer-create/form',[CustomerController::class,'customerCreate'])->name('customer.create');
    Route::post('/customer-submit',[CustomerController::class,'customerSubmit'])->name('customer.submit');
    Route::get('/customer-edit/{id}',[CustomerController::class,'customerEdit'])->name('customer.edit');
    Route::put('/customer-update/{id}',[CustomerController::class,'customerUpdate'])->name('customer.update');
    Route::get('/customer-delete/{id}',[CustomerController::class,'customerDelete'])->name('customer.delete');


    Route::get('/category-list',[CategoryController::class,'categoryList'])->name('category.list');
    Route::get('/category-create/form',[CategoryController::class,'categoryCreate'])->name('category.create');
    Route::post('/category-submit',[CategoryController::class,'categorySubmit'])->name('category.submit');
    Route::get('/category-edit/{id}',[CategoryController::class,'categoryEdit'])->name('category.edit');
    Route::put('/category-upadte/{id}',[CategoryController::class,'categoryUpdate'])->name('category.update');
    Route::get('/category-delete/{id}',[CategoryController::class,'categoryDelete'])->name('category.delete');



    Route::get('/product-list',[ProductController::class,'productList'])->name('product.list');
    Route::get('/product-create/form',[ProductController::class,'productCreate'])->name('product.create');
    Route::Post('/product-submit',[ProductController::class,'productSubmit'])->name('product.submit');
    Route::get('/product-edit/{id}',[ProductController::class,'productEdit'])->name('product.edit');
    Route::put('/product-update/{id}',[ProductController::class,'productUpdate'])->name('product.update');
    Route::get('/product-delete/{id}',[ProductController::class,'productDelete'])->name('product.delete');



    Route::get('/brand-list',[BrandController::class,'brandList'])->name('brand.list');
    Route::get('/brand-create/form',[BrandController::class,'brandCreate'])->name('brand.create');
    Route::post('/brand-submit',[BrandController::class,'brandSubmit'])->name('brand.submit');
});









