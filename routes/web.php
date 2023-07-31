<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Posts;
use App\Livewire\CreatePost;
use App\Livewire\EditPost;
use App\Livewire\Home;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',Home::class)->name('home');
Route::get('/posts',Posts::class)->name('posts');
Route::get('/post/create',CreatePost::class)->name('post.create');
Route::get('/post/edit/{post}',EditPost::class)->name('post.edit');