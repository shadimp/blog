<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!php
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
//login page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('blog/admin', function () {
    return view('admin');
})->middleware('auth');


Route::get('blog/category', [CategoryController::class, 'list'])->name('cat-list');
Route::get('/category/{category}/delete', [CategoryController::class, 'del']);

Route::get('/category/{category}/edit', function ($category) {
    $t = Category::query()->where('id', $category)->first();
    return view('category/editcat', ['category' => $t]);
});
Route::post('/Category/update', [CategoryController::class, 'update'])->name('update');

Route::get('/category/create', function () {
    return view('category/createcat');
});
Route::post('/Category/store', [CategoryController::class, 'store'])->name('add');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
