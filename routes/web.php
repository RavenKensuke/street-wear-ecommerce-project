<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController as ProductFront;
use App\Http\Controllers\CategoryListController;
use Illuminate\Support\Facades\Route;

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



Route::group(['middleware' => 'admin'], function () {

    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard']);


    Route::get('/admin/admin/list', [AdminController::class, 'list']);
    Route::get('/admin/admin/add', [AdminController::class, 'add']);
    Route::post('/admin/admin/add', [AdminController::class, 'insert']);
    Route::get('/admin/admin/edit/{id}', [AdminController::class, 'edit']);
    Route::post('/admin/admin/edit/{id}', [AdminController::class, 'update']);
    Route::get('/admin/admin/delete/{id}', [AdminController::class, 'delete']);


    Route::get('/admin/category/list', [CategoryController::class, 'list']);
    Route::get('/admin/category/add', [CategoryController::class, 'add']);
    Route::post('/admin/category/add', [CategoryController::class, 'insert']);
    Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit']);
    Route::post('/admin/category/edit/{id}', [CategoryController::class, 'update']);
    Route::get('/admin/category/delete/{id}', [CategoryController::class, 'delete']);


    Route::get('/admin/brand/list', [BrandController::class, 'list']);
    Route::get('/admin/brand/add', [BrandController::class, 'add']);
    Route::post('/admin/brand/add', [BrandController::class, 'insert']);
    Route::get('/admin/brand/edit/{id}', [BrandController::class, 'edit']);
    Route::post('/admin/brand/edit/{id}', [BrandController::class, 'update']);
    Route::get('/admin/brand/delete/{id}', [BrandController::class, 'delete']);

    Route::get('/admin/color/list', [ColorController::class, 'list']);
    Route::get('/admin/color/add', [ColorController::class, 'add']);
    Route::post('/admin/color/add', [ColorController::class, 'insert']);
    Route::get('/admin/color/edit/{id}', [ColorController::class, 'edit']);
    Route::post('/admin/color/edit/{id}', [ColorController::class, 'update']);
    Route::get('/admin/color/delete/{id}', [ColorController::class, 'delete']);

    Route::get('/admin/product/list', [ProductController::class, 'list']);
    Route::get('/admin/product/add', [ProductController::class, 'add']);
    Route::post('/admin/product/add', [ProductController::class, 'insert']);
    Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit']);
    Route::post('/admin/product/edit/{id}', [ProductController::class, 'update']);
    Route::get('/admin/product/image_delete/{id}', [ProductController::class, 'image_delete']);

});


Route::get('/admin', [AuthController::class, 'login']);
Route::post('/admin', [AuthController::class, 'AdminLogin']);
Route::get('/admin/logout', [AuthController::class, 'AdminLogout']);

Route::get('/', [HomeController::class, 'home']);
// Route::get('/category', [ProductFront::class, 'home']);
Route::get('/{category?}/{gender?}', [ProductFront::class, 'getCategoryGender']);






