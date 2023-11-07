<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
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
Route::get("/articles/{id}",[ArticleController::class,"show"])->name("articles.show");
//
Route::get("/login",[AuthController::class,"login"])->name("login");
Route::post("/login",[AuthController::class,"connexion"])->name("connexion");

