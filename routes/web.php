<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('home');
})->name('home');
//
Route::get('/articles',[ArticleController::class,"index"])->name("articles.index");
Route::get("/articles/new",[ArticleController::class,"create"])->name("articles.create");
Route::post("/articles",[ArticleController::class,"store"])->name("articles.store");
Route::get("/articles/{id}",[ArticleController::class,"show"])->name("articles.show");
Route::get("/articles/{article}/edit",[ArticleController::class,"edit"])->name("articles.edit");
Route::post("/articles/{id}/edit",[ArticleController::class,"update"])->name("articles.update");
Route::get("/articles/{id}/delete",[ArticleController::class,"delete"])->name("articles.delete");
//
Route::controller(CategoryController::class)
    ->name('categories.')
    ->group(function(){
        Route::get('/categories','index')->name('index');
        Route::get('/categories/{id}/articles','show')->name('show');
    });
//
Route::get("/login",[AuthController::class,"login"])->name("login");
Route::post("/login",[AuthController::class,"connexion"])->name("connexion");
//
