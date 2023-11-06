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

///Creer une route : /hello qui retourne une vue
// qui affiche le message : Bonjour, ca marche 
// Le message sera dans une balise titre de niveau 1
/*
etape 1: creer la vue
etape 2: creer la route
*/
Route::get('/hello', function(){
    return view('hello');
})->name('hello0');
//Refaire le meme exo mais sans vue
Route::get('/hello-sans-vue',function(){
    return "<h1>
                Hello, it works, without view!
            </h1>
            <p>Voici un paragraphe.</p>
            ";
})->name('hello1');;
//
Route::get('/hello-nom',function(){
    $name = "Aly Tall Niang";

    return "<h1>Hello $name</h1>";
})->name('hello2');;
//
// Route::get('/hello-nom/{name}/{age}',function($name,$age){
//     return "<h1>Hello $name, you are $age</h1>";
// });
//Avec une vue
Route::get('/hello-nom/{name}/{age}',function($name,$age){
    return view('hello-nom',[
        'name'  => $name,
        'age'   => $age
    ]);
})->name('hello3');


Route::get("/test",function(){
    return view('test');
});