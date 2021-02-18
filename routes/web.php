<?php

use Illuminate\Support\Facades\Route;

/*
Front End
*/
route::get('/', function (){
    return view('site.home');
})->name('site.home');

route::get('/Futebol', function (){
    return view('site.futebol');
})->name('site.Futebol');

route::get('/Basquete', function (){
    return view('site.basquete');})->name('site.Basquete');

route::get('/volley', function (){
    return view('site.volley');
})->name('site.Volley');

/*
Back End
*/
    Route::get('/',[\App\Http\Controllers\PostsController::class,'index'])->name('posts.index');
Route::get('posts/create',[\App\Http\Controllers\PostsController::class, 'create'])-> name('posts.create');
Route::post('posts',[\App\Http\Controllers\PostsController::class, 'store'])-> name('posts.store');
Route::get('posts/{id}',[\App\Http\Controllers\PostsController::class,'show'])->name ('posts.show');
Route::resource('posts',\App\Http\Controllers\PostsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',[App\Http\Controllers\AuthController::class,'dashboard'])->name('admin');
Route::get('/logout', [App\Http\Controllers\AuthController::class,'logout'])->name('logout');


