<?php

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

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['prefix' => 'categories', 'as' => 'category.'], function () {
    Route::get('/', \App\Http\Controllers\Category\IndexController::class)->name('index');
    Route::get('/create', \App\Http\Controllers\Category\CreateController::class)->name('crate');
    Route::post('/', \App\Http\Controllers\Category\StoreController::class)->name('store');
    Route::get('/{category}/edit', \App\Http\Controllers\Category\EditController::class)->name('edit');
    Route::get('/{category}', \App\Http\Controllers\Category\ShowController::class)->name('show');
    Route::patch('/{category}', \App\Http\Controllers\Category\UpdateController::class)->name('update');
    Route::delete('/{category}', \App\Http\Controllers\Category\DeleteController::class)->name('delete');
});
