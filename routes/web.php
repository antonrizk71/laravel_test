<?php

use App\Http\Controllers\website\ProductController;
use App\Http\Controllers\website\PostController;
use App\Models\website\Company;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\CompanyController;
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
Route::get('/index/{name}/{email}/{phone?}', function ($name, $email, $phone = null) {
    return view('index', compact("name", "email", "phone"));
});

// post

Route::get('/post', [PostController::class, 'index'])
    ->name('post.index');

Route::get('/post/create', [PostController::class, 'create'])
    ->name('posts.create');

Route::post('/post/store', [PostController::class, 'store'])
    ->name('post.store');


// company

Route::get('/company', [CompanyController::class, 'index'])
    ->name('company.index');

Route::get('/company/show/{id}', [CompanyController::class, 'show'])
    ->name('company.show');
    
Route::get('/company/create', [CompanyController::class, 'create'])
    ->name('company.create');

Route::post('/company/store', [CompanyController::class, 'store'])
    ->name('company.store');

Route::get('/company/edit/{id}', [CompanyController::class, 'edit'])
    ->name('company.edit');

Route::put('/company/update/{id}', [CompanyController::class, 'update'])
    ->name('company.update');

Route::delete('/company/{id}', [CompanyController::class, 'destroy'])
    ->name('company.destroy');


// products

Route::get('/product', [ProductController::class, 'index'])
    ->name('product.index');

Route::get('/product/show/{id}', [ProductController::class, 'show'])
    ->name('product.show');
Route::get('/product/create', [ProductController::class, 'create'])
    ->name('product.create');

Route::post('/product/store', [ProductController::class, 'store'])
    ->name('product.store');

Route::get('/product/edit/{id}', [ProductController::class, 'edit'])
    ->name('product.edit');

Route::put('/product/update/{id}', [ProductController::class, 'update'])
    ->name('product.update');

Route::delete('/product/{id}', [ProductController::class, 'destroy'])
    ->name('product.destroy');
