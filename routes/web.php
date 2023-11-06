<?php

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
Route::get('/articles',function(){
    $articles = [
        [
            "id" => uniqid(),
            "titre" => Str::random(10),
            "description"   => Str::random(50),
            "published" => rand(0,1),
        ],
        [
            "id" => uniqid(),
            "titre" => Str::random(10),
            "description"   => Str::random(50),
            "published" => rand(0,1),
        ],
        [
            "id" => uniqid(),
            "titre" => Str::random(10),
            "description"   => Str::random(50),
            "published" => rand(0,1),
        ]   
    ];
    // return view('articles',[
    //     "articles" => $articles
    // ]);
    return view("articles.index", compact("articles"));


    // compact("articles"); => ["articles"=>$articles]
});
