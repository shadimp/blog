<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewscontentController;
use App\Http\Controllers\NewsimageController;
use App\Models\Category;
use App\Models\newscontent;
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

Route::get('/mainpage', [NewscontentController::class, 'mainshow'])->name('mainpage');
Route::get('blog/admin', function () {
    return view('admin');
})->name('admin')->middleware('auth');


Route::get('blog/category', [CategoryController::class, 'list'])->name('cat-list')->middleware('auth');
Route::get('/category/{category}/delete', [CategoryController::class, 'del'])->middleware('auth');

Route::get('/category/{category}/edit', function ($category) {
    $t = Category::query()->where('id', $category)->first();
    return view('category/editcat', ['category' => $t]);
})->middleware('auth');
Route::post('/Category/update', [CategoryController::class, 'update'])->name('update')->middleware('auth');

Route::get('/category/create', function () {
    return view('category/createcat');
})->middleware('auth');
Route::post('/Category/store', [CategoryController::class, 'store'])->name('add')->middleware('auth');

Route::get('/content/list', [NewscontentController::class, 'list'])->name('content-list');
Route::post('/content/store', [NewscontentController::class, 'store'])->name('add-content')->middleware('auth');
Route::get('/content/{content}/delete', [NewscontentController::class, 'del'])->middleware('auth');
Route::get('/content/{content}/edit', function ($content) {
    $t = newscontent::query()->where('id', $content)->first();
    return view('content/editcontent', ['content' => $t]);
})->middleware('auth');
Route::post('/content/update', [NewscontentController::class, 'update'])->name('content-update')->middleware('auth');

Route::get('content/{content}/details',[NewscontentController::class, 'showdetails']);

Route::post('/image/store',[NewsimageController::class ,'store'])->name('image-store');

Route::post('/gallery/store',[GalleryController::class ,'store'])->name('gallery-store');
Route::get('/gallery', [GalleryController::class, 'list'])->name('gallery');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
