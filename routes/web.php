<?php

use App\Http\Controllers\ArticlesController;
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
    return view('welcome');
});
Route::get('/about',function(){
    return view('about',[
        'articles'=>App\Models\Article::latest()->take(3)->get()
    ]);
});

Route::controller(ArticlesController::class)->group(function(){
    Route::get('/articles/{article}','show');
});

Route::get('/articles',function(){
    return view('articles',[
        'articles'=>App\Models\Article::latest()->get()
    ]);
});