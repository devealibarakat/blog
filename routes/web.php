<?php

use App\Http\Controllers\Dashboard\ArticleContller;
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::get('/', function () {
    return view('layouts.index');
})->name('dashboard.index');

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::group(['prefix' => '/dashboard'], function () {

        Route::get('/', function () {
            return view('dashboard.layouts.master');
        })->name('dashboard.index');
        Route::resource('users', UserController::class)->except('show');
        Route::resource('articles', ArticleContller::class);
    });
});
