<?php

use App\Http\Controllers\Dashboard\{CategoryController, ArticleController, AuthorController, TagsController, UserController};
use App\Http\Controllers\WebsiteController;
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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale()
    ],
    function () {
        Route::group(['prefix' => 'dashboard'], function () {
            Route::get('/', function () {
                return view('dashboard.layouts.index');
            })->name('dashboard.index');

            Route::resource('users', UserController::class);
            Route::resource('authors', AuthorController::class);
            Route::get('articles/check_slug', [ArticleController::class, 'checkSlug'])->name('articles.checkSlug');
            Route::resource('articles', ArticleController::class);
            Route::resource('tags', TagsController::class)->except('show');
            Route::resource('categories', CategoryController::class);
        });
        Route::get('/', [WebsiteController::class, 'index']);
        Route::get('/article/{slug}', [WebsiteController::class, 'show'])->name('show');
    }
);
