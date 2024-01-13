<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/posts',[PostController::class,'index'])->name(name: 'posts.index');
Route::get('posts/create',[PostController::class,'create'])->name(name:'posts.create');
Route::post('/posts',[PostController::class,'store'])->name(name: 'posts.store');
Route::put('/posts/{post}',[PostController::class,'update'])->name('posts.update');
Route::get('/posts/{post}/edit',[PostController::class,'edit'])->name('posts.edit');
Route::get('posts/{post}',[PostController::class ,'show'])->name(name: 'posts.show');
Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');

Route::get('/test/ok/somthing/anotherthing/anotherone/fine',[PostController::class ,function(){return 'in tes rn';}])->name(name:'test');
